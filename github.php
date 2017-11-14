<?php
echo shell_exec('export PATH="$PATH:/home/aatf/bin" && git reset --hard && git pull && git lfs pull');
?>
