
   <?php include "head.php"; ?>

<body>

   <?php include "nav.php" ?>

    <!-- MAIN CONTENT -->
        <div  style="padding:25px">
            <div>
                <h2 style="color:black; text-decoration:none; font-family:serif">Thank You</h2>
                <hr>
            </div>
             
            <div>
                <p>Thank you: <?php echo $_GET["email"] ?></p>
                <br>
                <p>We will contact you about the:</p>
                <p><?php echo $_GET["location"] ?> trip on the <?php echo $_GET["date"] ?>. </p>
                
            </div>
        </div>

</body>

</html>