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

/* @particles/owlcarousel_spiro.html.twig */
class __TwigTemplate_5aff1fcbeea5d9c4db3eb8b2995da4589e38e27eb355f6218e2b6637fe58ce38 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/owlcarousel_spiro.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "
    <div class=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", []));
        echo "\">
        ";
        // line 6
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", [])) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", []);
            echo "</h2>";
        }
        // line 7
        echo "
        <div id=\"g-owlcarousel-";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"g-owlcarousel owl-carousel owl-theme ";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "imageOverlay", []) == "enable")) {
            echo "has-color-overlay";
        }
        echo "\">

            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                ";
            if ( !$this->getAttribute($context["item"], "disable", [])) {
                // line 12
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []));
                echo "\" />
                ";
            }
            // line 14
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
";
    }

    // line 18
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 19
        echo "    ";
        $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "load", [0 => "jquery"], "method");
        // line 20
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/owl.carousel.2.3.4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    \$(document).ready(function(){
    \$('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        rtl: ";
        // line 26
        if (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "page", []), "direction", []) == "rtl")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
        loop: true,
        ";
        // line 28
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "nav", []) == "enable")) {
            // line 29
            echo "        nav: true,
        navText: ['";
            // line 30
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "prevText", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "prevText", []), "<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>")) : ("<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>")), "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "nextText", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "nextText", []), "<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>")) : ("<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>")), "js"), "html", null, true);
            echo "'],
        ";
        } else {
            // line 32
            echo "        nav: false,
        ";
        }
        // line 34
        echo "        ";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "dots", []) == "enable")) {
            // line 35
            echo "        dots: true,
        ";
        } else {
            // line 37
            echo "        dots: false,
        ";
        }
        // line 39
        echo "        ";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", []) == "enable")) {
            // line 40
            echo "        autoplay: true,
        autoplayTimeout: ";
            // line 41
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplaySpeed", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplaySpeed", []), "5000")) : ("5000")), "html", null, true);
            echo ",
        ";
        } else {
            // line 43
            echo "        autoplay: false,
        ";
        }
        // line 45
        echo "        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:";
        // line 53
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "itemsVisible", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "itemsVisible", []), "5")) : ("5")), "html", null, true);
        echo "
            }
        }
    })
});
</script>





";
    }

    public function getTemplateName()
    {
        return "@particles/owlcarousel_spiro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 53,  161 => 45,  157 => 43,  152 => 41,  149 => 40,  146 => 39,  142 => 37,  138 => 35,  135 => 34,  131 => 32,  124 => 30,  121 => 29,  119 => 28,  110 => 26,  100 => 20,  97 => 19,  94 => 18,  89 => 15,  83 => 14,  75 => 12,  72 => 11,  68 => 10,  59 => 8,  56 => 7,  50 => 6,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/owlcarousel_spiro.html.twig", "/Applications/MAMP/htdocs/spiro_base_wp/wp-content/themes/_HYsgi/custom/particles/owlcarousel_spiro.html.twig");
    }
}
