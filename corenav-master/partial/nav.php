<nav hidden>
    <div class="nav-header">
        <a href="#" class="brand"><img src="./assets/img/brand.png" /></a>
        <button class="toggle-bar"><span class="fa fa-bars"></span></button>
    </div>
    <ul class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="service.php">Service</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <?php
            if($_SESSION[id]){
                echo "<li><a id='logout' href='function/logout.php'>Log out</a>";
            }
            else{
                echo "<li><a id='login' href='#'>Log in</a>";
            }
        ?>
    </ul>
</nav>