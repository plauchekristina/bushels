<?php session_start();
if (!isset($_SESSION['client'])){
    header('Location:login.php');
}?>
<?php include('/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<div class="jumbotron">
        <div class="container text-center">
            <h1>My Account</h1>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 panel panel-default text-left">
                <div  class="panel-body">
                    <p></p>
                   
            </div>
            </div>

   

            <!-- Left column -->
            <div class="col-sm-3 well">
                <div class="well">
                    <h2>
                        <a href="#">Date</a>
</h2>
                    
<br><p> 
                    <?php 
                    echo "<strong>Today is:</strong> ".date("m/d/Y");?></p>
                </div>


            </div>

            <!-- Center column -->
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default text-left well">
                            <div class="panel-body">
                            <h2>Account Info:</h2>
                            <ul>
                                <li>First Name: <?php echo $_SESSION['client']['first_name'];?></li>
                                <li>Last Name: <?php echo $_SESSION['client']['last_name'];?></li>
                                <li>Email: <?php echo $_SESSION['client']['email'];?> </li>
                                <li>Username: <?php echo $_SESSION['client']['username'];?></li>
                                <li>User Id: <?php  echo $_SESSION['client']['account_id'];?></li>
                            </ul>
<p><a href="account-update.php">Edit</a></p>
<hr/>
<h2>Co-Op Info:</h2>
<?php if (!isset($_SESSION['coop']['coop_name'])){ echo "<h3>Please <a href='co-op.php'>create your co-op</a></h3>";}?>
                            <ul>
                                <li>Co-op Name: <?php echo $_SESSION['coop']['coop_name'];?></li>
                                <li>Contact Name: <?php echo $_SESSION['coop']['coop_contact_name'];?></li>
                                <li>Contact Email: <?php echo $_SESSION['coop']['coop_contact_email'];?> </li>
                                <li>Full Budget: <?php echo $_SESSION['coop']['coop_full_budget'];?></li>
                                <li>Half Budget: <?php echo $_SESSION['coop']['coop_half_budget'];?></li>
                            </ul>
                           
                            
                            
                            <?php if (isset($_SESSION['coop']['coop_name'])){echo "<p><a href='co-op-update.php'>Edit</a></p>";}?>


                            </div>
                        </div>
                    </div>
                </div>


            </div>
<!--end center column-->
</div> 
</div> 
    
       
<script src ="/scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?>  