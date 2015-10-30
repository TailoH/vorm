<?php

$item = json_decode(file_get_contents("data.txt"), 2);
$item = $item[$_GET["key"]];

?>

<?php

//Load the file
$items = file_get_contents('data.txt');

//Decode the JSON data into a PHP array.
$contentsDecoded = json_decode($items, true);

//Modify the counter variable.
$contentsDecoded['counter']++;

//Encode the array back into a JSON string.
$json = json_encode($contentsDecoded);

//Save the file.
file_put_contents('data.txt', $json);

header("Location: index.php");
?>
