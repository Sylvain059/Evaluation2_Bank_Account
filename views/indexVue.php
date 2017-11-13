<?php
include("templates/header.php");
include('entities/account.class.php');
?>

    <p>This is the index view</p>
    <p>
        <?php
        $sylvain = new Account('sculier', 'sylvain', 365898482548, 500);
        var_dump($sylvain);
        ?>
    </p>


<?php
include("templates/footer.php");
?>