<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Real-Time Currency Converter</title>
</head>
<body>
  <h1>Real-Time Currency Converter</h1>
  <form id="converter">
    <label for="from">From:</label>
    <select id="from" name="from">
      <option value="USD">USD</option>
      <option value="EUR">EUR</option>
      <option value="JPY">JPY</option>
      </select>
    <label for="amount">Amount:</label>
    <input type="number" id="amount" name="amount" min="0" value="100">
    <label for="to">To:</label>
    <select id="to" name="to">
      <option value="USD">USD</option>
      <option value="EUR">EUR</option>
      <option value="JPY">JPY</option>
      </select>
    <button type="submit">Convert</button>
  </form>
  <p id="result"></p>

  <script>
    const form = document.getElementById('converter');
    const result = document.getElementById('result');

    const API_KEY = 'de5514b4618de89062f55e24'; // Replace with your currency API key
    const API_URL = `https://api.exchangerate-api.com/v1/latest?base=`;

    form.addEventListener('submit', async (event) => {
      event.preventDefault();

      const from = document.getElementById('from').value;
      const to = document.getElementById('to').value;
      const amount = document.getElementById('amount').value;

      try {
        const response = await fetch(`${API_URL}${from}`);
        const data = await response.json();
        const rate = data.rates[to];

        const convertedAmount = amount * rate;
        result.textContent = `${amount} ${from} = ${convertedAmount.toFixed(2)} ${to}`;
      } catch (error) {
        console.error(error);
        result.textContent = 'Error fetching conversion rate.';
      }
    });
  </script>
</body>
</html>
