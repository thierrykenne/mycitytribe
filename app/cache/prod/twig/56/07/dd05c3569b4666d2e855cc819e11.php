<?php

/* CityBlogBundle::layout.html.twig */
class __TwigTemplate_5607dd05c3569b4666d2e855cc819e11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cityblog_body' => array($this, 'block_cityblog_body'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_cityblog_body($context, array $blocks = array())
    {
        // line 10
        echo "\t";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t<h1>Blog</h1>
\t
\t";
        // line 9
        $this->displayBlock('cityblog_body', $context, $blocks);
        // line 11
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "CityBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
