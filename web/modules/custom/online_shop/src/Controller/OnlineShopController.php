<?php

namespace Drupal\online_shop\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class OnlineShopController extends ControllerBase
{
    public function content()
    {
        return [

            "#markup" => '<div id="products"></div>',

            "#attached" => [

                "library" => ["online_shop/online_shop"],

            ],

        ];
    }
}
