<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <title>FPay | Payment Confirmation</title>
</head>
<style>
.content {
/*  max-width: 500px; */
  margin: auto;
}
.inline {
    display: flex;
  }
.font{
  font-family:Arial;}
</style>
<body class="content" style="background-color:#F6F9FC;max-width:800px;">



  <div id="header">
    <div class='inline' style="background-color:#324EBA;font-szie:22px;padding-left:30px;padding-right: 30px;height: 90px;">
      <div style="display:block;width:50%;">
        <a href="https://www.fpay.support/">
          <img src="https://www.fpay.support/wp-content/uploads/2020/07/Fpay_Logo_white.png" class="rounded float-left" width="90px" height="auto" style="padding-top: 5px;">
        </a>
      </div>

      <div style="display:block;width:50%;text-align:right;">
        <h1 style="font-size:30px;line-height:50px;color:white;font-family:Arial;">Payment Confirmation</h1>
      </div>
    </div>
  </div>

  <!-- Body Content -->
  <div id="body" style="font-size:1.1em;font-weight:500;  min-height: 500px; padding-top:100px; background-color:white;">
    <div style="padding: 0px 30px;">

      <div>
        <p>Dear  <?php echo $client_name;?> ,<br>
      </div>
      <div>
        <p class="font">This email confirms you have paid  <?php echo $currency.$amount; ?> using Fpay on <?php echo $datetime3; ?>.

      </div>
      <!-- Inner container -->
      <div style="background-color:#F9F9FB;">
        <div style="padding:25px;">
          <b>
            <p class="font">Order ID: <?php echo $merchant_orderid; ?>
          </b>
          <b>
            <p class="font">Fpay Transaction ID: <?php echo $id3; ?>
          </b>
        </div>

      </div>

      <div>
        <br>
        <p class="font" style="margin-bottom:0px;">If you have not done this transaction, please contact us at +65 9141 1318 or <b>help@fpay.support</b><br>
      </div>
    </div>
  </div>  <div style="color:#818181;font-size:0.8em;background-color:white;">
    <div style="padding: 0px 30px;">
      <div>
        <br>
        <p class="font" style="margin-top:0px;">FPay Pte Ltd <br>160 Robinson Road #14-04 Singapore Business Federation Centre 068914 Singapore
      </div>
      <br>
      <div>
        <p class="font">NOTICE: <br> This e-mail has been sent you in accordance with all applicable laws and regulations. Its content and any file transmitted along with it is confidential and intended solely for the use of the individiual or entity to whom they
          are addressed. <br>This message contains confidential information and is intended only for the individual named. If you are not the named addressed you should not disseminate, distribute or copy this e-mail.<br>Please notify the sender
          immediately by e-mail if you have received this e-mail by mistake and delete this e-mail from your system. <br>If you are not the intended recepient you are hereby notified that disclosing, copying, distributing or taking any action in
          reliance on the contents of this information is strictly prohibited.

      </div>

    </div>
  </div>



</body>

</html>
