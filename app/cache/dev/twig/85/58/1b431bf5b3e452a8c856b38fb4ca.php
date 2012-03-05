<?php

/* CitytribeBundle:Default:avatar.html.twig */
class __TwigTemplate_85581b431bf5b3e452a8c856b38fb4ca extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array("notice", ), "method")) {
            // line 2
            echo "    <div class=\"flash-notice\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array("notice", ), "method"), "html", null, true);
            echo "
    </div>
";
        }
        // line 6
        echo "\t<form id =\"form\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("CitytribeBundle_avatar"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
\t
\t\t<input type=\"submit\" />
\t</form>
<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/avatars/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "image"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Default:avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
