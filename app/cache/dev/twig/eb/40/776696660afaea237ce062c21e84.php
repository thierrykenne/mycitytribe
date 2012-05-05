<?php

/* CitytribeBundle:Default:profile.html.twig */
class __TwigTemplate_eb40776696660afaea237ce062c21e84 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<a href=";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("CitytribeBundle_profile_edit"), "html", null, true);
        echo ">modificate</a>
<div id=\"username\"> Username:\t";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</div>
<div id=\"email\"> Email:\t";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
        echo "</div>
<div id=\"nation\"> Country:\t";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "nationality"), "html", null, true);
        echo "</div>
<div id=\"sex\">\t Gender       ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "sex"), "html", null, true);
        echo "</div>
<div id=\"occupation\"> Occupation:\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "occupation"), "html", null, true);
        echo "</div>
<div id=\"language\"> Language:\t";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "language"), "html", null, true);
        echo "</div>
<div id=\"aboutMe\"> About Me/Interesses:\t";
        // line 9
        echo twig_escape_filter($this->env, strip_tags($this->getAttribute($this->getContext($context, "user"), "aboutMe")), "html", null, true);
        echo "</div>
\t

";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Default:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
