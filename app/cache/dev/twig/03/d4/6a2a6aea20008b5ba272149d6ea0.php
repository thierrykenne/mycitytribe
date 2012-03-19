<?php

/* FOSCommentBundle:Thread:new.html.twig */
class __TwigTemplate_03d46a2a6aea20008b5ba272149d6ea0 extends Twig_Template
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
<form class=\"fos_comment_comment_form\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_post_threads"), "html", null, true);
        echo "\" method=\"POST\">

    ";
        // line 14
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 22
        echo "
    <div class=\"fos_comment_submit\">
        ";
        // line 24
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 27
        echo "    </div>

</form>
";
    }

    // line 14
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "id"));
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "id"));
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "permalink"));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "permalink"));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "_token"));
        echo "
    ";
    }

    // line 24
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        // line 25
        echo "            <input type=\"submit\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_submit", array(), "FOSCommentBundle");
        echo "\" />
        ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
