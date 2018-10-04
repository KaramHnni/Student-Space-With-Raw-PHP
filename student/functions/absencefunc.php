<?php 
    function absFuncPerWeek($day,$data,$module){
if($data['jrAbs'] == $day && $data['absDate'] < date("Y-m-d") && $data['absDate'] > date("Y-m-d", strtotime("-1 week")) && $data['Module'] == $module ){echo "1";}else{ echo "0" ;};
    }

?>