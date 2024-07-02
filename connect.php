<?php
// $host="localhost";
// $username= "root";
// $password= "";
// $db="social_db";


//making a connection to the database
//$connection=mysqli_connect($host,$username,$password,$db);


// $first_name="Caro";
// $last_name="Nyamo";

// //add data inside db by creating a query string -use the keyword INSERT
// $query="insert into users(first_name,second_name,user_id,email,password,gender,url_string)values('$first_name','$last_name',2,'orina@gmail.com',50503,'male','www.orina.com')";

// //sending the above data into the database
// mysqli_query($connection,$query);

//check any errors in the connection
//mysqli_error("$connection");

//Retrieving data from the db -use the keyword SELECT

    // $query="select *  from users "; 
    // $result=mysqli_query($connection,$query);

    // while ($row=mysqli_fetch_assoc($result)){
    //     echo"<pre>";
    //     print_r($row);
    //     echo"</pre>";

        

    // }

    class Database {
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $db = "social_db";
    
        function connect() {
            $connection = mysqli_connect($this->host, $this->username, $this->password, $this->db);
            return $connection;
        }
    
        function read($query) {
            $conn = $this->connect();
            $result = mysqli_query($conn, $query);
    
            if (!$result) {
                return false;
            } else {
                $data = [];
                while ($row = mysqli_fetch_assoc($result)) {
                    $data[] = $row;
                }
                return $data;
            }
        }
    
        function save($query) {
            $conn = $this->connect();
            $result = mysqli_query($conn, $query);
    
            if (!$result) {
                return false;
            } else {
                return true;
            }
        }
    }
    ?>
    