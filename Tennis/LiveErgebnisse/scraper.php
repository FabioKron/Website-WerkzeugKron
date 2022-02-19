<?php
  require_once "simple_html_dom.php";


$html = file_get_html("https://www.rlp-tennis.de/liga/vereine/verein/begegnungen/v/21710.html?cHash=34811ff732377e3e5f0bd7f96c2a2ca5", false);

$results = array();

if (!empty($html)) {

    $div_class = $title = "";
    $i = 0;

    foreach ($html->find("tr") as $div_class) {

        # Datum
        foreach ($div_class->find(".date") as $date) {
            $results[$i]['date'] = $date->plaintext;
        }

        # Gruppe
        foreach ($div_class->find(".group") as $group) {
            $results[$i]['group'] = $group->plaintext;
        }

        # Heimmannschaft
        foreach ($div_class->find(".home") as $home) {
            $results[$i]['home'] = $home->plaintext;
        }

        # Gastmannschaft
        foreach ($div_class->find(".guest") as $guest) {
            $results[$i]['guest'] = $guest->plaintext;
        }

        # Spielort
        foreach ($div_class->find(".place") as $place) {
            $results[$i]['place'] = $place->plaintext;
        }

        # Matches
        foreach ($div_class->find(".matches") as $matches) {
            $results[$i]['matches'] = $matches->plaintext;
        }

        # Sätze
        foreach ($div_class->find(".sets") as $sets) {
            $results[$i]['sets'] = $sets->plaintext;
        }

        # Spiele
        foreach ($div_class->find(".games") as $games) {
            $results[$i]['games'] = $games->plaintext;
        }

        # Spielbericht
        foreach ($div_class->find(".result") as $result) {
            $results[$i]['result'] = $result->plaintext;
        }
        
        $i++;
    }
}


foreach ($results as $res) {
    print_r($res);
    print_r("<br>");
}
?>