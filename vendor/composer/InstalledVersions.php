<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-master',
    'version' => 'dev-master',
    'aliases' => 
    array (
    ),
    'reference' => '3f88f16e6166be3e0a09cddd8a77c0629f205878',
    'name' => 'laravel/laravel',
  ),
  'versions' => 
  array (
    'barryvdh/laravel-cors' => 
    array (
      'pretty_version' => 'v0.9.2',
      'version' => '0.9.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '0b758188dadda20f4a17f1f4fe03c22ea92ce8e4',
    ),
    'barryvdh/laravel-ide-helper' => 
    array (
      'pretty_version' => 'v2.3.2',
      'version' => '2.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e82de98cef0d6597b1b686be0b5813a3a4bb53c5',
    ),
    'barryvdh/reflection-docblock' => 
    array (
      'pretty_version' => 'v2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '3dcbd98b5d9384a5357266efba8fd29884458e5c',
    ),
    'cordoval/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'davedevelopment/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'dnoegel/php-xdg-base-dir' => 
    array (
      'pretty_version' => '0.1',
      'version' => '0.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '265b8593498b997dc2d31e75b89f053b5cc9621a',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => 'v1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '90b2128806bfde671b6952ab8bea493942c1fdae',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.0.5',
      'version' => '1.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e884e78f9f0eb1329e445619e04456e64d8051d',
    ),
    'erusev/parsedown' => 
    array (
      'pretty_version' => '1.6.2',
      'version' => '1.6.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1bf24f7334fe16c88bf9d467863309ceaf285b01',
    ),
    'fzaninotto/faker' => 
    array (
      'pretty_version' => 'v1.6.0',
      'version' => '1.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '44f9a286a04b80c76a4e5fb7aad8bb539b920123',
    ),
    'hamcrest/hamcrest-php' => 
    array (
      'pretty_version' => 'v1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b37020aa976fa52d3de9aa904aa2522dc518f79c',
    ),
    'illuminate/auth' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/broadcasting' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/bus' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/cache' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/config' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/console' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/container' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/cookie' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/database' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/encryption' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/events' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/exception' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/filesystem' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/hashing' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/http' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/log' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/mail' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/notifications' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/pagination' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/pipeline' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/queue' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/redis' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/routing' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/session' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/support' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/translation' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/validation' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'illuminate/view' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'jakub-onderka/php-console-color' => 
    array (
      'pretty_version' => '0.1',
      'version' => '0.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e0b393dacf7703fc36a4efc3df1435485197e6c1',
    ),
    'jakub-onderka/php-console-highlighter' => 
    array (
      'pretty_version' => 'v0.3.2',
      'version' => '0.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '7daa75df45242c8d5b75a22c00a201e7954e4fb5',
    ),
    'kodova/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'laravel/framework' => 
    array (
      'pretty_version' => 'v5.4.23',
      'version' => '5.4.23.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad82327705658dbf5f0ce72805caa950dfbe150d',
    ),
    'laravel/laravel' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
      ),
      'reference' => '3f88f16e6166be3e0a09cddd8a77c0629f205878',
    ),
    'laravel/tinker' => 
    array (
      'pretty_version' => 'v1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3d5b675b55b24ccbf86395964042dbe061d5a965',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.0.40',
      'version' => '1.0.40.0',
      'aliases' => 
      array (
      ),
      'reference' => '3828f0b24e2c1918bb362d57a53205d6dc8fde61',
    ),
    'mockery/mockery' => 
    array (
      'pretty_version' => '0.9.9',
      'version' => '0.9.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '6fdb61243844dc924071d3404bb23994ea0b6856',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1e044bc4b34e91743943479f1be7a1d5eb93add0',
    ),
    'mtdowling/cron-expression' => 
    array (
      'pretty_version' => 'v1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9504fa9ea681b586028adaaa0877db4aecf32bad',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.6.1',
      'version' => '1.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e6e04167378abf1ddb4d3522d8755c5fd90d102',
    ),
    'namshi/jose' => 
    array (
      'pretty_version' => '5.0.2',
      'version' => '5.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '8c7eba486f74c014ea1d8faedafe5109a31ea95b',
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '7cdf42c0b1cc763ab7e4c33c47a24e27c66bfccc',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v3.0.5',
      'version' => '3.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '2b9e2f71b722f7c53918ab0c25f7646c2013f17d',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '634bae8e911eefa89c1abfbf1b66da679ac8f54d',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '1.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '144c307535e82c8fdcaacbcfc1d6d8eeb896687c',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8331b5efe816ae05461b7ca1e721c01b46bafb3e',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '0.2.1',
      'version' => '0.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e224fb2ea2fba6d3ad6fdaef91cd09a172155ccb',
    ),
    'phpseclib/phpseclib' => 
    array (
      'pretty_version' => '0.3.10',
      'version' => '0.3.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd15bba1edcc7c89e09cc74c5d961317a8b947bf4',
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => 'v1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '93d39f1f7f9326d746203c7c056f300f7f126073',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '4.0.8',
      'version' => '4.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ef7b2f56815df854e66ceaee8ebe9393ae36a40d',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '1.4.2',
      'version' => '1.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '3cc8f69b3028d0f96a9078e6295d86e9bf019be5',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '1.0.9',
      'version' => '1.0.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '3dcf38ca72b158baf0bc245e9184d3fdffa9c46f',
    ),
    'phpunit/php-token-stream' => 
    array (
      'pretty_version' => '1.4.11',
      'version' => '1.4.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e03f8f67534427a787e21a385a67ec3ca6978ea7',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '5.7.19',
      'version' => '5.7.19.0',
      'aliases' => 
      array (
      ),
      'reference' => '69c4f49ff376af2692bad9cebd883d17ebaa98a1',
    ),
    'phpunit/phpunit-mock-objects' => 
    array (
      'pretty_version' => '3.4.3',
      'version' => '3.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '3ab72b65b39b491e0c011e2e09bb2206c2aa8e24',
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4ebe3a8bf773a19edfe0a84b6585ba3d401b724d',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0',
      ),
    ),
    'psy/psysh' => 
    array (
      'pretty_version' => 'v0.8.3',
      'version' => '0.8.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '1dd4bbbc64d71e7ec075ffe82b42d9e096dc8d5e',
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '3.6.1',
      'version' => '3.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4ae32dd9ab8860a4bbd750ad269cba7f06f7934e',
    ),
    'rhumsaa/uuid' => 
    array (
      'replaced' => 
      array (
        0 => '3.6.1',
      ),
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '2b7424b55f5047b47ac6e5ccb20b2aea4011d9be',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '13edfd8706462032c2f52b4b862974dd46b71c9e',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5795ffe5dc5b02460c3e34222fee8cbe245d8fac',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ce474bdd1a34744d7ac5d6aad3a46d48d9bac4c4',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bc37d50fea7d017d3d340f230811c9f1d7280af4',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1311872ac850040a79c3c058bea3e22d0f09cbb7',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2c3ba150cbec723aa057506e73a8d33bdb286c9a',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ce990bb21759f94aeafd30209e8cfcdfa8bc3f52',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '99732be0ddb3361e16ad77b68ba41efc8e979019',
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'v5.4.8',
      'version' => '5.4.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '9a06dc570a0367850280eefd3f1dc2da45aef517',
    ),
    'symfony/class-loader' => 
    array (
      'pretty_version' => 'v3.2.8',
      'version' => '3.2.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fc4c04bfd17130a9dccfded9578353f311967da7',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v3.2.8',
      'version' => '3.2.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a7a17e0c6c3c4d70a211f80782e4b90ddadeaa38',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v3.2.8',
      'version' => '3.2.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '02983c144038e697c959e6b06ef6666de759ccbc',
    ),
    'symfony/debug' => 
    array (
      'pretty_version' => 'v3.2.8',
      'version' => '3.2.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fd6eeee656a5a7b384d56f1072243fe1c0e81686',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v3.2.8',
      'version' => '3.2.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b8a401f733b43251e1d088c589368b2a94155e40',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v3.2.8',
      'version' => '3.2.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '9cf076f8f492f4b1ffac40aae9c2d287b4ca6930',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v3.2.8',
      'version' => '3.2.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '9de6add7f731e5af7f5b2e9c0da365e43383ebef',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v3.2.8',
      'version' => '3.2.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '46e8b209abab55c072c47d72d5cd1d62c0585e05',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e79d363049d1c2128f133a2667e4f4190904f7f4',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v3.2.8',
      'version' => '3.2.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '999c2cf5061e627e6cd551dc9ebf90dd1d11d9f0',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v3.2.8',
      'version' => '3.2.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '5029745d6d463585e8b487dbc83d6333f408853a',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v3.2.8',
      'version' => '3.2.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f4a04d2df710f81515df576b2de06bdeee518b83',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v3.2.8',
      'version' => '3.2.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fa47963ac7979ddbd42b2d646d1b056bddbf7bb8',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v3.2.8',
      'version' => '3.2.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'acec26fcf7f3031e094e910b94b002fa53d4e4d6',
    ),
    'tightenco/collect' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.4.23',
      ),
    ),
    'tijsverkoyen/css-to-inline-styles' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ab03919dfd85a74ae0372f8baf9f3c7d5c03b04b',
    ),
    'tymon/jwt-auth' => 
    array (
      'pretty_version' => '0.5.11',
      'version' => '0.5.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '807de0561c40c9a924783d2e30036b635cebf03c',
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3cc116adbe4b11be5ec557bf1d24dc5e3a21d18c',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2db61e59ff05fe5126d152bd0655c9ea113e550f',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {

foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
