<?php
        //Connect to Database
             $verbindung = mysql_connect("localhost", "root")
             or die("Verbindung zur Datenbank konnte nicht hergestellt werden");
             mysql_select_db("repone") or die ("Datenbank konnte nicht ausgewählt werden") or die("Ficken");
             
?>