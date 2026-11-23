<?php
// Läs datan. Nyckeln i $_POST är fältets name-attribut.
$name   = $_POST["name"];
$email  = $_POST["email"];
$message = $_POST["message"];

?>
<main>
  <h1 class="block__element">Tack för ditt meddelande!</h1>
  <p class="block__element">Namn: <?php echo htmlspecialchars($name); ?></p>
  <p class="block__element">E-post: <?php echo htmlspecialchars($email); ?></p>
  <p class="block__element">Meddelande: <?php echo htmlspecialchars($message); ?></p>
</main>
<!--Från canvas-->
<?php
class simpleController
{
    public function handleRequest(): void
    {
        $postatData = []:
        $isPost = $_SERVER['REQUEST_METHOD'] === 'POST';
        if ($isPost) {
            $postatData = [
                'name' => $_POST['name'] ?? '',
                'email' => $_POST['email'] ?? '',
                'message' => $_POST['message'] ?? '',
            ];
        }
        $this->render('tack.php', [
            'data' => $postatData,
            'isPost' => $isPost,
        ]);
    }
}