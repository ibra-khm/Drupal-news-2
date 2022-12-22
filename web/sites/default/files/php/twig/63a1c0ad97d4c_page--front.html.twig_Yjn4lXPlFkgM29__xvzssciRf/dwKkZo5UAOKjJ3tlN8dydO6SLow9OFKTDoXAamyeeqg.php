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

/* themes/contrib/yg_news/templates/layout/page--front.html.twig */
class __TwigTemplate_27782ea216e1e5d78fcb6c81af74d253 extends \Twig\Template
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
        // line 1
        echo "<div class=\"container-fluid fh5co_header_bg\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_trending", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "
        </div>
    </div>
</div>
<div class=\"container-fluid header-res\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-3 fh5co_padding_menu\">
                ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"col-12 col-md-9 align-self-center fh5co_mediya_right\">
                ";
        // line 15
        if (($context["linkedin"] ?? null)) {
            // line 16
            echo "                <div class=\"text-center d-inline-block\">
                    <a href=\"";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 17, $this->source), "html", null, true);
            echo "\" target=\"_blank\"  class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-linkedin\"></i></div></a>
                </div>
                ";
        }
        // line 19
        echo " 
                ";
        // line 20
        if (($context["googleplus"] ?? null)) {
            // line 21
            echo "                <div class=\"text-center d-inline-block\">
                    <a href=\"";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["googleplus"] ?? null), 22, $this->source), "html", null, true);
            echo "\" target=\"_blank\"  class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-google-plus\"></i></div></a>
                </div>
                ";
        }
        // line 25
        echo "                ";
        if (($context["twitter"] ?? null)) {
            // line 26
            echo "                <div class=\"text-center d-inline-block\">
                    <a href=\"";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 27, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-twitter\"></i></div></a>
                </div>
                ";
        }
        // line 30
        echo "                ";
        if (($context["facebook"] ?? null)) {
            // line 31
            echo "                <div class=\"text-center d-inline-block\">
                    <a href=\"";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 32, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table\"><div class=\"fh5co_verticle_middle\"><i class=\"fa fa-facebook\"></i></div></a>
                </div>
                ";
        }
        // line 34
        echo "              
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>
<div class=\"container-fluid bg-faded fh5co_padd_mediya padding_786\">
    <div class=\"container padding_786\">
        <nav class=\"navbar navbar-toggleable-md navbar-light \">
            <button class=\"navbar-toggler navbar-toggler-right mt-3\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\"><span class=\"fa fa-bars\"></span></button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">        
            ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
            </div>
        </nav>
    </div>
</div>

<div id=\"feature\" class=\"container-fluid paddding mb-5\">
    <div class=\"row mx-0\">
        <div class=\"col-md-6  paddding feature-news animate-box\" data-animate-effect=\"fadeIn\">
            ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature_section_1", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
        </div>    
        <div class=\"col-md-6  feature-right\">
            ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature_section_2", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
        </div>     

    </div>
</div>    

";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "news_section", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "

<div class=\"container-fluid pb-4 pt-4 paddding\">
    <div class=\"container paddding\">
        <div class=\"row mx-0\">
            <div class=\"col-md-8 animate-box\" data-animate-effect=\"fadeInLeft\">
                ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "business_news", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-3 animate-box\" data-animate-effect=\"fadeInRight\">
                <div class=\"clearfix\"></div>
                <div class=\"fh5co_tags_all\">
                ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "
                </div>
            </div>   
        </div>
    </div>
</div>            





<div class=\"container-fluid fh5co_footer_bg pb-3\">
    <div class=\"container animate-box\">
        <div class=\"row\">
            <div class=\"col-12 spdp_right py-5\">";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_logo", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        echo "</div>
            <div class=\"clearfix\"></div>
            <div class=\"col-12 col-md-4 col-lg-3\">
                <div class=\"footer_sub_about pb-3\"> 
                ";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_about", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"footer_mediya_icon\">

                    ";
        // line 98
        if (($context["linkedin"] ?? null)) {
            // line 99
            echo "                    <div class=\"text-center d-inline-block\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 99, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table_footer\">
                        <div class=\"fh5co_verticle_middle\"><i class=\"fa fa-linkedin\"></i></div>
                    </a></div>
                    ";
        }
        // line 102
        echo " 

                    ";
        // line 104
        if (($context["googleplus"] ?? null)) {
            // line 105
            echo "                    <div class=\"text-center d-inline-block\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["googleplus"] ?? null), 105, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table_footer\">
                        <div class=\"fh5co_verticle_middle\"><i class=\"fa fa-google-plus\"></i></div>
                    </a></div>
                    ";
        }
        // line 109
        echo "
                    ";
        // line 110
        if (($context["twitter"] ?? null)) {
            // line 111
            echo "                    <div class=\"text-center d-inline-block\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 111, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table_footer\">
                        <div class=\"fh5co_verticle_middle\"><i class=\"fa fa-twitter\"></i></div>
                    </a></div>
                    ";
        }
        // line 115
        echo "
                    ";
        // line 116
        if (($context["facebook"] ?? null)) {
            // line 117
            echo "                    <div class=\"text-center d-inline-block\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 117, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"fh5co_display_table_footer\">
                        <div class=\"fh5co_verticle_middle\"><i class=\"fa fa-facebook\"></i></div>
                    </a></div>
                    ";
        }
        // line 121
        echo "
                </div>
            </div>
            <div class=\"col-12 col-md-3 col-lg-2\">
                <ul class=\"footer_menu\">
                   ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_category", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
        echo "
                </ul>
            </div>
            <div class=\"col-12 col-md-5 col-lg-3 position_footer_relative\">
                ";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_most_viewed_post", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
        echo "
                <div class=\"footer_position_absolute\"><img src=\"";
        // line 131
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["basepath"] ?? null), 131, $this->source), "html", null, true);
        echo "/themes/yg_news/images/footer_sub_tipik.png\" alt=\"img\" class=\"width_footer_sub_img\"/></div>
            </div>
            <div class=\"col-12 col-md-12 col-lg-4 \">
                 ";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_last_modified_post", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"row justify-content-center pt-2 pb-4\">
            ";
        // line 138
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_subscribe", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
        echo "
        </div>
    </div>
</div>
<div class=\"container-fluid fh5co_footer_right_reserved\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-6 py-4 Reserved\"> © Copyright 2018, All rights reserved. Design by <a href=\"https://freehtml5.co\" title=\"Free HTML5 Bootstrap templates\">FreeHTML5.co</a>.
            <p>Theme By<a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\"> Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com/\" target=\"_blank\">Young Globes</a></p>   </div>
            <div class=\"col-12 col-md-6 spdp_right py-4\">
               ";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copy_right_footer_menu", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\"gototop js-top\">
    <a href=\"#\" class=\"js-gotop\"><i class=\"fa fa-arrow-up\"></i></a>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_news/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 148,  281 => 138,  274 => 134,  268 => 131,  264 => 130,  257 => 126,  250 => 121,  242 => 117,  240 => 116,  237 => 115,  229 => 111,  227 => 110,  224 => 109,  216 => 105,  214 => 104,  210 => 102,  202 => 99,  200 => 98,  193 => 94,  186 => 90,  169 => 76,  161 => 71,  152 => 65,  143 => 59,  137 => 56,  125 => 47,  110 => 34,  104 => 32,  101 => 31,  98 => 30,  92 => 27,  89 => 26,  86 => 25,  80 => 22,  77 => 21,  75 => 20,  72 => 19,  66 => 17,  63 => 16,  61 => 15,  55 => 12,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_news/templates/layout/page--front.html.twig", "C:\\Apache24\\htdocs\\install-dir\\web\\themes\\contrib\\yg_news\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
