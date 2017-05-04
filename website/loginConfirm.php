<?php
    // connects to the database
    session_start();
    include 'databaseConnect.php';
    global $db;
    
    $user_name = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['pass']);
    $query = mysqli_query($db, "SELECT * FROM Customer WHERE Username='$user_name'"); //check the customer table
    $exist = mysqli_num_rows($query);
    $table_users = "";
    $table_password = "";
    
    if($exist > 0)
        {
            while($row = mysqli_fetch_assoc($query))
                {
                    // the first username row is passed on to $table_username and so on until the query is finished
                    $table_users = $row['Username'];
                    $table_password = $row['Password'];
                    $table_name = $row['FName'];
                    $table_address = $row['Address'];
                }
                
            // checks to see if the username is in the Database
            if($user_name == $table_users) 
                {
                    // verifies the password entered matches the hashed password in the database
                    $password = password_verify($password, $table_password);
                    
                    // if the password matches the username in the database
                    if($password)
                        {
                            $_SESSION['loggedin'] = true;
                            $_SESSION['username'] = $table_users;
                            $_SESSION['address'] = $table_address;
                            $_SESSION['name'] = $table_name;
                            print '<script>window.location.assign("home.php");</script>'; 
                        }
                    
                    // password does not match the password associated with the username
                    else
                        {
                            print '<script>alert("Incorrect Password!");</script>';
                            print '<script>window.location.assign("login.php");</script>'; 
                        }
                }
                
            else
                {
                    print '<script>alert("Incorrect Username!");</script>';
                    print '<script>window.location.assign("login.php");</script>'; 
                }
           
        }
    
    // if their is nothing in the database/ the username doesn't exist then it prompts the user that there is an incorrect username and refreshes thepage.
    else
        {
            print '<script>alert("Incorrect Username!");</script>';
            print '<script>window.location.assign("login.php");</script>'; //redirects to login.php
        }
?>