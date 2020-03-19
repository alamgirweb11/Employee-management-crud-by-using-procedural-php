<?php 
   include ('database.php');
   $UpdateId=$_GET['id'];
   if(isset($_POST['submit'])){
              $EName=$_POST['EName'];
              $SSN=$_POST['SSN'];
              $Dept=$_POST['Dept'];
              $Salary=$_POST['Salary'];
              $Home_Address=$_POST['Home_Address'];
              // connect database
              // if $connectDB is not working you will use global $connectDB its for old version of php  
              $connectDB;
              // insert data query with pdo sql injection
              $sql="DELETE FROM emp_record WHERE id='$UpdateId'";
           $stmt=$connectDB->query($sql);
             $Execute=$stmt->execute();
             if($Execute){
             	     echo '<script>window.open("view_database.php?id=Deleted Succefully","_self")</script>';
             }    
       }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- page title -->
	<title>Update Data Into Database</title>
	<!-- Bootstrap cdn link -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
  <?php 
       $connectDB;
       $sql="SELECT * FROM emp_record WHERE id='$UpdateId'";
       $stmt=$connectDB->query($sql);
       while($dataRows=$stmt->fetch()){
             $Id = $dataRows['id'];
             $EName = $dataRows['ename'];
             $SSN = $dataRows['ssn'];
             $Dept = $dataRows['dept'];
             $Salary = $dataRows['salary'];
             $Home_Address = $dataRows['home_address'];    
       }
   ?>
	<div class="form-row">
		<div class="col-md-6 offset-3">		
			<h2>Insert Your Data</h2>
			<form action="delete.php?id=<?php echo $UpdateId; ?>" method="POST">
			<label for="">Employe Name:</label>
			<input type="text" name="EName" class="form-control" value="<?php echo $EName ?>">
			<label for="">Social Security Number:</label>
			<input type="text" name="SSN" class="form-control" value="<?php echo $SSN ?>">
			<label for="">Department:</label>
			<input type="text" name="Dept" class="form-control" value="<?php echo $Dept ?>">
			<label for="">Salary:</label>
			<input type="text" name="Salary" class="form-control" value="<?php echo $Salary ?>">
			<label for="">Home Address:</label>	
			<textarea class="form-control rounded-0" name="Home_Address" id="" cols="" rows=""><?php echo $Home_Address; ?></textarea>
			<input class="btn btn-primary mt-3" type="submit" name="submit" value="Delete Your Info">	
			</form>			
		</div>
	</div>
</body>
</html>