<?php

require_once('vendor/michelf/php-markdown/Michelf/MarkdownExtra.inc.php');
use \Michelf\MarkdownExtra;

?>

<html>
    <head>
        <style type="text/css">
            body {
                padding: 1em;
                background-color: #FDFDFD;
            }

            .logo-wrapper {
                max-width: 35em;
                margin-left: auto;
                margin-right: auto;
                background-color: #2CDE8E;
                padding: 1em;
                text-align: center;
            }

            .logo-wrapper img {
                width: 215px;
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
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-42510916-4', 'auto');
          ga('send', 'pageview');

        </script>
        <title>GoodLinks | eCommerce Content Outreach that Matters</title>
    </head>
<body>
    <div class="logo-wrapper">
        <div class="logo">
            <img src="/image/goodlinks-logo.png">
        </div>
    </div>
    <div class="content">
        <?php
        echo MarkdownExtra::defaultTransform(file_get_contents('index.md'));
        ?>
    </div>
</body>
</html>

