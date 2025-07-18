

<?php

define('PREPEND_PATH', '../');
$hooks_dir = dirname(__FILE__);
include("../../autostore/defaultLang.php");
include("../../autostore/language.php");
include("../../autostore/lib.php");


$pro_id   = isset($_GET['orderid']) ? $_GET['orderid'] : '';
define('PREPEND_PATH', '../');
$hooks_dir = dirname(__FILE__);
include('../db_connect.php'); // include database connection file



$qr1  = "SELECT * FROM payment WHERE order_id = '$pro_id'";
$query1    = mysqli_query($conn,  $qr1);
  
$in_re1 = mysqli_num_rows($query1);

if ($in_re1 > 0){

$row1     = mysqli_fetch_array($query1);
$url      = $row1['payment_link'];


}
$us_id1 = sql("SELECT * FROM orders WHERE order_id = '$pro_id'", $eo);

$num_id1   = mysqli_num_rows($us_id1);

if ($num_id1 > 0){

$rowid = mysqli_fetch_array($us_id1);
$id            = $rowid['id'];

$cartype       = $rowid['cartype'];
$brand         = $rowid['brand'];
$model         = $rowid['model'];

$total_price      = $rowid['total_price'] + 0.00;
$discount         = $rowid['discount'] + 0.00;
}

?>

<!DOCTYPE HTML>
<html lang="ar" dir="rtl">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="google-site-verification" content="lk9L83xdbRsSfz3zKGYbzk7GdPGwBoSGyUW5S-eMYAg" />
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Auto Store</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets2/img/favicon.png" />
        <link rel="stylesheet" href="assets2/css/normalize.css">
        <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets2/css/bootstrap.rtl.min.css">
        <link rel="stylesheet" href="assets2/css/all.min.css">
        <link rel="stylesheet" href="assets2/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets2/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets2/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets2/css/style.css">
        
        <!-- Meta Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1822296028514369');
            fbq('track', 'Purchase', {
                value: <?php echo $total_price; ?>,
                currency: 'egp',
              });
        </script>
    </head>
    
    <body>

        <section class="confirm">
            <div class="container">
                <div class="confirm-content">
                    <div class="logo">
                        <img src="assets2/img/logo/logo.png" width="100%" alt="logo">
                    </div>
                    <div class="message-confirm">
                        <p>
                            تم ارسال رساله SMS لتحصيل المبلغ  لتاكيد عمليه الشراء يمكنك الدفع الان عن طريق الرابط.
                        </p>
                    </div>
                    <div class="pay-methods">
                        <h6>
                            يمكنك الدفع عن طريق : <br>
                            فودافون كاش. <br>
                            انستا باي. <br>
                            فيزا.
                        </h6>
                    </div>
                    <div class="price">
                        <h3> <?php echo $total_price + 100 ; ?> جنيه </h3>
                        <div class="price-content">
                            <h4>
                                مصاريف شحن المنتج:
                                <span> 100 جنيه </span>
                            </h4>
                            <h4>
                                اجمالي الخصم:
                                <span> <?php echo $discount; ?> جنيه </span>
                            </h4>
                            <h4>
                                اجمالي المبلغ المطلوب:
                                <span> <?php echo $total_price + 100 ; ?> جنيه </span>
                            </h4>
                        </div>
                    </div>
                    <div class="order-content">
                        <div class="start-order">
                            <h4>
                                السيارة:
                                <span>  <?php echo $cartype; ?> </span>
                            </h4>
                            <h4>
                                نوع السيارة:
                                <span> <?php echo $brand; ?> </span>
                            </h4>
                            <h4>
                                سنة الصنع:
                                <span>  <?php echo $model; ?> </span>
                            </h4>
                        </div>
                        <div class="end-order">
                            <h4> المطلوب </h4>
                            <div class="end-order-content">


<?php 

$us_id1 = sql("SELECT * FROM orders WHERE order_id = '$pro_id'", $eo);

$num_id1   = mysqli_num_rows($us_id1);

if ($num_id1 > 0){

while ( $rowid = mysqli_fetch_array($us_id1)) {
$id            = $rowid['id'];

$product2         = $rowid['product2'];
$product1         = $rowid['product1'];

echo'



                                <h5> '.$product2.'  '.$product1.'</h5>

';

}}?>

                            </div>
                        </div>
                    </div>

        <input style="display: none;" type="text" value="<?php echo $hppUrl ?>" id="linkad">


                    <div class="pay-now">
                        <a href="<?php echo  $url;?>" class="btn-order">
                            <img src="assets2/img/icons/wallet.png" width="25" alt="">
                            <span> ادفع الان </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <script src="assets2/js/jquery-3.3.1.min.js"></script>
        <script src="assets2/js/popper.min.js"></script>
        <script src="assets2/js/bootstrap.min.js"></script>
        <script src="assets2/js/magnific-popup.min.js"></script>
        <script src="assets2/js/owl.carousel.min.js"></script>
        <script src="assets2/js/plugins.js"></script>
    </body>
</html>