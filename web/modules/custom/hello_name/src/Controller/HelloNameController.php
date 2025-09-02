<?php

namespace Drupal\hello_name\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;
use Drupal\Core\Link;

class HelloNameController extends ControllerBase
{
    public function content($name = NULL)
    {
        $url = Url::fromRoute('hello_name.form');
        $link = Link::fromTextAndUrl($this->t('Go to the form'), $url)->toString();
        return [
            '#markup' => $this->t('Hello, [Your Name]! @link', ['@link' => $link]),
        ];
    }

    public function greeting($name)
    {
        return [
            '#markup' => $this->t('Hello, @name!', ['@name' => $name])
        ];
    }
}
