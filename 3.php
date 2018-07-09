<?php

$continents =array(

    'Africa' =>array( 'Arsinoitherium', 'Palaeoloxodon recki hkhgg vkhhkj' ),

    'North America' =>array ('Mammuthus primigenius'),

    'Australia' => array('Palorchestes azael', 'Diprotodontidae' , 'Genyornis newtoni'),

    'Europa'=>array ('Amphicyon major' , 'Ursus minimus' , 'Megaloceros giganteus',  'Coelodonta antiquitatis')
);
echo "<pre>";
 echo 'Исходныи  массив: ';
echo "<pre>";
print_r($continents);

$TwoName = array(); //массив из двух слов
$k=0;  //с4ёт4ик
foreach($continents as $continent =>$con )
    foreach ($con as $animal)
    {
        if (strpos($animal, ' ')!=false)
        { $k=  substr_count($animal, ' ');
        if  ($k==1)
            $TwoName[]= $animal;
        }
    }
echo '<pre>';
echo 'массив  с двумя словами: ';
echo '<pre>';
print_r($TwoName);

echo '<pre>';

$first= array();
$second=array();
foreach($TwoName as $name){
    $parts = explode(' ', $name);
    $first[] = $parts[0];
   //$first=shuffle($first);
    $second[] = $parts[1];
}

echo '**************** финальныи перемешанныи массив***********<br>';
shuffle($second);
shuffle($first);
$final_result = [];
 for ($i = 0; $i < count($first); $i++)
{ $final_result[$i]=$first [$i] . ' ' . $second [$i];
        echo $first [$i] . ' ' . $second [$i] .'<br>';
}

?>
