<?php
echo "nhin clmm a <br>";
foreach($this->vars as $id => $rows)
{
    foreach($rows as $id => $val)
    {
        echo $val . " ";
    }
    echo "<br>";
}