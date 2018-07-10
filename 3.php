<?php
$continents = array(
    'Africa' => array( 'Arsinoitherium', 'Palaeoloxodon recki hkhgg vkhhkj' ),
    'North America' => array('Mammuthus primigenius'),
    'Australia' => array('Palorchestes azael', 'Diprotodontidae' , 'Genyornis newtoni'),
    'Europa'=> array('Amphicyon major' , 'Ursus minimus' , 'Megaloceros giganteus',  'Coelodonta antiquitatis')
);
echo "<pre>";
echo 'Исходныи  массив: ';
echo "<pre>";
print_r($continents);
$TwoName = [];
$first= [];
$second= [];
foreach($continents as $continent =>$con) {
    foreach ($con as $animal) {
            if (substr_count($animal, ' ')==1) {
                $TwoName[] = $animal;
                $parts = explode(' ', $animal);
                $first[] = $parts[0];
                $second[] = $parts[1];
                shuffle($first);
                shuffle($second);
            }
    }
}
echo ' массив  с двумя словами: <br>';
print_r($TwoName);
echo '<pre>';
echo ' Финальныи перемешанныи массив:<br>';
for ($i = 0; $i < count($first); $i++) {
    echo $first [$i] . ' ' . $second [$i] .'<br>';
}
?>
