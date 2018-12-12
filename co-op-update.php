<?php session_start();
if (!isset($_SESSION['client'])){
    header('Location:login.php');
}?>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<!--Form begins-->
<div class="box">
        <div>
            <div class="card text-left">
                <div class="card-header green">
                    <h2>Co-op Update</h2>
                </div>
                <div class="card-body">
                            <form action="model/co-op-update-model.php" method="POST">
                            <p>Updating your budget amounts will only affect future orders. Past order data will remain the same.</p>

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
          
           
            <input type="submit" name="submit" id="regbtn" value="Save" class="register" class="btn btn-primary">
           
        </div>
               
            </form>

            </div>
            </div>
        </div>
    </div>               
       
       
<script src ="/scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 