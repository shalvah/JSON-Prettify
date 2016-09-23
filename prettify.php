<!DOCTYPE html>
<html>
<head>
	<title>JSON-Prettify</title>
</head>
<body>

	<?php
	if (isset($_POST['prettify-submit'])) 
	{
		if (isset($_FILES['json-file'])) 
			$jsonString=file_get_contents($_FILES['json-file']['tmp_name']);
		else{
			$jsonString=$_POST['json'];
		}
		$prettified=prettify($jsonString);
		$file=fopen("prettified.json", "w");
		fwrite($file, html_entity_decode($prettified));
		fclose($file);
		?>
		<h3>Formatted string (<a href="prettified.json" download>Download</a> | <a href="#input-form" >Prettify another string</a>):</h3><br>
		<?php echo nl2br($prettified); ?><br><br>"
		<?php
	}

	function prettify($json)
	{
		$curlyBracePointer=0;
		$inQuote=false;
		$pretty=$json;

		$i=0;

		while ($i<strlen($pretty))  
		{
			if($pretty[$i]=='{' && !$inQuote)
			{
				$curlyBracePointer++;
				$tabs=($curlyBracePointer<=0) ? '' : str_repeat('&nbsp;', 4*$curlyBracePointer);
				$replacement="{\n$tabs";
				$pretty=substr_replace($pretty, $replacement, $i, 1);
			}
			elseif($pretty[$i]=='}' && !$inQuote)
			{
				$tabs=($curlyBracePointer<=0) ? '' : str_repeat('&nbsp;', 4*$curlyBracePointer);
				$replacement="\n$tabs}";
				$pretty=substr_replace($pretty, $replacement, $i, 1);
				$i=$i+strlen($replacement)-1;
				$curlyBracePointer--;
			}
			elseif($pretty[$i]=="\"" && ($i==0 || $pretty[$i-1]!="\\"))
			{
				toggleInQuote();
			}
			elseif(($pretty[$i]==',') && !$inQuote )
			{
				if ($pretty[$i+1]=="{") {
					$tabs=($curlyBracePointer<=0) ? '' : str_repeat('&nbsp;', 4*($curlyBracePointer+1));
				}
				elseif (($pretty[$i+1]=="\"")) {
					$tabs=($curlyBracePointer<=0) ? '' : str_repeat('&nbsp;', 4*$curlyBracePointer);
				}
				$replacement=",\n$tabs";
				$pretty=substr_replace($pretty, $replacement, $i, 1);
				$i=$i+strlen($replacement)-1;
			}
			$i++;
		}
		return $pretty;
	}

	function toggleInQuote()
	{
		global $inQuote;
		if($inQuote)
			$inQuote=false;
		else
			$inQuote=true;	
	}

	?>

	<h2>Enter JSON string:</h2>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="input-form">
		<textarea name="json" required></textarea>
		<div><input type="submit" name="prettify-submit" value="Prettify"></div>
	</form>
	<h2>Or upload a JSON file:</h2>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
	<input type="file" name="json-file" required><div><input type="submit" name="prettify-submit" value="Prettify"></div>
	</form>
</body>
</html>


