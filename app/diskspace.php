<?php
declare(strict_types = 1);
define('MAX_VALUE', 9223372036854775807);

//überprüft ob eine gegebene Zahl >0 und < 9223372036854775807 ist
function checkNumber($number): bool
{
    if($number > 0 && $number <= MAX_VALUE) {
        return true;
    }
    return false;
}
function convertGBtoMB($number): float {
    return $number * 1024;
}

function picturecount() {
    $disk = (float)$_POST['harddisksize'];
    //echo $disk;
    $picture = (float)$_POST['picturesize'];
    if(checkNumber(convertGBtoMB($disk)) && checkNumber($picture)) {
       /** $disk = convertGBtoMB($disk);
        $count = fdiv($disk, $picture);
        $count = floor($count);
        return $count; **/
        return floor(fdiv(convertGBtoMB($disk), $picture));
    }
}
?>

<form>

    <p>Bildgröße in Mb dezimal :
        <input type="text" name="picturesize">
    </p>
    <p>Festplattengröße in Gb:
        <input type="text" name="harddisksize">
        <input type="submit" value="OK" formaction="diskspace.php" formmethod="post"> </p>
        <?php echo 'Die aktuelle PHP Version ist ' . phpversion(); ?>
    <p>
        Es können <?php echo picturecount() ?> auf der Festplatte gespeichert werden.
    </p>

</form>
