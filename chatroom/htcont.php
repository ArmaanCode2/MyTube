<?php
session_start();
$room = $_POST['room'];
include 'db/db.php';


$sql = "SELECT msg,stime,ip FROM messages WHERE room = '$room'";

$res = "";
$result = mysqli_query($conn,$sql);
echo mysqli_error($conn);
if(mysqli_num_rows($result) > 0 ){
    while ($row = mysqli_fetch_assoc($result)) {
        $fullDate = $row['stime'];
        $date = substr($fullDate,8,3);
        $monthI = substr($fullDate,5,2);


        switch ($monthI) {
            case '01':
                $month = "January";
                break;
            case '02':
                $month = "February";
                break;
            case '03':
                $month = "March";
                break;
            case '04':
                $month = "April";
                break;
            case '05':
                $month = "May";
                break;
            case '06':
                $month = "June";
                break;
            case '07':
                $month = "July";
                break;
            case '08':
                $month = "August";
                break;
            case '09':
                $month = "September";
                break;
            case '10':
                $month = "October";
                break;
            case '11':
                $month = "November";
                break;
            case '12':
                $month = "December";
                break;
            
            default:
                $month = "";
                break;
        }

        $res = $res . "<div class='container'>";
        $res = $res . $row['ip'];
        $res = $res . "<p>" . $row['msg'];
        $res = $res . "</p> <span class='time-right'>" . $date .  $month . "</span></div>";
    }
}
echo $res;
?>