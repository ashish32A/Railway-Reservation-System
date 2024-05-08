<!DOCTYPE html>
<html>
<head>
  <title>Cashfree - Signature Generator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body onload="document.formSubmit.submit()">
<?php 

   // Database configuration  
   require_once "assets/inc/config.php";

   // Include Cashfree Configuration
   require_once "assets/inc/cashfree-config.php";

   $mode = "TEST"; //<------------ Change to TEST for test server, PROD for production

   extract($_POST);
   
   if(isset($_POST['formSubmit'])) {
    $pass_farecode = $_POST['orderId'];
   $query="update  orrs_passenger set pass_fare_payment_code = ? where pass_id=?";
            $stmt = $mysqli->prepare($query); //prepare sql and bind it later
            $rc=$stmt->bind_param('i', $pass_farecode, $aid);
            $stmt->execute();
   }

   $secretKey = SECRECTKEY; // Secret key from cashfree-config.php

   // create order Id by using mt_rand function
   $orderId = "WC".mt_rand(11111, 99999);

   $postData = array( 
     "appId" => $appId, 
     "orderId" => $orderId, 
     "orderAmount" => $orderAmount, 
     "orderCurrency" => $orderCurrency,
     "customerName" => $customerName, 
        "customerPhone" => $customerPhone, 
     "customerEmail" => $customerEmail,
     "returnUrl" => $returnUrl, 
     "notifyUrl" => $notifyUrl,
   );

   ksort($postData);
   $signatureData = "";
   foreach ($postData as $key => $value){
      $signatureData .= $key.$value;
   }

   $signature = hash_hmac('sha256', $signatureData, $secretKey, true);
   $signature = base64_encode($signature);

   if ($mode == "PROD") {
     $url = "https://www.cashfree.com/checkout/post/submit";
   } else {
     $url = "https://test.cashfree.com/billpay/checkout/post/submit";
   }


   // Get Post Data from checkout page for insert into payment_transaction
   $customerName  = $_POST['customerName'];
   $customerEmail = $_POST['customerEmail'];
   $customerPhone = $_POST['customerPhone'];
  
   $amount = $_POST['orderAmount'];
   $currency = $_POST['orderCurrency'];
   $payment_status = 'Pending';

   // Insert transaction data into the database 
   $query = "INSERT INTO payment_transaction (order_id, full_name, mobile_number, email, amount, currency,
   status) VALUES ('$orderId', '$customerName', '$customerPhone', '$customerEmail', '$amount', '$currency', '$payment_status')";

   $mysqli->query($query);
  
?>
<form action="<?php echo $url; ?>" name="formSubmit" method="post">
   <p>Please wait.......</p>
   <input type="hidden" name="signature" value='<?php echo $signature; ?>'/>
   <input type="hidden" name="orderCurrency" value='<?php echo $orderCurrency; ?>'/>
   <input type="hidden" name="customerName" value='<?php echo $customerName; ?>'/>
   <input type="hidden" name="customerEmail" value='<?php echo $customerEmail; ?>'/>
   <input type="hidden" name="customerPhone" value='<?php echo $customerPhone; ?>'/>
   <input type="hidden" name="orderAmount" value='<?php echo $orderAmount; ?>'/>
   <input type="hidden" name="notifyUrl" value='<?php echo $notifyUrl; ?>'/>
   <input type="hidden" name="returnUrl" value='<?php echo $returnUrl; ?>'/>
   <input type="hidden" name="appId" value='<?php echo $appId; ?>'/>
   <input type="hidden" name="orderId" value='<?php echo $orderId; ?>'/>
</form>

</body>
</html>