<?php
  require_once "simple_html_dom.php";


$html = file_get_html("https://www.rlp-tennis.de/liga/vereine/verein/begegnungen/v/21710.html?cHash=34811ff732377e3e5f0bd7f96c2a2ca5", false);

$results = array();

if (!empty($html)) {

    $div_class = $title = "";
    $i = 0;

    foreach ($html->find("tr") as $div_class) {

        //Extract the review title
        foreach ($div_class->find(".date") as $date) {
            $results[$i]['date'] = $date->plaintext;
        }

        $results[$i]["div_class"] = $div_class;

        $i++;
    }
}
print_r($results);
?>