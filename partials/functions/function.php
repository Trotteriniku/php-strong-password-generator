<?php


function passgenerator()
{
    if (!empty($_GET['passlen'])) {
        $passlen = $_GET['passlen'];

        $symbols = '!?&%$<>^+-*/()[]{}@#_=';
        $letters = 'qwertyuiopasdfghjklzxcvbnm';
        $newpass = '';
        for ($i = 0; $i < $passlen; $i++) {
            // $newpass .= substr(($letters[rand(0, strlen($letters) - 1)] . mt_rand() . $symbols[rand(0, strlen($symbols) - 1)]), rand(0, 2), 1);
        }

        var_dump($newpass);
    }


}


?>