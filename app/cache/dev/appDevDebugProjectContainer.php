<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();

        $this->set('service_container', $this);

        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
    }

    /**
     * Gets the 'acme.demo.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Acme\DemoBundle\ControllerListener A Acme\DemoBundle\ControllerListener instance.
     */
    protected function getAcme_Demo_ListenerService()
    {
        return $this->services['acme.demo.listener'] = new \Acme\DemoBundle\ControllerListener($this->get('twig.extension.acme.demo'));
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Annotations\FileCacheReader A Doctrine\Common\Annotations\FileCacheReader instance.
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), '/opt/lampp/htdocs/Symfony/app/cache/dev/annotations', true);
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance.
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('assetic.asset_factory');
        $b = $this->get('templating.loader');

        $c = new \Assetic\Cache\ConfigCache('/opt/lampp/htdocs/Symfony/app/cache/dev/assetic/config');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($a, array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig')), $c, true), 'php' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Symfony\Bundle\AsseticBundle\Factory\Loader\AsseticHelperFormulaLoader($a), $c, true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FrameworkBundle', '/opt/lampp/htdocs/Symfony/app/Resources/FrameworkBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FrameworkBundle', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FrameworkBundle', '/opt/lampp/htdocs/Symfony/app/Resources/FrameworkBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FrameworkBundle', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SecurityBundle', '/opt/lampp/htdocs/Symfony/app/Resources/SecurityBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SecurityBundle', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SecurityBundle', '/opt/lampp/htdocs/Symfony/app/Resources/SecurityBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SecurityBundle', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'TwigBundle', '/opt/lampp/htdocs/Symfony/app/Resources/TwigBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'TwigBundle', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'TwigBundle', '/opt/lampp/htdocs/Symfony/app/Resources/TwigBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'TwigBundle', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'MonologBundle', '/opt/lampp/htdocs/Symfony/app/Resources/MonologBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'MonologBundle', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/MonologBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'MonologBundle', '/opt/lampp/htdocs/Symfony/app/Resources/MonologBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'MonologBundle', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/MonologBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SwiftmailerBundle', '/opt/lampp/htdocs/Symfony/app/Resources/SwiftmailerBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SwiftmailerBundle', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/SwiftmailerBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SwiftmailerBundle', '/opt/lampp/htdocs/Symfony/app/Resources/SwiftmailerBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SwiftmailerBundle', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/SwiftmailerBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DoctrineBundle', '/opt/lampp/htdocs/Symfony/app/Resources/DoctrineBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DoctrineBundle', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/DoctrineBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DoctrineBundle', '/opt/lampp/htdocs/Symfony/app/Resources/DoctrineBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DoctrineBundle', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/DoctrineBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AsseticBundle', '/opt/lampp/htdocs/Symfony/app/Resources/AsseticBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AsseticBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/Symfony/Bundle/AsseticBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AsseticBundle', '/opt/lampp/htdocs/Symfony/app/Resources/AsseticBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AsseticBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/Symfony/Bundle/AsseticBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioFrameworkExtraBundle', '/opt/lampp/htdocs/Symfony/app/Resources/SensioFrameworkExtraBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioFrameworkExtraBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/Sensio/Bundle/FrameworkExtraBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioFrameworkExtraBundle', '/opt/lampp/htdocs/Symfony/app/Resources/SensioFrameworkExtraBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioFrameworkExtraBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/Sensio/Bundle/FrameworkExtraBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'JMSSecurityExtraBundle', '/opt/lampp/htdocs/Symfony/app/Resources/JMSSecurityExtraBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'JMSSecurityExtraBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/JMS/SecurityExtraBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'JMSSecurityExtraBundle', '/opt/lampp/htdocs/Symfony/app/Resources/JMSSecurityExtraBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'JMSSecurityExtraBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/JMS/SecurityExtraBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'JMSSerializerBundle', '/opt/lampp/htdocs/Symfony/app/Resources/JMSSerializerBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'JMSSerializerBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/JMS/SerializerBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'JMSSerializerBundle', '/opt/lampp/htdocs/Symfony/app/Resources/JMSSerializerBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'JMSSerializerBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/JMS/SerializerBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CityBlogBundle', '/opt/lampp/htdocs/Symfony/app/Resources/CityBlogBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CityBlogBundle', '/opt/lampp/htdocs/Symfony/src/City/BlogBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CityBlogBundle', '/opt/lampp/htdocs/Symfony/app/Resources/CityBlogBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CityBlogBundle', '/opt/lampp/htdocs/Symfony/src/City/BlogBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CityUserBundle', '/opt/lampp/htdocs/Symfony/app/Resources/CityUserBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CityUserBundle', '/opt/lampp/htdocs/Symfony/src/City/UserBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CityUserBundle', '/opt/lampp/htdocs/Symfony/app/Resources/CityUserBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CityUserBundle', '/opt/lampp/htdocs/Symfony/src/City/UserBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSUserBundle', '/opt/lampp/htdocs/Symfony/app/Resources/FOSUserBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSUserBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSUserBundle', '/opt/lampp/htdocs/Symfony/app/Resources/FOSUserBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSUserBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSCommentBundle', '/opt/lampp/htdocs/Symfony/app/Resources/FOSCommentBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSCommentBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/CommentBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSCommentBundle', '/opt/lampp/htdocs/Symfony/app/Resources/FOSCommentBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSCommentBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/CommentBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSRestBundle', '/opt/lampp/htdocs/Symfony/app/Resources/FOSRestBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSRestBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/RestBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSRestBundle', '/opt/lampp/htdocs/Symfony/app/Resources/FOSRestBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSRestBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/RestBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSFacebookBundle', '/opt/lampp/htdocs/Symfony/app/Resources/FOSFacebookBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSFacebookBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/FacebookBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSFacebookBundle', '/opt/lampp/htdocs/Symfony/app/Resources/FOSFacebookBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSFacebookBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/FacebookBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CityGeoBundle', '/opt/lampp/htdocs/Symfony/app/Resources/CityGeoBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CityGeoBundle', '/opt/lampp/htdocs/Symfony/src/City/GeoBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CityGeoBundle', '/opt/lampp/htdocs/Symfony/app/Resources/CityGeoBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CityGeoBundle', '/opt/lampp/htdocs/Symfony/src/City/GeoBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CitytribeBundle', '/opt/lampp/htdocs/Symfony/app/Resources/CitytribeBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CitytribeBundle', '/opt/lampp/htdocs/Symfony/src/City/CitytribeBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CitytribeBundle', '/opt/lampp/htdocs/Symfony/app/Resources/CitytribeBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CitytribeBundle', '/opt/lampp/htdocs/Symfony/src/City/CitytribeBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'KnpMenuBundle', '/opt/lampp/htdocs/Symfony/app/Resources/KnpMenuBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'KnpMenuBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/Knp/Bundle/MenuBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'KnpMenuBundle', '/opt/lampp/htdocs/Symfony/app/Resources/KnpMenuBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'KnpMenuBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/Knp/Bundle/MenuBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CityDemoBundle', '/opt/lampp/htdocs/Symfony/app/Resources/CityDemoBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CityDemoBundle', '/opt/lampp/htdocs/Symfony/src/City/DemoBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CityDemoBundle', '/opt/lampp/htdocs/Symfony/app/Resources/CityDemoBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'CityDemoBundle', '/opt/lampp/htdocs/Symfony/src/City/DemoBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'IsdevTwitterBootstrapBundle', '/opt/lampp/htdocs/Symfony/app/Resources/IsdevTwitterBootstrapBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'IsdevTwitterBootstrapBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/Isdev/TwitterBootstrapBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'IsdevTwitterBootstrapBundle', '/opt/lampp/htdocs/Symfony/app/Resources/IsdevTwitterBootstrapBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'IsdevTwitterBootstrapBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/Isdev/TwitterBootstrapBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AcmeDemoBundle', '/opt/lampp/htdocs/Symfony/app/Resources/AcmeDemoBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AcmeDemoBundle', '/opt/lampp/htdocs/Symfony/src/Acme/DemoBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AcmeDemoBundle', '/opt/lampp/htdocs/Symfony/app/Resources/AcmeDemoBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AcmeDemoBundle', '/opt/lampp/htdocs/Symfony/src/Acme/DemoBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'WebProfilerBundle', '/opt/lampp/htdocs/Symfony/app/Resources/WebProfilerBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'WebProfilerBundle', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'WebProfilerBundle', '/opt/lampp/htdocs/Symfony/app/Resources/WebProfilerBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'WebProfilerBundle', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioDistributionBundle', '/opt/lampp/htdocs/Symfony/app/Resources/SensioDistributionBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioDistributionBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/Sensio/Bundle/DistributionBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioDistributionBundle', '/opt/lampp/htdocs/Symfony/app/Resources/SensioDistributionBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioDistributionBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/Sensio/Bundle/DistributionBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioGeneratorBundle', '/opt/lampp/htdocs/Symfony/app/Resources/SensioGeneratorBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioGeneratorBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/Sensio/Bundle/GeneratorBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioGeneratorBundle', '/opt/lampp/htdocs/Symfony/app/Resources/SensioGeneratorBundle/views', '/^[^.]+\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioGeneratorBundle', '/opt/lampp/htdocs/Symfony/vendor/bundles/Sensio/Bundle/GeneratorBundle/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, '', '/opt/lampp/htdocs/Symfony/app/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, '', '/opt/lampp/htdocs/Symfony/app/Resources/views', '/^[^.]+\\.[^.]+\\.php$/'), 'php');

        return $instance;
    }

    /**
     * Gets the 'assetic.controller' service.
     *
     * @return Symfony\Bundle\AsseticBundle\Controller\AsseticController A Symfony\Bundle\AsseticBundle\Controller\AsseticController instance.
     */
    protected function getAssetic_ControllerService()
    {
        return new \Symfony\Bundle\AsseticBundle\Controller\AsseticController($this->get('request'), $this->get('assetic.asset_manager'), $this->get('assetic.cache'), false, $this->get('profiler'));
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance.
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter.less' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Filter\LessFilter A Assetic\Filter\LessFilter instance.
     */
    protected function getAssetic_Filter_LessService()
    {
        $this->services['assetic.filter.less'] = $instance = new \Assetic\Filter\LessFilter('/usr/bin/node', array(0 => '/home/thierry/bin', 1 => '/usr/lib/node_modules'));

        $instance->setCompress(NULL);

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.yui_css' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Filter\Yui\CssCompressorFilter A Assetic\Filter\Yui\CssCompressorFilter instance.
     */
    protected function getAssetic_Filter_YuiCssService()
    {
        $this->services['assetic.filter.yui_css'] = $instance = new \Assetic\Filter\Yui\CssCompressorFilter('/opt/lampp/htdocs/Symfony/app/Resources/java/yuicompressor.jar', '/usr/bin/java');

        $instance->setCharset('UTF-8');

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.yui_js' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Filter\Yui\JsCompressorFilter A Assetic\Filter\Yui\JsCompressorFilter instance.
     */
    protected function getAssetic_Filter_YuiJsService()
    {
        $this->services['assetic.filter.yui_js'] = $instance = new \Assetic\Filter\Yui\JsCompressorFilter('/opt/lampp/htdocs/Symfony/app/Resources/java/yuicompressor.jar', '/usr/bin/java');

        $instance->setCharset('UTF-8');
        $instance->setNomunge(NULL);
        $instance->setPreserveSemi(NULL);
        $instance->setDisableOptimizations(NULL);

        return $instance;
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance.
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite', 'less' => 'assetic.filter.less', 'yui_css' => 'assetic.filter.yui_css', 'yui_js' => 'assetic.filter.yui_js'));
    }

    /**
     * Gets the 'assetic.helper.dynamic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\AsseticBundle\Templating\DynamicAsseticHelper A Symfony\Bundle\AsseticBundle\Templating\DynamicAsseticHelper instance.
     */
    protected function getAssetic_Helper_DynamicService()
    {
        return $this->services['assetic.helper.dynamic'] = new \Symfony\Bundle\AsseticBundle\Templating\DynamicAsseticHelper($this->get('templating.helper.router'), $this->get('assetic.asset_factory'));
    }

    /**
     * Gets the 'assetic.request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\AsseticBundle\EventListener\RequestListener A Symfony\Bundle\AsseticBundle\EventListener\RequestListener instance.
     */
    protected function getAssetic_RequestListenerService()
    {
        return $this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener();
    }

    /**
     * Gets the 'bcc.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return City\CitytribeBundle\Twig\Extension\TwigExtension A City\CitytribeBundle\Twig\Extension\TwigExtension instance.
     */
    protected function getBcc_Twig_ExtensionService()
    {
        return $this->services['bcc.twig.extension'] = new \City\CitytribeBundle\Twig\Extension\TwigExtension();
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance.
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.name_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, '/opt/lampp/htdocs/Symfony/app/Resources');

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine'))));
    }

    /**
     * Gets the 'citytribe.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return City\CitytribeBundle\Service\CitytribeUser A City\CitytribeBundle\Service\CitytribeUser instance.
     */
    protected function getCitytribe_UserService()
    {
        return $this->services['citytribe.user'] = new \City\CitytribeBundle\Service\CitytribeUser();
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector instance.
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\DoctrineBundle\Registry A Symfony\Bundle\DoctrineBundle\Registry instance.
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Symfony\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\DoctrineBundle\ConnectionFactory A Symfony\Bundle\DoctrineBundle\ConnectionFactory instance.
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Symfony\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return stdClass A stdClass instance.
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();
        $a->setSQLLogger($this->get('doctrine.dbal.logger'));

        $b = new \Doctrine\Common\EventManager();
        $b->addEventSubscriber(new \Doctrine\DBAL\Event\Listeners\MysqlSessionInit('UTF8'));
        $b->addEventSubscriber(new \FOS\UserBundle\Entity\UserListener($this));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('dbname' => 'symfony', 'host' => '194.116.73.79', 'port' => '', 'user' => 'root', 'password' => 'thken165', 'driver' => 'pdo_mysql', 'driverOptions' => array()), $a, $b, array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = $this->get('annotation_reader');

        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2orm_default_d1bac9e8d46fc077c0a4232c0a8ea9de');

        $c = new \Doctrine\Common\Cache\ArrayCache();
        $c->setNamespace('sf2orm_default_d1bac9e8d46fc077c0a4232c0a8ea9de');

        $d = new \Doctrine\Common\Cache\ArrayCache();
        $d->setNamespace('sf2orm_default_d1bac9e8d46fc077c0a4232c0a8ea9de');

        $e = new \Symfony\Bridge\Doctrine\Annotations\IndexedReader($a);

        $f = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($e, array(0 => '/opt/lampp/htdocs/Symfony/src/City/UserBundle/Entity', 1 => '/opt/lampp/htdocs/Symfony/src/City/GeoBundle/Entity', 2 => '/opt/lampp/htdocs/Symfony/src/City/CitytribeBundle/Entity'));

        $g = new \Symfony\Bridge\Doctrine\Mapping\Driver\XmlDriver(array(0 => '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/config/doctrine', 1 => '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/CommentBundle/Resources/config/doctrine'));
        $g->setNamespacePrefixes(array('/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/config/doctrine' => 'FOS\\UserBundle\\Entity', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/CommentBundle/Resources/config/doctrine' => 'FOS\\CommentBundle\\Entity'));
        $g->setGlobalBasename('mapping');

        $h = new \Doctrine\ORM\Mapping\Driver\DriverChain();
        $h->addDriver($f, 'City\\UserBundle\\Entity');
        $h->addDriver($f, 'City\\GeoBundle\\Entity');
        $h->addDriver($f, 'City\\CitytribeBundle\\Entity');
        $h->addDriver($g, 'FOS\\UserBundle\\Entity');
        $h->addDriver($g, 'FOS\\CommentBundle\\Entity');

        $i = new \Doctrine\ORM\Configuration();
        $i->setEntityNamespaces(array('CityUserBundle' => 'City\\UserBundle\\Entity', 'FOSUserBundle' => 'FOS\\UserBundle\\Entity', 'FOSCommentBundle' => 'FOS\\CommentBundle\\Entity', 'CityGeoBundle' => 'City\\GeoBundle\\Entity', 'CitytribeBundle' => 'City\\CitytribeBundle\\Entity'));
        $i->setMetadataCacheImpl($b);
        $i->setQueryCacheImpl($c);
        $i->setResultCacheImpl($d);
        $i->setMetadataDriverImpl($h);
        $i->setProxyDir('/opt/lampp/htdocs/Symfony/app/cache/dev/doctrine/orm/Proxies');
        $i->setProxyNamespace('Proxies');
        $i->setAutoGenerateProxyClasses(true);
        $i->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');

        return $this->services['doctrine.orm.default_entity_manager'] = call_user_func(array('Doctrine\\ORM\\EntityManager', 'create'), $this->get('doctrine.dbal.default_connection'), $i);
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance.
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Validator\EntityInitializer A Symfony\Bridge\Doctrine\Validator\EntityInitializer instance.
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\EntityInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Debug\TraceableEventDispatcher A Symfony\Bundle\FrameworkBundle\Debug\TraceableEventDispatcher instance.
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Bundle\FrameworkBundle\Debug\TraceableEventDispatcher($this, $this->get('monolog.logger.event'));

        $instance->addListenerService('kernel.request', array(0 => 'router_listener', 1 => 'onEarlyKernelRequest'), 255);
        $instance->addListenerService('kernel.request', array(0 => 'router_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'response_listener', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'session_listener', 1 => 'onKernelRequest'), 128);
        $instance->addListenerService('kernel.response', array(0 => 'profiler_listener', 1 => 'onKernelResponse'), -100);
        $instance->addListenerService('kernel.exception', array(0 => 'profiler_listener', 1 => 'onKernelException'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'profiler_listener', 1 => 'onKernelRequest'), 1024);
        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.request', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'security.firewall', 1 => 'onKernelRequest'), 64);
        $instance->addListenerService('kernel.response', array(0 => 'security.rememberme.response_listener', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.exception', array(0 => 'twig.exception_listener', 1 => 'onKernelException'), -128);
        $instance->addListenerService('kernel.response', array(0 => 'monolog.handler.firephp', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'assetic.request_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'sensio_framework_extra.controller.listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'sensio_framework_extra.converter.listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'sensio_framework_extra.view.listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.view', array(0 => 'sensio_framework_extra.view.listener', 1 => 'onKernelView'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'sensio_framework_extra.cache.listener', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'security.extra.controller_listener', 1 => 'onCoreController'), -255);
        $instance->addListenerService('security.interactive_login', array(0 => 'fos_user.security.interactive_login_listener', 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListenerService('fos_comment.vote.pre_persist', array(0 => 'fos_comment.listener.comment_vote_score', 1 => 'onVotePersist'), 0);
        $instance->addListenerService('fos_comment.comment.pre_persist', array(0 => 'fos_comment.listener.thread_counters', 1 => 'onCommentPersist'), 0);
        $instance->addListenerService('fos_comment.thread.create', array(0 => 'fos_comment.listener.thread_permalink', 1 => 'onThreadCreate'), 0);
        $instance->addListenerService('fos_comment.comment.pre_persist', array(0 => 'fos_comment.listener.comment_blamer', 1 => 'blame'), 0);
        $instance->addListenerService('fos_comment.vote.pre_persist', array(0 => 'fos_comment.listener.vote_blamer', 1 => 'blame'), 0);
        $instance->addListenerService('fos_comment.comment.pre_persist', array(0 => 'fos_comment.listener.closed_threads', 1 => 'onCommentPersist'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'fos_rest.view_response_listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.view', array(0 => 'fos_rest.view_response_listener', 1 => 'onKernelView'), 100);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.body_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'fos_rest.format_listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'acme.demo.listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'web_profiler.debug_toolbar', 1 => 'onKernelResponse'), -128);

        return $instance;
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), '/opt/lampp/htdocs/Symfony/app/Resources');
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Util\Filesystem A Symfony\Component\HttpKernel\Util\Filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\HttpKernel\Util\Filesystem();
    }

    /**
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider A Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider instance.
     */
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider($this->get('session'), 'ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance.
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('field' => 'form.type.field', 'form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'csrf' => 'form.type.csrf', 'entity' => 'form.type.entity', 'fos_user_username' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'fos_user_registration' => 'fos_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'fos_user_resetting' => 'fos_user.resetting.form.type', 'fos_comment.comment' => 'fos_comment.form_type.comment.default', 'fos_comment.thread' => 'fos_comment.form_type.thread.default', 'fos_comment.vote' => 'fos_comment.form_type.vote.default'), array('field' => array(0 => 'form.type_extension.field'), 'form' => array(0 => 'form.type_extension.csrf')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))));
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance.
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance.
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance.
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance.
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance.
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Csrf\Type\CsrfType A Symfony\Component\Form\Extension\Csrf\Type\CsrfType instance.
     */
    protected function getForm_Type_CsrfService()
    {
        return $this->services['form.type.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\CsrfType($this->get('form.csrf_provider'));
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance.
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance.
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance.
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance.
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\FieldType A Symfony\Component\Form\Extension\Core\Type\FieldType instance.
     */
    protected function getForm_Type_FieldService()
    {
        return $this->services['form.type.field'] = new \Symfony\Component\Form\Extension\Core\Type\FieldType($this->get('validator'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance.
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance.
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType();
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance.
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance.
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance.
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance.
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance.
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance.
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance.
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance.
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance.
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance.
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance.
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance.
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance.
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance.
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance.
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance.
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance.
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(true, '_token');
    }

    /**
     * Gets the 'form.type_extension.field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\FieldTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FieldTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_FieldService()
    {
        return $this->services['form.type_extension.field'] = new \Symfony\Component\Form\Extension\Validator\Type\FieldTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator.mapping.class_metadata_factory'));
    }

    /**
     * Gets the 'fos_comment.form_factory.comment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\CommentBundle\FormFactory\CommentFormFactory A FOS\CommentBundle\FormFactory\CommentFormFactory instance.
     */
    protected function getFosComment_FormFactory_CommentService()
    {
        return $this->services['fos_comment.form_factory.comment'] = new \FOS\CommentBundle\FormFactory\CommentFormFactory($this->get('form.factory'), 'fos_comment.comment', 'fos_comment_comment');
    }

    /**
     * Gets the 'fos_comment.form_factory.thread' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\CommentBundle\FormFactory\ThreadFormFactory A FOS\CommentBundle\FormFactory\ThreadFormFactory instance.
     */
    protected function getFosComment_FormFactory_ThreadService()
    {
        return $this->services['fos_comment.form_factory.thread'] = new \FOS\CommentBundle\FormFactory\ThreadFormFactory($this->get('form.factory'), 'fos_comment.thread', 'fos_comment_thread');
    }

    /**
     * Gets the 'fos_comment.form_factory.vote' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\CommentBundle\FormFactory\VoteFormFactory A FOS\CommentBundle\FormFactory\VoteFormFactory instance.
     */
    protected function getFosComment_FormFactory_VoteService()
    {
        return $this->services['fos_comment.form_factory.vote'] = new \FOS\CommentBundle\FormFactory\VoteFormFactory($this->get('form.factory'), 'fos_comment.vote', 'fos_comment_vote');
    }

    /**
     * Gets the 'fos_comment.form_type.comment.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\CommentBundle\Form\CommentType A FOS\CommentBundle\Form\CommentType instance.
     */
    protected function getFosComment_FormType_Comment_DefaultService()
    {
        return $this->services['fos_comment.form_type.comment.default'] = new \FOS\CommentBundle\Form\CommentType();
    }

    /**
     * Gets the 'fos_comment.form_type.thread.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\CommentBundle\Form\ThreadType A FOS\CommentBundle\Form\ThreadType instance.
     */
    protected function getFosComment_FormType_Thread_DefaultService()
    {
        return $this->services['fos_comment.form_type.thread.default'] = new \FOS\CommentBundle\Form\ThreadType();
    }

    /**
     * Gets the 'fos_comment.form_type.vote.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\CommentBundle\Form\VoteType A FOS\CommentBundle\Form\VoteType instance.
     */
    protected function getFosComment_FormType_Vote_DefaultService()
    {
        return $this->services['fos_comment.form_type.vote.default'] = new \FOS\CommentBundle\Form\VoteType();
    }

    /**
     * Gets the 'fos_comment.listener.closed_threads' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\CommentBundle\EventListener\ClosedThreadListener A FOS\CommentBundle\EventListener\ClosedThreadListener instance.
     */
    protected function getFosComment_Listener_ClosedThreadsService()
    {
        return $this->services['fos_comment.listener.closed_threads'] = new \FOS\CommentBundle\EventListener\ClosedThreadListener();
    }

    /**
     * Gets the 'fos_comment.listener.comment_blamer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\CommentBundle\EventListener\CommentBlamerListener A FOS\CommentBundle\EventListener\CommentBlamerListener instance.
     */
    protected function getFosComment_Listener_CommentBlamerService()
    {
        return $this->services['fos_comment.listener.comment_blamer'] = new \FOS\CommentBundle\EventListener\CommentBlamerListener($this->get('security.context'), $this->get('logger'));
    }

    /**
     * Gets the 'fos_comment.listener.comment_vote_score' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\CommentBundle\EventListener\CommentVoteScoreListener A FOS\CommentBundle\EventListener\CommentVoteScoreListener instance.
     */
    protected function getFosComment_Listener_CommentVoteScoreService()
    {
        return $this->services['fos_comment.listener.comment_vote_score'] = new \FOS\CommentBundle\EventListener\CommentVoteScoreListener();
    }

    /**
     * Gets the 'fos_comment.listener.thread_counters' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\CommentBundle\EventListener\ThreadCountersListener A FOS\CommentBundle\EventListener\ThreadCountersListener instance.
     */
    protected function getFosComment_Listener_ThreadCountersService()
    {
        return $this->services['fos_comment.listener.thread_counters'] = new \FOS\CommentBundle\EventListener\ThreadCountersListener();
    }

    /**
     * Gets the 'fos_comment.listener.thread_permalink' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\CommentBundle\EventListener\ThreadPermalinkListener A FOS\CommentBundle\EventListener\ThreadPermalinkListener instance.
     */
    protected function getFosComment_Listener_ThreadPermalinkService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_comment.listener.thread_permalink', 'request');
        }

        return $this->services['fos_comment.listener.thread_permalink'] = $this->scopedServices['request']['fos_comment.listener.thread_permalink'] = new \FOS\CommentBundle\EventListener\ThreadPermalinkListener($this->get('request'));
    }

    /**
     * Gets the 'fos_comment.listener.vote_blamer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\CommentBundle\EventListener\VoteBlamerListener A FOS\CommentBundle\EventListener\VoteBlamerListener instance.
     */
    protected function getFosComment_Listener_VoteBlamerService()
    {
        return $this->services['fos_comment.listener.vote_blamer'] = new \FOS\CommentBundle\EventListener\VoteBlamerListener($this->get('security.context'), $this->get('logger'));
    }

    /**
     * Gets the 'fos_comment.manager.comment.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\CommentBundle\Entity\CommentManager A FOS\CommentBundle\Entity\CommentManager instance.
     */
    protected function getFosComment_Manager_Comment_DefaultService()
    {
        return $this->services['fos_comment.manager.comment.default'] = new \FOS\CommentBundle\Entity\CommentManager($this->get('event_dispatcher'), $this->get('fos_comment.sorting_factory'), $this->get('fos_comment.entity_manager'), 'City\\CitytribeBundle\\Entity\\Comment');
    }

    /**
     * Gets the 'fos_comment.manager.thread.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\CommentBundle\Entity\ThreadManager A FOS\CommentBundle\Entity\ThreadManager instance.
     */
    protected function getFosComment_Manager_Thread_DefaultService()
    {
        return $this->services['fos_comment.manager.thread.default'] = new \FOS\CommentBundle\Entity\ThreadManager($this->get('event_dispatcher'), $this->get('fos_comment.entity_manager'), 'City\\CitytribeBundle\\Entity\\Thread');
    }

    /**
     * Gets the 'fos_comment.manager.vote.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\CommentBundle\Entity\VoteManager A FOS\CommentBundle\Entity\VoteManager instance.
     */
    protected function getFosComment_Manager_Vote_DefaultService()
    {
        return $this->services['fos_comment.manager.vote.default'] = new \FOS\CommentBundle\Entity\VoteManager($this->get('event_dispatcher'), $this->get('fos_comment.entity_manager'), 'City\\CitytribeBundle\\Entity\\Vote');
    }

    /**
     * Gets the 'fos_comment.sorting_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\CommentBundle\Sorting\SortingFactory A FOS\CommentBundle\Sorting\SortingFactory instance.
     */
    protected function getFosComment_SortingFactoryService()
    {
        return $this->services['fos_comment.sorting_factory'] = new \FOS\CommentBundle\Sorting\SortingFactory(array('date_asc' => new \FOS\CommentBundle\Sorting\DateSorting('ASC'), 'date_desc' => new \FOS\CommentBundle\Sorting\DateSorting('DESC')), 'date_desc');
    }

    /**
     * Gets the 'fos_facebook.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\FacebookBundle\Facebook\FacebookSessionPersistence A FOS\FacebookBundle\Facebook\FacebookSessionPersistence instance.
     */
    protected function getFosFacebook_ApiService()
    {
        require_once '/opt/lampp/htdocs/Symfony/app/../vendor/facebook/src/base_facebook.php';

        return $this->services['fos_facebook.api'] = new \FOS\FacebookBundle\Facebook\FacebookSessionPersistence(array('appId' => '166704423433744', 'secret' => 'c3af5e8049c401279ced1807349e9589', 'cookie' => true, 'domain' => NULL), $this->get('session'));
    }

    /**
     * Gets the 'fos_facebook.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\FacebookBundle\Templating\Helper\FacebookHelper A FOS\FacebookBundle\Templating\Helper\FacebookHelper instance.
     */
    protected function getFosFacebook_HelperService()
    {
        return $this->services['fos_facebook.helper'] = new \FOS\FacebookBundle\Templating\Helper\FacebookHelper($this->get('templating'), $this->get('fos_facebook.api'), true, 'en_US', array(0 => 'email', 1 => 'user_hometown', 2 => 'user_about_me', 3 => 'publish_stream'));
    }

    /**
     * Gets the 'fos_facebook.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\FacebookBundle\Twig\Extension\FacebookExtension A FOS\FacebookBundle\Twig\Extension\FacebookExtension instance.
     */
    protected function getFosFacebook_TwigService()
    {
        return $this->services['fos_facebook.twig'] = new \FOS\FacebookBundle\Twig\Extension\FacebookExtension($this);
    }

    /**
     * Gets the 'fos_rest.body_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\EventListener\BodyListener A FOS\RestBundle\EventListener\BodyListener instance.
     */
    protected function getFosRest_BodyListenerService()
    {
        return $this->services['fos_rest.body_listener'] = new \FOS\RestBundle\EventListener\BodyListener($this->get('fos_rest.decoder_provider'));
    }

    /**
     * Gets the 'fos_rest.decoder.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Decoder\JsonDecoder A FOS\RestBundle\Decoder\JsonDecoder instance.
     */
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Decoder\XmlDecoder A FOS\RestBundle\Decoder\XmlDecoder instance.
     */
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Decoder\ContainerDecoderProvider A FOS\RestBundle\Decoder\ContainerDecoderProvider instance.
     */
    protected function getFosRest_DecoderProviderService()
    {
        $this->services['fos_rest.decoder_provider'] = $instance = new \FOS\RestBundle\Decoder\ContainerDecoderProvider(array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'fos_rest.format_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\EventListener\FormatListener A FOS\RestBundle\EventListener\FormatListener instance.
     */
    protected function getFosRest_FormatListenerService()
    {
        return $this->services['fos_rest.format_listener'] = new \FOS\RestBundle\EventListener\FormatListener($this->get('fos_rest.format_negotiator'), 'html', array(0 => 'html', 1 => '*/*'), true);
    }

    /**
     * Gets the 'fos_rest.format_negotiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Util\FormatNegotiator A FOS\RestBundle\Util\FormatNegotiator instance.
     */
    protected function getFosRest_FormatNegotiatorService()
    {
        return $this->services['fos_rest.format_negotiator'] = new \FOS\RestBundle\Util\FormatNegotiator();
    }

    /**
     * Gets the 'fos_rest.routing.loader.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\RestRouteLoader A FOS\RestBundle\Routing\Loader\RestRouteLoader instance.
     */
    protected function getFosRest_Routing_Loader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.controller'] = new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $this->get('controller_name_converter'), $this->get('fos_rest.routing.loader.reader.controller'), NULL);
    }

    /**
     * Gets the 'fos_rest.routing.loader.processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\RestRouteProcessor A FOS\RestBundle\Routing\Loader\RestRouteProcessor instance.
     */
    protected function getFosRest_Routing_Loader_ProcessorService()
    {
        return $this->services['fos_rest.routing.loader.processor'] = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();
    }

    /**
     * Gets the 'fos_rest.routing.loader.reader.action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\Reader\RestActionReader A FOS\RestBundle\Routing\Loader\Reader\RestActionReader instance.
     */
    protected function getFosRest_Routing_Loader_Reader_ActionService()
    {
        return $this->services['fos_rest.routing.loader.reader.action'] = new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($this->get('annotation_reader'));
    }

    /**
     * Gets the 'fos_rest.routing.loader.reader.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\Reader\RestControllerReader A FOS\RestBundle\Routing\Loader\Reader\RestControllerReader instance.
     */
    protected function getFosRest_Routing_Loader_Reader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.reader.controller'] = new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader($this->get('fos_rest.routing.loader.reader.action'), $this->get('annotation_reader'));
    }

    /**
     * Gets the 'fos_rest.routing.loader.xml_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader A FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader instance.
     */
    protected function getFosRest_Routing_Loader_XmlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.xml_collection'] = new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'));
    }

    /**
     * Gets the 'fos_rest.routing.loader.yaml_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader A FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader instance.
     */
    protected function getFosRest_Routing_Loader_YamlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.yaml_collection'] = new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'));
    }

    /**
     * Gets the 'fos_rest.view_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\View\ViewHandler A FOS\RestBundle\View\ViewHandler instance.
     */
    protected function getFosRest_ViewHandlerService()
    {
        $this->services['fos_rest.view_handler'] = $instance = new \FOS\RestBundle\View\ViewHandler(array('json' => false, 'xml' => false, 'html' => true), 400, array('html' => 302), 'twig');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'fos_rest.view_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\EventListener\ViewResponseListener A FOS\RestBundle\EventListener\ViewResponseListener instance.
     */
    protected function getFosRest_ViewResponseListenerService()
    {
        return $this->services['fos_rest.view_response_listener'] = new \FOS\RestBundle\EventListener\ViewResponseListener($this);
    }

    /**
     * Gets the 'fos_user.change_password.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Form A Symfony\Component\Form\Form instance.
     */
    protected function getFosUser_ChangePassword_FormService()
    {
        return $this->services['fos_user.change_password.form'] = $this->get('form.factory')->createNamed('fos_user_change_password', 'fos_user_change_password_form', '', array('validation_groups' => array(0 => 'ChangePassword', 1 => 'Default')));
    }

    /**
     * Gets the 'fos_user.change_password.form.handler.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Handler\ChangePasswordFormHandler A FOS\UserBundle\Form\Handler\ChangePasswordFormHandler instance.
     */
    protected function getFosUser_ChangePassword_Form_Handler_DefaultService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.change_password.form.handler.default', 'request');
        }

        return $this->services['fos_user.change_password.form.handler.default'] = $this->scopedServices['request']['fos_user.change_password.form.handler.default'] = new \FOS\UserBundle\Form\Handler\ChangePasswordFormHandler($this->get('fos_user.change_password.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.change_password.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\ChangePasswordFormType A FOS\UserBundle\Form\Type\ChangePasswordFormType instance.
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType();
    }

    /**
     * Gets the 'fos_user.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Mailer\Mailer A FOS\UserBundle\Mailer\Mailer instance.
     */
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('mailer'), $this->get('router'), $this->get('templating'), array('confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig', 'resetting.template' => 'FOSUserBundle:Resetting:email.txt.twig', 'from_email' => array('confirmation' => array('MycityTribe@tribe.com' => 'MycityTribe'), 'resetting' => array('MycityTribe@tribe.com' => 'MycityTribe'))));
    }

    /**
     * Gets the 'fos_user.profile.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Form A Symfony\Component\Form\Form instance.
     */
    protected function getFosUser_Profile_FormService()
    {
        return $this->services['fos_user.profile.form'] = $this->get('form.factory')->createNamed('fos_user_profile', 'fos_user_profile_form', '', array('validation_groups' => array(0 => 'Profile', 1 => 'Default')));
    }

    /**
     * Gets the 'fos_user.profile.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Handler\ProfileFormHandler A FOS\UserBundle\Form\Handler\ProfileFormHandler instance.
     */
    protected function getFosUser_Profile_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.profile.form.handler', 'request');
        }

        return $this->services['fos_user.profile.form.handler'] = $this->scopedServices['request']['fos_user.profile.form.handler'] = new \FOS\UserBundle\Form\Handler\ProfileFormHandler($this->get('fos_user.profile.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.profile.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\ProfileFormType A FOS\UserBundle\Form\Type\ProfileFormType instance.
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('City\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.registration.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Form A Symfony\Component\Form\Form instance.
     */
    protected function getFosUser_Registration_FormService()
    {
        return $this->services['fos_user.registration.form'] = $this->get('form.factory')->createNamed('fos_user_registration', 'fos_user_registration_form', '', array('validation_groups' => array(0 => 'Registration', 1 => 'Default')));
    }

    /**
     * Gets the 'fos_user.registration.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Handler\RegistrationFormHandler A FOS\UserBundle\Form\Handler\RegistrationFormHandler instance.
     */
    protected function getFosUser_Registration_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.registration.form.handler', 'request');
        }

        return $this->services['fos_user.registration.form.handler'] = $this->scopedServices['request']['fos_user.registration.form.handler'] = new \FOS\UserBundle\Form\Handler\RegistrationFormHandler($this->get('fos_user.registration.form'), $this->get('request'), $this->get('fos_user.user_manager'), $this->get('fos_user.mailer'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'fos_user.registration.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\RegistrationFormType A FOS\UserBundle\Form\Type\RegistrationFormType instance.
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('City\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.resetting.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Form A Symfony\Component\Form\Form instance.
     */
    protected function getFosUser_Resetting_FormService()
    {
        return $this->services['fos_user.resetting.form'] = $this->get('form.factory')->createNamed('fos_user_resetting', 'fos_user_resetting_form', '', array('validation_groups' => array(0 => 'ResetPassword', 1 => 'Default')));
    }

    /**
     * Gets the 'fos_user.resetting.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Handler\ResettingFormHandler A FOS\UserBundle\Form\Handler\ResettingFormHandler instance.
     */
    protected function getFosUser_Resetting_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.resetting.form.handler', 'request');
        }

        return $this->services['fos_user.resetting.form.handler'] = $this->scopedServices['request']['fos_user.resetting.form.handler'] = new \FOS\UserBundle\Form\Handler\ResettingFormHandler($this->get('fos_user.resetting.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.resetting.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\ResettingFormType A FOS\UserBundle\Form\Type\ResettingFormType instance.
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType();
    }

    /**
     * Gets the 'fos_user.security.interactive_login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Security\InteractiveLoginListener A FOS\UserBundle\Security\InteractiveLoginListener instance.
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\Security\InteractiveLoginListener($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.user_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Entity\UserManager A FOS\UserBundle\Entity\UserManager instance.
     */
    protected function getFosUser_UserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');

        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Entity\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('doctrine')->getEntityManager(NULL), 'City\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.username_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\UsernameFormType A FOS\UserBundle\Form\Type\UsernameFormType instance.
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UsernameToUserTransformer($this->get('fos_user.user_manager')));
    }

    /**
     * Gets the 'fos_user.util.email_canonicalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\Canonicalizer A FOS\UserBundle\Util\Canonicalizer instance.
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the 'fos_user.util.user_manipulator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\UserManipulator A FOS\UserBundle\Util\UserManipulator instance.
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.validator.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Validator\PasswordValidator A FOS\UserBundle\Validator\PasswordValidator instance.
     */
    protected function getFosUser_Validator_PasswordService()
    {
        $this->services['fos_user.validator.password'] = $instance = new \FOS\UserBundle\Validator\PasswordValidator();

        $instance->setEncoderFactory($this->get('security.encoder_factory'));

        return $instance;
    }

    /**
     * Gets the 'fos_user.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Validator\UniqueValidator A FOS\UserBundle\Validator\UniqueValidator instance.
     */
    protected function getFosUser_Validator_UniqueService()
    {
        return $this->services['fos_user.validator.unique'] = new \FOS\UserBundle\Validator\UniqueValidator($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\HttpKernel A Symfony\Bundle\FrameworkBundle\HttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Bundle\FrameworkBundle\HttpKernel($this->get('event_dispatcher'), $this, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request')));
    }

    /**
     * Gets the 'jms_serializer.json_deserialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SerializerBundle\Serializer\JsonDeserializationVisitor A JMS\SerializerBundle\Serializer\JsonDeserializationVisitor instance.
     */
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\SerializerBundle\Serializer\JsonDeserializationVisitor($this->get('jms_serializer.naming_strategy'), array(0 => $this->get('jms_serializer.array_collection_handler'), 1 => $this->get('jms_serializer.datetime_handler')), $this->get('jms_serializer.unserialize_object_constructor'));
    }

    /**
     * Gets the 'jms_serializer.json_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SerializerBundle\Serializer\JsonSerializationVisitor A JMS\SerializerBundle\Serializer\JsonSerializationVisitor instance.
     */
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        return $this->services['jms_serializer.json_serialization_visitor'] = new \JMS\SerializerBundle\Serializer\JsonSerializationVisitor($this->get('jms_serializer.naming_strategy'), array(0 => $this->get('jms_serializer.constraint_violation_handler'), 1 => $this->get('jms_serializer.datetime_handler'), 2 => $this->get('jms_serializer.form_error_handler'), 3 => $this->get('jms_serializer.doctrine_handler')));
    }

    /**
     * Gets the 'jms_serializer.metadata.lazy_loading_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Metadata\Driver\LazyLoadingDriver A Metadata\Driver\LazyLoadingDriver instance.
     */
    protected function getJmsSerializer_Metadata_LazyLoadingDriverService()
    {
        return $this->services['jms_serializer.metadata.lazy_loading_driver'] = new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver');
    }

    /**
     * Gets the 'jms_serializer.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Metadata\Driver\DriverChain A Metadata\Driver\DriverChain instance.
     */
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = new \Metadata\Driver\FileLocator(array('Symfony\\Bundle\\FrameworkBundle' => '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/config/serializer', 'Symfony\\Bundle\\SecurityBundle' => '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/SecurityBundle/Resources/config/serializer', 'Symfony\\Bundle\\TwigBundle' => '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/TwigBundle/Resources/config/serializer', 'Symfony\\Bundle\\MonologBundle' => '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/MonologBundle/Resources/config/serializer', 'Symfony\\Bundle\\SwiftmailerBundle' => '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/SwiftmailerBundle/Resources/config/serializer', 'Symfony\\Bundle\\DoctrineBundle' => '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/DoctrineBundle/Resources/config/serializer', 'Symfony\\Bundle\\AsseticBundle' => '/opt/lampp/htdocs/Symfony/vendor/bundles/Symfony/Bundle/AsseticBundle/Resources/config/serializer', 'Sensio\\Bundle\\FrameworkExtraBundle' => '/opt/lampp/htdocs/Symfony/vendor/bundles/Sensio/Bundle/FrameworkExtraBundle/Resources/config/serializer', 'JMS\\SecurityExtraBundle' => '/opt/lampp/htdocs/Symfony/vendor/bundles/JMS/SecurityExtraBundle/Resources/config/serializer', 'JMS\\SerializerBundle' => '/opt/lampp/htdocs/Symfony/vendor/bundles/JMS/SerializerBundle/Resources/config/serializer', 'City\\BlogBundle' => '/opt/lampp/htdocs/Symfony/src/City/BlogBundle/Resources/config/serializer', 'City\\UserBundle' => '/opt/lampp/htdocs/Symfony/src/City/UserBundle/Resources/config/serializer', 'FOS\\UserBundle' => '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/config/serializer', 'FOS\\CommentBundle' => '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/CommentBundle/Resources/config/serializer', 'FOS\\RestBundle' => '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/RestBundle/Resources/config/serializer', 'FOS\\FacebookBundle' => '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/FacebookBundle/Resources/config/serializer', 'City\\GeoBundle' => '/opt/lampp/htdocs/Symfony/src/City/GeoBundle/Resources/config/serializer', 'City\\CitytribeBundle' => '/opt/lampp/htdocs/Symfony/src/City/CitytribeBundle/Resources/config/serializer', 'Knp\\Bundle\\MenuBundle' => '/opt/lampp/htdocs/Symfony/vendor/bundles/Knp/Bundle/MenuBundle/Resources/config/serializer', 'City\\DemoBundle' => '/opt/lampp/htdocs/Symfony/src/City/DemoBundle/Resources/config/serializer', 'Isdev\\TwitterBootstrapBundle' => '/opt/lampp/htdocs/Symfony/vendor/bundles/Isdev/TwitterBootstrapBundle/Resources/config/serializer', 'Acme\\DemoBundle' => '/opt/lampp/htdocs/Symfony/src/Acme/DemoBundle/Resources/config/serializer', 'Symfony\\Bundle\\WebProfilerBundle' => '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/config/serializer', 'Sensio\\Bundle\\DistributionBundle' => '/opt/lampp/htdocs/Symfony/vendor/bundles/Sensio/Bundle/DistributionBundle/Resources/config/serializer', 'Sensio\\Bundle\\GeneratorBundle' => '/opt/lampp/htdocs/Symfony/vendor/bundles/Sensio/Bundle/GeneratorBundle/Resources/config/serializer'));

        return $this->services['jms_serializer.metadata_driver'] = new \Metadata\Driver\DriverChain(array(0 => new \JMS\SerializerBundle\Metadata\Driver\YamlDriver($a), 1 => new \JMS\SerializerBundle\Metadata\Driver\XmlDriver($a), 2 => new \JMS\SerializerBundle\Metadata\Driver\PhpDriver($a), 3 => new \JMS\SerializerBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader'))));
    }

    /**
     * Gets the 'jms_serializer.naming_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SerializerBundle\Serializer\Naming\CacheNamingStrategy A JMS\SerializerBundle\Serializer\Naming\CacheNamingStrategy instance.
     */
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\SerializerBundle\Serializer\Naming\CacheNamingStrategy(new \JMS\SerializerBundle\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\SerializerBundle\Serializer\Naming\CamelCaseNamingStrategy('_', true)));
    }

    /**
     * Gets the 'jms_serializer.xml_deserialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SerializerBundle\Serializer\XmlDeserializationVisitor A JMS\SerializerBundle\Serializer\XmlDeserializationVisitor instance.
     */
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        return $this->services['jms_serializer.xml_deserialization_visitor'] = new \JMS\SerializerBundle\Serializer\XmlDeserializationVisitor($this->get('jms_serializer.naming_strategy'), array(0 => $this->get('jms_serializer.array_collection_handler'), 1 => $this->get('jms_serializer.datetime_handler')), $this->get('jms_serializer.unserialize_object_constructor'));
    }

    /**
     * Gets the 'jms_serializer.xml_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SerializerBundle\Serializer\XmlSerializationVisitor A JMS\SerializerBundle\Serializer\XmlSerializationVisitor instance.
     */
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        return $this->services['jms_serializer.xml_serialization_visitor'] = new \JMS\SerializerBundle\Serializer\XmlSerializationVisitor($this->get('jms_serializer.naming_strategy'), array(0 => $this->get('jms_serializer.constraint_violation_handler'), 1 => $this->get('jms_serializer.datetime_handler'), 2 => $this->get('jms_serializer.form_error_handler'), 3 => $this->get('jms_serializer.doctrine_handler')));
    }

    /**
     * Gets the 'jms_serializer.yaml_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SerializerBundle\Serializer\YamlSerializationVisitor A JMS\SerializerBundle\Serializer\YamlSerializationVisitor instance.
     */
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\SerializerBundle\Serializer\YamlSerializationVisitor($this->get('jms_serializer.naming_strategy'), array(0 => $this->get('jms_serializer.constraint_violation_handler'), 1 => $this->get('jms_serializer.datetime_handler'), 2 => $this->get('jms_serializer.form_error_handler'), 3 => $this->get('jms_serializer.doctrine_handler')));
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws \RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new \RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'knp_menu.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Silex\RouterAwareFactory A Knp\Menu\Silex\RouterAwareFactory instance.
     */
    protected function getKnpMenu_FactoryService()
    {
        return $this->services['knp_menu.factory'] = new \Knp\Menu\Silex\RouterAwareFactory($this->get('router'));
    }

    /**
     * Gets the 'knp_menu.menu_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Provider\ChainProvider A Knp\Menu\Provider\ChainProvider instance.
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array()), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }

    /**
     * Gets the 'knp_menu.renderer.list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Renderer\ListRenderer A Knp\Menu\Renderer\ListRenderer instance.
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer('UTF-8');
    }

    /**
     * Gets the 'knp_menu.renderer.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Renderer\TwigRenderer A Knp\Menu\Renderer\TwigRenderer instance.
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig');
    }

    /**
     * Gets the 'knp_menu.renderer_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider A Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider instance.
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Mailer A Swift_Mailer instance.
     */
    protected function getMailerService()
    {
        return $this->services['mailer'] = new \Swift_Mailer($this->get('swiftmailer.transport'));
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Handler\DebugHandler A Symfony\Bridge\Monolog\Handler\DebugHandler instance.
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.firephp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Handler\FirePHPHandler A Symfony\Bridge\Monolog\Handler\FirePHPHandler instance.
     */
    protected function getMonolog_Handler_FirephpService()
    {
        return $this->services['monolog.handler.firephp'] = new \Symfony\Bridge\Monolog\Handler\FirePHPHandler(200, true);
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance.
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler('/opt/lampp/htdocs/Symfony/app/logs/dev.log', 100, true);
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'my.facebook.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return City\UserBundle\Provider\FacebookProvider A City\UserBundle\Provider\FacebookProvider instance.
     */
    protected function getMy_Facebook_UserService()
    {
        return $this->services['my.facebook.user'] = new \City\UserBundle\Provider\FacebookProvider($this->get('fos_facebook.api'), $this->get('fos_user.user_manager'), $this->get('validator'), $this);
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance.
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler');
        $b = $this->get('kernel');

        $c = new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector();
        $c->setEventDispatcher($this->get('event_dispatcher'));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\SqliteProfilerStorage('sqlite:/opt/lampp/htdocs/Symfony/app/cache/dev/profiler.db', '', '', 86400), $a);

        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector($b));
        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add($c);
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Bundle\FrameworkBundle\DataCollector\TimerDataCollector($b));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.context')));
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this, false));
        $instance->add(new \Symfony\Bridge\Doctrine\DataCollector\DoctrineDataCollector($this->get('doctrine'), $this->get('doctrine.dbal.logger')));

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance.
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), NULL, false, false);
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws \RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new \RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance.
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance.
     */
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, '/opt/lampp/htdocs/Symfony/app/config/routing_dev.yml', array('cache_dir' => '/opt/lampp/htdocs/Symfony/app/cache/dev', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appdevUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appdevUrlMatcher'));
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\EventListener\RouterListener A Symfony\Bundle\FrameworkBundle\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\RouterListener($this->get('router'), 80, 443, $this->get('monolog.logger.request'));
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance.
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader($this->get('assetic.asset_manager')));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader($this->get('fos_rest.routing.loader.controller'));
        $d->addLoader($this->get('fos_rest.routing.loader.yaml_collection'));
        $d->addLoader($this->get('fos_rest.routing.loader.xml_collection'));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router'), $d);
    }

    /**
     * Gets the 'security.access.method_interceptor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor A JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor instance.
     */
    protected function getSecurity_Access_MethodInterceptorService()
    {
        return $this->services['security.access.method_interceptor'] = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor($this->get('security.context'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), new \JMS\SecurityExtraBundle\Security\Authorization\AfterInvocation\AfterInvocationManager(array()), new \JMS\SecurityExtraBundle\Security\Authorization\RunAsManager('RunAsToken', 'ROLE_'), $this->get('logger'));
    }

    /**
     * Gets the 'security.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\SecurityContext A Symfony\Component\Security\Core\SecurityContext instance.
     */
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance.
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('Symfony\\Component\\Security\\Core\\User\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder', 'arguments' => array(0 => false)), 'City\\UserBundle\\Entity\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder', 'arguments' => array(0 => false))));
    }

    /**
     * Gets the 'security.extra.controller_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SecurityExtraBundle\Controller\ControllerListener A JMS\SecurityExtraBundle\Controller\ControllerListener instance.
     */
    protected function getSecurity_Extra_ControllerListenerService()
    {
        return $this->services['security.extra.controller_listener'] = new \JMS\SecurityExtraBundle\Controller\ControllerListener($this, $this->get('annotation_reader'));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance.
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.login' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(login$|register|resetting|user|dest)'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.firewall.map.context.login' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_LoginService()
    {
        $a = $this->get('security.context');
        $b = $this->get('monolog.logger.security');

        return $this->services['security.firewall.map.context.login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('my.facebook.user'), 1 => $this->get('fos_user.user_manager')), 'login', $b, $this->get('event_dispatcher')), 2 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '4fb7dfd7c8586', $b), 3 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $this->get('security.http_utils'), NULL, NULL, NULL, $b));
    }

    /**
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('security.context');
        $b = $this->get('my.facebook.user');
        $c = $this->get('fos_user.user_manager');
        $d = $this->get('monolog.logger.security');
        $e = $this->get('event_dispatcher');
        $f = $this->get('security.http_utils');
        $g = $this->get('security.authentication.manager');

        $h = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(array(0 => $b, 1 => $c), 'ThisTokenIsNotSoSecretChangeIt', 'main', array('name' => 'REMEMBERME', 'lifetime' => 31536000, 'path' => '/', 'domain' => NULL, 'secure' => false, 'httponly' => true, 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'), $d);

        $i = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $f, '/logout', '/', NULL);
        $i->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());
        $i->addHandler($h);

        $j = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');

        $k = new \FOS\FacebookBundle\Security\Firewall\FacebookListener($a, $g, $j, $f, 'main', array('check_path' => '/facebook/check', 'login_path' => '/login', 'always_use_default_target_path' => true, 'default_target_path' => '/home', 'app_url' => 'http://localhost/Symfony/web/app_dev.php/facebook/', 'server_url' => 'http://localhost/Symfony/web/app_dev.php/home/', 'use_forward' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false, 'failure_path' => NULL, 'failure_forward' => false, 'display' => 'page', 'create_user_if_not_exists' => false), NULL, NULL, $d, $e);
        $k->setRememberMeServices($h);

        $l = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($a, $g, $j, $f, 'main', array('always_use_default_target_path' => true, 'default_target_path' => '/home', 'check_path' => '/login_check', 'login_path' => '/login', 'use_forward' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false, 'failure_path' => NULL, 'failure_forward' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), NULL, NULL, $d, $e);
        $l->setRememberMeServices($h);

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $b, 1 => $c), 'main', $d, $e), 2 => $i, 3 => $k, 4 => $l, 5 => new \Symfony\Component\Security\Http\Firewall\RememberMeListener($a, $h, $g, $d, $e), 6 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $f, new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($this->get('http_kernel'), $f, '/login', false), NULL, NULL, $d));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\EventListener\ResponseListener A Symfony\Bundle\SecurityBundle\EventListener\ResponseListener instance.
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\ResponseListener();
    }

    /**
     * Gets the 'sensio.distribution.webconfigurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\DistributionBundle\Configurator\Configurator A Sensio\Bundle\DistributionBundle\Configurator\Configurator instance.
     */
    protected function getSensio_Distribution_WebconfiguratorService()
    {
        return $this->services['sensio.distribution.webconfigurator'] = new \Sensio\Bundle\DistributionBundle\Configurator\Configurator('/opt/lampp/htdocs/Symfony/app');
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\CacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\CacheListener instance.
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\CacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance.
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance.
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance.
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0);

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance.
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SerializerBundle\Serializer\LazyLoadingSerializer A JMS\SerializerBundle\Serializer\LazyLoadingSerializer instance.
     */
    protected function getSerializerService()
    {
        $a = new \Metadata\MetadataFactory($this->get('jms_serializer.metadata.lazy_loading_driver'), 'Metadata\\ClassHierarchyMetadata', true);
        $a->setCache(new \Metadata\Cache\FileCache('/opt/lampp/htdocs/Symfony/app/cache/dev/serializer'));

        $this->services['serializer'] = $instance = new \JMS\SerializerBundle\Serializer\LazyLoadingSerializer($a, array('json' => 'jms_serializer.json_serialization_visitor', 'xml' => 'jms_serializer.xml_serialization_visitor', 'yml' => 'jms_serializer.yaml_serialization_visitor'), array('json' => 'jms_serializer.json_deserialization_visitor', 'xml' => 'jms_serializer.xml_deserialization_visitor'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws \RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new \RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session A Symfony\Component\HttpFoundation\Session instance.
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session($this->get('session.storage'), 'en');
    }

    /**
     * Gets the 'session.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\SessionStorage\NativeSessionStorage A Symfony\Component\HttpFoundation\SessionStorage\NativeSessionStorage instance.
     */
    protected function getSession_StorageService()
    {
        return $this->services['session.storage'] = new \Symfony\Component\HttpFoundation\SessionStorage\NativeSessionStorage(array());
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance.
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this, true);
    }

    /**
     * Gets the 'swiftmailer.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SwiftmailerBundle\Logger\MessageLogger A Symfony\Bundle\SwiftmailerBundle\Logger\MessageLogger instance.
     */
    protected function getSwiftmailer_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.plugin.messagelogger'] = new \Symfony\Bundle\SwiftmailerBundle\Logger\MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance.
     */
    protected function getSwiftmailer_TransportService()
    {
        $this->services['swiftmailer.transport'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()))), new \Swift_Events_SimpleEventDispatcher());

        $instance->setHost('smtp.gmail.com');
        $instance->setPort(465);
        $instance->setEncryption('ssl');
        $instance->setUsername('fossothierry');
        $instance->setPassword('josephelise');
        $instance->setAuthMode('login');
        $instance->registerPlugin($this->get('swiftmailer.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine A Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine instance.
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine($this, array(0 => $this->get('templating.engine.php'), 1 => $this->get('templating.engine.twig')));
    }

    /**
     * Gets the 'templating.asset.package_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory A Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory instance.
     */
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }

    /**
     * Gets the 'templating.globals' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables A Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables instance.
     */
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }

    /**
     * Gets the 'templating.helper.actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper instance.
     */
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('http_kernel'));
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Templating\Helper\CoreAssetsHelper A Symfony\Component\Templating\Helper\CoreAssetsHelper instance.
     */
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }

        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, NULL), array());
    }

    /**
     * Gets the 'templating.helper.code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper instance.
     */
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, '/opt/lampp/htdocs/Symfony/app', 'UTF-8');
    }

    /**
     * Gets the 'templating.helper.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper instance.
     */
    protected function getTemplating_Helper_FormService()
    {
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper($this->get('templating.engine.php'), array(0 => 'FrameworkBundle:Form'));
    }

    /**
     * Gets the 'templating.helper.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper instance.
     */
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance.
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance.
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context'));
    }

    /**
     * Gets the 'templating.helper.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper instance.
     */
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }

    /**
     * Gets the 'templating.helper.slots' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Templating\Helper\SlotsHelper A Symfony\Component\Templating\Helper\SlotsHelper instance.
     */
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }

    /**
     * Gets the 'templating.helper.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper instance.
     */
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator.default'));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance.
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance.
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance.
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance.
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance.
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => 'php', 'translation.loader.yml' => 'yml', 'translation.loader.xliff' => 'xliff'), array('cache_dir' => '/opt/lampp/htdocs/Symfony/app/cache/dev/translations', 'debug' => true), $this->get('session'));

        $instance->setFallbackLocale('en');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.et.xliff', 'et', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.mn.xliff', 'mn', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.sl.xliff', 'sl', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.lt.xliff', 'lt', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.hu.xliff', 'hu', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.id.xliff', 'id', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.ua.xliff', 'ua', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.pt_BR.xliff', 'pt_BR', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.fa.xliff', 'fa', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.ca.xliff', 'ca', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.pl.xliff', 'pl', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.sk.xliff', 'sk', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.pt_PT.xliff', 'pt_PT', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.cs.xliff', 'cs', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.eu.xliff', 'eu', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.zh_CN.xliff', 'zh_CN', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.ru.xliff', 'ru', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.ro.xliff', 'ro', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.it.xliff', 'it', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.sr.xliff', 'sr', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.sv.xliff', 'sv', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.ja.xliff', 'ja', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.he.xliff', 'he', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.de.xliff', 'de', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.lb.xliff', 'lb', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.hy.xliff', 'hy', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.fi.xliff', 'fi', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.nl.xliff', 'nl', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.da.xliff', 'da', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.fr.xliff', 'fr', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.es.xliff', 'es', 'validators');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/src/City/BlogBundle/Resources/translations/messages.fr.xliff', 'fr', 'messages');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.lb.yml', 'lb', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.et.yml', 'et', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.sv.yml', 'sv', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.pt_BR.yml', 'pt_BR', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.fr.yml', 'fr', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.sl.yml', 'sl', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.pl.yml', 'pl', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.it.yml', 'it', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.es.yml', 'es', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.pt_PT.yml', 'pt_PT', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.en.yml', 'en', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.cs.yml', 'cs', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.ru.yml', 'ru', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.hu.yml', 'hu', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.de.yml', 'de', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.nl.yml', 'nl', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.da.yml', 'da', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.sk.yml', 'sk', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.ja.yml', 'ja', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.ca.yml', 'ca', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/translations/FOSUserBundle.ro.yml', 'ro', 'FOSUserBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/CommentBundle/Resources/translations/FOSCommentBundle.fr.yml', 'fr', 'FOSCommentBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/CommentBundle/Resources/translations/FOSCommentBundle.de.yml', 'de', 'FOSCommentBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/CommentBundle/Resources/translations/FOSCommentBundle.mn.yml', 'mn', 'FOSCommentBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/CommentBundle/Resources/translations/FOSCommentBundle.pl.yml', 'pl', 'FOSCommentBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/CommentBundle/Resources/translations/FOSCommentBundle.sl.yml', 'sl', 'FOSCommentBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/CommentBundle/Resources/translations/FOSCommentBundle.en.yml', 'en', 'FOSCommentBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/CommentBundle/Resources/translations/FOSCommentBundle.ru.yml', 'ru', 'FOSCommentBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/CommentBundle/Resources/translations/FOSCommentBundle.da.yml', 'da', 'FOSCommentBundle');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/CommentBundle/Resources/translations/FOSCommentBundle.es.yml', 'es', 'FOSCommentBundle');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/src/City/GeoBundle/Resources/translations/messages.fr.xliff', 'fr', 'messages');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/src/City/CitytribeBundle/Resources/translations/messages.fr.xliff', 'fr', 'messages');
        $instance->addResource('xliff', '/opt/lampp/htdocs/Symfony/src/City/DemoBundle/Resources/translations/messages.fr.xliff', 'fr', 'messages');
        $instance->addResource('yml', '/opt/lampp/htdocs/Symfony/vendor/bundles/Isdev/TwitterBootstrapBundle/Resources/translations/messages.en.yml', 'en', 'messages');

        return $instance;
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Environment A Twig_Environment instance.
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction', 'cache' => '/opt/lampp/htdocs/Symfony/app/cache/dev/twig', 'charset' => 'UTF-8'));

        $instance->addExtension($this->get('bcc.twig.extension'));
        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\SecurityExtension($this->get('security.context')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\CodeExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => 'form_div_layout.html.twig', 1 => 'IsdevTwitterBootstrapBundle:Form:fields.html.twig')));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), true, array()));
        $instance->addExtension(new \JMS\SerializerBundle\Twig\SerializerExtension($this->get('serializer')));
        $instance->addExtension(new \FOS\CommentBundle\Twig\CommentExtension(NULL, NULL));
        $instance->addExtension($this->get('fos_facebook.twig'));
        $instance->addExtension($this->get('twig.extension.txt'));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'))));
        $instance->addExtension($this->get('twig.extension.acme.demo'));

        return $instance;
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance.
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction', $this->get('monolog.logger.request'));
    }

    /**
     * Gets the 'twig.extension.txt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Extensions_Extension_Text A Twig_Extensions_Extension_Text instance.
     */
    protected function getTwig_Extension_TxtService()
    {
        return $this->services['twig.extension.txt'] = new \Twig_Extensions_Extension_Text();
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance.
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath('/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/TwigBundle/DependencyInjection/../../../Bridge/Twig/Resources/views/Form');
        $instance->addPath('/opt/lampp/htdocs/Symfony/vendor/KnpMenu/src/Knp/Menu/Resources/views');

        return $instance;
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Validator\Validator A Symfony\Component\Validator\Validator instance.
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'fos_user.validator.unique' => 'fos_user.validator.unique', 'fos_user.validator.password' => 'fos_user.validator.password')), array(0 => $this->get('doctrine.orm.validator_initializer')));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance.
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('templating.engine.twig'), false, 2);
    }

    /**
     * Gets the database_connection service alias.
     *
     * @return stdClass An instance of the doctrine.dbal.default_connection service
     */
    protected function getDatabaseConnectionService()
    {
        return $this->get('doctrine.dbal.default_connection');
    }

    /**
     * Gets the debug.event_dispatcher service alias.
     *
     * @return Symfony\Bundle\FrameworkBundle\Debug\TraceableEventDispatcher An instance of the event_dispatcher service
     */
    protected function getDebug_EventDispatcherService()
    {
        return $this->get('event_dispatcher');
    }

    /**
     * Gets the doctrine.orm.entity_manager service alias.
     *
     * @return Doctrine\ORM\EntityManager An instance of the doctrine.orm.default_entity_manager service
     */
    protected function getDoctrine_Orm_EntityManagerService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }

    /**
     * Gets the facebook service alias.
     *
     * @return FOS\FacebookBundle\Facebook\FacebookSessionPersistence An instance of the fos_facebook.api service
     */
    protected function getFacebookService()
    {
        return $this->get('fos_facebook.api');
    }

    /**
     * Gets the fos_comment.manager.comment service alias.
     *
     * @return FOS\CommentBundle\Entity\CommentManager An instance of the fos_comment.manager.comment.default service
     */
    protected function getFosComment_Manager_CommentService()
    {
        return $this->get('fos_comment.manager.comment.default');
    }

    /**
     * Gets the fos_comment.manager.thread service alias.
     *
     * @return FOS\CommentBundle\Entity\ThreadManager An instance of the fos_comment.manager.thread.default service
     */
    protected function getFosComment_Manager_ThreadService()
    {
        return $this->get('fos_comment.manager.thread.default');
    }

    /**
     * Gets the fos_comment.manager.vote service alias.
     *
     * @return FOS\CommentBundle\Entity\VoteManager An instance of the fos_comment.manager.vote.default service
     */
    protected function getFosComment_Manager_VoteService()
    {
        return $this->get('fos_comment.manager.vote.default');
    }

    /**
     * Gets the fos_rest.router service alias.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\Router An instance of the router service
     */
    protected function getFosRest_RouterService()
    {
        return $this->get('router');
    }

    /**
     * Gets the fos_rest.serializer service alias.
     *
     * @return JMS\SerializerBundle\Serializer\LazyLoadingSerializer An instance of the serializer service
     */
    protected function getFosRest_SerializerService()
    {
        return $this->get('serializer');
    }

    /**
     * Gets the fos_rest.templating service alias.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine An instance of the templating service
     */
    protected function getFosRest_TemplatingService()
    {
        return $this->get('templating');
    }

    /**
     * Gets the fos_user.change_password.form.handler service alias.
     *
     * @return FOS\UserBundle\Form\Handler\ChangePasswordFormHandler An instance of the fos_user.change_password.form.handler.default service
     */
    protected function getFosUser_ChangePassword_Form_HandlerService()
    {
        return $this->get('fos_user.change_password.form.handler.default');
    }

    /**
     * Gets the fos_user.util.username_canonicalizer service alias.
     *
     * @return FOS\UserBundle\Util\Canonicalizer An instance of the fos_user.util.email_canonicalizer service
     */
    protected function getFosUser_Util_UsernameCanonicalizerService()
    {
        return $this->get('fos_user.util.email_canonicalizer');
    }

    /**
     * Gets the translator service alias.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\Translator An instance of the translator.default service
     */
    protected function getTranslatorService()
    {
        return $this->get('translator.default');
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance.
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, new \Symfony\Component\DependencyInjection\ParameterBag\ParameterBag($this->getDefaultParameters()), '/opt/lampp/htdocs/Symfony/app/../web', true);

        $instance->addWorker(new \Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker());

        return $instance;
    }

    /**
     * Gets the 'assetic.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Assetic\Cache\FilesystemCache A Assetic\Cache\FilesystemCache instance.
     */
    protected function getAssetic_CacheService()
    {
        return $this->services['assetic.cache'] = new \Assetic\Cache\FilesystemCache('/opt/lampp/htdocs/Symfony/app/cache/dev/assetic/assets');
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance.
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'doctrine.dbal.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bridge\Doctrine\Logger\DbalLogger A Symfony\Bridge\Doctrine\Logger\DbalLogger instance.
     */
    protected function getDoctrine_Dbal_LoggerService()
    {
        return $this->services['doctrine.dbal.logger'] = new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine'));
    }

    /**
     * Gets the 'fos_comment.entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getFosComment_EntityManagerService()
    {
        return $this->services['fos_comment.entity_manager'] = $this->get('doctrine')->getEntityManager(NULL);
    }

    /**
     * Gets the 'jms_serializer.array_collection_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\SerializerBundle\Serializer\Handler\ArrayCollectionHandler A JMS\SerializerBundle\Serializer\Handler\ArrayCollectionHandler instance.
     */
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\SerializerBundle\Serializer\Handler\ArrayCollectionHandler();
    }

    /**
     * Gets the 'jms_serializer.constraint_violation_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\SerializerBundle\Serializer\Handler\ConstraintViolationHandler A JMS\SerializerBundle\Serializer\Handler\ConstraintViolationHandler instance.
     */
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\SerializerBundle\Serializer\Handler\ConstraintViolationHandler();
    }

    /**
     * Gets the 'jms_serializer.datetime_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\SerializerBundle\Serializer\Handler\DateTimeHandler A JMS\SerializerBundle\Serializer\Handler\DateTimeHandler instance.
     */
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\SerializerBundle\Serializer\Handler\DateTimeHandler('<ISO8601 (Y-m-dTH:i:s)>', '<timezone set in php.ini or via date_default_timezone_set>');
    }

    /**
     * Gets the 'jms_serializer.doctrine_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\SerializerBundle\Serializer\Handler\DoctrineProxyHandler A JMS\SerializerBundle\Serializer\Handler\DoctrineProxyHandler instance.
     */
    protected function getJmsSerializer_DoctrineHandlerService()
    {
        return $this->services['jms_serializer.doctrine_handler'] = new \JMS\SerializerBundle\Serializer\Handler\DoctrineProxyHandler();
    }

    /**
     * Gets the 'jms_serializer.form_error_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\SerializerBundle\Serializer\Handler\FormErrorHandler A JMS\SerializerBundle\Serializer\Handler\FormErrorHandler instance.
     */
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        return $this->services['jms_serializer.form_error_handler'] = new \JMS\SerializerBundle\Serializer\Handler\FormErrorHandler($this->get('translator.default'));
    }

    /**
     * Gets the 'jms_serializer.unserialize_object_constructor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\SerializerBundle\Serializer\Construction\UnserializeObjectConstructor A JMS\SerializerBundle\Serializer\Construction\UnserializeObjectConstructor instance.
     */
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\SerializerBundle\Serializer\Construction\UnserializeObjectConstructor();
    }

    /**
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance.
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_ADMIN', 2 => 'ROLE_ALLOWED_TO_SWITCH')))), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($this->get('security.authentication.trust_resolver'))), 'affirmative', false, true);
    }

    /**
     * Gets the 'security.access_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\Firewall\AccessListener A Symfony\Component\Security\Http\Firewall\AccessListener instance.
     */
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.context'), $this->get('security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'), $this->get('monolog.logger.security'));
    }

    /**
     * Gets the 'security.access_map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\AccessMap A Symfony\Component\Security\Http\AccessMap instance.
     */
    protected function getSecurity_AccessMapService()
    {
        return $this->services['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap();
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance.
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = new \Symfony\Component\Security\Core\User\UserChecker();

        return $this->services['security.authentication.manager'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('4fb7dfd7c8586'), 1 => new \FOS\FacebookBundle\Security\Authentication\Provider\FacebookProvider($this->get('fos_facebook.api'), $this->get('my.facebook.user'), $a, false), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('fos_user.user_manager'), $a, 'main', $this->get('security.encoder_factory'), true), 3 => new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider($a, 'ThisTokenIsNotSoSecretChangeIt', 'main')));
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance.
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.channel_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\Firewall\ChannelListener A Symfony\Component\Security\Http\Firewall\ChannelListener instance.
     */
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(), $this->get('monolog.logger.security'));
    }

    /**
     * Gets the 'security.http_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\HttpUtils A Symfony\Component\Security\Http\HttpUtils instance.
     */
    protected function getSecurity_HttpUtilsService()
    {
        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($this->get('router'));
    }

    /**
     * Gets the 'templating.engine.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\PhpEngine A Symfony\Bundle\FrameworkBundle\Templating\PhpEngine instance.
     */
    protected function getTemplating_Engine_PhpService()
    {
        $this->services['templating.engine.php'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('templating.globals'));

        $instance->setCharset('UTF-8');
        $instance->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.dynamic', 'facebook' => 'fos_facebook.helper'));

        return $instance;
    }

    /**
     * Gets the 'templating.engine.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance.
     */
    protected function getTemplating_Engine_TwigService()
    {
        return $this->services['templating.engine.twig'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.globals'));
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance.
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), '/opt/lampp/htdocs/Symfony/app/cache/dev');
    }

    /**
     * Gets the 'twig.extension.acme.demo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Acme\DemoBundle\Twig\Extension\DemoExtension A Acme\DemoBundle\Twig\Extension\DemoExtension instance.
     */
    protected function getTwig_Extension_Acme_DemoService()
    {
        return $this->services['twig.extension.acme.demo'] = new \Acme\DemoBundle\Twig\Extension\DemoExtension($this->get('twig.loader'));
    }

    /**
     * Gets the 'validator.mapping.class_metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Validator\Mapping\ClassMetadataFactory A Symfony\Component\Validator\Mapping\ClassMetadataFactory instance.
     */
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader($this->get('annotation_reader')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader(), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/DependencyInjection/../../../Component/Form/Resources/config/validation.xml', 1 => '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/config/validation.xml', 2 => '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/CommentBundle/Resources/config/validation.xml')), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array()))), NULL);
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!array_key_exists($name, $this->parameters)) {
            throw new \InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        return array_key_exists(strtolower($name), $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new \LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritDoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }
    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/opt/lampp/htdocs/Symfony/app',
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => '/opt/lampp/htdocs/Symfony/app/cache/dev',
            'kernel.logs_dir' => '/opt/lampp/htdocs/Symfony/app/logs',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Symfony\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'JMSSecurityExtraBundle' => 'JMS\\SecurityExtraBundle\\JMSSecurityExtraBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'CityBlogBundle' => 'City\\BlogBundle\\CityBlogBundle',
                'CityUserBundle' => 'City\\UserBundle\\CityUserBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'FOSCommentBundle' => 'FOS\\CommentBundle\\FOSCommentBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'FOSFacebookBundle' => 'FOS\\FacebookBundle\\FOSFacebookBundle',
                'CityGeoBundle' => 'City\\GeoBundle\\CityGeoBundle',
                'CitytribeBundle' => 'City\\CitytribeBundle\\CitytribeBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'CityDemoBundle' => 'City\\DemoBundle\\CityDemoBundle',
                'IsdevTwitterBootstrapBundle' => 'Isdev\\TwitterBootstrapBundle\\IsdevTwitterBootstrapBundle',
                'AcmeDemoBundle' => 'Acme\\DemoBundle\\AcmeDemoBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_driver' => 'pdo_mysql',
            'database_host' => '194.116.73.79',
            'database_port' => '',
            'database_name' => 'symfony',
            'database_user' => 'root',
            'database_password' => 'thken165',
            'mailer_transport' => 'smtp',
            'mailer_host' => 'smtp.gmail.com',
            'mailer_user' => 'fossothierry@gmail.com',
            'mailer_password' => 'josephelise',
            'locale' => 'en',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'router_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\RouterListener',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'event_dispatcher.class' => 'Symfony\\Bundle\\FrameworkBundle\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Bundle\\FrameworkBundle\\HttpKernel',
            'filesystem.class' => 'Symfony\\Component\\HttpKernel\\Util\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'debug.event_dispatcher.class' => 'Symfony\\Bundle\\FrameworkBundle\\Debug\\TraceableEventDispatcher',
            'debug.container.dump' => '/opt/lampp/htdocs/Symfony/app/cache/dev/appDevDebugProjectContainer.xml',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.trust_proxy_headers' => false,
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\NativeSessionStorage',
            'session.storage.filesystem.class' => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\FilesystemSessionStorage',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.default_locale' => 'en',
            'session.storage.options' => array(

            ),
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.csrf_provider.class' => 'Symfony\\Component\\Form\\Extension\\Csrf\\CsrfProvider\\SessionCsrfProvider',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.mapping.loader.xml_files_loader.mapping_files' => array(
                0 => '/opt/lampp/htdocs/Symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/DependencyInjection/../../../Component/Form/Resources/config/validation.xml',
                1 => '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/UserBundle/Resources/config/validation.xml',
                2 => '/opt/lampp/htdocs/Symfony/vendor/bundles/FOS/CommentBundle/Resources/config/validation.xml',
            ),
            'validator.mapping.loader.yaml_files_loader.mapping_files' => array(

            ),
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.timer.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\TimerDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => 'sqlite:/opt/lampp/htdocs/Symfony/app/cache/dev/profiler.db',
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'app%kernel.environment%UrlMatcher',
            'router.options.generator.cache_class' => 'app%kernel.environment%UrlGenerator',
            'router.resource' => '/opt/lampp/htdocs/Symfony/app/config/routing_dev.yml',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'templating.debugger.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Debugger',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'php',
                1 => 'twig',
            ),
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.user.provider.entity.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Bundle\\SecurityBundle\\EventListener\\ResponseListener',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'fos_facebook.options.main' => array(
                'provider' => 'my_fos_facebook_provider',
                'check_path' => '/facebook/check',
                'login_path' => '/login',
                'always_use_default_target_path' => true,
                'default_target_path' => '/home',
                'app_url' => 'http://localhost/Symfony/web/app_dev.php/facebook/',
                'server_url' => 'http://localhost/Symfony/web/app_dev.php/home/',
                'remember_me' => true,
                'use_forward' => false,
                'target_path_parameter' => '_target_path',
                'use_referer' => false,
                'failure_path' => NULL,
                'failure_forward' => false,
                'display' => 'page',
                'create_user_if_not_exists' => false,
            ),
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_ADMIN',
                    2 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.exception_listener.controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'IsdevTwitterBootstrapBundle:Form:fields.html.twig',
            ),
            'twig.options' => array(
                'debug' => true,
                'strict_variables' => true,
                'exception_controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction',
                'cache' => '/opt/lampp/htdocs/Symfony/app/cache/dev/twig',
                'charset' => 'UTF-8',
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\Logger\\MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.plugin.antiflood.threshold' => 99,
            'swiftmailer.plugin.antiflood.sleep' => 0,
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.transport.smtp.encryption' => 'ssl',
            'swiftmailer.transport.smtp.port' => 465,
            'swiftmailer.transport.smtp.host' => 'smtp.gmail.com',
            'swiftmailer.transport.smtp.username' => 'fossothierry',
            'swiftmailer.transport.smtp.password' => 'josephelise',
            'swiftmailer.transport.smtp.auth_mode' => 'login',
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.sender_address' => NULL,
            'swiftmailer.single_address' => NULL,
            'doctrine.dbal.logger.debug.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Symfony\\Bridge\\Doctrine\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Doctrine\\Common\\EventManager',
            'doctrine.dbal.connection_factory.class' => 'Symfony\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Symfony\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.annotation_reader.class' => 'Symfony\\Bridge\\Doctrine\\Annotations\\IndexedReader',
            'doctrine.orm.metadata.xml.class' => 'Symfony\\Bridge\\Doctrine\\Mapping\\Driver\\XmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Symfony\\Bridge\\Doctrine\\Mapping\\Driver\\YamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\EntityInitializer',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => '/opt/lampp/htdocs/Symfony/app/cache/dev/doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => '/opt/lampp/htdocs/Symfony/app/cache/dev/assetic',
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => true,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => '/opt/lampp/htdocs/Symfony/app/../web',
            'assetic.write_to' => '/opt/lampp/htdocs/Symfony/app/../web',
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.filter.less.class' => 'Assetic\\Filter\\LessFilter',
            'assetic.filter.less.node' => '/usr/bin/node',
            'assetic.filter.less.node_paths' => array(
                0 => '/home/thierry/bin',
                1 => '/usr/lib/node_modules',
            ),
            'assetic.filter.less.compress' => NULL,
            'assetic.filter.yui_css.class' => 'Assetic\\Filter\\Yui\\CssCompressorFilter',
            'assetic.filter.yui_css.java' => '/usr/bin/java',
            'assetic.filter.yui_css.jar' => '/opt/lampp/htdocs/Symfony/app/Resources/java/yuicompressor.jar',
            'assetic.filter.yui_css.charset' => 'UTF-8',
            'assetic.filter.yui_js.class' => 'Assetic\\Filter\\Yui\\JsCompressorFilter',
            'assetic.filter.yui_js.java' => '/usr/bin/java',
            'assetic.filter.yui_js.jar' => '/opt/lampp/htdocs/Symfony/app/Resources/java/yuicompressor.jar',
            'assetic.filter.yui_js.charset' => 'UTF-8',
            'assetic.filter.yui_js.nomunge' => NULL,
            'assetic.filter.yui_js.preserve_semi' => NULL,
            'assetic.filter.yui_js.disable_optimizations' => NULL,
            'assetic.twig_extension.functions' => array(

            ),
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.cache.class' => 'Assetic\\Cache\\FilesystemCache',
            'assetic.use_controller_worker.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Worker\\UseControllerWorker',
            'assetic.request_listener.class' => 'Symfony\\Bundle\\AsseticBundle\\EventListener\\RequestListener',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'security.secured_services' => array(

            ),
            'security.access.method_interceptor.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Interception\\MethodSecurityInterceptor',
            'security.access.run_as_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\RunAsManager',
            'security.authentication.provider.run_as.class' => 'JMS\\SecurityExtraBundle\\Security\\Authentication\\Provider\\RunAsAuthenticationProvider',
            'security.run_as.key' => 'RunAsToken',
            'security.run_as.role_prefix' => 'ROLE_',
            'security.access.after_invocation_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AfterInvocationManager',
            'security.access.after_invocation.acl_provider.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AclAfterInvocationProvider',
            'security.extra.controller_listener.class' => 'JMS\\SecurityExtraBundle\\Controller\\ControllerListener',
            'security.access.iddqd_voter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Voter\\IddqdVoter',
            'security.extra.secure_all_services' => false,
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\SerializerBundle\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\SerializerBundle\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\SerializerBundle\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\SerializerBundle\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\SerializerBundle\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\SerializerBundle\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\SerializerBundle\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\SerializerBundle\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\SerializerBundle\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\SerializerBundle\\Serializer\\LazyLoadingSerializer',
            'jms_serializer.twig_extension.class' => 'JMS\\SerializerBundle\\Twig\\SerializerExtension',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\SerializerBundle\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\SerializerBundle\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\SerializerBundle\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\SerializerBundle\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\SerializerBundle\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.object_based_custom_handler.class' => 'JMS\\SerializerBundle\\Serializer\\Handler\\ObjectBasedCustomHandler',
            'jms_serializer.datetime_handler.class' => 'JMS\\SerializerBundle\\Serializer\\Handler\\DateTimeHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\SerializerBundle\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\SerializerBundle\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\SerializerBundle\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_handler.class' => 'JMS\\SerializerBundle\\Serializer\\Handler\\DoctrineProxyHandler',
            'fos_user.validator.password.class' => 'FOS\\UserBundle\\Validator\\PasswordValidator',
            'fos_user.validator.unique.class' => 'FOS\\UserBundle\\Validator\\UniqueValidator',
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\Security\\InteractiveLoginListener',
            'fos_user.resetting.email.template' => 'FOSUserBundle:Resetting:email.txt.twig',
            'fos_user.registration.confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'City\\UserBundle\\Entity\\User',
            'fos_user.template.engine' => 'twig',
            'fos_user.template.theme' => 'FOSUserBundle::form.html.twig',
            'fos_user.profile.form.type' => 'fos_user_profile',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'MycityTribe@tribe.com' => 'MycityTribe',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'fos_user_registration',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'fos_user_change_password',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'MycityTribe@tribe.com' => 'MycityTribe',
            ),
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'fos_user_resetting',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'fos_comment.model.thread.class' => 'City\\CitytribeBundle\\Entity\\Thread',
            'fos_comment.model.comment.class' => 'City\\CitytribeBundle\\Entity\\Comment',
            'fos_comment.model.vote.class' => 'City\\CitytribeBundle\\Entity\\Vote',
            'fos_comment.manager.thread.default.class' => 'FOS\\CommentBundle\\Entity\\ThreadManager',
            'fos_comment.manager.comment.default.class' => 'FOS\\CommentBundle\\Entity\\CommentManager',
            'fos_comment.manager.vote.default.class' => 'FOS\\CommentBundle\\Entity\\VoteManager',
            'fos_comment.sorting_factory.class' => 'FOS\\CommentBundle\\Sorting\\SortingFactory',
            'fos_comment.sorter.date.class' => 'FOS\\CommentBundle\\Sorting\\DateSorting',
            'fos_comment.template.engine' => 'twig',
            'fos_comment.model_manager_name' => NULL,
            'fos_comment.form.comment.type' => 'fos_comment.comment',
            'fos_comment.form.comment.name' => 'fos_comment_comment',
            'fos_comment.form.thread.type' => 'fos_comment.thread',
            'fos_comment.form.thread.name' => 'fos_comment_thread',
            'fos_comment.form.vote.type' => 'fos_comment.vote',
            'fos_comment.form.vote.name' => 'fos_comment_vote',
            'fos_comment.sorting_factory.default_sorter' => 'date_desc',
            'fos_rest.routing.loader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteLoader',
            'fos_rest.routing.loader.yaml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestYamlCollectionLoader',
            'fos_rest.routing.loader.xml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestXmlCollectionLoader',
            'fos_rest.routing.loader.processor.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteProcessor',
            'fos_rest.routing.loader.reader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestControllerReader',
            'fos_rest.routing.loader.reader.action.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestActionReader',
            'fos_rest.format_negotiator.class' => 'FOS\\RestBundle\\Util\\FormatNegotiator',
            'fos_rest.formats' => array(
                'json' => false,
                'xml' => false,
                'html' => true,
            ),
            'fos_rest.default_engine' => 'twig',
            'fos_rest.force_redirects' => array(
                'html' => 302,
            ),
            'fos_rest.failed_validation' => 400,
            'fos_rest.view_response_listener.force_view' => true,
            'fos_rest.routing.loader.default_format' => NULL,
            'fos_rest.exception.codes' => array(

            ),
            'fos_rest.exception.messages' => array(

            ),
            'fos_rest.decoders' => array(
                'json' => 'fos_rest.decoder.json',
                'xml' => 'fos_rest.decoder.xml',
            ),
            'fos_rest.default_priorities' => array(
                0 => 'html',
                1 => '*/*',
            ),
            'fos_rest.prefer_extension' => true,
            'fos_rest.fallback_format' => 'html',
            'fos_rest.mime_types' => array(

            ),
            'fos_facebook.api.class' => 'FOS\\FacebookBundle\\Facebook\\FacebookSessionPersistence',
            'fos_facebook.helper.class' => 'FOS\\FacebookBundle\\Templating\\Helper\\FacebookHelper',
            'fos_facebook.twig.class' => 'FOS\\FacebookBundle\\Twig\\Extension\\FacebookExtension',
            'fos_facebook.file' => '/opt/lampp/htdocs/Symfony/app/../vendor/facebook/src/base_facebook.php',
            'fos_facebook.app_id' => '166704423433744',
            'fos_facebook.secret' => 'c3af5e8049c401279ced1807349e9589',
            'fos_facebook.cookie' => true,
            'fos_facebook.domain' => NULL,
            'fos_facebook.logging' => true,
            'fos_facebook.culture' => 'en_US',
            'fos_facebook.permissions' => array(
                0 => 'email',
                1 => 'user_hometown',
                2 => 'user_about_me',
                3 => 'publish_stream',
            ),
            'knp_menu.factory.class' => 'Knp\\Menu\\Silex\\RouterAwareFactory',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'sensio.distribution.webconfigurator.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Configurator',
            'data_collector.templates' => array(
                'data_collector.config' => array(
                    0 => 'config',
                    1 => 'WebProfilerBundle:Collector:config',
                ),
                'data_collector.request' => array(
                    0 => 'request',
                    1 => 'WebProfilerBundle:Collector:request',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => 'WebProfilerBundle:Collector:exception',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => 'WebProfilerBundle:Collector:events',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => 'WebProfilerBundle:Collector:logger',
                ),
                'data_collector.timer' => array(
                    0 => 'timer',
                    1 => 'WebProfilerBundle:Collector:timer',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => 'WebProfilerBundle:Collector:memory',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => 'SecurityBundle:Collector:security',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => 'SwiftmailerBundle:Collector:swiftmailer',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => 'DoctrineBundle:Collector:db',
                ),
            ),
        );
    }
}
