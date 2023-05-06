<?php
include_once "functions.php";

$site = "Asian Arts Talents Foundation";
$domain = "aatf.us";

$links = [
    "/" => "Home",
    "about" => "About",
    "activities" => $current_year . "Activities",
    "gallery" => "Gallery",
    "videos" => "Videos",
    "forms" => "Forms",
    "scholarshipwinners" => "Scholarship Winners",
    "donate" => "Donate",
    "contact" => "Contact",
];

$dropdown_links = [
    "/forums" => "Forums",
    "//twitch.tv/aatfus" => "Twitch",
    "//twitter.com/aatfus" => "Twitter",
    "//www.facebook.com/aatfus" => "Facebook Page",
    "//www.youtube.com/user/aatfus" => "YouTube",
    "//www.linkedin.com/groups/Asian-Arts-Talents-Foundation-6620148" => "LinkedIn Group",
    "//www.linkedin.com/company/asian-arts-talents-foundation" => "LinkedIn Company",
];

include_once "common/header.php";
