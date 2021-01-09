

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php require_once 'process.php'; ?>

    <?php

    if (isset($_SESSION['message'])): ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
      </div>

      <?php endif ?>

    <div class="container">
      <?php   
        $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM data");
       // pre_r($r);
	   ?>
	    
		<div>
			<table class="table">
        <thead>
          <tr>
            <th>name</th>
            <th>location</th>
            <th colspan="2">action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          while($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td>
              <a href="index.php?edit=<?php echo $row['id']; ?>">edit</a>
              <a href="process.php?delete=<?php echo $row['id']; ?>">delete</a>
            </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
		</div>
		
		<?php 
       function pre_r( $array ) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
            }
	?> 

  <div class="row justify-content-center">
    <form action="process.php" method="post">

        <input type="hidden" name="id" value="<?php echo $id; ?>">


        <div class="form-group">
        <label>name</label>
        <input type="text" name="name" class="form-control" 
                value="<?php echo $name; ?>" 
                placeholder="enter your name">
        </div>
        <div class="form-group">
        <label>location</label>
        <input type="text" name="location" class="form-control" 
                value="<?php echo $location; ?>"
                placeholder="enter your location">
       </div>
       <div class="form-group">
            <?php
            if ($update == true):
            ?>
             <button type="submit" class="btn btn-info" name="update">update</button>
         
          <?php else: ?>

        <button type="submit" class="btn btn-primary" name="save">save</button>
          <?php endif; ?>
        
        </div>
     </form>
     </div>
     </div>
    </body> 
</html>