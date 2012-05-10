<?php

/* CityDemoBundle:Default:index.html.twig */
class __TwigTemplate_4a774caecb583b920365c33033de6635 extends Twig_Template
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
        return "CityDemoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
