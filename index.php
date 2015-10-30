<?php
require("form.php");
?>
<table align="center" cellpadding="5" rowspan="5">
    <tr>
        <th>Nimi</th>
        <th>Vaata/Muuda</th>
    </tr>
	<?php
	$items = json_decode(file_get_contents("data.txt"), 2);
	if(is_array($items)) {
		foreach($items as $key => $item) {
	?>
			<tr>
				<td><a href="one.php?key=<?=$key?>"><?=$item["nimi"]?></a></td>
        <td><a href="muuda.php?key=<?=$key?>">Vaata/Muuda</a></td>
			</tr>
	<?php
		}
	}
	?>
</table>
