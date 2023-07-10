<?php
print(explode(",", $_SERVER["HTTP_X_FORWARDED_FOR"])[0]);
?>
