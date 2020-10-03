<?php
if ($_GET["superhack"] == "waf") {
  phpinfo();
} else {
  print($_SERVER["HTTP_X_FORWARDED_FOR"]);
}
?>
