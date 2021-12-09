<?php
$fixed = new \SplFixedArray(3);
$fixed[0] = 'Laranja';
$fixed[1] = 'Mandioca';
$fixed[2] = 'Beterraba';

$fixed->setSize(4);

$fixed[3] = 'Goiaba';


foreach($fixed as $value) {
    echo $value . "<br>";
}

