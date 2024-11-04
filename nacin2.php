<?php

    function izracunajPDV($osnova)
    {   
        if($osnova > 1 && is_numeric($osnova))
        {
            $porez = $osnova * 0.22;
            echo "PDV iznosi $porez eura.<br>";
        }
        else
        {
                echo "Broj mora biti NUMERICKA VREDNOST manja od 1.<br>";
        }   
    }

    izracunajPDV(100);
    izracunajPDV(0.5);
    izracunajPDV("Veljko");

?>