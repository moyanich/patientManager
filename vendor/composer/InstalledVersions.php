<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;

/**
 * This class is copied in every Composer installed project and available to all
 *
 * See also https://getcomposer.org/doc/07-runtime.md#installed-versions
 *
 * To require it's presence, you can require `composer-runtime-api ^2.0`
 */
class InstalledVersions
{
<<<<<<< Updated upstream
    private static $installed;
    private static $canGetVendors;
    private static $installedByVendor = array();
=======
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-main',
    'version' => 'dev-main',
    'aliases' => 
    array (
    ),
    'reference' => 'e36ac6644af0abeee4d98d0c2fdc4169e7485261',
    'name' => 'laravel/laravel',
  ),
  'versions' => 
  array (
    'asm89/stack-cors' => 
    array (
      'pretty_version' => 'v2.1.1',
      'version' => '2.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '73e5b88775c64ccc0b84fb60836b30dc9d92ac4a',
    ),
    'barryvdh/laravel-debugbar' => 
    array (
      'pretty_version' => 'v3.7.0',
      'version' => '3.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3372ed65e6d2039d663ed19aa699956f9d346271',
    ),
    'brick/math' => 
    array (
      'pretty_version' => '0.11.0',
      'version' => '0.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0ad82ce168c82ba30d1c01ec86116ab52f589478',
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
    'dflydev/dot-access-data' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f41715465d65213d644d3141a6a93081be5d3549',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '2.0.8',
      'version' => '2.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f9301a5b2fb1216b2b08f02ba04dc45423db6bff',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6222283fa3f4ac679f8b9ced9a4e23f163e80d0',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c268e882d4dbdd85e36e4ad69e02dc284f89d229',
    ),
    'dragonmantank/cron-expression' => 
    array (
      'pretty_version' => 'v3.3.2',
      'version' => '3.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '782ca5968ab8b954773518e9e49a6f892a34b2a8',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '2.1.25',
      'version' => '2.1.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '0dbf5d78455d4d6a41d186da50adc1122ec066f4',
    ),
    'facade/flare-client-php' => 
    array (
      'pretty_version' => '1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '213fa2c69e120bca4c51ba3e82ed1834ef3f41b8',
    ),
    'facade/ignition' => 
    array (
      'pretty_version' => '2.17.7',
      'version' => '2.17.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b4f5955825bb4b74cba0f94001761c46335c33e9',
    ),
    'facade/ignition-contracts' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
    ),
    'fakerphp/faker' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e3daa170d00fde61ea7719ef47bb09bb8f1d9b01',
    ),
    'filp/whoops' => 
    array (
      'pretty_version' => '2.15.2',
      'version' => '2.15.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aac9304c5ed61bf7b1b7a6064bf9806ab842ce73',
    ),
    'fruitcake/laravel-cors' => 
    array (
      'pretty_version' => 'v2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '783a74f5e3431d7b9805be8afb60fd0a8f743534',
    ),
    'graham-campbell/result-type' => 
    array (
      'pretty_version' => 'v1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '672eff8cf1d6fe1ef09ca0f89c4b287d6a3eb831',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '7.7.0',
      'version' => '7.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fb7566caccf22d74d1ab270de3551f72a58399f5',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3a494dc7dc1d7d12e511890177ae2d0e6c107da6',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b635f279edd83fc275f822a1188157ffea568ff6',
    ),
    'hamcrest/hamcrest-php' => 
    array (
      'pretty_version' => 'v2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
    ),
    'illuminate/auth' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/broadcasting' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/bus' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/cache' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/collections' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/config' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/console' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/container' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/cookie' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/database' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/encryption' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/events' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/filesystem' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/hashing' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/http' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/log' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/macroable' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/mail' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/notifications' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/pagination' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/pipeline' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/queue' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/redis' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/routing' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/session' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/support' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/testing' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/translation' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/validation' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'illuminate/view' => 
    array (
      'replaced' => 
      array (
        0 => 'v8.83.27',
      ),
    ),
    'kodova/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'laravel/breeze' => 
    array (
      'pretty_version' => 'v1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e98e855ab4bde5bf0083c4a4d73c0f5b474241ae',
    ),
    'laravel/framework' => 
    array (
      'pretty_version' => 'v8.83.27',
      'version' => '8.83.27.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e1afe088b4ca613fb96dc57e6d8dbcb8cc2c6b49',
    ),
    'laravel/laravel' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
      ),
      'reference' => 'e36ac6644af0abeee4d98d0c2fdc4169e7485261',
    ),
    'laravel/sail' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a2e046f748e87d3ef8b2b381e0e5c5a11f34e46b',
    ),
    'laravel/sanctum' => 
    array (
      'pretty_version' => 'v2.15.1',
      'version' => '2.15.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '31fbe6f85aee080c4dc2f9b03dc6dd5d0ee72473',
    ),
    'laravel/serializable-closure' => 
    array (
      'pretty_version' => 'v1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f23fe9d4e95255dacee1bf3525e0810d1a1b0f37',
    ),
    'laravel/telescope' => 
    array (
      'pretty_version' => 'v4.15.0',
      'version' => '4.15.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '572a19b4c9b09295848de9a2352737a756a0fb05',
    ),
    'laravel/tinker' => 
    array (
      'pretty_version' => 'v2.8.1',
      'version' => '2.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '04a2d3bd0d650c0764f70bf49d1ee39393e4eb10',
    ),
    'laravel/ui' => 
    array (
      'pretty_version' => 'v3.4.6',
      'version' => '3.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '65ec5c03f7fee2c8ecae785795b829a15be48c2c',
    ),
    'league/commonmark' => 
    array (
      'pretty_version' => '2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd44a24690f16b8c1808bf13b1bd54ae4c63ea048',
    ),
    'league/config' => 
    array (
      'pretty_version' => 'v1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.1.10',
      'version' => '1.1.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '3239285c825c152bcc315fe0e87d6b55f5972ed1',
    ),
    'league/mime-type-detection' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
    ),
    'maximebf/debugbar' => 
    array (
      'pretty_version' => 'v1.18.2',
      'version' => '1.18.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '17dcf3f6ed112bb85a37cf13538fd8de49f5c274',
    ),
    'mockery/mockery' => 
    array (
      'pretty_version' => '1.6.2',
      'version' => '1.6.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '13a7fa2642c76c58fa2806ef7f565344c817a191',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '2.9.1',
      'version' => '2.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f259e2b15fb95494c83f52d3caad003bbf5ffaa1',
    ),
    'mtdowling/cron-expression' => 
    array (
      'replaced' => 
      array (
        0 => '^1.0',
      ),
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.11.1',
      'version' => '1.11.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '2.68.1',
      'version' => '2.68.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4f991ed2a403c85efbc4f23eb4030063fdbe01da',
    ),
    'nette/schema' => 
    array (
      'pretty_version' => 'v1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'abbdbb70e0245d5f3bf77874cea1dfb0c930d06f',
    ),
    'nette/utils' => 
    array (
      'pretty_version' => 'v4.0.0',
      'version' => '4.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cacdbf5a91a657ede665c541eda28941d4b09c1e',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.16.0',
      'version' => '4.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '19526a33fb561ef417e822e85f08a00db4059c17',
    ),
    'nunomaduro/collision' => 
    array (
      'pretty_version' => 'v5.11.0',
      'version' => '5.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8b610eef8582ccdc05d8f2ab23305e2d37049461',
    ),
    'opis/closure' => 
    array (
      'pretty_version' => '3.6.3',
      'version' => '3.6.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '3d81e4309d2a927abbe66df935f4bb60082805ad',
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '97803eca37d319dfa7826cc2437fc020857acb53',
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.9.1',
      'version' => '1.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dd3a383e599f49777d8b628dadbb90cae435b87e',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '9.2.26',
      'version' => '9.2.26.0',
      'aliases' => 
      array (
      ),
      'reference' => '443bc6912c9bd5b409254a40f4b0f4ced7c80ea1',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '3.0.6',
      'version' => '3.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
    ),
    'phpunit/php-invoker' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '5.0.3',
      'version' => '5.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '9.6.9',
      'version' => '9.6.9.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a9aceaf20a682aeacf28d582654a1670d8826778',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '513e0666f7216c7459170d56df27dfcefe1689ea',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-client' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '0955afe48220520692d2d09f7ab7e0f93ffd6a31',
    ),
    'psr/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e616d01114759c4c489f93b099585439f795fe35',
    ),
    'psr/http-factory-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '2.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ef29f6d262798707a9edd554e2b82517ef3a9376',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0 || 2.0.0 || 3.0.0',
        1 => '1.0|2.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ),
    'psr/simple-cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psy/psysh' => 
    array (
      'pretty_version' => 'v0.11.18',
      'version' => '0.11.18.0',
      'aliases' => 
      array (
      ),
      'reference' => '4f00ee9e236fa6a48f4560d1300b9c961a70a7ec',
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'ramsey/collection' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '4.7.4',
      'version' => '4.7.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '60a4c63ab724854332900504274f6150ff26d286',
    ),
    'rhumsaa/uuid' => 
    array (
      'replaced' => 
      array (
        0 => '4.7.4',
      ),
    ),
    'sebastian/cli-parser' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '442e7c7e687e42adc03470c7b668bc4b2402c0b2',
    ),
    'sebastian/code-unit' => 
    array (
      'pretty_version' => '1.0.8',
      'version' => '1.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '4.0.8',
      'version' => '4.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fa0f136dd2334583309d32b62544682ee972b51a',
    ),
    'sebastian/complexity' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '739b35e53379900cc9ac327b2147867b8b6efd88',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '4.0.5',
      'version' => '4.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '74be17022044ebaaecfdf0c5cd504fc9cd5a7131',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '5.1.5',
      'version' => '5.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '830c43a844f1f8d5b7a1f6d6076b784454d8b7ed',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '4.0.5',
      'version' => '4.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac230ed27f0f98f597c8a2b6eb7ac563af5e5b9d',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '5.0.5',
      'version' => '5.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '0ca8db5a5fc9c8646244e629625ac486fa286bf2',
    ),
    'sebastian/lines-of-code' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1c2e997aa3146983ed888ad08b15470a2e22ecc',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '4.0.5',
      'version' => '4.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e75bd0f07204fec2a0af9b0f3cfe97d05f92efc1',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
    ),
    'sebastian/type' => 
    array (
      'pretty_version' => '3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '75e2c2a32f5e0b3aef905b9ed0b179b953b3d7c7',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
    ),
    'spatie/laravel-permission' => 
    array (
      'pretty_version' => '5.10.2',
      'version' => '5.10.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '671e46e079cbd4990a98427daaa09f4977b57ca9',
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'v6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8a5d5072dca8f48460fce2f4131fcc495eec654c',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v5.4.24',
      'version' => '5.4.24.0',
      'aliases' => 
      array (
      ),
      'reference' => '560fc3ed7a43e6d30ea94a07d77f9a60b8ed0fb8',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '88453e64cd86c5b60e8d2fb2c6f953bbc353ffbf',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v3.3.0',
      'version' => '3.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7c3aff79d10325257a001fcf92d991f24fc967cf',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v5.4.24',
      'version' => '5.4.24.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1b9be3b8a6f60f720bec28c4ffb6fb5b00a8946',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3af8ac1a3f98f6dbc55e10ae59c9e44bfc38dfaa',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v3.3.0',
      'version' => '3.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a76aed96a42d2b521153fb382d418e30d18b59df',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0|3.0',
      ),
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v5.4.21',
      'version' => '5.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '078e9a5e1871fcfe6a5ce421b539344c21afef19',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v5.4.25',
      'version' => '5.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f66be2706075c5f6325d2fe2b743a57fb5d23f6b',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v5.4.25',
      'version' => '5.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6c92fe64bbdad7616cb90663c24f6350f3ca464',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v5.4.23',
      'version' => '5.4.23.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ae0a1032a450a3abf305ee44fc55ed423fbf16e3',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5bbc823adecdae860bb64756d639ecfec17b050a',
    ),
    'symfony/polyfill-iconv' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '927013f3aac555983a5059aada98e1907d842695',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '511a08c03c1960e08a883f4cffcacd219b758354',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '639084e360537a19f9ee352433b84ce831f3d2da',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '19bd1e4fcd5b91116f14d8533c57831ed00571b6',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '869329b1e9894268a8a61dabb69153029b7a8c97',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9e8ecb5f92152187c4799efd3c96b78ccab18ff9',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v5.4.24',
      'version' => '5.4.24.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e3c46cc5689c8782944274bb30702106ecbe3b64',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v5.4.25',
      'version' => '5.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '56bfc1394f7011303eb2e22724f9b422d3f14649',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f2e190ee75ff0f5eced645ec0be5c66fac81f51f',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f72b2cba8f79dd9d536f534f76874b58ad37876f',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v3.3.0',
      'version' => '3.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '02c24deb352fb0d79db5486c0c79905a85e37e86',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.3|3.0',
      ),
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v5.4.25',
      'version' => '5.4.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '82269f73c0f0f9859ab9b6900eebacbe54954ede',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a9a8337aa641ef2aa39c3e028f9107ec391e5927',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '34a41e998c2183e22995f158c581e7b5e755ab9e',
    ),
    'tijsverkoyen/css-to-inline-styles' => 
    array (
      'pretty_version' => '2.2.6',
      'version' => '2.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c42125b83a4fa63b187fdf29f9c93cb7733da30c',
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v5.5.0',
      'version' => '5.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1a7ea2afc49c3ee6d87061f5a233e3a035d0eae7',
    ),
    'voku/portable-ascii' => 
    array (
      'pretty_version' => '1.6.1',
      'version' => '1.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '87337c91b9dfacee02452244ee14ab3c43bc485a',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
    ),
    'yajra/laravel-datatables-oracle' => 
    array (
      'pretty_version' => 'v9.21.2',
      'version' => '9.21.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a7fd01f06282923e9c63fa27fe6b391e21dc321a',
    ),
  ),
);
>>>>>>> Stashed changes

    /**
     * Returns a list of all package names which are present, either by being installed, replaced or provided
     *
     * @return string[]
     * @psalm-return list<string>
     */
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

    /**
     * Returns a list of all package names with a specific type e.g. 'library'
     *
     * @param  string   $type
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackagesByType($type)
    {
        $packagesByType = array();

        foreach (self::getInstalled() as $installed) {
            foreach ($installed['versions'] as $name => $package) {
                if (isset($package['type']) && $package['type'] === $type) {
                    $packagesByType[] = $name;
                }
            }
        }

        return $packagesByType;
    }

    /**
     * Checks whether the given package is installed
     *
     * This also returns true if the package name is provided or replaced by another package
     *
     * @param  string $packageName
     * @param  bool   $includeDevRequirements
     * @return bool
     */
    public static function isInstalled($packageName, $includeDevRequirements = true)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return $includeDevRequirements || empty($installed['versions'][$packageName]['dev_requirement']);
            }
        }

        return false;
    }

    /**
     * Checks whether the given package satisfies a version constraint
     *
     * e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
     *
     *   Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
     *
     * @param  VersionParser $parser      Install composer/semver to have access to this class and functionality
     * @param  string        $packageName
     * @param  string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
     * @return bool
     */
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));

        return $provided->matches($constraint);
    }

    /**
     * Returns a version constraint representing all the range(s) which are installed for a given package
     *
     * It is easier to use this via isInstalled() with the $constraint argument if you need to check
     * whether a given version of a package is installed, and not just whether it exists
     *
     * @param  string $packageName
     * @return string Version constraint usable with composer/semver
     */
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

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
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

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
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

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference
     */
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

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as install path. Packages of type metapackages also have a null install path.
     */
    public static function getInstallPath($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            return isset($installed['versions'][$packageName]['install_path']) ? $installed['versions'][$packageName]['install_path'] : null;
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @return array
     * @psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string}
     */
    public static function getRootPackage()
    {
        $installed = self::getInstalled();

        return $installed[0]['root'];
    }

    /**
     * Returns the raw installed.php data for custom implementations
     *
     * @deprecated Use getAllRawData() instead which returns all datasets for all autoloaders present in the process. getRawData only returns the first dataset loaded, which may not be what you expect.
     * @return array[]
     * @psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string}, versions: array<string, array{dev_requirement: bool, pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[], install_path?: string}>}
     */
    public static function getRawData()
    {
        @trigger_error('getRawData only returns the first dataset loaded, which may not be what you expect. Use getAllRawData() instead which returns all datasets for all autoloaders present in the process.', E_USER_DEPRECATED);

        if (null === self::$installed) {
            // only require the installed.php file if this file is loaded from its dumped location,
            // and not from its source location in the composer/composer package, see https://github.com/composer/composer/issues/9937
            if (substr(__DIR__, -8, 1) !== 'C') {
                self::$installed = include __DIR__ . '/installed.php';
            } else {
                self::$installed = array();
            }
        }

        return self::$installed;
    }

    /**
     * Returns the raw data of all installed.php which are currently loaded for custom implementations
     *
     * @return array[]
     * @psalm-return list<array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string}, versions: array<string, array{dev_requirement: bool, pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[], install_path?: string}>}>
     */
    public static function getAllRawData()
    {
        return self::getInstalled();
    }

    /**
     * Lets you reload the static array from another file
     *
     * This is only useful for complex integrations in which a project needs to use
     * this class but then also needs to execute another project's autoloader in process,
     * and wants to ensure both projects have access to their version of installed.php.
     *
     * A typical case would be PHPUnit, where it would need to make sure it reads all
     * the data it needs from this class, then call reload() with
     * `require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
     * the project in which it runs can then also use this class safely, without
     * interference between PHPUnit's dependencies and the project's dependencies.
     *
     * @param  array[] $data A vendor/composer/installed.php data set
     * @return void
     *
     * @psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string}, versions: array<string, array{dev_requirement: bool, pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[], install_path?: string}>} $data
     */
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }

    /**
     * @return array[]
     * @psalm-return list<array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[], dev: bool, install_path: string}, versions: array<string, array{dev_requirement: bool, pretty_version?: string, version?: string, aliases?: string[], reference?: string, replaced?: string[], provided?: string[], install_path?: string}>}>
     */
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
                    if (null === self::$installed && strtr($vendorDir.'/composer', '\\', '/') === strtr(__DIR__, '\\', '/')) {
                        self::$installed = $installed[count($installed) - 1];
                    }
                }
            }
        }

        if (null === self::$installed) {
            // only require the installed.php file if this file is loaded from its dumped location,
            // and not from its source location in the composer/composer package, see https://github.com/composer/composer/issues/9937
            if (substr(__DIR__, -8, 1) !== 'C') {
                self::$installed = require __DIR__ . '/installed.php';
            } else {
                self::$installed = array();
            }
        }
        $installed[] = self::$installed;

        return $installed;
    }
}
