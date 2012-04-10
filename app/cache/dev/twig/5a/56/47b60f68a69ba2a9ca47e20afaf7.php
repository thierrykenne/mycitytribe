<?php

/* CityUserBundle:destination:show.html.twig */
class __TwigTemplate_5a5647b60f68a69ba2a9ca47e20afaf7 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul> echo
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "userdestinations"));
        foreach ($context['_seq'] as $context["_key"] => $context["userdestination"]) {
            // line 3
            echo "    <li> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "userdestination"), "destination"), "name"), "html", null, true);
            echo "--Tribe  | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "userdestination"), "activated"), "html", null, true);
            echo "
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userdestination'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 6
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "users"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 7
            echo "    <li> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "user"), "user"), "email"), "html", null, true);
            echo "
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 10
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "CityUserBundle:destination:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
