<?php
	include 'top.php';
	include 'topimg.php';
?>
<body>
	<div class="divmid">
		<ul>
			<?php include 'menu.php'; ?>
		</ul>
		
		<div class="divbottom">
			<h1>Onkunde</h1>
			
			<p>zijn veel mensen die niet kunnen <?php echo $_POST["kunnen"]; ?>. 
			Neem nou <?php echo $_POST["persoon2"]; ?>. Zelfs met de hulp van 
			een <?php echo $_POST["vakantie"]; ?> of zelfs <?php echo $_POST["getal"]; ?>
			kan <?php echo $_POST["persoon2"]; ?> niet <?php echo $_POST["kunnen"]; ?>. 
			Dat heeft niet te maken met een gebrek aan <?php echo $_POST["beste"]; ?>, 
			maar met een te veel aan <?php echo $_POST["slechtste"]; ?>. Te veel 
			<?php echo $_POST["slechtste"]; ?> leidt tot <?php echo $_POST["ergste"]; ?> 
			en dat is niet goed als je wilt <?php echo $_POST["kunnen"]; ?>. Helaas voor 
			<?php echo $_POST["persoon2"]; ?>.</p>
			
		</div>
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>