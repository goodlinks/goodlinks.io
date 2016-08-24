<?php

$name = isset($_POST['name']) ? $_POST['name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$url = isset($_POST['url']) ? $_POST['url'] : null;

mail('kalen@goodlinks.io', "Lead: $url", "Name: $name\r\nEmail: $email\r\nURL: $url", "From:$email");