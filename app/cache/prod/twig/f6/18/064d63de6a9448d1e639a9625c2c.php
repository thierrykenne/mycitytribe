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
        echo "\t\t<div class=\"msg-btn span6\">
\t\t<a class=\"new-msg btn btn-large pull-right\" href=\" ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_new"), "html", null, true);
        echo " \"><i class=\"icon-comment\"></i> Add New Message</a>
\t\t</div>
\t\t<h3> Message List of the tribe</h3>
\t\t<div class=\"message\">

\t\t\t\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t        <div class=\"span2 \">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "author"), "html", null, true);
            echo "
\t\t\t\t         <strong>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, "message"), "date"), "Y-m-d"), "html", null, true);
            echo "</strong>
\t\t\t\t    \t</div>
\t\t\t\t        <div class=\"span1\"> <a href=\"\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "thread"), "numComments"), "html", null, true);
            echo "</a> Posts </div>
\t\t\t\t        <div class=\"span3\"> 
\t\t\t\t          Last comment By: <a href=\"\"> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "thread"), "lastCommentAuthor"), "html", null, true);
            echo " </a>
\t\t\t\t        </div>
\t\t\t    \t</div>
\t\t\t        <div class=\"row\">
\t\t\t        \t<div class=\"span2\">
\t\t\t        \t\t<img class=\"img-msg2\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/avatars/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "author"), "image"), "html", null, true);
            echo " \">
\t\t\t        \t</div>
\t\t\t        \t<div class=\"span4\">
\t\t\t        \t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_show", array("id" => $this->getAttribute($this->getContext($context, "message"), "id"))), "html", null, true);
            echo "\">
\t\t\t            \t\t<p><div class=\"title-msg\"> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "titre"), "html", null, true);
            echo "</div></p>
\t\t\t            \t</a>
\t\t\t        \t</div>
\t\t\t            
\t\t\t        </div>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "\t\t\t\t\t<ul> <li>There are no Message yet! </li> </ul>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "\t\t</div>
\t\t\t<div class=\"pagination\">
\t\t    \t<ul>
\t\t    \t\t";
        // line 37
        echo "\t\t    \t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "nb_pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 38
            echo "\t\t    \t\t\t<li";
            if (($this->getContext($context, "p") == $this->getContext($context, "page"))) {
                echo " class=\"active\"";
            }
            echo ">
\t\t    \t\t\t\t<a href=\"";
            // line 39
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
        // line 42
        echo "\t\t    \t</ul>
\t\t\t</div>
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
