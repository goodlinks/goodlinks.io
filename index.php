<?php

require_once('vendor/michelf/php-markdown/Michelf/MarkdownExtra.inc.php');
use \Michelf\MarkdownExtra;

?>

<html>
    <head>
        <style type="text/css">
            body {
                padding: 1em;
                font-family: courier;
                font-size: 1.3em;
                background-color: #F5F5F5;
            }

            .content {
                background-color: white;
                padding: 1em;
                max-width: 26em;
                margin-left: auto;
                margin-right: auto;
            }

            .content p {
                line-height: 1.4em;
                margin: 0;
                padding: 0;
                margin-bottom: 0.75em;
            }

            .content p:nth-last-child(1) {
                margin-bottom: 0;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>goodlinks.io | eCommerce content outreach that doesn't suck</title>
    </head>
<body>
    <div class="content">
        <?php
        echo MarkdownExtra::defaultTransform(file_get_contents('index.md'));
        ?>
    </div>
</body>
</html>

