<!DOCTYPE html>
<html>
<head>
	<title>Chatbot</title>
	<style>
		/* Styling the chatbot container */
		.chatbot-container {
			width: 400px;
			background-color: #f0f0f0;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		
		/* Styling the chatbot header */
		.chatbot-header {
			background-color: #333;
			color: #fff;
			padding: 10px;
			border-bottom: 1px solid #333;
		}
		
		/* Styling the chatbot messages */
		.chatbot-messages {
			padding: 20px;
			overflow-y: auto;
			height: 300px;
		}
		
		/* Styling individual messages */
		.message {
			margin-bottom: 20px;
		}
		
		.message-text {
			font-size: 18px;
		}
		
		.message-author {
			font-size: 16px;
			color: #666;
		}
		
		/* Styling the user input field and send button */
		.user-input {
			width: 75%;
			height: 30px;
			padding: 10px;
			border: 1px solid #ccc;
		}
		
		.send-button {
			width: 23%;
			height: 30px;
			padding: 10px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="chatbot-container">
		<div class="chatbot-header">Chatbot</div>
		<div class="chatbot-messages"></div>
		<input class="user-input" type="text" placeholder="Ask me something...">
		<button class="send-button">Send</button>
	</div>
	
	<script>
		class Chatbot {
			constructor(container) {
				this.container = container;
				this.messagesDiv = container.querySelector('.chatbot-messages');
				this.userInputField = container.querySelector('.user-input');
				this.sendButton = container.querySelector('.send-button');
				
				this.sendButton.addEventListener('click', () => {
					const userInput = this.userInputField.value;
					const aiResponse = this.getAIResponse(userInput);
					this.addMessageToChat(userInput, 'user');
					this.addMessageToChat(aiResponse, 'chatbot');
					this.userInputField.value = ''; // Clear the input field
				});
			}
			
			getAIResponse(userInput) {
				// Advanced AI logic to respond to user input
				if (userInput.includes('hello')) {
					return 'Hello! How can I assist you today?';
				} else if (userInput.includes('help')) {
					return 'I can help you with any questions or concerns. What would you like to know?';
				} else {
					return 'I didn\'t understand that. Can you please rephrase?';
				}
			}
			
			addMessageToChat(message, author) {
				const messageHTML = `
					<div class="message">
						<span class="message-author">${author}:</span>
						<span class="message-text">${message}</span>
					</div>
				`;
				this.messagesDiv.innerHTML += messageHTML;
				this.messagesDiv.scrollTop = this.messagesDiv.scrollHeight;
			}
		}
		
		const chatbotContainer = document.querySelector('.chatbot-container');
		const chatbot = new Chatbot(chatbotContainer);
	</script>
</body>
</html>
