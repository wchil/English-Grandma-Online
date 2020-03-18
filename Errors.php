<?php

 if (count($_SESSION["error"])>0): ?>
  <div class="error">
    <?php foreach ($_SESSION["error"] as $errors): ?>
        <p> <?php echo $errors; ?> </p>
      <?php endforeach ?>
  </div>

<?php endif; ?>
