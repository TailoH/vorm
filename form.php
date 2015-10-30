<!DOCTYPE html>
<html lang="et">
<head>
  <title>Kodutöö</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h2>Vorm</h2>
  <form role="form" action="saada.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Nimi</label>
      <input name="nimi" type="text" class="form-control" id="name">
    </div>
    <div class="form-group">
      <label for="comment">Lühikirjeldus endast</label>
       <textarea name="kirjeldus" class="form-control" rows="5" id="comment"></textarea>
    </div>
     <div class="form-group">
  <label for="sel1">Sisseastumise aasta VKHK:</label>
  <select name="sisseastumine" class="form-control" id="sel1">
    <option>2012</option>
    <option>2013</option>
    <option>2014</option>
    <option>2015</option>
  </select>
</div>
    <div class="radio">
		<strong>Vali sugu:</strong><br>
  <label><input type="radio" name="sugu" value="mees">Mees</label>
  <label><input type="radio" name="sugu" value="naine">Naine</label>
   </div>
    <div class="checkbox">
		<strong>Sinu lemmikõpeaine VKHK-s?:</strong><br>
      <label><input name="lemmikopeaine" value="Programmeerimine" type="checkbox"> Programmeerimine</label>
      <label><input name="lemmikopeaine" value="Multimeedium" type="checkbox"> Multimeedium</label>
      <label><input name="lemmikopeaine" value="Majandustarkvara" type="checkbox"> Majandustarkvara</label>
    </div>
    <strong>Vali pilt üleslaadimiseks:</strong>
    <input type="file" name="myFile" id="fileToUpload"><br>
    <button type="submit" class="btn btn-default"> Sumbit </button>
  </form>
</div>
</body>
</html>
