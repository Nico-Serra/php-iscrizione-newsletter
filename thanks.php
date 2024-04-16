<?php

session_start();
var_dump($_SESSION);

$emailSession = $_SESSION["email"];

?>


<?php include_once __DIR__ . '/layout/head.php'?>

    <main>
        <h1 class="text-center py-5">Grazie per esserti registrato <?php echo $emailSession ?></h1>

    </main>


    <?php include_once __DIR__ . '/layout/foot.php' ?>
