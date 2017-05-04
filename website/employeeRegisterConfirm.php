<?php
    // used for connecting to database
    include 'databaseConnect.php';
      
    // reads the input from regsiter.php
    if($_SERVER["REQUEST_METHOD"] == "POST")
        {    
            // setting the inputs from employeeRegister.php to variables
            $first_name = mysqli_real_escape_string($db, $_POST['firstName']);
            $last_name = mysqli_real_escape_string($db, $_POST['lastName']);
            $address = mysqli_real_escape_string($db, $_POST['address']);
            $empnum = mysqli_real_escape_string($db, $_POST['empnum']);
            $password = mysqli_real_escape_string($db, $_POST['pass']);
            $phone = mysqli_real_escape_string($db, $_POST['phone']);
            $manager = mysqli_real_escape_string($db, $_POST['manager']);
            $query = mysqli_query($db, "SELECT * FROM Employee"); //
            $bool = true;   // used to make sure there are no errors`-
            
            //displaying all rows from query
            while($row = mysqli_fetch_array($query))
                {
                    // the first username row is passed on to $table_username and so on until the query is finished 
                    $tableEmpNum = $row['empnum'];
                    
                    // checks if the username is taken, if it is then it prompts the user the username was taken and reloads register.php
                    if($empnum == $tableEmpNum)
                    {
                        $bool = false;
                        print '<script>alert("Username has been taken!");</script>';
                        print '<script>window.location.assign("employeeRegister.php");</script>';
                    }
                }
            
            // checks to see if $bool is true, if not it goes to the else.
            if($bool)
                {
                    // because there are no errors it regsiters the user by sending it to the Customer database.
                    // then prompts the user that they successfully registered and brings them to login.php
                    $password = crypt($password);
                    mysqli_query($db, "INSERT INTO `Employee` (FName, LName, Address, Password, Employee_number, phoneNumber, Manager) 
                    VALUES ('$first_name', '$last_name', '$address', '$password', '$empnum', '$phone', '$manager')");
                    print '<script>alert("Successfully registered!");</script>';
                    print '<script>window.location.assign("home.php");</script>';
                }
        }
           
    // if $bool gets set to false then 
    else
        {
            print '<script>alert("Unsuccessfully Registered");</script>';
            print '<script>window.location.assign("employeeRegister.php");</script>';
        }
?>