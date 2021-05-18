<?php
declare(strict_types = 1);
define('MAX_VALUE', 9223372036854775807);

//überprüft ob eine gegebene Zahl >0 und < 9223372036854775807 ist
function checkNumber(int $number): bool {
    if($number > 0 && $number <= MAX_VALUE) {
        return true;
    }
    return false;
}
function convertGBtoMB(float $number): float {
    return $number * 1000;
}

function picturecount() {
    $disksize = $_POST['harddisksize'];
    $picturesize = $_POST['picturesize'];
    if(checkNumber($disksize) && checkNumber($picturesize)) {
        return floor(fdiv(concertGBtoMB($disksize), $picturesize));
    }
}
?>

<form>

    <p>Bildgröße in Mb dezimal :
        <input type="number" name="picturesize">
    </p>
    <p>max zufällige Primzahlen:
        <input type="number" name="harddisksize">
        <input type="submit" value="Primzahlen max" formaction="diskspace.php" formmethod="post">
        Es können <?php picturecount() ?> auf der Festplatte gespeichert werden.
    </p>

</form>
