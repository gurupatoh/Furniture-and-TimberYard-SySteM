<?php
$ucm_status = false;
$ucm_invoice_id  = "";
$ucm_trans_id = "";
$ucm_amount = "";
if(!empty($_GET)){
    $ucm_status = $_GET['ucm_status'];
    $ucm_invoice_id  = $_GET['ucm_invoice_id'];
    $ucm_amount = $_GET['ucm_amount'];
    $ucm_trans_id = $_GET['ucm_trans_id'];
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>HOTEL BOOKING CALLBACK</title>
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
<h1>Travel Booking</h1>
<!-- main-section -->
<div class="head agile">
    <div class="login w3">
        <div class="sap_tabs">
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item" ><span>MPESA PAYMENT</span></li>
                </ul>
                <div class="resp-tabs-container" style="padding: 20px;">
                    <?php
                    if($ucm_status){
                        ?>
                        <p style="color: green;">Payment Successfull.</p>
                        <p><b>INVOICE:</b><?php echo $ucm_invoice_id; ?></p>
                        <p><b>RECEIPT:</b><?php echo $ucm_trans_id; ?></p>
                        <p><b>AMOUNT:KSHS.</b><?php echo $ucm_amount; ?></p>
                    <?php }else{ ?>
                        <p style="color: red">Payment Failed</p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<!-- //main-section -->

<!-- copyright -->
<div class="footer agile-w3l">
    <p>© <?php echo date("Y"); ?> Travel Booking. All Rights Reserved </p>
</div>
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