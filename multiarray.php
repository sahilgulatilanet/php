<?php
    $a=array();
    for($r=0;$r<3;$r++)
    {
        $a[$r]=array();
        for($c=0;$c<3;$c++)
        {
            $a[$r][$c]=$r." ".$c;
        }
    }
for($r=0;$r<3;$r++)
{
    for($c=0;$c<3;$c++)
    {
        echo $a[$r][$c]."    ";
    }
    echo "<br>";
}
?>