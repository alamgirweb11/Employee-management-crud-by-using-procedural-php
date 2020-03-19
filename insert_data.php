<?php 
   include ('database.php');
   if(isset($_POST['submit'])){
       if(!empty($_POST['EName']) && !empty($_POST['SSN'])){
              $EName=$_POST['EName'];
              $SSN=$_POST['SSN'];
              $Dept=$_POST['Dept'];
              $Salary=$_POST['Salary'];
              $Home_Address=$_POST['Home_Address'];
              // connect database
              // if $connectDB is not working you will use global $connectDB its for old version of php  
              $connectDB;
              // insert data query with pdo sql injection
              $sql="INSERT INTO emp_record(ename,ssn,dept,salary,home_address)VALUES(:enamE,:ssN,:depT,:salarY,:home_addresS)";
              $stmt=$connectDB->prepare($sql);
              $stmt->bindValue(':enamE',$EName);
              $stmt->bindValue(':ssN',$SSN);
              $stmt->bindValue(':depT',$Dept);
              $stmt->bindValue(':salarY',$Salary);
              $stmt->bindValue(':home_addresS',$Home_Address); 
             $Execute=$stmt->execute();
             if($Execute){
             	     echo '<script>window.open("view_database.php?id=Data Insert Success","_self")</script>';
             }else{
             	   echo "<span style='color:#EE1919'>Data not insert please try again.</span>"; 
             }     
       }else{
       	      echo "<span style='color:#EE1919'>Please add atleast name and security number.</span>";
       }
   }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- page title -->
	<title>Insert Data Into Database</title>
	<!-- Bootstrap cdn link -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="form-row">
		<div class="col-md-6 offset-3">		
			<h2>Insert Your Data</h2>
			<form action="insert_data.php" method="POST">
			<label for="">Employe Name:</label>
			<input type="text" name="EName" class="form-control" value="">
			<label for="">Social Security Number:</label>
			<input type="text" name="SSN" class="form-control" value="">
			<label for="">Department:</label>
			<input type="text" name="Dept" class="form-control" value="">
			<label for="">Salary:</label>
			<input type="text" name="Salary" class="form-control" value="">
			<label for="">Home Address:</label>	
			<textarea class="form-control rounded-0" name="Home_Address" id="" cols="" rows=""></textarea>
			<input class="btn btn-primary mt-3" type="submit" name="submit" value="Submit Your Info">	
			</form>			
		</div>
	</div>
</body>
</html>