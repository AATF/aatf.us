<?php
require "vendor/autoload.php";

use Aws\S3\S3Client;

$sharedConfig = [
    "region" => "us-west-2",
    "version" => "latest",
];
$sdk = new Aws\Sdk($sharedConfig);
//$s3 = $sdk->createS3();

$site_version = trim(file_get_contents("VERSION"));

$cdn_url = "cdn.aatf.us";

$current_year = date("Y");
$current_month = date("F");

global $current_year;
global $current_month;
global $extra_head;

$activitiesfile = $current_year . "-activities.txt";
$activitiesarr = file("https://" . $cdn_url . "/" . $activitiesfile);

$scholarshipwinnershandle = file("https://" . $cdn_url . "/scholarshipwinners_files/scholarshipwinners.txt");

function format_date($date, $format = null) {
    if ($format) {
        return strftime($format, strtotime($date));
    }
    else {
        return strftime("%B %e, %Y", strtotime($date));
    }
}

function ordinal($num) {
    $num = (int) $num;

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

function flatten(array $array) {
    $return = array();

    array_walk_recursive($array, function($a) use (&$return) { $return[] = $a; });

    return $return;
}

function get_s3_key($o) {
    return $o->Key;
}

function get_image_files() {
//    $objects = $s3->listObjectsV2([
//        "Bucket" => "aatf-us",
//        "MaxKeys" => 1000,
//    ])->Contents;
//    $keys = array_map("get_s3_key", $objects);
//    print($keys);

    return ["//" . $cdn_url . "/images/2005-dance-festival/2005aatffrdfPicture12.jpg"];
}

function recurse_dir($dirname) {
    $dir_contents = scandir($dirname);
    foreach ($dir_contents as $orig_dir_or_file) {
        if (!in_array($orig_dir_or_file, [".", ".."])) {
            $dir_or_file = $dirname . DIRECTORY_SEPARATOR . $orig_dir_or_file;

            if (is_dir($dir_or_file)) {
                $arr[] = recurse_dir($dir_or_file);
            } else {
                $arr[] = $dir_or_file;
            };
        };
    };

    return flatten($arr);
};
?>
