<?php

$servername = "localhost";
$username = "appuser";
$password = "MS173m_QN";
$dbname = "appdb";

$conn = new mysqli($servername, $username,$password,$dbname);

if($conn->connect_error)
{
    die("connection failed :".$conn->connect_error);
}

echo "connect successfully";

$sql1 = "CREATE DATABASE myDB";

$sql2 = "create table tabTest (
    id int(6) unsigned auto_increment primary key,
    firstname varchar(30) not null,
    email varchar(50),
    reg_date timestamp
    )";

$sql3 = "insert into tabTest(firstname, lastname, email)
    values ('Si', 'Li', '1111@hotmail.com')";

$sql4 = "select id, firstname, lastname, email from tabTest limit 5";

$result = $conn->query($sql4);

if($result->num_row>0)
{
    while($row=$result->fetch_assoc())
    echo "id: ".$row["id"].
    "-name :".$row["firstname"]." ".$row["lastname"].
    "-email :".$row["email"]." \t";
}
else
{
    echo "0 results";
}

$sql5 = "delete from tabTest where id = 2";
$sql6 = "update tabTest set firstname = 'Wu', lastname = 'Wang' where id = 1"

$conn->close();
?>
