<?php

namespace Persegi;

class Persegi 
{
    public function persegi($panjang, $lebar)
    {
        if (isset($_POST['keliling_persegi']))
        {
            return (2 * $panjang) + (2 * $lebar);
        } elseif (isset($_POST['luas_persegi']))
        {
            return $panjang * $lebar;
        }
    }
}