<?php
function cal($firstNumber, $secondNumber)
{
    try {
        if ($secondNumber == 0 || ($firstNumber == 0 && $secondNumber == 0)) {
            throw new Exception("Mau so phai khac 0!!");
        }
        echo "<br>Sum:" . ($firstNumber + $secondNumber)
            . "<br>Sub:" . ($firstNumber - $secondNumber) .
            "<br>Mul:" . ($firstNumber * $secondNumber)
            . "<br>Div:" . ($firstNumber / $secondNumber);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
echo "5,5";
cal(5, 5);
echo "<br><br>";

echo "0,1";
cal(0, 1);
echo "<br><br>";

echo "0,0";
cal(0, 0);

?>
