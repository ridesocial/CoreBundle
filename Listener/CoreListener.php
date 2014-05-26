<?php
namespace RideSocial\Bundle\CoreBundle\Listener;

use Symfony\Component\HttpKernel\HttpKernel;

class CoreListener
{
    /**
     * container
     * @var type
     */
    protected $container;

    /**
     * __construct
     * @param Container $container container
     */
    public function __construct(Symfony\Component\DependencyInjection\Container $container)
    {
            $this->container = $container;
    }

    /**
     * getApiKey
     * @return String api key
     */
    public function getApiKey()
    {
            return $this->container->getParameter('api_key');
    }

    /**
     * getApiSecret
     * @return String api secret
     */
    public function getApiSecret()
    {
            return $this->container->getParameter('api_secret');
    }

    public function onKernelRequest(Symfony\Component\HttpKernel\Event\GetResponseEvent $event)
    {
        if (HttpKernel::MASTER_REQUEST != $event->getRequestType()) {
            return;
        }
    }
}
