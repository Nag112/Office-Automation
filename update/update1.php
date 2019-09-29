<?PHP
    $page_title='Login';
    session_start();
   $fields_error = ""; 
    $fields_error1 = ""; 
    $error =""; 
    
  if(isset($_POST['submit'])||true)
    {    
            $name=$_POST['name'];
            $Address=$_POST['address'];
            $salary=$_POST['salary'];
            $phoneno=$_POST['phoneno'];
            $deptno=$_POST['deptno'];
            $manid=$_POST['manid'];
            $exp=$_POST['exp'];
            $bank=$_POST['bank'];
            $accno=$_POST['accntno'];
            $email=$_POST['emailid'];
            $pass=$_POST['pass'];
            $db = new mysqli("localhost","root","","office") or die("cannot select DB");   
              $sql="INSERT INTO employee(Name,Address,Salary,Phoneno,DeptNo,ManagerID,Experience,Bank,Accntno,EmailID,Password) values('$name','$Address',$salary,$phoneno,$deptno,$manid,$exp,'$bank',$accno,'$email','$pass')";  
            $result = mysqli_query($db,$sql); 
            if(mysqli_query($db,$sql))
            {
                 $new = "New Employee Added Successfully";
            }
            else
            {
                echo " Error: Inserting data".mysqli_error($db);
            }
    }
?>
