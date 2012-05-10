<?php

/* CityBlogBundle:Blog:voir.html.twig */
class __TwigTemplate_1ecdb2745f9a756ad1b006085d095a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cityblog_body' => array($this, 'block_cityblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CityBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Liste des articles - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_cityblog_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t<p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "article"), "html", null, true);
        echo "</p>
\t
";
    }

    public function getTemplateName()
    {
        return "CityBlogBundle:Blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
