<?php

/* themes/bootstrap_mint/templates/layout/page.html.twig */
class __TwigTemplate_eea9d4215d198b77645dae10f81a04bf13bec566ac97fc76b2f060d461f22a98 extends Twig_Template
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
        $tags = array("if" => 75);
        $filters = array("date" => 851);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('date'),
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

        // line 68
        echo " 

<!-- Header and Navbar -->
<header class=\"main-header\">
   
   
<!-- Sliding Header Widget -->
";
        // line 75
        if (($context["is_front"] ?? null)) {
            // line 76
            echo "  ";
            if (($this->getAttribute(($context["page"] ?? null), "sliding_header_one", array()) || $this->getAttribute(($context["page"] ?? null), "sliding_header_two", array()))) {
                // line 77
                echo "    <div class=\"slidewidget\">
\t<div class=\"wrapper\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <div id=\"sliding-header-wrap\">
          <!-- Slide first region -->
          
          ";
                // line 86
                if ($this->getAttribute(($context["page"] ?? null), "sliding_header_one", array())) {
                    // line 87
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slidewidget_first"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 88
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sliding_header_one", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 91
                echo "          
          <!-- End slide first region -->
          <!-- Slide second region -->
          
          ";
                // line 95
                if ($this->getAttribute(($context["page"] ?? null), "sliding_header_two", array())) {
                    // line 96
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slidewidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 97
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sliding_header_two", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 100
                echo "          
          <!-- End slide second region -->
          
\t</div>
          
           
        </div>
       </div>
\t  <!-- end: Container -->
\t  </div>
\t  <div class=\"toggle-switch\"><div class=\"fa fa-gear fa-spin\"></div></div>
    </div>
  ";
            }
        }
        // line 114
        echo "<!--Sliding Header Widget -->
<!-- panel bleu bootrsaaap<div class=\"p-3 mb-2 bg-primary text-white\">.</div>-->
 
  <nav     class=\"navbar topnav navbar-default\" role=\"navigation\">
     <!-- <div class=\"col-md-12\">
           <div class=\"col-md-1\">
   
      </div>
           <div class=\"col-md-1\">
               
      </div>
          <div class=\"col-md-10\">
              <div class=\"p-3 mb-2 bg-primary text-white\"><img width=\"120\"src=\"http://embargo.grip.org/GRIP.PNG\" ></div>
          </div>
          </div>-->
   
    <div class=\"container\">
     
      <div class=\"row\">
      <div class=\"navbar-header col-md-2\">
        <button  type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          
        </button> 
        ";
        // line 141
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 142
            echo "           
          ";
            // line 143
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 145
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-10\">
        ";
        // line 149
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 150
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 151
        echo "      
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->

 ";
        // line 161
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "slideshow", array()))) {
            echo "  
     <!-- <img  src=\"http://embargo.grip.org/ban1.jpg\" >-->
    <div class=\"container slideshow\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            
          ";
            // line 168
            echo "        </div>
      </div>
    </div>
        
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\">
      <div class=\"item active\">
        <img src=\"http://embargo.grip.org/ban1.jpg\" alt=\"Los Angeles\" style=\"width:100%;\">
      
      </div>

      <div class=\"item\">
        <img src=\"http://embargo.grip.org/ban1.jpg\" alt=\"Chicago\" style=\"width:100%;\">
      </div>
    
      <div class=\"item\">
        <img src=\"http://embargo.grip.org/ban1.jpg\" alt=\"New york\" style=\"width:100%;\">
        
      </div>
    </div>

    <!-- Left and right controls -->
    <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
        ";
        }
        // line 208
        echo "
  
  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Search-->
  ";
        // line 217
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "search", array()))) {
            // line 218
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
            echo "
  ";
        }
        // line 220
        echo "<!--End Search-->


<!--Home page banner-->
  ";
        // line 224
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "promo", array()))) {
            // line 225
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 228
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "promo", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 233
        echo "<!--End Home page banner-->



<!--Highlighted-->
  ";
        // line 238
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 239
            echo "    <div class=\"container\">
      <div class=\"row\">
      <br>
      <br>

  
<div class=\"col-md-12\">
 ";
            // line 246
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
 </div>
 </div>
  </div>
  ";
        }
        // line 251
        echo "<!--End Highlighted-->

<!--Help-->
  ";
        // line 254
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 255
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 258
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 263
        echo "<!--End Help-->

<!-- Start Top Widget -->
";
        // line 266
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 267
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_left", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_middle", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_right", array()))) {
                // line 268
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Top widget left region -->
          
          ";
                // line 276
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_left", array())) {
                    // line 277
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 278
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_left", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 281
                echo "          
          <!-- End top widget left region -->\t\t  
          <!-- Top widget middle region -->
          
          ";
                // line 285
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_middle", array())) {
                    // line 286
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 287
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_middle", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 290
                echo "          
          <!-- End top widget middle region -->
          <!-- Top widget right region -->
          
          ";
                // line 294
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_right", array())) {
                    // line 295
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 296
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_right", array()), "html", null, true));
                    echo "
            </div>
          ";
                }
                // line 299
                echo "          
          <!-- End top widget right region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 306
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 310
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 311
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container-fluid\">
        ";
            // line 315
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 320
        echo "<!-- End Page Title -->


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container-fluid\">
    
    <!--Start Content Top-->
    ";
        // line 329
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 330
            echo "    <div class=\"content-top\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
            ";
            // line 333
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 338
        echo "    <!--End Content Top-->
    
    <!--start:Breadcrumbs -->
\t";
        // line 341
        if ( !($context["is_front"] ?? null)) {
            // line 342
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">";
            // line 343
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "</div>
    </div>
\t";
        }
        // line 346
        echo "    <!--End Breadcrumbs-->
\t
    <div class=\"row layout\">
      <!--- Start Left Sidebar -->
      ";
        // line 350
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 351
            echo "          <div class = \"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo " sidebar-first\">
            ";
            // line 352
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
      ";
        }
        // line 355
        echo "      <!---End Left Sidebar -->
       ";
        // line 356
        if (($context["is_front"] ?? null)) {
            // line 357
            echo "       ";
            if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                // line 358
                echo "           <h1 class=\"text-center titrehome\">Les embargos sur les armes </h1
            ";
            } else {
                // line 360
                echo "           <h1 class=\"text-center titrehome\">The arms embargoes</h1>
             
       ";
            }
            // line 362
            echo "  
       ";
        }
        // line 363
        echo "  
      <!--- Start content -->

    ";
        // line 366
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 367
            echo "     <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo " content-layout\">
      ";
            // line 368
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
      ";
            // line 369
            if (($context["is_front"] ?? null)) {
                echo " 
                
    
        
    <div class=\"col-md-12\">
        <div class=\"col-md-1\">
            
        </div>
        
  <div  style=\"text-align:valeur\" class=\"col-md-4\">
  <span class=\" fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\" fa fa-circle fa-stack-2x\"></i>
    <i class=\"p3 fa fa-database fa-stack-1x fa-inverse\" data-count=\"5\"></i>
  </span>
  ";
                // line 383
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 384
                    echo " <p class=\"text-justify\">
    Cette base de données fournit un aperçu le plus actuel possible des régimes d’embargos sur les armes. 
    L’information contenue  est par conséquent régulièrement mise à jour, vérifiée et enrichie 
 </p>
 ";
                } else {
                    // line 389
                    echo " <p class=\"text-justify\">
    This database aims to give an updated snapshot of the arms embargoes’ regimes. 
    The information contained herein is therefore regularly updated, checked and supplemented.
 </p>
 ";
                }
                // line 394
                echo "  
</div>
     <div class=\"col-md-3\">
    <span class=\" fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\" fa fa-circle fa-stack-2x\"></i>
    <i  class=\"p3 fa fa-book fa-stack-1x fa-inverse\" data-count=\"5\"></i>
    </span>
  ";
                // line 401
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 402
                    echo "  <p class=\"text-justify\">
    L’information contenue dans cette base de données est régulièrement mis à jour, enrichie et vérifiée par le GRIP. 
  </p>
  ";
                } else {
                    // line 406
                    echo "  <p class=\"text-justify\">
    The information of this database is regularly updated, checked and supplemented.  
  </p>
  ";
                }
                // line 410
                echo "</div>
 
    
<div class=\"col-md-4\">
    
  <span class=\"p1 fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\"p2 fa fa-circle fa-stack-2x\"></i>
    <i  class=\"p3 fa fa-institution fa-stack-1x fa-inverse\" data-count=\"5\"></i>
  </span>
   ";
                // line 419
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 420
                    echo "   <p class=\"text-justify\">
   Les organisations internationales et régionales ayant adopté et / ou mis en œuvre des mesures des embargos sur les armes depuis 2000 sont les suivantes : la Communauté Économique des États d’Afrique de l’Ouest (CEDEAO), la Ligue des États Arabes (LEA), l’Organisation pour la Sécurité 
   et la Coopération en Europe (OSCE), l’Union européenne (UE) et les Nations unies. 
   <p>
    ";
                } else {
                    // line 424
                    echo "     
   <p class=\"text-justify\">
   Regional or international organisations which have enacted and / or implemented arms embargoes since 2000 are the following : The African Union (AU), The Economic Community of African States (ECOWAS), the European Union (EU), the League of Arab States (LAS), 
   the Organisation for Security and Cooperation in Europe (OSCE) and the United Nations (UN).   
   </p>
   ";
                }
                // line 429
                echo " 
</div>


</div>

    <div class=\"row\">
        <div class=\"col-lg-12 \">
           <div class=\"col-lg-1 \">
                  </div>
                  
                  <div class=\"col-lg-11 \">
              
            ";
                // line 442
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 443
                    echo "            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 class=\"soustitrehome\">Les embargos sur les armes en quelques chiffres :</h1>
        ";
                } else {
                    // line 445
                    echo "            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 class=\"soustitrehome\">Key figures on arms embargoes :</h1>
        ";
                }
                // line 446
                echo " 
            </div>
        </div>
    </div>

    
   <!--chiffres embargos-->
    
  <div class=\"col-lg-12\">
       
      <div class=\"col-lg-2\"></div>
  <div class=\"col-lg-5\">
      <br>
    
 ";
                // line 460
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    // line 461
                    echo "    <p>
   <i><h1><b>&nbsp;&nbsp;22</b></h1></i> 
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Nombre d’États ou territoires sous embargo
  </p>
   <p>
       <i>  <h1><b>&nbsp;&nbsp;5</b></h1></i>    
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nombre d’entités non-étatiques sous embargos 
  </p>
  <p>
      <i><h1><b>&nbsp;&nbsp;&nbsp;6</b></h1> </i>
   
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nombre d’organisations mettant en œuvre un embargo
  </p>
  <!--
  <p>
   <i><h1><b>&nbsp;&nbsp;22</b></h1></i> 
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p> <br>
  </p>
  <p>
      <i><h1><b>&nbsp;&nbsp;5</b></h1> </i>   
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>   
  </p>
    <p>
        <i> <h1><b>&nbsp;&nbsp;6</b></h1> </i> 
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <br>-->
     
     
 ";
                } else {
                    // line 489
                    echo "     
  <p>
   <i><h1><b>&nbsp;&nbsp;22</b></h1></i> 
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of States or territories currently under arms embargo
  </p>
   <p>
       <i>  <h1><b>&nbsp;&nbsp;5</b></h1></i>    
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Number of non-state entities currently under arms embargo   
  </p>
   
  <p>
      <i><h1><b>&nbsp;&nbsp;&nbsp;6</b></h1> </i>
   
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Number of multilateral organizations implementing arms embargoes 
  </p>
   ";
                }
                // line 504
                echo "  
</div>
<div class=\"col-lg-5\">
      <br>
    <br>
    <img src=\"http://embargo.grip.org/pays.jpg\" >
    <br>
    <br>
    <br>
    
  
  
</div>

</div>
</div>

<!--
<div class=\"col-md-12\">
<div class=\"col-md-4\">
<div class=\"card\" style=\"width: 18rem;\">
  <img class=\"card-img-top\" src=\"https://www.populationdata.net/wp-content/uploads/monde-politique.gif\" alt=\"Card image cap\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Nombre  de pays</h5>
    <p class=\"card-text\">Arménie,...,...</p>
    <a href=\"http://localhost/drupal-8.6.3/fr/viewslist\" class=\"btn btn-primary\">Plus d'infos</a>
  </div>
</div>
</div>

<div class=\"col-md-4\">
<div class=\"card\" style=\"width: 18rem;\">
  <img class=\"card-img-top\" src=\"https://pngimage.net/wp-content/uploads/2018/06/icono-buscar-png-9.png\" alt=\"Card image cap\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">...</h5>
    <p class=\"card-text\">Recherche</p>
    <a href=\"#\" class=\"btn btn-primary\">Plus d'infos</a>
  </div>
</div>
</div>
<div class=\"col-md-4\">
<div class=\"card\" style=\"width: 18rem;\">
  <img class=\"card-img-top\" src=\"https://www.chea.org/sites/default/files/2018-04/Institutions1_0.jpg\" alt=\"Card image cap\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Organisations</h5>
    <p class=\"card-text\">ONE, UE, LEA,...</p>
    <a href=\"#\" class=\"btn btn-primary\">Plus d'infos</a>
  </div>
</div>
</div>
</div>-->
          </div>
  
      ";
            }
            // line 558
            echo "      ";
        }
        // line 559
        echo "      <!---End content -->

      <!--- Start Right Sidebar -->
      ";
        // line 562
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 563
            echo "          <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo " sidebar-second\">
            ";
            // line 564
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>

      ";
        }
        // line 568
        echo "      <!---End Right Sidebar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 574
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 575
            echo "        
    <div class=\"content-bottom\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
                      
   
            ";
            // line 581
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 586
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->

<!-- Start Footer -->
  ";
        // line 592
        if (((($this->getAttribute(($context["page"] ?? null), "footer_top_one", array()) || $this->getAttribute(($context["page"] ?? null), "footer_top_two", array())) || $this->getAttribute(($context["page"] ?? null), "footer_top_three", array())) || $this->getAttribute(($context["page"] ?? null), "footer_top_four", array()))) {
            // line 593
            echo "    <div class=\"footer-widgets\">
      <!-- Start Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Start Footer Top One Region -->
          
          ";
            // line 601
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_one", array())) {
                // line 602
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 603
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_one", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 606
            echo "          
          <!-- End Footer Top One Region -->

          <!-- Start Footer Top Two Region -->
          ";
            // line 610
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_two", array())) {
                // line 611
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 612
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_two", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 615
            echo "          
          <!-- End Footer Top Two Region -->

          <!-- Start Footer Top Three Region -->
          
          ";
            // line 620
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_three", array())) {
                // line 621
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 622
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_three", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 625
            echo "          
          <!-- End Footer Top Three Region -->
\t\t  
\t\t  <!-- Start Footer Top Four Region -->

          ";
            // line 630
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_four", array())) {
                // line 631
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 632
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_four", array()), "html", null, true));
                echo "
          </div>
          ";
            }
            // line 635
            echo "\t\t  
\t\t  <!-- End Footer Top Four Region -->

        </div>
      </div>
    </div>
  ";
        }
        // line 642
        echo "  <!-- Footer Region-->
  ";
        // line 643
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 644
            echo "    <div class=\"footer-space\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
              
            ";
            // line 649
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
          </div>
      </div>
      </div>
\t</div>
  ";
        }
        // line 655
        echo "  <!-- End Footer Region-->
<!--End Footer -->

<!-- Start Footer Ribbon -->
";
        // line 659
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", array())) {
            // line 660
            echo "    
     ";
            // line 661
            if (($context["is_front"] ?? null)) {
                // line 662
                echo "    <div style=\"background-color: #246F8C;\" class=\"panel-body\">
         
        <div class=\"col-lg-12\">
        <div style=\"color: #ffffff;\" class=\"col-lg-4\">
   ";
                // line 666
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    echo " 
      <br>
       
      <p><i>Les bases de données du Grip</i></p>
      <p>
    
      <ul>
          <i><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://production.grip.org/\"> Base de donnée de l'industrie de l'armement en Belgique</a></i></br>
          <i><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/fr/node/542\" > Production et transferts d’armements dans le monde</a></i></br>
          <i><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/fr/node/1029\" > Les transferts d'armes de la Belgique </a></i></br>  
      </ul>  
       </p>
        

  ";
                } else {
                    // line 681
                    echo "     <br>
       
      <p><i>The databases of the Grip</i></p>
      <p>
    
      <ul>
          <i><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://production.grip.org/\"> Database of the armaments industry in Belgium</a></i></br>
          <i><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/fr/node/542\" > Global arms production and transfers</a></i></br>
          <i><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/fr/node/1029\" > Belgium's arms transfers </a></i></br>  
      </ul>  
       </p>
  ";
                }
                // line 693
                echo "        </div>
      
     <div style=\"color: #ffffff;\" class=\"col-lg-3\">
   ";
                // line 696
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    echo " 
       <br>
       
      <p><i>Contact</i></p>
           
      <ul>
       <i><i class=\"fa fa-globe\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/\"> Visitez le site du GRIP</a></i></br>
       <i><i class=\"fa fa-envelope\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/fr/contact/contact\" > Contactez le Grip</a></i></br>
      </ul>
          
             
        
        
       </p>
        

  ";
                } else {
                    // line 713
                    echo "      
      
        <br>
       
      <p><i>Contact</i></p>
      <p>
    
      <ul>
        <i><i class=\"fa fa-globe\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/\"> Visit the GRIP website</a></i></br>
        <i><i class=\"fa fa-envelope\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/fr/contact/contact\" > Contact the Grip</a></i></br>
      </ul>  
       </p>

  ";
                }
                // line 727
                echo "        </div>
      
     
    
       
  
      <div style=\"color: #ffffff;\" class=\"col-lg-2\">
           <!--<div id=\"communautefr\"></div> -->
       <img src=\"http://embargo.grip.org/unscar_logo.png\" >
     </div>
           
        <div style=\"color: #ffffff;\" class=\"col-lg-1\">
                
      <img src=\"http://embargo.grip.org/logo_mini.png\" >
     
       </div>
         <div style=\"color: #ffffff;\" class=\"col-lg-1\">
                
     <img src=\"http://embargo.grip.org/soutien_v_fr.png\" >
       </div> 
       
        </div>
        <div class=\"col-lg-12\">
        
          <!-- <div style=\"color: #ffffff;\" class=\"col-lg-8\">
   ";
                // line 752
                if (($this->getAttribute(($context["language"] ?? null), "getId", array(), "method") == "fr")) {
                    echo " 
      <br>
       
  <p class=\"text-justify\"><i>
  Cette base de données est réalisée dans le cadre de la « Cellule de veille sur l’évolution de la production 
  et des transferts d’armes en Belgique, en Europe et dans le monde», financée par la Région wallonne, 
  et bénéficie du soutien financier de l’UNSCAR.   </i> </p>
  <p><i></i></p>
     
  ";
                } else {
                    // line 762
                    echo "      <br>
      
  <p class=\"text-justify\"><i>
    This database has been initially developped as part of 
  
    the project « Cellule de veille sur l’évolution de la
    production et des transferts d’armes en Belgique, en Europe et
    dans le monde », funded by the Walloon Region, and then benefitted from the support of the UNSCAR.  </i>  
    </p>
  ";
                }
                // line 772
                echo "        </div>
        <div class=\"col-lg-4\"></div>
        .....
        
        </div>-->
    </div>
        ";
            }
            // line 779
            echo "    <div class=\"footer-ribbon\"><!-- 
      <div style=\"background-color: #eee9e9;\" class=\"panel-body\">
    
         <div class=\"row\">
         <p style=\"color: #246F8C;\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contactez le GRIP</p>
         <a href=\"https://www.grip.org/fr/\" style=\"color: #246F8C;\">   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visitez le site du Grip</a>
         </div>
        
      <div class=\"row\">
       
          
        <div class=\"col-lg-12\">
            <div class=\"col-lg-4\"></div> 
  
        
     
        <div class=\"col-lg-6\">
            <p style=\"color: #246F8C; font-size: 105%\"> <br> © Grip   Groupe de recherche et d'information sur la paix et la sécurité</p>
            
            <div class=\"social-media\">
               
           
           
          </div>
        </div>
        
         <div class=\"col-lg-2\">
          
             </br>
             <br/>

 
       
        </div>
        
        </div>
      </div>
    
    </div>
      <div style=\"background-color:#eee9e9;\" class=\"panel-body\">
    
         <div class=\"row\">
         <!-- <p style=\"color: #246F8C;\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contactez le GRIP</p>
         <a href=\"https://www.grip.org/fr/\" style=\"color: #246F8C;\">   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visitez le site du Grip</a>--->
         </div>
        
      <div class=\"row\">
       
          
        <div class=\"col-lg-12\">
           <div class=\"col-lg-5\"></div> 
  
        
  
         ";
            // line 833
            if (($context["show_social_icon"] ?? null)) {
                // line 834
                echo "    
        ";
            }
            // line 836
            echo "    
            <div class=\"col-lg-5\"></div> 
        </div>
      </div>
    
    </div>
        
        <div style=\"background-color:#666666;\" class=\"panel-body\">
              <div class=\"col-lg-12\">
                  <div  style=\"color: #FFFFFF;\"class=\"col-lg-3\">
                      <i> 467 Chaussée de Louvain B-1030 Bruxelles</i>
                  
                  </div>
                  
                    <div  style=\"color: #FFFFFF;\"class=\"col-lg-5\"> 
                      <i><p class=\"copyright\">© Grip ";
            // line 851
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
            echo " - Groupe de recherche et d'information sur la paix et la sécurité </p></i>
  
                  </div>
                  
                  <div class=\" col-lg-2 social-media\">
           
 
           
              <a href=\"https://www.facebook.com/GRIP.1979\"class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
            
              <a href=\"https://twitter.com/grip_org\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
           
              <a href=\"https://www.linkedin.com/company/grip\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
         
          
        </div>
       
    
                 <div style=\"color: #ffffff;\" class=\"col-lg-2\"><i> +32 (0)241 80 20</i> </div> 
                
        </div>
            
            
           </div>  
            
            
        
  
";
        }
        // line 880
        echo "<!-- End Footer Ribbon -->


<!-- #footer-bottom -->
<div id=\"footer-bottom\">

    <br>
    <br>
    <br> 
    <div class=\"container\">
        
         <div class=\"row\">
\t<hr class=\"style-mint\">
         <div id=\"toTop\" class=\"col-md-12\">
          <a class=\"scrollUp\"><i class=\"fa fa-angle-up\"></i></a>
         </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 \">
                 ";
        // line 899
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
        echo "
          
            </div>
              
                
            
           
       
          
            <!--
        <p class=\"copyright\">© Grip ";
        // line 909
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo " - Groupe de recherche et d'information sur la paix et la sécurité</p>
         
        <div class=\"col-md-12 \">
           <div class=\"social-media\">
            
              <a href=\"https://www.facebook.com/GRIP.1979\"class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
            
              <a href=\"https://twitter.com/grip_org\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
           
              <a href=\"https://www.linkedin.com/company/grip\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
         
           </div>
        </div>-->
        
         
       
        ";
        // line 925
        if (($context["show_credit_link"] ?? null)) {
            // line 926
            echo "          <p class=\"credit\">Theme for <a href=\"https://www.drupal.org/8\" target=\"_blank\">Drupal 8</a></p>
        ";
        }
        // line 928
        echo "        </div-->
\t\t</div>
    </div>
        
        
        
 
  <h2></h2>  

</div>
<!-- #footer-bottom ends here -->
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_mint/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1243 => 928,  1239 => 926,  1237 => 925,  1218 => 909,  1205 => 899,  1184 => 880,  1152 => 851,  1135 => 836,  1131 => 834,  1129 => 833,  1073 => 779,  1064 => 772,  1052 => 762,  1039 => 752,  1012 => 727,  996 => 713,  976 => 696,  971 => 693,  957 => 681,  939 => 666,  933 => 662,  931 => 661,  928 => 660,  926 => 659,  920 => 655,  911 => 649,  904 => 644,  902 => 643,  899 => 642,  890 => 635,  884 => 632,  879 => 631,  877 => 630,  870 => 625,  864 => 622,  859 => 621,  857 => 620,  850 => 615,  844 => 612,  839 => 611,  837 => 610,  831 => 606,  825 => 603,  820 => 602,  818 => 601,  808 => 593,  806 => 592,  798 => 586,  790 => 581,  782 => 575,  780 => 574,  772 => 568,  765 => 564,  760 => 563,  758 => 562,  753 => 559,  750 => 558,  694 => 504,  676 => 489,  646 => 461,  644 => 460,  628 => 446,  624 => 445,  620 => 443,  618 => 442,  603 => 429,  595 => 424,  588 => 420,  586 => 419,  575 => 410,  569 => 406,  563 => 402,  561 => 401,  552 => 394,  545 => 389,  538 => 384,  536 => 383,  519 => 369,  515 => 368,  510 => 367,  508 => 366,  503 => 363,  499 => 362,  494 => 360,  490 => 358,  487 => 357,  485 => 356,  482 => 355,  476 => 352,  471 => 351,  469 => 350,  463 => 346,  457 => 343,  454 => 342,  452 => 341,  447 => 338,  439 => 333,  434 => 330,  432 => 329,  421 => 320,  413 => 315,  407 => 311,  405 => 310,  399 => 306,  390 => 299,  384 => 296,  379 => 295,  377 => 294,  371 => 290,  365 => 287,  360 => 286,  358 => 285,  352 => 281,  346 => 278,  341 => 277,  339 => 276,  329 => 268,  327 => 267,  323 => 266,  318 => 263,  310 => 258,  305 => 255,  303 => 254,  298 => 251,  290 => 246,  281 => 239,  279 => 238,  272 => 233,  264 => 228,  259 => 225,  257 => 224,  251 => 220,  245 => 218,  243 => 217,  232 => 208,  190 => 168,  181 => 161,  169 => 151,  163 => 150,  161 => 149,  155 => 145,  150 => 143,  147 => 142,  145 => 141,  116 => 114,  100 => 100,  94 => 97,  89 => 96,  87 => 95,  81 => 91,  75 => 88,  70 => 87,  68 => 86,  57 => 77,  54 => 76,  52 => 75,  43 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap_mint/templates/layout/page.html.twig", "C:\\wamp64\\www\\embargo\\themes\\bootstrap_mint\\templates\\layout\\page.html.twig");
    }
}
