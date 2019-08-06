<?php
    require_once 'includes/config.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <h1>
            <?php echo $APP_CONFIG['global']['name']; ?>
        </h1>
        
        <pre>
            <?php
                require_once 'includes/conn.inc.php';
            ?>
        </pre>
    </body>
</html>