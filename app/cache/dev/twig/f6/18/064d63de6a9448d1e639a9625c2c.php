<?php

/* CitytribeBundle:Blog:index.html.twig */
class __TwigTemplate_f618064d63de6a9448d1e639a9625c2c extends Twig_Template
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
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('cityblog_body', $context, $blocks);
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "\tHOME - ";
    }

    // line 6
    public function block_cityblog_body($context, array $blocks = array())
    {
        // line 7
        echo "
\t<h2>Liste des messages</h2>
\t<div>  <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_new"), "html", null, true);
        echo "\">New Message</a></div>

\t<ul>
\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_show", array("id" => $this->getAttribute($this->getContext($context, "message"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "titre"), "html", null, true);
            echo "</a>
\t\t\t\tpar ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "auteur"), "html", null, true);
            echo ",
\t\t\t\tle ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, "message"), "date"), "d/m/Y"), "html", null, true);
            echo "
\t\t\t</li>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "\t\t\t<li>Pas (encore !) de messages</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "\t</ul>

    <div class=\"pagination\">
    \t<ul>
    \t\t";
        // line 26
        echo "    \t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "nb_pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 27
            echo "    \t\t\t<li";
            if (($this->getContext($context, "p") == $this->getContext($context, "page"))) {
                echo " class=\"active\"";
            }
            echo ">
    \t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Cityblog_home", array("page" => $this->getContext($context, "p"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
            echo "</a>
    \t\t\t</li>
    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "    \t</ul>
    </div>

";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return true;
    }
}
