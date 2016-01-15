<?php

require_once('vendor/michelf/php-markdown/Michelf/MarkdownExtra.inc.php');
use \Michelf\MarkdownExtra;

?>

<html>
    <head>
        <style type="text/css">
            body {
                padding: 1em;
                background-color: #F5F5F5;
            }

            .content {
                background-color: white;
                padding: 1em;
                max-width: 35em;
                margin-left: auto;
                margin-right: auto;
            }

            .content p, .content li {
                font-family: times;
                color: #7A7A7A;
                font-size: 21px;
                line-height: 30px;
                margin: 0;
                padding: 0;
                margin-bottom: 17px;
            }

            a {
                color: inherit;
            }

            a:hover {
                color: blue;
            }

            .content hr {
                display: block;
                height: 1px;
                border: 0;
                border-top: 1px solid #ccc;
                margin: 2em 5em;
                padding: 0;
            }

            .content p:nth-last-child(1) {
                margin-bottom: 0;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GoodLinks | eCommerce Content Outreach that Matters</title>
    </head>
<body>
    <div class="content">
        <?php
        echo MarkdownExtra::defaultTransform(file_get_contents('index.md'));
        ?>
    </div>
</body>
</html>

