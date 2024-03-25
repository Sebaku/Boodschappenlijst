<?php $title = "Voeg product toe";
require('partials/header.php');?>
<form method="POST" action="/created">
    <label for="fname">Prduct naam:</label><br>
    <input name="product"></input><br>
    <label for="fname">Aantal:</label><br>
    <input name="quantity"></input><br>
    <label for="fname">Prijs:</label><br>
    <input name="price"></input><br>
    <button type="submit">Submit</button>
</form>
</body>