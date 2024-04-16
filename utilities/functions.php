<?php
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