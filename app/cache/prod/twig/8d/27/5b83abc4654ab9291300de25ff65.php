<?php

/* ::navigation.html.twig */
class __TwigTemplate_8d275b83abc4654ab9291300de25ff65 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar\">
\t<div class=\"navbar-inner\">
\t\t<div class=\"container\">
\t\t\t<div class=\"tabbable\">
\t\t\t  <ul class=\"nav nav-tabs\">
\t\t\t    <li class=\"active\"><a href=\"#1\" data-toggle=\"tab\">Section 1</a></li>
\t\t\t    <li><a href=\"#2\" data-toggle=\"tab\">Section 2</a></li>
\t\t\t  </ul>
\t\t\t  <div class=\"tab-content\">
\t\t\t    <div class=\"tab-pane active\" id=\"1\">
\t\t\t      <p>I'm in Section 1.</p>
\t\t\t    </div>
\t\t\t    <div class=\"tab-pane\" id=\"2\">
\t\t\t      <p>Howdy, I'm in Section 2.</p>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "::navigation.html.twig";
    }

    public function isTraitable()
    {
        return true;
    }
}
