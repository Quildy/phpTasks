<?php
echo "6) <br>";
$areaArr = ['Московская область: ' => ['Москва', 'Зеленоград', 'Клин'], 'Ленинградская область: ' => ['Санкт-Петербург', 'Павловск', 'Кронштадт'],
'Рязанская область' => ['Рязань', 'Ряжск', 'Кораблино', 'Шацк']];

function arrCity($arrCity)
{
    foreach ($arrCity as $oblName => $value) 
    {
        echo $oblName . '<br>';
        $cityLength = count($value);
        for ($i = 0; $i < $cityLength; $i++) 
        {
            if ($i == $cityLength - 1) 
            {
                echo $value[$i] . "." . '<br> <br>';
            } 
            else 
            {
                echo $value[$i] . ", ";
            }
        }
    }
}

arrCity($areaArr);

$inputStringSev = "Седьмое задание";
echo "7) Input: " . $inputStringSev . "<br>";

function transliteString($inputString)
{
    $translit = array("а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "e", "ж" => "zh",  "з" => "z", "и" => "i", "й" => "y", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "kh", "ц" => "c", "ч" => "ch",  "ш" => "sh",  "щ" => "sch", "ь" => "",  "ы" => "y", "ъ" => "", "э" => "e", "ю" => "yu", "я" => "ya",
        "А" => "A", "Б" => "B", "В" => "V", "Г" => "G", "Д" => "D", "Е" => "E", "Ё" => "E", "Ж" => "Zh",  "З" => "Z", "И" => "I", "Й" => "Y", "К" => "K", "Л" => "L", "М" => "M", "Н" => "N", "О" => "O", "П" => "P", "Р" => "R", "С" => "S", "Т" => "T", "У" => "U", "Ф" => "F", "Х" => "KH", "Ц" => "C", "Ч" => "Ch",  "Ш" => "Sh",  "Щ" => "Sch", "Ь" => "",  "Ы" => "Y", "Ъ" => "", "Э" => "E", "Ю" => "Yu",  "Я" => "Ya");
    $outputString = strtr($inputString, $translit);
    return $outputString;
}

$result = transliteString($inputStringSev);
echo "Output: " . $result;
?>
