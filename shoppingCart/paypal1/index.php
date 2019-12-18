<?php 

session_start();


?>



<html>
<title>Select payment Method</title>
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
    <center>
    <div id="payment-box">
      
        <img src="images/paypal.png" width="130" height="120">
        <form method="post" name="cart" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
          <input type="hidden" name="cmd" value="_cart">
          <input type="hidden" name="upload" value="1">
          <input type="hidden" name="business" value="poonam-merchant@gmail.com">
          <input type="hidden" name="currency_code" value="USD">
          <input type="hidden" name="button_subtype" value="services">
          <input type="hidden" name="notify_url" value="http://localhost/Prince/main/mainBranch/shoppingCart/paypal1/notify.php" />
          <input type="hidden" name="bn" value="PrinceProduction">
          <input type="hidden" name="return" value="http://localhost/Prince/main/mainBranch/shoppingCart/paypal1/return.php" />

          <?php
          $cnt = 1;
          foreach ($_SESSION["cart_item"] as $item){
            ?>

           <input type="hidden" name="item_name_<?php echo $cnt ?>" value="<?php echo $item["name"]; ?>"/>
           <input type="hidden" name="amount_<?php echo $cnt ?>" value="<?php echo $item["price"]; ?>"/>
           <input type="hidden" name="quantity_<?php echo $cnt ?>" value="<?php echo $item["quantity"]; ?>"/>
           
        
           <?php
            $cnt++;
        }

        ?>
           
          <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>


    </div>

    <div id="payment-box">
      
        <img src="images/authorize.png" width="130" height="120">
        <form method="post" name="cart" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
          <input type="hidden" name="cmd" value="_cart">
          <input type="hidden" name="upload" value="1">
          <input type="hidden" name="business" value="poonam-merchant@gmail.com">
          <input type="hidden" name="currency_code" value="USD">
          <input type="hidden" name="button_subtype" value="services">
          <input type="hidden" name="notify_url" value="http://newzonemedia.com/henry/ipn.php" />
          <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
          <input type="hidden" name="return" value="http://www.mysite.org/thank_you_kindly.html" />

          <?php
          $cnt = 1;
          foreach ($_SESSION["cart_item"] as $item){
            ?>

           <input type="hidden" name="item_name_<?php echo $cnt ?>" value="<?php echo $item["name"]; ?>"/>
           <input type="hidden" name="amount_<?php echo $cnt ?>" value="<?php echo $item["price"]; ?>"/>
           <input type="hidden" name="quantity_<?php echo $cnt ?>" value="<?php echo $item["quantity"]; ?>"/>
           
        
           <?php
            $cnt++;
        }

        ?>
           
          <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>


    </div>
    </center>
</body>
</html>