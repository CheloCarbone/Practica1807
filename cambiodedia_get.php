<?php
$diadehoy = $_GET ['diadehoy'] ;
if  ($diadehoy == 'lunes' ) { 
    echo 'monday' ;
}
    else if ( $diadehoy == 'martes' ) {
        echo 'tuesday';
     } else if ( $diadehoy == 'miercoles' ) {
        echo 'wednesday';
     } else if ( $diadehoy == 'jueves' ) {
        echo 'thursday';
     } else if ( $diadehoy == 'viernes' ) {
        echo 'friday' ;
     } else if ( $diadehoy == 'sabado' ) {
        echo 'saturday';
     } else  if ( $diadehoy == 'domingo' ) {
        echo 'sunday';
     } else  if ( $diadehoy  !== 'domingo'  || 'lunes'  || 'martes'  ||  'miercoles'  ||  'jueves'  || 'viernes'  || 'sabado'  ) {
        echo 'el dia ingresado no existe, ingrese nuevamente un dia de la semana ';
     }
?>