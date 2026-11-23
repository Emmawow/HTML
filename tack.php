<?php
// Läs datan. Nyckeln i $_POST är fältets name-attribut.
$name   = $_POST["name"];
?>
<main>
  <h1 class="block__element">Tack!</h1>
  <p class="block__element">Hej <?php echo htmlspecialchars($name); ?>, du valde <?php echo htmlspecialchars($choice); ?>.</p>
</main>