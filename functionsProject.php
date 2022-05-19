<?php
function randomDate($start_date, $end_date)
{
  // Convert to timetamps
  $min = strtotime($start_date);
  $max = strtotime($end_date);

  // Generate random number using above bounds
  $val = rand($min, $max);

  // Convert back to desired date format
  return date('d/m/Y', $val);
}

?>
