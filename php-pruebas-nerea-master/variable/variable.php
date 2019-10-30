<?php

    $v1=1;
    $v2=2;
    $aux=0;

    function patata($par1, $par2, $par3){

        $par3=$par1;
        $par2=$par3;

        return $par2;
}

echo patata($v1, $v2, $aux);