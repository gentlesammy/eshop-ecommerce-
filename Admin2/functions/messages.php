<?php

    if(isset($_SESSION['success']))
    {
     ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong><?php echo $_SESSION['success']; ?></strong>
            </div>

      <?php
        unset($_SESSION['success']);

    }

?>



<?php

    if(isset($_SESSION['failure']))

    {
     ?>

            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong><?php echo $_SESSION['failure']; ?></strong>
            </div>

      <?php
        unset($_SESSION['failure']);

    }

?>
