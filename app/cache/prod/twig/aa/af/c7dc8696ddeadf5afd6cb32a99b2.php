<?php

/* FOSCommentBundle:Thread:comment.html.twig */
class __TwigTemplate_aaafc7dc8696ddeadf5afd6cb32a99b2 extends Twig_Template
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
        $context["view"] = ((array_key_exists("view", $context)) ? (_twig_default_filter($this->getContext($context, "view"), "tree")) : ("tree"));
        // line 13
        $context["depth"] = ((array_key_exists("depth", $context)) ? (_twig_default_filter($this->getContext($context, "depth"), 1)) : (1));
        // line 14
        echo "
    
<hr>
<div id=\"fos_comment_";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "id"), "html", null, true);
        echo "\" class=\"fos_comment_comment_show fos_comment_comment_depth_";
        echo twig_escape_filter($this->env, $this->getContext($context, "depth"), "html", null, true);
        echo "\" ";
        if (array_key_exists("parentId", $context)) {
            echo "data-parent=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "parentId"), "html", null, true);
            echo "\"";
        }
        echo ">
    <div class=\"fos_comment_comment_metas\">
        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/avatars/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "comment"), "author"), "image"), "html", null, true);
        echo " \">
        ";
        // line 20
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_show_by", array(), "FOSCommentBundle");
        echo " 
        <strong>";
        // line 21
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "authorName")), "html", null, true);
        echo " </strong>  - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, "comment"), "createdAt")), "html", null, true);
        echo "
        ";
        // line 22
        if ($this->env->getExtension('fos_comment')->canVote($this->getContext($context, "comment"))) {
            // line 23
            echo "        <div class=\"fos_comment_comment_voting\">
            <button data-url=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_new_thread_comment_votes", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "comment"), "thread"), "id"), "commentId" => $this->getAttribute($this->getContext($context, "comment"), "id"), "value" => 1)), "html", null, true);
            echo "\" class=\"fos_comment_comment_vote\">
                ";
            // line 26
            echo "                <i class=\"icon-thumbs-up\"></i>
            </button>
            <button data-url=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_new_thread_comment_votes", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "comment"), "thread"), "id"), "commentId" => $this->getAttribute($this->getContext($context, "comment"), "id"), "value" => (-1))), "html", null, true);
            echo "\" class=\"fos_comment_comment_vote\">";
            // line 29
            echo "                <i class=\"icon-thumbs-down\"></i>
            </button>
            <div class=\"fos_comment_comment_score\" id=\"fos_comment_score_";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "id"), "html", null, true);
            echo "\">";
            $this->env->loadTemplate("FOSCommentBundle:Thread:comment_votes.html.twig")->display(array_merge($context, array("commentScore" => $this->getAttribute($this->getContext($context, "comment"), "score"))));
            echo "</div>
        </div>
        ";
        }
        // line 34
        echo "    </div>
    <div class=\"fos_comment_comment_body\">
        ";
        // line 36
        if ($this->env->getExtension('fos_comment')->isRawComment($this->getContext($context, "comment"))) {
            // line 37
            echo "        ";
            echo $this->getAttribute($this->getContext($context, "comment"), "rawBody");
            echo "
        ";
        } else {
            // line 39
            echo "        ";
            echo twig_nl2br_filter(twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "body"), "html", null, true));
            echo "
        ";
        }
        // line 41
        echo "    </div>

    ";
        // line 43
        if ((!($this->getContext($context, "view") === "flat"))) {
            // line 44
            echo "    ";
            if (($this->getContext($context, "depth") == "0")) {
                // line 45
                echo "        <div class=\"fos_comment_comment_replies\" style=\"margin-left: 2em;\">
        ";
                // line 46
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "comment"), "thread"), "commentable") && $this->env->getExtension('fos_comment')->canComment($this->getContext($context, "comment")))) {
                    // line 47
                    echo "            <div class=\"fos_comment_comment_reply\">
                <button data-url=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_new_thread_comments", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "comment"), "thread"), "id"))), "html", null, true);
                    echo "\" data-name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "authorName"), "html", null, true);
                    echo "\" data-parent-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "id"), "html", null, true);
                    echo "\" class=\"fos_comment_comment_reply_show_form\">";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_show_reply", array(), "FOSCommentBundle");
                    echo "</button>
            </div>
        ";
                }
                // line 51
                echo "        ";
                if (array_key_exists("children", $context)) {
                    // line 52
                    echo "            ";
                    $this->env->loadTemplate("FOSCommentBundle:Thread:comments.html.twig")->display(array_merge($context, array("comments" => $this->getContext($context, "children"), "depth" => ($this->getContext($context, "depth") + 1), "parentId" => $this->getAttribute($this->getContext($context, "comment"), "id"), "view" => $this->getContext($context, "view"))));
                    // line 53
                    echo "        ";
                }
                // line 54
                echo "        </div>
    ";
            } elseif ((($this->getContext($context, "view") === "flat") && array_key_exists("children", $context))) {
                // line 56
                echo "        ";
                $this->env->loadTemplate("FOSCommentBundle:Thread:comments.html.twig")->display(array_merge($context, array("comments" => $this->getContext($context, "children"), "depth" => ($this->getContext($context, "depth") + 1), "parentId" => $this->getAttribute($this->getContext($context, "comment"), "id"), "view" => $this->getContext($context, "view"))));
                // line 57
                echo "    ";
            }
            // line 58
            echo "    ";
        }
        // line 59
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
