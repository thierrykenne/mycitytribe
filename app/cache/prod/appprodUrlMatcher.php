<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        if (0 === strpos($pathinfo, '/dest')) {
            if (0 === strpos($pathinfo, '/dest/dest')) {
                // dest
                if (rtrim($pathinfo, '/') === '/dest/dest') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dest');
                    }
                    return array (  '_controller' => 'City\\DemoBundle\\Controller\\DestinationController::indexAction',  '_route' => 'dest',);
                }

                // dest_show
                if (preg_match('#^/dest/dest/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\DemoBundle\\Controller\\DestinationController::showAction',)), array('_route' => 'dest_show'));
                }

                // dest_create
                if ($pathinfo === '/dest/dest/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dest_create;
                    }
                    return array (  '_controller' => 'City\\DemoBundle\\Controller\\DestinationController::createAction',  '_route' => 'dest_create',);
                }
                not_dest_create:

                // dest_update
                if (preg_match('#^/dest/dest/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dest_update;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\DemoBundle\\Controller\\DestinationController::updateAction',)), array('_route' => 'dest_update'));
                }
                not_dest_update:

                // dest_delete
                if (preg_match('#^/dest/dest/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dest_delete;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\DemoBundle\\Controller\\DestinationController::deleteAction',)), array('_route' => 'dest_delete'));
                }
                not_dest_delete:

            }

            if (0 === strpos($pathinfo, '/dest/user')) {
                // user
                if (rtrim($pathinfo, '/') === '/dest/user') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user');
                    }
                    return array (  '_controller' => 'City\\DemoBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
                }

                // user_show
                if (preg_match('#^/dest/user/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\DemoBundle\\Controller\\UserController::showAction',)), array('_route' => 'user_show'));
                }

                // user_new
                if ($pathinfo === '/dest/user/new') {
                    return array (  '_controller' => 'City\\DemoBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }

                // user_create
                if ($pathinfo === '/dest/user/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_create;
                    }
                    return array (  '_controller' => 'City\\DemoBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
                }
                not_user_create:

                // user_edit
                if (preg_match('#^/dest/user/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\DemoBundle\\Controller\\UserController::editAction',)), array('_route' => 'user_edit'));
                }

                // user_update
                if (preg_match('#^/dest/user/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_update;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\DemoBundle\\Controller\\UserController::updateAction',)), array('_route' => 'user_update'));
                }
                not_user_update:

                // user_delete
                if (preg_match('#^/dest/user/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_delete;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\DemoBundle\\Controller\\UserController::deleteAction',)), array('_route' => 'user_delete'));
                }
                not_user_delete:

            }

        }

        // Cityblog_home
        if (0 === strpos($pathinfo, '/home') && preg_match('#^/home(?:/(?P<type>destination|residence)(?:/(?P<page>\\d+))?)?$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::indexAction',  'type' => 'destination',  'page' => 1,)), array('_route' => 'Cityblog_home'));
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // blog_profile_info
            if ($pathinfo === '/profile/informations') {
                return array (  '_controller' => 'City\\CitytribeBundle\\Controller\\ProfileController::info_showAction',  '_route' => 'blog_profile_info',);
            }

            // blog_profile_places
            if (0 === strpos($pathinfo, '/profile/places') && preg_match('#^/profile/places/(?P<type>destination|residence)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::places_showAction',)), array('_route' => 'blog_profile_places'));
            }

            // blog_avatar
            if ($pathinfo === '/profile/avatar') {
                return array (  '_controller' => 'City\\CitytribeBundle\\Controller\\ProfileController::avatar_showAction',  '_route' => 'blog_avatar',);
            }

            // blog_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'City\\CitytribeBundle\\Controller\\ProfileController::editAction',  '_route' => 'blog_profile_edit',);
            }

            // blog_profile_messages
            if (0 === strpos($pathinfo, '/profile/messages') && preg_match('#^/profile/messages(?:/(?P<page>\\d+)(?:/(?P<id>\\d+))?)?$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\CitytribeBundle\\Controller\\ProfileController::messagesAction',  'page' => 1,  'id' => 0,)), array('_route' => 'blog_profile_messages'));
            }

        }

        if (0 === strpos($pathinfo, '/message')) {
            // message_show
            if (preg_match('#^/message/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::showAction',)), array('_route' => 'message_show'));
            }

            // message_new
            if ($pathinfo === '/message/new') {
                return array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::newAction',  '_route' => 'message_new',);
            }

            // message_create
            if ($pathinfo === '/message/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_message_create;
                }
                return array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::createAction',  '_route' => 'message_create',);
            }
            not_message_create:

            // message_edit
            if (preg_match('#^/message/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::editAction',)), array('_route' => 'message_edit'));
            }

            // message_update
            if (preg_match('#^/message/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_message_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::updateAction',)), array('_route' => 'message_update'));
            }
            not_message_update:

            // message_delete
            if (preg_match('#^/message/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_message_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::deleteAction',)), array('_route' => 'message_delete'));
            }
            not_message_delete:

        }

        // Cityblog_tribe_users
        if (0 === strpos($pathinfo, '/home/users') && preg_match('#^/home/users(?:/(?P<type>destination|residence))?$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::usersAction',  'type' => 'destination',)), array('_route' => 'Cityblog_tribe_users'));
        }

        // Cityblog_tribes
        if (0 === strpos($pathinfo, '/home/tribes') && preg_match('#^/home/tribes(?:/(?P<type>destination|residence))?$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::tribesAction',  'type' => 'destination',)), array('_route' => 'Cityblog_tribes'));
        }

        // Default
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Default');
            }
            return array (  '_controller' => 'City\\CitytribeBundle\\Controller\\BlogController::indexAction',  'type' => 'destination',  'page' => 1,  '_route' => 'Default',);
        }

        if (0 === strpos($pathinfo, '/places')) {
            // GeoBundle_polygon_region
            if ($pathinfo === '/places/polygon') {
                return array (  '_controller' => 'City\\GeoBundle\\Controller\\DefaultController::polygonAction',  '_route' => 'GeoBundle_polygon_region',);
            }

            if (0 === strpos($pathinfo, '/places/destination')) {
                // GeoBundle_dest
                if (rtrim($pathinfo, '/') === '/places/destination') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'GeoBundle_dest');
                    }
                    return array (  '_controller' => 'City\\GeoBundle\\Controller\\DestinationController::indexAction',  '_route' => 'GeoBundle_dest',);
                }

                // GeoBundle_destination_show
                if ($pathinfo === '/places/destination/show') {
                    return array (  '_controller' => 'City\\GeoBundle\\Controller\\DestinationController::showAction',  '_route' => 'GeoBundle_destination_show',);
                }

                // dest_new
                if ($pathinfo === '/places/destination/new') {
                    return array (  '_controller' => 'City\\GeoBundle\\Controller\\DestinationController::newAction',  '_route' => 'dest_new',);
                }

                // GeoBundle_destination_create
                if ($pathinfo === '/places/destination/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_GeoBundle_destination_create;
                    }
                    return array (  '_controller' => 'City\\GeoBundle\\Controller\\DestinationController::createAction',  '_route' => 'GeoBundle_destination_create',);
                }
                not_GeoBundle_destination_create:

                // GeoBundle_destination_update
                if ($pathinfo === '/places/destination/update') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_GeoBundle_destination_update;
                    }
                    return array (  '_controller' => 'City\\GeoBundle\\Controller\\DestinationController::updateAction',  '_route' => 'GeoBundle_destination_update',);
                }
                not_GeoBundle_destination_update:

                // dest_edit
                if ($pathinfo === '/places/destination/edit') {
                    return array (  '_controller' => 'City\\GeoBundle\\Controller\\DestinationController::editAction',  '_route' => 'dest_edit',);
                }

                // GeoBundle_destination_showtribe
                if ($pathinfo === '/places/destination/showtribe') {
                    return array (  '_controller' => 'City\\GeoBundle\\Controller\\DestinationController::showtribeAction',  '_route' => 'GeoBundle_destination_showtribe',);
                }

            }

            if (0 === strpos($pathinfo, '/places/residence')) {
                // GeoBundle_resi
                if (rtrim($pathinfo, '/') === '/places/residence') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'GeoBundle_resi');
                    }
                    return array (  '_controller' => 'City\\GeoBundle\\Controller\\ResidenceController::indexAction',  '_route' => 'GeoBundle_resi',);
                }

                // GeoBundle_residence_show
                if ($pathinfo === '/places/residence/show') {
                    return array (  '_controller' => 'City\\GeoBundle\\Controller\\ResidenceController::showAction',  '_route' => 'GeoBundle_residence_show',);
                }

                // resi_new
                if ($pathinfo === '/places/residence/new') {
                    return array (  '_controller' => 'City\\GeoBundle\\Controller\\ResidenceController::newAction',  '_route' => 'resi_new',);
                }

                // GeoBundle_residence_create
                if ($pathinfo === '/places/residence/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_GeoBundle_residence_create;
                    }
                    return array (  '_controller' => 'City\\GeoBundle\\Controller\\ResidenceController::createAction',  '_route' => 'GeoBundle_residence_create',);
                }
                not_GeoBundle_residence_create:

                // GeoBundle_residence_update
                if ($pathinfo === '/places/residence/update') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_GeoBundle_residence_update;
                    }
                    return array (  '_controller' => 'City\\GeoBundle\\Controller\\ResidenceController::updateAction',  '_route' => 'GeoBundle_residence_update',);
                }
                not_GeoBundle_residence_update:

                // resi_edit
                if ($pathinfo === '/places/residence/edit') {
                    return array (  '_controller' => 'City\\GeoBundle\\Controller\\ResidenceController::editAction',  '_route' => 'resi_edit',);
                }

                // GeoBundle_residence_showtribe
                if ($pathinfo === '/places/residence/showtribe') {
                    return array (  '_controller' => 'City\\GeoBundle\\Controller\\ResidenceController::showtribeAction',  '_route' => 'GeoBundle_residence_showtribe',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/Blog')) {
            if (0 === strpos($pathinfo, '/Blog/crud')) {
                // article
                if (rtrim($pathinfo, '/') === '/Blog/crud') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'article');
                    }
                    return array (  '_controller' => 'City\\BlogBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article',);
                }

                // article_show
                if (preg_match('#^/Blog/crud/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\BlogBundle\\Controller\\ArticleController::showAction',)), array('_route' => 'article_show'));
                }

                // article_new
                if ($pathinfo === '/Blog/crud/new') {
                    return array (  '_controller' => 'City\\BlogBundle\\Controller\\ArticleController::newAction',  '_route' => 'article_new',);
                }

                // article_create
                if ($pathinfo === '/Blog/crud/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_article_create;
                    }
                    return array (  '_controller' => 'City\\BlogBundle\\Controller\\ArticleController::createAction',  '_route' => 'article_create',);
                }
                not_article_create:

                // article_edit
                if (preg_match('#^/Blog/crud/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\BlogBundle\\Controller\\ArticleController::editAction',)), array('_route' => 'article_edit'));
                }

                // article_update
                if (preg_match('#^/Blog/crud/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_article_update;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\BlogBundle\\Controller\\ArticleController::updateAction',)), array('_route' => 'article_update'));
                }
                not_article_update:

                // article_delete
                if (preg_match('#^/Blog/crud/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_article_delete;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\BlogBundle\\Controller\\ArticleController::deleteAction',)), array('_route' => 'article_delete'));
                }
                not_article_delete:

            }

            // cityblog
            if (preg_match('#^/Blog(?:/(?P<page>\\d+))?$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\BlogBundle\\Controller\\BlogController::listeAction',  'page' => 1,)), array('_route' => 'cityblog'));
            }

            // cityblog_voir
            if (preg_match('#^/Blog/(?P<slug>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\BlogBundle\\Controller\\BlogController::voirAction',)), array('_route' => 'cityblog_voir'));
            }

            // cityblog_ajouter
            if ($pathinfo === '/Blog/ajouter/article') {
                return array (  '_controller' => 'City\\BlogBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'cityblog_ajouter',);
            }

            // cityblog_modifier
            if (0 === strpos($pathinfo, '/Blog/modifier') && preg_match('#^/Blog/modifier/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\BlogBundle\\Controller\\BlogController::modifierAction',)), array('_route' => 'cityblog_modifier'));
            }

            // cityblog_supprimer
            if (0 === strpos($pathinfo, '/Blog/supprimer') && preg_match('#^/Blog/supprimer/(?P<id>\\d+)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\BlogBundle\\Controller\\BlogController::supprimerAction',)), array('_route' => 'cityblog_supprimer'));
            }

        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }
                return array (  '_controller' => 'City\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }
                return array (  '_controller' => 'City\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'City\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }
                return array (  '_controller' => 'City\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        if (0 === strpos($pathinfo, '/api')) {
            // fos_comment_new_threads
            if (0 === strpos($pathinfo, '/api/threads/new') && preg_match('#^/api/threads/new(?:\\.(?P<_format>[^/]+?))?$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_threads;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadsAction',  '_format' => NULL,)), array('_route' => 'fos_comment_new_threads'));
            }
            not_fos_comment_new_threads:

            // fos_comment_get_thread
            if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/\\.]+?)(?:\\.(?P<_format>[^\\.]+?))?$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadAction',  '_format' => NULL,)), array('_route' => 'fos_comment_get_thread'));
            }
            not_fos_comment_get_thread:

            // fos_comment_post_threads
            if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads(?:\\.(?P<_format>[^/]+?))?$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_threads;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadsAction',  '_format' => NULL,)), array('_route' => 'fos_comment_post_threads'));
            }
            not_fos_comment_post_threads:

            // fos_comment_new_thread_comments
            if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]+?)/comments/new(?:\\.(?P<_format>[^/]+?))?$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_thread_comments;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentsAction',  '_format' => NULL,)), array('_route' => 'fos_comment_new_thread_comments'));
            }
            not_fos_comment_new_thread_comments:

            // fos_comment_get_thread_comment
            if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]+?)/comments/(?P<commentId>[^/\\.]+?)(?:\\.(?P<_format>[^\\.]+?))?$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comment;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentAction',  '_format' => NULL,)), array('_route' => 'fos_comment_get_thread_comment'));
            }
            not_fos_comment_get_thread_comment:

            // fos_comment_get_thread_comments
            if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]+?)/comments(?:\\.(?P<_format>[^/]+?))?$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comments;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentsAction',  '_format' => NULL,)), array('_route' => 'fos_comment_get_thread_comments'));
            }
            not_fos_comment_get_thread_comments:

            // fos_comment_post_thread_comments
            if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]+?)/comments(?:\\.(?P<_format>[^/]+?))?$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_thread_comments;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentsAction',  '_format' => NULL,)), array('_route' => 'fos_comment_post_thread_comments'));
            }
            not_fos_comment_post_thread_comments:

            // fos_comment_get_thread_comment_votes
            if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]+?)/comments/(?P<commentId>[^/]+?)/votes(?:\\.(?P<_format>[^/]+?))?$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comment_votes;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentVotesAction',  '_format' => NULL,)), array('_route' => 'fos_comment_get_thread_comment_votes'));
            }
            not_fos_comment_get_thread_comment_votes:

            // fos_comment_new_thread_comment_votes
            if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]+?)/comments/(?P<commentId>[^/]+?)/votes/new(?:\\.(?P<_format>[^/]+?))?$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_thread_comment_votes;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentVotesAction',  '_format' => NULL,)), array('_route' => 'fos_comment_new_thread_comment_votes'));
            }
            not_fos_comment_new_thread_comment_votes:

            // fos_comment_post_thread_comment_votes
            if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]+?)/comments/(?P<commentId>[^/]+?)/votes(?:\\.(?P<_format>[^/]+?))?$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_thread_comment_votes;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentVotesAction',  '_format' => NULL,)), array('_route' => 'fos_comment_post_thread_comment_votes'));
            }
            not_fos_comment_post_thread_comment_votes:

        }

        // _security_check
        if ($pathinfo === '/facebook/check') {
            return array('_route' => '_security_check');
        }

        // _security_logout
        if ($pathinfo === '/logout') {
            return array('_route' => '_security_logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
