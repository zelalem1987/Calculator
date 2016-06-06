<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="display.css">
        <meta charset="UTF-8">
        <title>
            Basic Calculator
        </title>
        <script type="text/javascript" src="restriction.js"></script>
    </head>
    <div class="body_style">
        <img src='background_image3.jpg' 
             style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;'>
        <body>
            <div class="header"><H1>Please give two numbers and an operator </H1></div>
            <form method="post" action="index.php">

                <div><input type="text" class="numbers" name="firstNumber" id="firstNumber" 
                            placeholder="First Number" onkeypress = "return numericOnly(this);"></div>
                <br>
                <div><input type="text" class="operator" name="operator" id="operator" MaxLength="1"
                            placeholder="+ - * /" onkeypress="return OperatorOnly(event)"></div>
                <br>
                <div><input type="text" class="numbers" name="secondNumber"id="secondNumber" 
                            placeholder="Second Number" onkeypress = "return numericOnly(this);"></div>
                <br><br>
                <div><input type="submit" class="calculate_button" name="submit" value="Calculate"></div>
            </form> 

            <?php
            require 'Calculator.php';

//Takes two number inputs and an operator
            $number1 = filter_input(INPUT_POST, 'firstNumber');
            $number2 = filter_input(INPUT_POST, 'secondNumber');
            $operator = filter_input(INPUT_POST, 'operator');

//Create an instance from Calculator class:
            $calculator = new Calculator();

            if ($operator != NULL) {
                $result_style = "<font size='5' face='Arial'font color='#545454'>";
                echo "<br>" . "$result_style" . "<i>" . "<b>";
                if ($number1 != NULL && $number2 != NULL) {
                    if ($operator == '+') {
                        echo "$number1" . " " . "+" . " " . "$number2" . " " . "=" . " "
                        . $calculator->add($number1, $number2);
                    } elseif ($operator == '-') {
                        echo "$number1" . " " . "-" . " " . "$number2" . " " . "=" . " "
                        . $calculator->subtract($number1, $number2);
                    } elseif ($operator == '*') {
                        echo "$number1" . " " . "*" . " " . "$number2" . " " . "=" . " "
                        . $calculator->multiply($number1, $number2);
                    } elseif ($operator == '/') {
                        if ($number2 == 0) {
                            echo "Invalid input, second number must be different than 0.";
                        } else {
                            echo "$number1" . " " . "/" . " " . "$number2" . " " . "=" . " "
                            . $calculator->divide($number1, $number2);
                        }
                    }
                } else {
                    echo "Please enter both numbers!";
                }
            }
            ?>

        </body></div>

</html>
