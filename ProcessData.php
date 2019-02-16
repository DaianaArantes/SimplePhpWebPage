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
    </header>
    <main>
        <?php
			$arry1=array("Conestoga Casserole","Conestoga Sandwich","Conestoga Pie","Grilled Conestoga","Conestoga Surprise");
            $arrPreference = null;
            if(isset($_POST['preference']))
            {
                $arrPreference = $_POST['preference'];
            }

            if(!$arrPreference)
            {
                echo "Please select a value";
            }
            else
            {
                echo "Here are your preferences: <br/><br/>";
                foreach($arrPreference as $value)
                {                   	
					if($value=="1"){
						echo "$arry1[0]<br>";
					}
					if($value=="2"){
						echo "$arry1[1]<br>";
					}
					if($value=="3"){
						echo "$arry1[2]<br>";
					}
					if($value=="4"){
						echo "$arry1[3]<br>";
					}
					if($value=="5"){
						echo "$arry1[4]<br>";
					}						
				}
			}
        ?>
    </main> 
</body>
</html>

