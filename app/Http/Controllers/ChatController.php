<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    /**
     * Tampilkan halaman chatting dengan daftar pengguna lain.
     */
    public function index()
    {
        // Pastikan pengguna terautentikasi
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        // Ambil semua pengguna kecuali yang sedang login
        $users = User::where('id', '!=', Auth::id())->get();

        return view('chat', compact('users'));
    }

    /**
     * Kirim pesan ke pengguna lain.
     */
    public function sendMessage(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message'     => 'required|string|max:1000',
        ]);

        // Pastikan pengguna terautentikasi
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Simpan pesan
        Chat::create([
            'sender_id'   => Auth::id(),
            'receiver_id' => $validated['receiver_id'],
            'message'     => $validated['message'],
        ]);

        return response()->json(['message' => 'Message sent successfully'], 201);
    }

    /**
     * Ambil semua pesan antara pengguna yang sedang login dan pengguna lain.
     */
    public function getMessages($receiverId)
    {
        // Pastikan pengguna terautentikasi
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Ambil pesan dari database
        $messages = Chat::where(function ($query) use ($receiverId) {
            $query->where('sender_id', Auth::id())
                  ->where('receiver_id', $receiverId);
        })->orWhere(function ($query) use ($receiverId) {
            $query->where('sender_id', $receiverId)
                  ->where('receiver_id', Auth::id());
        })->orderBy('created_at', 'asc')->get();

        return response()->json(['messages' => $messages], 200);
    }
}
