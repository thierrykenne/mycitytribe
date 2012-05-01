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
        echo "<div class=\"tabbable\"> 
  <ul class=\"nav nav-tabs\">
    <li class=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "tab1"), "html", null, true);
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_profile_info"), "html", null, true);
        echo "\"  data-toggle=\"tab\">Personal Informations</a></li>
    <li class=\" ";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "tab2"), "html", null, true);
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_profile_places"), "html", null, true);
        echo "\" data-toggle=\"tab\">My Places</a></li>
    <li class=\" ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "tab3"), "html", null, true);
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_avatar"), "html", null, true);
        echo "\" data-toggle=\"tab\">Avatar</a></li>
  </ul>
  <div class=\"tab-content\">
    <div class=\"tab-pane\" id=\"tab1\">
      <p>I'm in Section 1.</p>
    </div>
    <div class=\"tab-pane\" id=\"tab2\">
      <p>Howdy, I'm in Section 2.</p>
    </div>
    <div class=\"tab-pane\" id=\"tab3\">
      <p>Howdy, I'm in Section 3.</p>
    </div>
  </div>
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
