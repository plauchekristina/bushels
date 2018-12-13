<?php session_start();?>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<div class="jumbotron text-center">
  <h1 class="display-4">Bushels World Produce Co-op Service</h1>
  <p class="lead">Manage your co-op with our unique service.</p>
  <div class="text-center">
  <figure>
  <img src="/images/bushels-logo-final.svg" class="mx-auto img-fluid"></figure></div>
 
  <p class="lead">
  <?php if (!isset($_SESSION['client'])){
                        echo "
                                <h3><a href='register.php'class='btn brown btn-lg'>Register Now</a></h3>";}?>
  </p>
</div>

<div class="container">
<!-- 3 columns -->

<div class="row">

    <div class="card text-left home">
        <div class="card-header red">
            <h2>Size Options</h2>
        </div>
        <div class="card-body">
            <h3 class="card-title">Full Bushels</h3>
            <div class="tall">
            <div class="card-img text-center "><figure><img src="/images/green-full.png" class="mx-auto img-fluid tiny"></figure></div>
            <h3 class="card-title">Partial Bushels</h3>
            <div class="card-img text-center"><figure><img src="/images/green-half.png" class="mx-auto img-fluid tiny"></figure></div></div>
            <a href="/login.php" class="btn btn-primary">Login</a>
        </div>

    </div>
    <div class="card text-left home">
        <div class="card-header brown ">
        <h2>Build an Order</h2>
        </div>
        <div class="card-body">
            <h3 class="card-title">Calculate Quantities</h3>
            <div class="card-img text-center tall"><figure><img src="/images/calculator.png" class="mx-auto img-fluid"></figure></div>
            <a href="/order-form.php" class="btn btn-primary">Start New Order</a>
        </div>

    </div>
    <div class="card text-left home">
        <div class="card-header green">
        <h2>Track Budgets</h2>
        </div>
        <div class="card-body">
            <h3 class="card-title">Never overspend again</h3>
            <div class="card-img text-center tall"><figure><img src="/images/plus.png" class="mx-auto img-fluid"></figure></div>
            <a href="/account.php" class="btn btn-primary">Set Budget</a>
        </div>

    </div>


</div>
<!-- Centered column -->

        <?php if (!isset($_SESSION['client'])){
                        echo "<div class='row'>
                        
                            <div class='panel panel-default col-sm-12 text-center'>
                                <div class='panel-body'><a href='register.php'class='btn red btn-lg'>Register Now</a> or <a href='login.php' class='btn green btn-lg'>Login</a> to get started. </h3>
                        </div>
                        </div>
                    
                    </div>";}?>
                        
            

     





</div>
    <!--end jumbotron -->
    
    <script src ="/scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?>  
