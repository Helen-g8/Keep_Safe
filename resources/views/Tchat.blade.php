<x-layout>

<div class="container mx-auto px-4 py-8">
        <div class="bg-white border border-gray-300 rounded-lg shadow-md overflow-hidden max-w-md mx-auto">
            <!-- Header -->
            <div class="bg-gray-200 px-4 py-3 border-b border-gray-300">
                <h2 class="text-lg font-semibold text-gray-800">Chat</h2>
            </div>
            <!-- Messages -->
            <div id="messageList" class="message-container px-4 py-6 space-y-4">
                <!-- Messages will be dynamically added here -->
            </div>
            <!-- Input box -->
            <form id="messageForm" class="bg-gray-100 px-4 py-3 border-t border-gray-300 flex items-center">
                <input id="messageInput" type="text"
                    class="w-full px-3 py-2 mr-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                    placeholder="Type your message...">
                <button type="submit"
                    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">Send</button>
            </form>
        </div>
    </div>

    <!-- Optional: Include AlpineJS for interactivity -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    <!-- JavaScript to handle message sending (assuming backend handling is separate) -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const messageForm = document.getElementById('messageForm');
            const messageInput = document.getElementById('messageInput');
            const messageList = document.getElementById('messageList');

            // Submit message form
            messageForm.addEventListener('submit', function (event) {
                event.preventDefault();
                const message = messageInput.value.trim();
                if (message !== '') {
                    addMessage(message);
                    messageInput.value = '';
                }
            });

            // Function to add a message to the chat interface
            function addMessage(message) {
                const messageItem = `
                    <div class="px-4 py-2 bg-gray-100 rounded-lg">
                        <p class="text-gray-800">${message}</p>
                    </div>
                `;
                messageList.insertAdjacentHTML('beforeend', messageItem);
                // Optionally, scroll to the bottom to show the latest message
                messageList.scrollTop = messageList.scrollHeight;
            }
        });
    </script>

</x-layout>