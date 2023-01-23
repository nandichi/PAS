<div class="wrapper">
    <ul class="nav-area">
        <li><a href=index.php?page=homepage>home</a></li>
        <li><a href=index.php?page=registreer>register</a></li>



        <?php
        if (in_array("username", $_SESSION)) {
            echo "<li><a href='index.php?page=pakket'>pakketten</a> </li>";
            echo "<li><a href='index.php?page=verzenden'>verzenden</a> </li>";
            echo "<li><a href='index.php?page=tracking'>tracking</a> </li>";
            echo "<li><a href='index.php?page=logout'>logout</a> </li>";


        } else {
            echo "<li><a href='index.php?page=login'>login</a> </li>";
        }

        if (isset($_SESSION['ingelogd'])) {
            echo '<li><a href="index.php?page=admin">admin</a></li>';
            echo '<li><a href="index.php?page=mwtoevoegen">toevoegen</a>';
        } elseif (isset($_SESSION['ingelogd1'])) {

        }
        ?>
    </ul>
</div>
