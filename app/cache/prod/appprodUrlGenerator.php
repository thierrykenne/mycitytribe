<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'dest' => true,
       'dest_show' => true,
       'dest_create' => true,
       'dest_update' => true,
       'dest_delete' => true,
       'user' => true,
       'user_show' => true,
       'user_new' => true,
       'user_create' => true,
       'user_edit' => true,
       'user_update' => true,
       'user_delete' => true,
       'Cityblog_home' => true,
       'blog_profile_info' => true,
       'blog_profile_places' => true,
       'blog_avatar' => true,
       'blog_profile_edit' => true,
       'blog_profile_messages' => true,
       'message_show' => true,
       'message_new' => true,
       'message_create' => true,
       'message_edit' => true,
       'message_update' => true,
       'message_delete' => true,
       'Cityblog_tribe_users' => true,
       'Cityblog_tribes' => true,
       'GeoBundle_polygon_region' => true,
       'GeoBundle_dest' => true,
       'GeoBundle_destination_show' => true,
       'dest_new' => true,
       'GeoBundle_destination_create' => true,
       'GeoBundle_destination_update' => true,
       'dest_edit' => true,
       'GeoBundle_destination_showtribe' => true,
       'GeoBundle_resi' => true,
       'GeoBundle_residence_show' => true,
       'resi_new' => true,
       'GeoBundle_residence_create' => true,
       'GeoBundle_residence_update' => true,
       'resi_edit' => true,
       'GeoBundle_residence_showtribe' => true,
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
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
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

    private function getdestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\DemoBundle\\Controller\\DestinationController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/dest/dest/',  ),));
    }

    private function getdest_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\DemoBundle\\Controller\\DestinationController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/dest/dest',  ),));
    }

    private function getdest_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\DemoBundle\\Controller\\DestinationController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/dest/dest/create',  ),));
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

    private function getCityblog_homeRouteInfo()
    {
        return array(array (  0 => 'type',  1 => 'page',), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::indexAction',  'type' => 'destination',  'page' => 1,), array (  'page' => '\\d+',  'type' => 'destination|residence',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'destination|residence',    3 => 'type',  ),  2 =>   array (    0 => 'text',    1 => '/home',  ),));
    }

    private function getblog_profile_infoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\ProfileController::info_showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/informations',  ),));
    }

    private function getblog_profile_placesRouteInfo()
    {
        return array(array (  0 => 'type',), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::places_showAction',), array (  'type' => 'destination|residence',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => 'destination|residence',    3 => 'type',  ),  1 =>   array (    0 => 'text',    1 => '/profile/places',  ),));
    }

    private function getblog_avatarRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\ProfileController::avatar_showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/avatar',  ),));
    }

    private function getblog_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getblog_profile_messagesRouteInfo()
    {
        return array(array (  0 => 'page',  1 => 'id',), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\ProfileController::messagesAction',  'page' => 1,  'id' => 0,), array (  'page' => '\\d+',  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'page',  ),  2 =>   array (    0 => 'text',    1 => '/profile/messages',  ),));
    }

    private function getmessage_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/message',  ),));
    }

    private function getmessage_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/message/new',  ),));
    }

    private function getmessage_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/message/create',  ),));
    }

    private function getmessage_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/message',  ),));
    }

    private function getmessage_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/message',  ),));
    }

    private function getmessage_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/message',  ),));
    }

    private function getCityblog_tribe_usersRouteInfo()
    {
        return array(array (  0 => 'type',), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::usersAction',  'type' => 'destination',), array (  'type' => 'destination|residence',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => 'destination|residence',    3 => 'type',  ),  1 =>   array (    0 => 'text',    1 => '/home/users',  ),));
    }

    private function getCityblog_tribesRouteInfo()
    {
        return array(array (  0 => 'type',), array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::tribesAction',  'type' => 'destination',), array (  'type' => 'destination|residence',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => 'destination|residence',    3 => 'type',  ),  1 =>   array (    0 => 'text',    1 => '/home/tribes',  ),));
    }

    private function getGeoBundle_polygon_regionRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\DefaultController::polygonAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/places/polygon',  ),));
    }

    private function getGeoBundle_destRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\DestinationController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/places/destination/',  ),));
    }

    private function getGeoBundle_destination_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\DestinationController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/places/destination/show',  ),));
    }

    private function getdest_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\DestinationController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/places/destination/new',  ),));
    }

    private function getGeoBundle_destination_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\DestinationController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/places/destination/create',  ),));
    }

    private function getGeoBundle_destination_updateRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\DestinationController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/places/destination/update',  ),));
    }

    private function getdest_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\DestinationController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/places/destination/edit',  ),));
    }

    private function getGeoBundle_destination_showtribeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\DestinationController::showtribeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/places/destination/showtribe',  ),));
    }

    private function getGeoBundle_resiRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\ResidenceController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/places/residence/',  ),));
    }

    private function getGeoBundle_residence_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\ResidenceController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/places/residence/show',  ),));
    }

    private function getresi_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\ResidenceController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/places/residence/new',  ),));
    }

    private function getGeoBundle_residence_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\ResidenceController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/places/residence/create',  ),));
    }

    private function getGeoBundle_residence_updateRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\ResidenceController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/places/residence/update',  ),));
    }

    private function getresi_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\ResidenceController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/places/residence/edit',  ),));
    }

    private function getGeoBundle_residence_showtribeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'City\\GeoBundle\\Controller\\ResidenceController::showtribeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/places/residence/showtribe',  ),));
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
