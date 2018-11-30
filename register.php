<?php session_start();?>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 

<!---  ####### Body content begins ####### -->

<div class="jumbotron">
        <div class="container text-center">
            <h1>Register</h1>
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
                          <!--- Form Begins-->
                          <form action="/model/accounts-model.php" method="POST">
           <h2>Register</h2>
        <div class="fail-message"><p>All fields are required</p></div>
        <div>
                <label for="first_name">First Name</label>
        </div>
        <div>
                <input name="first_name" id="first_name" type="text" <?php if (isset($first_name)) {
                echo "value='$first_name'";} ?> required>
        </div>
        <div>
                <label for="last_name">Last Name</label>
        </div>
        <div>
                <input name="last_name" id="last_name" type="text" <?php if (isset($last_name)) {
                echo "value='$last_name'";} ?> required>
        </div>
        <div>
        <label for="username">Username</label>
                </div>
                <div>
                <input name="username" id="username" type="text" <?php if (isset($username)) {
                echo "value='$username'";} ?> required>
        </div>
        <div>
                <label for="email">Email</label>
        </div>
        <div>
                <input type="email" name="email" id="email" <?php if (isset($email)) {
                echo "value='$email'";} ?> required >
        </div>
        <div>
                <label for="user_password">Password</label>
                <p>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter, and 1 special character</p>
        </div>
        <div>
          <input type="password" name="user_password" id="user_password" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">     
        </div>
        <div>
            <label>&nbsp;</label>
            <input type="submit" name="submit" id="regbtn" value="Register" class="register">
            <!-- Add the action name-value pair -->
            <input type="hidden" name="action" value="register">
        </div>
               
            </form>
                          <!--Form ends -->   
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