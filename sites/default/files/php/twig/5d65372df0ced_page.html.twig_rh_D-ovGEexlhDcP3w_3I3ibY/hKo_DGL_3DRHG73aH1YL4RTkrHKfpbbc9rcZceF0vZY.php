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
class __TwigTemplate_ea9e916b94ec3ff8f13cb13e28c13fde827a81d313498716f5007b08c0e4b4f8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 74];
        $filters = ["date" => 1296];
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
                                this.style.color = '#FFFFFF';\" style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/fr/viewslist\">Recherche</a></li>
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
            // line 227
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
                                this.style.color = '#FFFFFF';\"style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/en/node/5\">&nbsp;&nbsp;About</a></li>
                <li><a onmouseover=\"this.style.background = '#0d5178';
                        this.style.color = '#FFFFFF';\"  onmouseout=\"this.style.background = '';
                                this.style.color = '#FFFFFF';\"style=\" padding-top: 2em; color: #FFFFFF; font-size: 18px; \" href=\"http://localhost/embargo/en/node/2\">&nbsp;&nbsp;Disclaimer</a></li>

            </ul>

        </nav>

    ";
        }
        // line 255
        echo "    <!-- Banner -->

    ";
        // line 257
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "slideshow", []))) {
            echo "  
        <!-- <img  src=\"http://embargo.grip.org/ban1.jpg\" >-->
        <div class=\"container slideshow\">
            <div class=\"row\">
                <div class=\"col-md-12\">

                    ";
            // line 264
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
        // line 320
        echo "

    <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Search-->
";
        // line 329
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "search", []))) {
            // line 330
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
";
        }
        // line 332
        echo "<!--End Search-->


<!--Home page banner-->
";
        // line 336
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "promo", []))) {
            // line 337
            echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
            // line 340
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "promo", [])), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 345
        echo "<!--End Home page banner-->



<!--Highlighted-->
";
        // line 350
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 351
            echo "    <div class=\"container\">
        <div class=\"row\">
            <br>
            <br>


            <div class=\"col-md-12\">
                ";
            // line 358
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 363
        echo "<!--End Highlighted-->

<!--Help-->
";
        // line 366
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 367
            echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
            // line 370
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 375
        echo "<!--End Help-->

<!-- Start Top Widget -->
";
        // line 378
        if (($context["is_front"] ?? null)) {
            echo "  
    ";
            // line 379
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_left", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_right", []))) {
                // line 380
                echo "        <div class=\"topwidget\">
            <!-- start: Container -->
            <div class=\"container\">

                <div class=\"row\">

                    <!-- Top widget left region -->

                    ";
                // line 388
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_left", [])) {
                    // line 389
                    echo "                        <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
                            ";
                    // line 390
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_left", [])), "html", null, true);
                    echo "
                        </div>
                    ";
                }
                // line 393
                echo "
                    <!-- End top widget left region -->\t\t  
                    <!-- Top widget middle region -->

                    ";
                // line 397
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])) {
                    // line 398
                    echo "                        <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
                            ";
                    // line 399
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])), "html", null, true);
                    echo "
                        </div>
                    ";
                }
                // line 402
                echo "
                    <!-- End top widget middle region -->
                    <!-- Top widget right region -->

                    ";
                // line 406
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_right", [])) {
                    // line 407
                    echo "                        <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
                            ";
                    // line 408
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_right", [])), "html", null, true);
                    echo "
                        </div>
                    ";
                }
                // line 411
                echo "
                    <!-- End top widget right region -->
                </div>
            </div>
        </div>
    ";
            }
        }
        // line 418
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 422
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 423
            echo "    <div id=\"page-title\">
        <div id=\"page-title-inner\">
            <!-- start: Container -->
            <div class=\"container-fluid\">
                ";
            // line 427
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 432
        echo "<!-- End Page Title -->


<!-- layout -->
<div id=\"wrapper\">
    <!-- start: Container -->
    <div class=\"container-fluid\">

        <!--Start Content Top-->
        ";
        // line 441
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 442
            echo "            <div class=\"content-top\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
            // line 445
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        // line 450
        echo "        <!--End Content Top-->

        <!--start:Breadcrumbs -->
        ";
        // line 453
        if ( !($context["is_front"] ?? null)) {
            // line 454
            echo "            <div class=\"row\">
                <div class=\"col-md-12\">";
            // line 455
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        // line 458
        echo "        <!--End Breadcrumbs-->

        <div class=\"row layout\">
            <!--- Start Left Sidebar -->
            ";
        // line 462
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 463
            echo "                <div class = \"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " sidebar-first\">
                    ";
            // line 464
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 467
        echo "            <!---End Left Sidebar -->
            ";
        // line 468
        if (($context["is_front"] ?? null)) {
            // line 469
            echo "                ";
            if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                // line 470
                echo "                    <h1 class=\"text-center titrehome\">Les embargos sur les armes</h1>
                ";
            } else {
                // line 472
                echo "                    <h1 class=\"text-center titrehome\">The arms embargoes</h1>

                ";
            }
            // line 474
            echo "  
            ";
        }
        // line 475
        echo "  
            <!--- Start content -->

            ";
        // line 478
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 479
            echo "                <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo " content-layout\">
                    ";
            // line 480
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
                    ";
            // line 481
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
                // line 495
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 496
                    echo "
                                    <p class=\"text-justify\">
                                        Cette base de données fournit un aperçu le plus actuel possible des régimes d’embargos sur les armes. 
                                    </p>
                                ";
                } else {
                    // line 501
                    echo "                                    <p class=\"text-justify\">
                                        This database aims to give an updated snapshot of the arms embargoes’ regimes. 

                                    </p>
                                ";
                }
                // line 506
                echo "
                            </div>
                            <div  style=\"text-align:center\"  class=\"col-md-3\">
                                <span class=\" fa-stack fa-5x has-badge\" data-count=\"3\">
                                    <i class=\" fa fa-circle fa-stack-2x\"></i>
                                    <i  class=\"p3 fa fa-book fa-stack-1x fa-inverse\" data-count=\"5\"></i>
                                </span>
                                ";
                // line 513
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 514
                    echo "
                                    <p class=\"text-justify\">
                                        L’information contenue dans cette base de données est régulièrement mise à jour, enrichie et vérifiée par le GRIP. 
                                    </p>
                                ";
                } else {
                    // line 519
                    echo "                                    <p class=\"text-justify\">
                                        The information of this database is regularly updated, checked and supplemented.  
                                    </p>
                                ";
                }
                // line 523
                echo "                            </div>

                            <div   style=\"text-align:center;\" class=\"col-md-4\">

                                <span class=\"p1 fa-stack fa-5x has-badge\" data-count=\"3\">
                                    <i class=\"p2 fa fa-circle fa-stack-2x\"></i>
                                    <i  class=\"p3 fa fa-institution fa-stack-1x fa-inverse\" data-count=\"5\"></i>
                                </span>
                                ";
                // line 531
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 532
                    echo "                                    <p class=\"text-justify\">

                                        Les organisations ayant mis en œuvre des embargos sur les armes depuis 2000 sont : la Communauté Économique des États d’Afrique de l’Ouest (CEDEAO), la Ligue des États Arabes (LEA), l’Organisation pour la Sécurité et la Coopération en Europe (OSCE), l’Union européenne (UE) et les Nations unies. 
                                    <p>
                                    ";
                } else {
                    // line 536
                    echo "     
                                    <p class=\"text-justify\">
                                        Organisations which have implemented arms embargoes since 2000 are : The African Union (AU), The Economic Community of African States (ECOWAS), the European Union (EU), the League of Arab States (LAS), the Organisation for Security and Cooperation in Europe (OSCE) and the United Nations (UN).  
                                        <br>
                                    </p>
                                ";
                }
                // line 541
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
                // line 633
                if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
                    // line 634
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

                                                            <i class=\"fa fa-flag fa-3x \" style=\"color:#246F8C\" width=\"130\" height=\"130\" aria-hidden=\"true\"></i>


                                                        </div>
                                                        <div class=\"col-lg-6\">

                                                            <div class=\"chiffres\">
                                                                <div  style=\"font-size:24px; color:#246F8C \"><h1><i>22</i></h1></div>
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
                                                                <div style=\"font-size:24px; color:#246F8C\"><h1><i>5</i></h1></div><br>


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
                                                                <div  style=\"font-size:24px; color:#246F8C \"><h1><i>6&nbsp;&nbsp;<br></i></h1></div>


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





                                    </div>

                                    <!--div class=\"col-lg-4\">
                                    <img src=\"http://embargo.grip.org/pays.jpg\" >
                                </div>--->
                                </div>

                            </div>

                            <!--Annglais--->

                        ";
                } else {
                    // line 767
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
                                                                <div  style=\"font-size:24px; color:#246F8C \"><h1><i>5</i></h1></div>


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
                                                                <div  style=\"font-size:24px; color:#246F8C \"><h1><i>6&nbsp;&nbsp;</i></h1></div>



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
                // line 892
                echo "                    </div>

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
            // line 931
            echo "        ";
        }
        // line 932
        echo "        <!---End content -->

        <!--- Start Right Sidebar -->
        ";
        // line 935
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 936
            echo "            <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo " sidebar-second\">
                ";
            // line 937
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>

        ";
        }
        // line 941
        echo "        <!---End Right Sidebar -->

    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 947
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 948
            echo "
        <div class=\"content-bottom\">
            <div class=\"row\">
                <div class=\"col-md-12\">


                    ";
            // line 954
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        // line 959
        echo "    <!--End Content Bottom-->
</div>
</div>
<!-- End layout -->

<!-- Start Footer -->
";
        // line 965
        if (((($this->getAttribute(($context["page"] ?? null), "footer_top_one", []) || $this->getAttribute(($context["page"] ?? null), "footer_top_two", [])) || $this->getAttribute(($context["page"] ?? null), "footer_top_three", [])) || $this->getAttribute(($context["page"] ?? null), "footer_top_four", []))) {
            // line 966
            echo "    <div class=\"footer-widgets\">
        <!-- Start Container -->
        <div class=\"container\">

            <div class=\"row\">

                <!-- Start Footer Top One Region -->

                ";
            // line 974
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_one", [])) {
                // line 975
                echo "                    <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
                        ";
                // line 976
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_one", [])), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 979
            echo "
                <!-- End Footer Top One Region -->

                <!-- Start Footer Top Two Region -->
                ";
            // line 983
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_two", [])) {
                // line 984
                echo "                    <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
                        ";
                // line 985
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_two", [])), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 988
            echo "
                <!-- End Footer Top Two Region -->

                <!-- Start Footer Top Three Region -->

                ";
            // line 993
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_three", [])) {
                // line 994
                echo "                    <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
                        ";
                // line 995
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_three", [])), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 998
            echo "
                <!-- End Footer Top Three Region -->

                <!-- Start Footer Top Four Region -->

                ";
            // line 1003
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_four", [])) {
                // line 1004
                echo "                    <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
                        ";
                // line 1005
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_four", [])), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 1008
            echo "
                <!-- End Footer Top Four Region -->

            </div>
        </div>
    </div>
";
        }
        // line 1015
        echo "<!-- Footer Region-->
";
        // line 1016
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 1017
            echo "    <div class=\"footer-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">

                    ";
            // line 1022
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 1028
        echo "<!-- End Footer Region-->
<!--End Footer -->

<!-- Start Footer Ribbon -->
";
        // line 1032
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
            // line 1033
            echo "

    ";
            // line 1157
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
            // line 1211
            if (($context["show_social_icon"] ?? null)) {
                echo "#

    ";
            }
            // line 1214
            echo "
        <div class=\"col-lg-5\"></div> 
    </div>
  </div>

</div> -->







";
        }
        // line 1228
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
        // line 1256
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
            // line 1273
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
        // line 1285
        echo "            </div>

            <div style=\"color: #ffffff;\" class=\"col-lg-3\">
                ";
        // line 1288
        if (($this->getAttribute(($context["language"] ?? null), "getId", [], "method") == "fr")) {
            echo " 
                    <br>

                    <p style=\"text-align: left;\" ><i>Contact</i></p>

                    <ul style=\"text-align: left;\" >
                        <i><i class=\"fa fa-globe\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/\"> Visitez le site du GRIP</a></i></br>
                        <i><i class=\"fa fa-envelope\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/fr/contact/contact\" > Contactez le Grip</a></i></br>
                        <i><i class=\"fa fa-calendar\"style=\"font-size:24px\" > </i> La dernière mise à jour: ";
            // line 1296
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "published_at", []), "value", [])), "d-m-Y"), "html", null, true);
            echo "</i>
                     </ul>
                    <div class=\"social-media\">



                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a style=\"font-size: 16px;\" href=\"https://www.facebook.com/GRIP.1979\"class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>

                        <a href=\"https://twitter.com/grip_org\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>

                        <a href=\"https://www.linkedin.com/company/grip\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>


                    </div>




                    </p>


                ";
        } else {
            // line 1318
            echo "

                    <br>

                    <p style=\"text-align: left;\" ><i>Contact</i></p>
                    <p>

                    <ul style=\"text-align: left;\" >
                        <i><i class=\"fa fa-globe\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/\"> Visit GRIP website</a></i></br>
                        <i><i class=\"fa fa-envelope\" style=\"font-size:24px\"></i><a style=\"color: #ffffff;\" href=\"https://www.grip.org/fr/contact/contact\" > E-mail GRIP</a></i></br>
                        <i><i class=\"fa fa-calendar\"style=\"font-size:24px\" > </i> The last update:";
            // line 1328
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "published_at", []), "value", [])), "d-m-Y"), "html", null, true);
            echo "</i>
                    </ul> 

                    <div class=\"social-media\">



                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style=\"font-size: 16px;\" href=\"https://www.facebook.com/GRIP.1979\"class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>

                        <a href=\"https://twitter.com/grip_org\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>

                        <a href=\"https://www.linkedin.com/company/grip\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>


                    </div>
                    </p>

                ";
        }
        // line 1346
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
        // line 1375
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
        // line 1413
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
        echo "

            </div>






            <!--
        <p class=\"copyright\">© Grip ";
        // line 1423
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
        // line 1439
        if (($context["show_credit_link"] ?? null)) {
            // line 1440
            echo "                <p class=\"credit\">Theme for <a href=\"https://www.drupal.org/8\" target=\"_blank\">Drupal 8</a></p>
            ";
        }
        // line 1442
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
        return array (  1634 => 1442,  1630 => 1440,  1628 => 1439,  1609 => 1423,  1596 => 1413,  1555 => 1375,  1524 => 1346,  1503 => 1328,  1491 => 1318,  1466 => 1296,  1455 => 1288,  1450 => 1285,  1436 => 1273,  1416 => 1256,  1386 => 1228,  1370 => 1214,  1364 => 1211,  1308 => 1157,  1304 => 1033,  1302 => 1032,  1296 => 1028,  1287 => 1022,  1280 => 1017,  1278 => 1016,  1275 => 1015,  1266 => 1008,  1260 => 1005,  1255 => 1004,  1253 => 1003,  1246 => 998,  1240 => 995,  1235 => 994,  1233 => 993,  1226 => 988,  1220 => 985,  1215 => 984,  1213 => 983,  1207 => 979,  1201 => 976,  1196 => 975,  1194 => 974,  1184 => 966,  1182 => 965,  1174 => 959,  1166 => 954,  1158 => 948,  1156 => 947,  1148 => 941,  1141 => 937,  1136 => 936,  1134 => 935,  1129 => 932,  1126 => 931,  1085 => 892,  958 => 767,  823 => 634,  821 => 633,  727 => 541,  719 => 536,  712 => 532,  710 => 531,  700 => 523,  694 => 519,  687 => 514,  685 => 513,  676 => 506,  669 => 501,  662 => 496,  660 => 495,  643 => 481,  639 => 480,  634 => 479,  632 => 478,  627 => 475,  623 => 474,  618 => 472,  614 => 470,  611 => 469,  609 => 468,  606 => 467,  600 => 464,  595 => 463,  593 => 462,  587 => 458,  581 => 455,  578 => 454,  576 => 453,  571 => 450,  563 => 445,  558 => 442,  556 => 441,  545 => 432,  537 => 427,  531 => 423,  529 => 422,  523 => 418,  514 => 411,  508 => 408,  503 => 407,  501 => 406,  495 => 402,  489 => 399,  484 => 398,  482 => 397,  476 => 393,  470 => 390,  465 => 389,  463 => 388,  453 => 380,  451 => 379,  447 => 378,  442 => 375,  434 => 370,  429 => 367,  427 => 366,  422 => 363,  414 => 358,  405 => 351,  403 => 350,  396 => 345,  388 => 340,  383 => 337,  381 => 336,  375 => 332,  369 => 330,  367 => 329,  356 => 320,  298 => 264,  289 => 257,  285 => 255,  255 => 227,  223 => 197,  221 => 196,  217 => 194,  214 => 193,  199 => 180,  193 => 177,  188 => 176,  186 => 175,  180 => 171,  174 => 168,  169 => 167,  167 => 166,  156 => 157,  153 => 156,  151 => 155,  148 => 154,  107 => 115,  65 => 75,  63 => 74,  55 => 68,);
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
