<?php
?>
    <head>
        <title>5</title>
    </head>
    <form action="" method="get">
        Value<input type="input" name="str"></br>
        <input type="submit" name="go">
    </form>
    <?php
    if(isset($_GET['go'])) {
        echo count_handshake($_GET['str']);
    }

    function count_handshake($a) {
        $b = $a;
        $r = 0;
        for ($i=1; $i <= $a-1; $i++) { 
            $r = $r + $i;
        }
        return $r;
    }
