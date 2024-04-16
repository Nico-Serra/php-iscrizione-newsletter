<?php

$email = $_GET["email"];

if (isset($_GET["email"])) {

    $checker = checkEmail($email);
    //var_dump($checker);
    $message = messageAlert($checker);
    var_dump($message);
}


function checkEmail($email)
{
    if (str_contains($email, '@') && str_contains($email, '.')) {
        //echo 'Ti sei registrato correttamente';
        return true;
    } else {
        // echo 'La tua email non possiede i requisiti adatti per poterti registrare';
        return false;
    }
};

function messageAlert($checker)
{
    if ($checker) {
        return [
            "status" => "success",
            "text" => "Ti sei registrato correttamente"
        ];
    }
    return [
        "status" => "danger",
        "text" => "La tua email non possiede i requisiti adatti per poterti registrare"
    ];
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

    </header>

    <main>
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