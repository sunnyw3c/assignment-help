<?php
$output = shell_exec('php artisan migrate --force 2>&1');
echo $output;
