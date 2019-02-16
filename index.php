<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>InclassTask8</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
    <header>
    <h1>Welcome to Conestoga Cafe</h1>
    <h2>Please select your preferences</h2>
    </header>
    <main>
		<form action="ProcessData.php" method="post">
			<?php	
				$arry1=array("Conestoga Casserole","Conestoga Sandwich","Conestoga Pie","Grilled Conestoga","Conestoga Surprise");		
				for ($i=0; $i<5; $i++){
					$sn=$i+1;	
					echo "<input type=\"checkbox\" name=\"preference[]\" value=\"$sn\">$arry1[$i]<br/> ";
				}		
			?>  
        
			<input type="submit" value="Click to Submit"> 
			<input type="reset" value="Erase and Restart">
		</form>   
    </main> 
</body>
</html>