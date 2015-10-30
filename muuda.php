<?php

$item = json_decode(file_get_contents("data.txt"), 2);
$item = $item[$_GET["key"]];

?>
<?php
if (isset($_POST['submit'])) {

$myFile = "data.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = stripslashes($_POST['sf']);
fwrite($fh, $stringData);
fclose($fh);

header('Location: index.php');

}
?>
<form action="" method="post">
<textarea name="sf" cols="40" rows="6">
<?php
$myFile = "data.txt";
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
echo $theData;
?></textarea>
<br />
<input type="submit" name="submit" value="Edit" />
</form>
<?php
if ($_GET['a'] == 'done') {
echo 'The file was saved and now it says:<br /><br />';

$myFile = "data.txt";
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
echo $theData;

}
?>
