<?php

/* CityBlogBundle:Blog:formulaire.html.twig */
class __TwigTemplate_b26fc5aad5bd377efdf26233b798d6fb extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t
\t";
        // line 3
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "

\t<input type=\"submit\" />
</form>";
    }

    public function getTemplateName()
    {
        return "CityBlogBundle:Blog:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
