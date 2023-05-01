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

echo "ID"; echo "<br>";
echo "----------------------"; echo "<br>";

foreach($users as $user){
    echo $user->ID;
    echo "<br>";
}

echo "<br>";
echo "Nama"; echo "<br>";
echo "----------------------"; echo "<br>";

foreach($users as $user){
    echo $user->Nama;
    echo "<br>";
}

echo "<br>";
echo "Alamat"; echo "<br>";
echo "----------------------"; echo "<br>";

foreach($users as $user){
    echo $user->Alamat;
    echo "<br>";
}

echo "<br>";
echo "Jabatan"; echo "<br>";
echo "----------------------"; echo "<br>";

foreach($users as $user){
    echo $user->Jabatan;
    echo "<br>";
}
?>