<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/Add')) {
            // addEleve
            if (rtrim($pathinfo, '/') === '/AddEleve') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'addEleve');
                }

                return array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::AddEleveAction',  '_route' => 'addEleve',);
            }

            // AddClasse
            if (rtrim($pathinfo, '/') === '/AddClasse') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'AddClasse');
                }

                return array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::AddClasseAction',  '_route' => 'AddClasse',);
            }

            // AddMat
            if (rtrim($pathinfo, '/') === '/AddMatiere') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'AddMat');
                }

                return array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::AddMatiereAction',  '_route' => 'AddMat',);
            }

            // addProf
            if (rtrim($pathinfo, '/') === '/AddProf') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'addProf');
                }

                return array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::AddProfAction',  '_route' => 'addProf',);
            }

        }

        // Edit_classe
        if (0 === strpos($pathinfo, '/EditClasse') && preg_match('#^/EditClasse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Edit_classe')), array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::EditClasseAction',));
        }

        // supp_classe
        if (0 === strpos($pathinfo, '/DeleteClasse') && preg_match('#^/DeleteClasse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp_classe')), array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::DeleteClasseAction',));
        }

        // listClasse
        if ($pathinfo === '/listClasse') {
            return array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::listClasseAction',  '_route' => 'listClasse',);
        }

        // edit_etud
        if (0 === strpos($pathinfo, '/EditEleve') && preg_match('#^/EditEleve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_etud')), array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::EditEleveAction',));
        }

        // supp_etud
        if (0 === strpos($pathinfo, '/DeleteEleve') && preg_match('#^/DeleteEleve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp_etud')), array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::DeleteEleveAction',));
        }

        // edit_prof
        if (0 === strpos($pathinfo, '/EditProf') && preg_match('#^/EditProf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_prof')), array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::EditProfAction',));
        }

        if (0 === strpos($pathinfo, '/Delete')) {
            // supp_prof
            if (0 === strpos($pathinfo, '/DeleteProf') && preg_match('#^/DeleteProf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp_prof')), array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::DeleteProfAction',));
            }

            // supp_mat
            if (0 === strpos($pathinfo, '/DeleteMatiere') && preg_match('#^/DeleteMatiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp_mat')), array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::DeleteMatiereAction',));
            }

        }

        // edit_mat
        if (0 === strpos($pathinfo, '/EditMatiere') && preg_match('#^/EditMatiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_mat')), array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::EditMatiereAction',));
        }

        // AddInscri
        if (rtrim($pathinfo, '/') === '/AddInscri') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'AddInscri');
            }

            return array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::AddInscriAction',  '_route' => 'AddInscri',);
        }

        // edit_insc
        if (0 === strpos($pathinfo, '/EditInscri') && preg_match('#^/EditInscri/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_insc')), array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::EditInscriAction',));
        }

        // supp_insc
        if (0 === strpos($pathinfo, '/DeleteInscri') && preg_match('#^/DeleteInscri/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp_insc')), array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::DeleteInscriAction',));
        }

        // AddRegEtud
        if (rtrim($pathinfo, '/') === '/AddReglementEtudiant') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'AddRegEtud');
            }

            return array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::AddReglementEtudiantAction',  '_route' => 'AddRegEtud',);
        }

        // edit_regE
        if (0 === strpos($pathinfo, '/EditReglementEtudiant') && preg_match('#^/EditReglementEtudiant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_regE')), array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::EditReglementEtudiantAction',));
        }

        // supp_regE
        if (0 === strpos($pathinfo, '/DeleteReglementEtudiant') && preg_match('#^/DeleteReglementEtudiant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp_regE')), array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::DeleteReglementEtudiantAction',));
        }

        // AddRegPro
        if (rtrim($pathinfo, '/') === '/AddReglementProf') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'AddRegPro');
            }

            return array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::AddReglementProfAction',  '_route' => 'AddRegPro',);
        }

        // edit_regP
        if (0 === strpos($pathinfo, '/EditReglementProf') && preg_match('#^/EditReglementProf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_regP')), array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::EditReglementProfAction',));
        }

        // supp_regP
        if (0 === strpos($pathinfo, '/DeleteReglementProf') && preg_match('#^/DeleteReglementProf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp_regP')), array (  '_controller' => 'Eco\\EcoBundle\\Controller\\DefaultController::DeleteReglementProfAction',));
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
