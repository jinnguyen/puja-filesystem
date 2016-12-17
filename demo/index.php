<?php
include '../vendor/autoload.php';
use Puja\FileSystem\File;

$file = new File('../src/File.php');
var_dump($file->isUploadedFile());