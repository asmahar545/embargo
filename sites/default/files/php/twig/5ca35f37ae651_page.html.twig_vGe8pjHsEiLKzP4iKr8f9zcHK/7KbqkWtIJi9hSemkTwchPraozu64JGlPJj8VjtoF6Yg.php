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
        $filters = ["date" => 1351];
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
      <li><a  onmouseover=\"this.style.background='#0d5178';this.style.color='#FFFFFF';\"  onmouseout=\"this.style.background='';this.style.color='#FFFFFF';\" style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/fr\"><i>Accueil</i></a></li>
      <li><a onmouseover=\"this.style.background='#0d5178';this.style.color='#FFFFFF';\"  onmouseout=\"this.style.background='';this.style.color='#FFFFFF';\" style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/fr/viewslist\"><i>Recherche</i></a></li>
      <li><a onmouseover=\"this.style.background='#0d5178';this.style.color='#FFFFFF';\"  onmouseout=\"this.style.background='';this.style.color='#FFFFFF';\" style=\"  padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/fr/node/5\"><i>Présentation</i></a></li>
      <li><a onmouseover=\"this.style.background='#0d5178';this.style.color='#FFFFFF';\"  onmouseout=\"this.style.background='';this.style.color='#FFFFFF';\" style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/fr/node/2\"><i>Avertissement</i></a></li>
    
      
    
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
       <li data-target=\"#myCarousel\" data-slide-to=\"5\"></li>
       
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
          <div class=\"item \">
        <img src=\"http://localhost/embargo/ban8.png\" alt=\"\" style=\"width:100%;\">
        
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
        // line 314
        echo "
  
  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Search-->
  ";
        // line 323
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "search", []))) {
            // line 324
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
  ";
        }
        // line 326
        echo "<!--End Search-->


<!--Home page banner-->
  ";
        // line 330
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "promo", []))) {
            // line 331
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 334
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "promo", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 339
        echo "<!--End Home page banner-->



<!--Highlighted-->
  ";
        // line 344
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 345
            echo "    <div class=\"container\">
      <div class=\"row\">
      <br>
      <br>

  
<div class=\"col-md-12\">
 ";
            // line 352
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
 </div>
 </div>
  </div>
  ";
        }
        // line 357
        echo "<!--End Highlighted-->

<!--Help-->
  ";
        // line 360
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 361
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 364
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 369
        echo "<!--End Help-->

<!-- Start Top Widget -->
";
        // line 372
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 373
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_left", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_right", []))) {
                // line 374
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Top widget left region -->
          
          ";
                // line 382
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_left", [])) {
                    // line 383
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 384
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_left", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 387
                echo "          
          <!-- End top widget left region -->\t\t  
          <!-- Top widget middle region -->
          
          ";
                // line 391
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])) {
                    // line 392
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 393
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 396
                echo "          
          <!-- End top widget middle region -->
          <!-- Top widget right region -->
          
          ";
                // line 400
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_right", [])) {
                    // line 401
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 402
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_right", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 405
                echo "          
          <!-- End top widget right region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 412
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 416
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 417
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container-fluid\">
        ";
            // line 421
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 426
        echo "<!-- End Page Title -->


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container-fluid\">
    
    <!--Start Content Top-->
    ";
        // line 435
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 436
            echo "    <div class=\"content-top\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
            ";
            // line 439
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 444
        echo "    <!--End Content Top-->
    
    <!--start:Breadcrumbs -->
\t";
        // line 447
        if ( !($context["is_front"] ?? null)) {
            // line 448
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">";
            // line 449
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
    </div>
\t";
        }
        // line 452
        echo "    <!--End Breadcrumbs-->
\t
    <div class=\"row layout\">
      <!--- Start Left Sidebar -->
      ";
        // line 456
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 457
            echo "          <div class = \"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " sidebar-first\">
            ";
            // line 458
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </div>
      ";
        }
        // line 461
        echo "      <!---End Left Sidebar -->
       ";
        // line 462
        if (($context["is_front"] ?? null)) {
            // line 463
            echo "       ";
            if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                // line 464
                echo "           <h1 class=\"text-center titrehome\">Les embargos sur les armes </h1
            ";
            } else {
                // line 466
                echo "           <h1 class=\"text-center titrehome\" >The arms embargoes</h1>
             
       ";
            }
            // line 468
            echo "  
       ";
        }
        // line 469
        echo "  
      <!--- Start content -->

    ";
        // line 472
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 473
            echo "     <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo " content-layout\">
      ";
            // line 474
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
      ";
            // line 475
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
                // line 489
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 490
                    echo "    
 <p class=\"text-justify\">
    Cette base de données fournit un aperçu le plus actuel possible des régimes d’embargos sur les armes. 
 </p>
 ";
                } else {
                    // line 495
                    echo " <p class=\"text-justify\">
    This database aims to give an updated snapshot of the arms embargoes’ regimes. 
   
 </p>
 ";
                }
                // line 500
                echo "  
</div>
 <div  style=\"text-align:center\"  class=\"col-md-3\">
    <span class=\" fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\" fa fa-circle fa-stack-2x\"></i>
    <i  class=\"p3 fa fa-book fa-stack-1x fa-inverse\" data-count=\"5\"></i>
    </span>
  ";
                // line 507
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 508
                    echo "     
  <p class=\"text-justify\">
    L’information contenue dans cette base de données est régulièrement mis à jour, enrichie et vérifiée par le GRIP. 
  </p>
  ";
                } else {
                    // line 513
                    echo "  <p class=\"text-justify\">
    The information of this database is regularly updated, checked and supplemented.  
  </p>
  ";
                }
                // line 517
                echo "</div>
 
<div   style=\"text-align:center;\" class=\"col-md-4\">
    
  <span class=\"p1 fa-stack fa-5x has-badge\" data-count=\"3\">
    <i class=\"p2 fa fa-circle fa-stack-2x\"></i>
    <i  class=\"p3 fa fa-institution fa-stack-1x fa-inverse\" data-count=\"5\"></i>
  </span>
   ";
                // line 525
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 526
                    echo "   <p class=\"text-justify\">
     
   Les organisations ayant mis en œuvre des embargos sur les armes depuis 2000 sont : la Communauté Économique des États d’Afrique de l’Ouest (CEDEAO), la Ligue des États Arabes (LEA), l’Organisation pour la Sécurité et la Coopération en Europe (OSCE), l’Union européenne (UE) et les Nations unies. 
   <p>
    ";
                } else {
                    // line 530
                    echo "     
   <p class=\"text-justify\">
   Organisations which have implemented arms embargoes since 2000 are : The African Union (AU), The Economic Community of African States (ECOWAS), the European Union (EU), the League of Arab States (LAS), the Organisation for Security and Cooperation in Europe (OSCE) and the United Nations (UN).  
   <br>
   </p>
   ";
                }
                // line 535
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
                // line 554
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 555
                    echo "            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 class=\"soustitrehome\">Les embargos sur les armes en quelques chiffres </h1>
        ";
                } else {
                    // line 557
                    echo "            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 class=\"soustitrehome\">Key figures on arms embargoes </h1>
        ";
                }
                // line 558
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
    <img  src=\"http://embargo.grip.org/pays.jpg\" >
    <br>
    <br>
    <br>
    
  
  
</div>
<!--- fin -->
";
                // line 641
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 642
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
                   <div  style=\"font-size:24px; color:#246F8C \"><h1><i>5</i></h1></div>
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
                   <div  style=\"font-size:24px; color:#246F8C \"><h1><i>6&nbsp;&nbsp;</i></h1></div>
                   <div  style=\"font-size:15px;\" class=\"title\"><i>Nombre d’organi- sations </i>  </div>
                   
                  
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
                    // line 763
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
             <i class=\"fas fa-hands fa-5x\" style=\"color:#246F8C\" width=\"125\" height=\"130\" aria-hidden=\"true\"></i>
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
                // line 883
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
            // line 922
            echo "      ";
        }
        // line 923
        echo "      <!---End content -->

      <!--- Start Right Sidebar -->
      ";
        // line 926
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 927
            echo "          <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo " sidebar-second\">
            ";
            // line 928
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>

      ";
        }
        // line 932
        echo "      <!---End Right Sidebar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 938
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 939
            echo "        
    <div class=\"content-bottom\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
                      
   
            ";
            // line 945
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 950
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->

<!-- Start Footer -->
  ";
        // line 956
        if (((($this->getAttribute(($context["page"] ?? null), "footer_top_one", []) || $this->getAttribute(($context["page"] ?? null), "footer_top_two", [])) || $this->getAttribute(($context["page"] ?? null), "footer_top_three", [])) || $this->getAttribute(($context["page"] ?? null), "footer_top_four", []))) {
            // line 957
            echo "    <div class=\"footer-widgets\">
      <!-- Start Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Start Footer Top One Region -->
          
          ";
            // line 965
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_one", [])) {
                // line 966
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 967
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_one", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 970
            echo "          
          <!-- End Footer Top One Region -->

          <!-- Start Footer Top Two Region -->
          ";
            // line 974
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_two", [])) {
                // line 975
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 976
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_two", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 979
            echo "          
          <!-- End Footer Top Two Region -->

          <!-- Start Footer Top Three Region -->
          
          ";
            // line 984
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_three", [])) {
                // line 985
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 986
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_three", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 989
            echo "          
          <!-- End Footer Top Three Region -->
\t\t  
\t\t  <!-- Start Footer Top Four Region -->

          ";
            // line 994
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_four", [])) {
                // line 995
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 996
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_four", [])), "html", null, true);
                echo "
          </div>
          ";
            }
            // line 999
            echo "\t\t  
\t\t  <!-- End Footer Top Four Region -->

        </div>
      </div>
    </div>
  ";
        }
        // line 1006
        echo "  <!-- Footer Region-->
  ";
        // line 1007
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 1008
            echo "    <div class=\"footer-space\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
              
            ";
            // line 1013
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
          </div>
      </div>
      </div>
\t</div>
  ";
        }
        // line 1019
        echo "  <!-- End Footer Region-->
<!--End Footer -->

<!-- Start Footer Ribbon -->
";
        // line 1023
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
            // line 1024
            echo "    
    
    ";
            // line 1148
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
            // line 1202
            if (($context["show_social_icon"] ?? null)) {
                echo "#
    
        ";
            }
            // line 1205
            echo "    
            <div class=\"col-lg-5\"></div> 
        </div>
      </div>
    
</div> -->
    
        
      
            
            
        
  
";
        }
        // line 1219
        echo "<!-- End Footer Ribbon -->

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
        // line 1234
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
            // line 1249
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
        // line 1261
        echo "        </div>
      
     <div style=\"color: #ffffff;\" class=\"col-lg-3\">
   ";
        // line 1264
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
            // line 1293
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
        // line 1320
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
        // line 1351
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
        // line 1389
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
        echo "
          
            </div>
              
                
            
           
       
          
            <!--
        <p class=\"copyright\">© Grip ";
        // line 1399
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
        // line 1415
        if (($context["show_credit_link"] ?? null)) {
            // line 1416
            echo "          <p class=\"credit\">Theme for <a href=\"https://www.drupal.org/8\" target=\"_blank\">Drupal 8</a></p>
        ";
        }
        // line 1418
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
        return array (  1610 => 1418,  1606 => 1416,  1604 => 1415,  1585 => 1399,  1572 => 1389,  1531 => 1351,  1498 => 1320,  1469 => 1293,  1437 => 1264,  1432 => 1261,  1418 => 1249,  1400 => 1234,  1383 => 1219,  1367 => 1205,  1361 => 1202,  1305 => 1148,  1301 => 1024,  1299 => 1023,  1293 => 1019,  1284 => 1013,  1277 => 1008,  1275 => 1007,  1272 => 1006,  1263 => 999,  1257 => 996,  1252 => 995,  1250 => 994,  1243 => 989,  1237 => 986,  1232 => 985,  1230 => 984,  1223 => 979,  1217 => 976,  1212 => 975,  1210 => 974,  1204 => 970,  1198 => 967,  1193 => 966,  1191 => 965,  1181 => 957,  1179 => 956,  1171 => 950,  1163 => 945,  1155 => 939,  1153 => 938,  1145 => 932,  1138 => 928,  1133 => 927,  1131 => 926,  1126 => 923,  1123 => 922,  1082 => 883,  960 => 763,  837 => 642,  835 => 641,  750 => 558,  746 => 557,  742 => 555,  740 => 554,  719 => 535,  711 => 530,  704 => 526,  702 => 525,  692 => 517,  686 => 513,  679 => 508,  677 => 507,  668 => 500,  661 => 495,  654 => 490,  652 => 489,  635 => 475,  631 => 474,  626 => 473,  624 => 472,  619 => 469,  615 => 468,  610 => 466,  606 => 464,  603 => 463,  601 => 462,  598 => 461,  592 => 458,  587 => 457,  585 => 456,  579 => 452,  573 => 449,  570 => 448,  568 => 447,  563 => 444,  555 => 439,  550 => 436,  548 => 435,  537 => 426,  529 => 421,  523 => 417,  521 => 416,  515 => 412,  506 => 405,  500 => 402,  495 => 401,  493 => 400,  487 => 396,  481 => 393,  476 => 392,  474 => 391,  468 => 387,  462 => 384,  457 => 383,  455 => 382,  445 => 374,  443 => 373,  439 => 372,  434 => 369,  426 => 364,  421 => 361,  419 => 360,  414 => 357,  406 => 352,  397 => 345,  395 => 344,  388 => 339,  380 => 334,  375 => 331,  373 => 330,  367 => 326,  361 => 324,  359 => 323,  348 => 314,  287 => 255,  278 => 248,  274 => 246,  252 => 226,  225 => 201,  223 => 200,  219 => 198,  203 => 184,  197 => 181,  192 => 180,  190 => 179,  184 => 175,  178 => 172,  173 => 171,  171 => 170,  160 => 161,  157 => 160,  155 => 159,  152 => 158,  111 => 119,  65 => 75,  63 => 74,  55 => 68,);
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
