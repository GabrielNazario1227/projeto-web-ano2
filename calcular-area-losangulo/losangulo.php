<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $numero1=$_POST["num1"];
        $numero2=$_POST["num2"];
        
        $area=$numero1*$numero2/2;
        echo "O valor da area é: ".$area;
        
        ?>
    </body>
</html>