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
	
	<form action="{{ url('/insert') }}" method="post">

{{csrf_field()}}
<div>
    <label for="nom">titre de livre:</label>
    <input type="text" id="nom" name="titre">
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
    <label for="courriel">Edition de livre :</label>
    <input type="edition" id="courriel" name="edition">
  </div>


<div>
    <label for="message">Description de livre :</label>
<!--     <textarea></textarea> -->
	<input type="text" name="description"/>
  </div>
 
  <div class="button">
		<button type="submit" >validate</button>
  </div>
</form>

</body>