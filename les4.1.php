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
			<h1>Er heerst paniek...</h1>
			
			<p>
			Er heerst paniek in het koninkrijk <?php echo $_POST["land"]; ?>. Koning 
			<?php echo $_POST["docent"]; ?> is ten einde raad en als koning <?php echo $_POST["docent"]; ?>
			ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["persoon"]; ?>.</p>

			<p>"<?php echo $_POST["persoon"]; ?>! Het is een ramp! Het is een schande!"</p>
			<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
			<p>"Mijn <?php echo $_POST["huisdier"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had 
			net  <?php echo $_POST["speelgoed"]; ?> voor hem gekocht!"</p>
			<p>"Majesteit, uw <?php echo $_POST["huisdier"]; ?> komt vast vanzelf weer terug?"<p>
			<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["bezigheid"]; ?> leren?"</p>
			<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["geld"]; ?> voor gebruiken."</p>
			<p>"<?php echo $_POST["persoon"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
			<p>"<?php echo $_POST["vervelen"]; ?>, Sire."
			</p>
			
		</div>
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>