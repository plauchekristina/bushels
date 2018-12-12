<?php session_start();?>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<div class="container">
<!-- 3 columns -->

<div class="row">

    <div class="card text-left">
        <div class="card-header red">
            <h2>Featured</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>

    </div>
    <div class="card text-left">
        <div class="card-header brown ">
        <h2>Featured</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>

    </div>
    <div class="card text-left">
        <div class="card-header green">
        <h2>Featured</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>

    </div>


</div>
<!-- Centered column -->

        <?php if (!isset($_SESSION['client'])){
                        echo "<div class='row'>
                        
                            <div class='panel panel-default col-sm-12 text-center'>
                                <div class='panel-body'><h3><a href='register.php'class='btn red btn-lg'>Register Now</a> or <a href='login.php'>Login</a> to get started. </h3>
                        </div>
                        </div>
                    
                    </div>";}?>
                        
            

     





</div>
    <!--end jumbotron -->
    
    <script src ="/scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?>  
