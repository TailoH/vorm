<?php

$item = json_decode(file_get_contents("data.txt"), 2);
$item = $item[$_GET["key"]];

?>

<table align="center" cellpadding="5" rowspan="5">
	<tr>
		<td><?=$item["nimi"]?></td>
		<td><?=$item["kirjeldus"]?></td>
		<td><?=$item["sugu"]?></td>
		<td><?=$item["sisseastumine"]?></td>
		<td><?=$item["lemmikopeaine"]?></td>
	</tr>
	<tr>
		<td colspan="5"><img src="uploads/<?=$item["fail"]?>" /></td>
	</tr>
</table>
