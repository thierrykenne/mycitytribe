<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_a998403e3f02da6b3b67e3d6e639818f extends Twig_Template
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
  \t\t    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 10
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "app"), "session")))) {
            // line 11
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array("_security.target_path", ), "method");
            // line 12
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "targetUrl"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 13
            echo "    ";
        }
        echo "\t
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
        // line 18
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
