<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;
use App\Models\Masyarakat;
use App\Models\Dokter;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat data user terlebih dahulu
        $user = User::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            // 'role' => 'admin',
        ]);
    
        // Membuat data admin yang terhubung dengan user_id
        Admin::create([
            'user_id' => $user->id,
            'nama' => 'Admin Sistem',
            'telepon' => '081234567890',
        ]);
    }
}
