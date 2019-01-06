<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Add Books</title>
	<link rel="stylesheet" type="text/css" href="css/book.css" />
    <!--stylesheets-->
</head>

<body>
	<style type="text/css">
		body{

			background-image: url(images/livre1.png);
		}
	</style>
	
<form action="http://www.cs.tut.fi/cgi-bin/run/~jkorpela/echo.cgi" method="post">
<div>
    <label for="nom">Nom de livre:</label>
    <input type="text" id="nom" name="user_name">
  </div>

  <div>
    <label for="courriel">Genre de livre :</label>
    <input type="Genre" id="courriel" name="genre">
  </div>



  <div>
    <label for="message">Auteur de livre :</label>
    <input type="auteur" id="courriel" name="auteur">
  </div>
<div>
    <label for="courriel">Editeur de livre :</label>
    <input type="Editeur" id="courriel" name="editeur">
  </div>


<div>
    <label for="message">Description de livre :</label>
    <textarea></textarea>
  </div>
 
  <div class="button">
    <button type="submit">Valider</button>
  </div>
</form>

</body>