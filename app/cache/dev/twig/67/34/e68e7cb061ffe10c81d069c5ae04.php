<?php

/* CitytribeBundle:Default:index.html.twig */
class __TwigTemplate_6734e68e7cb061ffe10c81d069c5ae04 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello!
";
        // line 2
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array("notice", ), "method")) {
            // line 3
            echo "    <div class=\"flash-notice\">
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array("notice", ), "method"), "html", null, true);
            echo "
    </div>
";
        }
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "paths"), "html", null, true);
        echo "
\t<form id =\"form\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("CitytribeBundle_avatar"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t
\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
\t
\t\t<input type=\"submit\" />
\t</form>
<img src=\"../../../../web/uploads\"/> salut
";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
