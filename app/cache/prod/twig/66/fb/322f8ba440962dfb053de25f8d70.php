<?php

/* CitytribeBundle:users:show.html.twig */
class __TwigTemplate_66fb322f8ba440962dfb053de25f8d70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CitytribeBundle::default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_middle($context, array $blocks = array())
    {
        // line 3
        echo "<h3> Users Tribe List</h3>
<table class=\"table table-bordered table-striped user-list\">
\t<tbody>
\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "users"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 7
            echo "\t\t<tr>
\t\t\t<td> <a href=\"\" class=\"tool\" rel=\"popover\"  href=\"#\" data-original-title=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "user"), "user"), "username"), "html", null, true);
            echo "\" 
\t\t\t\tdata-content= \" <p><strong>Country:</strong>\t";
            // line 9
            echo twig_escape_filter($this->env, \City\CitytribeBundle\Twig\Extension\TwigExtension::countryFilter($this->getAttribute($this->getAttribute($this->getContext($context, "user"), "user"), "nationality")), "html", null, true);
            echo "</p>
\t\t\t\t<p><strong>Gender: </strong>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "user"), "user"), "sex"), "html", null, true);
            echo " </p> <p> <strong>Occupation: </strong>\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "user"), "user"), "occupation"), "html", null, true);
            echo "</p>
\t\t\t\t<p> <strong>Speech: </strong>\t";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "user"), "user"), "language"), "html", null, true);
            echo "</p>
\t\t\t\t<p><strong>Interests: </strong>\t";
            // line 12
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($this->getAttribute($this->getContext($context, "user"), "user"), "aboutMe")), "html", null, true);
            echo "</p>
\t\t\t\t\" > 
\t\t\t\t<img class=\"small-img\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/avatars/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "user"), "user"), "image"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "user"), "user"), "username"), "html", null, true);
            echo " </a>
\t\t\t </td>
\t\t\t<td>  
\t\t\t\t<p> <span class=\"badge badge-info \"> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "numComments"), "html", null, true);
            echo "  </span>  Posts  <br /></p>
\t\t\t\t<p><span class=\"badge badge-info \">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "numMsg"), "html", null, true);
            echo " </span> 
\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_profile_messages", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "user"), "user"), "id"))), "html", null, true);
            echo "\"> 
\t\t\t\t Messages for all Tribes </a> </p>
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "\t</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "CitytribeBundle:users:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
