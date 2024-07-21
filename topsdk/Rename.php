<?php

function scanSubDir($dir) {
    $list = scandir($dir);
    foreach ($list as $sub) {
        if ($sub === '.' || $sub === '..') {
            continue;
        }

        $subDir = $dir . DIRECTORY_SEPARATOR . $sub;
        if (is_dir($subDir)) {
            scanSubDir($subDir);
        }
        convertFirstUpper($dir . DIRECTORY_SEPARATOR, $sub);
    }
}

function convertFirstUpper($dir, $sub) {

    $new = ucfirst($sub);
    if ($new === $sub) {
        return;
    }
    $tmpName = $dir . uniqid('tmp_');
    rename($dir . $sub, $tmpName);
    rename($tmpName, $dir . $new);
}

scanSubDir('./src');