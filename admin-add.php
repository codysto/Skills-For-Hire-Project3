<?php include "head.php" ?>
<?php include "connection.php"; ?>
<body>

<?php include "nav.php" ?>

<div style="padding:25px">
  <h2 id="bookTripHeader" style="color:black; text-decoration:none; font-family:serif;">Admin - Add Adventure</h2>
        <hr />
  <h4>Input details about the trip</h4>
        
  <form method="post" action="admin-confirm.php">
        <label for="heading">Heading</label> <input type="text" name="heading" /> <br> 
        <label for="tripdate">Trip Date</label> <input type="date" name="tripdate"/> <br>
        <label for="duration">Duration</label> <input type="text" name="duration"/> <br>
        <label for="summary">Summary</label> <input type="text" name="summary"/> <br>
        <input style="background-color:lightgrey; border:none; border-radius:1px" type="submit" name="submit" />

  </form>

 


  <br>
</div>
</html>