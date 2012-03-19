<?php

/* FOSCommentBundle:Thread:vote_new.html.twig */
class __TwigTemplate_03eff77296396196a33087ea77999abb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'fos_comment_form_fields' => array($this, 'block_fos_comment_form_fields'),
            'fos_comment_form_submit' => array($this, 'block_fos_comment_form_submit'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"fos_comment_vote_form_holder\">
    <form class=\"fos_comment_vote_form\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_post_thread_comment_votes", array("id" => $this->getContext($context, "id"), "commentId" => $this->getContext($context, "commentId"))), "html", null, true);
        echo "\" data-score-holder=\"fos_comment_score_";
        echo twig_escape_filter($this->env, $this->getContext($context, "commentId"), "html", null, true);
        echo "\" method=\"POST\">

        ";
        // line 15
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 21
        echo "
        <div class=\"fos_comment_submit\">
            ";
        // line 23
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 26
        echo "        </div>

    </form>
</div>
";
    }

    // line 15
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        // line 16
        echo "            ";
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "value"));
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "value"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "_token"));
        echo "
        ";
    }

    // line 23
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        // line 24
        echo "                <input type=\"submit\" />
            ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:vote_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
