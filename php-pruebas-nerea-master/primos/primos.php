<?php
$numero1 = 1;
$numero2 = 23;
for ($i = $numero1; $i <= $numero2; $i++)
{
    $nDiv = 0;
    for ($numero = 1; $numero <= $i; $numero++)
    {
        if($i%$numero == 0)
        {
            $nDiv = $nDiv + 1;
        }
    }
    if($nDiv == 2 or $i == 1)
    {
        print $i;
    }
}
?>