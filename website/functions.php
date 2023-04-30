<?php
$site_version = file_get_contents("VERSION");

$cdn_url = "cdn.aatf.us";

$current_year = date("Y");
$current_month = date("F");

global $current_year;
global $current_month;
global $extra_head;

$activitiesfile = $current_year . "-activities.txt";
$activitiesarr = file_get_contents("https://" . $cdn_url . "/" . $activitiesfile);

$scholarshipwinnershandle = file_get_contents("https://" . $cdn_url . "/scholarshipwinners_files/scholarshipwinners.txt");

function format_date($date, $format = null) {
    if ($format) {
        return strftime($format, strtotime($date));
    }
    else {
        return strftime("%B %e, %Y", strtotime($date));
    }
}

function ordinal($num) {
    $ones = $num % 10;
    $tens = floor($num / 10) % 10;
    if ($tens == 1) {
        $suffix = "th";
    } else {
        switch ($ones) {
            case 1 : $suffix = "st"; break;
            case 2 : $suffix = "nd"; break;
            case 3 : $suffix = "rd"; break;
            default : $suffix = "th";
        }
    }
    return $num . $suffix;
}
?>
