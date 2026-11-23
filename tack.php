<?php
// Läs datan. Nyckeln i $_POST är fältets name-attribut.
$name   = $_POST["name"];
$email  = $_POST["email"];
$message = $_POST["message"];

?>
<!DOCTYPE html>
<html lang="sv">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Tack för ditt meddelande!" />
    <title>Kontaktbekräftelse</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="icon" href="../images/favicon.ico" type="x-icon" />
    <script src="../js/script.js" defer></script>
  </head>
  <body>
    <a class="skip__link" href="#main">Hoppa till innehåll!</a>

    <header class="header">
      <!--Huvudmeny-->
      <nav class="nav" aria-label="Huvudmeny">
        <ul class="nav__list">
          <li class="nav__item"><a class="nav__link" href="../index-grupp27.html">Hem</a></li>
          <li class="nav__item"><a class="nav__link" href="about-grupp27.html">Om mig</a></li>
          <li class="nav__item"><a class="nav__link" href="competencies-grupp27.html">Kompetenser</a></li>
          <li class="nav__item"><a class="nav__link" href="education-grupp27.html">Utbildning</a></li>
          <li class="nav__item"><a class="nav__link" href="contact-grupp27.html">Kontakt</a></li>
          <li class="nav__item"><a class="nav__link" href="resume-grupp27.html">CV</a></li>
        </ul>
      </nav>
    </header>
    <main id="main" class="main">
        <section class="contact-confirmation">
          <h1 class="contact-confirmation__heading">Kontaktbekräftelse</h1>
            <?php
                if ($name == "")
                    {
                        echo "<p> Du måste fylla i ditt namn!</p>";
                    }
                    else if ($email == "")
                    {
                        echo "<p> Du måste fylla i din e-postadress!</p>";
                    }
                    else if ($message == "")
                    {
                        echo "<p> Du måste fylla i ett meddelande!</p>";
                    }
                    
                <p> Tack för ditt meddelande! Jag återkommer till dig så snart som möjligt.</p>
                <p> Namn: <?php echo htmlspecialchars($name); ?></p>
                <p>E-post: <?php echo htmlspecialchars($email); ?></p>
                <p>Meddelande: <?php echo htmlspecialchars($message); ?></p>
            ?>
        </section>
     </main>
    <footer class="footer">
      <p class="footer__text">
        &copy; 2026 Barbara Millicent Roberts & Grupp 27
      </p>
    </footer>
  </body>
</html>