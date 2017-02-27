<?php
$current_year = date('Y');
$current_month = date('F');

global $current_year;
global $current_month;

$activitiesfile = $current_year . 'as.txt';
$activitieshandle = @fopen($activitiesfile, 'r');

list($ignore, $fullgalleryname) = preg_split('/\//', $_SERVER['SCRIPT_URL']);
list($galleryname, $ignore) = preg_split('/\./', $fullgalleryname);
$galleryfile = $galleryname . '.gallery';
$galleryhandle = @fopen($galleryfile, 'r');

$scholarshipwinnersfile = 'scholarshipwinners.txt';
$scholarshipwinnershandle = @fopen($scholarshipwinnersfile, 'r');

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
