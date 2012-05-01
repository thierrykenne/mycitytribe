<?php

/* CitytribeBundle:Blog:index.html.twig */
class __TwigTemplate_f618064d63de6a9448d1e639a9625c2c extends Twig_Template
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
        $this->env->loadTemplate("CitytribeBundle:Menu:profile_nav.html.twig")->display(array_merge($context, array("tab1" => "", "tab2" => "active", "tab3" => "")));
        // line 4
        echo "\t\t<h2>Liste des messages</h2>
\t\t<div>  <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_new"), "html", null, true);
        echo "\">New Message</a></div>
\t\t<div class=\"wall\">
\t\t\t<ul>
\t\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_show", array("id" => $this->getAttribute($this->getContext($context, "message"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "titre"), "html", null, true);
            echo "</a>
\t\t\t\t\t\tpar ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "author"), "html", null, true);
            echo ",
\t\t\t\t\t\tle ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, "message"), "date"), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t</li>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "\t\t\t\t\t<li>Pas (encore !) de messages</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "\t\t\t</ul>
\t    \t<div class=\"pagination\">
\t\t    \t<ul>
\t\t    \t\t";
        // line 21
        echo "\t\t    \t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "nb_pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 22
            echo "\t\t    \t\t\t<li";
            if (($this->getContext($context, "p") == $this->getContext($context, "page"))) {
                echo " class=\"active\"";
            }
            echo ">
\t\t    \t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Cityblog_home", array("page" => $this->getContext($context, "p"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
            echo "</a>
\t\t    \t\t\t</li>
\t\t    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "\t\t    \t</ul>
\t\t\t</div>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
