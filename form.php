<?php

$name = isset($_GET['name']) ? $_GET['name'] : null;
$email = isset($_GET['email']) ? $_GET['email'] : null;
$url = isset($_GET['url']) ? $_GET['url'] : null;

mail('kalen@goodlinks.io', "Lead: $url", "Name: $name\r\nEmail: $email\r\nURL: $url", "From:$email");