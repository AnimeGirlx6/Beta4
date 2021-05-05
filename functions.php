<?php
function check_login($con)
{
    if(isset($_SESSION['USERID'])) 
    // USERID is the colum in my database. this line of code cheks if my user id is set
    {
        $id = $_SESSION['USERID'];
        $query = "SELECT * FROM USERS02 WHERE USERID = '$id' limit 1";
        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result)> 0)
        {
            $userData = mysqli_fetch_assoc($result);
            return $userData;
        }  
        //rdirect to login.php
        header("location: login.php");
        die;

    } 

}