<?php
// Läs datan. Nyckeln i $_POST är fältets name-attribut.
$name   = $_POST["name"] ?? '';
$email  = $_POST["email"] ?? '';
$message = $_POST["message"] ?? '';
function printError($field, $error) {
    $safeId = htmlspecialchars($field, ENT_QUOTES, 'UTF-8');
    $safeError = htmlspecialchars($error, ENT_QUOTES, 'UTF-8');
    echo "<p id='{$safeId}-error' class='error' role='alert'>{$safeError}</p>";
}
?>
<!DOCTYPE html>
<html lang="sv">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Bekräftelsemeddelande för kontaktformulär" />
    <title>Kontaktbekräftelse</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <script src="js/script.js" defer></script>
  </head>
  <body>
    <a class="skip__link" href="#main">Hoppa till innehåll!</a>

    <header class="header">
      <!--Huvudmeny-->
      <nav class="nav" aria-label="Huvudmeny">
        <ul class="nav__list">
          <li class="nav__item"><a class="nav__link" href="index-grupp27.html">Hem</a></li>
          <li class="nav__item"><a class="nav__link" href="subpages/about-grupp27.html">Om mig</a></li>
          <li class="nav__item"><a class="nav__link" href="subpages/competencies-grupp27.html">Kompetenser</a></li>
          <li class="nav__item"><a class="nav__link" href="subpages/projects-grupp27.html">Projekt</a></li>
          <li class="nav__item"><a class="nav__link" href="subpages/education-grupp27.html">Utbildning</a></li>
          <li class="nav__item"><a class="nav__link" href="subpages/contact-grupp27.html">Kontakt</a></li>
          <li class="nav__item"><a class="nav__link" href="subpages/resume-grupp27.html">CV</a></li>
        </ul>
      </nav>
    </header>
    <main id="main" class="main">
        <section class="contact-confirmation" aria-labelledby="form-confirmation-heading">
            <h1 class="contact-confirmation__heading" id="form-confirmation-heading">Kontaktbekräftelse</h1>
            <?php if ($name === ''): ?>
                <?php printError('name', 'Du måste fylla i ditt namn!'); ?>
                <p><a href="subpages/contact-grupp27.html">Tillbaka till kontaktformuläret</a></p>
            <?php elseif ($email === ''): ?>
                <?php printError('email', 'Du måste fylla i din e-postadress!'); ?>
                <p><a href="subpages/contact-grupp27.html">Tillbaka till kontaktformuläret</a></p>
            <?php elseif ($message === ''): ?>
                <?php printError('message', 'Du måste fylla i ett meddelande!'); ?>
                <p><a href="subpages/contact-grupp27.html">Tillbaka till kontaktformuläret</a></p>
            <?php else: ?>
                <p>Tack för ditt meddelande! Jag återkommer till dig så snart som möjligt.</p>
                <p>Namn: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
                <p>E-post: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></p>
                <p>Meddelande: <?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
            <?php endif; ?>
            </section>
     </main>
    <footer class="footer">
      <p class="footer__text">
        &copy; 2026 Barbara Millicent Roberts & Grupp 27
      </p>
    </footer>
  </body>
</html>