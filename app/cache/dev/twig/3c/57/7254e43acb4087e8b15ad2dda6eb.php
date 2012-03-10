<?php

/* FOSCommentBundle:Thread:comment_votes.html.twig */
class __TwigTemplate_3c577254e43acb4087e8b15ad2dda6eb extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_vote_score", array(), "FOSCommentBundle");
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "commentScore"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_votes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
