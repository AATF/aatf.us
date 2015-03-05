<?php
$title = date('Y') . ' Activities'; // year haxor until i understand php
include_once('header.php');
?>

<div class="container">
<div class="page-header">
<h1><?php print $title?></h1>
</div>

<table class="table">
<?php
if ($activitieshandle) {
  while (($buffer = fgets($activitieshandle)) != false) {
    if (substr(trim($buffer), 0, 1) != "#") {
      list($date, $event) = explode(' - ', trim($buffer), 2);
?>
<tr>
  <td><?php print $date ?></td>
  <td><?php print $event ?></td>
</tr>
<?php
    }
  }
?>
</table>
<?php
} else {
?>
    <p>Coming Soon</p>
<?php
}
?>

<?php include_once('footer.php'); ?>
