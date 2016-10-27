<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add something</title>
</head>
<body>
<?php
 echo $name; echo $sex; ?>
    <?php echo ($me['name']); ?>
    <?php echo ($me["name"]); ?>
    <?php echo ($me["age"]); ?>
    <?php echo ((isset($me["sex"]) && ($me["sex"] !== ""))?($me["sex"]):'man'); ?>

    <?php echo (substr(md5($me['name']),0,5)); ?>

    add hello world to page!!!
</body>
</html>