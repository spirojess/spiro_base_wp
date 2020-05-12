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

/* @gantry-admin/partials/inline.html.twig */
class __TwigTemplate_00d1f8871dc8559ec5eed8a472ade2135e19d16c6dea7acb7fa4ac2f47ccf6b3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascript' => [$this, 'block_javascript'],
            'content' => [$this, 'block_content'],
            'gantry_content_wrapper' => [$this, 'block_gantry_content_wrapper'],
            'gantry' => [$this, 'block_gantry'],
            'footer_section' => [$this, 'block_footer_section'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@gantry-admin/partials/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@gantry-admin/partials/page.html.twig", "@gantry-admin/partials/inline.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-admin://assets/css-compiled/admin.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-admin://assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_javascript($context, array $blocks = [])
    {
        // line 10
        echo "    <script type=\"text/javascript\" async=\"async\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-admin://assets/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 11
        $this->loadTemplate("@gantry-admin/partials/js-translations.html.twig", "@gantry-admin/partials/inline.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        // line 16
        echo "    ";
        $this->displayBlock('gantry_content_wrapper', $context, $blocks);
    }

    public function block_gantry_content_wrapper($context, array $blocks = [])
    {
        // line 17
        echo "        <div data-g5-content-wrapper=\"\">
            <div class=\"g-grid\">
                <div class=\"g-block\">
                    <div class=\"g-content\" data-g5-content=\"\">
                        ";
        // line 21
        $this->displayBlock('gantry', $context, $blocks);
        // line 24
        echo "                    </div>
                </div>
            </div>
        </div>
    ";
    }

    // line 21
    public function block_gantry($context, array $blocks = [])
    {
        // line 22
        echo "                            ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
                        ";
    }

    // line 31
    public function block_footer_section($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/inline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 31,  108 => 22,  105 => 21,  97 => 24,  95 => 21,  89 => 17,  82 => 16,  79 => 15,  72 => 12,  70 => 11,  65 => 10,  62 => 9,  56 => 6,  52 => 5,  47 => 4,  44 => 3,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/partials/inline.html.twig", "/Applications/MAMP/htdocs/spiro_base_wp/wp-content/plugins/gantry5/admin/templates/partials/inline.html.twig");
    }
}
