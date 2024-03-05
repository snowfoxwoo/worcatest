<?php return array(
    'root' => array(
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => '336bf372a911c4bce11d8efba1881a627585a3f9',
        'name' => '__root__',
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => '336bf372a911c4bce11d8efba1881a627585a3f9',
            'dev_requirement' => false,
        ),
        'monolog/monolog' => array(
            'pretty_version' => '2.0.2',
            'version' => '2.0.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../monolog/monolog',
            'aliases' => array(),
            'reference' => 'c861fcba2ca29404dc9e617eedd9eff4616986b8',
            'dev_requirement' => false,
        ),
        'psr/log' => array(
            'pretty_version' => '1.1.4',
            'version' => '1.1.4.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(),
            'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
            'dev_requirement' => false,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0.0',
            ),
        ),
        'twbs/bootstrap' => array(
            'pretty_version' => 'v5.3.3',
            'version' => '5.3.3.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twbs/bootstrap',
            'aliases' => array(),
            'reference' => '6e1f75f420f68e1d52733b8e407fc7c3766c9dba',
            'dev_requirement' => false,
        ),
        'twitter/bootstrap' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v5.3.3',
            ),
        ),
    ),
);
