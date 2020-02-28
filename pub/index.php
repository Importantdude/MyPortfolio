<html>
<?php

include "../Pages/Block/Head.php";
include "../Pages/deleteItem.php";
?>
<body>
<form action="" method="post">


    <?php require "../app/view/partials/Menu/navMenu.php" ?>
    <main>
        <div class="slide">
            <div class="sideBar_logo">
                <img src="media/logo.png">
            </div>

            <?php require "../app/view/partials/slider.php" ?>


        </div>
        <div class="body_struct">
            <?php require "../app/view/partials/Menu/sideMenu.php" ?>

            <div class="prod_catalog">
                <div>
                    Category Name
                    <select id="change">
                        <option value="prod_List">Show product</option>
                        <option value="prod_add">Add new product</option>
                    </select>
                </div>
                <div class="change" id="prod_Appear">
                    <?php require "../app/view/partials/plp.php" ?>
                </div>
                <div class="change" id="prod_New">
                    <?php require "../app/view/partials/insert.php" ?>
                </div>
            </div>
    </main>
</form>

</body>
</html>
