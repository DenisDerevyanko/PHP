<?php

$displayfirst = 'none';
$secondtask   = 'none';
if (strlen($_POST['fio']) > 0) {
    $secondtask = 'block';
    $fio        = $_POST['fio'];
    $fio        = mb_convert_case($fio, MB_CASE_TITLE, "UTF-8"); /*
																 * Зміна регістру літер в ПІП										 * 
																 */
    $fio        = explode(' ', $fio); /*
									  *Розділяєм слова в ПІП 									  * 
									  */
    $kname      = $fio[0];
    $ksoname    = $fio[1];
    $ksoname    = mb_substr($ksoname, 0, 1); /*
											  * повертаєм 1-шу частину(літеру) рядка 									  * 
									 		 */
    $kparent    = $fio[1];
    $kparent    = mb_substr($kparent, 0, 1);
    $kioresult  = $kname . ' ' . $ksoname . '. ' . $kparent . '.';
}


?>

<form action="index.php" method="post">
    <label for="fio">Task 2</label>
    <input type="text" name="fio">
    <input type="hidden" name="submit">
    <input type="submit">
</form>

<div class="secondtask" style="display: <?= $secondtask ?>">
    <h1>Short name</h1>
    <p><?= $kioresult ?></p>
</div>