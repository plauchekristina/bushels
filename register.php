<?php session_start();?>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 

<!---  ####### Body content begins ####### -->

<!--Form begins-->
<div class="box">
        <div>
            <div class="card text-left">
                <div class="card-header green">
                   <h2> Register</h2>
                </div>
                <div class="card-body">
                    <form action="/model/accounts-model.php" method="POST">
<h3>Personal Information</h3>

                        <div class="fail-message">
                            <p>* All fields are required</p>
                        </div>
                        <div>
                            <label for="first_name">First Name</label>
                        </div>
                        <div>
                            <input name="first_name" id="first_name" type="text" <?php if (isset($first_name)) { echo "value='$first_name'";} ?> required>
                        </div>
                        <div>
                            <label for="last_name">Last Name</label>
                        </div>
                        <div>
                            <input name="last_name" id="last_name" type="text" <?php if (isset($last_name)) { echo "value='$last_name'";} ?> required>
                        </div>
                        <div>
                            <label for="username">Username</label>
                        </div>
                        <div>
                            <input name="username" id="username" type="text" <?php if (isset($username)) { echo "value='$username'";} ?> required>
                        </div>
                        <div>
                            <label for="email">Email</label>
                        </div>
                        <div>
                            <input type="email" name="email" id="email" <?php if (isset($email)) { echo "value='$email'";} ?> required >
                        </div>
                        <div>
                            <label for="user_password">Password</label>
                            
                        </div>
                        <div>
                            <input type="password" name="user_password" id="user_password" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                        </div>
                        <p class="fail-message">Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter, and
                                1 special character</p>
                        <div>
                            
                            <input type="submit" name="submit" id="regbtn" value="Register" class="btn btn-primary">
                            <!-- Add the action name-value pair -->
                            <input type="hidden" name="action" value="register">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- form ends -->
    
       
<script src ="/scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?>  