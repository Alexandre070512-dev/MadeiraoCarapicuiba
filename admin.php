<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $admin = $_POST['opcoes'];
  if($admin == "sim"){
    header("Location: validateAdmin.php");
    exit();
  }
  else{
    header("Location: Home.php?admin=0");
    exit();
  }
}
?>
<!DOCTYPE html>
<html>
<head><title></title></head>
<body>
	<h1>MADEREIRA MADEIRÃO - MADEIRAS EM GERAL<br>CARAPICUÍBA - SP</h1>
	<fieldset>
		<legend>Você é um administrador?</legend>
		<form method="post" action="admin.php">
			<select id="opcoes" name="opcoes">
            	<option value="sim">Sim</option><br>
            	<option value="nao">Não</option><br>
        	</select><br>
        	<input type="Submit">
        </form>
	</fieldset>
</body>
</html>
