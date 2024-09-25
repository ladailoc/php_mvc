<html>
<head>
    <title><?php  echo (!empty($page_title))? $page_title : "Website" ?></title>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/assets/clients/css/style.css">
</head>
<body>
    <?php
        $this->render('blocks/header');
        $this->render($content, $sub_content);   
        $this->render('blocks/footer');
    ?>
    <script type="text/script" src="<?php echo _WEB_ROOT_ ?>/public/assets/clients/js/script.js"></script>

</body>
</html>