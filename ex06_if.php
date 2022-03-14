<html>
    <body>
        <?php
        $t=date("H");
        if($t<"16"){
            echo "Have a good day";
        }
        else if($t>"16" && $t<"20"){
            echo "Good evening";
        }
        else{
            echo "Good Night";
        }
        ?>
    </body>
</html>