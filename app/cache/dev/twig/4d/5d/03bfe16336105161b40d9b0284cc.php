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
\t\t<div>
\t    ";
        // line 8
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "titre"));
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "titre"), array("attr" => array("class" => "titre")));
        echo "
        </div>
        <div>
                ";
        // line 12
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "contenu"));
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "contenu"), array("attr" => array("class" => "contenu")));
        echo "
            </div>
            <div class=\"nationality\">
                ";
        // line 16
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "nationality"));
        echo "
                ";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "nationality"), array("attr" => array("class" => "nationality", "readonly" => "readonly", "value" => $this->getAttribute($this->getContext($context, "countrytribe"), "d"))));
        // line 18
        echo "
            </div>
              ";
        // line 20
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "   
\t    <p>
\t        <button class=\"btn btn-success\" type=\"submit\">Create</button>
\t    </p>
\t</form>

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
