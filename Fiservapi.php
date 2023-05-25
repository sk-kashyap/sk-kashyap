<?php function gen_uuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

        // 16 bits for "time_mid"
        mt_rand( 0, 0xffff ),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand( 0, 0x0fff ) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand( 0, 0x3fff ) | 0x8000,

        // 48 bits for "node"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}
function generateMessageSignature($apiKey, $apiSecret, $clientRequestId, $timestamp, $content) {
    // Concatenate the message components in the desired order
    $message = $apiKey . $clientRequestId . $timestamp . $content;

    // Generate the HMAC hash using SHA256 and API Secret as the key
    $signature = hash_hmac('sha256', $message, $apiSecret, true);

    // Base64 encode the HMAC hash
    $encodedSignature = base64_encode($signature);

    return $encodedSignature;
}
function getCurrentTimestamp() {
    $microseconds = microtime(true);
    $milliseconds = round($microseconds * 1000);
    return $milliseconds;
}

add_action( 'init', 'process_postt' );

function process_postt() {
	
	
		$data = '{
		  "transactionAmount": {
			"total": 12.04,
			"currency": "EUR"
		  },
		  "order": {
			"basket": {
			  "productStock": "check"
			},
			"recurringPaymentDetails": {
			  "additionalRecurringData": {
				"amountIndicator": "VARIABLE_AMOUNT",
				"validationIndicator": false
			  }
			}
		  },
		  "paymentMethod": {
			"paymentCard": {
			  "expiryDate": {
				"month": "10",
				"year": "24"
			  },
			  "number": "4761739001010010",
			  "securityCode": "002"
			}
		  },
		  "requestType": "PaymentCardSaleTransaction",
		  "storedCredentials": {
			"sequence": "FIRST",
			"scheduled": true
		  }
		}';
	
	$key = "Rxk0uHLsp9fuqFFg8HGrjt8LL3UCtZOJ";
	$secret = "GSR1LQLPAJKgZH5L9ddDgQrmAyAwndPPyx6Ijk2J6GY";
	echo $clientRequestId = gen_uuid();
	echo "<br>";
	echo $Timestamp = getCurrentTimestamp();
	echo "<br>";
	echo $signaturresponse = generateMessageSignature($key, $secret, $clientRequestId, $Timestamp,$data);
	echo "<br>";
		

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://prod.emea.api.fiservapps.com/sandbox/ipp/payments-gateway/v2/payments",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => [
    "Api-Key: ".$key,
    "Client-Request-Id: ".$clientRequestId,
    "Content-Type: application/json",
    "Message-Signature: ".$signaturresponse,
    "Timestamp: ".$Timestamp,
    "accept: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
	echo "<pre>";
  print_r( json_decode($response,true));
  echo "</pre>";
}
exit;
}
