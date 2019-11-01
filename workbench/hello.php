<?php
require_once 'session.php';
require_once 'shared.php';
include_once 'header.php';
?>

<textarea id="requestHeaders" name="requestHeaders" style="width: 100%; height: 500px; font-family: courier, monotype;">
<?php 
echo shell_exec('bash ./../sfdx_scripts/sfdx_run');
?>
</textarea>
        


<?php
// include_once 'footer.php';
?>
