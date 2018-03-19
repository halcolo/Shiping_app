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

//******************************************************************************


//This function calculate the status depend the expected date, adicional show a diferent color of alert if the order is late or in normal state
Function act_status($expected_date){

  $date_convert = date($expected_date);
  //Decrease 2 days
  $substract_days = strtotime($date_convert."- 3 days");
  $last_3_days = date("Y-m-d",$substract_days);


 $actual_date = date("Y-m-d");
//Validation of the status of delivery
if($actual_date > $expected_date){
  return '<img src="img/red_truck.png">Very Late';
} elseif ($actual_date < $last_3_days) {
  return '<img src="img/green_truck.png">Good';
}else {
  return '<img src="img/yellow_truck.png">Not normal';
}

}
