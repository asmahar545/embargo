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

/* modules/svg_maps/modules/svg_maps_france_departments/templates/svg-maps-france-departments.html.twig */
class __TwigTemplate_e38c6848230520675f97146d66a2306cb8e7e51293b6659ffa1d31fda8a0845f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 36, "if" => 38];
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
        echo "<svg width=\"587.5\" height=\"550\" version=\"1.0\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:cc=\"http://creativecommons.org/ns#\" xmlns:dc=\"http://purl.org/dc/elements/1.1/\" xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\">
    <metadata>
        <rdf:RDF>
            <cc:Work rdf:about=\"\">
                <dc:format>image/svg+xml</dc:format>
                <dc:type rdf:resource=\"http://purl.org/dc/dcmitype/StillImage\"/>
                <cc:license rdf:resource=\"http://web.resource.org/cc/PublicDomain\"/>
                <dc:title/>
            </cc:Work>
            <cc:License rdf:about=\"http://web.resource.org/cc/PublicDomain\">
                <cc:permits rdf:resource=\"http://web.resource.org/cc/Reproduction\"/>
                <cc:permits rdf:resource=\"http://web.resource.org/cc/Distribution\"/>
                <cc:permits rdf:resource=\"http://web.resource.org/cc/DerivativeWorks\"/>
            </cc:License>
            <cc:Work rdf:about=\"\">
                <dc:format>image/svg+xml</dc:format>
                <dc:type rdf:resource=\"http://purl.org/dc/dcmitype/StillImage\"/>
            </cc:Work>
        </rdf:RDF>
    </metadata>
    <style id=\"style_css_sheet\" type=\"text/css\">
        .land{
            fill: #979797;
            fill-opacity: 1;
            stroke:white;
            stroke-opacity: 1;
            stroke-width:0.5;
            stroke-miterlimit: 3.97446823;
            stroke-dasharray: none;
        }
        .mayotte{opacity:1;}
        .dom{opacity:1;}
        .idfbig{opacity:1;}
        .idfsmall {opacity:0;}
    </style>
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "getMapsPath", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
                // line 38
                echo "            ";
                if ( !twig_test_empty($this->getAttribute($context["path"], "path", []))) {
                    // line 39
                    echo "                <path class=\"land ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["path"], "class", [])), "html", null, true);
                    echo "\" d=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["path"], "path", [])), "html", null, true);
                    echo "\">
                    <title>";
                    // line 40
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "label", [], "method")), "html", null, true);
                    if (($this->getAttribute($context["item"], "id", []) == $this->getAttribute(($context["current"] ?? null), "id", []))) {
                        echo " - ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null)), "html", null, true);
                    }
                    echo "</title>
                </path>
            ";
                }
                // line 43
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    <g>
        <g fill=\"none\" stroke=\"#333\">
            <path d=\"m516.72 543.99v-75.427l35.054-37.248h29.796\"/>
            <path class=\"dom\" d=\"m4.9513 493.18h270.42v53.744\" stroke-width=\".91892px\"/>
            <path class=\"idfbig\" d=\"m4.2702 83.696h79.425v-80.28\" stroke-width=\"1px\"/>
        </g>
        <text x=\"7.5722885\" y=\"542.53876\" style=\"line-height:0%\" xml:space=\"preserve\"><tspan x=\"7.5722885\" y=\"542.53876\" font-family=\"sans-serif\" font-size=\"9px\" stroke-width=\"1px\" style=\"line-height:1.25\">Guadeloupe</tspan></text>
        <text x=\"225.19235\" y=\"542.2619\" style=\"line-height:0%\" xml:space=\"preserve\"><tspan x=\"225.19235\" y=\"542.2619\" font-family=\"sans-serif\" font-size=\"9px\" stroke-width=\"1px\" style=\"line-height:1.25\">Mayotte</tspan></text>
        <text x=\"66.464882\" y=\"542.53876\" style=\"line-height:0%\" xml:space=\"preserve\"><tspan x=\"66.464882\" y=\"542.53876\" font-family=\"sans-serif\" font-size=\"9px\" stroke-width=\"1px\" style=\"line-height:1.25\">Martinique</tspan></text>
        <text x=\"121.86009\" y=\"542.38055\" style=\"line-height:0%\" xml:space=\"preserve\"><tspan x=\"121.86009\" y=\"542.38055\" font-family=\"sans-serif\" font-size=\"9px\" stroke-width=\"1px\" style=\"line-height:1.25\">Guyane</tspan></text>
        <text x=\"166.49937\" y=\"542.53876\" style=\"line-height:0%\" xml:space=\"preserve\"><tspan x=\"166.49937\" y=\"542.53876\" font-family=\"sans-serif\" font-size=\"9px\" stroke-width=\"1px\" style=\"line-height:1.25\">La Réunion</tspan></text>
        <text x=\"11.724806\" y=\"76.211243\" style=\"line-height:0%\" xml:space=\"preserve\"><tspan x=\"11.724806\" y=\"76.211243\" font-family=\"sans-serif\" font-size=\"9px\" stroke-width=\"1px\" style=\"line-height:1.25\">Île-de-France</tspan></text>
    </g>
</svg>
";
    }

    public function getTemplateName()
    {
        return "modules/svg_maps/modules/svg_maps_france_departments/templates/svg-maps-france-departments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 45,  127 => 44,  121 => 43,  111 => 40,  104 => 39,  101 => 38,  96 => 37,  92 => 36,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/svg_maps/modules/svg_maps_france_departments/templates/svg-maps-france-departments.html.twig", "C:\\wamp64\\www\\embargo\\modules\\svg_maps\\modules\\svg_maps_france_departments\\templates\\svg-maps-france-departments.html.twig");
    }
}
