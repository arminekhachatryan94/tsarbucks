<nav class="navig container-fluid">
    <div class="h3">
        <a href="index.php" class="h2 text-white">Tsarbucks</a>
        <?php
        if( empty($_SESSION["username"]) ){ ?>
        <a href="login.php" class="nav-comp text-white">Login</a>
        <?php } 
        else{ ?>
        <a href="
                 <?php
                    if( $_SESSION["display_name"] == "Barista" ){
                        echo "barista_home.php";
                    } else if( $_SESSION["display_name"] == "Customer" ){
                        echo "customer_home.php";
                    } else{
                        echo "#";
                    } ?>" class="nav-comp text-white">Hello, <?php echo $_SESSION["username"];
                ?></a>
        <a href="logout.php" class="nav-comp text-white">Logout</a>
        <?php } ?>

    </div>
</nav>