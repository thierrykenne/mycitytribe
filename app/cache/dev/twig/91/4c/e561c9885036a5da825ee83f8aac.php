<?php

/* CityGeoBundle:Default:index.html.twig */
class __TwigTemplate_914ce561c9885036a5da825ee83f8aac extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello1 ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
        // line 2
        if (array_key_exists("destination", $context)) {
            // line 3
            echo "\t<form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("CityGeoBundle_destination"), "html", null, true);
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
            echo ">
";
        } else {
        }
        // line 6
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("CityGeoBundle_homepage"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t
\t";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
\t
\t<input type=\"submit\" />
</form>
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
