<?php
$filename = "our.txt";
$file = fopen($filename, "r");
$content = fread($file, filesize($filename));
fclose($file);
$filename2 = "result.txt";
$file2 = fopen( $filename2, "w");
echo $content."<br>";
$arr_words = explode(".", $content);
foreach ($arr_words as $item) 
{
    echo $item." || ";
}
echo "<br>";


function GetAge($arr_words, $array_me, $array_friend)
{
        $array_me =[];
        $array_friend =[];
    for ($i = 0; $i < 2; $i++)
    {
        if ($i == 0)
        {
            $array_me = explode(",", $arr_words[$i]);
        }
        else $array_friend = explode(",", $arr_words[$i]);
    }
    foreach ($array_me as $item)
    {
        echo $item." | ";
    }
    echo "<br>";
    foreach ($array_friend as $item)
    {
        echo $item." ! ";
    }
    echo "<br>";
    return $array_age = [$array_me[2], $array_friend[2]];
}
$array_age = GetAge($arr_words, $array_me, $array_friend);


function GetHairColor($arr_words, $array_me, $array_friend)
{
        $array_me =[];
        $array_friend =[];
        for ($i = 0; $i < 2; $i++)
    {
        if ($i == 0)
        {
            $array_me = explode(",", $arr_words[$i]);
        }
        else $array_friend = explode(",", $arr_words[$i]);
    }
        return $array_hairColor = [$array_me[3], $array_friend[3]];
}
$array_hairColor = GetHairColor($arr_words, $array_me, $array_friend);

function GetEyesColor ($arr_words, $array_me, $array_friend)
{
        $array_me =[];
        $array_friend =[];
        for ($i = 0; $i < 2; $i++)
    {
        if ($i == 0)
        {
            $array_me = explode(",", $arr_words[$i]);
        }
        else $array_friend = explode(",", $arr_words[$i]);
    }
        return $array_eyesColor = [$array_me[4], $array_friend[4]];
}
$array_eyesColor = GetEyesColor ($arr_words, $array_me, $array_friend);

function GetInfo ($array_age, $array_eyesColor, $array_hairColor)
{
    foreach ($array_age as $item)
    {
        echo $item." ";
    }
    echo "<br>";

    foreach ($array_hairColor as $item)
    {
        echo $item." ";
    }
    echo "<br>";

    foreach ($array_eyesColor as $item)
    {
        echo $item." ";
    }
    echo "<br>";
}
// ||Проверка массивов|| GetInfo($array_age, $array_eyesColor, $array_hairColor);

if ($array_age[0] > $array_age[1]) fwrite($file2, "Мне ".$array_age[0]."\n");
else fwrite($file2,"Другу ".$array_age[1]."\n" );
if ($array_hairColor[0] == $array_hairColor[1]) fwrite($file2, "У нас одинакового цвета волосы \n") ;
if ($array_eyesColor[0] == $array_eyesColor[1]) fwrite($file2,"У нас глаза одинакового цвета \n");
$k = 0;
if ($array_age[0] > $array_age[1])
{
        for ($i = $array_age[1]; $i < $array_age[0]; $i++)
        {
            $k++;
        }
        fwrite($file2, "Младшему до старшего ".$k." лет \n");
}
else if ($array_age[0] < $array_age[1])
{
        for ($i = $array_age[0]; $i < $array_age[1]; $i++)
        {
            $k++;
        }
        fwrite($file2, "Младшему до старшего ".$k." лет \n");
}


fclose($file2);
?>