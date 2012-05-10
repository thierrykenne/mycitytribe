<?php

/* CitytribeBundle:Menu:default.html.twig */
class __TwigTemplate_9c44003f91da45fb6bdc71637b233f06 extends Twig_Template
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
              <li >
                <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Cityblog_home"), "html", null, true);
        echo "\"> <i class=\" active icon-white icon-home \"> </i> Home</a>
               </li>
                <li class=\"active\">
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\"> <i class=\" active icon-white icon-home \"></i> Register</a>
               </li>
               <li >
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
        echo "\"> <i class=\" active icon-white icon-home \"></i> Login</a>
               </li>

             
            </ul>
        </div>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Menu:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
