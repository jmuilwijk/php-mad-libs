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
			
			<form method="post" action="les4.3.php">
			<p>
			<label>Wat zou je graag willen kunnen?</label>
			<input class="input" type="text" name="kunnen" />
			</p>
			
			<p>
			<label>Met welke persoon kun je goed opschieten?</label>
			<input class="input" type="text" name="persoon2" />
			</p>
			
			<p>
			<label>Wat is je favoriete getal?</label>
			<input class="input" type="text" name="getal" />
			</p>
			
			<p>
			<label>Wat heb je altijd bij je als je op vakantie gaat?</label>
			<input class="input" type="text" name="vakantie" />
			</p>
			
			<p>
			<label>Wat is je beste persoonlijke eigenschap?</label>
			<input class="input" type="text" name="beste" />
			</p>
			
			<p>
			<label>Wat is je slechtste persoonlijke eigenschap?</label>
			<input class="input" type="text" name="slechtste" />
			</p>
			
			<p>
			<label>Wat is het ergste dat je kan overkomen?</label>
			<input class="input" type="text" name="ergste" />
			</p>
			
			<label>&nbsp;</label>
			<p>
			<input class="versturen" type="submit" value="Versturen" />
			</p>
			</form>
			
		</div>
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>