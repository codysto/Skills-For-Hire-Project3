<?php include "head.php" ?>
<?php include "connection.php"; ?>
<body>

<?php include "nav.php" ?>

    <main>
      <section class="flexContainer">
        <img class="bannerImg" src="./img/canoe.jpg" alt="Canoe in the water" />
        <div class="centered">
          Come Experience<br />
          Canda
        </div>
      </section>
      <section class="content">
        <h1>Upcoming Adventures</h1>

      <?php     
        
      $query = 'SELECT * FROM adventures';
      $result = $connection->query($query);

if ($result->num_rows > 0) {

    while ($row =$result->fetch_assoc()) {
      $tripdate = $row['tripdate'];
      $tripDateFormatted=date(DATE_FORMAT, strtotime($tripdate));
      $heading = $row['heading'];
      $duration = $row['duration'];
      $summary = $row['summary'];
      $id = $row['id'];

      echo '<section id='.$id.'>';
      echo '<h2>'.$heading.'</h2>';
      echo 'Date: ' . $tripdate . '<br>';
      echo 'Duration: ' . $duration . ' days';
      echo '<h3>Summary</h3>';
      echo $summary;
      echo '</section><br>';
    }
  }
  ?>
  
  <?php 
  $conn->close();
?>

      <aside>
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
            >&times;</a
          >
          <a href="#">Home</a>
          <a href="book.php">Book Trip</a>
          <a href="admin-add.php">Admin Login</a>
        </div>
      </aside>
    </main>
    <footer></footer>
  </body>
</html>
