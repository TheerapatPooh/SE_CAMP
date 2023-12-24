<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="multiple.css">
</head>

<body>
    <?php
    $multi_x = isset($_POST['multi_x']) ? $_POST['multi_x'] : 2;
    $value = 0;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $multi_x = $_POST['multi_x'];
    }
    ?>

    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <form method="post" action="">
        <label for="inputNumber">จงใส่เลข:</label>
        <input type="number" name="multi_x" id="inputNumber" value="<?php echo $multi_x ?>">
        <button type="submit" id="btn_calculate">คำนวณ</button>
    </form>

    <div id="multiplicationTable">
        <?php
        for ($i = 1; $i < 25; $i++) {
            $value = $multi_x * $i;
            echo "
                <table>
                    <tbody>
                        <tr>
                            <td>$multi_x</td>
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
