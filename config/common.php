<?php

    return [


        'host' => [

            'local' => [
                'root' => 'http://local-keron.com',
                'www' => 'http://www.local-keron.com',
                'cdn' => 'http://cdn.local-keron.com',

                'MailService' => 'http://mailserver.com',
            ],

            'online' => [
                'root' => 'http://keronmoving.cn:8990',
                'www' => 'http://www.keronmoving.cn:8990',
                'cdn' => 'http://cdn.keronmoving.cn:8990',

                'MailService' => 'http://live2.pub:8088',
            ],

            'front' => [
                'prefix' => '',
                'root' => '',
                'index' => ''
            ],

            'admin' => [
                'prefix' => ''
            ],

        ],

        'MailService' => [
            'local' => 'http://mailserver.com',
            'online' => 'http://live2.pub:8088',
        ],


        'website' => [

            'front' => [
                'prefix' => '',
                'root' => '',
                'index' => ''
            ],

            'admin' => [
                'prefix' => ''
            ],

        ],


        'MailServiceLocal' => 'http://mailserver.com',
        'MailServiceOnline' => 'http://live2.pub:8088',


    ];
