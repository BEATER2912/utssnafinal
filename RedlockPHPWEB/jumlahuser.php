<?php

$host = 'database';
$user = 'MYSQL_USER';
$pass = 'MYSQL_PASSWORD';
$mydatabase = 'redlock';

$conn = new mysqli($host, $user, $pass, $mydatabase);

$sql = 'SELECT * FROM users';

if($result = $conn->query($sql)){
    while($data = $result->fetch_object()){
        $users[] = $data;        
    }
}

$count = 0;

foreach($users as $user){
    $count++;
}

echo $count;
?>