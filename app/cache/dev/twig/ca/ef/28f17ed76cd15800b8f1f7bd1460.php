<?php

/* CitytribeBundle:Profile:edit.html.twig */
class __TwigTemplate_caef28f17ed76cd15800b8f1f7bd1460 extends Twig_Template
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
        echo "\t<form id =\"form\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_profile_edit"), "html", null, true);
        echo "\" method=\"post\" }}>
\t
\t";
        // line 6
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "username"));
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "username"), array("attr" => array("class" => "span4")));
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "email"), array("attr" => array("class" => "span4")));
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "sex"));
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "sex"), array("attr" => array("class" => "span4")));
        echo "

        ";
        // line 15
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "language"));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "language"), array("attr" => array("class" => "span4")));
        echo "

        ";
        // line 18
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "occupation"));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "occupation"), array("attr" => array("class" => "span4")));
        echo "

        ";
        // line 21
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "visit_goal"));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "visit_goal"), array("attr" => array("class" => "span4")));
        echo "

        ";
        // line 24
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "about_me"));
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "about_me"), array("attr" => array("class" => "span6")));
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

        <p>
\t        <button class=\"btn btn-success\" type=\"submit\">Save Changes</button>
\t    </p>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
