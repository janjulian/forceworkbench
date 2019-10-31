<?php
require_once 'session.php';
require_once 'shared.php';
include_once 'header.php';
?>

<?php 

echo "<div>Sfdx:</div>";
echo shell_exec('sfdx force:org:list');

?>

<?php
// include_once 'footer.php';
?>
