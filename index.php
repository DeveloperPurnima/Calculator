<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{ 
            background-color: black; 
        } 
        #home{ 
            background-color: rgb(8, 186, 186); 
            width: 500px; 
            height: 300px; 
            margin-top: 200px; 
            padding-top: 40px; 
            margin-left: 500px; 
            border-radius: 10px; 
        
        } 
        .calculator{ 
            color: white; 
            text-align: center; 
        } 
        #home-four{ 
            padding-left: 20px; 
            padding-right: 20px; 
            padding-bottom: 20px; 
        } 
        .space{ 
            margin-bottom: 5px; 
        } 
        .space-two{ 
            margin-bottom: 6px; 
            margin-right: 10px; 
            float: left; 
            width: 390px; 
            cursor: pointer; 
        } 
        
        .count { 
            display: inline-block; 
        
            font-size: 10px; 
            cursor: pointer; 
            text-align: center; 
            text-decoration: none; 
            outline: none; 
            color: white; 
            background-color: rgb(236, 26, 26); 
            border: none; 
            border-radius: 5px; 
            box-shadow: 0 3px rgb(110, 107, 107); 
            height: 30px; 
            width: 60px; 
        } 
        
        .count:hover { 
            background-color: rgb(236, 26, 26); 
        
        } 
        
        .count:active { 
            background-color: rgb(236, 26, 85); 
            box-shadow: 0 5px rgb(81, 79, 79); 
            transform: translateY(5px); 
        }
    </style>
</head>

<body>
<?php
    $result = "0";
    if(isset($_POST['count']))
    {
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $res = $_POST['operator'];
        if($res == "add")
        {
            $result = $n1 + $n2;
        }

        else if($res == "sub")
        {
            $result = $n1 - $n2;
        }
        else if($res == "mul")
        {
            $result = $n1 * $n2;
        }
        else if($res == "div")
        {
            $result = $n1 / $n2;
        }
        
    }
     ?>

    <form action="index.php" method="post">
        <div id="home">
            <div id="home-four">
                <h1 class="calculator">CALCULATOR</h1>
                <input type="text" name="num1" class="form-control space" placeholder="Enter the first number">
                <input type="text" name="num2" class="form-control space" placeholder="Enter the second number">
                <select class="custom-select space-two" name="operator" id="">
                    <option value="none">None</option>
                    <option value="add">+</option>
                    <option value="sub">-</option>
                    <option value="mul">*</option>
                    <option value="div">/</option>
                </select>
                <input type="submit" name="count" value="count" class="count">
                <input type="text" name="s3" class="form-control" value="<?php echo $result; ?>" readonly>
            </div>
        </div>
    </form>

 

    

</body>

</html>