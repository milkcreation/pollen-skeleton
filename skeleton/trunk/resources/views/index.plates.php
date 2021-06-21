<?php
/**
 * @var Pollen\View\ViewLoaderInterface $this
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $this->get('title'); ?></title>
</head>
<body>
<h1>Welcome <?php echo $this->get('name'); ?> From Plates</h1>
</body>
</html>
