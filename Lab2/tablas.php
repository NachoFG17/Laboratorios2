<?php include 'Header.php'?>

    <h1>Calculador tablas del 1 al 10 </h1>

    <div class="todo2">
    <form method="post" >

<label for="numero">Ingrese un número</label>
<input type="number" id="numero" name="numero" required>
<button type="submit">Calcular</button>
<?php

include 'funciones.php';

if (isset($_POST['numero'])) {
$numero = intval($_POST['numero']); 
echo tablas($numero);
}
?>
</form>
    </div>
    

    
    <?php include 'Footer.php'?>
