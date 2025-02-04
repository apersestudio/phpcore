<?php

namespace PC\Install;

use PC\Core;
use PC\Singletons\Files;

class PostInstallCmd {

    public static function start() {

        // Copy files and directories to the root folder
        // only if those did not exists
        $root = Core::DIR_ROOT();
        $vendor = Core::DIR_VENDOR();

        $frameworkInfo = json_decode(file_get_contents($root."/composer.json"));
        $frameworkPath = $vendor."/".$frameworkInfo->name;

        $directoriesToCopy = ["app","public"];
        foreach ($directoriesToCopy as $dir) {
            $vendorPath = $frameworkPath."/".$dir;
            $rootPath = $root."/".$dir;
            if (is_dir($vendorPath) === true && is_dir($rootPath) === false) {
                Files::copyDirectory($vendorPath, $root);
            }
        }

        $filesToCopy = [".env", ".gitignore", "LICENSE", "phpcore"];
        foreach ($filesToCopy as $file) {
            $vendorPath = $frameworkPath."/".$file;
            $rootPath = $root."/".$file;
            if (is_file($vendorPath) === true && is_file($rootPath) === false) {
                Files::copy($vendorPath, $root);
            }
        }
    }

}