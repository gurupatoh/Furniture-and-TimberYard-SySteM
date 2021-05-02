<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/

Code by Uxtcloud
https://uxtcloud.com
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>furniture</title>
    <!--meta-tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Simple Statistics Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--meta-tags-->

    <!--css-links-->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <!--//css-links-->

    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <!--//online-fonts -->

</head>
<body>
<h1>furniture Booking</h1>
<!-- main-section -->
<!-- //main-section -->

<!-- copyright -->
<!-- //copyright -->

<!-- Calendar -->
<!-- Necessary-JavaScript-Files-&-Links -->

<!-- Default-JavaScript --> <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<!-- //Necessary-JavaScript-Files-&-Links -->

<script src="js/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker,#datepicker1" ).datepicker();
    });
</script>
<!-- //Calendar -->
<!--script-->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });

</script>
<!--script-->



</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Ongomaj
 * Date: 23/05/2019
 * Time: 11:16
 */

$shortcode = "";//required
$authkey = "";//required
$amount = 0;//required
$currency = "";
$phone = "";//required
$amount = 0;
$invoice_id = "";//required
$app_name = "";//required
$callback_url = "";//required
$return_url = "";//required

if(!empty($_POST)){
    $invoice_id = isset($_POST['invoice_id']) ? $_POST['invoice_id'] : '';
    $shortcode = isset($_POST['shortcode']) ? $_POST['shortcode'] : '';
    $authkey = isset($_POST['authkey']) ? $_POST['authkey'] : '';
    $amount = isset($_POST['amount']) ? $_POST['amount'] : 0;
    $currency = isset($_POST['currency']) ? $_POST['currency'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $app_name = isset($_POST['app_name']) ? $_POST['app_name'] : '';
    $callback_url = isset($_POST['callback_url']) ? $_POST['callback_url'] : '';
    $return_url = isset($_POST['return_url']) ? $_POST['return_url'] : '';
}

$page_id = "pay";
$title = "MPesa Online Payment Intergrations";
?>
<!DOCTYPE html>
<html>
<head>
    <title>MPesa Online Payments Intergrations</title>
</head>
<body>
<div style="margin: auto;width: 500px;border: 3px solid green;padding: 10px;">
    <iframe src="https://mpesa.uxtcloud.com/portal/insta-lipa.php?invoice_id=<?php echo $invoice_id; ?>&shortcode=<?php echo $shortcode; ?>&authkey=<?php echo $authkey; ?>&amount=<?php echo $amount; ?>&currency=<?php echo $currency; ?>&phone=<?php echo $phone; ?>&amount=<?php echo $amount; ?>&app_name=<?php echo $app_name; ?>&callback_url=<?php echo $callback_url; ?>&return_url=<?php echo $return_url; ?>" width="500px" height="500px">
        <p><a href="https://mpesa.uxtcloud.com/portal/insta-lipa.php?invoice_id=<?php echo $invoice_id; ?>&shortcode=<?php echo $shortcode; ?>&authkey=<?php echo $authkey; ?>&amount=<?php echo $amount; ?>&currency=<?php echo $currency; ?>&phone=<?php echo $phone; ?>&amount=<?php echo $amount; ?>&app_name=<?php echo $app_name; ?>&callback_url=<?php echo $callback_url; ?>&return_url=<?php echo $return_url; ?>" target="_blank">Browser Does Not Support Iframes,Click Here To Be Redirected.</a></p>
    </iframe>
</div>
</body>
</html>