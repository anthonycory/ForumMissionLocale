<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/cache' => 'v1.8.0@d768d58baee9a4862ca783840eca1b9add7a7f57',
  'doctrine/collections' => 'v1.6.2@c5e0bc17b1620e97c968ac409acbff28b8b850be',
  'doctrine/common' => 'v2.11.0@b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff',
  'doctrine/dbal' => 'v2.9.2@22800bd651c1d8d2a9719e2a3dc46d5108ebfcc9',
  'doctrine/doctrine-bundle' => '1.11.2@28101e20776d8fa20a00b54947fbae2db0d09103',
  'doctrine/doctrine-cache-bundle' => '1.3.5@5514c90d9fb595e1095e6d66ebb98ce9ef049927',
  'doctrine/doctrine-migrations-bundle' => 'v2.0.0@4c9579e0e43df1fb3f0ca29b9c20871c824fac71',
  'doctrine/event-manager' => 'v1.0.0@a520bc093a0170feeb6b14e9d83f3a14452e64b3',
  'doctrine/inflector' => 'v1.3.0@5527a48b7313d15261292c149e55e26eae771b0a',
  'doctrine/instantiator' => '1.2.0@a2c590166b2133a4633738648b6b064edae0814a',
  'doctrine/lexer' => '1.1.0@e17f069ede36f7534b95adec71910ed1b49c74ea',
  'doctrine/migrations' => '2.1.1@a89fa87a192e90179163c1e863a145c13337f442',
  'doctrine/orm' => 'v2.6.4@b52ef5a1002f99ab506a5a2d6dba5a2c236c5f43',
  'doctrine/persistence' => '1.1.1@3da7c9d125591ca83944f477e65ed3d7b4617c48',
  'doctrine/reflection' => 'v1.0.0@02538d3f95e88eb397a5f86274deb2c6175c2ab6',
  'egulias/email-validator' => '2.1.11@92dd169c32f6f55ba570c309d83f5209cefb5e23',
  'fig/link-util' => '1.0.0@1a07821801a148be4add11ab0603e4af55a72fac',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'knplabs/knp-components' => 'v2.2.1@b0b7f22df0d5e2eb8be41451342f38c51d739124',
  'knplabs/knp-paginator-bundle' => 'v4.1.0@0e3cc11323f112470022d462c9e6718fd01c7e88',
  'monolog/monolog' => '1.25.1@70e65a5470a42cfec1a7da00d30edb6e617e8dcf',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '4.3.2@b83ff7cfcfee7827e1e78b637a5904fe6a96698e',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.0@6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd',
  'sensio/framework-extra-bundle' => 'v5.5.1@dfc2c4df9f7d465a65c770e9feb578fe071636f7',
  'swiftmailer/swiftmailer' => 'v6.2.1@5397cd05b0a0f7937c47b0adcb4c60e5ab936b6a',
  'symfony/asset' => 'v4.3.5@3f97e57596884f7b9158d564a533112a0d19dbdd',
  'symfony/cache' => 'v4.3.5@40c62600ebad1ed2defbf7d35523d918a73ab330',
  'symfony/cache-contracts' => 'v1.1.7@af50d14ada9e4e82cfabfabdc502d144f89be0a1',
  'symfony/config' => 'v4.3.5@0acb26407a9e1a64a275142f0ae5e36436342720',
  'symfony/console' => 'v4.3.5@929ddf360d401b958f611d44e726094ab46a7369',
  'symfony/debug' => 'v4.3.5@cc5c1efd0edfcfd10b354750594a46b3dd2afbbe',
  'symfony/dependency-injection' => 'v4.3.5@e1e0762a814b957a1092bff75a550db49724d05b',
  'symfony/doctrine-bridge' => 'v4.3.5@486fa65a74692d84f250087c79d0b89d30d655a8',
  'symfony/dotenv' => 'v4.3.5@1785b18148a016b8f4e6a612291188d568e1f9cd',
  'symfony/event-dispatcher' => 'v4.3.5@6229f58993e5a157f6096fc7145c0717d0be8807',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/expression-language' => 'v4.3.5@c8b47d8820d3bf75f757eec8a2647584c14cf0c6',
  'symfony/filesystem' => 'v4.3.5@9abbb7ef96a51f4d7e69627bc6f63307994e4263',
  'symfony/finder' => 'v4.3.5@5e575faa95548d0586f6bedaeabec259714e44d1',
  'symfony/flex' => 'v1.4.6@133e649fdf08aeb8741be1ba955ccbe5cd17c696',
  'symfony/form' => 'v4.3.5@4a799fb998c325ac77fc5513f35be033cc0edf3c',
  'symfony/framework-bundle' => 'v4.3.5@fca765488ecea04bf6c1c502d7b0214fa29460d8',
  'symfony/http-client' => 'v4.3.5@69d438274718121e1166e7f65c290f891a4c8ddb',
  'symfony/http-client-contracts' => 'v1.1.7@353b2a3e907e5c34cf8f74827a4b21eb745aab1d',
  'symfony/http-foundation' => 'v4.3.5@76590ced16d4674780863471bae10452b79210a5',
  'symfony/http-kernel' => 'v4.3.5@5f08141850932e8019c01d8988bf3ed6367d2991',
  'symfony/inflector' => 'v4.3.5@fc488a52c79b2bbe848fa9def35f2cccb47c4798',
  'symfony/intl' => 'v4.3.5@818771ff6acef04cdce05023ddfc39b7078014bf',
  'symfony/mime' => 'v4.3.5@32f71570547b91879fdbd9cf50317d556ae86916',
  'symfony/monolog-bridge' => 'v4.3.5@6b9d84b34e0c2c5d9d4f4dbd5f36b0c9e4e5ef93',
  'symfony/monolog-bundle' => 'v3.4.0@7fbecb371c1c614642c93c6b2cbcdf723ae8809d',
  'symfony/options-resolver' => 'v4.3.5@81c2e120522a42f623233968244baebd6b36cb6a',
  'symfony/orm-pack' => 'v1.0.7@c57f5e05232ca40626eb9fa52a32bc8565e9231c',
  'symfony/polyfill-intl-icu' => 'v1.12.0@66810b9d6eb4af54d543867909d65ab9af654d7e',
  'symfony/polyfill-intl-idn' => 'v1.12.0@6af626ae6fa37d396dc90a399c0ff08e5cfc45b2',
  'symfony/polyfill-mbstring' => 'v1.12.0@b42a2f66e8f1b15ccf25652c3424265923eb4f17',
  'symfony/polyfill-php72' => 'v1.12.0@04ce3335667451138df4307d6a9b61565560199e',
  'symfony/polyfill-php73' => 'v1.12.0@2ceb49eaccb9352bff54d22570276bb75ba4a188',
  'symfony/process' => 'v4.3.5@50556892f3cc47d4200bfd1075314139c4c9ff4b',
  'symfony/property-access' => 'v4.3.5@bb0c302375ffeef60c31e72a4539611b7f787565',
  'symfony/property-info' => 'v4.3.5@6e4bf437295ef11eb3665ec8f800fb14a74cb976',
  'symfony/routing' => 'v4.3.5@3b174ef04fe66696524efad1e5f7a6c663d822ea',
  'symfony/security-bundle' => 'v4.3.5@aa3cd52168c2e5c99effe560907f22fcffe8a788',
  'symfony/security-core' => 'v4.3.5@a6f763c1f093b833d371f813519a1a8c07b75fb9',
  'symfony/security-csrf' => 'v4.3.5@0760ec651ea8ff81e22097780337e43f3a795769',
  'symfony/security-guard' => 'v4.3.5@4beec980b6a0122afc1ca166ca50ce3b84398507',
  'symfony/security-http' => 'v4.3.5@b91b6d4d1bded8365f23f6bd4290d28bc6af0832',
  'symfony/serializer' => 'v4.3.5@805eacc72d28e237ef31659344a4d72acef335ec',
  'symfony/serializer-pack' => 'v1.0.2@c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2',
  'symfony/service-contracts' => 'v1.1.7@ffcde9615dc5bb4825b9f6aed07716f1f57faae0',
  'symfony/stopwatch' => 'v4.3.5@1e4ff456bd625be5032fac9be4294e60442e9b71',
  'symfony/swiftmailer-bundle' => 'v3.3.0@6b895bc0a5e815d1bf2d444869415a7c752516aa',
  'symfony/translation' => 'v4.3.5@fe6193b066c457c144333c06aaa869a2d42a167f',
  'symfony/translation-contracts' => 'v1.1.7@364518c132c95642e530d9b2d217acbc2ccac3e6',
  'symfony/twig-bridge' => 'v4.3.5@499b3f3aedffa44e4e30b476bbd433854afc9bc3',
  'symfony/twig-bundle' => 'v4.3.5@c27738bb0d9b314b96a323aebc5f40a20e2a644b',
  'symfony/validator' => 'v4.3.5@dd344bae7894ce8d6c399d854d894eb6e52ee178',
  'symfony/var-exporter' => 'v4.3.5@d5b4e2d334c1d80e42876c7d489896cfd37562f2',
  'symfony/web-link' => 'v4.3.5@4bd0ce7c54d604300deee8eb1b1beda856fbba20',
  'symfony/yaml' => 'v4.3.5@41e16350a2a1c7383c4735aa2f9fce74cf3d1178',
  'twig/twig' => 'v2.12.1@ddd4134af9bfc6dba4eff7c8447444ecc45b9ee5',
  'webmozart/assert' => '1.5.0@88e6d84706d09a236046d686bbea96f07b3a34f4',
  'zendframework/zend-code' => '3.4.0@46feaeecea14161734b56c1ace74f28cb329f194',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'easycorp/easy-log-handler' => 'v1.0.7@5f95717248d20684f88cfb878d8bf3d78aadcbba',
  'nikic/php-parser' => 'v4.2.4@97e59c7a16464196a8b9c77c47df68e4a39a45c4',
  'symfony/browser-kit' => 'v4.3.5@78b7611c45039e8ce81698be319851529bf040b1',
  'symfony/css-selector' => 'v4.3.5@f4b3ff6a549d9ed28b2b0ecd1781bf67cf220ee9',
  'symfony/debug-bundle' => 'v4.3.5@bb83f93785dae1f9c227a408ced3eb3f86399bf8',
  'symfony/debug-pack' => 'v1.0.7@09a4a1e9bf2465987d4f79db0ad6c11cc632bc79',
  'symfony/dom-crawler' => 'v4.3.5@e9f7b4d19d69b133bd638eeddcdc757723b4211f',
  'symfony/maker-bundle' => 'v1.13.1@3e3651e424a5bcb7543c8856ecd10cf1b8d6f9a7',
  'symfony/phpunit-bridge' => 'v4.3.5@a7fd9e742c31ac2b607b166c9016bab51a36c574',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/var-dumper' => 'v4.3.5@bde8957fc415fdc6964f33916a3755737744ff05',
  'symfony/web-profiler-bundle' => 'v4.3.5@b52bb32e6182d924303dbeb9c584396819fef118',
  'symfony/web-server-bundle' => 'v4.3.5@dc26b980900ddf3e9feade14e5b21c029e8ca92f',
  'paragonie/random_compat' => '2.*@97e90bd33743ac390906a057e8a8fe3103dfbb05',
  'symfony/polyfill-ctype' => '*@97e90bd33743ac390906a057e8a8fe3103dfbb05',
  'symfony/polyfill-iconv' => '*@97e90bd33743ac390906a057e8a8fe3103dfbb05',
  'symfony/polyfill-php71' => '*@97e90bd33743ac390906a057e8a8fe3103dfbb05',
  'symfony/polyfill-php70' => '*@97e90bd33743ac390906a057e8a8fe3103dfbb05',
  'symfony/polyfill-php56' => '*@97e90bd33743ac390906a057e8a8fe3103dfbb05',
  '__root__' => 'dev-master@97e90bd33743ac390906a057e8a8fe3103dfbb05',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
