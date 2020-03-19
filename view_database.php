<?php 
include ('database.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <!-- page title  -->
  <title>View Database</title>
  <!-- Bootstrap cdn link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 </head>
 <body>
   <h3 class="text text-success ml-2"><?php echo @$_GET['id']; ?></h3> 
    <h2 class="text text-primary text-center">Employee Database</h2>
     <!-- search form  -->
     <form class="form-inline ml-5" action="view_database.php" method="GET">
      <input class="form-control mr-sm-2" type="text" name="Search" placeholder="Name/SSN" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="SearchButton">Search</button>
    </form>
    <!-- for add new employee -->
      <button class="btn btn-primary float-right d-inline mr-5"><a href="insert_data.php" class="text text-decoration-none text-light">Add New Employee</a></button>
    <!-- php for search section -->
      <?php 
             if (isset($_GET['SearchButton'])) {
              $connectDB;
               $Search=$_GET['Search'];
               $sql="SELECT * FROM emp_record WHERE ename=:searcH OR ssn=:searcH";
               $stmt=$connectDB->prepare($sql);
               $stmt->bindValue(':searcH',$Search);
               $stmt->execute();
              while($dataRows=$stmt->fetch()){
             $Id           = $dataRows['id'];
             $EName        = $dataRows['ename'];
             $SSN          = $dataRows['ssn'];
             $Dept         = $dataRows['dept'];
             $Salary       = $dataRows['salary'];
             $Home_Address = $dataRows['home_address'];
               ?>
               <h2 class="text text-info mt-2 ml-5">Search Result</h2>
               <table class="table table-bordered table-hover mt-2 ml-5">
                 <tr class="bg-success text-light">
                      <th>Id No</th>
                      <th>EName</th>
                      <th>SSN</th>
                      <th>Department</th>
                      <th>Salary</th>
                      <th>Home Address</th>
                      <th>Search Again</th>
                 </tr>
                 <tr>
                      <td><?php echo $Id; ?></td>
                      <td><?php echo $EName; ?></td>
                      <td><?php echo $SSN; ?></td>
                      <td><?php echo $Dept; ?></td>
                      <td><?php echo $Salary; ?></td>
                      <td><?php echo $Home_Address; ?></td>
                      <td><a href="view_database.php">Search</a></td>
                 </tr>
               </table>
            <?php } //ending while loop       
             } //ending of submit button

        ?>
    <!-- database table  -->
    <table class="table table-bordered table-hover mt-5">
      <thead>
        <tr>
          <th>Id No</th>
          <th>EName</th>
          <th>SSN</th>
          <th>Department</th>
          <th>Salary</th>
          <th>Home Address</th>
          <th>Update</th>
          <th>Delete</th>
          <th>View</th>
        </tr>
      </thead>
      <?php 
      // if $connectDB is not working you will use global $connectDB its for old version of php
           $connectDB;
           $sql='SELECT * FROM emp_record';
           $stmt=$connectDB->query($sql);
           while($dataRows=$stmt->fetch()){
             $Id = $dataRows['id'];
             $EName = $dataRows['ename'];
             $SSN = $dataRows['ssn'];
             $Dept = $dataRows['dept'];
             $Salary = $dataRows['salary'];
             $Home_Address = $dataRows['home_address'];
       ?>
       <tr>
        <td><?php echo $Id; ?></td>
        <td><?php echo $EName; ?></td>
        <td><?php echo $SSN; ?></td>
        <td><?php echo $Dept; ?></td>
        <td><?php echo $Salary; ?></td>
        <td><?php echo $Home_Address; ?></td>
        <!-- add two column for update and delete query -->        
        <td><a href="update.php?id=<?php echo $Id; ?>"class="text text-info text-decoration-none" >Update</a></td>
        <td><a href="delete.php?id=<?php echo $Id; ?>" class="text text-danger text-decoration-none" >Delete</a></td>
        <td><a href="showid.php?id=<?php echo $Id; ?>" class="text text-success text-decoration-none" >View</a></td>
       </tr>
       <!-- this php code for show all record in view part -->
      <?php } ?>
    </table>
  <?php 

   ?>
 </body>
 </html>