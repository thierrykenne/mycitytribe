<?php

/* CitytribeBundle:Blog:show.html.twig */
class __TwigTemplate_c92103a9054173f22ab8703371f8fec7 extends Twig_Template
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
        echo "<div class=\"message\">
    <div class=\"row\">
        <div class=\"span3 \"><img class=\"img-msg\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/avatars/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "image"), "html", null, true);
        echo " \">
         <strong>";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, "message"), "date"), "Y-m-d H:i:s"), "html", null, true);
        echo "</strong></div>
        <div class=\"span1\"> <a href=\"\"> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "num"), "html", null, true);
        echo "</a> Post </div>
        <div class=\"span2\"> 
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_edit", array("id" => $this->getAttribute($this->getContext($context, "message"), "id"))), "html", null, true);
        echo "\"> Edit Message </a>
        </div>
    </div>
        <div class=\"\">
            <p><div class=\"title-msg\"> Title: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "titre"), "html", null, true);
        echo "</div></p>
            <p><div class=\"content-msg\"> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "contenu"), "html", null, true);
        echo "</div></p>
            <p> <ul> <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Cityblog_home"), "html", null, true);
        echo "\">Back to the list</a></li></ul> </p>
        </div>
</div>
<div class=\"comments\">
    ";
        // line 19
        $this->env->loadTemplate("FOSCommentBundle:Thread:async.html.twig")->display(array_merge($context, array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "thread"), "id"))));
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
