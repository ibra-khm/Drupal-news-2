<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/news_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_8f9251dc4c706901dcd00eb300133245 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "

";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact_email", [], "any", false, false, true, 62) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu", [], "any", false, false, true, 62))) {
            // line 63
            echo "  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->

        <div class=\"col-sm-9\">
          
          <div class=\"top-blocks\">
            ";
            // line 72
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu", [], "any", false, false, true, 72)) {
                // line 73
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 75
            echo "
            ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact_email", [], "any", false, false, true, 76)) {
                // line 77
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact_email", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 79
            echo "
            <!-- Start: Social media icons -->

            ";
            // line 82
            if (($context["show_social_icon"] ?? null)) {
                // line 83
                echo "              <div class=\"social-media\">
                ";
                // line 84
                if (($context["facebook_url"] ?? null)) {
                    // line 85
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 85, $this->source), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
                ";
                }
                // line 87
                echo "                ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 88
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 88, $this->source), "html", null, true);
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
                ";
                }
                // line 90
                echo "                ";
                if (($context["twitter_url"] ?? null)) {
                    // line 91
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 91, $this->source), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
                ";
                }
                // line 93
                echo "                ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 94
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 94, $this->source), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
                ";
                }
                // line 96
                echo "                ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 97
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 97, $this->source), "html", null, true);
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
                ";
                }
                // line 99
                echo "                ";
                if (($context["rss_url"] ?? null)) {
                    // line 100
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 100, $this->source), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
                ";
                }
                // line 102
                echo "              </div>
            ";
            }
            // line 104
            echo "
            <!-- End: Social media icons -->

          </div>

        </div>

        <!-- End: Contact Phone & Email -->

        <!-- Start: Top menu -->

        ";
            // line 115
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 115)) {
                // line 116
                echo "          <div class=\"col-sm-3\">
            ";
                // line 117
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 120
            echo "
        <!-- End: Top menu -->

      </div>
    </div>
  </div>
";
        }
        // line 127
        echo "

<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->

        <div class=\"navbar-header col-md-3\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 143)) {
            // line 144
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 146
        echo "        </div>

        <!-- End: Header -->

        <!-- Start: Header Ads -->

        ";
        // line 152
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_ads", [], "any", false, false, true, 152)) {
            // line 153
            echo "          <div class=\"col-md-9\">
            ";
            // line 154
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_ads", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 157
        echo "
        <!-- End: Header Ads -->

        </div>
      </div>
    </nav>
</header>


<!-- End: Main menu -->

";
        // line 168
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 168)) {
            // line 169
            echo "  <div class=\"main-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 173
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 179
        echo "
<!-- End: Main menu -->


<!-- Start: Top widget -->

";
        // line 185
        if ((($context["is_front"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 185) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 185)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 185)))) {
            // line 186
            echo "  <div class=\"parallax-widget- zero\" id=\"about\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">

        ";
            // line 190
            if ((($context["is_front"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 190) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 190)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 190)))) {
                // line 191
                echo "          <div class=\"row clearfix topwidget\">

            <!-- Start: Top widget first -->          
            ";
                // line 194
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 194)) {
                    // line 195
                    echo "              <div class = ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 195, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
                    echo "</div>
            ";
                }
                // line 196
                echo "          
            <!-- End: Top widget first --> 

            <!-- Start: Top widget second -->          
            ";
                // line 200
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 200)) {
                    // line 201
                    echo "              <div class = ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 201, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
                    echo "</div>
            ";
                }
                // line 202
                echo "          
            <!-- End: Top widget second --> 
            
            <!-- Start: Top widget third -->         
            ";
                // line 206
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 206)) {
                    // line 207
                    echo "              <div class = ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_third_class"] ?? null), 207, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
                    echo "</div>
            ";
                }
                // line 208
                echo "          
            <!-- End: Top widget third -->

          </div>
        ";
            }
            // line 213
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 218
        echo "
<!--End: Top widget -->


<!-- Start: Main content -->
<div class=\"parallax-widget- one\">
  <div class=\"parallax-region- wow- bounceInDown\">
    
    <!--Start: Highlighted -->

    ";
        // line 228
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 228)) {
            // line 229
            echo "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 232
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 232), 232, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 237
        echo "
    <!--End: Highlighted -->

    <!--Start: Title -->

    ";
        // line 242
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 242) &&  !($context["is_front"] ?? null))) {
            // line 243
            echo "      <div id=\"page-title\">
        <div id=\"page-title-inner\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
            // line 248
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 248), 248, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 255
        echo "
    <!--End: Title -->

    <div class=\"container\">
      <div class=\"parallax-region\">

        <!--Start: Breadcrumb -->

        ";
        // line 263
        if ( !($context["is_front"] ?? null)) {
            // line 264
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">";
            // line 265
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 265), 265, $this->source), "html", null, true);
            echo "</div>
          </div>
        ";
        }
        // line 268
        echo "
        <!--End: Breadcrumb -->

        <div class=\"row layout\">

          <!--Start: Sidebar -->

          ";
        // line 275
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 275)) {
            // line 276
            echo "            <div class=\"sidebar\">
              <div class=";
            // line 277
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 277, $this->source), "html", null, true);
            echo "> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 277), 277, $this->source), "html", null, true);
            echo " </div>
            </div>
          ";
        }
        // line 280
        echo "
          <!--End: Sidebar -->

          <!--End: Content -->

          ";
        // line 285
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 285)) {
            // line 286
            echo "
            <div class=\"content_layout\">

              <div class=";
            // line 289
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 289, $this->source), "html", null, true);
            echo "> 

                <!-- Start: Slider -->

                ";
            // line 293
            if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
                // line 294
                echo "                  <div class=\"flexslider wow- bounceInUp\">
                    <ul class=\"slides\">
                      ";
                // line 296
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                    // line 297
                    echo "                        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 297, $this->source));
                    echo "
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 299
                echo "                    </ul>
                  </div>
                ";
            }
            // line 302
            echo "
                <!-- End: Slider -->

                <!-- Start: Home page message -->

                ";
            // line 307
            if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepagemessage", [], "any", false, false, true, 307))) {
                // line 308
                echo "                  ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepagemessage", [], "any", false, false, true, 308), 308, $this->source), "html", null, true);
                echo "
                ";
            }
            // line 310
            echo "
                <!--End: Home page message -->

                ";
            // line 313
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 313), 313, $this->source), "html", null, true);
            echo " 

              </div>

            </div>

          ";
        }
        // line 320
        echo "
          <!--End: Content -->

          <!--Start: Sidebar -->

          ";
        // line 325
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 325)) {
            // line 326
            echo "
            <div class=\"sidebar\">
              <div class=";
            // line 328
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 328, $this->source), "html", null, true);
            echo "> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 328), 328, $this->source), "html", null, true);
            echo " </div>
            </div>
            
          ";
        }
        // line 332
        echo "
          <!--End: Sidebar -->

        </div>
      </div>
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Services -->

";
        // line 346
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 346))) {
            // line 347
            echo "
  <div class=\"parallax-widget- two\" id=\"services\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 353
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 353), 353, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 360
        echo "
<!--End: Services -->


<!-- Start: Bottom widgets -->

";
        // line 366
        if ((($context["is_front"] ?? null) && (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 366) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 366)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 366)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 366)))) {
            // line 367
            echo "  <div class=\"parallax-widget- four\" id=\"products\">    
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">

          <!-- Start: Bottom First -->          
          ";
            // line 373
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 373)) {
                // line 374
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 374, $this->source), "html", null, true);
                echo ">
              ";
                // line 375
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 375), 375, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 377
            echo "          
          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          ";
            // line 381
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 381)) {
                // line 382
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 382, $this->source), "html", null, true);
                echo ">
              ";
                // line 383
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 383), 383, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 385
            echo "          
          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->          
          ";
            // line 389
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 389)) {
                // line 390
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 390, $this->source), "html", null, true);
                echo ">
              ";
                // line 391
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 391), 391, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 393
            echo "          
          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          ";
            // line 397
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 397)) {
                // line 398
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 398, $this->source), "html", null, true);
                echo ">
              ";
                // line 399
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 399), 399, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 402
            echo "          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 409
        echo "
<!--End: Bottom widgets -->


<!-- Start: Footer widgets -->

";
        // line 415
        if ((($context["is_front"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 415) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 415)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 415)))) {
            // line 416
            echo "  <div class=\"parallax-widget- six\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 422
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 422)) {
                // line 423
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_class"] ?? null), 423, $this->source), "html", null, true);
                echo ">
              ";
                // line 424
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 424), 424, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 427
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 430
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 430)) {
                // line 431
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 431, $this->source), "html", null, true);
                echo ">
              ";
                // line 432
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 432), 432, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 435
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 438
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 438)) {
                // line 439
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 439, $this->source), "html", null, true);
                echo ">
              ";
                // line 440
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 440), 440, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 443
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 450
        echo "
<!--End: Footer widgets -->


<!-- Start: Clients -->

";
        // line 456
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 456))) {
            // line 457
            echo "  <div class=\"parallax-widget- three\" id=\"clients\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 462
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 462), 462, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 469
        echo "
<!--End: Clients -->


<!-- Start: Map -->

";
        // line 475
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 475))) {
            // line 476
            echo "  <div class=\"map-and-address\">
    <div class=\"google_map\">";
            // line 477
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 477), 477, $this->source), "html", null, true);
            echo "</div>
  </div>
";
        }
        // line 480
        echo "
<!--End: Map -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © ";
        // line 491
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</p>
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      ";
        // line 496
        if (($context["show_credit_link"] ?? null)) {
            // line 497
            echo "        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 501
        echo "      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/news_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  806 => 501,  800 => 497,  798 => 496,  790 => 491,  777 => 480,  771 => 477,  768 => 476,  766 => 475,  758 => 469,  748 => 462,  741 => 457,  739 => 456,  731 => 450,  722 => 443,  716 => 440,  711 => 439,  709 => 438,  704 => 435,  698 => 432,  693 => 431,  691 => 430,  686 => 427,  680 => 424,  675 => 423,  673 => 422,  665 => 416,  663 => 415,  655 => 409,  646 => 402,  640 => 399,  635 => 398,  633 => 397,  627 => 393,  621 => 391,  616 => 390,  614 => 389,  608 => 385,  602 => 383,  597 => 382,  595 => 381,  589 => 377,  583 => 375,  578 => 374,  576 => 373,  568 => 367,  566 => 366,  558 => 360,  548 => 353,  540 => 347,  538 => 346,  522 => 332,  513 => 328,  509 => 326,  507 => 325,  500 => 320,  490 => 313,  485 => 310,  479 => 308,  477 => 307,  470 => 302,  465 => 299,  456 => 297,  452 => 296,  448 => 294,  446 => 293,  439 => 289,  434 => 286,  432 => 285,  425 => 280,  417 => 277,  414 => 276,  412 => 275,  403 => 268,  397 => 265,  394 => 264,  392 => 263,  382 => 255,  372 => 248,  365 => 243,  363 => 242,  356 => 237,  348 => 232,  343 => 229,  341 => 228,  329 => 218,  322 => 213,  315 => 208,  307 => 207,  305 => 206,  299 => 202,  291 => 201,  289 => 200,  283 => 196,  275 => 195,  273 => 194,  268 => 191,  266 => 190,  260 => 186,  258 => 185,  250 => 179,  241 => 173,  235 => 169,  233 => 168,  220 => 157,  214 => 154,  211 => 153,  209 => 152,  201 => 146,  195 => 144,  193 => 143,  175 => 127,  166 => 120,  160 => 117,  157 => 116,  155 => 115,  142 => 104,  138 => 102,  132 => 100,  129 => 99,  123 => 97,  120 => 96,  114 => 94,  111 => 93,  105 => 91,  102 => 90,  96 => 88,  93 => 87,  87 => 85,  85 => 84,  82 => 83,  80 => 82,  75 => 79,  69 => 77,  67 => 76,  64 => 75,  58 => 73,  56 => 72,  45 => 63,  43 => 62,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/news_zymphonies_theme/templates/layout/page.html.twig", "C:\\Apache24\\htdocs\\install-dir\\web\\themes\\contrib\\news_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 62, "for" => 296);
        static $filters = array("escape" => 73, "raw" => 297, "date" => 491);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
