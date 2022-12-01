<?php include "head.php" ?>

<body>

<?php include "nav.php" ?>

<!-- MAIN CONTENT -->

<div style="padding:25px">
  <h2 id="bookTripHeader" style="color:black; text-decoration:none; font-family:serif;">Book A Trip</h2>
  <hr style="text-align:center" />  
  <p>Just Some Quick Details</p>
        
  <form method="get" action="thank-you.php">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" /> 
    </div>

    <div>
        <label for="location">Location</label> 
        <select name="location" id="location">
            <option value="Halifax">Halifax</option>
            <option value="Sydney">Sydney</option>
        </select> 
    </div>
    <div>
        <label for="date">Trip Date</label> 
        <input type="date" name="date"/> 
    </div>
         <input style="background-color:lightgrey; border:none; border-radius:1px" type="submit" name="submit" />

  </form>
</div>

</body>

</html>