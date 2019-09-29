<?PHP
	$page_title='Login';
    session_start();
    $fields_error = ""; 
    $fields_error1 = ""; 
    $error =""; 
    
    if(isset($_POST['submit'])||true)
    {    
        if(empty($_POST['email']) || trim($_POST['email']) =='' )
        {
            $fields_error= "Username is required";
        }else {
            $username=htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
        }

        if(empty($_POST['pass'])  || trim($_POST['pass']) =='' ) 
        {
            $fields_error1 = "Password is required";
        }else {
            $password = $_POST['pass'];
        }
		$sql = "SELECT * FROM employee WHERE EmailID='$username' AND Password='$password'";
        if(empty($fields_error) && empty($fields_error1))
        {
            $db = new mysqli("localhost","root","","office") or die("cannot select DB");     
            $result = mysqli_query($db,$sql);
            $data = mysqli_num_rows($result);
            if($data)
            {
                $_SESSION["username"] = $username;
                while($row=mysqli_fetch_array($result,$data))
              	{	
              		$name=$row['Name'];
              		$ID = $row['ID'];
              		$address=$row['Address'];
              		$salary=$row['Salary'];
              		$bdate=$row['BDate'];
              		$phno=$row['Phoneno'];
              		$leaves=$row['Leaves'];
              		$bank=$row['Bank'];
              		$accno=$row['Accntno'];
					
            	}
            }
        }

    }
?>
