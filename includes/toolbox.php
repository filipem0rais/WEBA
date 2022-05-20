<?php
function displayAlert(string $text, string $color = 'primary')
{
    echo '<div class="alert alert-' . $color . '" role="alert">
               ' . $text . '
            </div>';

}

function breadCrumb(array $array)
{
    echo '<nav aria-label="breadcrumb">
  <ol class="breadcrumb">';

    $number = count($array);
    $cpt = 0;
    foreach ($array as $key => $value) {
        $cpt++;
        if ($cpt == $number) {
            echo '<li class="breadcrumb-item active" aria-current="page">' . $key . '</li>';
        }
        elseif (!empty($value)) {
            echo '<li class="breadcrumb-item"><a href="' . $value . '">' . $key . '</a></li>';
        } else {
            echo '<li class="breadcrumb-item">' . $key . '</li>';
        }
    }
    echo ' </ol>
</nav>';
}

function getContentJsonLanguage(string $jsonFile, string $lang){
    $rawData = file_get_contents($jsonFile);
    $data = json_decode($rawData, $assoc = true);
    $newData = [];
    $size = count($data);
    for ($i = 0; $i < $size; $i++){
        $newData[ $data[$i]['Id']] = $data[$i]['Name_'];
    }

    $myfile = fopen("exported".$lang.".txt", "w") or die("Unable to open file!");
    fwrite($myfile, json_encode($newData,JSON_UNESCAPED_UNICODE ));
}