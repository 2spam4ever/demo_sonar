<?php

echo $_GET['xss'];

$wpdb = new wpdb();

$wpdb->query('SELECT * from wp_users where id=' . $_GET['id']);
$wpdb->query($wpdb->prepare('SELECT * from wp_users where id=' . $_GET['id']));
