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

/* themes/bootstrap_mint/templates/layout/page.html.twig */
class __TwigTemplate_19058d1336843cc55cc9848cb6fc53410adf80b7b424be1f11c19a68a5478ad3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 74];
        $filters = ["date" => 1363];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['date'],
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
        // line 68
        echo "


<!-- Header and Navbar -->
<header class=\"main-header\">
   <!-- francais  -->
   ";
        // line 74
        if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
            // line 75
            echo "    <nav class=\"navbar\" style=\"background-color:#0d5178;\">
    <div class=\"container-fluid\"> 
       <a class=\"navbar-brand col-lg-7\" href=\"#\">
    
    
  </a>
        <ul class=\"nav navbar-nav navbar-right col-lg-5\">  
           <li><a href=\"https://www.grip.org/\" style=\"font-size: 16px; color: #3f8ec1\"><i>Visitez le site du Grip</i></a>  </li>
           <li><a href=\"https://www.grip.org/fr/contact/contact\" style=\"font-size:16px; color: #3f8ec1\"><i>Contactez  le Grip</i></a>  </li>
              <li>
            <div style=\"padding-top:0.5em;padding-left:0.4em;\">
                    
            <a style=\"font-weight: bold;color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/en\">En</a>
            <a  style=\"font-weight: bold;color: #FFFFFF; font-size: 18px; text-decoration: underline; \" href=\"http://localhost/embargo/fr\">/Fr</a>
            </div>
            </li>
           <li> <div style=\"padding-left:0.6em;\"class=\"social-media\">
           
 
           
              <a style=\"font-size: 16px;\" href=\"https://www.facebook.com/GRIP.1979\"class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
            
              <a href=\"https://twitter.com/grip_org\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
           
              <a href=\"https://www.linkedin.com/company/grip\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
         
          
              </div>
           </li>
           
         
      
     
         
     
        </ul>
        <ul>
            
            
        </ul>
     
    </div> 
 </nav>
    ";
        } else {
            // line 119
            echo "    <!-- anglais -->
      <nav class=\"navbar\" style=\"background-color:#0d5178;\">
    <div class=\"container-fluid\"> 
       <a class=\"navbar-brand col-lg-7\" href=\"#\">
    
    
  </a>
        <ul class=\"nav navbar-nav navbar-right col-lg-5\">  
           <li><a href=\"https://www.grip.org/\" style=\"font-size: 16px; color: #3f8ec1\"><i>Visit GRIP website</i></a>  </li>
           <li><a href=\"https://www.grip.org/fr/contact/contact\" style=\"font-size:16px; color: #3f8ec1\"><i>Contact the Grip</i></a>  </li>
           
          <li>
            <div style=\"padding-top:0.5em;padding-left:0.4em;\">
                    
            <a style=\"font-weight: bold;color: #FFFFFF; font-size: 18px; text-decoration: underline; \" href=\"http://localhost/embargo/en\">En</a>
            <a style=\"font-weight: bold;color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/fr\">/Fr</a>
                </div>
            </li>
           <li> <div style=\"padding-left:0.6em;\"class=\"social-media\">
           
 
           
              <a style=\"font-size: 16px;\" href=\"https://www.facebook.com/GRIP.1979\"class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
            
              <a href=\"https://twitter.com/grip_org\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
           
              <a href=\"https://www.linkedin.com/company/grip\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
         
          
              </div>
           </li>
               
         
     
        </ul>
     
    </div> 
 </nav>
    ";
        }
        // line 158
        echo "<!-- Sliding Header Widget -->
";
        // line 159
        if (($context["is_front"] ?? null)) {
            // line 160
            echo "  ";
            if (($this->getAttribute(($context["page"] ?? null), "sliding_header_one", []) || $this->getAttribute(($context["page"] ?? null), "sliding_header_two", []))) {
                // line 161
                echo "    <div class=\"slidewidget\">
\t<div class=\"wrapper\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <div id=\"sliding-header-wrap\">
          <!-- Slide first region -->
          
          ";
                // line 170
                if ($this->getAttribute(($context["page"] ?? null), "sliding_header_one", [])) {
                    // line 171
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slidewidget_first"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 172
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sliding_header_one", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 175
                echo "          
          <!-- End slide first region -->
          <!-- Slide second region -->
          
          ";
                // line 179
                if ($this->getAttribute(($context["page"] ?? null), "sliding_header_two", [])) {
                    // line 180
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slidewidget_class"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 181
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sliding_header_two", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 184
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
        // line 198
        echo "<!--Sliding Header Widget -->
<!-- nav francais</div>-->
";
        // line 200
        if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
            // line 201
            echo "<nav  style=\" pading: 20px;\"class=\"navbar navbar-light bg-light \">
     
  <a class=\"navbar-brand col-lg-4\" href=\"#\">

    
  </a>
    <ul  class=\"nav navbar-nav col-lg-7 \">
      <li><img src=\"http://embargo.grip.org/logo1.png\" width=\"125\" height=\"125\"  alt=\"\"></li>
      <li><a onmouseover=\"this.style.background='#0d5178';this.style.color='#FFFFFF';\"  onmouseout=\"this.style.background='';this.style.color='#FFFFFF';\" style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/fr\">Accueil</a></li>
      <li><a onmouseover=\"this.style.background='#0d5178';this.style.color='#FFFFFF';\"  onmouseout=\"this.style.background='';this.style.color='#FFFFFF';\" style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/fr/viewslist\">Recherche</a></li>
      <li><a onmouseover=\"this.style.background='#0d5178';this.style.color='#FFFFFF';\"  onmouseout=\"this.style.background='';this.style.color='#FFFFFF';\" style=\"  padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/fr/node/5\">Présentation</a></li>
      <li><a onmouseover=\"this.style.background='#0d5178';this.style.color='#FFFFFF';\"  onmouseout=\"this.style.background='';this.style.color='#FFFFFF';\" style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/fr/node/2\">Avertissement</a></li>
    
      
    
    </ul>
       <ul  class=\"nav navbar-nav col-lg-1 \">
 
      
    
    </ul>
    
</nav>

";
        } else {
            // line 226
            echo "<!-- nav Anglais </div>-->

<nav  style=\"min-height: 68px;\"class=\"navbar navbar-light bg-light\">
    
  <a class=\"navbar-brand col-lg-4\" href=\"#\">
    
    
  </a>
    <ul class=\"nav navbar-nav col-lg-8 \">
      <li><img src=\"http://embargo.grip.org/logo1.png\" width=\"125\" height=\"125\"  alt=\"\"></li>
      <li><a onmouseover=\"this.style.background='#0d5178';this.style.color='#FFFFFF';\"  onmouseout=\"this.style.background='';this.style.color='#FFFFFF';\" style=\"padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/en\"><i>Home</i></a></li>
      <li><a onmouseover=\"this.style.background='#0d5178';this.style.color='#FFFFFF';\"  onmouseout=\"this.style.background='';this.style.color='#FFFFFF';\" style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/en/viewslist\"><i>Search</i></a></li>
      <li><a onmouseover=\"this.style.background='#0d5178';this.style.color='#FFFFFF';\"  onmouseout=\"this.style.background='';this.style.color='#FFFFFF';\"style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/en/node/5\"><i>About</i></a></li>
      <li><a onmouseover=\"this.style.background='#0d5178';this.style.color='#FFFFFF';\"  onmouseout=\"this.style.background='';this.style.color='#FFFFFF';\"style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/en/node/2\"><i>Disclaimer</i></a></li>
      
    </ul>
    
</nav>
  
";
        }
        // line 246
        echo "  <!-- Banner -->

 ";
        // line 248
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "slideshow", []))) {
            echo "  
     <!-- <img  src=\"http://embargo.grip.org/ban1.jpg\" >-->
    <div class=\"container slideshow\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            
          ";
            // line 255
            echo "        </div>
      </div>
    </div>
        
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
       <li data-target=\"#myCarousel\" data-slide-to=\"4\"></li>
      
       
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\">
      
      <div class=\"item active \">
        <img src=\"http://embargo.grip.org/ban1.jpg\" alt=\"Los Angeles\" style=\"width:100%;\">
      
      </div>
       
      <div class=\"item\">
        <img src=\"http://embargo.grip.org/ban2.jpg\" alt=\"ONU\" style=\"width:100%;\">
      </div>
     <div class=\"item\">
        <img src=\"http://embargo.grip.org/ban7.jpg\" alt=\"New york\" style=\"width:100%;\">
        
      </div>
         <div class=\"item\">
        <img src=\"http://embargo.grip.org/ban5.jpg\" alt=\"\" style=\"width:100%;\">
        
      </div>
          
      <div class=\"item\">
        <img src=\"http://embargo.grip.org/ban6.jpg\" alt=\"New york\" style=\"width:100%;\">
        
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
        // line 311
        echo "
  
  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Search-->
  ";
        // line 320
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "search", []))) {
            // line 321
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
  ";
        }
        // line 323
        echo "<!--End Search-->


<!--Home page banner-->
  ";
        // line 327
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "promo", []))) {
            // line 328
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 331
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "promo", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 336
        echo "<!--End Home page banner-->



<!--Highlighted-->
  ";
        // line 341
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 342
            echo "    <div class=\"container\">
      <div class=\"row\">
      <br>
      <br>

  
<div class=\"col-md-12\">
 ";
            // line 349
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
 </div>
 </div>
  </div>
  ";
        }
        // line 354
        echo "<!--End Highlighted-->

<!--Help-->
  ";
        // line 357
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 358
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 361
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 366
        echo "<!--End Help-->

<!-- Start Top Widget -->
";
        // line 369
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 370
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_left", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_right", []))) {
                // line 371
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Top widget left region -->
          
          ";
                // line 379
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_left", [])) {
                    // line 380
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 381
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_left", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 384
                echo "          
          <!-- End top widget left region -->\t\t  
          <!-- Top widget middle region -->
          
          ";
                // line 388
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])) {
                    // line 389
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 390
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 393
                echo "          
          <!-- End top widget middle region -->
          <!-- Top widget right region -->
          
          ";
                // line 397
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_right", [])) {
                    // line 398
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 399
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_right", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 402
                echo "          
          <!-- End top widget right region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 409
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 413
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 414
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container-fluid\">
        ";
            // line 418
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 423
        echo "<!-- End Page Title -->


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container-fluid\">
    
    <!--Start Content Top-->
    ";
        // line 432
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 433
            echo "    <div class=\"content-top\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
            ";
            // line 436
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 441
        echo "    <!--End Content Top-->
    
    <!--start:Breadcrumbs -->
\t";
        // line 444
        if ( !($context["is_front"] ?? null)) {
            // line 445
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">";
            // line 446
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
    </div>
\t";
        }
        // line 449
        echo "    <!--End Breadcrumbs-->
\t
    <div class=\"row layout\">
      <!--- Start Left Sidebar -->
      ";
        // line 453
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 454
            echo "          <div class = \"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " sidebar-first\">
            ";
            // line 455
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </div>
      ";
        }
        // line 458
        echo "      <!---End Left Sidebar -->
       ";
        // line 459
        if (($context["is_front"] ?? null)) {
            // line 460
            echo "       ";
            if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                // line 461
                echo "           <h1 class=\"text-center titrehome\">Les embargos sur les armes</h1>
            ";
            } else {
                // line 463
                echo "           <h1 class=\"text-center titrehome\">The arms embargoes</h1>
             
       ";
            }
            // line 465
            echo "  
       ";
        }
        // line 466
        echo "  
      <!--- Start content -->

    ";
        // line 469
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 470
            echo "     <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo " content-layout\">
      ";
            // line 471
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
      ";
            // line 472
            if (($context["is_front"] ?? null)) {
                echo " 
                
    
        
    <div class=\"col-md-12\">
        <div class=\"col-md-1\">
            
        </div>
        
  <div  style=\"text-align:center\" class=\"col-md-3\">
  <span class=\"fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\" fa fa-circle fa-stack-2x\"></i>
    <i class=\"p3 fa fa-database fa-stack-1x fa-inverse\" data-count=\"5\"></i>
  </span>
  ";
                // line 486
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 487
                    echo "    
 <p class=\"text-justify\">
    Cette base de données fournit un aperçu le plus actuel possible des régimes d’embargos sur les armes. 
 </p>
 ";
                } else {
                    // line 492
                    echo " <p class=\"text-justify\">
    This database aims to give an updated snapshot of the arms embargoes’ regimes. 
   
 </p>
 ";
                }
                // line 497
                echo "  
</div>
 <div  style=\"text-align:center\"  class=\"col-md-3\">
    <span class=\" fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\" fa fa-circle fa-stack-2x\"></i>
    <i  class=\"p3 fa fa-book fa-stack-1x fa-inverse\" data-count=\"5\"></i>
    </span>
  ";
                // line 504
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 505
                    echo "     
  <p class=\"text-justify\">
    L’information contenue dans cette base de données est régulièrement mis à jour, enrichie et vérifiée par le GRIP. 
  </p>
  ";
                } else {
                    // line 510
                    echo "  <p class=\"text-justify\">
    The information of this database is regularly updated, checked and supplemented.  
  </p>
  ";
                }
                // line 514
                echo "</div>
 
<div   style=\"text-align:center;\" class=\"col-md-4\">
    
  <span class=\"p1 fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\"p2 fa fa-circle fa-stack-2x\"></i>
    <i  class=\"p3 fa fa-institution fa-stack-1x fa-inverse\" data-count=\"5\"></i>
  </span>
   ";
                // line 522
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 523
                    echo "   <p class=\"text-justify\">
     
   Les organisations ayant mis en œuvre des embargos sur les armes depuis 2000 sont : la Communauté Économique des États d’Afrique de l’Ouest (CEDEAO), la Ligue des États Arabes (LEA), l’Organisation pour la Sécurité et la Coopération en Europe (OSCE), l’Union européenne (UE) et les Nations unies. 
   <p>
    ";
                } else {
                    // line 527
                    echo "     
   <p class=\"text-justify\">
   Organisations which have implemented arms embargoes since 2000 are : The African Union (AU), The Economic Community of African States (ECOWAS), the European Union (EU), the League of Arab States (LAS), the Organisation for Security and Cooperation in Europe (OSCE) and the United Nations (UN).  
   <br>
   </p>
   ";
                }
                // line 532
                echo " 
</div>

<br>
</div>





<!---Début  du titre --
  
<div class=\"row\">
        <div class=\"col-lg-12 \">
           <div class=\"col-lg-1 \">
                  </div>
                  
                  <div class=\"col-lg-11 \">
              
            ";
                // line 551
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 552
                    echo "            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 class=\"soustitrehome\">Les embargos sur les armes en quelques chiffres </h1>
        ";
                } else {
                    // line 554
                    echo "            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 class=\"soustitrehome\">Key figures on arms embargoes </h1>
        ";
                }
                // line 555
                echo " 
            </div>
        </div>
    </div>

 --->
   <!---Début de photo pays embargos--
  <div class=\"col-lg-12\">
       
   <div class=\"col-lg-2\"></div>
  <div class=\"col-lg-5\">
      <br>
    
    <p>
   <i><h1><b>&nbsp;&nbsp;22</b></h1></i> 
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nombre d’États ou territoires sous embargo
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
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <br>
     
  

     
  
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
   
</div>
<div class=\"col-lg-5\">
      <br>
    <br>
    <img src=\"http://embargo.grip.org/pays.jpg\" >
    <br>
    <br>
    <br>
    
  
  
</div>

</div>-->
    <div class=\"text-center col-lg-12\">
      <br>
    <br>
    <!--<img  src=\"http://embargo.grip.org/pays.jpg\" >-->
    <br>
    <br>
    <br>
    
  
  
</div>
<!--- fin -->
";
                // line 638
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 639
                    echo "
<div class=\"row\">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class=\"text-center col-lg-12\">
        <br>
        <br>
   
        <h1 class=\"text-center soustitrehome\">Les embargos sur les armes en quelques chiffres</h1>
        <br>
        <br>
    <div class=\"col-lg-12\">
       <div  class=\" col-lg-2\">
       </div>
        <div style=\"border: 2px solid #cccccc; background: #efeff5\" class=\" col-md-2\">
     
        <div class=\"tout\" >
            
           
           <div class=\"iconChiffre\">
           <div class=\"col-lg-12\">  
           <div class=\"col-lg-6\">  
               <br>
                  <i class=\"fa fa-flag fa-5x \" style=\"color:#246F8C\" width=\"125\" height=\"130\" aria-hidden=\"true\"></i>  
              
            </div>
                <div class=\"col-lg-6\"> 
               <div class=\"chiffres\">
                   <div  style=\"font-size:24px; color:#246F8C \"><h1><i>22</i></h1></div>
                   <div  style=\"font-size:15px;\" class=\"title\"><i>Nombre d’États ou territoires</i>  </div>
            </div>
             <br>
           </div>
              
                </div>
            
                
                </div>
        </div>
    </div>
        <div class=\" col-lg-1\">
            
        </div>
   
       
  <div style=\"border: 2px solid #cccccc; background: #efeff5\" class=\" col-md-2\">
        <div class=\"tout\" >
            
           
           <div class=\"iconChiffre\">
           <div class=\"col-lg-12\">  
           <div class=\"col-lg-6\">  
               <br>
                <i class=\"fa fa-users fa-5x \" style=\"color:#246F8C\" width=\"125\" height=\"130\" aria-hidden=\"true\"></i>
                      
            </div>
                <div class=\"col-lg-6\"> 
               <div class=\"chiffres\">
                   <div style=\"font-size:24px; color:#246F8C \"><h1><i>5</i></h1></div>
                  <div  style=\"font-size:15px;\" class=\"title\"><i>Nombre d’entités non-étatiques</i>  </div>
           
            </div>
           </div>
                </div>
            
                
                </div>
        </div>
    </div>
        <div class=\" col-md-1\">
            
        </div>
      
        <div style=\"border: 2px solid #cccccc; background: #efeff5\" class=\" col-md-2\">
        <div class=\"tout\" >
            
           
           <div class=\"iconChiffre\">
           <div class=\"col-lg-12\">  
           <div class=\"col-lg-6\">  
               <br> 
             <i class=\"fas fa-hands fa-5x\" style=\"color:#246F8C\" width=\"125\" height=\"130\" aria-hidden=\"true\"></i>
             <br>
            </div>
                <div class=\"col-lg-6\"> 
               <div class=\"chiffres\">
                   <div  style=\"font-size:24px; color:#246F8C \"><h1><i>6&nbsp;&nbsp;<br></i></h1></div>
                   <div  style=\"font-size:15px;\" class=\"title\"><i>&nbsp;&nbsp;Nombre d’organi- sations </i>  </div>
                   
                  
                   <br>
            </div>
           </div>
                </div>
            
                
                </div>
        </div>
    </div>
        <div class=\" col-md-2\">
            
        </div>
        
        
        
        
        
    </div>
        
        <!--div class=\"col-lg-4\">
        <img src=\"http://embargo.grip.org/pays.jpg\" >
    </div>--->
    </div>

</div>

<!--Annglais--->

";
                } else {
                    // line 761
                    echo "

<div class=\"row\">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class=\"text-center col-lg-12\">
        <br>
        <br>
        <h1 class=\"text-center soustitrehome\">Key figures on arms embargoes :</h1>
        <br>
        <br>
    <div class=\"col-lg-12\">
       <div  class=\" col-lg-2\">
       </div>
        <div style=\"border: 2px solid #cccccc; background: #efeff5\" class=\" col-md-2\">
     
        <div class=\"tout\" >
            
           
           <div class=\"iconChiffre\">
           <div class=\"col-lg-12\">  
           <div class=\"col-lg-6\">  
               <br>
                  <i class=\"fa fa-flag fa-5x \" style=\"color:#246F8C\" width=\"125\" height=\"130\" aria-hidden=\"true\"></i>  
              
            </div>
                <div class=\"col-lg-6\"> 
               <div class=\"chiffres\">
                   <div  style=\"font-size:24px; color:#246F8C \"><h1><i>22</i></h1></div>
                   <div  style=\"font-size:15px;\" class=\"title\"><i>Number of States or territories </i>  </div>
            </div>
              <br>
           </div>
              
                </div>
            
                
                </div>
        </div>
    </div>
        <div class=\" col-lg-1\">
            
        </div>
   
       
  <div style=\"border: 2px solid #cccccc; background: #efeff5\" class=\" col-md-2\">
        <div class=\"tout\" >
            
           
           <div class=\"iconChiffre\">
           <div class=\"col-lg-12\">  
           <div class=\"col-lg-6\">  
               <br>
                <i class=\"fa fa-users fa-5x \" style=\"color:#246F8C\" width=\"125\" height=\"130\" aria-hidden=\"true\"></i>
                      
            </div>
                <div class=\"col-lg-6\"> 
               <div class=\"chiffres\">
                   <div  style=\"font-size:24px; color:#246F8C \"><h1><i>5</i></h1></div>
                   <div  style=\"font-size:15px;\" class=\"title\"><i>Number of non-state entities </i>  </div>
           
            </div>
               <br>
           </div>
                </div>
            
                
                </div>
        </div>
    </div>
        <div class=\" col-md-1\">
            
        </div>
      
        <div style=\"border: 2px solid #cccccc; background: #efeff5\" class=\" col-md-2\">
        <div class=\"tout\" >
            
           
           <div class=\"iconChiffre\">
           <div class=\"col-lg-12\">  
           <div class=\"col-lg-6\">  
               <br> 
              
             <i class=\" fas fa-hand-paper fa-5x\" style=\"color:#246F8C\" width=\"125\" height=\"130\" aria-hidden=\"true\"></i>
             <br>
            </div>
                <div class=\"col-lg-6\"> 
               <div class=\"chiffres\">
                   <div  style=\"font-size:24px; color:#246F8C \"><h1><i>6&nbsp;&nbsp;</i></h1></div>
                   <div  style=\"font-size:15px;\" class=\"title\"><i>Number of multilateral organizations</i>  </div>
                   
                  
                   <br>
            </div>
           </div>
                </div>
            
                
                </div>
        </div>
    </div>
        <div class=\" col-md-2\">
            
        </div>
        
        
        
        
        
    </div>
        
        <!--div class=\"col-lg-4\">
        <img src=\"http://embargo.grip.org/pays.jpg\" >
    </div>--->
    </div>

</div>
";
                }
                // line 882
                echo "</div>

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
            // line 921
            echo "      ";
        }
        // line 922
        echo "      <!---End content -->

      <!--- Start Right Sidebar -->
      ";
        // line 925
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 926
            echo "          <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo " sidebar-second\">
            ";
            // line 927
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>

      ";
        }
        // line 931
        echo "      <!---End Right Sidebar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 937
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 938
            echo "        
    <div class=\"content-bottom\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
                      
   
            ";
            // line 944
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 949
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->

<!-- Start Footer -->
  ";
        // line 955
        if (((($this->getAttribute(($context["page"] ?? null), "footer_top_one", []) || $this->getAttribute(($context["page"] ?? null), "footer_top_two", [])) || $this->getAttribute(($context["page"] ?? null), "footer_top_three", [])) || $this->getAttribute(($context["page"] ?? null), "footer_top_four", []))) {
            // line 956
            echo "    <div class=\"footer-widgets\">
      <!-- Start Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Start Footer Top One Region -->
          
          ";
            // line 964
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_one", [])) {
                // line 965
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 966
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_one", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 969
            echo "          
          <!-- End Footer Top One Region -->

          <!-- Start Footer Top Two Region -->
          ";
            // line 973
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_two", [])) {
                // line 974
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 975
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_two", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 978
            echo "          
          <!-- End Footer Top Two Region -->

          <!-- Start Footer Top Three Region -->
          
          ";
            // line 983
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_three", [])) {
                // line 984
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 985
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_three", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 988
            echo "          
          <!-- End Footer Top Three Region -->
\t\t  
\t\t  <!-- Start Footer Top Four Region -->

          ";
            // line 993
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_four", [])) {
                // line 994
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 995
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_four", [])), "html", null, true);
                echo "
          </div>
          ";
            }
            // line 998
            echo "\t\t  
\t\t  <!-- End Footer Top Four Region -->

        </div>
      </div>
    </div>
  ";
        }
        // line 1005
        echo "  <!-- Footer Region-->
  ";
        // line 1006
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 1007
            echo "    <div class=\"footer-space\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
              
            ";
            // line 1012
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
          </div>
      </div>
      </div>
\t</div>
  ";
        }
        // line 1018
        echo "  <!-- End Footer Region-->
<!--End Footer -->

<!-- Start Footer Ribbon -->
";
        // line 1022
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
            // line 1023
            echo "    
    
    ";
            // line 1147
            echo "   <!--  <div class=\"footer-ribbon\">
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
         <a href=\"https://www.grip.org/fr/\" style=\"color: #246F8C;\">   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visitez le site du Grip</a>
         </div>
        
      <div class=\"row\">
       
          
        <div class=\"col-lg-12\">
           <div class=\"col-lg-5\"></div> 
  
        
  
         ";
            // line 1201
            if (($context["show_social_icon"] ?? null)) {
                echo "#
    
        ";
            }
            // line 1204
            echo "    
            <div class=\"col-lg-5\"></div> 
        </div>
      </div>
    
</div> -->
    
        
      
            
            
        
  
";
        }
        // line 1218
        echo "<!-- End Footer Ribbon -->

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- #footer-bottom -->
<div id=\"footer-bottom\">
    
 <div style=\"background-color: #246F8C;\" class=\"panel-body\">
         
        <div class=\"col-lg-12\">
        <div style=\"color: #ffffff;\" class=\"col-lg-4\">
   ";
        // line 1246
        if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
            echo " 
      <br>
       
      <p style=\"text-align: left;\" ><i>Les bases de données du Grip</i></p>
      <p >
    
      <ul style=\"text-align: left;\">
          <i><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://production.grip.org/\"> Base de donnée de l'industrie de l'armement en Belgique</a></i></br>
          <i><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/fr/node/542\" > Production et transferts d’armements dans le monde</a></i></br>
          <i><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/fr/node/1029\" > Les transferts d'armes de la Belgique </a></i></br>  
      </ul>  
   </p>
        

  ";
        } else {
            // line 1261
            echo "     <br>
       
      <p style=\"text-align: left;\" ><i>GRIP databases</i></p>
      <p>
    
      <ul style=\"text-align: left;\" >
          <i><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://production.grip.org/\"> Armament industry in Belgium</a></i></br>
          <i><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/fr/node/542\" > Global arms production </a></i></br>
          <i><i class=\"fa fa-arrow-circle-o-right\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/fr/node/1029\" > Belgium arms transfers </a></i></br>  
      </ul>  
       </p>
  ";
        }
        // line 1273
        echo "        </div>
      
     <div style=\"color: #ffffff;\" class=\"col-lg-3\">
   ";
        // line 1276
        if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
            echo " 
       <br>
       
      <p style=\"text-align: left;\" ><i>Contact</i></p>
           
      <ul style=\"text-align: left;\" >
       <i><i class=\"fa fa-globe\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/\"> Visitez le site du GRIP</a></i></br>
       <i><i class=\"fa fa-envelope\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/fr/contact/contact\" > Contactez le Grip</a></i></br>
      </ul>
         <div class=\"social-media\">
           
 
             
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a style=\"font-size: 16px;\" href=\"https://www.facebook.com/GRIP.1979\"class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
            
              <a href=\"https://twitter.com/grip_org\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
           
              <a href=\"https://www.linkedin.com/company/grip\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
         
          
              </div>
             
             
        
        
       </p>
        

  ";
        } else {
            // line 1305
            echo "      
      
        <br>
       
      <p style=\"text-align: left;\" ><i>Contact</i></p>
      <p>
    
      <ul style=\"text-align: left;\" >
        <i><i class=\"fa fa-globe\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/\"> Visit GRIP website</a></i></br>
        <i><i class=\"fa fa-envelope\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/fr/contact/contact\" > E-mail GRIP</a></i></br>
      </ul> 
          
    <div class=\"social-media\">
           
 
             
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style=\"font-size: 16px;\" href=\"https://www.facebook.com/GRIP.1979\"class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
            
              <a href=\"https://twitter.com/grip_org\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
           
              <a href=\"https://www.linkedin.com/company/grip\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
         
          
           </div>
       </p>

  ";
        }
        // line 1332
        echo "      </div>
      <br>
      <p style=\"text-align: left; color:#ffffff;\"> <i>Avec le soutien de </i> </p>
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
 </div>

    <div style=\"background-color:#757282;\" class=\"panel-body\">
        <div class=\"col-lg-12\">
            <div  style=\"color: #FFFFFF;\"class=\"col-lg-3\">
                <i> 467 Chaussée de Louvain B-1030 Bruxelles</i>
                  
                  </div>
                  
                    <div  style=\"color: #FFFFFF;\"class=\"col-lg-6\"> 
                      <i><p class=\"copyright\">© Grip ";
        // line 1363
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Groupe de recherche et d'information sur la paix et la sécurité </p></i>
  
                  </div>
                  <!--
                  <div class=\" col-lg-2 social-media\">
           
 
           
              <a href=\"https://www.facebook.com/GRIP.1979\"class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
            
              <a href=\"https://twitter.com/grip_org\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
           
              <a href=\"https://www.linkedin.com/company/grip\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
         
          
        </div>-->
       
    
                 <div style=\"color: #ffffff;\" class=\"col-lg-2\"><i> +32 (0)241 80 20</i> </div> 
                
        </div>
            
            
           </div>  
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
        // line 1401
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
        echo "
          
            </div>
              
                
            
           
       
          
            <!--
        <p class=\"copyright\">© Grip ";
        // line 1411
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Groupe de recherche et d'information sur la paix et la sécurité</p>
         
        <div class=\"col-md-12 \">
           <div class=\"social-media\">
            
              <a href=\"https://www.facebook.com/GRIP.1979\"class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
            
              <a href=\"https://twitter.com/grip_org\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
           
              <a href=\"https://www.linkedin.com/company/grip\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
         
           </div>
        </div>-->
        
         
       
        ";
        // line 1427
        if (($context["show_credit_link"] ?? null)) {
            // line 1428
            echo "          <p class=\"credit\">Theme for <a href=\"https://www.drupal.org/8\" target=\"_blank\">Drupal 8</a></p>
        ";
        }
        // line 1430
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
        return array (  1622 => 1430,  1618 => 1428,  1616 => 1427,  1597 => 1411,  1584 => 1401,  1543 => 1363,  1510 => 1332,  1481 => 1305,  1449 => 1276,  1444 => 1273,  1430 => 1261,  1412 => 1246,  1382 => 1218,  1366 => 1204,  1360 => 1201,  1304 => 1147,  1300 => 1023,  1298 => 1022,  1292 => 1018,  1283 => 1012,  1276 => 1007,  1274 => 1006,  1271 => 1005,  1262 => 998,  1256 => 995,  1251 => 994,  1249 => 993,  1242 => 988,  1236 => 985,  1231 => 984,  1229 => 983,  1222 => 978,  1216 => 975,  1211 => 974,  1209 => 973,  1203 => 969,  1197 => 966,  1192 => 965,  1190 => 964,  1180 => 956,  1178 => 955,  1170 => 949,  1162 => 944,  1154 => 938,  1152 => 937,  1144 => 931,  1137 => 927,  1132 => 926,  1130 => 925,  1125 => 922,  1122 => 921,  1081 => 882,  958 => 761,  834 => 639,  832 => 638,  747 => 555,  743 => 554,  739 => 552,  737 => 551,  716 => 532,  708 => 527,  701 => 523,  699 => 522,  689 => 514,  683 => 510,  676 => 505,  674 => 504,  665 => 497,  658 => 492,  651 => 487,  649 => 486,  632 => 472,  628 => 471,  623 => 470,  621 => 469,  616 => 466,  612 => 465,  607 => 463,  603 => 461,  600 => 460,  598 => 459,  595 => 458,  589 => 455,  584 => 454,  582 => 453,  576 => 449,  570 => 446,  567 => 445,  565 => 444,  560 => 441,  552 => 436,  547 => 433,  545 => 432,  534 => 423,  526 => 418,  520 => 414,  518 => 413,  512 => 409,  503 => 402,  497 => 399,  492 => 398,  490 => 397,  484 => 393,  478 => 390,  473 => 389,  471 => 388,  465 => 384,  459 => 381,  454 => 380,  452 => 379,  442 => 371,  440 => 370,  436 => 369,  431 => 366,  423 => 361,  418 => 358,  416 => 357,  411 => 354,  403 => 349,  394 => 342,  392 => 341,  385 => 336,  377 => 331,  372 => 328,  370 => 327,  364 => 323,  358 => 321,  356 => 320,  345 => 311,  287 => 255,  278 => 248,  274 => 246,  252 => 226,  225 => 201,  223 => 200,  219 => 198,  203 => 184,  197 => 181,  192 => 180,  190 => 179,  184 => 175,  178 => 172,  173 => 171,  171 => 170,  160 => 161,  157 => 160,  155 => 159,  152 => 158,  111 => 119,  65 => 75,  63 => 74,  55 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap_mint/templates/layout/page.html.twig", "C:\\wamp64\\www\\embargo\\themes\\bootstrap_mint\\templates\\layout\\page.html.twig");
    }
}
