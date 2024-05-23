<?php include 'Header.php'?>


    <h1>Calculadora factorial de un número</h1>
<div class="todo2">
<form method="post" >

<label for="numero">Ingresa un número</label>
<input type="number" id="numero" name="numero" min="0" required>
<button type="submit">Calcular</button>

<?php

include 'funciones.php';

if (isset($_POST['numero'])) {

$numero = intval($_POST['numero']); 
$resultado = factorialm($numero);
echo "<p>El factorial de $numero es $resultado</p>";

}
?>
</form>
</div>
   

    
   
<?php include 'Footer.php'?>