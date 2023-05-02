<?php
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
    <p class="lead">
      You need a PDF reader to be able to open these files. Most browsers should be able to open these files.
      <br />
      If you do not have one, you can download <a href="http://get.adobe.com/reader/">Adobe Reader</a>.
    </p>

    <div class="row">
    <?php
        foreach ($winners as $year => $people) {
    ?>
    <div class="col-md-4">
      <h2><?php print $year ?> Scholarship Winners</h2>
      <?php
              foreach ($people as $orig_name => $data) {
                  $display = $data['display'];
                  $place = $data['place'];
                  $filename = $data['filename'];

                  $name = mb_convert_case($orig_name, MB_CASE_TITLE, "UTF-8");

                  $pdf_name = "$year-" . str_replace(' ', '', $name) . ".pdf";
                  $scholarship_winners_dir = "scholarshipwinners_files";

                  if ($place == "merit") {
                      $begin_text = "<p>Merit - ";
                  } else {
                      $begin_text = "<p>" . ordinal($place) . " Place - ";
                  };

                  $print_name = "";
                  $found_file = false;
                  if (file_exists("$scholarship_winners_dir/$pdf_name")) {
                      $print_name = $pdf_name;
                      $found_file = true;
                  } else if ($filename && file_exists("$scholarship_winners_dir/$filename")) {
                      $print_name = $filename;
                      $found_file = true;
                  };

                  if ($display || $found_file) {
                    print $begin_text .  "<a href=\"//$cdn_url/$scholarship_winners_dir/$print_name\">$name</a></p>";
                  } else {
                    print $begin_text . "$name</p>";
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
</div>
<?php include_once('footer.php'); ?>
