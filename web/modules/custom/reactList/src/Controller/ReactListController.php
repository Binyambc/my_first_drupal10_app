<?php

namespace Drupal\reactList\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class ReactListController extends ControllerBase
{
    public function content()
    {
        return [

            "#markup" => '<div id="react_app"></div>',

            "#attached" => [

                "library" => ["reactList/reactList"],

            ],

        ];
    }
}
