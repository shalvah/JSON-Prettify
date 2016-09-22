<!DOCTYPE html>
<html>
	<head>
	<title>JSON-Prettify</title>
	</head>
	<body>

	<?php
if (isset($_POST['json'])) 
{
	echo "Formatted string:<br>".prettify($_POST['json'])."<br><br>";
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
			$replacement="{<br>$tabs";
			$pretty=substr_replace($pretty, $replacement, $i, 1);
		}
		elseif($pretty[$i]=='}' && !$inQuote)
		{
			$tabs=($curlyBracePointer<=0) ? '' : str_repeat('&nbsp;', 4*$curlyBracePointer);
			$replacement="<br>$tabs}";
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
			$replacement=",<br>$tabs";
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
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<textarea name="json" required></textarea>
			<input type="submit" name="prettify" value="Prettify">
		</form>
	</body>
</html>


