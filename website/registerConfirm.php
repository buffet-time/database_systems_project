<?php
    session_start();
    // used for connecting to database
    include 'databaseConnect.php';
      
    // reads the input from regsiter.php
    if($_SERVER["REQUEST_METHOD"] == "POST")
        {    
            // setting the inputs from regsiter.php to variables
            $first_name = mysqli_real_escape_string($db, $_POST['firstName']);
            $last_name = mysqli_real_escape_string($db, $_POST['lastName']);
            $address = mysqli_real_escape_string($db, $_POST['address']);
            $username = mysqli_real_escape_string($db, $_POST['username']);
            $password = mysqli_real_escape_string($db, $_POST['pass']);
            $email = mysqli_real_escape_string($db, $_POST['email']);
            
            if(!isset($_SESSION['loggedin'])){
                $auth = mysqli_real_escape_string($db, $_POST['authentication']);}
            
            $query = mysqli_query($db, "SELECT * FROM Customer"); //check the customer table
            $bool = true;   // used to make sure there are no errors`-
            
            //displaying all rows from query
            while($row = mysqli_fetch_array($query))
                {
                    // the first username row is passed on to $table_username and so on until the query is finished 
                    $table_username = $row['username'];
                    
                    // checks if the username is taken, if it is then it prompts the user the username was taken and reloads register.php
                    if($username == $table_username)
                    {
                        $bool = false;
                        print '<script>alert("Username has been taken!");</script>';
                        print '<script>window.location.assign("register.php");</script>';
                    }
                }
                
            // If the input in the Authentication field does not equal the code then it throws an 
            if(!isset($_SESSION['loggedin'])){
                if($auth != "[DEPRECATED]")
                    {
                            $bool = false;
                            print '<script>alert("Incorrect Authentication Code");</script>';
                            print '<script>window.location.assign("register.php");</script>';
                    }
            }
            // checks to see if $bool is true, if not it goes to the else.
            if($bool)
                {
                    // because there are no errors it regsiters the user by sending it to the Customer database.
                    // then prompts the user that they successfully registered and brings them to login.php
                    $password = crypt($password);
                    mysqli_query($db, "INSERT INTO `Customer` (FName, LName, Address, Password, Username, Email) 
                    VALUES ('$first_name', '$last_name', '$address', '$password', '$username', '$email')");
                    print '<script>alert("Successfully registered!");</script>';
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                        print '<script>window.location.assign("home.php");</script>';
                    }
                    else{
                        print '<script>window.location.assign("login.php");</script>';
                    }
                }
        }
           
    // if $bool gets set to false then 
    else
        {
            print '<script>alert("Unsuccessfully Registered");</script>';
            print '<script>window.location.assign("register.php");</script>';
        }
?>
