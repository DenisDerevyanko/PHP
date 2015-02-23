<?php

$displayfirst = 'none';
$secondtask   = 'none';
if (isset($_POST['submit'])) {
    if (strlen($_POST['number']) > 0) {
        /*
         * перевірка чи число більше 0
         */
        if (is_numeric($_POST['number'])) {
            $number       = $_POST['number'];
            $displayfirst = 'block';
            $summresult   = 0;
            /*
	         * прирівнюєм результат до 0  
           	 */
            for ($i = 1; $i <= $number; $i++) {
                $resultatkvadrat[$i] = $i * $i;
                $summresult += $resultatkvadrat[$i];
            }
            /*
             *сумуєм квадрати числа
             */
            $result = implode(" , ", $resultatkvadrat);
        } else {
            $displayfirst = 'block';
            $number       = 'Type the numbers';
            $result       = $number;
            $summresult   = $number;
        }
        
    }
    
}

?>

<form action="index.php" method="post">
    <label for="number">task 1</label>
    <input type="text" name="number">
    <input type="hidden" name="submit">
    <input type="submit">
</form>

<div class="result" style="display: <?= $displayfirst ?>">
    <h3><p>number = <?= $number ?></p></h3>
    <h4><p>Kvadratы numbers</p><?= $result ?></h4>
    <h4><p>Amount squares of numbers</p><?= $summresult ?></h4>
</div>
