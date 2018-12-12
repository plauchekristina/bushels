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
                    <h2>Co-op Profile</h2>
                </div>
                <div class="card-body">
                <form action="model/co-op-model.php" method="POST">
<p> Please enter a name and contact information for your co-op.  The name and email can be different from your account profile.  </p>
        <div class="fail-message"><p>All fields are required</p></div>
       
   
        <input name="account_id" id="account_id" type="hidden"  value = "<?php echo $_SESSION['client']['account_id'];?>">
   
        <div>
                <label for="coop_name">Co-op Name</label>
        </div>
        <div>
                <input name="coop_name" id="coop_name" type="text" required>
        </div>
        <div>
                <label for="contact_name">Contact Name</label>
        </div>
        <div>
                <input name="contact_name" id="contact_name" type="text" value="<?php echo $_SESSION['client']['first_name'] ?>"  required>
        </div>
      
        <div>
                <label for="contact_email">Contact Email</label>
        </div>
        <div>
                <input type="email" name="contact_email" id="contact_email" value="<?php echo $_SESSION['client']['email'];?>"required >
        </div>
        <div>
        <label for="full_portion_budget">Full Portion Budget</label>
                </div>
                <div>
                <input name="full_portion_budget" id="full_portion_budget" type="number" required>
        </div>
        <div>
        <label for="halfportion_budget">Half Portion Budget</label>
                </div>
                <div>
                <input name="half_portion_budget" id="full_portion_budget" type="number" required>
        </div>
        <div>
           
          
            <input type="submit" name="submit" id="regbtn" value="Save" class="btn btn-primary">
           
        </div>
               
</form>
                    
                        
                </div>
            </div>
        </div>
    </div>


    <!-- form ends -->
       
<script src ="/scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 