<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Text Captcha Example</title>
</head>
<body>
  <h1>Text Captcha</h1>
  <div id="captcha-container">
    <p>Enter the text you see in the image:</p>
    <img id="captcha-image" src="captcha.jpeg" alt="Captcha Image">
    <input type="text" id="captcha-text">
    <button type="button" id="submit-button">Submit</button>
  </div>

  <script type="text/javascript">
    const captchaImage = document.getElementById('captcha-image');
const captchaText = document.getElementById('captcha-text');
const submitButton = document.getElementById('submit-button');

// Replace with your function to generate random text (optional for more secure captcha)
function generateCaptchaText() {
  const textLength = 6; // adjust as needed
  const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  let captcha = '';
  for (let i = 0; i < textLength; i++) {
    captcha += characters.charAt(Math.random() * characters.length);
  }
  return captcha;
}

// Function to update captcha (use pre-generated text for simplicity)
function updateCaptcha() {
  captchaText.value = ''; // Clear the input field
  const captcha = "SampleText"; // Replace with your generated text (if using generateCaptchaText())
  captchaImage.src = "captcha.jpg?" + Math.random(); // Add random param to prevent caching
}

// Event listener for submit button
submitButton.addEventListener('click', () => {
  if (captchaText.value.toLowerCase() === captcha.toLowerCase()) {
    alert('Form submitted successfully!');
  } else {
    alert('Incorrect captcha text!');
    updateCaptcha(); // Generate new captcha
  }
});

// Initial captcha generation
updateCaptcha();

    </script>
</body>
</html>
