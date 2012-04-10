<?php

/* ::layout.html.twig */
class __TwigTemplate_eb70b60ae1a35f21df78ade825b78f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
<html>
\t<head>
\t\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t        <script>
  function goLogIn(){
      window.location = \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html", null, true);
        echo "\";
  }

  function onFbInit() {
      if (typeof(FB) != 'undefined' && FB != null ) {
\t  console.log(\"Got facebook SDK\");
          FB.Event.subscribe('auth.statusChange', function(response) {
              setTimeout(goLogIn, 500);
          });
      }
  }
</script>\t
\t</head>
\t
\t<body>
      ";
        // line 24
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "fbAsyncInit" => "onFbInit();"));
        echo "
\t\t<div id=\"en_tete\">
\t\t\t<h1> Mycitytribe Header</h1>
\t\t</div> 

";
        // line 29
        echo $this->env->getExtension('facebook')->renderLoginButton(array("autologoutlink" => true));
        echo "
 
\t\t<div id=\"corps\">
\t\t
\t\t\t";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "\t\t\t
\t\t</div> 
 
\t\t<div id=\"pied_de_page\"> 
\t 
\t\t</div>
\t</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "MycityTribe";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
