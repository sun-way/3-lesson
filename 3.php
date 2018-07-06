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

$name_two_words = [];
foreach($continents as $continent => $animals){
    foreach($animals as $animal){
        $all_animals= [];
        $anim = explode(' ', $animal);
        $all_animals[]=$anim;

        foreach($all_animals as $k){
            if(count($k) === 2){
                $comma_separated = implode(",", $k);
                $str = str_replace(',', ' ', $comma_separated);
                $name_two_words[]=$str;

               // var_dump($name_two_words);
            }
        }
    }
}

echo '<pre>';
echo 'Тут  массив из двух  слов';
echo '<pre>';
var_dump($name_two_words);

echo '<pre>';

foreach($name_two_words as $name){
    $parts = explode(' ', $name);
    $first[] = $parts[0];
    $second[] = $parts[1];
}

echo '<pre>';
echo '****************ХХХХХХХХ===============ХХХХХХХХХХХХХХХХХ***********<br>';
echo '1 word'; echo '<pre>';
var_dump($first);echo '<pre>';

//////////////////////////////////////////

echo '2 word'; echo '<pre>';
var_dump($second);
echo '<pre>';
echo '****************ХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХ***********<br>';
$random_first_word = [];

while (count($random_first_word) < count($name_two_words)){
    $proverka = $first[rand(0, count($name_two_words)-1)];
    if (!in_array($proverka, $random_first_word)) {
        array_push($random_first_word, $proverka);
    }
}

//var_dump($random_first_word);

$random_second_word = [];

while (count($random_second_word) < count($name_two_words)){
    $proverka = $second[rand(0, count($name_two_words)-1)];
    if (!in_array($proverka, $random_second_word)) {
        array_push($random_second_word, $proverka);
    }
}

//var_dump($random_second_word );

$final_result = [];
$k=0;$j=0;
for($i = 0; $i < count($name_two_words); $i++) {

    $final_result[$i] = $random_first_word[$i] . ' ' . $random_second_word[$i];
}

// пыталась сохранить индексы  и создала этот while  но ни4его  не сохраняется. запуталась.....
    while ($j < count($final_result)) {
        $j++;
         for ($n = 0; $n < count($continents); $n++)
        if (!((in_array($random_first_word, $first)))) {

              $continents1 = $final_result;

        }
    }

echo '<pre>';
echo 'Финальныи массив';
echo '<pre>';
var_dump($final_result);


/*
$TwoName = array(); $k=0;
foreach($continets as $continet =>$con )
    foreach ($con as $animal)
    {
        if (strpos($animal, ' ')!=false)
        { $k=  substr_count($animal, ' ');

        if  ($k==1)
            array_push($TwoName, $animal);}
    }
echo '2 massive: <br><br>';
print_r($TwoName);

*/

?>