<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form id="payment-form">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="number" name="amount" placeholder="Amount (INR)" required>
        <button type="submit" id="pay-now">Pay and Register</button>
    </form>
    
    <script>
        document.getElementById('payment-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/initiate-payment');
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response && response.checkout_url) {
                        window.location.href = response.checkout_url;
                    } else {
                        console.error('Invalid response from server.');
                    }
                } else {
                    console.error('Request failed: ' + xhr.statusText);
                }
            };
            xhr.onerror = function() {
                console.error('Request failed: Network error.');
            };
            xhr.send(formData);
        });
    </script>
    
    
</body>
</html>

