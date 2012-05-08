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
              ";
        // line 7
        if (((!array_key_exists("profile", $context)) && (!array_key_exists("message", $context)))) {
            // line 8
            echo "                <li class=\"active\">
                ";
        } else {
            // line 10
            echo "                <li class=\"\">
                ";
        }
        // line 12
        echo "                 <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Cityblog_home"), "html", null, true);
        echo "\"> <i class=\" active icon-white icon-home \"></i> Home</a></li>

              ";
        // line 14
        if ((!array_key_exists("profile", $context))) {
            // line 15
            echo "              <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_profile_info"), "html", null, true);
            echo "\"> <i class=\"icon-user icon-white\"></i> Profile</a></li>
              ";
        } else {
            // line 17
            echo "              <li class=\"active\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_profile_info"), "html", null, true);
            echo "\"> <i class=\"icon-user icon-white\"></i> Profile</a></li>             
              ";
        }
        // line 19
        echo "
              ";
        // line 20
        if ((!array_key_exists("tribes", $context))) {
            // line 21
            echo "              <li><a href=\"#\"> <i class=\"icon-eye-open icon-white\"></i> Tribes</a></li>
              ";
        } else {
            // line 23
            echo "              <li class=\"active\"><a href=\"#\"> <i class=\"icon-eye-open icon-white\"></i> Tribes</a></li>
              ";
        }
        // line 25
        echo "
              ";
        // line 26
        if ((!array_key_exists("message", $context))) {
            // line 27
            echo "              <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_profile_messages", array("id" => $this->getAttribute($this->getContext($context, "user"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-envelope icon-white\"></i> My Messages</a></li>
              ";
        } else {
            // line 29
            echo "              <li class=\"active\" ><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_profile_messages", array("id" => $this->getAttribute($this->getContext($context, "user"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-envelope icon-white\"></i> Messages</a></li>
              ";
        }
        // line 31
        echo "            </ul>
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
