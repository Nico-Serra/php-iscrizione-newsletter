<?php

session_start();
var_dump($_SESSION);

$emailSession = $_SESSION["email"];

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
                <a class="navbar-brand text-light" href="/php/ex_boolean_php/php-iscrizione-newsletter">NewsLetter</a>

                <div class="collapse navbar-collapse" id="navbarID">
                    <div class="navbar-nav">
                        <a class="nav-link active text-light" aria-current="page" href="/php/ex_boolean_php/php-iscrizione-newsletter">Home</a>
                        <a class="nav-link active text-light" aria-current="page" href="">About</a>
                        <a class="nav-link active text-light" aria-current="page" href="">Contact</a>

                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <h1 class="text-center py-5">Grazie per esserti registrato <?php echo $emailSession ?></h1>

    </main>

    <footer>

    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>