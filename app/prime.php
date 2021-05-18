<?php
declare(strict_types = 1);

//Ueberprueft ob eine uebergebene Zahl eine natürliche Zahl ist
function isNatuerlicheZahl(int $zahl): bool{
    if(is_int($zahl) && $zahl > 0) {
        return true;
    }
    //echo "Natürliche Zahl eingen";
    return false;
}

//ueberprueft ob ein gegebene Zahl eine Primzahl ist
function isPrime ($zahl): bool {
    $isPrime = true;
    $k = 2;
    while ($k*$k <= $zahl && $isPrime == true) {
        $temp = $zahl % $k;
        if($temp == 0) {
            $isPrime = false;
        }
        $k = $k +1;
    }
    return $isPrime;
}

//Such Primzahlen aufsteigend von 0 bis zu einer Grenze
function primeArray() {
    $array[] = array();
    $primeTillNumber = (int)$_POST['zahlBis'];
    //if(isset($primeTillNumber)) //
    for ($i = 0; $i <= $primeTillNumber;$i++) {
        // Bug mit Schleife: text wird mehrfach angezeigt

        if(isNatuerlicheZahl($i)) {
            if(isPrime($i)){
                array_push($array, $i);
                //$array[$counter] = $i;
                //$counter = $counter + 1;
            }
        }
    }
    foreach($array AS $primZahl) {
        echo "$primZahl <br>";
    }
}
//Sucht n zufällige Primzahlen
function maxPrimeArray(){
    $array[] = array();
    $counter = $_POST['maxPrim'];
    //
    $i = 0;
    while ($i < $counter) {
        $randNumber = rand();
        //echo "$randNumber <br>";
        if(isNatuerlicheZahl($randNumber) && isset($counter)) {
            if(isPrime($randNumber)){
                array_push($array, $randNumber);
                //$array[$counter] = $i;
                //$counter = $counter + 1;
                $i= $i + 1;
            }
        }
    }
    foreach($array AS $primZahl) {
        echo "$primZahl <br>";
    }
}

?>


<form>

<p>Primzahlen bis :
        <input type="number" name="zahlBis">
        <input type="submit" value="Primzahlen bis" formaction="prime.php" formmethod="post">
        Folgende Primzahlen bis wurden gefunden: <?php primeArray() ?>
</p>
    <p>max zufällige Primzahlen:
        <input type="number" name="maxPrim">
        <input type="submit" value="Primzahlen max" formaction="prime.php" formmethod="post">
        Folgende Primzahlen wurden gefunden: <?php maxPrimeArray() ?>
</p>

</form>

