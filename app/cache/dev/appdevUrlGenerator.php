<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_assetic_35a8e64' => true,
       '_assetic_35a8e64_0' => true,
       '_assetic_48ed673' => true,
       '_assetic_48ed673_0' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'dest' => true,
       'dest_show' => true,
       'dest_new' => true,
       'dest_create' => true,
       'dest_edit' => true,
       'dest_update' => true,
       'dest_delete' => true,
       'user' => true,
       'user_show' => true,
       'user_new' => true,
       'user_create' => true,
       'user_edit' => true,
       'user_update' => true,
       'user_delete' => true,
       'CitytribeBundle_homepage' => true,
       'CitytribeBundle_profile' => true,
       'CitytribeBundle_avatar' => true,
       'CitytribeBundle_profile_edit' => true,
       'CityGeoBundle_residence' => true,
       'CityGeoBundle_destination' => true,
       'CityGeoBundle_polygon_region' => true,
       'article' => true,
       'article_show' => true,
       'article_new' => true,
       'article_create' => true,
       'article_edit' => true,
       'article_update' => true,
       'article_delete' => true,
       'cityblog' => true,
       'cityblog_voir' => true,
       'cityblog_ajouter' => true,
       'cityblog_modifier' => true,
       'cityblog_supprimer' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_edit' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
       'fos_user_registration_tribu' => true,
       'tribu_registration' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
       'auth_login' => true,
       'auth_service_login' => true,
       'auth_callback' => true,
       'auth_denied' => true,
       'auth_profile' => true,
       'auth_logout' => true,
       'fos_comment_new_thread_comment_votes' => true,
       'fos_comment_new_thread_comments' => true,
       'fos_comment_new_threads' => true,
       'fos_comment_get_thread' => true,
       'fos_comment_get_thread_comment' => true,
       'fos_comment_get_thread_comment_votes' => true,
       'fos_comment_get_thread_comments' => true,
       'fos_comment_post_thread_comment_votes' => true,
       'fos_comment_post_thread_comments' => true,
       'fos_comment_post_threads' => true,
       '_security_check' => true,
       '_security_logout' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_assetic_35a8e64RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '35a8e64',  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/35a8e64.js',  ),));
    }

    private function get_assetic_35a8e64_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '35a8e64',  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/35a8e64_comments_1.js',  ),));
    }

    private function get_assetic_48ed673RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '48ed673',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/48ed673.css',  ),));
    }

    private function get_assetic_48ed673_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '48ed673',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/48ed673_comments_1.css',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getdestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\DemoBundle\\Controller\\DestinationController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/dest/dest/',  ),));
    }

    private function getdest_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\DemoBundle\\Controller\\DestinationController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/dest/dest',  ),));
    }

    private function getdest_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\DemoBundle\\Controller\\DestinationController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/dest/dest/new',  ),));
    }

    private function getdest_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\DemoBundle\\Controller\\DestinationController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/dest/dest/create',  ),));
    }

    private function getdest_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\DemoBundle\\Controller\\DestinationController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/dest/dest',  ),));
    }

    private function getdest_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\DemoBundle\\Controller\\DestinationController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/dest/dest',  ),));
    }

    private function getdest_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\DemoBundle\\Controller\\DestinationController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/dest/dest',  ),));
    }

    private function getuserRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\DemoBundle\\Controller\\UserController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/dest/user/',  ),));
    }

    private function getuser_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\DemoBundle\\Controller\\UserController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/dest/user',  ),));
    }

    private function getuser_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\DemoBundle\\Controller\\UserController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/dest/user/new',  ),));
    }

    private function getuser_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\DemoBundle\\Controller\\UserController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/dest/user/create',  ),));
    }

    private function getuser_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\DemoBundle\\Controller\\UserController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/dest/user',  ),));
    }

    private function getuser_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\DemoBundle\\Controller\\UserController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/dest/user',  ),));
    }

    private function getuser_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\DemoBundle\\Controller\\UserController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/dest/user',  ),));
    }

    private function getCitytribeBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/home',  ),));
    }

    private function getCitytribeBundle_profileRouteInfo()
    {
        return array(array (  0 => 'type',), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\ProfileController::showAction',), array (  'type' => 'places|informations',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => 'places|informations',    3 => 'type',  ),  1 =>   array (    0 => 'text',    1 => '/profile',  ),));
    }

    private function getCitytribeBundle_avatarRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\ProfileController::avatarAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/avatar/',  ),));
    }

    private function getCitytribeBundle_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/informations/edit',  ),));
    }

    private function getCityGeoBundle_residenceRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\DefaultController::residenceAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/places/residence',  ),));
    }

    private function getCityGeoBundle_destinationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\DefaultController::destinationAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/places/destination',  ),));
    }

    private function getCityGeoBundle_polygon_regionRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\DefaultController::polygonAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/places/polygon',  ),));
    }

    private function getarticleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\BlogBundle\\Controller\\ArticleController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/Blog/crud/',  ),));
    }

    private function getarticle_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\BlogBundle\\Controller\\ArticleController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/Blog/crud',  ),));
    }

    private function getarticle_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\BlogBundle\\Controller\\ArticleController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/Blog/crud/new',  ),));
    }

    private function getarticle_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\BlogBundle\\Controller\\ArticleController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/Blog/crud/create',  ),));
    }

    private function getarticle_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\BlogBundle\\Controller\\ArticleController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/Blog/crud',  ),));
    }

    private function getarticle_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\BlogBundle\\Controller\\ArticleController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/Blog/crud',  ),));
    }

    private function getarticle_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\BlogBundle\\Controller\\ArticleController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/Blog/crud',  ),));
    }

    private function getcityblogRouteInfo()
    {
        return array(array (  0 => 'page',), array (  '_controller' => 'City\\BlogBundle\\Controller\\BlogController::listeAction',  'page' => 1,), array (  'page' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '/Blog',  ),));
    }

    private function getcityblog_voirRouteInfo()
    {
        return array(array (  0 => 'slug',), array (  '_controller' => 'City\\BlogBundle\\Controller\\BlogController::voirAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'slug',  ),  1 =>   array (    0 => 'text',    1 => '/Blog',  ),));
    }

    private function getcityblog_ajouterRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\BlogBundle\\Controller\\BlogController::ajouterAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/Blog/ajouter/article',  ),));
    }

    private function getcityblog_modifierRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\BlogBundle\\Controller\\BlogController::modifierAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/Blog/modifier',  ),));
    }

    private function getcityblog_supprimerRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\BlogBundle\\Controller\\BlogController::supprimerAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/Blog/supprimer',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/profile/',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'City\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/confirmed',  ),));
    }

    private function getfos_user_registration_tribuRouteInfo()
    {
        return array(array (), array (  '_controller' => 'CityUserBundle:TribuRegister:register',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/tribu_register',  ),));
    }

    private function gettribu_registrationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\DefaultController::residenceAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/residence',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/resetting/reset',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/profile/change-password',  ),));
    }

    private function getauth_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'OnePlusOne\\OAuthBundle\\Controller\\AuthController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/social_network',  ),));
    }

    private function getauth_service_loginRouteInfo()
    {
        return array(array (  0 => 'service',), array (  '_controller' => 'OnePlusOne\\OAuthBundle\\Controller\\AuthController::loginAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'service',  ),  1 =>   array (    0 => 'text',    1 => '/social_network',  ),));
    }

    private function getauth_callbackRouteInfo()
    {
        return array(array (  0 => 'service',), array (  '_controller' => 'OnePlusOne\\OAuthBundle\\Controller\\AuthController::callbackAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'service',  ),  1 =>   array (    0 => 'text',    1 => '/callback',  ),));
    }

    private function getauth_deniedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'OnePlusOne\\OAuthBundle\\Controller\\AuthController::deniedAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/denied',  ),));
    }

    private function getauth_profileRouteInfo()
    {
        return array(array (), array (  '_controller' => 'OnePlusOne\\OAuthBundle\\Controller\\AuthController::profileAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile',  ),));
    }

    private function getauth_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'OnePlusOne\\OAuthBundle\\Controller\\AuthController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_comment_new_thread_comment_votesRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'commentId',  2 => '_format',), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentVotesAction',  '_format' => NULL,), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/votes/new',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'commentId',  ),  3 =>   array (    0 => 'text',    1 => '/comments',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  5 =>   array (    0 => 'text',    1 => '/api/threads',  ),));
    }

    private function getfos_comment_new_thread_commentsRouteInfo()
    {
        return array(array (  0 => 'id',  1 => '_format',), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentsAction',  '_format' => NULL,), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/comments/new',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/api/threads',  ),));
    }

    private function getfos_comment_new_threadsRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadsAction',  '_format' => NULL,), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/api/threads/new',  ),));
    }

    private function getfos_comment_get_threadRouteInfo()
    {
        return array(array (  0 => 'id',  1 => '_format',), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadAction',  '_format' => NULL,), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^\\.]+?',    3 => '_format',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/api/threads',  ),));
    }

    private function getfos_comment_get_thread_commentRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'commentId',  2 => '_format',), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentAction',  '_format' => NULL,), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^\\.]+?',    3 => '_format',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'commentId',  ),  2 =>   array (    0 => 'text',    1 => '/comments',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/api/threads',  ),));
    }

    private function getfos_comment_get_thread_comment_votesRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'commentId',  2 => '_format',), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentVotesAction',  '_format' => NULL,), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/votes',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'commentId',  ),  3 =>   array (    0 => 'text',    1 => '/comments',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  5 =>   array (    0 => 'text',    1 => '/api/threads',  ),));
    }

    private function getfos_comment_get_thread_commentsRouteInfo()
    {
        return array(array (  0 => 'id',  1 => '_format',), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentsAction',  '_format' => NULL,), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/comments',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/api/threads',  ),));
    }

    private function getfos_comment_post_thread_comment_votesRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'commentId',  2 => '_format',), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentVotesAction',  '_format' => NULL,), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/votes',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'commentId',  ),  3 =>   array (    0 => 'text',    1 => '/comments',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  5 =>   array (    0 => 'text',    1 => '/api/threads',  ),));
    }

    private function getfos_comment_post_thread_commentsRouteInfo()
    {
        return array(array (  0 => 'id',  1 => '_format',), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentsAction',  '_format' => NULL,), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/comments',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/api/threads',  ),));
    }

    private function getfos_comment_post_threadsRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadsAction',  '_format' => NULL,), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => '[^/]+?',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/api/threads',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/facebook/check',  ),));
    }

    private function get_security_logoutRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }
}
