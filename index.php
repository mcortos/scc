<?php
if(isset($_POST['submit'])){
    $bill=$_POST['bill'];


    if(isset($_POST['discount'])){
      $discount=$_POST['discount'];
      $entbill=($bill-$discount);
    } else {
    $entbill=$bill-$discount;
  } 

if ( in_array($entbill, range(0,150000)) ) {
$t1=$entbill;
$entsuppbill='15000';
}
if ( in_array($entbill, range(150000,500000)) ) {
$t1='15000';
$finalbill = ($entbill-150000);
$t2 = ($finalbill*7/100);
$entsuppbill=($t1+$t2);
}
if ( in_array($entbill, range(500000,1000000)) ) {
$t1='15000';
$t2='24500';
$finalbill = ($entbill-500000);
$t3 = ($finalbill*5/100);
$entsuppbill=($t1+$t2+$t3);
}
if ( $entbill > '1000000' ) {
$t1='15000';
$t2='24500';
$t3='25000';
$finalbill = ($entbill-1000000);
$t4 = ($finalbill*3/100);
$entsuppbill=($t1+$t2+$t3+$t4);
}

if ( in_array($bill, range(0,10000)) ) {
  $bu1=$bill;
  $busupport=($bu1*10/100);
  }
  if ( in_array($bill, range(10000,80000)) ) {
  $bu1='1000';
  $finalbubill = ($bill-10000);
  $bu2 = ($finalbubill*7/100);
  $busupport=($bu1+$bu2);
  }
  if ( in_array($bill, range(80000,250000)) ) {
  $bu1='1000';
  $bu2='4900';
  $finalbubill = ($bill-80000);
  $bu3 = ($finalbubill*5/100);
  $busupport=($bu1+$bu2+$bu3);
  }
  if ( $bill > '250000' ) {
  $bu1='1000';
  $bu2='4900';
  $bu3='8500';
  $finalbubill = ($bill-250000);
  $bu4 = ($finalbubill*3/100);
  $busupport=($bu1+$bu2+$bu3+$bu4);
  }


$devsupport=($bill*3/100);

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../CSS/bootstrap-4.0.0/favicon.ico">

    <title>SCC</title>

    <!-- Bootstrap core CSS -->
    <link href="../CSS/bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>


    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">SCC</h5>
      <div><h5 class="">Calculate your customer support cost</h5></div>
    </div>

 
    
    
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <form method="post" attribute="" action="">
        <div class="row">
          <div class="col">
            <input type="number" name="bill"  class="form-control" placeholder="Monthly Bill">
            <input type="number" name="discount"  class="form-control" placeholder="Discount ?">
          </div>
          <div class="col">
            <button type="submit"  class="btn btn-primary" name="submit" id="submit" value="submit">Calculate</button>
          </div>
        </div>
      </form>


    </div>
  
    <div class="container" id="results">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php echo ' $ '. $entsuppbill.'';?> <small class="text-muted">/ month</small></h1>
            <ul class="list-unstyled mt-3 mb-4" style="text-align:left">
              <li>Tiers 1 : <?php echo '0-150K  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  $'. $t1.' ';?></li>
              <li>Tiers 2 : <?php echo '150K-500K &nbsp;&nbsp;&nbsp; $'. $t2.' ';?></li>
              <li>Tiers 3 : <?php echo '500K-1M  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  $'. $t3.' ';?></li>
              <li>Tiers 4 : <?php echo '+1M    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    $'. $t4.' ';?></li>
            </ul>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Business</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php echo ' $ '. $busupport.'';?> <small class="text-muted">/ month</small></h1>
            <ul class="list-unstyled mt-3 mb-4" style="text-align:left">
              <li>Tiers 1 : <?php echo ' 0-10K    : $'. $bu1.' ';?></li>
              <li>Tiers 2 : <?php echo ' 10-80K    : $'. $bu2.' ';?></li>
              <li>Tiers 3 : <?php echo ' 80-250K    : $'. $bu3.' ';?></li>
              <li>Tiers 4 : <?php echo ' +250K    : $'. $bu4.' ';?></li>
            </ul>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Developer</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php echo ' $ '. $devsupport.'';?> <small class="text-muted">/ month</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>3% of monthly usage</li>
            </ul>
          </div>
        </div>
      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">

        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../CSS/bootstrap-4.0.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../CSS/bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>
    <script src="../CSS/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="../CSS/bootstrap-4.0.0/assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>

