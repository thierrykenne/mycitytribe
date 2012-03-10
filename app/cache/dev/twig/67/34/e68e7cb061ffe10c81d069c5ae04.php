<?php

/* CitytribeBundle:Default:index.html.twig */
class __TwigTemplate_6734e68e7cb061ffe10c81d069c5ae04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Commentlayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "Hello!2
";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array("notice", ), "method")) {
            // line 5
            echo "    <div class=\"flash-notice\">
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array("notice", ), "method"), "html", null, true);
            echo "
    </div>
";
        }
        // line 9
        $this->env->loadTemplate("FOSCommentBundle:Thread:async.html.twig")->display(array_merge($context, array("id" => "foo")));
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
