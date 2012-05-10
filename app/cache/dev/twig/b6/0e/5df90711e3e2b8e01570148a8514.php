<?php

/* CitytribeBundle:Profile:places.html.twig */
class __TwigTemplate_b60e5df90711e3e2b8e01570148a8514 extends Twig_Template
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
        $this->env->loadTemplate("CitytribeBundle:Menu:profile_nav.html.twig")->display(array_merge($context, array("tab1" => "", "tab2" => "active", "tab3" => "")));
        // line 4
        echo "<div class=\"places\">

\t<table class=\" table table-striped\">
\t  <tbody>
\t  \t<caption>
\t  \t\t\t";
        // line 9
        if (($this->getContext($context, "type") == "destination")) {
            // line 10
            echo "\t\t\t\t<a class=\"btn btn-primary pull-right\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GeoBundle_dest"), "html", null, true);
            echo "\"> <i class=\"icon-edit\"></i>  Edit Place </a>
\t\t\t\t";
        } else {
            // line 12
            echo "\t\t\t\t<a class=\" btn btn-primary pull-right\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GeoBundle_resi"), "html", null, true);
            echo "\"> <i class=\"icon-edit\"></i>  Edit Place </a>
\t\t\t\t";
        }
        // line 14
        echo "\t\t</caption>
\t  \t\t
\t    <tr>
\t      <td>City</td>
\t      <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "places"), "city"), "html", null, true);
        echo "</td>
\t    </tr>
\t    <tr>
\t      <td>Region</td>
\t      <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "places"), "region"), "html", null, true);
        echo "</td>
\t    </tr>
\t    <tr>
\t      <td>State</td>
\t      <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "places"), "state"), "html", null, true);
        echo "</td>
\t    </tr>
\t    <tr>
\t      <td>Country</td>
\t      <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "places"), "country"), "html", null, true);
        echo "</td>
\t    </tr>
\t  </tbody>
\t</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Profile:places.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
