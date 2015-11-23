<?php

class ThemeHouse_NodeLanguage_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/NodeLanguage/ControllerHelper/NodeLanguage.php' => 'c5deb569f5c05d4add4483c36274073b',
                'library/ThemeHouse/NodeLanguage/Extend/XenForo/ControllerAdmin/Forum.php' => '22fa8058a142d05d1ce851e81ed3815c',
                'library/ThemeHouse/NodeLanguage/Extend/XenForo/DataWriter/Forum.php' => 'd2eb05867de5abd4397bf00d147bd34f',
                'library/ThemeHouse/NodeLanguage/Install/Controller.php' => 'd795041e04a2578bc8474ca4a3e03e01',
                'library/ThemeHouse/NodeLanguage/Listener/ControllerPostDispatch.php' => '1c925fc4e01ec4de7e8d8ac95fb3fabb',
                'library/ThemeHouse/NodeLanguage/Listener/LoadClass.php' => '54be6912067cea9d14c7df812d4505ca',
                'library/ThemeHouse/NodeLanguage/Listener/TemplateHook.php' => '089ee4d0da8afd1c0d76d75ff413db3e',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
                'library/ThemeHouse/Listener/Template.php' => '0aa5e8aabb255d39cf01d671f9df0091',
                'library/ThemeHouse/Listener/Template/20150106.php' => '8d42b3b2d856af9e33b69a2ce1034442',
                'library/ThemeHouse/Listener/TemplateHook.php' => 'a767a03baad0ca958d19577200262d50',
                'library/ThemeHouse/Listener/TemplateHook/20150106.php' => '71c539920a651eef3106e19504048756',
            ));
    }
}