<?php
function cekUsername($str)
{
    $pattern = '^[[:lower:]]{6}$';
    preg_match('/' . $pattern . '/', $str, $match);
    if ($match == TRUE) {
        return 'valid';
    } else {
        return 'invalid';
    }
}

function cekEmail($str)
{
    $pattern = '^([a-z0-9_\-\.]+)@([a-z0-9_\-\.]+)\.([a-z]{2,5})$';
    preg_match('/' . $pattern . '/', $str, $match);
    if ($match == TRUE) {
        return 'valid';
    } else {
        return 'invalid';
    }
}

function cekPassword($str)
{
    $pattern = '^[a-z]{8,}+([[:upper:]]{1}+\d{1})$';
    preg_match('/' . $pattern . '/', $str, $match);
    if ($match == TRUE) {
        return 'valid';
    } else {
        return 'invalid';
    }
}

// Cek USERNAME
echo cekUsername('Kamusiapa');
echo '<br />';

// Cek EMAIL
echo cekEmail('kamusiapa@gmail.com');
echo '<br />';

// Cek PASSWORD
echo cekPassword('Kamusiapa2169');