<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Example</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Customize your chat styles here */
        body, html {
            height: 100%;
        }
        #chat-container {
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        #chat-messages {
            flex: 1;
            overflow-y: auto;
        }
        .message {
            background-color: #f0f0f0;
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
            margin: 0.5rem;
            max-width: 70%;
            word-wrap: break-word;
        }
        .user-message {
            background-color: #2ecc71;
            color: white;
            align-self: flex-end;
        }
        .input-container {
            display: flex;
            align-items: center;
            padding: 0.5rem;
        }
        #message-input {
            flex: 1;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 0.5rem;
            margin-right: 0.5rem;
        }
        #send-button {
            background-color: #2ecc71;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div id="chat-container" class="bg-white rounded-lg shadow-lg">
        <div id="chat-messages" class="p-4">
            <!-- Messages will be displayed here -->
        </div>
        <div class="input-container bg-gray-200">
            <input type="text" id="message-input" placeholder="Type a message" class="flex-grow px-3 py-2 rounded-md border">
            <button id="send-button" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">
                Send
            </button>
        </div>
    </div>

    <script>
        const chatMessages = document.getElementById('chat-messages');
        const messageInput = document.getElementById('message-input');
        const sendButton = document.getElementById('send-button');

        sendButton.addEventListener('click', () => {
            const messageText = messageInput.value.trim();

            if (messageText !== '') {
                // Create a new message element
                const messageElement = document.createElement('div');
                messageElement.textContent = messageText;
                messageElement.classList.add('message', 'user-message');

                // Append the message to the chat container
                chatMessages.appendChild(messageElement);

                // Clear the input field
                messageInput.value = '';

                // Scroll to the bottom of the chat
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
        });
    </script>
</body>
</html>

