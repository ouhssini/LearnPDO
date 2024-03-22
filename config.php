<?php


$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ecole';


try {
    $con = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
} catch (PDOException $e) {
    echo $e->getMessage();
}

// ! select data from database using PDO
// ! method 1
// $stm = $con->query("SELECT * FROM students")->fetchAll(PDO::FETCH_BOTH);

// !   method 2
$stm = $con->query("SELECT * FROM students");
$stm->setFetchMode(PDO::FETCH_BOTH);


foreach ($stm as $row => $value) {
    echo $value['Fname'] . "\n";
}

//  ! insert data into database using PDO
// try {
//     $stm = $con->exec("insert into students(Fname ,birthday,email,phone,note_1,note_2)  value('Ahmed alami','1992-09-15','a.alami@hello.com','',19,17)");
//     echo "data inserted successfully";
// }
// catch(PDOException $e){
//     echo "an error occured while inserting data into database:\n";
//     echo "\t" . $e->getMessage();
// }
