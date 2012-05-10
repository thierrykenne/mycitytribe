<?php

/* CitytribeBundle:Menu:profile_nav.html.twig */
class __TwigTemplate_ee5cc842b730d497b579b3d539a0907c extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"tabbable\"> 
  <ul class=\"nav nav-tabs\" id=\"profile-nav\">
    <li class=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "tab1"), "html", null, true);
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_profile_info"), "html", null, true);
        echo "\">Personal Informations</a></li>
    <li class=\" ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "tab2"), "html", null, true);
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_profile_places", array("type" => $this->getAttribute($this->getContext($context, "countrytribe"), "d"))), "html", null, true);
        echo "\">My Places</a></li>
    <li class=\" ";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "tab3"), "html", null, true);
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_avatar"), "html", null, true);
        echo "\" >Avatar</a></li>
  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Menu:profile_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
