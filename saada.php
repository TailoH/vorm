<?php
$nimi = $_POST['nimi'];
$kirjeldus = $_POST['kirjeldus'];
$sugu = $_POST['sugu'];
$sisseastumine = $_POST['sisseastumine'];
$lemmikopeaine = $_POST['lemmikopeaine'];
$name = $parts["filename"];

define("UPLOAD_DIR", "uploads/");

if (!empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];

    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error occurred.</p>";
        exit;
    }

    // korrektne faili nimetus
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

    // ei tohi faili üle kirjutada
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }

	// preserve file from temporary directory
    $success = move_uploaded_file($myFile["tmp_name"],
        UPLOAD_DIR . $name);
    if (!$success) {
        echo "<p>Unable to save file.</p>";
        exit;
    }

    // õigused laetud failile
    chmod(UPLOAD_DIR . $name, 0644);
}

$data = json_decode(file_get_contents("data.txt"), 2);

$data[] = array(
	"nimi" => $nimi,
	"kirjeldus" => $kirjeldus,
	"sugu" => $sugu,
	"sisseastumine" => $sisseastumine,
	"lemmikopeaine" => $lemmikopeaine,
	"fail" => $name
);

file_put_contents("data.txt", json_encode($data));

header("Location: index.php");

?>
