<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $this->title; ?></title>
  <style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap");

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  html {
    overflow-x: hidden;
    font-size: 62.5%;
  }

  nav {
    display: flex;
    justify-content: space-between;
    font-size: 1.8rem;
    padding: 1.5rem 2%;
    border-bottom: 0.1rem solid #000;
  }

  nav a {
    text-decoration: none;
    color: #000;
    text-transform: capitalize;
    padding: 0 1.5rem;
    transition: all 0.3s ease-in-out;
  }

  nav a:hover {
    color: #0000ff;
  }

  .title {
    font-size: 2rem;
  }

  section {
    padding: 0.5rem 2%;
  }

  .form-container {
    margin: 0.8rem 0;
  }

  .form-container h4 {
    font-size: 2.2rem;
    padding: 0.2rem 0;
    text-align: center;
  }

  .input-box {
    margin: 1.2rem 0;
  }

  .row {
    display: flex;
    justify-content: space-between;
    padding: 0.6rem 1rem;
  }

  .row .input-box {
    width: 48%;
  }

  .row {
    display: flex;
    justify-content: space-between;
    padding: 0.6rem 1rem;
  }

  .row .input-box {
    width: 48%;
  }

  .row {
    display: flex;
    justify-content: space-between;
    padding: 0.6rem 0;
  }

  .row .input-box {
    width: 49%;
  }

  .input-box label {
    display: block;
    font-size: 1.6rem;
    margin: 0.8rem 0;
  }

  .input-box input,
  .input-box textarea {
    width: 100%;
    padding: 0.6rem 1rem;
    font-size: 1.6rem;
    outline: none;
    border: 0.1rem solid silver;
    border-radius: 0.5rem;
    transition: all 0.3s ease-in-out;
  }

  .error input,
  .error textarea {
    border: 0.1rem solid #ff0000;
  }

  .input-box textarea {
    height: 12rem;
  }

  .input-box input:focus,
  .input-box textarea:focus {
    outline: none;
    border: 0.1rem solid #0000ff;
    box-shadow: 0.1rem 0.1rem 0.5rem 0.3rem rgba(0, 0, 255, 0.2);
  }

  .error input:focus,
  .error textarea:focus {
    outline: none;
    border: 0.1rem solid #ff0000;
    box-shadow: 0.1rem 0.1rem 0.5rem 0.3rem rgba(255, 0, 0, 0.2);
  }

  .error .error-text {
    color: #ff0000;
    font-size: 1.5rem;
    margin: 0.8rem 0;
  }

  .input-box input[type="submit"] {
    width: 20rem;
    font-weight: 500;
    letter-spacing: 0.1rem;
    background: #0000ff;
    padding: 1rem;
    font-size: 1.8rem;
    color: #fff;
    cursor: pointer;
  }

  .not-found {
    font-size: 2.5rem;
  }

  .alert-success {
    position: absolute;
    top: 5rem;
    left: 50%;
    transform: translateX(-50%);
    border: none;
    background: #C5FFE4;
    color: #00CF6E;
    text-align: center;
    padding: 1.4rem 2rem;
    font-size: 1.6rem;
    width: 80%;
    margin: 1.5rem auto;
    border-left: .8rem solid #00CF6E;
    border-radius: .6rem 0 0 .6rem;
    transition: all .3s ease-in-out;
  }
  </style>
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