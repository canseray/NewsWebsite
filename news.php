<?php
require 'code-php/primary.php';
require 'page-php/news.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=$title?>|<?=$pageName?></title>
        <link type="text/css" rel="stylesheet" href="theme/theme1.css"/>
    </head>
    <body>
      <nav><?php require 'code-html/nav.php' ?></nav>
      <h1><?=$title?></h1>
      <section>
        <?php
        foreach ($newss as $newsNo => $newss ){
            echo '<div class="new">';
                echo '<h2>' . $newss['headLine'] . '</h2>';
                echo '<div class="content">'. $newss['content'] .'</div>';
                echo '<div class="date">'. $newss['date'] .'</div>';
            echo '</div>';
        }
        ?>
      </section>
      <footer><?php require 'code-html/footer.php' ?></footer>
    </body>
</html>
