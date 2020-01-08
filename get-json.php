<?php
    $data = '{
          "1":{
               "2019":[5.55,6.00,6.45,7.15],
               "2014":[9.45,9.55,9.65],
               "2011":[10.80,10.90,11.00],
               "2009":[12.45,12.55,12.65],
               "2008":[14.35,14.45,14.55],
               "2007":[14.45,14.55],
               "2006":[14.55,14.75],
               "2005":[18.65]
          },
          "2":{
               "2019":[6.05,6.50,6.95,7.65],
               "2014":[9.45,9.55,9.65],
               "2011":[10.80,10.90,11.00],
               "2009":[12.60,12.70,12.80],
               "2008":[14.50,14.60,14.70],
               "2007":[14.60,14.70],
               "2006":[14.70,14.90],
               "2005":[19.00]
          }
     }';

     $json_data = json_decode($data);
     $type = $_GET['type'];
     $year = $_GET['year'];
     switch ($_GET['action']) {
          case 'type':
          echo "<option value='0'>- เลือกปี -</option>";
               foreach ($json_data->$type as $year => $value) {
                    echo "<option value='$year' >$year</option>" ;
               }
               break;
          case 'year':
               $json = json_encode($json_data->$type->$year);
               foreach ($json_data->$type->$year as $value) {
                    echo "<option value='$value' >$value</option>" ;
               }
               break;
          
          default:
               # code...
               break;
     }