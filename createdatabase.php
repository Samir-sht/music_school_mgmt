<?php
$conn =  mysqli_connect("localhost","root","","aarti");
// //login table
// $sql = "CREATE table login(
//     id int(50)  PRIMARY KEY NOT NULL AUTO_INCREMENT,
//     uname varchar(100) NOT NULL,
//     password varchar(100) NOT NULL
//     )";
// //contact
// $sql = "CREATE table contact(
//     id int NOT NULL PRIMARY KEY NOT NULL AUTO_INCREMENT,
//     name varchar(50) NOT NULL,
//     email varchar(50) NOT NULL,
//     message varchar(1000) NOT NULL
//     )";

// //enrollment
$sql = "CREATE table enroll(
    id int NOT NULL PRIMARY KEY NOT NULL AUTO_INCREMENT,
    fullname varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    address varchar(50) NOT NULL,
    phone bigint(255) NOT NULL,
    gender varchar(50) NOT NULL,
    courses varchar(100) NOT NULL,
    duration int(100) NOT NULL,
    payment varchar(100) NOT NULL
    )";

// // //about table
// $sql = "CREATE table about(
//         id int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
//         file varchar(1000) NOT NULL,
//         description longtext NOT NULL
//     )";


$result = mysqli_query($conn,$sql);
if($result){
    echo "Table created";
}else{
    echo"Table not connected".mysqli_error($conn);
}



?>