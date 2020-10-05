<?php

return [
    'alipay' => [
        'app_id'         => '2016100100640133',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAm9xsPBV2C7k4U+1U0wlfO0wCqk4f6n7iLewjTprUqoOL3GxUKD4t/Sf2juzUhLRzU5FeUkGmdzQuYxCRE5uKrn1Lv7qNyu0IYAVPothc02hjFS18QsQUodz3pBtWE5MrGy/LehVI70a4LYGKsQ6HC3calUW0Xg607k6fdJkOUYugybf6HXDjvM44WPz0i3ZhMlOYdGFuBrJC8ebmoYJE3uUDK+m0t+NmmfC3jVRG5RyO6NHFxL52AAulwxDssVrGDqJuW8G1mdKDXP0X4dsDdnvwcyvuB2cWvKyQEuNwXcE31wcfmPNc5ghdFtT72HQwWwAO4UQfGxQwdgvY9zxS6QIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEArelPi2dtz5CBCEr9ngq1puSE/6O7Vn1pQz/KjbZYJDEslntN5uSJuz+D35mum5mXMYuVGw3mSD3UYGmAfYZVsyTAEX6O8P/A13+zzXmWl9GNks7oKBEQoEfRsPUCcqKu2f5v0Xvr4xTyJ4dDXjOYUsRrmN7RKdo3O9iiJEDdjmhn7zGbRgoLo1XzBn8ST0ZEJOZszb4qi1VXVnBWIUU5ctqI91+O2fdKq+cH0BnU3dUGyA02KuKTBPwL9AzEBr6HtEU/0dPHgD4AwABO14ljhN2hhmIkzqtF/KWbgr/6u3+OW9dusKll/qs0RUCc7hQNO8G4QypU/rAVJnhyADDD3wIDAQABAoIBAH2+GIZp1Qrjp3fwiKlxgt/VkJgpsTUa3jYCdJi8A8S/TUbMhonwKemaReYw/v+AMMJg8wEprpwDIIBJJ98advJdGwZLJFz5/luR+NYTGKBSonNIaLE3jXbmFqZEsG1kVNpHTl//opGAvol4EmyVD4igfk98o20IWzFJNArUX50rjEsk5VR3GPWF0oIYcGXVIJSzy5tR63eQnpmQkPBcE20XVs9zsA28ZXNBnieWchU9BV3j/TPA0dKtBp0GRvB62MbNNIkxklNAWtRK+yOnD9snutNJVGu0HiB5N1zfgo6olDX8kjj0+zJZWm+iDN//5NeSof82XAJlR29tpJ8dyCkCgYEA4ftY4am8dWOWYboll04VXb6y4vmHAneiq8ez7WpwkKknt58Z2+5vHyNQlsG5vePJRlHPMDz98u5Xg1axsVZPxJXCEOvGXhLRWOqO5RsLFDO4gmL3svi+odwMlTkObBhyJauuVEktS4O5+PFXBtqhhjQubLJ64EbDkIDtV3UqYbUCgYEAxQNGduzFlKsJ7v1hdRfBMG0J9s2h3nLFh5H13Ms5qqgBCVUlmuG9dFW3g4rmpcSXrLdNpZeiwnvcQQfTEFysMXfe6q8QiuGJsEC6WyE5EWWqiEsmlxYImEggWqBr5PJ8Ql1g32DkfwO7ZByal7698q2oebsX70maKZwcLv+ZW8MCgYBclT9q5MGDTpOz4jG4dZMnXxOnDhgUGLOasSy0HiGUAtl0z0gm5N694RgJS8EvXP1/Q9EgsDxSpPdRpdkTEIuJvNlPWWlh7U+7oA1/K780PaRgNu/IcUSYx7CYClIwUyug5196xKg8AfHVXfsLodL/Sq2idtUEwbkpoMicRjJg6QKBgQCWc2ncZ/R7FCMB334NbZaa5Ko3T9HNjthKL60ScCAZszMXbW7KWJnVvZ/nVKvO69LokxM44hPpca1B/DeyxxK4tFIH5qk7ZgFAGC44aaarIniYnMtblff6UxpiGyBKNuOtyqGv9M6KMM9qJG3qdD+alAOU8svUcODJ5e2f9pGnAQKBgBDyLhBesrTJg3cL0oKhA04tJCBdCu0dW2slkmT/GODCT39EXQYkBrFSbcrXdWFBfxu7kw93dQnKYWLTMZffiV3CQDKkDNy9Xrjb2cnBgp2OFWra1c1Y/9JhfvmE0TKKMBRL36eI06r52OqfsoZUtx6vbBn9wINV1TAi1dOXYURZ',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
