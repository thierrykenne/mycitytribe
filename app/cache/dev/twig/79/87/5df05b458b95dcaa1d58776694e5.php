<?php

/* CitytribeBundle::default.html.twig */
class __TwigTemplate_79875df05b458b95dcaa1d58776694e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'middle' => array($this, 'block_middle'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Bloglayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_middle($context, array $blocks = array())
    {
        echo " ";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"content-type1 row\">
\t<div class=\"logo-left2\"> <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo-medium.png"), "html", null, true);
        echo "\"> </div>
\t\t";
        // line 6
        $this->env->loadTemplate("CitytribeBundle:Menu:navigation.html.twig")->display($context);
        // line 7
        echo "\t\t<div class=\"row contentbox space\" > 
\t\t\t<div class=\"span3\"> ";
        // line 8
        $this->env->loadTemplate("CitytribeBundle:Menu:left.html.twig")->display($context);
        echo " </div>
\t\t\t<div class=\"middle span7 \"> ";
        // line 9
        $this->displayBlock('middle', $context, $blocks);
        echo " </div>
\t\t\t<div class=\"span2\"> ";
        // line 10
        $this->env->loadTemplate("CitytribeBundle:Menu:right.html.twig")->display($context);
        echo "</div>
\t\t</div>
</div>

";
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"row\">
        <footer class=\"row\">
\t   <p align=\"center\"> Copyright &copy; <a href=\"\" target=\"_blank\">MyCityTribe </a> ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter("now", "Y"), "html", null, true);
        echo "</p>
        </footer>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle::default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
