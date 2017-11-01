<?php
		require __DIR__.'/vendor/autoload.php';
		$pagarMe = new \PagarMe\Sdk\PagarMe('SUA_API_KEY');
		try{
			$transaction = $pagarMe->transaction()->get($_POST['token']);
			$pagarMe->transaction()->capture($transaction,1000);
		} catch(Exception $ex){
			  echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
		}
?>
