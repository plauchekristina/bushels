<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Bushels Co-op Service</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="../images/bushel-logo-nav.svg">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="../order-form.php">Order Form</a>
                    </li>
                    <?php 
                    
                                        if (isset($_SESSION['client'])){
                                        if (!isset($_SESSION['coop']['coop_name'])){ echo "";
                                        }else{ echo "<li>
                                            <a href='/order-form.php'>Order Form</a>
                                        </li>
                                        <li>
                                            <a href='/dashboard.php'>Dashboard</a>
                                        </li>";}
                                   
                    
                                    }
                                       
                                        if (isset($_SESSION['client'])){echo "<li><a href='logout.php'>Logout</a></li>";}
                                        else{echo"<li><a href='/login.php'>Login</a></li>";}?>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group input-group">
                        <input type="text" class="form-control" placeholder="Search..">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/account.php">
                            <span class="glyphicon glyphicon-user"></span><?php if(isset($_SESSION['client'])){echo "Welcome, ".$_SESSION['client']['first_name'];}?> My Account</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   