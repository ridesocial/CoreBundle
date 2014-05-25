<?php
namespace RideSocial\Bundle\CoreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomepageController extends RideSocial\Bundle\CoreBundle\Controller\Controller
{
    /**
     * @Template("RideSocialResourcesBundle:Homepage:index.html.twig")
     */
    public function indexAction()
    {
        // last username entered by the user
        $lastUsername = (!$this->securityContext->isGranted('ROLE_USER')) ? '' : $this->securityContext->get(SecurityContext::LAST_USERNAME);

        $csrfToken = $this->container->has('form.csrf_provider')
            ? $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate')
            : null;

        return array(
            'csrf_token' => $csrfToken,
            'last_username' => $lastUsername
        );
    }

    public function aboutAction()
    {
        return $this->render('RideSocialResourcesBundle:Homepage:about.html.twig');
    }

    public function helpAction()
    {
        return $this->render('RideSocialResourcesBundle:Homepage:help.html.twig');
    }

    public function contactAction()
    {
        return $this->render('RideSocialResourcesBundle:Homepage:contact.html.twig');
    }
}
