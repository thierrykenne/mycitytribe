<?php

/* CitytribeBundle:Menu:navigation.html.twig */
class __TwigTemplate_3e68a9c568a24c67bd1c2fe2a81d2b79 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navigation\"> 
<div class=\"navbar row\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a class=\"brand\" href=\"#\">  </a>
            <ul class=\"nav\">
              <li class=\"active\">
                <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Cityblog_home"), "html", null, true);
        echo "\">Home</a>
              </li>
              <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_profile_info"), "html", null, true);
        echo "\">Profile</a></li>
              <li><a href=\"#\">Tribes</a></li>
              <li><a href=\"#\">Messages</a></li>
            </ul>
        </div>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Menu:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
