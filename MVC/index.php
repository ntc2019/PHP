<?php 
    require_once('./config/config.php');
    require_once('./core/app.php');
    require_once('./config/database.php');
    require_once('./models/BaseModel.php');
?>
<?php
    $app = new App;
    $app->show();
?>