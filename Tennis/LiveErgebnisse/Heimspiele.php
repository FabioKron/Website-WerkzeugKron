<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TCBW Herxheim | Heimspiele</title>
    <link rel="stylesheet" type="text/css" href="./heimspiele.css" />

</head>

<body>

    <?php
    require_once "simple_html_dom.php";
        
    $html = file_get_html("https://www.rlp-tennis.de/liga/vereine/verein/begegnungen/v/21710.html");

    $results = array();

    if (!empty($html)) {

        $div_class = "";

        $i = 0;
        foreach ($html->find("tr") as $div_class) {
            
            $herxheim_ist_heim = false;

            # Filter Heimmannschaft
            $home = $div_class->find(".home")[0]->plaintext;

            if (strpos($home, "TC Blau-Weiss Herxheim") == false){
                continue;
            }

            # Datum
            $results[$i]['date'] = $div_class->find(".date")[0]->plaintext;

            # Gruppe
            $results[$i]['group'] = explode(" Gr.", $div_class->find(".group")[0]->plaintext)[0];

            # Gastmannschaft
            $results[$i]['guest'] = $div_class->find(".guest")[0]->plaintext;

            $i++;
            print_r($i);
            if ($i == 15){
                break;
        }
            
        }
    }

    usort($results, function($a1, $a2) {
        $v1 = strtotime($a1['date']);
        $v2 = strtotime($a2['date']);
        return $v2 - $v1; // $v2 - $v1 to reverse direction
     });

    print_r("<table style='font-family: Arial, Helvetica, sans-serif;'>");
    print_r("<tr>");

    print_r("<td style='font-size: 16pt; font-weight:bolder;padding:10px;'>");
    print_r("Datum");
    print_r("</td>");

    print_r("<td style='font-size: 16pt; font-weight:bolder;padding:10px;'>");
    print_r("Mannschaft");
    print_r("</td>");

    print_r("<td style='font-size: 16pt; font-weight:bolder;padding:10px;'>");
    print_r("Gastmannschaft");
    print_r("</td>");

    print_r("</tr>");

    $i = 0;
    foreach ($results as $res) {
        print_r("<tr>");

        print_r("<td style='font-size: 12pt;padding: 2px 10px;'>");
        print_r($res["date"]);
        print_r("</td>");

        print_r("<td style='font-size: 12pt;padding: 2px 10px;'>");
        print_r($res["group"]);
        print_r("</td>");

        print_r("<td style='font-size: 12pt;padding: 2px 10px;'>");
        print_r($res["guest"]);
        print_r("</td>");

        print_r("</tr>");

        $i++;
        print_r($i);
        if ($i == 10){
            break;
        }
    }
    print_r("</table>");

    ?>

</body>