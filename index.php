<?php

$client = "Johnny";
$isEnglishman = false;
$message = "Welcome Brother";
if ($isEnglishman) {
    $message = "$client is Englishman";
}
?>
<h1>Hello <?= $client ?>!</h1>
<p><?= $message ?>!</p>
<?php
$brotherinarms = [
    [
        'name' => "Daniel",
        'age' => 30,
        'url' => 'http://example.com'
    ],
    [
        'name' => "Derrick",
        'age' => 34,
        'url' => 'http://example.com'
    ],
    [
        'name' => "Rudolph",
        'age' => 53,
        'url' => 'http://example.com'
    ],
    [
        'name' => "Tim",
        'age' => 44,
        'url' => 'http://example.com'
    ]
];

function filter($datas, $fn)
{
    $filtereddatas = [];
    foreach ($datas as $data) {
        if ($fn($data)) {
            $filtereddatas[] = $data;
        }
    }
    return $filtereddatas;
}

$filteredByAge = function ($agefilter) use ($brotherinarms) {
    return filter($brotherinarms, function ($age) use ($agefilter) {
        return $age["age"] <= $agefilter;
    });
};

require "index.view.php";
