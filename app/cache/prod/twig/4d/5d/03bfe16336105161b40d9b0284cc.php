<?php

/* CitytribeBundle:Blog:new.html.twig */
class __TwigTemplate_4d5d03bfe16336105161b40d9b0284cc extends Twig_Template
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
        echo "<div class=\"form-msg\">
\t<p><h2>New Subject</h2></p>

\t<p> <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t    ";
        // line 7
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
\t    <p>
\t        <button class=\"btn btn-success\" type=\"submit\">Create</button>
\t    </p>
\t</form>

\t<ul class=\"record_actions\">
\t    <li>
\t        <a href=\"";
        // line 15
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
        return "CitytribeBundle:Blog:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
