<?php session_start(); ?>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 

<!---  ####### Body content begins ####### -->
<div class="box">
    <div>
<div class="card text-left">
                <div class="card-header green">
                <h2>Login</h2>
                </div>
                
                <div class="card-body">
                <div class="fail-message"><p>*All fields are required <?php if (isset($_SESSION['message'])){echo $_SESSION['message'];} ?></p></div>
                <form action="model/login-model.php" method="POST">
                <p>Welcome! Please enter your username and password to access your account.</p>
                <div>
                <label for="username">Username</label>
                        </div>
                        <div>
                        <input name="username" id="username" type="text" required>
                </div>
        
                <div>
                        <label for="user_password">Password</label>
                        
                     
                </div>
                <div>
                  <input type="password" name="user_password" id="user_password" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">     
                </div>
                <div class="submit">
                   
                    <input type="submit" name="submit" id="regbtn" value="Login" class="btn btn-primary">
                </div>
                </form>
            </div>
            </div>    
            </div>
            
                          <!--Form ends -->   
                            
<!--end center column-->
</div>


       
<script src ="/scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?>  