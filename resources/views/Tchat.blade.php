<x-layout>
    <div class="container mx-auto px-4 py-8 h-screen flex flex-col">
        <div class="bg-white border border-gray-300 rounded-lg shadow-md overflow-hidden flex flex-col h-full">
            <!-- Header -->
            <div class="bg-[#D99748] px-4 py-3 border-b border-gray-300">
                <h2 class="text-lg font-semibold text-white">Chat</h2>
            </div>
            <!-- Messages -->
            <div id="messageList" class="message-container px-4 py-6 space-y-4 flex-1 overflow-y-auto">
                <!-- Messages will be dynamically added here -->
            </div>
            <!-- Input box -->
            <form id="messageForm" class="bg-gray-100 px-4 py-3 border-t border-gray-300 flex items-center">
                <input id="message_input" type="text"
                    class="w-full px-3 py-2 mr-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                    placeholder="Type your message..." required>
                <button type="submit"
                    class="px-4 py-2 bg-[#4B2579] text-white rounded-lg hover:bg-[#652FAF] focus:outline-none">Send</button>
            </form>
        </div>
    </div>

    <script>
        const restrictedWords = ['uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve'];

        document.getElementById('message_input').addEventListener('input', function(event) {
            var input = event.target;
            var value = input.value;
            var regex = /^[A-Za-z\s]*$/;

            if (!regex.test(value)) {
                input.value = value.replace(/[^A-Za-z\s]/g, '');
            }

            const words = value.split(/\s+/);
            const filteredWords = words.filter(word => !restrictedWords.includes(word.toLowerCase()) && !/\d/.test(
                word));
            input.value = filteredWords.join(' ');
        });

        document.addEventListener('DOMContentLoaded', function() {
            const messageForm = document.getElementById('messageForm');
            const messageInput = document.getElementById('message_input');
            const messageList = document.getElementById('messageList');

            // Submit message form
            messageForm.addEventListener('submit', function(event) {
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

    <!-- Optional: Include AlpineJS for interactivity -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</x-layout>
