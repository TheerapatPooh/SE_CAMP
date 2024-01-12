<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Easy Multiple Table</title>
    <style>
        *{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h1{
            color: #262626;
            font-weight: bolder;
            font-size: 64pt;
            text-align: center;
            text-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        div {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: #F24405 solid 2px;
            background-color: #F2F2F2;
            width: 300px;
            box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.1);
        }
        table {
            color: #8C3908;
            background-color: #F2F2F2;
            border: #F24405 solid 2px;
            width: 300px;
        }
        table:hover{
            background-color: #F25C05;
            color: #F2F2F2;
            transition: all 0.3s;
        }
        td{
            font-size: 22pt;
            height: 50px;
            width: 90px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1><?php echo $myinput; ?>x</h1>
    <div>
        <?php
        $value = 0;
        for ($i=1; $i <= 24; $i++) {
            $value = $myinput * $i;
            echo "
                    <table>
                        <tbody>
                            <tr>
                                <td>$myinput</td>
                                <td>x</td>
                                <td>$i</td>
                                <td>=</td>
                                <td>$value</td>
                            </tr>
                        </tbody>
                    </table>";
        }
        ?>
    </div>
</body>
</html>
