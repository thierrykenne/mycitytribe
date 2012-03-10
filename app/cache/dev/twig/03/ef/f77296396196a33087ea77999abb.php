<?php

/* FOSCommentBundle:Thread:vote_new.html.twig */
class __TwigTemplate_03eff77296396196a33087ea77999abb extends Twig_Template
{
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



    </form>
</div>
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
