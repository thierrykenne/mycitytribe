<?php

/* CitytribeBundle:Blog:edit.html.twig */
class __TwigTemplate_e4f17957af798d7cc1b6d3d7749f5ae9 extends Twig_Template
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

    // line 3
    public function block_middle($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"form-msg\">
\t<p><h2>Edit Subject</h2></p>

\t<p> 
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
    ";
        // line 9
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "edit_form"));
        echo "
\t    <p>
\t        <button class=\"btn btn-success\" type=\"submit\">Edit</button>
\t    </p>
\t</form>

\t<ul class=\"record_actions\">
\t    <li>
\t        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Cityblog_home"), "html", null, true);
        echo "\">
\t            Back to the list
\t        </a>
\t    </li>
\t</ul></p>
</div>

";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Blog:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
