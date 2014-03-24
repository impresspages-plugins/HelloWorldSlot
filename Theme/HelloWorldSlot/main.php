<?php echo ipDoctypeDeclaration(); ?>
<html<?php echo ipHtmlAttributes(); ?>>
<head>
    <?php
    echo ipHead();
    ?>
</head>
<body>
    <div>
        <?php echo ipSlot('myFunction'); ?>
    </div>
    <?php
    echo ipJs();
    ?>
</body>
</html>
