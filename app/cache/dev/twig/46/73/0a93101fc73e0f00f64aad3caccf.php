<?php

/* FOSFacebookBundle::loginButton.html.twig */
class __TwigTemplate_46730a93101fc73e0f00f64aad3caccf extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<fb:login-button scope=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "scope"), "html", null, true);
        echo "\" autologoutlink=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "autologoutlink"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
        echo "</fb:login-button>
";
    }

    public function getTemplateName()
    {
        return "FOSFacebookBundle::loginButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
