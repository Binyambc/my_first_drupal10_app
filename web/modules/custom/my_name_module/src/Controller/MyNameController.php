<?php

namespace Drupal\my_name_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class MyNameController extends ControllerBase
{
    public function name()
    {
        return new Response('Hello - Bini');
    }
}
