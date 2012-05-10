<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_9e9d41c64da93674cdf2b4ff5c7ef3b8 extends Twig_Template
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
        echo "\t\t<div class=\"row contentbox mail \" > 
\t\t\t<div class=\"flash-notice alert alert-success\">
  \t\t<h3> <p align=\"center\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute($this->getContext($context, "user"), "email")), "FOSUserBundle"), "html", null, true);
        echo "</p> </h3>\t
\t\t\t</div>
\t\t</div>
</div>
";
    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
