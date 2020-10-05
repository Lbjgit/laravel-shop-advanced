<?php

return [
    'alipay' => [
        'app_id'         => '2016100100640133',
        'ali_public_key' => 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDIgHnOn7LLILlKETd6BFRJ0GqgS2Y3mn1wMQmyh9zEyWlz5p1zrahRahbXAfCfSqshSNfqOmAQzSHRVjCqjsAw1jyqrXaPdKBmr90DIpIxmIyKXv4GGAkPyJ/6FTFY99uhpiq0qadD/uSzQsefWo0aTvP/65zi3eof7TcZ32oWpwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAugnHMTUfln7jWZfYaznnVrFVSgYQLjGrma5XwspF+lW0AGBcESVTY+gB6ZsngIrjmRN25c0qXQ0W01rC5yVCvRh4JfyNepJ5wt9KM1UrgyNNeHhMZdmbX/Xr/RIPzs+q76IR5//NIAFOiExcnzfwg7EofXYgjWclzq7gWXhZY1ha8VVbE2i9mRwatdaN66PmQAUWi2svgvXNnMgg5sFYhimCy/1xxTqEWWHUTjMDsHtFbSTtzrcnto1ODUDopvOofePLfsEhfN/gi/X8x+1vuEgl+s+JfUrC/ffHHxQcXZgjT68VN7xXadG40HUT0F+EjCh3TR2RpNqKrodjQLl7dQIDAQABAoIBAQCyWSVo+zCpKkPyZCvJv90TszW8nUttvZhw4D6qMxgbAYZqxfX9SfdD0+vhdCjOhlfjLFHTxHhUdHPpcx1eUs5EUez9HbzUQRARzdZol8H7GiDu2QUErzTRLgVqu6ID9fo9ePYJn6WahSYwbGRvD0W4OmJCxLg4VyZbmjLiEwo+vZI8LicPi52XFgiuwvAxjuZugb+aavWxtdbvxtUODVIrIxSNC1cGtENXSIQ3g4Yj2R8NWr3iG6sB0g1L1SeXYSZYtdBZbdoaDtcRxxNBZFB0nbs8IiYsMZAfvB3ySf+GI6hMIQhDCI3vRRf00ekSPd0Jw+Jwti60Ozf++2IMae+RAoGBAP5LuqlAalPW+8zYxwJ/GMSrW6X5S5tn7WOTHhtWd/PCpVD/qdtwLWyoWa39/+4670W4VNcnFCVuI4Mqfu545tD/arzJK+OFsw0zmQL9OWWnN5+lkMLIt3B/qjsogwOHjrmLO67J5HL01MAPzj44YZ1lp/wWXwJPOLn6i62Eix0LAoGBALtI8ifAwt7FMRvbSSXNERJvByniOElbrKrh/ImYCPsuL0wN8c/85UiKNZ/Zzvz7PwaS/HjqMYB5z0EKvoIO2hTRTRBG7Hktn9sE7C+oBZsJp/h/AzZS8uD8Tizu7Eu8UjVeYmYzXHGikAkwnVMbioNCNJxxqSmSxq5zdcwpoBl/AoGAazOpoShSqr16sUTBwL+rxV0n6bRKt1z8qnmeu4+cSdrIrnjZNnT38VKXW840Uk3uCMpImdsTlyPzPJxxnj7Br2G9sZBtPCFk9i/GVYhC5iO0Q00c1cCf9IEdVoshkB9Zf8a+hlT+RagI+F6xZ3GFVUFBq/gSXXrgQyboM2Io8zkCgYA0Wl/W3PucamMf9lysRHbRQFgwTRyO5SGPYzzE+csI7BAsonlGOtudO4Vh+fDypwknPU92PYE4+NQGyooWsTAlQZzZP/o6pZZaEzYy3DU08a4SuO6c8PMUEXOI/ADx6uLQKGI5T4I4AclhyEUyRjCiII+0a9Ft3anMelojiD9I4QKBgQDrx7GzKBDF++QdeUrPrfJHmmMcIsN20pnB12qGWtVREln86PkHMij2r7UGLHQVU25jBqVsQv6MRL4AvlQHCaiGcc0hwDqC6e2UsQVkYp+UcXxScmaC5KAhcaA3o7+wLnSFRM3b4XOnopXvuk5vKRTzwlrcxPUvgbveGUAl55NB3Q==',
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
