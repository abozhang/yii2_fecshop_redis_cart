<?php
/**
 * FecShop file.
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

return [
    /**
     * �����ǵ�������չ��������÷�ʽ
     */
    // �������չextensions���ܿ��أ�true�����
    'enable' => true, 
    // ������ڵ�����
    'app' => [
        // 1.���ò�
        'common' => [
            // �ڹ��ò�Ŀ��أ����ó�false�󣬹��ò�����ý�ʧЧ
            'enable' => true,
            // ���ò�ľ���������������
            'config' => [
                'services' => [
                    'class' => 'fecshop\services\Cart',
                    // �ӷ���
                    'childService' => [
                        'quote' => [
                            'class' => 'fecshop\services\cart\Quote',
                        ],
                        'quoteItem' => [
                            'class' => 'fecshop\services\cart\QuoteItem',
                        ],
                    ]
                ],
                'modules' => [
                    
                ],
            ]
        ],
        
    ],
    
];









