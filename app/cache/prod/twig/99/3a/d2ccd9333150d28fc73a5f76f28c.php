<?php

/* CitytribeBundle:Profile:avatar.html.twig */
class __TwigTemplate_993ad2ccd9333150d28fc73a5f76f28c extends Twig_Template
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
        $this->env->loadTemplate("CitytribeBundle:Menu:profile_nav.html.twig")->display(array_merge($context, array("tab1" => "", "tab2" => "", "tab3" => "active")));
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array("notice", ), "method")) {
            // line 5
            echo "    <div class=\"flash-notice alert alert-info\">
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array("notice", ), "method"), "html", null, true);
            echo "
    </div>
";
        }
        // line 9
        echo "
\t<form id =\"form\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_avatar"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t
\t<div class=\"span4\">\t";
        // line 12
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo " </div>
\t
\t<div class=\"span2\">\t<input type=\"submit\" class=\"btn btn-inverse\" value =\" Update Image\"/></div>
\t</form>
\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/avatars/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "image"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Profile:avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
