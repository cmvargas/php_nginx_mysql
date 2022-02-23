<?php
include "conection.php";

$sql= "SELECT DISTINCT number_id, name FROM user_example";

$result =$mysqli->query($sql);
$data_=[];
$count=0;
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $data[$count]['number_id']=$row['number_id'];
        $data[$count]['name']=$row['name'];
        $count = $count+1;
    }

}
echo json_encode($data);
?>