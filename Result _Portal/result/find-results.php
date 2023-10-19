<?php
session_start();
//error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #111;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .form-container {
    background-color: #333;
    border-radius: 10px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.5);
    padding: 40px; /* Adjust padding to increase container size */
    width: 400px; /* Adjust width to increase container size */
  }
  
  .form-group {
    margin-bottom: 20px; /* Increase spacing between form groups */
  }
  
  label {
    display: block;
    font-weight: bold;
    margin-bottom: 10px; /* Increase spacing under labels */
    color: #fff;
  }
  
  input[type="text"], select {
    width: 100%;
    padding: 15px; /* Increase padding for inputs */
    border: 1px solid #555;
    border-radius: 5px;
    background-color: #444;
    color: #fff;
  }
  
  select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: url('down-arrow-white.png') no-repeat right center;
    background-size: 20px;
    color: #fff;
  }
  
  select option {
    background-color: #444;
    color: #fff;
  }
  
  button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 15px 20px; /* Increase padding for button */
    cursor: pointer;
    width: 100%;
  }
  
  button:hover {
    background-color: #0056b3;
  }
</style>
<title>Student Form</title>
</head>
<body>
<div class="form-container">
   <form action="result.php" method="post">
    <div class="form-group">
      <label for="studentName">Student Roll Id</label>
      <input type="text" id="studentName" name="rollid" placeholder="Enter Your Roll Id" required>
    </div>
    
    <div class="form-group">
      <label for="classSelect">Select Class</label>
      <select id="classSelect" name="class" required>
      <option value="">Select Class</option>
      <?php
                                    $sql = "SELECT * from tblclasses";
                                    $query = $dbh->prepare($sql);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $result) {
                                            echo '<option value="' . htmlentities($result->id) . '">' . htmlentities($result->ClassName) . ' Section-' . htmlentities($result->Section) . '</option>';
                                        }
                                    }
                                    ?>
      </select>
    </div>
    <button type="submit">Submit</button>
  </form>
</div>
</body>
</html>
