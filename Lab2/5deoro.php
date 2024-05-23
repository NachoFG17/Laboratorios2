<?php include 'Header.php'?>
<h1>Calculadora de probabilidades </h1>

<div class="todo">
<div class="foto"></div>

<form method="post">
        <label for="numero">¿Cuáles son tus probabilidades de ganar el 5 de oro?</label>
        <input type="number" id="numero" name="numero" min="0" required placeholder="Ingrese las jugadas">
        <button type="submit">Calcular</button>

        <?php include 'funciones.php';

    if (isset($_POST['numero'])) {
        $jugadas = intval($_POST['numero']);
        
        if ($jugadas > 500) {
            echo "<p> El número de jugadas no puede ser mayor a 500. Por favor, ingresa un número válido.<br> </p>";
        } else {
            $probabilidadTotal = calcularProbabilidadJugadas(48, 5, $jugadas);
            echo "<p> Probabilidad de ganar en el 5 de Oro jugando " . $jugadas . " veces: " . sprintf('%.10f', $probabilidadTotal) . "%<br></p>";
        }
    }
    ?>
    </form>
</div>
    
<?php include 'Footer.php'?>
