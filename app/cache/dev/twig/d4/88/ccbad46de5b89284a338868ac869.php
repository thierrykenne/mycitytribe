<?php

/* CityBlogBundle:Blog:liste.html.twig */
class __TwigTemplate_d488ccbad46de5b89284a338868ac869 extends Twig_Template
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
\t<h2>Liste des articles</h2>
\t
\t<ul>
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "articles"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cityblog_voir", array("slug" => $this->getAttribute($this->getContext($context, "article"), "slug", array(), "array"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\tpar ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "auteur", array(), "array"), "html", null, true);
            echo ",
\t\t\t\tle ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, "article"), "date", array(), "array"), "d/m/Y"), "html", null, true);
            echo "
\t\t\t</li>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "\t\t\t<li>Pas (encore !) d'articles</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "\t</ul>
\t
";
    }

    public function getTemplateName()
    {
        return "CityBlogBundle:Blog:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
