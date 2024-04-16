<?php

require_once __DIR__ . '/utilities/functions.php';

$email = $_GET["email"];

if (isset($_GET["email"])) {

    $checker = checkEmail($email);
    if ($checker === true) {
        header('Location: ./thanks.php');
    }
    //var_dump($checker);
    $message = messageAlert($checker);
    //var_dump($message);
}
session_start();
$_SESSION["email"] = $email;


?>

<?php include_once __DIR__ . '/layout/head.php' ?>

<main>
    <?php if ((isset($_GET["email"]))) : ?>
        <div class="alert alert-<?php echo $message["status"] ?> alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong><?php echo $message["text"] ?></strong>
        </div>
    <?php endif ?>

    <div class="container text-center py-4">
        <h1>Subscribe a Newsletter</h1>
        <form action="" method="get" class="py-4">
            <input type="text" name="email" placeholder="<?php if (!isset($_GET["email"])) {
                                                                echo 'insert your email address';
                                                            } else {
                                                                echo $email;
                                                            } ?>">
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>



</main>

<?php include_once __DIR__ . '/layout/foot.php' ?>