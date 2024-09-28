<?php

require('connection.php');
session_start();

#For Login

if(isset($_POST['login']))
{
    $query = "SELECT * FROM registered_users WHERE email = '".$_POST['email_username']."' OR username = '".$_POST['email_username']."'";
    $result = mysqli_query($conn, $query);

    if($result)
    {
         if(mysqli_num_rows($result)==1)
         {
            $result_fetch = mysqli_fetch_assoc($result);
            if(password_verify($_POST['password'], $result_fetch['password']))
            {
                #if password macthed
                $_SESSION['logged_in']=true;
                $_SESSION['username']=$result_fetch['username'];
                header("location: index.php");
            }
            else{
                #if password not matched..

                echo"
                <script>
                    alert('Incorrecr Password');
                    window.location.href='index.php';
                </script>
            "; 

            }
         }
         else
         {
            echo"
                <script>
                    alert('Email or username not registered.');
                    window.location.href='index.php';
                </script>
            "; 
         }
    }
    else
    {
        echo"
        <script>
            alert('Cannot Run Query');
            window.location.href='index.php';
        </script>
        "; 
    }
}



#For Registration
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];

   # $password =  password_hash($_POST['password'],PASSWORD_BCRYPT); # for hiding password

    $user_exist_query = "SELECT * FROM registered_users WHERE username = '$username' OR email = '$email'";
    $result = mysqli_query($conn, $user_exist_query);

    if($result)
    {
        if(mysqli_num_rows($result)>0) #it will be executed if username or email is already registered
        {

            # if any user has alredy taken username or email

            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['username']==$_POST['username'])
            {
                #error for username alredy registered
                echo"
                    <script>
                        alert('$result_fetch[username] - Username alredy taken');
                        window.location.href='index.php';
                    </script>
                    ";
            }
            else
            {
                #error for email alredy registered
                echo"
                    <script>
                        alert('$result_fetch[email] - E-mail alredy registered');
                        window.location.href='index.php';
                    </script>
                    ";
            }
        }
        else #it will be executed when no one has taken username or email before
        {
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $query="INSERT INTO `registered_users`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";
            if(mysqli_query($conn, $query))
            {
                #if data inserted successfully
                echo"
                <script>
                    alert('Registration successfully.');
                    window.location.href='index.php';
                </script>
            ";
            }
            else
            {
                #if data cannot inserted
                echo"
                <script>
                    alert('Cannot Run Query');
                    window.location.href='index.php';
                </script>
            ";  
            }
        }
    }
    else
    {
        echo"
            <script>
                alert('Cannot Run Query');
                window.location.href='index.php';
            </script>
        ";
    }

}

mysqli_close($conn);


?>