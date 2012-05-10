<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b52fda04b935d8f5f6b4468a3a9dc268 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo $this->env->getExtension('translator')->trans("resetting.email", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username"), "%confirmationUrl%" => $this->getContext($context, "confirmationUrl")), "FOSUserBundle");
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
