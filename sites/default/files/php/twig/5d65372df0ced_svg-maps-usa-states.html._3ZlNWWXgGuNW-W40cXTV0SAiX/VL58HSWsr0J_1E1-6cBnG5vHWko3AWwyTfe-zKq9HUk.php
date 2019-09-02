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

/* modules/svg_maps/modules/svg_maps_usa_states/templates/svg-maps-usa-states.html.twig */
class __TwigTemplate_9ed0f26003f6d76e128df84ac12a7a3627cbc786be6f938084c532f86302f58a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 22, "if" => 24];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<svg width=\"959\" height=\"593\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:cc=\"http://creativecommons.org/ns#\" xmlns:dc=\"http://purl.org/dc/elements/1.1/\" xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\">
    <metadata>
        <rdf:RDF>
            <cc:Work rdf:about=\"\">
                <dc:format>image/svg+xml</dc:format>
                <dc:type rdf:resource=\"http://purl.org/dc/dcmitype/StillImage\"/>
                <dc:title>Blank US states map</dc:title>
            </cc:Work>
        </rdf:RDF>
    </metadata>
    <style id=\"style_css_sheet\" type=\"text/css\">
        .state{
            fill: #979797;
            fill-opacity: 1;
            stroke:white;
            stroke-opacity: 1;
            stroke-width:0.5;
            stroke-miterlimit: 3.97446823;
            stroke-dasharray: none;
        }
    </style>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "getMapsPath", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
                // line 24
                echo "            ";
                if ( !twig_test_empty($this->getAttribute($context["path"], "path", []))) {
                    // line 25
                    echo "                <path class=\"state ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["path"], "class", [])), "html", null, true);
                    echo "\" d=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["path"], "path", [])), "html", null, true);
                    echo "\">
                    <title>";
                    // line 26
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "label", [], "method")), "html", null, true);
                    if (($this->getAttribute($context["item"], "id", []) == $this->getAttribute(($context["current"] ?? null), "id", []))) {
                        echo " - ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null)), "html", null, true);
                    }
                    echo "</title>
                </path>
            ";
                }
                // line 29
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    <g>
        <path id=\"frames\" d=\"m215 493v55l36 45m-251-168h147l68 68h85l54 54v46\" fill=\"none\" stroke=\"#a9a9a9\" stroke-width=\"2\">
            <title>";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), "label", [], "method")) . " (") . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["item"] ?? null), "get", [0 => "field_france_departments_code"], "method"), "getString", [], "method"))) . ") : ") . $this->sandbox->ensureToStringAllowed(($context["value"] ?? null))), "html", null, true);
        echo "</title>
        </path>
    </g>
</svg>
";
    }

    public function getTemplateName()
    {
        return "modules/svg_maps/modules/svg_maps_usa_states/templates/svg-maps-usa-states.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 33,  119 => 31,  113 => 30,  107 => 29,  97 => 26,  90 => 25,  87 => 24,  82 => 23,  78 => 22,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/svg_maps/modules/svg_maps_usa_states/templates/svg-maps-usa-states.html.twig", "C:\\wamp64\\www\\embargo\\modules\\svg_maps\\modules\\svg_maps_usa_states\\templates\\svg-maps-usa-states.html.twig");
    }
}
