<?php
if(isset($_POST['submit']) && !empty($_POST['bill'])){
    $bill=$_POST['bill'];
    $display="inline";

    if(isset($_POST['discount'])){
      $discount=$_POST['discount'];
      $entbill=($bill-$discount);
    } else {
    $entbill=$bill-$discount;
  } 


if ( in_array($entbill, range(0,150000)) ) {
$t1=$entbill;
$entsuppbill='15000';
$t2="0";
$t3="0";
$t4="0";
}
if ( in_array($entbill, range(150000,500000)) ) {
$t1='15000';
$finalbill = ($entbill-150000);
$t2 = ($finalbill*7/100);
$entsuppbill=($t1+$t2);
$t3="0";
$t4="0";
}
if ( in_array($entbill, range(500000,1000000)) ) {
$t1='15000';
$t2='24500';
$finalbill = ($entbill-500000);
$t3 = ($finalbill*5/100);
$entsuppbill=($t1+$t2+$t3);
$t4="0";
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
  $bu2="0";
  $bu3="0";
  $bu4="0";
  }
  if ( in_array($bill, range(10000,80000)) ) {
  $bu1='1000';
  $finalbubill = ($bill-10000);
  $bu2 = ($finalbubill*7/100);
  $busupport=($bu1+$bu2);
  $bu3="0";
  $bu4="0";
  }
  if ( in_array($bill, range(80000,250000)) ) {
  $bu1='1000';
  $bu2='4900';
  $finalbubill = ($bill-80000);
  $bu3 = ($finalbubill*5/100);
  $busupport=($bu1+$bu2+$bu3);
  $bu4="0";
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

}else{
  $display="none";
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
          <div class="col-xs-4" style="margin-right:5px">
            <input type="number" name="bill"  class="form-control" placeholder="Monthly Bill">
          </div>
          <div class="col-xs-4" style="margin-right:5px">
            <input type="number" name="discount"  class="form-control" placeholder="Discount ?">
          </div>
          <div class="col-xs-4">
            <button type="submit"  class="btn btn-primary" name="submit" id="submit" value="submit">Calculate</button>
          </div>
        </div>
      </form>


    </div>
  
    <div class="container" id="results" style="display :<?php echo ''. $display.'';?>">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php echo ' $ '. $entsuppbill.'';?> <small class="text-muted">/ month</small></h1>
            <ul class="list-unstyled mt-3 mb-4" style="text-align:left">
            <table class="table table-dark">
              <tbody>
                <tr>
                  <th scope="row">0-150K</th>
                  <td><?php echo '$'. $t1.' ';?></td>
                </tr>
                <tr>
                  <th scope="row">150-500K</th>
                  <td><?php echo '$'. $t2.' ';?></td>
                </tr>
                <tr>
                  <th scope="row">500K-1M</th>
                  <td><?php echo '$'. $t3.' ';?></td>
                </tr>
                <tr>
                  <th scope="row">+1M</th>
                  <td><?php echo '$'. $t4.' ';?></td>
                </tr>
                </tbody>
            </table> 
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
            <table class="table table-dark">
              <tbody>
                <tr>
                  <th scope="row">0-10K</th>
                  <td><?php echo '$'. $bu1.' ';?></td>
                </tr>
                <tr>
                  <th scope="row">10-80K</th>
                  <td><?php echo '$'. $bu2.' ';?></td>
                </tr>
                <tr>
                  <th scope="row">80-250K</th>
                  <td><?php echo '$'. $bu3.' ';?></td>
                </tr>
                <tr>
                  <th scope="row">+250K</th>
                  <td><?php echo '$'. $bu4.' ';?></td>
                </tr>
                </tbody>
            </table>  
            </ul>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Developer</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php echo ' $ '. $devsupport.'';?> <small class="text-muted">/ month</small></h1>
            <ul class="list-unstyled mt-3 mb-4" style="text-align:center">
              <table class="table table-dark">
              <tbody>
                <tr>
                  <td>3% of monthly usage</td>
                </tr>
                </tbody>
            </table>  
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

