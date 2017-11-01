<html>
	<head> 
		<title> Checkout PagarMe </title>
	</head>
	<body>
		<form method="POST" action="/capturar.php">
		    <script type="text/javascript"
		        src="https://assets.pagar.me/checkout/checkout.js"
		        data-button-text="Pagar"
		        data-encryption-key="SUA_ENCRYPTION_KEY"
		        data-amount="1000"
		        data-customer-data="true"
		        data-payment-methods="boleto,credit_card"
		        data-ui-color="#bababa"k
		        data-create-token="true"
		        data-interest-rate="12"
		        data-free-installments="3"
		        data-default-installment="1"
		        data-header-text="Título"
		        data-button-text="Pagar agora!">
		    </script>
		</form>
	</body>
</html>
