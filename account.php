<?php session_start();
if (!isset($_SESSION['client'])){
    header('Location:login.php');
}?>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 
<!---  ####### Body content begins ####### -->
<div class="container">
<div class="row">

    <div class="card double text-left">
        <div class="card-header green">
            <h2>My Account</h2>
        </div>
        <div class="card-body">
            <!--inner content begin-->


            <h4>First Name:
                <?php echo $_SESSION['client']['first_name'];?>
            </h4>
            <h4>Last Name:
                <?php echo $_SESSION['client']['last_name'];?>
            </h4>
            <h4>Email:
                <?php echo $_SESSION['client']['email'];?> </h4>
            <h4>Username:
                <?php echo $_SESSION['client']['username'];?>
            </h4>
            <h4>User Id:
                <?php  echo $_SESSION['client']['account_id'];?>
            </h4>
            

            <a href="account-update.php" class='btn btn-primary'>Edit</a>

        </div>

    </div>

    <div class="card double text-left">
        <div class="card-header green">
            <h2>My Co-op</h2>
        </div>
        <div class="card-body">
            <?php if (!isset($_SESSION[ 'coop'][ 'coop_name'])){ echo
                "<h3>Please <a href='co-op.php'class='btn btn-primary'>Create Your Co-op</a></h3>";}?>

                <h4>Co-op Name:
                    <?php echo $_SESSION['coop']['coop_name'];?>
                </h4>
                <h4>Co-op Id:
                    <?php echo $_SESSION['coop']['coop_id'];?>
                </h4>
                <h4>Contact Name:
                    <?php echo $_SESSION['coop']['coop_contact_name'];?>
                </h4>
                <h4>Contact Email:
                    <?php echo $_SESSION['coop']['coop_contact_email'];?> </h4>
                <h4>Full Budget: $
                    <?php echo $_SESSION['coop']['coop_full_budget'];?>
                </h4>
                <h4>Half Budget: $
                    <?php echo $_SESSION['coop']['coop_half_budget'];?>
                </h4>




                <?php if (isset($_SESSION['coop']['coop_name'])){echo "<a href='co-op-update.php' class='btn btn-primary'>Edit</a>";}?>
                <!--inner content end-->
        </div>
    </div>
</div>
</div>

<!--footer begins-->
    
       
<script src ="/scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?>  