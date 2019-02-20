<?php
require 'code-php/primary.php';
require 'page-php/contact.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=$title?>|<?=$pageName?></title>
        <link type="text/css" rel="stylesheet" href="theme/theme1.css"/>
    </head>
    <body id="contact">
      <nav><?php require 'code-html/nav.php' ?></nav>
      <h1><?=$title?></h1>
      <section>
          <form id="contact-form" action="" method="post">
              <div class="line">
                <label>Name-Surname</label>
                <input type="text" name="name-surname">
              </div>
              
              <div class="line">
                <label>E-Posta</label>
                <input type="text" name="e-posta">
              </div>
              
              <div class="line">
                <label>Message</label>
                <textarea name="message"></textarea>
              </div>
              
              <button>Send</button>
          </form>
      </section>
      <footer><?php require 'code-html/footer.php' ?></footer>
    </body>
</html>
