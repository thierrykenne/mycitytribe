<?php

/* FOSCommentBundle:Thread:async.html.twig */
class __TwigTemplate_3d91bf12881e63ca989d027b744615a7 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"fos_comment_thread\"></div>

";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "35a8e64_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_35a8e64_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/35a8e64_comments_1.js");
            // line 15
            echo "<script type=\"text/javascript\">
// URI identifier for the thread comments
var fos_comment_thread_id = '";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_comment_get_thread_comments", array("id" => $this->getContext($context, "id"))), "html", null, true);
            echo "';

// Snippet for asynchronously loading the comments
(function() {
    var fos_comment_script = document.createElement('script');
    fos_comment_script.async = true;
    fos_comment_script.src = '";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "';
    fos_comment_script.type = 'text/javascript';

    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(fos_comment_script);
})();
</script>
";
        } else {
            // asset "35a8e64"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_35a8e64") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/35a8e64.js");
            // line 15
            echo "<script type=\"text/javascript\">
// URI identifier for the thread comments
var fos_comment_thread_id = '";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_comment_get_thread_comments", array("id" => $this->getContext($context, "id"))), "html", null, true);
            echo "';

// Snippet for asynchronously loading the comments
(function() {
    var fos_comment_script = document.createElement('script');
    fos_comment_script.async = true;
    fos_comment_script.src = '";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "';
    fos_comment_script.type = 'text/javascript';

    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(fos_comment_script);
})();
</script>
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:async.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
