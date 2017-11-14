<?php
echo shell_exec("git checkout -- . && git pull && git lfs pull");
?>
