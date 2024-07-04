<?php
include("classes/connect.php");
include("classes/signup.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {

    //instantiating the signup
    $signup=new Signup();

    //access the Sign up class functions
    $result =$signup->evaluate($_POST);

    echo $result;

    

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
}
?>




<html>

<head>

    <title>MyBook |Sign up</title>
</head>

<style>
    #bar {
        height: 100px;
        background-color: rgb(59, 89, 152);
        color: #d9dfeb;
        padding: 4px;

    }

    #login_btn {
        background-color: #42b72a;
        width: 70px;
        text-align: center;
        padding: 4px;
        border-radius: 4px;
        float: right;
    }

    #signup {
        background-color: white;
        width: 800px;
        height: 500px;
        margin: auto;
        margin-top: 50px;
        padding: 10px;
        text-align: center;
        padding-top: 50px;
        font-weight: bold;


    }


    #text {

        height: 40px;
        width: 300px;
        border-radius: 4px;
        border: solid 1px #ccc;
        padding: 4px;
        font-size: 14px;

    }

    #button {

        width: 300px;
        height: 40px;
        border-radius: 4px;
        font-weight: bold;
        border: none;
        background-color: rgb(59, 89, 152);
        color: white;


    }
</style>

<body style="font-family:tahoma; background-color:#e9ebee;">

    <div id="bar">

        <div style=" font-size : 40px;"> MyBook </div>
        <div id="login_btn">Login </div>

    </div>



    <div id="signup">
        Sign up to MyBook<br> <br>

        <form method="POST" action="">
            <input type="text" id="text" placeholder="First Name" name="firstname"><br> <br>
            <input type="text" id="text" placeholder="Last Name" name="last name"><br> <br>
            <span style="font-weight: normal;">Gender:</span><br>
            <select id="text" name="gender">

                <option>Male</option>
                <option>Female</option>
            </select>
            <br><br>

            <input type="text" id="text" placeholder="Email" name="email"><br> <br>
            <input type="password" id="text" placeholder="Password" name="password"><br> <br>
            <input type="password" id="text" placeholder=" Confirm Password" name="password2"><br> <br>
            <input type="Submit" id="button" value="SignUp"><br> <br>

        </form>



    </div>

</body>

</html>