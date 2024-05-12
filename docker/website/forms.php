<?php
$title = 'Forms';
include_once('header.php');
?>

<div class="container">
  <div class="page-header">
    <h1><?php print $title ?></h1>
  </div>

<?php
$links = [
  "Scholarship Requirements" => "ScholarshipRequirements.pdf",
  "Scholarship Application" => "ScholarshipApplication.pdf",
  "Enrollment Form" => "EnrollmentForm.pdf",
  "Adult class registration" => "AATF_AACC_Registration_Form_ADULT_CLASS_v2024_05.pdf",
  "weekend adult class registration" => "AATF_AACC_Registration_Form_SATURDAY_v2024_05.pdf",
  "summer camp registration" => "AATF_AACC_Registration_Form_SUMMER_CAMP_v2024_05.pdf",
];
foreach($links as $text => $url) {
?>
  <p><a href="//<?php print $cdn_url; ?>/<?php print $link ?>" target="_blank"><?php print $text ?></a></p>
</div>

<?php
}
    include_once('footer.php');
?>
