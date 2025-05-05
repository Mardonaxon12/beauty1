<!DOCTYPE html>
<html>
  <head>
    <title>Go'zallik web sayti</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
      integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header>
      <nav id="navbar">
        <div class="container">
          <h1 class="logo"><a href="#">BEAUTY.UZ</a></h1>
          <ul>
            <li><a href="index.html">Asosiy</a></li>
            <li><a href="about.html">Biz haqimizda</a></li>
            <li><a href="contact.php" class="current">Bog'lanish</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="contact-form">
      <div class="container">
        <h1><span class="text-primary">Biz bilan</span> Bog'lanish</h1>
        <p>Biz bilan bog‘lanish uchun quyidagi shaklni to‘ldiring</p>

        <form action="admin/create.php" method="POST">
          <div class="form-group">
            <label for="name">Ism</label>
            <input type="text" id="name" name="name" required />
          </div>
          <div class="form-group">
            <label for="contact">Tel raqam</label>
            <input type="text" id="contact" name="contact" required />
          </div>
          <div class="form-group">
            <label for="message">Xabar</label>
            <textarea id="message" name="message" required></textarea>
          </div>
          <button class="btn" type="submit">Yuborish</button>
        </form>
        
      </div>
    </section>

    <section id="contact-info" class="bg-dark">
      <div class="container">
        <div class="box">
          <i class="fas fa-hotel fa-3x"></i>
          <h3>Manzillarimiz</h3>
          <p>
            123 Al-Xorazmiy, Urgench
          </p>
        </div>
        <div class="box">
          <i class="fas fa-phone fa-3x"></i>
          <h3>Telefon raqam</h3>
          <p>
            (+998)88 687 4224
          </p>
        </div>
        <div class="box">
          <i class="fas fa-hotel fa-3x"></i>
          <h3>Email</h3>
          <p>
            info@beautyuz.com
          </p>
        </div>
      </div>
    </section>

    <div class="clr"></div>

    <footer id="main-footer">
      <marquee><p>Go'zallik &copy; 2024, Barcha huquqlar himoyalangan</p></marquee>
    </footer>
  </body>
</html>