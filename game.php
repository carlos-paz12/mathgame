<!DOCTYPE html>
<html lang="en">

<?php
    $operation = $_POST['select-operation'];
    $number1 = rand(1, 99);
    $number2 = rand(1, 99);

    if ($operation == 1)
    {
        $operationSymbol = '+';
    }
    else if ($operation == 2)
    {
        $operationSymbol = '-';
    }
    else if ($operation == 3)
    {
        $operationSymbol = 'x';
    }
    else
    {
        $operationSymbol = '/';
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/game_style.css">
    <link rel="stylesheet" href="styles/general_style.css">

    <title>MathGame | Game</title>
</head>

<body>
	<div class="container">
		<h1 class="title">How much is?</h1>
		<div id="game-values">
			<span><?=$number1;?></span>
			<span><?=$operationSymbol;?></span>
			<span><?=$number2;?></span>
		</div>

		<div id="answer-container">
			<form action="result.php?n1=<?=$number1;?>&n2=<?=$number2;?>&op=<?=$operation;?>" method="post">
				<input type="text" id="answer" name="answer">
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>

</body>

</html>