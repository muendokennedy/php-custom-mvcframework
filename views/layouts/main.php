<?php
use app\core\Application;
/** @var $this \app\core\View */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $this->title; ?></title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <nav>
    <div class="left-nav">
      <a href="/">home</a>
      <a href="/contact">contact</a>
    </div>
    <?php if(Application::isGuest()):?>
    <div class="right-nav">
      <a href="/register">register</a>
      <a href="/login">login</a>
    </div>
    <?php else: ?>
    <div class="right-nav">
      <a href="/profile">profile</a>
      <a href="/logout">Welcome <?php echo Application::$app->user->getDisplayName(); ?> (Logout)</a>
    </div>
    <?php endif; ?>
  </nav>
  <section>
    <?php if(Application::$app->session->getFlash('success')):?>
    <div class="alert-success">
      <?php echo Application::$app->session->getFlash('success');?>
    </div>>
    <?php endif; ?>
    {{content}}
  </section>
  <script>
  const successAlert = document.querySelector(".alert-success");
  let successContent = successAlert.textContent;

  if (successContent) {
    setTimeout(() => {
      successAlert.style.left = "-110%";
    }, 5000);
  }
  </script>
</body>

</html>