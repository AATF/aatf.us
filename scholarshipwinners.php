<?php
include_once('functions.php');
$title = 'Scholarship Winners';
include_once('header.php');
?>

<?php
$winners = [];
if ($scholarshipwinnershandle) {
    while (($buffer = fgets($scholarshipwinnershandle)) != false) {
        $buffer = trim($buffer);
        if ((substr($buffer, 0, 1) != "#") && ($buffer != "")) {
            list($year, $place, $name, $school, $display, $filename) = preg_split('/:/', $buffer);
            $winners[$year][$name] = ['place' => $place, 'school' => $school, 'display' => $display, 'filename' => $filename];
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
<p><?php print ordinal($data['place']); ?> Place - <?php print $name; ?> <?php if ($data['school']) { ?>(<?php print $data['school'] ?>)<?php } ?> </p>
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
            $display = $data['display'];
            $place = $data['place'];
            $filename = $data['filename'];

            $pdf_name = "$year - " . str_replace(' ', '', $name);

            if (($display == true || !$display) || !file_exists($filename) || !file_exists($pdf_name)) {
?>
<p><?php print ordinal($place) ?> Place - <?php print $name; ?></p>
<?php
            } else {
                if ($filename && file_exists($filename)) {
?>
<p><?php print ordinal($place) ?> Place - <a href="/scholarshipwinners_files/<?php print $filename ?>"><?php print $name; ?></a></p>
<?php
                } else {
?>
<p><?php print ordinal($place) ?> Place - <a href="/scholarshipwinners_files/<?php print $pdf_name ?>.pdf"><?php print $name; ?></a></p>
<?php
                };
            };
        };
?>
</div>
<?php
    };
} else {
?>
No scholarship winners yet.
<?php
};
?>
</div>
<?php include_once('footer.php'); ?>
