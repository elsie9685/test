<?php

echo $_GET["uName"];
echo "<br/>";
echo $_GET["uPWD"];
echo "<br/>";
echo $_GET["uMessage"];
echo "<br/>";
echo $_GET["gender"];

foreach ($_GET["habit"] as $i) 
{
   echo $i."<br/>";
}

foreach ($_GET["habit"] as $j) 
{
   echo $j."<br/>";
}

?>