<?php
?>
    <head>
        <title>3</title>
    </head>
    <form action="" method="get">
        Panjang<input type="number" name="p"></br>
        <input type="submit" name="go">
    </form>
<?php

    if(isset($_GET['go'])) {
        $p = $_GET['p'];
        $l = $_GET['p'];
        if(cekGanjil($p) && cekGanjil($l)) {
            persegi($p, $l);
        } else {
            echo "bilangan harus ganjil";
        }
    }

    function persegi($p, $l) {
        for ($i=1; $i <= $l; $i++) {  
            for ($a=1; $a <= $p; $a++) { 
                if ($i == 1 || $i == $l && $i != middle($l)) {
                    echo "<font color = 'white'>*</font><font color = 'white'>*</font><font color = 'white'>*</font><font color = 'black'>*</font><font color = 'white'>*</font><font color = 'white'>*</font><font color = 'white'>*</font>";
                } else {
                    if ($a== middle($p) || $a == 1 || $a == $p) {
                        echo "<font color = 'white'>*</font><font color = 'white'>*</font><font color = 'white'>*</font><font color = 'black'>*</font><font color = 'white'>*</font><font color = 'white'>*</font><font color = 'white'>*</font>";
                    } else if ($i == middle($l)) {
                        echo "<font color = 'white'>*</font><font color = 'white'>*</font><font color = 'white'>*</font><font color = 'black'>*</font><font color = 'white'>*</font><font color = 'white'>*</font><font color = 'white'>*</font>";
                    } else {
                        echo "<font color = 'white'>*</font><font color = 'white'>*</font><font color = 'white'>*</font><font color = 'white'>*</font><font color = 'white'>*</font><font color = 'white'>*</font><font color = 'white'>*</font>";
                    }
                } 
            }
            echo "</br></br>";
        }
    }

    function middle($a) {
        return ($a + 1) / 2;
    }

    function cekGanjil($b) {
        if($b % 2 == 1)
            return true;
        else
            return false;
    }
?>