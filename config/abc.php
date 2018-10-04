<?php 


$q="SELECT * FROM absence WHERE studentId='$_SESSION[ID]'";
$r=mysqli_query($dbc,$q);
while($data=mysqli_fetch_assoc($data)){
    if($data['jrAbs'] == $day && $data['absDate'] < date("Y-m-d") && $data['absDate'] > date("Y-m-d", strtotime("-1 week")) && $data['Module'] == $module )
    {
        echo '<td>1</td>';
    }
    else
    { 
        echo '<td>0</td>' ;
                 }
}
?>