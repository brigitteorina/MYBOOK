<?php

class Signup
{
    private $error = ""; // Property to store error messages
 // Method to evaluate the form data
    public function evaluate($data)
    {
        // Loop through each key-value pair in the data array
        foreach ($data as $key => $value) {
                       
            // Check if any value is empty
            if (empty($value)) {
                 // Append error message to the error property
                $this->error .= $key . " is empty!<br>";
            }
        }

        // Check if there were any errors
        if ($this->error == "") {
            // No errors, proceed with the signup process
            $this->create_user($data);
        } else {

            // Return the accumulated error messages
            return $this->error;
        }
    }

     // Method to create a new user in the database
    public function create_user($data)
    {
         // Extract individual data fields from the input array
        $first_name = $data['first_name'];
        $second_name = $data['second_name'];
        $gender = $data['gender'];
        $email = $data['email'];
        $password = $data['password'];

         // Generate a URL string and a unique user ID
        $url_string = $data['url_string'];
        $user_id = $data['user_id'];


         // Construct the SQL query to insert the new user into the database
        $query = "INSERT INTO users (user_id, first_name, second_name, email, password, gender, url_string) 
                  VALUES ('$user_id', '$first_name', '$second_name', '$email', '$password', '$gender', '$url_string')";
                  
  // Create an instance of the Database class     
$DB= new Database();
$DB->save($query);


    }
}

?>
