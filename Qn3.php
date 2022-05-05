<?php
    if(isset($_POST['submit'])) {

        $s = $_POST['s'];
        $l = $_POST['l'];
        $b = $_POST['b'];
        $r = $_POST['r'];

        interface findarea{
            function area($l,$c);
        }

        class rectangle implements findarea{
            function area($l,$b){
                $area = $l* $b;
                echo "Area of Rectangle : ".$area."<br>";
            }
        }

        class square extends rectangle{
            function area($s,$b){
                $area = $s* $s;
                echo "Area of Square : ".$area."<br>";
            }
        }

        class circle{
            function area($r){
                $area = 0.5* $r* $r;
                echo "Area of Circle : ".$area."<br>";
            }
        }

        $fr = new rectangle;
        $fr -> area($l,$b);

        $fs = new square;
        $fs -> area($s,$b);

        $fc = new circle;
        $fc -> area($r);
    }
?>

<html>
<body>
    <form action="#" method="POST">
    <h2>  Rectangle :   </h2>
    Enter length  : <input type="text" name=l>  <br>
    Enter breath : <input type="text" name=b>

    <h2>  Square :   </h2>
    Enter side for Square : <input type="text" name=s>

    <h2>  Circle :   </h2>
    Enter radius : <input type="text" name=r>  <br>

    <input type="submit" name=submit value=Submit>

    </form>
</body>
</html>

