<?php
// Läs datan. Nyckeln i $_POST är fältets name-attribut.
$name   = $_POST["name"];
$email =$_POST["email"]
?>
<main>
  <?php if (!empty($name)): ?>
    <h1 class="block__element">Tack!</h1>
    <p class="block__element">Hej <?php echo htmlspecialchars($name); ?>, Tack för ditt meddelande!</p>
    <p class="block__element">Vi återkommer till dig på mailen: <?php echo htmlspecialchars($email); ?></p>
  <?php else: ?>
    <p class="block__element">Inget formulär har skickats in.</p>
  <?php endif; ?>
</main>