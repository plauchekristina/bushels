<?php session_start();
if (!isset($_SESSION['client'])){
    header('Location:login.php');
}?>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<div class="jumbotron">
        <div class="container text-center">
            <h1>Co-op Profile</h1>
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
                            <h2>Co-Op Details</h2>
                
                            <form action="model/co-op-update-model.php" method="POST">

        <div class="fail-message"><p>All fields are required</p></div>
       
   
        <input name="account_id" id="account_id" type="hidden"  value = "<?php echo $_SESSION['client']['account_id'];?>">
   
        <div>
                <label for="coop_name">Co-op Name</label>
        </div>
        <div>
                <input name="coop_name" id="coop_name" type="text" required value = "<?php echo $_SESSION['coop']['coop_name'];?>">
        </div>
        <div>
                <label for="contact_name">Contact Name</label>
        </div>
        <div>
                <input name="contact_name" id="contact_name" type="text"  required value = "<?php echo $_SESSION['coop']['coop_contact_name'];?>"> 
        </div>
      
        <div>
                <label for="contact_email">Contact Email</label>
        </div>
        <div>
                <input type="email" name="contact_email" id="contact_email" required value = "<?php echo $_SESSION['coop']['coop_contact_email'];?>">
        </div>
        <div>
        <label for="full_portion_budget">Full Portion Budget</label>
                </div>
                <div>
                <input name="full_portion_budget" id="full_portion_budget" type="number" required value = "<?php echo $_SESSION['coop']['coop_full_budget'];?>">
        </div>
        <div>
        <label for="halfportion_budget">Half Portion Budget</label>
                </div>
                <div>
                <input name="half_portion_budget" id="full_portion_budget" type="number" required value = "<?php echo $_SESSION['coop']['coop_half_budget'];?>">
        </div>
        <div>
          
            <label>&nbsp;</label>
            <input type="submit" name="submit" id="regbtn" value="Save" class="register">
           
        </div>
               
            </form>

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