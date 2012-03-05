<?php

/* CitytribeBundle:Default:edit.html.twig */
class __TwigTemplate_798716e540dff20311e814a65f72afad extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t<form id =\"form\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("CitytribeBundle_profile_edit"), "html", null, true);
        echo "\" method=\"post\" }}>
\t
\t\t";
        // line 3
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
\t
\t\t<input type=\"submit\" />
\t</form>
";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
