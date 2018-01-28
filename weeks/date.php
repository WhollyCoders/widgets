<?php
echo('Hello World!!!');

$date = date_create("2018-01-18");
for ($i=0; $i < 12; $i++) { 
  
  $week_number = $i + 1;
  echo('<br>Week '.$week_number . ' | ');
  date_add($date,date_interval_create_from_date_string("7 days"));
  echo date_format($date,"m-d-Y");

}

?>