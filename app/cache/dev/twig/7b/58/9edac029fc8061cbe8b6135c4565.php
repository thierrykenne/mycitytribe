<?php

/* CityTribuBundle:Default:index.html.twig */
class __TwigTemplate_7b589edac029fc8061cbe8b6135c4565 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "CityTribuBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
