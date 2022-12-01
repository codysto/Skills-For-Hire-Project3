<?php include "head.php" ?>
<?php include "connection.php"; ?>
<body>

<?php include "nav.php" ?>

<div style="padding:25px">
  <h2 id="bookTripHeader" style="color:black; text-decoration:none; font-family:serif;">Admin - Confirm</h2>
        <hr />

       

<?php
  $heading = $_POST['heading'];
  $tripDate = date("Y-m-d", strtotime($_POST['tripdate']));
  $duration = $_POST['duration'];
  $summary = $_POST['summary'];

  $sql = "INSERT INTO adventures VALUES (NULL, '$heading', '$tripDate',
  '$duration', '$summary')";

  if(mysqli_query($connection, $sql)) {
      echo "<p>Data has been added successfully to DB</p>";
  } else {
      echo "ERROR: Sorry $sql."
      .mysqli_error($connection);
  }

  mysqli_close($connection);
?>

        
<a id="adventures" href="all-adventures.php">View All Adventures</a>

</body>
</html>