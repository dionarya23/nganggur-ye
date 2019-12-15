<?php
use PirloDB\Database;

require_once 'vendor/autoload.php';

$connection = Database::getInstance('localhost', 'root', '', 'pencari_kerja');
