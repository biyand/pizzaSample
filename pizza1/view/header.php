<?php $app_path = "/cs637/biyand/pizza1/"; ?>
    
<!DOCTYPE html>
<html> 
<head>
    <title>My Pizza Shop</title>
    <link rel="stylesheet" type="text/css"
           href="<?php echo $app_path . 'main.css'?>">
</head>
<!-- the body section -->
<body>
    <aside>
    <img src="<?php echo $app_path?>images/pizzapie.jpg" alt="Pizza">
    </aside>
        
    <header><h1>My Pizza Shop<br></h1></header>
    <aside>
        <br>
        <a href="<?php echo $app_path?>">Home</a>
        <br><br>
        <a href="<?php echo $app_path?>pizza/">Student Orders</a>
    </aside>
