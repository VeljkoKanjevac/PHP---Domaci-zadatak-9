<?php

    function izracunajPDV($osnova)
    {   
        if(is_numeric($osnova))
        {
            if($osnova > 1)
            {
                $porez = $osnova * 0.22;
                echo "PDV iznosi $porez eura.<br>";
            }
            else
            {
                echo "Broj ne moze biti manji od 1.<br>";
            }
        }
        else
        {
            echo "Broj mora biti numericka vrednost.<br>";
        }
        
    }

    izracunajPDV(100);
    izracunajPDV(0.5);
    izracunajPDV("Veljko");


?>