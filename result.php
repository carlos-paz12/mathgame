<!DOCTYPE html>
<html lang="en">

<?php
    $number1 = $_GET['n1'];
    $number2 = $_GET['n2'];
    $operation = $_GET['op'];
    $answer = $_POST['answer'];

    if ($operation == 1)
    {
        $result = $number1 + $number2;
    }
    else if ($operation == 2)
    {
        $result = $number1 - $number2;
    }
    else if ($operation == 3)
    {
        $result = $number1 * $number2;
    }
    else
    {
        $result = $number1 / $number2;
    }

    $won = $result == $answer;
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/result_style.css">
    <link rel="stylesheet" href="styles/general_style.css">

    <title>MathGame | Result</title>
</head>

<body>
    <div class="container">
        <?php if ($won) { ?>

	        <img src="res/correct.svg" alt="Correct icon">
	        <h1 class="title">Nice!</h1> <br>
        
        <?php } else { ?>

	        <img src="res/incorrect.svg" alt="Incorrect icon">
	        <h1 class="title">So close, the answer was <?=$result;?></h1> <br>
            
        <?php } ?>

	        <a href="index.html">Home</a>
	</div>
</body>

</html>