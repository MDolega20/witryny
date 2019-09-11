<?php

$users = [
    "Darrell French",
    "Leon Powers",
    "Mamie Conner",
    "Gavin Massey",
    "Marie Bass",
    "Aiden Hardy",
    "Harriett Santos",
    "Iva Black",
    "Joshua Casey",
    "Augusta Carlson",
    "Emily Ellis",
    "Caleb Phelps",
    "Dorothy Norris"
];

$books = [
    "outline case",
    "serious unless",
    "dress object",
    "becoming kids",
    "away third",
    "tune hang",
    "animal four",
    "like thumb",
    "nest lungs",
    "shoe require",
    "bill operation",
    "lunch speak",
    "mad band",
    "blow hungry",
    "protection nails",
    "with swam",
    "carbon fifteen",
    "learn business",
    "level inch",
    "proper century",
    "serve lips",
    "pound pig",
    "peace design",
    "flat material",
    "easier drive",
    "dinner manufacturing",
    "knife catch",
    "rapidly see",
];

$data = [];
$noUsers = [];
$users2 = [];

foreach ($books as $key => $value) {
    if(!isset($data[$value])){
        $data[$value] = rand(0, count($users) -1);
    }
}
foreach ($data as $key => $value) {
    if ($value === 0) {
        array_push($noUsers, $key);
    }
    if(isset($users2[$users[$value]])) {
        array_push($users2[$users[$value]], $key);
    }else {
        $users2[$users[$value]] = [];
        array_push($users2[$users[$value]], $key);
    }

}
uasort($users2, function ($element1, $element2)
{
    $el1 = count($element1);
    $el2 = count($element2);
    return $el2 - $el1;
});
echo "Książki nie wypozyczone: " . count($noUsers) . "\n";
foreach ($noUsers as $key => $value) {
    echo "- " . $value . "\n";
}
echo "Najlepsi użytkownicy: " . "\n";
foreach ($users2 as $key => $value) {
    if(count($value) > 3)
        echo "- " . $key . " - " . count($value) . " books\n";
}