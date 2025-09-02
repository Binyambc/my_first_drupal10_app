<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase as ControllerControllerBase;
use Drupal\Core\ControllerBase;

class HelloWorldController extends ControllerControllerBase
{
    public function content()
    {
        return [
            '#markup' => $this->t('Hello, world'),
        ];
    }
}
