<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Chatting</h2>
        <div class="row">
            <div class="col-md-4">
                <h4>Users</h4>
                <ul class="list-group">
                    @foreach ($users as $user)
                        <li class="list-group-item" data-id="{{ $user->id }}">{{ $user->username }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-8">
                <h4>Messages</h4>
                <div class="chat-box border rounded p-3" style="height: 300px; overflow-y: auto;" id="chatBox">
                    <!-- Messages will appear here -->
                </div>
                <form id="chatForm" class="mt-3">
                    <input type="hidden" id="receiverId" value="">
                    <div class="input-group">
                        <input type="text" id="message" class="form-control" placeholder="Type a message" required>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const chatForm = document.getElementById('chatForm');
        const messageInput = document.getElementById('message');
        const chatBox = document.getElementById('chatBox');
        const receiverIdInput = document.getElementById('receiverId');

        document.querySelectorAll('.list-group-item').forEach(item => {
            item.addEventListener('click', function () {
                const userId = this.getAttribute('data-id');
                receiverIdInput.value = userId;
                loadMessages(userId);
            });
        });

        chatForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const message = messageInput.value;
            const receiverId = receiverIdInput.value;

            axios.post('/send-message', {
                receiver_id: receiverId,
                message: message
            }).then(() => {
                messageInput.value = '';
                loadMessages(receiverId);
            });
        });

        function loadMessages(receiverId) {
            axios.get(`/messages/${receiverId}`).then(response => {
                chatBox.innerHTML = '';
                response.data.messages.forEach(msg => {
                    const messageDiv = document.createElement('div');
                    messageDiv.textContent = msg.message;
                    messageDiv.className = msg.sender_id == {{ auth()->id() }} ? 'text-end mb-2' : 'text-start mb-2';
                    chatBox.appendChild(messageDiv);
                });
            });
        }
    </script>
</body>
</html>
