<?php
foreach(glob("Upload/*") as $dir){
   echo '<a href="' . $dir . '">'.$dir.'</a>';
   echo "<br>";
}
echo '<a href="index.html">Return to Home Page</a>';
?>