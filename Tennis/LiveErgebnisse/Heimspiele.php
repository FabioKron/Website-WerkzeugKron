<?php
  require_once "simple_html_dom.php";
    
$html = file_get_html("https://www.rlp-tennis.de/liga/vereine/verein/begegnungen/v/21710.html?cHash=34811ff732377e3e5f0bd7f96c2a2ca5");

$results = array();

if (!empty($html)) {

    $div_class = "";
    $i = 0;

    foreach ($html->find("tr") as $div_class) {
        
        $herxheim_ist_heim = false;

        # Heimmannschaft
        $home = $div_class->find(".home")[0]->plaintext;

        if (strpos($home, "TC Blau-Weiss Herxheim") == false){
            continue;
        }

        # Datum
        $results[$i]['date'] = $div_class->find(".date")[0]->plaintext;

        # Gruppe
        $results[$i]['group'] = $div_class->find(".group")[0]->plaintext;

        # Gastmannschaft
        $results[$i]['guest'] = $div_class->find(".guest")[0]->plaintext;
        
        $i++;
    }
}

print_r("<table style='border:2px solid black;'>");
print_r("<tr>");

print_r("<td>");
print_r("Datum");
print_r("</td>");

print_r("<td>");
print_r("Gruppe");
print_r("</td>");

print_r("<td>");
print_r("Gastmannschaft");
print_r("</td>");

print_r("</tr>");

foreach ($results as $res) {
    print_r("<tr>");

    print_r("<td>");
    print_r($res["date"]);
    print_r("</td>");

    print_r("<td>");
    print_r($res["group"]);
    print_r("</td>");

    print_r("<td>");
    print_r($res["guest"]);
    print_r("</td>");

    print_r("</tr>");
}
print_r("</table>");

?>