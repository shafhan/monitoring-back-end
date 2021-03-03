<?php

namespace Lingkaran;

class Lingkaran 
{
    public function lingkaran($ruas)
    {
        if ($ruas % 7 == 0)
        {
            $phi = 22/7;
            if (isset($_POST['keliling_lingkaran'])) 
            {
                return 2 * $phi * $ruas;
            }elseif (isset($_POST['luas_lingkaran']))
            {
                return $phi * $ruas ** 2;
            }
            
        } else 
        {
            $phi = 3.14;
            if (isset($_POST['keliling_lingkaran'])) 
            {
                return 2 * $phi * $ruas;
            }elseif (isset($_POST['luas_lingkaran']))
            {
                return $phi * $ruas ** 2;
            }
        }
    }
}

// $test = new Lingkaran;
// $result = $test->lingkaran(7);

// var_dump($result);