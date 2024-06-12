<?php
$host="localhost";
$username= "root";
$password= "";
$db="social_db";


//making a connection to the database
$connection=mysqli_connect($host,$username,$password,$db);


// $first_name="Caro";
// $last_name="Nyamo";

// //add data inside db by creating a query string
// $query="insert into users(first_name,second_name,user_id,email,password,gender,url_string)values('$first_name','$last_name',2,'orina@gmail.com',50503,'male','www.orina.com')";

// //sending the above data into the database
// mysqli_query($connection,$query);

//Retrieving data from the db

$query="select *  from users ";
$result=mysqli_query($connection,$query);

while ($row=mysqli_fetch_assoc($result)){
    echo"<pre>";
    print_r($row);
    echo"</pre>";



}



 ?>