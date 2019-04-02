<?php

/* themes/bootstrap_mint/templates/layout/maintenance-page.html.twig */
class __TwigTemplate_a706f394f4621786fc608235ca3bccee7cf3c5539e0d83ea990596579f54e40d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 17);
        $filters = array("t" => 19);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 12
        echo "<div class=\"layout-container\">
    <br>
    <br>
   
   <div class=\"container\">
   ";
        // line 17
        if (($context["logo"] ?? null)) {
            // line 18
            echo "   <div class=\"jumbotron\">
    <img src=\"";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logo"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\"/>
    </br>
    </br>

    <p>Groupe de recherche et d'information sur la paix et la sécurité</p> 
    <p>";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "</p>
   </div>
     
  ";
        }
        // line 28
        echo "  
 </div>
  <!--<main role=\"main\" class=\"maintenance-msg\">-->
      
    <!--
    <header role=\"banner\">
      ";
        // line 34
        if (($context["logo"] ?? null)) {
            // line 35
            echo "        <div class=\"brand logo\">
          <a href=\"";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\">
            <img src=\"";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logo"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\"/>
          </a>
        </div>
      ";
        }
        // line 41
        echo " 
      ";
        // line 42
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 43
            echo "        <div class=\"name-and-slogan\">
          ";
            // line 44
            if (($context["site_name"] ?? null)) {
                // line 45
                echo "           <div class=\"site-name\">
             <a href=\"";
                // line 46
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
                echo "</a>
           </div>
          ";
            }
            // line 49
            echo "
          ";
            // line 50
            if (($context["site_slogan"] ?? null)) {
                // line 51
                echo "            <div class=\"site-slogan\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
                echo "</div>
          ";
            }
            // line 53
            echo "        </div>";
            // line 54
            echo "      ";
        }
        // line 55
        echo "
    </header> 
    <div class=\"clearfix\">
      
    <div>-->
   
";
        // line 62
        echo "    

 <!-- </main>-->

</div>";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_mint/templates/layout/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 62,  139 => 55,  136 => 54,  134 => 53,  128 => 51,  126 => 50,  123 => 49,  113 => 46,  110 => 45,  108 => 44,  105 => 43,  103 => 42,  100 => 41,  91 => 37,  85 => 36,  82 => 35,  80 => 34,  72 => 28,  65 => 24,  55 => 19,  52 => 18,  50 => 17,  43 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap_mint/templates/layout/maintenance-page.html.twig", "C:\\wamp64\\www\\embargo\\themes\\bootstrap_mint\\templates\\layout\\maintenance-page.html.twig");
    }
}
