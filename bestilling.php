<?php include 'header.php';?>

<div>
	<p>Her skal det være en form.</p>

	<form action="save_form.php" method="POST">
	<fieldset>
    	<legend>Bestillingskjema:</legend>

    	Varenavn:<br>
		<input type="text" name="Varenavn"><br>

  		Varenummer:<br>
  		<input type="text" name="Varenummer"><br>
  		
  		Kundenavn:<br>
  		<input type="text" name="Kunde"><br>
  		
  		Kundetelefon:<br>
  		<input type="text" name="Telefon"><br>
  		

  		<input type="submit" value="Submit">

  	</fieldset>
	</form>
</div>

<?php include 'footer.php';?>