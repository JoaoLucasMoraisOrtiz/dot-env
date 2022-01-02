<?php

use the_namespace_you_have_set_for_\Environment;

require __DIR__ . "/vendor/autoload.php";

the_namespace_you_have_set_for_\Environment::load('the_patch_for_.env_file');

//adiciona à $env todas as variáveis de ambiente
$env = getenv();

echo '<pre>';
print_r($env);
echo '</pre>';