<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/content-page.html.twig */
class __TwigTemplate_4cf317b27c0e2ba3c08685f363899cc8490e92e42751365c10ce25f93aa34b8c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<article class=\"post-type-";
        echo $this->getAttribute(($context["post"] ?? null), "post_type", []);
        echo " ";
        echo $this->getAttribute(($context["post"] ?? null), "class", []);
        echo "\" id=\"post-";
        echo $this->getAttribute(($context["post"] ?? null), "ID", []);
        echo "\">

    ";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "
</article>
";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
        ";
        // line 6
        echo "        <section class=\"entry-header\">

            ";
        // line 9
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".title.enabled"), 1 => "1"], "method")) {
            // line 10
            echo "                <h2 class=\"entry-title\">
                    ";
            // line 11
            if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".title.link"), 1 => "0"], "method")) {
                // line 12
                echo "                        <a href=\"";
                echo $this->getAttribute(($context["post"] ?? null), "link", []);
                echo "\" title=\"";
                echo $this->getAttribute(($context["post"] ?? null), "title", []);
                echo "\">";
                echo $this->getAttribute(($context["post"] ?? null), "title", []);
                echo "</a>
                    ";
            } else {
                // line 14
                echo "                        ";
                echo $this->getAttribute(($context["post"] ?? null), "title", []);
                echo "
                    ";
            }
            // line 16
            echo "                </h2>
            ";
        }
        // line 18
        echo "            ";
        // line 19
        echo "
            ";
        // line 21
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.enabled"), 1 => "1"], "method") || $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-author.enabled"), 1 => "1"], "method"))) {
            // line 22
            echo "                ";
            $this->loadTemplate([0 => (("partials/meta-" . ($context["scope"] ?? null)) . ".html.twig"), 1 => "partials/meta.html.twig"], "partials/content-page.html.twig", 22)->display($context);
            // line 23
            echo "            ";
        }
        // line 24
        echo "            ";
        // line 25
        echo "
        </section>
        ";
        // line 28
        echo "
        ";
        // line 30
        echo "        ";
        if ( !call_user_func_array($this->env->getFunction('function')->getCallable(), ["post_password_required", $this->getAttribute(($context["post"] ?? null), "ID", [])])) {
            // line 31
            echo "
            ";
            // line 33
            echo "            <section class=\"entry-content\">

                ";
            // line 36
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.enabled"), 1 => "1"], "method") && $this->getAttribute($this->getAttribute(($context["post"] ?? null), "thumbnail", []), "src", []))) {
                // line 37
                echo "                    ";
                $context["position"] = ((($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.position"), 1 => "none"], "method") == "none")) ? ("") : (("float-" . $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.position"), 1 => "none"], "method"))));
                // line 38
                echo "                    <a href=\"";
                echo $this->getAttribute(($context["post"] ?? null), "link", []);
                echo "\" class=\"post-thumbnail\" aria-hidden=\"true\">
                        <img src=\"";
                // line 39
                echo Timber\ImageHelper::resize($this->getAttribute($this->getAttribute(($context["post"] ?? null), "thumbnail", []), "src", []), $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.width"), 1 => "1200"], "method"), $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.height"), 1 => "350"], "method"));
                echo "\" class=\"featured-image tease-featured-image ";
                echo ($context["position"] ?? null);
                echo "\" alt=\"";
                echo $this->getAttribute(($context["post"] ?? null), "title", []);
                echo "\" />
                    </a>
                ";
            }
            // line 42
            echo "                ";
            // line 43
            echo "
                ";
            // line 45
            echo "                ";
            echo $this->getAttribute(($context["post"] ?? null), "content", []);
            echo "

                ";
            // line 47
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["wp_link_pages", ["before" => "<div class=\"page-links\" itemprop=\"pagination\">", "after" => "</div>", "link_before" => "<span class=\"page-number page-numbers\">", "link_after" => "</span>", "echo" => 0]]);
            echo "
                ";
            // line 49
            echo "
                ";
            // line 51
            echo "                ";
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), ["edit_post_link", __("Edit", "g5_hydrogen"), "<span class=\"edit-link\">", "</span>"]);
            echo "
                ";
            // line 53
            echo "
            </section>
            ";
            // line 56
            echo "
        ";
        } else {
            // line 58
            echo "
            ";
            // line 60
            echo "            <div class=\"password-form\">

                ";
            // line 63
            echo "                ";
            $this->loadTemplate("partials/password-form.html.twig", "partials/content-page.html.twig", 63)->display($context);
            // line 64
            echo "
            </div>
            ";
            // line 67
            echo "
        ";
        }
        // line 69
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/content-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 69,  186 => 67,  182 => 64,  179 => 63,  175 => 60,  172 => 58,  168 => 56,  164 => 53,  159 => 51,  156 => 49,  152 => 47,  146 => 45,  143 => 43,  141 => 42,  131 => 39,  126 => 38,  123 => 37,  120 => 36,  116 => 33,  113 => 31,  110 => 30,  107 => 28,  103 => 25,  101 => 24,  98 => 23,  95 => 22,  92 => 21,  89 => 19,  87 => 18,  83 => 16,  77 => 14,  67 => 12,  65 => 11,  62 => 10,  59 => 9,  55 => 6,  52 => 4,  49 => 3,  43 => 71,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/content-page.html.twig", "/Applications/MAMP/htdocs/spiro_base_wp/wp-content/themes/g5_hydrogen/views/partials/content-page.html.twig");
    }
}
