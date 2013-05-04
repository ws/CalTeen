#!/usr/local/bin/php
<?php

/* SUPER DUPER ALPHA */
/* Run it via CLI to start your app/fill out settings. */

$composer_file = file_get_contents('composer.json');
$composer = json_decode($composer_file);

$cofig_file = file_get_contents('config.json');
$config = json_decode($config_file);

//copy("config.example.json", "config.json");

print "CalTeen v".$composer->version."\n\n";