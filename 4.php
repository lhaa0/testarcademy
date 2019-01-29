<?php
?>
    <head>
        <title>4</title>
    </head>
    <form action="" method="get">
        Value<input type="text" name="str"></br>
        Dari<input type="text" name="frm"></br>
        Ke<input type="text" name="to"></br>
        <input type="submit" name="go">
    </form>
    <?php

    if(isset($_GET['go'])) { 
        echo "Dari ".$_GET['str']."<br>";
        echo "Menjadi ".replace($_GET['str'], $_GET['frm'], $_GET['to']);
    }

    function replace($str, $frm, $to){
        $new = "";
        $char_array = str_split($str);
        for ($i = 0; $i < strlen($str); $i++) {
            if ($char_array[$i] == $frm) {
                $char_array[$i] = $to;
            }
            $new = $new.$char_array[$i];
        }
        return $new;
    }