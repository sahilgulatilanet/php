<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
$age["sahil"]=24;
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>