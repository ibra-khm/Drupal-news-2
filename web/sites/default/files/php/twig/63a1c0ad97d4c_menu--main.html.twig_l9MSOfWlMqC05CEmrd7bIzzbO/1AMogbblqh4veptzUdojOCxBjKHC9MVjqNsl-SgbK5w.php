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

/* themes/contrib/yg_news/templates/menu/menu--main.html.twig */
class __TwigTemplate_9e23c6e2ab2e1bfaa3370113cda726aa extends \Twig\Template
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
        // line 18
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 24, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 26
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 27
            echo " ";
            $macros["menus"] = $this;
            // line 28
            echo " 

  
   ";
            // line 31
            if ((($context["menu_level"] ?? null) == 0)) {
                // line 32
                echo "      <ul class=\"navbar-nav mr-auto\">
   ";
            } else {
                // line 34
                echo "     <ul ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "dropdown-menu"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
                echo ">
   ";
            }
            // line 36
            echo "   ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 37
                echo "       ";
                // line 38
                $context["classes"] = [0 => "nav-item", 1 => ((twig_get_attribute($this->env, $this->source,                 // line 40
$context["item"], "is_expanded", [], "any", false, false, true, 40)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                 // line 41
$context["item"], "is_expanded", [], "any", false, false, true, 41)) ? ("dropdown") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                 // line 42
$context["item"], "is_collapsed", [], "any", false, false, true, 42)) ? ("menu-item--collapsed") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                 // line 43
$context["item"], "in_active_trail", [], "any", false, false, true, 43)) ? ("menu-item--active-trail") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,                 // line 44
$context["item"], "in_active_trail", [], "any", false, false, true, 44)) ? ("active") : (""))];
                // line 47
                echo "     ";
                if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 47))) {
                    // line 48
                    echo "       <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 48), "addClass", [0 => ($context["classes"] ?? null), 1 => "expanded", 2 => "dropdown"], "method", false, false, true, 48), 48, $this->source), "html", null, true);
                    echo ">
       <a href=\"";
                    // line 49
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                    echo "\" class=\"nav-link dropdown-toggle\" data-target=\"#\" data-toggle=\"dropdown\"> ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                    echo "</a>
     ";
                } else {
                    // line 51
                    echo "       <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 51), "addClass", [0 => ($context["classes"] ?? null), 1 => "item"], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                    echo ">
       ";
                    // line 53
                    echo "       ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 53), 53, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 53), 53, $this->source), ["class" => [0 => "nav-link"]]), "html", null, true);
                    echo "
     ";
                }
                // line 55
                echo "     ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 55)) {
                    // line 56
                    echo "       ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 56), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => "nav", 1 => "navbar-nav"], "method", false, false, true, 56), (($context["menu_level"] ?? null) + 1)], 56, $context, $this->getSourceContext()));
                    echo "
     ";
                }
                // line 58
                echo "     </li>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "   </ul>
     

";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_news/templates/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 60,  135 => 58,  129 => 56,  126 => 55,  120 => 53,  115 => 51,  108 => 49,  103 => 48,  100 => 47,  98 => 44,  97 => 43,  96 => 42,  95 => 41,  94 => 40,  93 => 38,  91 => 37,  86 => 36,  80 => 34,  76 => 32,  74 => 31,  69 => 28,  66 => 27,  51 => 26,  44 => 24,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_news/templates/menu/menu--main.html.twig", "C:\\Apache24\\htdocs\\install-dir\\web\\themes\\contrib\\yg_news\\templates\\menu\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 18, "macro" => 26, "if" => 31, "for" => 36, "set" => 38);
        static $filters = array("escape" => 34);
        static $functions = array("link" => 53);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
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
