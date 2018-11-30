<?php session_start(); ?>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 

<!---  ####### Body content begins ####### -->


            <div class="col-sm-12">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default text-left well">
                            <div class="panel-body">
                          <!--- Form Begins-->
                          <form action="model/login-model.php" method="POST">
                          
           <h2>Login</h2>
        <div class="fail-message"><p>All fields are required <?php if (isset($_SESSION['message'])){echo $_SESSION['message'];} ?></p></div>
        
        <div>
        <label for="username">Username</label>
                </div>
                <div>
                <input name="username" id="username" type="text" required>
        </div>

        <div>
                <label for="user_password">Password</label>
                <p>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter, and 1 special character</p>
             
        </div>
        <div>
          <input type="password" name="user_password" id="user_password" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">     
        </div>
        <div class="submit">
           
            <input type="submit" name="submit" id="regbtn" value="Login" class="btn-success">
            <!-- Add the action name-value pair -->
            
        </div>
               
            </form>
                          <!--Form ends -->   
                            
<!--end center column-->
</div>
</div>

       
<script src ="/scripts/functions.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?>  