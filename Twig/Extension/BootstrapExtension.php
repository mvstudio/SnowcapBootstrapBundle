<?php
namespace Snowcap\BootstrapBundle\Twig\Extension;

use Symfony\Component\Form\Util\PropertyPath;

/**
 * Created by JetBrains PhpStorm.
 * User: edwin
 * Date: 28/08/11
 * Time: 21:47
 * To change this template use File | Settings | File Templates.
 */

class BootstrapExtension extends \Twig_Extension {
    /**
     * @var \Twig_Environment
     */
    protected $environment;
    /**
     * {@inheritdoc}
     */


    public function initRuntime(\Twig_Environment $environment)
    {
        $this->environment = $environment;
    }


    public function getFunctions()
    {
        return array(
            'form_row_classes' => new \Twig_Function_Method($this, 'getFormRowClasses'),
        );
    }

    public function getFormRowClasses(array $types) {
        return implode(' ', array_map(function($type){
            return 'type_' . $type;
        }, $types));
    }


    public function getName()
    {
        return 'snowcap_bootstrap';
    }
}
