<?php require 'config.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rifat's Websiite</title>
    <link rel="stylesheet" href="comment.css">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Roboto+Slab:wght@300;500&family=Shalimar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <img class="background" src="bg3.jpg" alt="no identity">

    <div class="container">
        <h1> Welcome to Rifat's Personal website </h1>
        <p> You can tell me your opinion about my demo website.
            Your pointings are highly perfered by me to achieve my goal.
        </p>

       

        <form action="insert.php" method="post">
            <input type="text" name="name" id="name" placeholder="Please enter your name:" required>
            
            <input type="email" name="email" id="email" placeholder="Please enter your Email:" required>
            <textarea name="opinion" id="opinion" cols="30" rows="5" placeholder="Enter your opinion:" required></textarea> 
            <button class="button" id="submit">Submit</button>     
        </form>

        <?php
        if($insert == true){
        
              echo "<script type='text/javascript'>alert('comment successfull');</script>";
        }
        else{
              echo "<script type='text/javascript'>alert('Error: $sql <br> $connection->error');</script>";
      }
        ?>
		
		
    </div>

  <div class="prev-comments">

  <?php 
			$i=0;
			$sql = "SELECT * FROM comment ORDER BY serial_no DESC";
			$result = mysqli_query($connection, $sql);
			if (($result) == true) {
				while (($row = mysqli_fetch_assoc($result)) && $i<'2'){
					$i++;

			?>
			<div class="single-item">
			    <h5><?php echo $row['serial_no']; ?></h5>
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['opinion']; ?></p>
				<p><?php echo $row['date']; ?></p>
			</div>
			<?php
      
				}
			}
			?>

  </div>

</body>
</html>