<?php 

session_start();


// echo $_SESSION["cart_item"];
       
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
        ?>
                <?php echo $item["name"]; ?>
                <?php echo $item["code"]; ?></td>
                <?php echo $item["quantity"]; ?>
                <?php echo "$ ".$item["price"]; ?>
                <?php echo "$ ". number_format($item_price,2); ?>
                <?php
                // $total_quantity += $item["quantity"];
                // $total_price += ($item["price"]*$item["quantity"]);
        }
        
die();


?>

<html>
<title>Paypal Payment Gateway Integration in PHP</title>
<head>
<style>
body {
    font-family: Arial;
    line-height: 30px;
    color: #333;
}

#payment-box {
    padding: 40px;
    margin: 20px;
    border: #E4E4E4 1px solid;
    display: inline-block;
    text-align: center;
    border-radius: 3px;
}

#pay_now {
    padding: 10px 30px;
    background: #09f;
    border: #038fec 1px solid;
    border-radius: 3px;
    color: #FFF;
    width: 100%;
    cursor: pointer;
}

.txt-title {
    margin: 25px 0px 0px 0px;
    color: #4e4e4e;
}

.txt-price {
    margin-bottom: 20px;
    color: #08926c;
    font-size: 1.1em;
}
</style>
</head>
<body>
    <div id="payment-box">
        <img src="images/camera.jpg" />
        <h4 class="txt-title">A6900 MirrorLess Camera</h4>
        <div class="txt-price">$289.61</div>


        <!-- <form action="https://www.sandbox.paypal.com/cgi-bin/webscr"
            method="post" target="_top">
            <input type='hidden' name='business'
                value='poonam-merchant@gmail.com'> <input type='hidden'
                name='item_name' value='Camera'> <input type='hidden'
                name='item_number' value='CAM#N1'> <input type='hidden'
                name='amount' value='10'> <input type='hidden'
                name='no_shipping' value='1'> <input type='hidden'
                name='currency_code' value='USD'> <input type='hidden'
                name='notify_url'
                value='http://sitename/paypal-payment-gateway-integration-in-php/notify.php'>
            <input type='hidden' name='cancel_return'
                value='http://sitename/paypal-payment-gateway-integration-in-php/cancel.php'>
            <input type='hidden' name='return'
                value='http://sitename/paypal-payment-gateway-integration-in-php/return.php'>
            <input type="hidden" name="cmd" value="_xclick"> <input
                type="submit" name="pay_now" id="pay_now"
                Value="Pay Now">
        </form> -->

        <form method="post" name="cart" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
          <input type="hidden" name="cmd" value="_cart">
          <input type="hidden" name="upload" value="1">
          <input type="hidden" name="business" value="poonam-merchant@gmail.com">
          <input type="hidden" name="currency_code" value="USD">
          <input type="hidden" name="button_subtype" value="services">
          <input type="hidden" name="notify_url" value="http://newzonemedia.com/henry/ipn.php" />
          <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
          <input type="hidden" name="return" value="http://www.mysite.org/thank_you_kindly.html" />

           <input type="hidden" name="item_name_1" value="product1"/>
                 <input type="hidden" name="amount_1" value="12"/>

                 <input type="hidden" name="item_name_2" value="product2"/>
                 <input type="hidden" name="amount_2" value="13"/>


      
         
          <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>


    </div>
</body>
</html>