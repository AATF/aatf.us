<?php
$title = 'Scholarship Winners';
include_once('header.php');
?>

<?php
$winners = [];
if ($scholarshipwinnershandle) {
    while (($buffer = fgets($scholarshipwinnershandle)) != false) {
        if (substr(trim($buffer), 0, 1) != "#") {
            list($year, $place, $name, $school, $essay) = preg_split('/:/', trim($buffer));
            $winners[$year][$name] = ['place' => $place, 'school' => $school, 'essay' => $essay];
        };
    };
?>

<!-- Main jumbotron -->
<div class="jumbotron">
<div class="container">
<h1><?php print $title ?></h1>
<?php
    if ($winners[$current_year - 1]) {
?>
<h2>Congratulations to the <?php print $current_year - 1 ?> scholarship winners!</h2>
<?php
        foreach ($winners[$current_year - 1] as $name => $data) {
?>
<p><?php print ordinal($data['place']); ?> Place - <?php print $name; ?> (<?php print $data['school'] ?>)</p>
<?php
        }
    }
?>
</div>
</div>

<div class="container">
<p class="lead">You need Adobe Reader to be able to open these files. If you do not have the program, you can download it <a href="http://get.adobe.com/reader/">HERE</a>.</p>

<div class="row">
<?php
    foreach ($winners as $year => $people) {
?>
<div class="col-md-4">
<h2><?php print $year ?> Scholarship Winners</h2>
<?php
        foreach ($people as $name => $data) {
            $essay = $data['essay'];
            $place = $data['place'];
            if ($essay == true) {
?>
<p><?php print ordinal($place) ?> Place - <?php print $name; ?></p>
<?php
            } else {
?>
<p><?php print ordinal($place) ?> Place - <a href="/scholarshipwinners/<?php print $year ?>-<?php print str_replace(' ', '', $name) ?>.pdf"><?php print $name; ?></a></p>
<?php
            };
        };
?>
</div>
<?php
    };
};
?>
</div>
<?php include_once('footer.php'); ?>
