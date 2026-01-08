<?php
// includes/logger.php

function write_log(string $action, string $username): void {
    $time = date('Y-m-d H:i:s');
    $line = "[$time] $action: $username" . PHP_EOL;

    file_put_contents(
        __DIR__ . '/../data/log.txt',
        $line,
        FILE_APPEND
    );
}
