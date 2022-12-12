<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>YOGA DELIGHT</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">YOGA DELIGHT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admission.php">Admission</a>
      </li>

      
     
    </ul>
  </div>
</nav>
    <center>
    <?php
 

 $conn = mysqli_connect("localhost", "root", "", "admission");
  
 // Check connection
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }
  
 // Taking all 5 values from the form data(input)
        $Name =  $_REQUEST['Name'];
        $Age = $_REQUEST['Age'];
        $Gender =  $_REQUEST['Gender'];
        $Address = $_REQUEST['Address'];
        $Month = $_REQUEST['Month'];
        $Batch = $_REQUEST['Batch'];
        $Phoneno  = $_REQUEST['Phoneno'];
  
 // Performing insert query execution
 // here our table name is college
 $sql = "INSERT INTO  admissionform  VALUES ('$Name',
 '$Age','$Gender','$Address','$Month','$Batch','$Phoneno')";

if(mysqli_query($conn, $sql)){
 

 echo nl2br("\nName = $Name\n Age = $Age\n Gender = $Gender\n Address = $Address\n Month = $Month\n Batch = $Batch\n Phoneno = $Phoneno\n");

 echo("Check the Information Once\n\n");

 echo "<h3>data stored in a database successfully."
 . " Please browse your localhost php my admin"
 . " to view the updated data</h3>";

 } else{
     echo "ERROR: Hush! Sorry $sql. "
         . mysqli_error($conn);
 }
 // Close connection
 mysqli_close($conn);
 ?>
</center>
</body>

</html>