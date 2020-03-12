<?php
session_start();
include 'connect.php';
if(isset($_SESSION['email'])){
 $stmt = $db->prepare("SELECT * FROM joueur WHERE email = ?");
		$stmt->execute(array($_SESSION['email']));
		$info = $stmt->fetch();
		$nom=$info['nom'];
		$prenom=$info['prenom'];
	
		$email=$info['email'];





   
 
}else{

	header('location:login.php');
	exit();
}
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, intial-scale=1">
		<meta name="author" content="discoveryvip">
		<meta name="description" content="155 characters what is onthis page">
		<title>mes info</title>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<!-- start header -->
		<div class="header">
			<div class="slider">
				<div class="container">
					
				</div>
			</div>
			<div class="navbar">
				<div class="container">
					
					<ul>
						
						<li ><a href="logout.php">logout</a></li>
							
					
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->

		
	<!-- start about me -->
		<div class="about-me">
			<div class="container">
				<div class="image fl-left">
					<img src="imgs/1.jpg" alt="img">
				</div>
				<div class="info fl-left">
					<h2>mes information </h2>
					<h2>nom :<?php echo $nom ?></h2>
					<h2>prenom :<?php echo$prenom ?></h2>
					<h2>email :<?php echo$email?> </h2>
			
	
				</div>
			</div>
		</div>
		<!-- end about me -->
		
		
		
		
	
		
		
		
		
		<div class="footer">
			<div class="container">
				<span>Copyright &copy; aws bataille</span>
			</div>
		</div>
		
		
		
	</body>
</html>
