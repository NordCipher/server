<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf32f03f7cd82bff20d6a51be16689441
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OCA\\Files_Sharing\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OCA\\Files_Sharing\\' => 
        array (
            0 => __DIR__ . '/..' . '/../lib',
        ),
    );

    public static $classMap = array (
        'OCA\\Files_Sharing\\Activity\\Filter' => __DIR__ . '/..' . '/../lib/Activity/Filter.php',
        'OCA\\Files_Sharing\\Activity\\Providers\\Base' => __DIR__ . '/..' . '/../lib/Activity/Providers/Base.php',
        'OCA\\Files_Sharing\\Activity\\Providers\\Downloads' => __DIR__ . '/..' . '/../lib/Activity/Providers/Downloads.php',
        'OCA\\Files_Sharing\\Activity\\Providers\\Groups' => __DIR__ . '/..' . '/../lib/Activity/Providers/Groups.php',
        'OCA\\Files_Sharing\\Activity\\Providers\\PublicLinks' => __DIR__ . '/..' . '/../lib/Activity/Providers/PublicLinks.php',
        'OCA\\Files_Sharing\\Activity\\Providers\\RemoteShares' => __DIR__ . '/..' . '/../lib/Activity/Providers/RemoteShares.php',
        'OCA\\Files_Sharing\\Activity\\Providers\\Users' => __DIR__ . '/..' . '/../lib/Activity/Providers/Users.php',
        'OCA\\Files_Sharing\\Activity\\Settings\\PublicLinks' => __DIR__ . '/..' . '/../lib/Activity/Settings/PublicLinks.php',
        'OCA\\Files_Sharing\\Activity\\Settings\\RemoteShare' => __DIR__ . '/..' . '/../lib/Activity/Settings/RemoteShare.php',
        'OCA\\Files_Sharing\\Activity\\Settings\\Shared' => __DIR__ . '/..' . '/../lib/Activity/Settings/Shared.php',
        'OCA\\Files_Sharing\\AppInfo\\Application' => __DIR__ . '/..' . '/../lib/AppInfo/Application.php',
        'OCA\\Files_Sharing\\Cache' => __DIR__ . '/..' . '/../lib/Cache.php',
        'OCA\\Files_Sharing\\Capabilities' => __DIR__ . '/..' . '/../lib/Capabilities.php',
        'OCA\\Files_Sharing\\Command\\CleanupRemoteStorages' => __DIR__ . '/..' . '/../lib/Command/CleanupRemoteStorages.php',
        'OCA\\Files_Sharing\\Controller\\ExternalSharesController' => __DIR__ . '/..' . '/../lib/Controller/ExternalSharesController.php',
        'OCA\\Files_Sharing\\Controller\\PublicPreviewController' => __DIR__ . '/..' . '/../lib/Controller/PublicPreviewController.php',
        'OCA\\Files_Sharing\\Controller\\RemoteController' => __DIR__ . '/..' . '/../lib/Controller/RemoteController.php',
        'OCA\\Files_Sharing\\Controller\\ShareAPIController' => __DIR__ . '/..' . '/../lib/Controller/ShareAPIController.php',
        'OCA\\Files_Sharing\\Controller\\ShareController' => __DIR__ . '/..' . '/../lib/Controller/ShareController.php',
        'OCA\\Files_Sharing\\Controller\\ShareInfoController' => __DIR__ . '/..' . '/../lib/Controller/ShareInfoController.php',
        'OCA\\Files_Sharing\\Controller\\ShareesAPIController' => __DIR__ . '/..' . '/../lib/Controller/ShareesAPIController.php',
        'OCA\\Files_Sharing\\DeleteOrphanedSharesJob' => __DIR__ . '/..' . '/../lib/DeleteOrphanedSharesJob.php',
        'OCA\\Files_Sharing\\Exceptions\\BrokenPath' => __DIR__ . '/..' . '/../lib/Exceptions/BrokenPath.php',
        'OCA\\Files_Sharing\\Exceptions\\S2SException' => __DIR__ . '/..' . '/../lib/Exceptions/S2SException.php',
        'OCA\\Files_Sharing\\ExpireSharesJob' => __DIR__ . '/..' . '/../lib/ExpireSharesJob.php',
        'OCA\\Files_Sharing\\External\\Cache' => __DIR__ . '/..' . '/../lib/External/Cache.php',
        'OCA\\Files_Sharing\\External\\Manager' => __DIR__ . '/..' . '/../lib/External/Manager.php',
        'OCA\\Files_Sharing\\External\\Mount' => __DIR__ . '/..' . '/../lib/External/Mount.php',
        'OCA\\Files_Sharing\\External\\MountProvider' => __DIR__ . '/..' . '/../lib/External/MountProvider.php',
        'OCA\\Files_Sharing\\External\\Scanner' => __DIR__ . '/..' . '/../lib/External/Scanner.php',
        'OCA\\Files_Sharing\\External\\Storage' => __DIR__ . '/..' . '/../lib/External/Storage.php',
        'OCA\\Files_Sharing\\External\\Watcher' => __DIR__ . '/..' . '/../lib/External/Watcher.php',
        'OCA\\Files_Sharing\\Helper' => __DIR__ . '/..' . '/../lib/Helper.php',
        'OCA\\Files_Sharing\\Hooks' => __DIR__ . '/..' . '/../lib/Hooks.php',
        'OCA\\Files_Sharing\\ISharedStorage' => __DIR__ . '/..' . '/../lib/ISharedStorage.php',
        'OCA\\Files_Sharing\\Middleware\\OCSShareAPIMiddleware' => __DIR__ . '/..' . '/../lib/Middleware/OCSShareAPIMiddleware.php',
        'OCA\\Files_Sharing\\Middleware\\ShareInfoMiddleware' => __DIR__ . '/..' . '/../lib/Middleware/ShareInfoMiddleware.php',
        'OCA\\Files_Sharing\\Middleware\\SharingCheckMiddleware' => __DIR__ . '/..' . '/../lib/Middleware/SharingCheckMiddleware.php',
        'OCA\\Files_Sharing\\Migration\\OwncloudGuestShareType' => __DIR__ . '/..' . '/../lib/Migration/OwncloudGuestShareType.php',
        'OCA\\Files_Sharing\\Migration\\SetPasswordColumn' => __DIR__ . '/..' . '/../lib/Migration/SetPasswordColumn.php',
        'OCA\\Files_Sharing\\MountProvider' => __DIR__ . '/..' . '/../lib/MountProvider.php',
        'OCA\\Files_Sharing\\Scanner' => __DIR__ . '/..' . '/../lib/Scanner.php',
        'OCA\\Files_Sharing\\ShareBackend\\File' => __DIR__ . '/..' . '/../lib/ShareBackend/File.php',
        'OCA\\Files_Sharing\\ShareBackend\\Folder' => __DIR__ . '/..' . '/../lib/ShareBackend/Folder.php',
        'OCA\\Files_Sharing\\SharedMount' => __DIR__ . '/..' . '/../lib/SharedMount.php',
        'OCA\\Files_Sharing\\SharedStorage' => __DIR__ . '/..' . '/../lib/SharedStorage.php',
        'OCA\\Files_Sharing\\Updater' => __DIR__ . '/..' . '/../lib/Updater.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf32f03f7cd82bff20d6a51be16689441::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf32f03f7cd82bff20d6a51be16689441::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf32f03f7cd82bff20d6a51be16689441::$classMap;

        }, null, ClassLoader::class);
    }
}
