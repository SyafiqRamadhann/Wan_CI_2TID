<?php

class tabung 
{
    function Volume($jari,$tinggi)
    {
        $phi = 3.14;
        echo "phi = $phi";
        echo "<br>";
        echo "jari-jari = $jari";
        echo "<br>";
        echo "tinggi = $tinggi";
        echo "<br>";
        
        $volume = $phi *($jari*$jari)*$tinggi;
        echo "volume tabung adalah " ,$volume;
    

    }
    function Luas($jari,$tinggi)
    {
        $phi = 3.14;
        $luas = 2 * $phi *$jari*($jari+$tinggi);
        echo "Luas permukaan adalah " ,$luas;
    

    }
    function Lselimut($jari,$tinggi)
    {
        $phi = 3.14;  
        $lselimut = 2 * $phi *$jari*$tinggi;
        echo "Luas selimut adalah " ,$lselimut;

    }
}
?>