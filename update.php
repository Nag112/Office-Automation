<?PHP
	$page_title='Login';
    session_start();
    $fields_error = ""; 
    $fields_error1 = ""; 
    $error =""; 
    
    if(isset($_POST['submit'])||true)
    {    
       
		$sql = "insert into employee(Name,ID,Address,Salary,Bdate,Phoneno,DeptNo,ManagerID,Leaves,Bank,Accntno,EmailID,Password)values('$_POST['name']','$_POST['emp_id']','$_POST['address']','$_POST['salary']',
'$_POST['bdate']','$_POST['phoneno']','$_POST['deptno']','$_POST['manid']','$_POST['leaves']','$_POST['bank']','$_POST['accntno']','$_POST['emailid']','$_POST['pass']')";
        if(empty($fields_error) && empty($fields_error1))
        {
            $db = new mysqli("localhost","root","","office") or die("cannot select DB");     
            $result = mysqli_query($db,$sql);
            $data = mysqli_num_rows($result);
            if($data){}
        }
}
?>
<!DOC TYPE HTML>
<html >
<head>
<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	</body>
	</html>