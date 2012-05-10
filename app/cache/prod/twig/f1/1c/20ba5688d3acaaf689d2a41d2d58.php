<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_f11c20ba5688d3acaaf689d2a41d2d58 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo $this->env->getExtension('translator')->trans("registration.email", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username"), "%confirmationUrl%" => $this->getContext($context, "confirmationUrl")), "FOSUserBundle");
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
