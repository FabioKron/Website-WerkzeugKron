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
            $results[$i]['group'] = replaceGroup($results[$i]['group']);

            # Gastmannschaft
            $results[$i]['guest'] = $div_class->find(".guest")[0]->plaintext;

            $i++;
            if ($i == 15){
                break;
        }
            
        }
    }

    function replaceGroup($s){
        $s = str_replace("A-Klasse Gruppe 004", "U9 A-Klasse", $s);
        $s = str_replace("Herren Offen LK 7,0-25,0", "Vereinspokal Herren", $s);
        return $s;
    }

    function replaceMonth($e){
        $e = str_replace(".1.", " January ", $e);
        $e = str_replace(".2.", " February ", $e); 
        $e = str_replace(".3.", " March ", $e); 
        $e = str_replace(".4.", " April ", $e); 
        $e = str_replace(".5.", " May ", $e); 
        $e = str_replace(".6.", " June ", $e); 
        $e = str_replace(".7.", " July ", $e); 
        $e = str_replace(".8.", " August ", $e); 
        $e = str_replace(".9.", " September ", $e); 
        $e = str_replace(".10.", " October ", $e); 
        $e = str_replace(".11.", " November ", $e); 
        $e = str_replace(".12.", " December ", $e);  
        return $e;
    }

    usort($results, function($e1, $e2) {
        $a1 = explode(" ", $e1["date"])[2];
        $a1 = replaceMonth($a1);
        $a2 = explode(" ", $e2["date"])[2];
        $a2 = replaceMonth($a2);
        $v1 = strtotime($a1);
        $v2 = strtotime($a2);
        return $v1 - $v2; // $v2 - $v1 to reverse direction
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
        if ($i == 10){
            break;
        }
    }
    print_r("</table>");

    ?>

</body>