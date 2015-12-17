<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // users_user_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'users_user_default_index');
            }

            return array (  '_controller' => 'Users\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'users_user_default_index',);
        }

        // _index
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_index');
            }

            return array (  '_controller' => 'Users\\UserBundle\\Controller\\PostController::indexAction',  '_route' => '_index',);
        }
        not__index:

        // _new
        if ($pathinfo === '/new') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not__new;
            }

            return array (  '_controller' => 'Users\\UserBundle\\Controller\\PostController::newAction',  '_route' => '_new',);
        }
        not__new:

        // _show
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_show')), array (  '_controller' => 'Users\\UserBundle\\Controller\\PostController::showAction',));
        }
        not__show:

        // _edit
        if (preg_match('#^/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not__edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_edit')), array (  '_controller' => 'Users\\UserBundle\\Controller\\PostController::editAction',));
        }
        not__edit:

        // _delete
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not__delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_delete')), array (  '_controller' => 'Users\\UserBundle\\Controller\\PostController::deleteAction',));
        }
        not__delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
