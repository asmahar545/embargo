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
class __TwigTemplate_435917ae848306a544e5d2b281017e54a4e8c53043ac948b7f9df11590ed5c1f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 74];
        $filters = ["escape" => 167, "date" => 509];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
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
            echo "        <nav class=\"navbar\" style=\"background-color:#0d5178;\">
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
                    <li> 


                        <div style=\"padding-left:0.6em;\"class=\"social-media\">



                            <a style=\"font-size: 16px;\" href=\"https://www.facebook.com/GRIP.1979\"class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>

                            <a href=\"https://twitter.com/grip_org\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>

                            <a href=\"https://www.linkedin.com/company/grip\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>


                        </div>
                    </li>


                </ul>


            </div> 
        </nav>
    ";
        } else {
            // line 115
            echo "        <!-- anglais -->
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
        // line 154
        echo "    <!-- Sliding Header Widget -->
    ";
        // line 155
        if (($context["is_front"] ?? null)) {
            // line 156
            echo "        ";
            if (($this->getAttribute(($context["page"] ?? null), "sliding_header_one", []) || $this->getAttribute(($context["page"] ?? null), "sliding_header_two", []))) {
                // line 157
                echo "            <div class=\"slidewidget\">
                <div class=\"wrapper\">
                    <!-- start: Container -->
                    <div class=\"container\">

                        <div class=\"row\">
                            <div id=\"sliding-header-wrap\">
                                <!-- Slide first region -->

                                ";
                // line 166
                if ($this->getAttribute(($context["page"] ?? null), "sliding_header_one", [])) {
                    // line 167
                    echo "                                    <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slidewidget_first"] ?? null)), "html", null, true);
                    echo ">
                                        ";
                    // line 168
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sliding_header_one", [])), "html", null, true);
                    echo "
                                    </div>
                                ";
                }
                // line 171
                echo "
                                <!-- End slide first region -->
                                <!-- Slide second region -->

                                ";
                // line 175
                if ($this->getAttribute(($context["page"] ?? null), "sliding_header_two", [])) {
                    // line 176
                    echo "                                    <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slidewidget_class"] ?? null)), "html", null, true);
                    echo ">
                                        ";
                    // line 177
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sliding_header_two", [])), "html", null, true);
                    echo "
                                    </div>
                                ";
                }
                // line 180
                echo "
                                <!-- End slide second region -->

                            </div>


                        </div>
                    </div>
                    <!-- end: Container -->
                </div>
                <div class=\"toggle-switch\"><div class=\"fa fa-gear fa-spin\"></div></div>
            </div>
        ";
            }
            // line 193
            echo "    ";
        }
        // line 194
        echo "    <!--Sliding Header Widget -->
    <!-- nav francais</div>-->
    ";
        // line 196
        if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
            // line 197
            echo "        <nav  style=\" pading: 20px;\"class=\"navbar navbar-light bg-light \">

            <a class=\"navbar-brand col-lg-4\" href=\"#\">


            </a>
            <ul  class=\"nav navbar-nav col-lg-7 \">
                <li><img src=\"http://embargo.grip.org/logo1.png\" width=\"125\" height=\"125\"  alt=\"\"></li>
                <li><a onmouseover=\"this.style.background = '#0d5178';
                        this.style.color = '#FFFFFF';\"  onmouseout=\"this.style.background = '';
                                this.style.color = '#FFFFFF';\" style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/fr\">Accueil</a></li>
                <li><a onmouseover=\"this.style.background = '#0d5178';
                        this.style.color = '#FFFFFF';\"  onmouseout=\"this.style.background = '';
                                this.style.color = '#FFFFFF';\" style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/fr/viewslist\">Recherche </a></li>
                <li><a onmouseover=\"this.style.background = '#0d5178';
                        this.style.color = '#FFFFFF';\"  onmouseout=\"this.style.background = '';
                                this.style.color = '#FFFFFF';\" style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/carteFr/\">Carte</a></li>
                
                
                
                
                <li><a onmouseover=\"this.style.background = '#0d5178';
                        this.style.color = '#FFFFFF';\"  onmouseout=\"this.style.background = '';
                                this.style.color = '#FFFFFF';\" style=\"  padding-top: 2em; color: #FFFFFF; font-size: 18px; \"href=\"http://localhost/embargo/fr/node/5\">Présentation</a></li>
                <li><a onmouseover=\"this.style.background = '#0d5178';
                        this.style.color = '#FFFFFF';\"  onmouseout=\"this.style.background = '';
                                this.style.color = '#FFFFFF';\" style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/fr/node/2\">Avertissement</a></li>



            </ul>

           

        </nav>

    ";
        } else {
            // line 234
            echo "        <!-- nav Anglais </div>-->

        <nav  style=\"min-height: 68px;\"class=\"navbar navbar-light bg-light\">

            <a class=\"navbar-brand col-lg-4\" href=\"#\">


            </a>
            <ul class=\"nav navbar-nav col-lg-8 \">
                <li><img src=\"http://embargo.grip.org/logo1.png\" width=\"125\" height=\"125\"  alt=\"\">&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li><a onmouseover=\"this.style.background = '#0d5178';
                        this.style.color = '#FFFFFF';\"  onmouseout=\"this.style.background = '';
                                this.style.color = '#FFFFFF';\" style=\"padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/en\">&nbsp;&nbsp;Home</a></li>
                <li><a onmouseover=\"this.style.background = '#0d5178';
                        this.style.color = '#FFFFFF';\"  onmouseout=\"this.style.background = '';
                                this.style.color = '#FFFFFF';\" style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/en/viewslisten\">&nbsp;&nbsp;Search</a></li>
                  <li><a onmouseover=\"this.style.background = '#0d5178';
                        this.style.color = '#FFFFFF';\"  onmouseout=\"this.style.background = '';
                                this.style.color = '#FFFFFF';\" style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/carteEn\">&nbsp;&nbsp;Map</a></li>
                <li><a onmouseover=\"this.style.background = '#0d5178';
                    
                        this.style.color = '#FFFFFF';\"  onmouseout=\"this.style.background = '';
                                this.style.color = '#FFFFFF';\"style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/en/node/5\">&nbsp;&nbsp;About</a></li>
                <li><a onmouseover=\"this.style.background = '#0d5178';
                        this.style.color = '#FFFFFF';\"  onmouseout=\"this.style.background = '';
                                this.style.color = '#FFFFFF';\"style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/en/node/2\">&nbsp;&nbsp;Disclaimer</a></li>

            </ul>

        </nav>

    ";
        }
        // line 266
        echo "    <!-- Banner -->

    ";
        // line 268
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "slideshow", []))) {
            echo "  
        <!-- <img  src=\"http://embargo.grip.org/ban1.jpg\" >-->
        <div class=\"container slideshow\">
            <div class=\"row\">
                <div class=\"col-md-12\">

                    ";
            // line 275
            echo "                </div>
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
        // line 331
        echo "

    <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Search-->
";
        // line 340
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "search", []))) {
            // line 341
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
";
        }
        // line 343
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "content_bottom", []))) {
            // line 344
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
";
        }
        // line 346
        echo "<!--End Search-->


<!--Home page banner-->
";
        // line 350
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "promo", []))) {
            // line 351
            echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
            // line 354
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "promo", [])), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 359
        echo "<!--End Home page banner-->



<!--Highlighted-->
";
        // line 364
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 365
            echo "    <div class=\"container\">
        <div class=\"row\">
            <br>
            <br>


            <div class=\"col-md-12\">
                ";
            // line 372
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 377
        echo "<!--End Highlighted-->

<!--Help-->
";
        // line 380
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 381
            echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
            // line 384
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 389
        echo "<!--End Help-->

<!-- Start Top Widget -->
";
        // line 392
        if (($context["is_front"] ?? null)) {
            echo "  
    ";
            // line 393
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_left", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_right", []))) {
                // line 394
                echo "        <div class=\"topwidget\">
            <!-- start: Container -->
            <div class=\"container\">

                <div class=\"row\">

                    <!-- Top widget left region -->

                    ";
                // line 402
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_left", [])) {
                    // line 403
                    echo "                        <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
                            ";
                    // line 404
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_left", [])), "html", null, true);
                    echo "
                        </div>
                    ";
                }
                // line 407
                echo "
                    <!-- End top widget left region -->\t\t  
                    <!-- Top widget middle region -->

                    ";
                // line 411
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])) {
                    // line 412
                    echo "                        <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
                            ";
                    // line 413
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])), "html", null, true);
                    echo "
                        </div>
                    ";
                }
                // line 416
                echo "
                    <!-- End top widget middle region -->
                    <!-- Top widget right region -->

                    ";
                // line 420
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_right", [])) {
                    // line 421
                    echo "                        <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
                            ";
                    // line 422
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_right", [])), "html", null, true);
                    echo "
                        </div>
                    ";
                }
                // line 425
                echo "
                    <!-- End top widget right region -->
                </div>
            </div>
        </div>
    ";
            }
        }
        // line 432
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 436
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 437
            echo "    <div id=\"page-title\">
        <div id=\"page-title-inner\">
            <!-- start: Container -->
            <div class=\"container-fluid\">
                ";
            // line 441
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 446
        echo "<!-- End Page Title -->


<!-- layout -->
<div id=\"wrapper\">
    <!-- start: Container -->
    <div class=\"container-fluid\">

        <!--Start Content Top-->
        ";
        // line 455
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 456
            echo "            <div class=\"content-top\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
            // line 459
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        // line 464
        echo "        <!--End Content Top-->

        <!--start:Breadcrumbs -->
        ";
        // line 467
        if ( !($context["is_front"] ?? null)) {
            // line 468
            echo "            <div class=\"row\">
                <div class=\"col-md-12\">";
            // line 469
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        // line 472
        echo "        <!--End Breadcrumbs-->

        <div class=\"row layout\">
          
            <!--- Start Left Sidebar -->
            ";
        // line 477
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 478
            echo "                <div class = \"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " sidebar-first\">
                    ";
            // line 479
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 482
        echo "            <!---End Left Sidebar -->
            ";
        // line 483
        if (($context["is_front"] ?? null)) {
            // line 484
            echo "                ";
            if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                // line 485
                echo "
                    <h1 class=\"text-center titrehome\">Les embargos sur les armes</h1>
                    
                ";
            } else {
                // line 489
                echo "                     
                    <h1 class=\"text-center titrehome\">The arms embargoes</h1>

                ";
            }
            // line 492
            echo "  
            ";
        }
        // line 493
        echo "  
            <!--- Start content -->

            ";
        // line 496
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 497
            echo "                
                <div class=\"";
            // line 498
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo " content-layout\">
                   
                    ";
            // line 500
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
                    
                    ";
            // line 502
            if (($context["is_front"] ?? null)) {
                // line 503
                echo "                     <div class=\"col-lg-12\">
                 <div  style=\"text-align:center\" >
                ";
                // line 505
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 506
                    echo "
                     <i >

                          <i class=\"fa fa-calendar\" style=\"font-size:18px; \"> </i> Dernière mise à jour: ";
                    // line 509
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "published_at", []), "value", [])), "d-m-Y"), "html", null, true);
                    echo "</i>
                    
                  
                ";
                } else {
                    // line 513
                    echo "                      <i >
                           
                          <i class=\"fa fa-calendar\"style=\"font-size:18px; \" ></i> Last update: ";
                    // line 515
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "published_at", []), "value", [])), "d-m-Y"), "html", null, true);
                    echo "</i>
                    
                 </div>
                 </div>
                ";
                }
                // line 519
                echo "  
            ";
            }
            // line 520
            echo "  
                   
                    ";
            // line 522
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
                // line 536
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 537
                    echo "
                                    <p class=\"text-justify\">
                                        Cette base de données fournit un aperçu le plus actuel possible des régimes d’embargos sur les armes. 
                                    </p>
                                ";
                } else {
                    // line 542
                    echo "                                    <p class=\"text-justify\">
                                        This database aims to give an updated snapshot of the arms embargoes’ regimes. 

                                    </p>
                                ";
                }
                // line 547
                echo "
                            </div>
                            <div  style=\"text-align:center\"  class=\"col-md-3\">
                                <span class=\" fa-stack fa-5x has-badge\" data-count=\"3\">
                                    <i class=\" fa fa-circle fa-stack-2x\"></i>
                                    <i  class=\"p3 fa fa-book fa-stack-1x fa-inverse\" data-count=\"5\"></i>
                                </span>
                                ";
                // line 554
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 555
                    echo "
                                    <p class=\"text-justify\">
                                        L’information contenue dans cette base de données est régulièrement mise à jour, enrichie et vérifiée par le GRIP. 
                                    </p>
                                ";
                } else {
                    // line 560
                    echo "                                    <p class=\"text-justify\">
                                        The information of this database is regularly updated, checked and supplemented.  
                                    </p>
                                ";
                }
                // line 564
                echo "                            </div>

                            <div   style=\"text-align:center;\" class=\"col-md-4\">

                                <span class=\"p1 fa-stack fa-5x has-badge\" data-count=\"3\">
                                    <i class=\"p2 fa fa-circle fa-stack-2x\"></i>
                                    <i  class=\"p3 fa fa-institution fa-stack-1x fa-inverse\" data-count=\"5\"></i>
                                </span>
                                ";
                // line 572
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 573
                    echo "                                    <p class=\"text-justify\">

                                        Les organisations ayant mis en œuvre des embargos sur les armes depuis 2000 sont : la Communauté Économique des États d’Afrique de l’Ouest (CEDEAO), la Ligue des États Arabes (LEA), l’Organisation pour la Sécurité et la Coopération en Europe (OSCE), l’Union européenne (UE) et les Nations unies. 
                                    <p>
                                    ";
                } else {
                    // line 577
                    echo "     
                                    <p class=\"text-justify\">
                                        Organisations which have implemented arms embargoes since 2000 are : The African Union (AU), The Economic Community of African States (ECOWAS), the European Union (EU), the League of Arab States (LAS), the Organisation for Security and Cooperation in Europe (OSCE) and the United Nations (UN).  
                                        <br>
                                    </p>
                                ";
                }
                // line 582
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
           
                     
                        ";
                // line 674
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 675
                    echo "
                            <div class=\"row\">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class=\"col-lg-12\">
                                    <br>
                                    <br>

                                    <h1 class=\"soustitrehome\">Les embargos sur les armes en quelques chiffres</h1>
                                    <br>
                                    <br>
                                  <!--  <div class=\"col-lg-12\">
                                        <div  class=\" col-lg-2\">
                                        </div>
                                        <div style=\"border: 2px solid #cccccc; background: #efeff5\" class=\" col-md-2\">

                                            <div class=\"tout\" >


                                                <div class=\"iconChiffre\">
                                                    <div class=\"col-lg-12\">  
                                                        <div class=\"col-lg-6\">  
                                                            <br>

                                                            <i class=\"fa fa-flag fa-3x \" style=\"color:#246F8C\" width=\"130\" height=\"130\" aria-hidden=\"true\"></i>


                                                        </div>
                                                        <div class=\"col-lg-6\">

                                                            <div class=\"chiffres\">
                                                                <div  style=\"font-size:24px; color:#246F8C \"><h1><i>22 </i></h1></div>
                                                                <br>


                                                            </div>



                                                        </div>

                                                        <div  style=\"font-size:15px;\" class=\"title\"><i>Nombre d’États ou territoires <br> sous embargo</i>  </div><br>
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
                                                            <i class=\"fa fa-users fa-3x \" style=\"color:#246F8C\" width=\"125\" height=\"130\" aria-hidden=\"true\"></i>

                                                        </div>
                                                        <div class=\"col-lg-6\"> 
                                                            <div class=\"chiffres\">
                                                                <div style=\"font-size:24px; color:#246F8C\"><h1><i>4</i></h1></div><br>


                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div  style=\"font-size:15px;\" class=\"title\"><i>Nombre d’entités non-étatiques sous embargo</i>  </div></br>
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

                                                            <img  class=\"fa-5x \" src=\"http://embargo.grip.org/bras.png\" width=\"80\" height=\"80\" >
                                                            <br>
                                                        </div>
                                                        <div class=\"col-lg-6\"> 
                                                            <div class=\"chiffres\">
                                                                <div  style=\"font-size:24px; color:#246F8C \"><h1><i>4&nbsp;&nbsp;<br></i></h1></div>


                                                                <br>
                                                            </div>
                                                        </div>
                                                        <div  style=\"font-size:15px;\" class=\"title\"><i>&nbsp;&nbsp;Nombre d’organisations multilatérales appliquant des embargos</i>  </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class=\" col-md-2\">

                                        </div>





                                    </div>-->

                                    <!--div class=\"col-lg-4\">
                                    <img src=\"http://embargo.grip.org/pays.jpg\" >
                                </div>--->
                                </div>

                            </div>

                            <!--Annglais--->

                        ";
                } else {
                    // line 808
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
                                   <!-- <div class=\"col-lg-12\">
                                        <div  class=\" col-lg-2\">
                                        </div>
                                        <div style=\"border: 2px solid #cccccc; background: #efeff5\" class=\" col-md-2\">

                                            <div class=\"tout\" >


                                                <div class=\"iconChiffre\">
                                                    <div class=\"col-lg-12\">  
                                                        <div class=\"col-lg-6\">  
                                                            <br>
                                                            <i class=\"fa fa-flag fa-3x \" style=\"color:#246F8C\" width=\"125\" height=\"130\" aria-hidden=\"true\"></i>  

                                                        </div>
                                                        <div class=\"col-lg-6\"> 
                                                            <div class=\"chiffres\">
                                                                <div  style=\"font-size:24px; color:#246F8C \"><h1><i>22</i></h1></div>

                                                            </div>
                                                            <br>
                                                        </div>
                                                        <div  style=\"font-size:15px;\" class=\"title\"><i>Number of States or territories under embargo</i>  </div><br>
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
                                                            <i class=\"fa fa-users fa-3x \" style=\"color:#246F8C\" width=\"125\" height=\"130\" aria-hidden=\"true\"></i>

                                                        </div>
                                                        <div class=\"col-lg-6\"> 
                                                            <div class=\"chiffres\">
                                                                <div  style=\"font-size:24px; color:#246F8C \"><h1><i>4</i></h1></div>


                                                            </div>
                                                            <br>
                                                        </div>
                                                        <div  style=\"font-size:15px;\" class=\"title\"><i>Number of non-state entities under embargo </i>  </div><br>
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


                                                            <img  class=\"fa-5x \" src=\"http://embargo.grip.org/bras.png\" width=\"80\" height=\"80\" >

                                                        </div>
                                                        <div class=\"col-lg-6\"> 
                                                            <div class=\"chiffres\">
                                                                <div  style=\"font-size:24px; color:#246F8C \"><h1><i>4&nbsp;&nbsp;</i></h1></div>



                                                                <br>
                                                            </div>
                                                        </div>
                                                        <div  style=\"font-size:15px;\" class=\"title\"><i>Number of multilateral organizations implementing embargoes</i></div>
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
                // line 933
                echo "                        
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
            // line 973
            echo "        ";
        }
        // line 974
        echo "        <!---End content -->
        
         ";
        // line 976
        if ((($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr") &&  !($context["is_front"] ?? null))) {
            // line 977
            echo "           
        <div style=\"background-color:#efeff1;\" class=\"panel-body\">
        <div class=\"col-lg-12\">
            
         <div class=\"col-lg-4\">
                
                
            </div>
        
            <div class=\"col-lg-6\">
                
                <p> 
                    
                     
                    <p><img src=\"https://embargo.grip.org/licence.png\"> Cette œuvre est mise à disposition selon les 
                        termes de la Licence Creative Commons :  <br> Attribution - Pas d’Utilisation Commerciale –  
    Partage dans les Mêmes Conditions 4.0 International
                   
                
                </p>

            </div>  

        </div>


    </div>
         ";
        }
        // line 1004
        echo "   
          ";
        // line 1005
        if ((($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "en") &&  !($context["is_front"] ?? null))) {
            // line 1006
            echo "        
    <div style=\"background-color:#efeff1;\" class=\"panel-body\">
        <div class=\"col-lg-12\">
            
         <div class=\"col-lg-4\">
                
                
            </div>
        
            <div class=\"col-lg-6\">
                
                <p> 
                    
                     
                    <p><img src=\"https://embargo.grip.org/licence.png\"> This work is made available according to the 
                        terms of the Creative Commons License:  <br> Allocation - No Commercial Use -  
    Sharing under the same Conditions 4.0 International:
                   
                
                </p>

            </div>  

        </div>


    </div>
     ";
        }
        // line 1034
        echo "        <!--- Start Right Sidebar -->
        ";
        // line 1035
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 1036
            echo "            <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo " sidebar-second\">
                ";
            // line 1037
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>

        ";
        }
        // line 1041
        echo "        <!---End Right Sidebar -->

    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 1047
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 1048
            echo "
        <div class=\"content-bottom\">
            <div class=\"row\">
                <div class=\"col-md-12\">


                    ";
            // line 1054
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        // line 1059
        echo "    <!--End Content Bottom-->
</div>
</div>
<!-- End layout -->
 
<!-- Start Footer -->
";
        // line 1065
        if (((($this->getAttribute(($context["page"] ?? null), "footer_top_one", []) || $this->getAttribute(($context["page"] ?? null), "footer_top_two", [])) || $this->getAttribute(($context["page"] ?? null), "footer_top_three", [])) || $this->getAttribute(($context["page"] ?? null), "footer_top_four", []))) {
            // line 1066
            echo "    <div class=\"footer-widgets\">
        <!-- Start Container -->
        <div class=\"container\">

            <div class=\"row\">

                <!-- Start Footer Top One Region -->

                ";
            // line 1074
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_one", [])) {
                // line 1075
                echo "                    <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
                        ";
                // line 1076
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_one", [])), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 1079
            echo "
                <!-- End Footer Top One Region -->

                <!-- Start Footer Top Two Region -->
                ";
            // line 1083
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_two", [])) {
                // line 1084
                echo "                    <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
                        ";
                // line 1085
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_two", [])), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 1088
            echo "
                <!-- End Footer Top Two Region -->

                <!-- Start Footer Top Three Region -->

                ";
            // line 1093
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_three", [])) {
                // line 1094
                echo "                    <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
                        ";
                // line 1095
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_three", [])), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 1098
            echo "
                <!-- End Footer Top Three Region -->

                <!-- Start Footer Top Four Region -->

                ";
            // line 1103
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_four", [])) {
                // line 1104
                echo "                    <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
                        ";
                // line 1105
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_four", [])), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 1108
            echo "
                <!-- End Footer Top Four Region -->

            </div>
        </div>
    </div>
";
        }
        // line 1115
        echo "<!-- Footer Region-->
";
        // line 1116
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 1117
            echo "    <div class=\"footer-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">

                    ";
            // line 1122
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 1128
        echo "<!-- End Footer Region-->
<!--End Footer -->
 
<!-- Start Footer Ribbon -->
";
        // line 1132
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
            // line 1133
            echo "

    ";
            // line 1257
            echo "    <!--  <div class=\"footer-ribbon\">
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
            // line 1311
            if (($context["show_social_icon"] ?? null)) {
                echo "#

    ";
            }
            // line 1314
            echo "
        <div class=\"col-lg-5\"></div> 
    </div>
  </div>

</div> -->







";
        }
        // line 1328
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
        // line 1360
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
            // line 1377
            echo "                    <br>

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
        // line 1389
        echo "            </div>

            <div style=\"color: #ffffff;\" class=\"col-lg-3\">
                ";
        // line 1392
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
            // line 1422
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
        // line 1450
        echo "            </div>
            <br>
            <p style=\"text-align: left; color:#ffffff;\"> <i>Avec le soutien de </i> </p>
            <div style=\"color: #ffffff;\" class=\"col-lg-2\">
                <br>
                <!--<div id=\"communautefr\"></div> -->
                <img   src=\"http://embargo.grip.org/unscar_logo.png\" >
            </div>



            <div style=\"color: #ffffff;\" class=\"col-lg-2\">

                <img width=\"175\" height=\"125\" src=\"http://embargo.grip.org/soutien_v_fr.png\" >
            </div> 

        </div>
    </div>

    <div style=\"background-color:#757282;\" class=\"panel-body\">
        <div class=\"col-lg-12\">
            <div  style=\"color: #FFFFFF;\"class=\"col-lg-4\">
                <i> 467 Chaussée de Louvain B-1030 Bruxelles</i>



            </div>

            <div  style=\"color: #FFFFFF;\"class=\"col-lg-5\"> 
                <i><p class=\"copyright\">© Grip ";
        // line 1479
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Groupe de recherche et d'information sur la paix et la sécurité </p></i>

            </div>
            <!--
            <div class=\" col-lg-2 social-media\">
     

     
         <a href=\"https://www.facebook.com/GRIP.1979\"class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
      
         <a href=\"https://twitter.com/grip_org\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
     
         <a href=\"https://www.linkedin.com/company/grip\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
   
    
          </div>-->


            <div style=\"color: #ffffff;\" class=\"col-lg-2\"><i> +32.2.241.84.20</i> </div> 

        </div>


    </div>  
       
    <br>
    <br>
    <br> 
    <div class=\"container\">

        <div class=\"row\">
            <hr class=\"style-mint\">
            <div id=\"toTop\" class=\"col-md-12\">
                <a class=\"scrollUp\"><i class=\"fa fa-angle-up\"></i></a>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-12 \">
                ";
        // line 1518
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
        echo "

            </div>






            <!--
        <p class=\"copyright\">© Grip ";
        // line 1528
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
        // line 1544
        if (($context["show_credit_link"] ?? null)) {
            // line 1545
            echo "                <p class=\"credit\">Theme for <a href=\"https://www.drupal.org/8\" target=\"_blank\">Drupal 8</a></p>
            ";
        }
        // line 1547
        echo "            </div-->
        </div>
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
        return array (  1770 => 1547,  1766 => 1545,  1764 => 1544,  1745 => 1528,  1732 => 1518,  1690 => 1479,  1659 => 1450,  1629 => 1422,  1596 => 1392,  1591 => 1389,  1577 => 1377,  1557 => 1360,  1523 => 1328,  1507 => 1314,  1501 => 1311,  1445 => 1257,  1441 => 1133,  1439 => 1132,  1433 => 1128,  1424 => 1122,  1417 => 1117,  1415 => 1116,  1412 => 1115,  1403 => 1108,  1397 => 1105,  1392 => 1104,  1390 => 1103,  1383 => 1098,  1377 => 1095,  1372 => 1094,  1370 => 1093,  1363 => 1088,  1357 => 1085,  1352 => 1084,  1350 => 1083,  1344 => 1079,  1338 => 1076,  1333 => 1075,  1331 => 1074,  1321 => 1066,  1319 => 1065,  1311 => 1059,  1303 => 1054,  1295 => 1048,  1293 => 1047,  1285 => 1041,  1278 => 1037,  1273 => 1036,  1271 => 1035,  1268 => 1034,  1238 => 1006,  1236 => 1005,  1233 => 1004,  1203 => 977,  1201 => 976,  1197 => 974,  1194 => 973,  1152 => 933,  1025 => 808,  890 => 675,  888 => 674,  794 => 582,  786 => 577,  779 => 573,  777 => 572,  767 => 564,  761 => 560,  754 => 555,  752 => 554,  743 => 547,  736 => 542,  729 => 537,  727 => 536,  710 => 522,  706 => 520,  702 => 519,  694 => 515,  690 => 513,  683 => 509,  678 => 506,  676 => 505,  672 => 503,  670 => 502,  665 => 500,  660 => 498,  657 => 497,  655 => 496,  650 => 493,  646 => 492,  640 => 489,  634 => 485,  631 => 484,  629 => 483,  626 => 482,  620 => 479,  615 => 478,  613 => 477,  606 => 472,  600 => 469,  597 => 468,  595 => 467,  590 => 464,  582 => 459,  577 => 456,  575 => 455,  564 => 446,  556 => 441,  550 => 437,  548 => 436,  542 => 432,  533 => 425,  527 => 422,  522 => 421,  520 => 420,  514 => 416,  508 => 413,  503 => 412,  501 => 411,  495 => 407,  489 => 404,  484 => 403,  482 => 402,  472 => 394,  470 => 393,  466 => 392,  461 => 389,  453 => 384,  448 => 381,  446 => 380,  441 => 377,  433 => 372,  424 => 365,  422 => 364,  415 => 359,  407 => 354,  402 => 351,  400 => 350,  394 => 346,  388 => 344,  386 => 343,  380 => 341,  378 => 340,  367 => 331,  309 => 275,  300 => 268,  296 => 266,  262 => 234,  223 => 197,  221 => 196,  217 => 194,  214 => 193,  199 => 180,  193 => 177,  188 => 176,  186 => 175,  180 => 171,  174 => 168,  169 => 167,  167 => 166,  156 => 157,  153 => 156,  151 => 155,  148 => 154,  107 => 115,  65 => 75,  63 => 74,  55 => 68,);
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
