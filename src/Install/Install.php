<?php

namespace PC\Install;

use Composer\Script\Event;

class PostInstallCmd {

    public static function start(Event $event) {

        $root = $event->getComposer()->getConfig()->get('vendor-dir') . '/../';
        $archivos = $event->getComposer()->getPackage()->getExtra()['archivos'];

        print_r($root);
        print_r($archivos);

        /*
        "mkdir -p app",
        "mkdir -p public",
        "cp -r app/* .",
        "cp -r public/* .",
        "cp -r src/* vendor/apersestudio/phpcore/src/"
        */
    }

}