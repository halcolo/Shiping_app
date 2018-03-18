<?php

/**
This archive is used to calculate the expected date of delivery and calculate the alert of delivery.
*/

//This Function calculate the date expected to delivery
function delivery_expected($dep_date,$days_add) {
                        $date_convert = date($dep_date);
                         //Add the number of days
                         $delivery_date = strtotime($date_convert."+ ".$days_add." days");
                         return date("Y-m-d",$delivery_date);
                    }


//This function calculate the date expected, adicional show a diferent color of alert if the order is late or in normal state
function val_status($dep_date, $days_add, $act_date){
     $date_convert = date($dep_date);
     //Incrementando 2 dias
     $calculate_delivery_date = strtotime($date_convert."+ ".$days_add." days");
     $departure_date_add = strtotime($dep_date."+ 1 days");


     $initial_date= date("Y-m-d",$departure_date_add);
     $delivery_date = date("Y-m-d",$calculate_delivery_date);
     $actual_date = $act_date;

    if ($act_date >= $delivery_date) {
    return '<img src="img/red_truck.png">Very Late';
    } elseif ($initial_date >= $actual_date) {
        return '<img src="img/green_truck.png">Good';
    } else {
        return '<img src="img/yellow_truck.png">In the range';
    }
}
