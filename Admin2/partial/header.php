
<?php
    include_once('config/config.php');
    include_once('functions/functions.php');
    session_start([0, '/', maindomain, true, true]);
    spl_autoload_register(function($class){
        require_once("classes/{$class}.php");
        });
    include_once('functions/messages.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet" SameSite='None'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" SameSite='None'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" SameSite='None'>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>


        <section class="adminhead">
            <div class="nav">

                <div class="nav-icon">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>

                <div class="logo-part">
                    <a href="#">REENZA  ADMIN</a>  
                </div>

                <div class="iconpart">
                    <i class="fa fa-envelope-o msgx" aria-hidden="true" ></i>
                    <i class="fa fa-user useracx" aria-hidden="true"></i>
                    <i class="fa fa-bell-o notix" aria-hidden="true"></i>
                </div>

            </div>
            <div class="sidebar">
                <div class="header">
                    <a href="#">Dashboard</a>
                    <button type="button" class="btn btn-danger btn-sm" id="closesidebar">X</button>
                </div>

                <div class="navarae">

                    <div class="navparent">
                        <div class="nav-title">
                            <div class="icon">
                                <i class="fa fa-shopping-basket"></i>    
                            </div>
                            <h3>Products</h3>
                            <div class="toggle">
                                <i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </div>
                        </div>
                        <ul class="navlink list-unstyled">
                            <li><a href=""> All Products</a></li>
                            <li><a href="">Add Products</a></li>
                        </ul>
                    </div>

                    <div class="navparent">
                        <div class="nav-title">
                            <div class="icon">
                                <i class="fa fa-shopping-cart"></i>    
                            </div>
                            <h3>Orders</h3>
                            <div class="toggle">
                                <i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </div>
                        </div>
                        <ul class="navlink list-unstyled">
                            <li><a href=""> Latest Order</a></li>
                            <li><a href="">Order History</a></li>
                        </ul>
                    </div>

                    <div class="navparent">
                        <div class="nav-title">
                            <div class="icon">
                                <i class="fa fa-users"></i>    
                            </div>
                            <h3>Customers</h3>
                            <div class="toggle">
                                <i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </div>
                        </div>
                        <ul class="navlink list-unstyled">
                            <li><a href=""> All Customers</a></li>
                            <li><a href="">Manage Customers</a></li>
                        </ul>
                    </div>

                    <div class="navparent">
                        <div class="nav-title">
                            <div class="icon">
                                <i class="fa fa-user"></i>    
                            </div>
                            <h3>SalesRep</h3>
                            <div class="toggle">
                                <i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </div>
                        </div>
                        <ul class="navlink list-unstyled">
                            <li><a href=""> Manage SalesRep</a></li>
                            <li><a href="">Add SalesRep</a></li>
                        </ul>
                    </div>

                    <div class="navparent">
                        <div class="nav-title">
                            <div class="icon">
                                <i class="fa fa-folder"></i>    
                            </div>
                            <h3>Category</h3>
                            <div class="toggle">
                                <i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </div>
                        </div>
                        <ul class="navlink list-unstyled">
                            <li><a href=""> Manage Categories</a></li>
                            <li><a href="">Add New Categories</a></li>
                        </ul>
                    </div>


                </div>

            </div>
            
        </section>

        <div class="useraccountbox">
            <ul class="list-unstyled">
                <li><a href="#">Login</a></li>
                <li><a href="#">Add Products</a></li>
                <li><a href="#"> New Order</a></li>
                <li><a href="#">Add SalesRep</a></li>
                <li><a href="#">LogOut</a></li>
            </ul>
        </div>
    
