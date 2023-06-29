<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $this->title; ?></title>
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <section>
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