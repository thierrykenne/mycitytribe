<?php

/* CityBlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_d5cd6783b4603c22a93e060ba517d9fe extends Twig_Template
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
        echo "Modifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_cityblog_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t<h2>Modifier un article</h2>
\t
\t";
        // line 9
        $this->env->loadTemplate("CityBlogBundle:Blog:formulaire.html.twig")->display(array_merge($context, array("form" => $this->getContext($context, "form"))));
        // line 10
        echo "\t
\t<p>
\t\tVous éditez un article déjà existant,
\t\tne le changez pas trop pour éviter
\t\taux membres de ne pas comprendre
\t\tce qui se passe.
\t</p>
\t


";
    }

    public function getTemplateName()
    {
        return "CityBlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
