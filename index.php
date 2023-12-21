<html>
    <head>Hello</head>
    <body>
        <h1>This is php <?php echo 'Hello World!'; ?></h1>
        <div>
            <p>1</p>
            <?php
            $var_a = 1;
            $var_a = "1$var_a"; // 1 1
            print_r($var_a);
            echo "<br>" ;
            echo $var_a . "2"; //12,3
            $arry = array();
            $arry = [];
            $arry[] = 1;
            $arry[] = 2;
            $arry[0] = 3;
            print_r($arry);
            // count
            //sizeof
            for($i = 0;$i < sizeof($arry);$i++)
            {
                echo "<h1>my h1</h1>";
            ?>
            <p>2</p>
            <?php
            
            ?>
            }
        </div>
    </body>
</html>