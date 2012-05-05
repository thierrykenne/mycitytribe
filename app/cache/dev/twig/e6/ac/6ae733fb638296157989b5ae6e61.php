<?php

/* FOSCommentBundle:Thread:comment_new.html.twig */
class __TwigTemplate_e6ac6ae733fb638296157989b5ae6e61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'fos_comment_form_title' => array($this, 'block_fos_comment_form_title'),
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
";
        // line 12
        $context["first"] = ((array_key_exists("first", $context)) ? (_twig_default_filter($this->getContext($context, "first"), false)) : (false));
        // line 13
        echo "
<div class=\"fos_comment_comment_form_holder\">
    ";
        // line 15
        $this->displayBlock('fos_comment_form_title', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $context["url_parameters"] = array("id" => $this->getContext($context, "id"));
        // line 26
        echo "    ";
        if ((!(null === $this->getContext($context, "parent")))) {
            // line 27
            echo "        ";
            $context["url_parameters"] = twig_array_merge($this->getContext($context, "url_parameters"), array("parentId" => $this->getAttribute($this->getContext($context, "parent"), "id")));
            // line 28
            echo "    ";
        }
        // line 29
        echo "
    <form class=\"fos_comment_comment_form\" action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_post_thread_comments", $this->getContext($context, "url_parameters")), "html", null, true);
        echo "\" data-parent=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "parent", true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "parent", true), "id"))) : ("")), "html", null, true);
        echo "\" method=\"POST\">

        ";
        // line 32
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 42
        echo "
        <div class=\"fos_comment_submit\">
            ";
        // line 44
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 50
        echo "        </div>

    </form>
</div>
";
    }

    // line 15
    public function block_fos_comment_form_title($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        if ($this->getContext($context, "first")) {
            // line 17
            echo "            <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_headline_first", array(), "FOSCommentBundle");
            echo "</h3>
        ";
        } elseif ((!(null === $this->getContext($context, "parent")))) {
            // line 19
            echo "            <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_reply_reply_to", array("%name%" => $this->getAttribute($this->getContext($context, "parent"), "authorName")), "FOSCommentBundle");
            echo "</h3>
        ";
        } else {
            // line 21
            echo "            <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_headline", array(), "FOSCommentBundle");
            echo "</h3>
        ";
        }
        // line 23
        echo "    ";
    }

    // line 32
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        // line 33
        echo "            <div class=\"fos_comment_form_errors\">
            ";
        // line 34
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
            </div>
            <div class=\"fos_comment_form_errors\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "body"));
        echo "
            </div>
            ";
        // line 39
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "body"));
        echo "
            ";
        // line 40
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "_token"));
        echo "
        ";
    }

    // line 44
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        // line 45
        echo "                ";
        if ((!(null === $this->getContext($context, "parent")))) {
            // line 46
            echo "                    <input type=\"button\" value=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_reply_cancel", array(), "FOSCommentBundle");
            echo "\" class=\"fos_comment_comment_reply_cancel\" />
                ";
        }
        // line 48
        echo "                <input type=\"submit\" class=\"btn\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_submit", array(), "FOSCommentBundle");
        echo "\" />
            ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
