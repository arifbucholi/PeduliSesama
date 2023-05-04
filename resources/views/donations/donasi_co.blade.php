<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{config('midtrans.client_key')}}"></script>
</head>
<body>
{{--    TODO: Update view sesuai template--}}
    <button id="donate-btn">Donate Now!</button>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('donate-btn');
        payButton.addEventListener('click', function () {
            // Trigger snap popup. TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{$snapToken}}', {
                onSuccess: function(result){
                    /* You may add your own implementation here */
                    window.location('/donations/user-donation');
                    alert("payment success!"); console.log(result);
                },
                onPending: function(result){
                    /* You may add your own implementation here */
                    alert("wating your payment!"); console.log(result);
                },
                onError: function(result){
                    /* You may add your own implementation here */
                    alert("payment failed!"); console.log(result);
                },
                onClose: function(){
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>
</body>
</html>
