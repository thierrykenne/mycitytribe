<?php

/* CityGeoBundle:Default:index.html.twig */
class __TwigTemplate_914ce561c9885036a5da825ee83f8aac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Glayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\tHello1 ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!<br />
\t";
        // line 5
        if (array_key_exists("flash", $context)) {
            echo " 
\t\t";
            // line 6
            echo twig_escape_filter($this->env, $this->getContext($context, "flash"), "html", null, true);
            echo "
\t";
        }
        // line 8
        echo "\t";
        if (array_key_exists("destination", $context)) {
            // line 9
            echo "\t\t<form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("CityGeoBundle_destination"), "html", null, true);
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
            echo ">
\t";
        } else {
            // line 11
            echo "\t";
        }
        // line 12
        echo "\t<label>Address: </label> <input id=\"address\" type=\"text\" autocomplete=\"off\" onKeyPress=\"return event.keyCode!=13\" /><br>

\t<div id=\"map-canvas\" style=\"width:400px; height:400px\"></div><br/>
\t<form id =\"form\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("CityGeoBundle_residence"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t
\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
\t
\t\t<input id=\"submit\" type=\"submit\" />
\t</form>
<div id=\"erreur\"> </div>
";
    }

    public function getTemplateName()
    {
        return "CityGeoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
