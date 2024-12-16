<?php

function debuguear($variable1 = '', $variable2 = ''): string
{
    echo "<pre>";
    var_dump($variable1);
    var_dump($variable2);
    echo "</pre>";
    exit;
}

// Escapa/Sanitizar el HTML
function santzar($codigoHTML): string
{
    $sanitizar = htmlspecialchars($codigoHTML);
    return $sanitizar;
}

function esUltimo(string $actual, string $proximo): bool {
    if ($actual !== $proximo) {
        return true;
    }
    return false;
}

// Funcion que revisa que el usuario este aunticado
function isAuth(): void
{
    if (!isset($_SESSION['login'])) {
        header('Location: /');
    }
}

function isAdmin(): void
{
    if(!isset($_SESSION['admin'])) {
        header('Location: /');
    };
}