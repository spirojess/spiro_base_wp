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

/* @gantry-admin/partials/navigation.html.twig */
class __TwigTemplate_88bf4126134063abe8230ffb7026e57e374b0bb66118b5e96e4f48b9fe94b7a0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"g-grid\">
    <div class=\"g-block navbar-block\">
        <nav id=\"gantry\">
            ";
        // line 4
        $context["style"] = ((twig_in_filter(($context["location"] ?? null), [0 => "menu", 1 => "about", 2 => "configurations"])) ? (" style=\"overflow: hidden; height: 0; visibility: hidden;\"") : (""));
        // line 5
        echo "            <section id=\"navbar\"";
        echo ($context["style"] ?? null);
        echo ">
                <ul>
                    ";
        // line 7
        $this->loadTemplate("partials/configuration-selector.html.twig", "@gantry-admin/partials/navigation.html.twig", 7)->display($context);
        // line 8
        echo "                    <li ";
        echo (((($context["location"] ?? null) == "configurations/styles")) ? ("class=\"active\"") : (""));
        echo ">
                        <a data-g5-ajaxify=\"\"
                           data-g5-nav=\"styles\"
                           data-g5-ajaxify-target=\"[data-g5-content-wrapper]\"
                           data-g5-ajaxify-params=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_jsonencode_filter(["navbar" => true]), "html_attr");
        echo "\"
                           href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => "configurations", 1 => ($context["configuration"] ?? null), 2 => "styles"], "method"), "html", null, true);
        echo "\"
                        >
                            <i class=\"fa fa-fw fa-adjust\" aria-hidden=\"true\"></i><span>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_STYLES"), "html", null, true);
        echo "</span>
                        </a>
                    </li>
                    <li ";
        // line 18
        echo (((($context["location"] ?? null) == "configurations/layout")) ? ("class=\"active\"") : (""));
        echo ">
                        <a data-g5-ajaxify=\"\"
                           data-g5-nav=\"layout\"
                           data-g5-nav-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => "configurations", 1 => ($context["configuration"] ?? null), 2 => "layout"], "method"), "html", null, true);
        echo "\"
                           data-g5-ajaxify-target=\"[data-g5-content-wrapper]\"
                           data-g5-ajaxify-params=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_jsonencode_filter(["navbar" => true]), "html_attr");
        echo "\"
                           href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => "configurations", 1 => ($context["configuration"] ?? null), 2 => "layout"], "method"), "html", null, true);
        echo "\"
                        >
                            <i class=\"fa fa-fw fa-columns\" aria-hidden=\"true\"></i><span>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_LAYOUT"), "html", null, true);
        echo "</span>
                        </a>
                    </li>
                    <li ";
        // line 29
        echo (((($context["location"] ?? null) == "configurations/content")) ? ("class=\"active\"") : (""));
        echo ">
                        <a data-g5-ajaxify=\"\"
                           data-g5-nav=\"content\"
                           data-g5-ajaxify-target=\"[data-g5-content-wrapper]\"
                           data-g5-ajaxify-params=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_jsonencode_filter(["navbar" => true]), "html_attr");
        echo "\"
                           href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => "configurations", 1 => ($context["configuration"] ?? null), 2 => "content"], "method"), "html", null, true);
        echo "\"
                        >
                            <i class=\"fa fa-fw fa-file-text-o\" aria-hidden=\"true\"></i><span>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CONTENT"), "html", null, true);
        echo "</span>
                        </a>
                    </li>
                    <li ";
        // line 39
        echo (((($context["location"] ?? null) == "configurations/page")) ? ("class=\"active\"") : (""));
        echo ">
                        <a data-g5-ajaxify=\"\"
                           data-g5-nav=\"page\"
                           data-g5-ajaxify-target=\"[data-g5-content-wrapper]\"
                           data-g5-ajaxify-params=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_jsonencode_filter(["navbar" => true]), "html_attr");
        echo "\"
                           href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => "configurations", 1 => ($context["configuration"] ?? null), 2 => "page"], "method"), "html", null, true);
        echo "\"
                        >
                            <i class=\"fa fa-fw fa-list-alt\" aria-hidden=\"true\"></i><span>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PAGESETTINGS"), "html", null, true);
        echo "</span>
                        </a>
                    </li>
                    ";
        // line 49
        if (((($context["configuration"] ?? null) && (($context["configuration"] ?? null) != "default")) &&  !(is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["configuration"] ?? null)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "_") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))))) {
            // line 50
            echo "                    <li ";
            echo (((($context["location"] ?? null) == "configurations/assignments")) ? ("class=\"active\"") : (""));
            echo ">
                        <a data-g5-ajaxify=\"\"
                           data-g5-nav=\"assignments\"
                           data-g5-ajaxify-target=\"[data-g5-content-wrapper]\"
                           data-g5-ajaxify-params=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_jsonencode_filter(["navbar" => true]), "html_attr");
            echo "\"
                           href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => "configurations", 1 => ($context["configuration"] ?? null), 2 => "assignments"], "method"), "html", null, true);
            echo "\"
                        >
                            <i class=\"fa fa-fw fa-check-square-o\" aria-hidden=\"true\"></i><span>";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ASSIGNMENTS"), "html", null, true);
            echo "</span>
                        </a>
                    </li>
                    ";
        }
        // line 61
        echo "                    ";
        if (((($context["location"] ?? null) == "configurations/settings") || $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "particles", []), "overrides", [0 => ($context["configuration"] ?? null)], "method"))) {
            // line 62
            echo "                        <li ";
            echo (((($context["location"] ?? null) == "configurations/settings")) ? ("class=\"active\"") : (""));
            echo ">
                            <a data-g5-ajaxify=\"\"
                               data-g5-nav=\"settings\"
                               data-g5-ajaxify-target=\"[data-g5-content-wrapper]\"
                               data-g5-ajaxify-params=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_jsonencode_filter(["navbar" => true]), "html_attr");
            echo "\"
                               href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => "configurations", 1 => ($context["configuration"] ?? null), 2 => "settings"], "method"), "html", null, true);
            echo "\"
                            >
                                <i class=\"fa fa-fw fa-wrench\" aria-hidden=\"true\"></i><span>";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PARTICLE_DEFAULTS"), "html", null, true);
            echo "</span>
                            </a>
                        </li>
                    ";
        }
        // line 73
        echo "                </ul>
            </section>
        </nav>
        <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => "themes"], "method"), "html", null, true);
        echo "\" aria-hidden=\"true\" tabindex=\"-1\">
            <svg version=\"1.1\" id=\"gantry-logo\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"81px\" height=\"28.239px\" viewBox=\"0 0 81 28.239\" style=\"enable-background:new 0 0 81 28.239;\" xml:space=\"preserve\">
                <g>
                    <path style=\"fill:#a0a0a0;\" d=\"M8.101,26.332c2.639-0.358,4.636-2.603,4.672-5.311l0.008-1.451l-1.184,0.847
                        c-1.255,0.903-2.734,1.38-4.27,1.38C3.288,21.797,0,18.511,0,14.471c0-4.039,3.286-7.325,7.325-7.325
                        c1.633,0,3.182,0.483,4.481,1.491l0.198,0.104h2.694V20.95c0,3.792-2.969,6.92-6.597,7.289V26.332z M7.325,9.039
                        c-2.995,0-5.432,2.437-5.432,5.432c0,2.996,2.437,5.433,5.432,5.433s5.432-2.437,5.432-5.433
                        C12.757,11.476,10.32,9.039,7.325,9.039 M74.403,26.332c2.639-0.358,4.683-2.603,4.719-5.311l0.032-1.451l-1.172,0.847
                        c-1.256,0.903-2.725,1.38-4.26,1.38c-3.914,0-7.07-3.024-7.235-6.938V14.37V8.741H68.3v6.418c0.275,2.577,2.682,4.768,5.413,4.768
                        c2.692,0,5.331-2.28,5.467-4.589h0.005V8.741H81v12.507l-0.014,0.395c-0.169,1.807-1.016,3.48-2.359,4.711
                        c-1.171,1.073-2.575,1.728-4.224,1.885V26.332z M24.114,21.797c-4.039,0-7.325-3.286-7.325-7.326c0-4.039,3.286-7.325,7.325-7.325
                        c4.037,0,7.404,3.282,7.407,7.319v0.014c-0.002,0.033,0,0.838,0,0.838v4.641h-2.683l-0.199,0.212
                        C27.333,21.198,25.768,21.797,24.114,21.797 M24.114,9.039c-2.996,0-5.433,2.437-5.433,5.432c0,2.996,2.437,5.433,5.433,5.433
                        s5.432-2.437,5.432-5.433C29.546,11.476,27.109,9.039,24.114,9.039 M57.415,19.957V8.741h2.732l0.167-0.111
                        c1.099-0.846,2.379-1.313,3.698-1.448v1.906c-2.474,0.332-4.319,2.328-4.598,4.799l-0.015,0.228l-0.005,0.473v5.37H57.415z
                         M51.808,19.957V7.422h-2.309V5.443h2.309V0h1.979v5.443h2.144v1.979h-2.144v12.535H51.808z M46.695,19.957v-6.103
                        c-0.16-2.616-2.559-4.816-5.347-4.816c-2.787,0-5.539,2.518-5.539,4.828v0.836v0.74v4.515h-1.814V8.576h2.868l0.192-0.085
                        c1.261-0.915,2.746-1.372,4.292-1.372c4.037,0,7.32,3.294,7.326,7.329l0.002,0.016c-0.003,0.038-0.002,0.083-0.002,0.124v0.768
                        v4.602H46.695z\"/>
                </g>
            </svg>
        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 76,  191 => 73,  184 => 69,  179 => 67,  175 => 66,  167 => 62,  164 => 61,  157 => 57,  152 => 55,  148 => 54,  140 => 50,  138 => 49,  132 => 46,  127 => 44,  123 => 43,  116 => 39,  110 => 36,  105 => 34,  101 => 33,  94 => 29,  88 => 26,  83 => 24,  79 => 23,  74 => 21,  68 => 18,  62 => 15,  57 => 13,  53 => 12,  45 => 8,  43 => 7,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/partials/navigation.html.twig", "/Applications/MAMP/htdocs/spiro_base_wp/wp-content/plugins/gantry5/admin/templates/partials/navigation.html.twig");
    }
}
