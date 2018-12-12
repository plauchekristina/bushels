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
                    <h2>Update My Account Information</h2>
                </div>
                <div class="card-body">
                    <form action="model/accounts-update-model.php" method="POST">

                        <div class="fail-message">
                            <p>*All fields are required</p>
                        </div>
                        <div>
                            <label for="first_name">First Name</label>
                        </div>
                        <div>
                            <input name="first_name" id="first_name" type="text" value="<?php echo $_SESSION['client']['first_name'];?>" required>
                        </div>
                        <div>
                            <label for="last_name">Last Name</label>
                        </div>
                        <div>
                            <input name="last_name" id="last_name" type="text" value="<?php echo $_SESSION['client']['last_name'];?>" required>
                        </div>
                        <div>
                            <label for="username">Username</label>
                        </div>
                        <div>
                            <input name="username" id="username" type="text" value="<?php echo $_SESSION['client']['username'];?>" required>
                        </div>
                        <div>
                            <label for="email">Email</label>
                        </div>
                        <div>
                            <input type="email" name="email" id="email" value="<?php echo $_SESSION['client']['email'];?>" required>
                        </div>


                        <div>

                            <input type="submit" name="submit" id="regbtn" value="Update" class="btn btn-primary">
                            <!-- Add the action name-value pair -->
                            <input type="hidden" name="action" value="register">
                        </div>
                        <p class="fail-message">Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter, and 1 special
                            character
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- form ends -->
       
<script src ="/scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 