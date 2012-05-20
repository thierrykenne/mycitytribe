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
        // line 3
        $context["countrytribe"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array("country_tribe", ), "method");
        // line 4
        $context["countrytribe2"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array("country_tribe2", ), "method");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    public function block_middle($context, array $blocks = array())
    {
        echo " ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"content-type1 row\">
\t<div class=\"logo-left2\"> <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Cityblog_home"), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo-medium.png"), "html", null, true);
        echo "\"> </a> </div>
\t\t<div class=\"version\"> <span class=\"label label-info\">ALFA VERSION !</span></div>
\t\t";
        // line 9
        $this->env->loadTemplate("CitytribeBundle:Menu:navigation.html.twig")->display($context);
        // line 10
        echo "\t\t<div class=\"row contentbox \" > 
\t\t\t<div class=\"tribe-message row space\">
\t\t\t\t<div class=\"span3\">.
\t\t\t\t</div>
\t\t\t\t<div class=\"span5\">
\t\t\t\t\t <h2> <a> ";
        // line 15
        echo twig_escape_filter($this->env, \City\CitytribeBundle\Twig\Extension\TwigExtension::countryFilter($this->getAttribute($this->getContext($context, "user"), "nationality")), "html", null, true);
        echo " Tribe in ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "countrytribe"), "c"), "html", null, true);
        echo " </a></h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"span4\">
\t\t\t\t\t<div class=\"logout pull-right\"><a class=\"btn btn-danger\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\">
  \t\t\t\t\t\t<strong> <i class=\"icon-off icon-white \"></i> Logout </strong></a>  
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t          <button class=\"btn btn-medium btn-inverse\">User -Tribes </button>
\t\t\t          <button class=\"btn btn-medium btn-inverse dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret\"></span></button>
\t\t\t          <ul class=\"dropdown-menu\">
\t\t\t            <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Cityblog_home", array("page" => "1", "type" => $this->getAttribute($this->getContext($context, "countrytribe"), "d"))), "html", null, true);
        echo "\">
\t\t\t            \t
\t\t\t            \t";
        // line 27
        echo twig_escape_filter($this->env, \City\CitytribeBundle\Twig\Extension\TwigExtension::countryFilter($this->getAttribute($this->getContext($context, "user"), "nationality")), "html", null, true);
        echo " Tribe in ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "countrytribe"), "c"), "html", null, true);
        echo " </h2>
\t\t\t            \t
\t\t\t            \t</a>
\t\t\t            </li>
\t\t\t            <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Cityblog_home", array("page" => "1", "type" => $this->getAttribute($this->getContext($context, "countrytribe2"), "d"))), "html", null, true);
        echo "\">
\t\t\t             ";
        // line 32
        echo twig_escape_filter($this->env, \City\CitytribeBundle\Twig\Extension\TwigExtension::countryFilter($this->getAttribute($this->getContext($context, "user"), "nationality")), "html", null, true);
        echo " Tribe in ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "countrytribe2"), "c"), "html", null, true);
        echo " </h2></a></li>
\t\t\t          </ul>
\t\t\t        </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"span3\"> ";
        // line 38
        $this->env->loadTemplate("CitytribeBundle:Menu:left.html.twig")->display($context);
        echo " </div>
\t\t\t<div class=\"middle span7 \"> ";
        // line 39
        $this->displayBlock('middle', $context, $blocks);
        echo " </div>
\t\t\t<div class=\"span2\"> ";
        // line 40
        $this->env->loadTemplate("CitytribeBundle:Menu:right.html.twig")->display($context);
        echo "</div>
\t\t</div>
\t\t</div>
</div>

";
    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        // line 47
        echo "    <div class=\"row\">
        <footer class=\"row\">
\t   <p align=\"center\"> Copyright &copy; <a href=\"\" target=\"_blank\">MyCityTribe </a> ";
        // line 49
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
