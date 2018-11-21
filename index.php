
<?php
 
include 'library/connections.php';

 
$conn = null;
 ?>
 <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<div class="jumbotron">
        <div class="container text-center">
            <h1>Welcome to the Co-op</h1>
            <p>Let's get started...</p>
        </div>
    </div>
    <!--end jumbotron -->
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div class="panel-body">
                <?php if (!isset($_SESSION['client'])){
                        echo "<h3><a href='/project/register.php'>Register Now</a> or <a href='/project/login.php'>Login</a> to get started. </h3>
                        ";}?>
                </div>

            </div>
            <!-- Left column -->
            <div class="col-sm-3 well">
                <div class="well">
                    <p>
                        <a href="#">My Profile</a>
                    </p>
                    <img src="images/bushel-logo-gr-wh.svg" class="img-circle" height="65" width="65" alt="Avatar">
                </div>


            </div>

            <!-- Center column -->
            <div class="col-sm-7">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default text-left">
                            <div class="panel-body">
                                <p contenteditable="true">Status: Feeling Happy</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="well">
                            <p>Sample</p>
                            <img src="images/bushel-logo-gr-wh-tag.svg" class="img-circle" height="55" width="55" alt="Avatar">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="well">
                            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something,
                                but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right column -->
            <div class="col-sm-2 well">
                <div class="thumbnail">
                    <p>About Us</p>
                    <img src="images/bushel-logo-wh-gr.svg" alt="Co-op" width="400" height="300">
                    <p>
                        <strong>Co-op Service</strong>
                    </p>

                </div>
            </div>
        </div>

    </div>

 <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 
