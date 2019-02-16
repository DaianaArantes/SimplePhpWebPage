<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>InclassTask8</title>
  
</head>
<body>
    <header>
    <h1>Welcome to Conestoga Cafe</h1>
    </header>
    <main>
        <?php
            $array1 = array("cu", "fedido", "cheio", "de", "coco");
            $arrPreference = null;

            if(isset($_POST['preference']))
            {
                $arrPreference = $_POST['preference'];
            }

            if(!$arrPreference)
            {
                echo "Please select a value";
            }
            else{
                echo "Here are your preferences: <br/><br/>";
                foreach($arrPreference as $value)
                {
                    if($value == "1")
                    {
                        echo "$array1[0]<br/>";
                    }
                    if($value == "2")
                    {
                        echo "$array1[1]<br/>";
                    }
                    if($value == "3")
                    {
                        echo "$array1[2]<br/>";
                    }
                    if($value == "4")
                    {
                        echo "$array1[3]<br/>";
                    }
                    if($value == "5")
                    {
                        echo "$array1[4]<br/>";
                    }
                
                }
            }
            
        ?>
        </main>
        </body>
        </html>