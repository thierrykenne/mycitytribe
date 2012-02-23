<?php

/* CityBlogBundle:Blog:index.html.twig */
class __TwigTemplate_6a6130d435663f75abadbbae28093f0c extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur ma première page avec le Site du Zéro !</title>
    </head>
    <body>
        <h1>Hello World ! ";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "nom"), "html", null, true);
        echo "</h1>

        <p>
            Le Hello World est un grand classique en programmation.
            Il signifie énormément, car cela veut dire que vous avez
            réussi à exécuter le programme pour accomplir une tâche simple :
            afficher ce hello world !
        </p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "CityBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
