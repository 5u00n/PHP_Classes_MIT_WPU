<html>
    <body>
    <?php
        echo "Today is ".date("d/m/y")."<br>";
        echo "Today is ".date("Y.m.y")."<br>";
        echo "Today is ".date("Y-m-d")."<br>";
        echo "Today is ".date("l")."<br>";

        echo "The time is ".date("h:i:sa")."<br>";

        $d=mktime(9,10,34,8,7,2019);
        echo "Created date is ".date("Y-m-d h:i:is",$d)."<br>";

        $d=strtotime("tommorow");
        echo date("Y-m-d",$d);
    ?>
    </body>
</html>