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

/* @particles/testimonial_owlcarousel.html.twig */
class __TwigTemplate_4a948cbbca71de72e531d9a6aa37dd8eb2992efa799f294e76fc907364977e38 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/testimonial_owlcarousel.html.twig", 1);
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
        <div id=\"testimonial-";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"t-owlcarousel owl-carousel ";
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
                echo "                    <div class=\"t-owlcarousel-item ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []));
                echo "\">
                        <div class=\"t-owlcarousel-item-wrapper\">
                            <div class=\"t-owlcarousel-item-img\">
                                <!-- <img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "client", []));
                echo "\" /> -->
                            </div>
                            <div class=\"t-owlcarousel-item-content-container\">
                                <div class=\"t-owlcarousel-item-content-wrapper\">
                                    <div class=\"t-owlcarousel-item-content\">
                                      ";
                // line 20
                if ( !$this->getAttribute($context["item"], "namebelow", [])) {
                    // line 21
                    echo "                                        ";
                    if ($this->getAttribute($context["item"], "client", [])) {
                        // line 22
                        echo "                                          <h4 class=\"t-owlcarousel-item-title\">";
                        echo $this->getAttribute($context["item"], "client", []);
                        echo "</h4>";
                    }
                    // line 23
                    echo "                                        ";
                    if ($this->getAttribute($context["item"], "link", [])) {
                        // line 24
                        echo "                                              <p><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "namecredit", []), "html", null, true);
                        echo "</a></p>
                                            ";
                    } elseif ($this->getAttribute(                    // line 25
$context["item"], "namecredit", [])) {
                        // line 26
                        echo "                                              <p>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "namecredit", []), "html", null, true);
                        echo "</p>
                                            ";
                    }
                    // line 28
                    echo "                                      ";
                }
                // line 29
                echo "                                        ";
                if ($this->getAttribute($context["item"], "quote", [])) {
                    // line 30
                    echo "                                            <h3 class=\"t-owlcarousel-item-desc\">";
                    echo $this->getAttribute($context["item"], "quote", []);
                    echo "</h3>";
                }
                // line 31
                echo "                                        ";
                if ($this->getAttribute($context["item"], "namebelow", [])) {
                    // line 32
                    echo "                                          ";
                    if ($this->getAttribute($context["item"], "client", [])) {
                        // line 33
                        echo "                                            <h4 class=\"t-owlcarousel-item-title\">";
                        echo $this->getAttribute($context["item"], "client", []);
                        echo "</h4>";
                    }
                    // line 34
                    echo "                                          ";
                    if ($this->getAttribute($context["item"], "link", [])) {
                        // line 35
                        echo "                                                <p><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "namecredit", []), "html", null, true);
                        echo "</a></p>
                                              ";
                    } elseif ($this->getAttribute(                    // line 36
$context["item"], "namecredit", [])) {
                        // line 37
                        echo "                                                <p>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "namecredit", []), "html", null, true);
                        echo "</p>
                                              ";
                    }
                    // line 39
                    echo "                                        ";
                }
                // line 40
                echo "                                        ";
                if ($this->getAttribute($context["item"], "buttonclass", [])) {
                    // line 41
                    echo "                                            <div class=\"t-owlcarousel-item-link\">
                                                <a target=\"_self\" class=\"g-owlcarousel-item-button button ";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", []));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
                    echo "\">
                                                    ";
                    // line 43
                    echo $this->getAttribute($context["item"], "linktext", []);
                    echo "
                                                </a>
                                            </div>
                                        ";
                }
                // line 47
                echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 53
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
        </div>
    </div>

";
    }

    // line 60
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 61
        echo "    ";
        $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "load", [0 => "jquery"], "method");
        // line 62
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    \$(document).ready(function(){
    \$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
          items:";
        // line 77
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "itemsVisible", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "itemsVisible", []), "1")) : ("1")), "html", null, true);
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
        return "@particles/testimonial_owlcarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 77,  210 => 62,  207 => 61,  204 => 60,  196 => 54,  190 => 53,  182 => 47,  175 => 43,  169 => 42,  166 => 41,  163 => 40,  160 => 39,  154 => 37,  152 => 36,  145 => 35,  142 => 34,  137 => 33,  134 => 32,  131 => 31,  126 => 30,  123 => 29,  120 => 28,  114 => 26,  112 => 25,  105 => 24,  102 => 23,  97 => 22,  94 => 21,  92 => 20,  82 => 15,  75 => 12,  72 => 11,  68 => 10,  59 => 8,  56 => 7,  50 => 6,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/testimonial_owlcarousel.html.twig", "/Applications/MAMP/htdocs/spiro_base_wp/wp-content/themes/_HYsgi/custom/particles/testimonial_owlcarousel.html.twig");
    }
}
