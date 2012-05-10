<?php

/* IsdevTwitterBootstrapBundle:Form:fields.html.twig */
class __TwigTemplate_f117b0783035b725b1147aad0e7e4bd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
            'field_errors' => array($this, 'block_field_errors'),
            'field_row' => array($this, 'block_field_row'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'field_rows' => array($this, 'block_field_rows'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_field_label($context, array $blocks = array())
    {
        // line 6
        ob_start();
        // line 7
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        if ($this->getContext($context, "required")) {
            echo "<span class=\"required\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.required_field"), "html", null, true);
            echo "\">*</span>";
        }
        echo ":
    </label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_field_errors($context, array $blocks = array())
    {
        // line 16
        ob_start();
        // line 17
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 18
            echo "        <span class=\"help-block\">
            ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 20
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 22
            echo "        </span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 29
    public function block_field_row($context, array $blocks = array())
    {
        // line 30
        ob_start();
        // line 31
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "form"), "hasChildren")) {
            // line 32
            echo "        ";
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
            echo "
    ";
        } else {
            // line 34
            echo "        <div class=\"control-group";
            if ($this->getContext($context, "errors")) {
                echo " error";
            }
            echo "\">
            ";
            // line 35
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"));
            echo "
            <div class=\"controls\">
                ";
            // line 37
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
            echo "
                ";
            // line 38
            if (array_key_exists("parent", $context)) {
                // line 39
                echo "                    ";
                echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "parent"));
                echo "
                ";
            } else {
                // line 41
                echo "                    ";
                echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
                echo "
                ";
            }
            // line 43
            echo "            </div>
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 51
    public function block_repeated_row($context, array $blocks = array())
    {
        // line 52
        ob_start();
        // line 53
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 54
            echo "        ";
            echo $this->env->getExtension('form')->renderRow($this->getContext($context, "child"), array("parent" => $this->getContext($context, "form"), "form" => $this->getContext($context, "child"), "errors" => $this->getContext($context, "errors")));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 61
    public function block_field_rows($context, array $blocks = array())
    {
        // line 62
        ob_start();
        // line 63
        echo "    ";
        $context["flash"] = $this->env->loadTemplate("IsdevTwitterBootstrapBundle::flash.html.twig");
        // line 64
        echo "
    ";
        // line 65
        if ($this->getContext($context, "errors")) {
            // line 66
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 67
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "flash"), "msg", array("error", $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), ), "method"), "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 69
            echo "    ";
        }
        // line 70
        echo "
    ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 72
            echo "        ";
            echo $this->env->getExtension('form')->renderRow($this->getContext($context, "child"));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "IsdevTwitterBootstrapBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
