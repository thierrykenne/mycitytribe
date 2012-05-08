<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c7084e891b1834801c49770c3651b49e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"content-type1\">
\t<div class=\"logo-left\"> <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo-medium.png"), "html", null, true);
        echo "\"> </div>
\t";
        // line 6
        $this->env->loadTemplate("CitytribeBundle:Menu:default.html.twig")->display($context);
        // line 7
        echo "\t\t<div class=\"row contentbox\" > 
\t\t\t<div class=\"span7 register-right register\" id=\"reg\"> <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/world-blue.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div class=\"span5 register-left register\"> ";
        // line 9
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
        echo "</div>\t
\t\t</div>
</div>
";
    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
