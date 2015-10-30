<?php

$item = json_decode(file_get_contents("data.txt"), 2);
$item = $item[$_GET["key"]];

?>
<form role="form" action="saada.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="comment">nimi</label>
       <textarea name="nimi" class="form-control" rows="5" id="comment"><?=$item["nimi"]?></textarea>
    </div>
	    <div class="form-group">
      <label for="comment">sugu</label>
       <textarea name="sugu" class="form-control" rows="5" id="comment"><?=$item["sugu"]?></textarea>
    </div>
    <div class="form-group">
      <label for="comment">Lühikirjeldus endast</label>
       <textarea name="kirjeldus" class="form-control" rows="5" id="comment"><?=$item["kirjeldus"]?></textarea>
    </div>
	    <div class="form-group">
      <label for="comment">sisseasutmine</label>
       <textarea name="sisseastumine" class="form-control" rows="5" id="comment"><?=$item["sisseastumine"]?></textarea>
    </div>
	    <div class="form-group">
      <label for="comment">lemmikõpeaine</label>
       <textarea name="lemmikopeaine" class="form-control" rows="5" id="comment"><?=$item["lemmikopeaine"]?></textarea>
    </div>
	<button type="submit" class="btn btn-default"> Muuda </button>
</form>
