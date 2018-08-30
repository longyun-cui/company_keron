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
                'root' => 'http://keron-relo.com',
                'www' => 'http://www.keron-relo.com',
                'cdn' => 'http://cdn.keron-relo.com',

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


        'head_title' => '上海一站式搬家_厂房搬迁|国际搬家公司_上海海运物流仓储-龙臻国际物流有限公司',
        'meta_title' => '上海一站式搬家_厂房搬迁|国际搬家公司_上海海运物流仓储-龙臻国际物流有限公司',
        'meta_description' => '上海龙臻国际物流有限公司是专业上海一站式搬家,一条龙搬家,上门打包搬家公司,提供上海海运物流,厂房搬迁,搬家仓储物流,货运等服务,上海国际搬家公司电话:4008-215-527.',
        'meta_keywords' => '上门打包搬家公司，上海一站式搬家，上海海运物流公司，上海国际搬家公司',


    ];
