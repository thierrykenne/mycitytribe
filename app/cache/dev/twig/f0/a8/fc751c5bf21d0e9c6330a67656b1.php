<?php

/* FOSCommentBundle:Thread:comments.html.twig */
class __TwigTemplate_f0a8fc751c5bf21d0e9c6330a67656b1 extends Twig_Template
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
        $context["depth"] = ((array_key_exists("depth", $context)) ? (_twig_default_filter($this->getContext($context, "depth"), 0)) : (0));
        // line 13
        $context["view"] = ((array_key_exists("view", $context)) ? (_twig_default_filter($this->getContext($context, "view"), "tree")) : ("tree"));
        // line 14
        echo "
";
        // line 15
        if (((($this->getContext($context, "depth") == 0) && $this->getAttribute($this->getContext($context, "thread"), "commentable")) && $this->env->getExtension('fos_comment')->canComment())) {
            // line 16
            echo "    ";
            echo $this->env->getExtension('actions')->renderAction("FOSCommentBundle:Thread:newThreadComments", array("id" => $this->getAttribute($this->getContext($context, "thread"), "id")), array());
        }
        // line 18
        echo "
";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "comments"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["commentinfo"]) {
            // line 20
            echo "    ";
            $this->env->loadTemplate("FOSCommentBundle:Thread:comment.html.twig")->display(array_merge($context, array("children" => $this->getAttribute($this->getContext($context, "commentinfo"), "children"), "comment" => $this->getAttribute($this->getContext($context, "commentinfo"), "comment"), "depth" => $this->getContext($context, "depth"), "view" => $this->getContext($context, "view"))));
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentinfo'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
