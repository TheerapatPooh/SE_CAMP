<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Easy Multiplication Table</title>
    <style>
        *{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        body{
            margin: 0;
            padding: 0;
            color: #262626;
            background-color: #e8e8e8;
        }
        h1{
            margin-top:50px;
            text-align: center;
            padding: 0;
        }
        .box {
            position: absolute;
            top: 20%;
            left: 42.5%;
            transform: translate(-50px,-50px);
        }
        #btn_submit {
            padding: 10px;
            margin-left: -5px;
            border: none;
            border-radius: 0 25px 25px 0;
            background-color: #F25C05;
            height: 50px;
            font-size: 20px;
            font-weight: bold;
            box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.1);
        }
        #input_number {
            padding: 10px;
            border-radius: 25px 0 0 25px;
            border: none;
            outline: none;
            background-color: #F2F2F2;
            width: 200px;
            height: 30px;
            font-size: 20px;
            box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.1);
        }
        #btn_submit:hover {
            background-color: #8C3908;
            color: #F2F2F2;
            cursor: pointer;
            transition: 0.3s;
        }
    </style>
</head>
<body>
    <h1>Easy Multiplication Table</h1>
    <div class="box">
        <form method="post" action="/my-route">
            @csrf
            <input type="number" placeholder="Please input number 1,2,3,..." name="myinput" id="input_number">
            <button type="submit" id="btn_submit">Generate Table</button>
        </form>
    </div>
</body>
</html>
