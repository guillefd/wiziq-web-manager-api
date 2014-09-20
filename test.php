<?php

echo 'fopen() url test:    http://www.google.com<br>';
$file="http://www.google.com";
$gestor = @fopen($file, "r");
if($gestor)
{
	echo 'ok ';
	var_dump($gestor);
}
else
	{
		print_r(error_get_last());
	}

echo '<br><br><br>fopen() url test:    http://class.api.wiziq.com/?method=create<br>';
$file="http://class.api.wiziq.com/?method=create";
$gestor = @fopen($file, "r");
if($gestor)
{
	echo 'ok ';
	var_dump($gestor);
}
else
	{
		$error = error_get_last();
		echo '<p>Error:<br><small>';
		foreach ($error as $key=>$value) 
		{
			echo $key.': '.$value.'<br>';
		}
		echo '</small>';
	}	

echo phpinfo();

?>
<br>
<br>