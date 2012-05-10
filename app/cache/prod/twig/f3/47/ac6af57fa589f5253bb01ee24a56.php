<?php

/* CitytribeBundle:Profile:informations.html.twig */
class __TwigTemplate_f347ac6af57fa589f5253bb01ee24a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CitytribeBundle::default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_middle($context, array $blocks = array())
    {
        // line 3
        $this->env->loadTemplate("CitytribeBundle:Menu:profile_nav.html.twig")->display(array_merge($context, array("tab1" => "active", "tab2" => "", "tab3" => "")));
        // line 4
        echo "<div class=\"profile  \">
\t <a class=\"btn btn-primary pull-right\" href=";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_profile_edit"), "html", null, true);
        echo "> <i class=\"icon-edit icon-white\"></i>  Edit Informations</a>
\t<p> <div id=\"username\"> <strong>Username:</strong> \t";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</div></p>
\t<p> <div id=\"email\"> <strong>Email:</strong>\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
        echo "</div></p>
\t<p> <div id=\"nation\"> <strong>Country:</strong>\t";
        // line 8
        echo twig_escape_filter($this->env, \City\CitytribeBundle\Twig\Extension\TwigExtension::countryFilter($this->getAttribute($this->getContext($context, "user"), "nationality")), "html", null, true);
        echo "</div></p>
\t<p> <div id=\"sex\">\t <strong>Gender: </strong>       ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "sex"), "html", null, true);
        echo "</div></p>
\t<p> <div id=\"occupation\"> <strong>Occupation: </strong>\t";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "occupation"), "html", null, true);
        echo "</div></p>
\t<p> <div id=\"language\"> <strong>Speech: </strong>\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "language"), "html", null, true);
        echo "</div></p>
\t<p> <div id=\"aboutMe\"> <strong>About Me or My Interests: </strong>\t";
        // line 12
        echo twig_escape_filter($this->env, strip_tags($this->getAttribute($this->getContext($context, "user"), "aboutMe")), "html", null, true);
        echo "</div></p>
</div>
";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Profile:informations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
