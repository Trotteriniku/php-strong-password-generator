<?php


function passgenerator()
{
    if (!empty($_POST['passlen'])) {
        $passlen = $_POST['passlen'];

        $symbols = '!?&%$<>^+-*/()[]{}@#_=';
        $letters = 'qwertyuiopasdfghjklzxcvbnm';
        $upletters = strtoupper($letters);
        $numbers = '0123456789';
        $allOptions = $symbols . $letters . $numbers . $upletters;
        $newpass = '';
        for ($i = 0; $i < $passlen; $i++) {
            $newpass .= substr(($symbols . $letters . $numbers . $upletters), rand(0, strlen($allOptions) - 1), 1);
        }


        return $newpass;
    }

    return 'Inserisci una lunghezza';
}


?>