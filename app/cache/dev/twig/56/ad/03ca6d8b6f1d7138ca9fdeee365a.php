<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_56ad03ca6d8b6f1d7138ca9fdeee365a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div >
<div class=\"logo row \"> <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/new-logo.jpg"), "html", null, true);
        echo "\">
\t<div class=\"slogan  \">  <h2 > <span>Felling at your own home everywhere!</span> </h2></div>
</div>

<div class=\"row contentbox\"> 

\t<div class=\"span6 video\"> 
\t\t<object width=\"445\" height=\"315\"><param name=\"movie\" value=\"http://www.youtube.com/v/gaZH5ec-zWE?version=3&amp;hl=fr_FR&amp;rel=0\">
\t\t</param><param name=\"allowFullScreen\" value=\"true\"></param>
\t\t<param name=\"allowscriptaccess\" value=\"always\"></param><embed src=\"http://www.youtube.com/v/gaZH5ec-zWE?version=3&amp;hl=fr_FR&amp;rel=0\" type=\"application/x-shockwave-flash\" width=\"420\" height=\"315\" allowscriptaccess=\"always\" allowfullscreen=\"true\">
\t\t</embed></object>
\t</div>
\t<div class=\"span6 rightbox\"> 
\t\t<div class=\"cnxbox row\"> 
\t\t\t<div class=\"registerbox span3 \" id=\"registerbox\"> 
\t\t\t\t";
        // line 26
        echo $this->env->getExtension('facebook')->renderLoginButton(array("autologoutlink" => true));
        echo "
\t\t\t\t<a class=\"btn btn-warning register-now\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\"> <h3>Register Now</h3></a>
\t\t\t</div> 
\t\t\t<div class=\"loginbox span3 \">
\t\t\t\t<form action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\" />

\t\t\t\t    <!--<label for=\"username\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>-->
\t\t\t\t    \t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\"  placeholder=\"Username or Email...\" /> 
\t\t\t\t    <!--<label for=\"password\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>-->
\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Password...\" />

\t\t\t\t    <label for=\"remember_me\"  class=\"checkbox\" >";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
\t\t\t\t    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t    </label>
\t\t\t\t    <button type=\"submit\" id=\"_submit\" name=\"_submit\"  class=\"btn\">Sign in</button>
\t\t\t\t<!--<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /> -->
\t\t\t\t</form>\t\t\t\t
\t\t\t</div>
\t\t </div>
\t\t <div class=\"text row english \">MyCityTribe is the social network where you can find information about the city in which you are migrating or traveling. In the community you can come into contact with people from your own tribe(Nationality) who have already faced the same problems and with whom you have same interests.
\t\t </div>
\t\t <div class=\"text row italian\"> MyCityTribe è il social network dove trovare informazioni sulla città in cui si migra o si viaggia. Nella community puoi entrare in contatto con personne della tua stessa tribù (nationalità) che hanno già affrontato i tuoi stessi problemi ed hanno i medissimi tuoi interessi.</div>
\t</div>

</div>
            

</div>
";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        if ($this->getContext($context, "error")) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getContext($context, "error"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "

";
        // line 9
        $this->displayBlock('content', $context, $blocks);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
