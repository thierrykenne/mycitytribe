<?php

/* CitytribeBundle:Menu:left.html.twig */
class __TwigTemplate_1fba8d8edc56cb50bb327033acc70cc7 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"left-menu\">
\t<ul class=\"thumbnails\">
\t  <li class=\"span3\">
\t    <div class=\"thumbnail\">
\t      <img src=\" ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/avatars/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "image"), "html", null, true);
        echo "\" alt=\"\">
\t      <p><strong> Username: </strong>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</p>
\t      <p><strong> Country: </strong> ";
        // line 7
        echo twig_escape_filter($this->env, \City\CitytribeBundle\Twig\Extension\TwigExtension::countryFilter($this->getAttribute($this->getContext($context, "user"), "nationality")), "html", null, true);
        echo " </p>
\t      <p><strong> Occupation: </strong> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "occupation"), "html", null, true);
        echo " </p>
\t      <p><strong>Usage: </strong> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "visitgoal"), "html", null, true);
        echo " </p>
\t    </div>
\t  </li>
\t</ul>

\t<ul class=\"nav nav-tabs nav-stacked\">
\t <li class=\"first\"> <a href=\"\"> UTENTI TRIBU </a>\t </li>
\t <li class=\"even\"> <a href=\"\"> AMICI PREFERITI</a> </li>
\t <li class=\"odd\"> <a href=\"\"> TRIBU PREFERITE</a> </li>
\t <li class=\"even\"> <a href=\"\"> MESSAGES</a></li>
\t <li class=\"last\"> <a href=\"\"> CHAT</a></li>\t
\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:Menu:left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
