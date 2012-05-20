<?php

/* CitytribeBundle:Blog:tribes.html.twig */
class __TwigTemplate_91aa5e04d0fdd4abae3fc42b178a3c6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CitytribeBundle::default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_middle($context, array $blocks = array())
    {
        // line 3
        echo "
\t<h2> Default Tribes</h2>
\t<div class=\"tribes\">
\t\t<table class=\" table table-bordered table-striped \" >
\t\t  <tbody>
\t\t    <tr>
\t\t      <td>";
        // line 9
        echo twig_escape_filter($this->env, \City\CitytribeBundle\Twig\Extension\TwigExtension::countryFilter($this->getAttribute($this->getContext($context, "user"), "nationality")), "html", null, true);
        echo " Tribe in ";
        echo twig_escape_filter($this->env, $this->getContext($context, "country_tribe"), "html", null, true);
        echo "</td>
\t\t      <td><span class=\"badge badge-success\"> <i class=\"icon-ok icon-white\"></i> </span></td>
\t\t    </tr>
\t\t    <tr>
\t\t      <td>";
        // line 13
        echo twig_escape_filter($this->env, \City\CitytribeBundle\Twig\Extension\TwigExtension::countryFilter($this->getAttribute($this->getContext($context, "user"), "nationality")), "html", null, true);
        echo " Tribe in ";
        echo twig_escape_filter($this->env, $this->getContext($context, "state_tribe"), "html", null, true);
        echo "</td>
\t\t      <td><span class=\"badge badge-success\"> <i class=\"icon-ok icon-white\"></i> </span></td>
\t\t    </tr>
\t\t    <tr>
\t\t      <td>";
        // line 17
        echo twig_escape_filter($this->env, \City\CitytribeBundle\Twig\Extension\TwigExtension::countryFilter($this->getAttribute($this->getContext($context, "user"), "nationality")), "html", null, true);
        echo " Tribe in ";
        echo twig_escape_filter($this->env, $this->getContext($context, "region_tribe"), "html", null, true);
        echo " </td>
\t\t      <td><span class=\"badge badge-success\"> <i class=\"icon-ok icon-white\"></i> </span></td>
\t\t    </tr>
\t\t    <tr>
\t\t      <td>";
        // line 21
        echo twig_escape_filter($this->env, \City\CitytribeBundle\Twig\Extension\TwigExtension::countryFilter($this->getAttribute($this->getContext($context, "user"), "nationality")), "html", null, true);
        echo " Tribe at  ";
        echo twig_escape_filter($this->env, $this->getContext($context, "city_tribe"), "html", null, true);
        echo "</td>
\t\t      <td><span class=\"badge badge-success\"> <i class=\"icon-ok icon-white\"></i> </span></td>
\t\t    </tr>

\t\t  </tbody>
\t\t</table>
\t</div>


";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Blog:tribes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
