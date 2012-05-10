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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("CitytribeBundle_profile_edit"), "html", null, true);
        echo "\" method=\"post\" }}>
\t
\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
\t
\t\t<input type=\"submit\" />
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
