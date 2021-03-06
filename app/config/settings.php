<?php

// Don't add the "required" validation rule!

return [
    'Site' => [
        'site.replyTo' => [
            'label'   => 'Reply To',
            'default' => 'service@zidisha.org',
            'rule'    => 'email',
        ],
        'site.adminId' => [
            'label' => 'Admin id',
            'rule'  => 'numeric',
        ],
        'site.YCAccountId' => [
            'label' => 'YCAccount id',
            'rule'  => 'numeric',
        ],
        'site.countriesCodesBlockedFromUploadFunds' =>[
            'default' => 'CN,ID,SG',
            'label' => 'Countries Codes Blocked From Upload Funds',
            'rule'  => ['regex:/^[A-Z,]+$/'],
        ],
        'site.paymentTransactionFeeRate' =>[
            'label' => 'Payment Transaction Fee Rate',
            'rule'  => 'numeric',
        ],
    ],
    'Loan' => [
        'loan.minimumAmount' => [
            'label'   => 'Minimum loan amount',
            'default' => '10',
            'rule'    => 'numeric',
            'prepend' => 'USD',
        ],
        'loan.maximumPeriod' => [
            'label'   => 'Maximum loan period for applications (months)',
            'default' => '24',
            'rule'    => 'numeric',
        ],
    ],
    'API' => [
        'facebook.appId' => [
            'label' => 'Facebook App ID',
        ],
        'facebook.appSecret' => [
            'label' => 'Facebook App Secret',
        ],
        'google.clientId' => [
            'label' => 'Google Client ID',
        ],
        'google.clientSecret' => [
            'label' => 'Google Client Secret',
        ],
        'mixpanel.token' => [
            'label' => 'Mixpanel Token',
        ],
        'stripe.publicKey' => [
            'label' => 'Stripe Public Key',
        ],
        'stripe.secretKey' => [
            'label' => 'Stripe Secret Key',
        ]
    ],
];
