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

            .nav-wrapper {
                max-width: 35em;
                margin-left: auto;
                margin-right: auto;
                padding: 1em;
                text-align: center;
                border-left: dotted 1px #2CDE8E;
                border-right: dotted 1px #2CDE8E;
                border-top: solid 1px white;
                padding-left: 14px;
                background-color: #2CDE8E;
                text-align: center;
            }

            .nav-wrapper ul {
                display: inline-block;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }

            .nav-wrapper ul li {
                list-style-type: none;
                float: left;
                border-right: dotted 1px #2CDE8E;
                padding-right: 1em;
                color: white;
                font-size: 21px;
            }

            .nav-wrapper ul li:nth-last-child(1) {
                padding-right: 0;
            }

            .content {
                background-color: white;
                padding: 1em;
                max-width: 35em;
                margin-left: auto;
                margin-right: auto;
                border: dotted 1px #2CDE8E;
                padding-left: 14px;
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
                border-top: 1px solid #E8E8E8;
                margin: 2em 3em;
                padding: 0;
            }

            .content p:nth-last-child(1) {
                margin-bottom: 0;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="/image/goodlinks-favicon.png">
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-42510916-4', 'auto');
          ga('send', 'pageview');

        </script>
        <script>!function(e,o,n){window.HSCW=o,window.HS=n,n.beacon=n.beacon||{};var t=n.beacon;t.userConfig={},t.readyQueue=[],t.config=function(e){this.userConfig=e},t.ready=function(e){this.readyQueue.push(e)},o.config={docs:{enabled:!0,baseUrl:"//goodlinks.helpscoutdocs.com/"},contact:{enabled:!0,formId:"3553abc0-c1c4-11e5-9e75-0a7d6919297d"}};var r=e.getElementsByTagName("script")[0],c=e.createElement("script");c.type="text/javascript",c.async=!0,c.src="https://djtflbt20bdde.cloudfront.net/",r.parentNode.insertBefore(c,r)}(document,window.HSCW||{},window.HS||{});</script>
        <script>
            HS.beacon.config({
                topArticles: true,
                color: '#2CDE8E'
            });
        </script>
        <title>GoodLinks - The Content Outreach Service</title>
    </head>
<body>
    <div class="logo-wrapper">
        <div class="logo">
            <img src="/image/goodlinks-logo.png">
        </div>
    </div>
    <div class="nav-wrapper">
        <ul>
            <li><a href="http://blog.goodlinks.io">Blog</a></li>
            <li><a href="http://podcast.goodlinks.io">Podcast</a></li>
            <li><a href="http://docs.goodlinks.io">Docs</a></li>
        </ul>
    </div>
    <div class="content">
        <?php
        echo MarkdownExtra::defaultTransform(file_get_contents('index.md'));
        ?>
    </div>
</body>
</html>

