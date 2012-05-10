<?php

/* ::Bloglayout.html.twig */
class __TwigTemplate_8ce78a0a6686a81d903de64d1e4c85b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head_style' => array($this, 'block_head_style'),
            'title' => array($this, 'block_title'),
            'flashes' => array($this, 'block_flashes'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'container' => array($this, 'block_container'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "locale"), "html", null, true);
        echo "\">
<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28877518-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    ";
        // line 19
        $this->displayBlock('head_style', $context, $blocks);
        // line 32
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!--<link rel=\"shortcut icon\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />-->
    <link rel=\"icon\" type=\"image/png\" href=\" ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />
<script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.7.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-tab.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\$(document).ready(function() {
    \$('.navigation .container li').click( function(){
        \$('.navigation .container li').removeAttr('class');
        \$(this).attr('class','active');
    });

    \$('.tool').popover();

    
})
</script>
</head>
<body>
";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "</body>
</html>";
    }

    // line 19
    public function block_head_style($context, array $blocks = array())
    {
        // line 20
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fed6b85_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fed6b85_0") : $this->env->getExtension('assets')->getAssetUrl("css/fed6b85_bootstrap_1.css");
            // line 25
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/menu.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/content.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icon.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "fed6b85_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fed6b85_1") : $this->env->getExtension('assets')->getAssetUrl("css/fed6b85_custom_2.css");
            // line 25
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/menu.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/content.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icon.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "fed6b85_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fed6b85_2") : $this->env->getExtension('assets')->getAssetUrl("css/fed6b85_comments_3.css");
            // line 25
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/menu.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/content.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icon.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        } else {
            // asset "fed6b85"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fed6b85") : $this->env->getExtension('assets')->getAssetUrl("css/fed6b85.css");
            // line 25
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/menu.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/content.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icon.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
        // line 31
        echo "    ";
    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        echo "MycityTribe -Alfa";
    }

    // line 60
    public function block_flashes($context, array $blocks = array())
    {
        // line 61
        echo "                ";
        $context["flash"] = $this->env->loadTemplate("IsdevTwitterBootstrapBundle::flash.html.twig");
        // line 62
        echo "\t\t\t    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "flash"), "session_msg", array(), "method"), "html", null, true);
        echo "
\t\t\t";
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        // line 66
        echo "                <div class=\"row\"></div>
            ";
    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        // line 70
        echo "        <footer class=\"row\">
\t   <p align=\"center\"> Copyright &copy; <a href=\"\" target=\"_blank\">MyCityTribe </a> ";
        // line 71
        echo twig_escape_filter($this->env, twig_date_format_filter("now", "Y"), "html", null, true);
        echo "</p>
        </footer>
    ";
    }

    // line 56
    public function block_container($context, array $blocks = array())
    {
        // line 57
        echo "
        <div class=\"content\">
\t\t\t
\t\t\t";
        // line 60
        $this->displayBlock('flashes', $context, $blocks);
        // line 64
        echo "
            ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "        </div>
    ";
        // line 69
        $this->displayBlock('footer', $context, $blocks);
        // line 74
        echo "\t";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "    <div class=\"container\">
\t";
        // line 56
        $this->displayBlock('container', $context, $blocks);
        // line 75
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "::Bloglayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
