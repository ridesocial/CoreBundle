<?php
namespace RideSocial\Bundle\CoreBundle\Controller;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Controller extends Symfony\Bundle\FrameworkBundle\Controller\Controller
{
    /**
     * @var Configuration
     */
    protected $config;
    
    /**
     * @var SecurityContext
     */
    protected $securityContext;
    
    public function __construct(Configuration $config = null)
    {
        $this->config = $config;
    }

    public function getConfiguration()
    {
        return $this->config;
    }

    public function setContainer(Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        parent::setContainer($container);
        
        $this->securityContext = $this->container->get('security.context');
    }
}
