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



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-primary">
            <div class="container-fluid ">
                <a class="navbar-brand text-light" href="#">NewsLetter</a>

                <div class="collapse navbar-collapse" id="navbarID">
                    <div class="navbar-nav">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                        <a class="nav-link active text-light" aria-current="page" href="">About</a>
                        <a class="nav-link active text-light" aria-current="page" href="">Contact</a>

                    </div>
                </div>
            </div>
        </nav>
    </header>

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
                <input type="text" name="email" placeholder="Insert your email address">
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>



    </main>

    <footer>

    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>