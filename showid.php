<?php 
include ("database.php");
     $UpdateId=$_GET['id'];     
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Show Specific Data</title>
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
            <section class="row">            	  
            	<div class="show-data col-md-4 mx-auto bg-dark">
            		<h3 class="text text-light text-center">See your data</h3>
            	 <label for="" class="border-bottom border-secondary d-block text-light">Employee Id: <?php echo $Id ?></label>
            	 <label for="" class="border-bottom border-secondary d-block text-light">Employee Name: <?php echo $EName ?></label>
            	 <label for="" class="border-bottom border-secondary d-block text-light">Employee SSN: <?php echo $SSN ?></label>
            	 <label for="" class="border-bottom border-secondary d-block text-light">Employee Dept: <?php echo $Dept ?></label>
            	 <label for="" class="border-bottom border-secondary d-block text-light">Employee Salary: <?php echo $Salary ?></label>
            	 <label for="" class="border-bottom border-secondary d-block text-light">Employee Home Address: <?php echo $Home_Address ?></label>
            	 
            	 </div>
            </section>
 </body>
 </html>