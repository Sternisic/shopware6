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

/* @Storefront/storefront/element/cms-element-sidebar-filter.html.twig */
class __TwigTemplate_ab3ac39e479af6a69973554f3fd9d71c75e25a647e461a9be37fd474071b641b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_sidebar_filter' => [$this, 'block_element_sidebar_filter'],
            'element_product_listing_filter_button' => [$this, 'block_element_product_listing_filter_button'],
            'element_product_listing_filter_button_icon' => [$this, 'block_element_product_listing_filter_button_icon'],
            'element_sidebar_filter_panel' => [$this, 'block_element_sidebar_filter_panel'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig"));

        // line 1
        $this->displayBlock('element_sidebar_filter', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_element_sidebar_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_sidebar_filter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_sidebar_filter"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        if (array_key_exists("cmsPage", $context)) {
            // line 4
            echo "        ";
            $context["config"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 4), "elements", [], "any", false, false, false, 4);
            // line 5
            echo "        ";
            $context["slot"] = twig_get_attribute($this->env, $this->source, ($context["cmsPage"] ?? null), "firstElementOfType", [0 => "product-listing"], "method", false, false, false, 5);
            // line 6
            echo "        ";
            $context["listing"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slot"] ?? null), "data", [], "any", false, false, false, 6), "listing", [], "any", false, false, false, 6);
            // line 7
            echo "        ";
            $context["sidebar"] = (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "sectionPosition", [], "any", false, false, false, 7), "sidebar"));
            // line 8
            echo "    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 10), "elements", [], "any", false, false, false, 10)), 0))) {
            // line 11
            echo "        <div class=\"cms-element-sidebar-filter\">
            ";
            // line 12
            $this->displayBlock('element_product_listing_filter_button', $context, $blocks);
            // line 25
            echo "
            ";
            // line 26
            $this->displayBlock('element_sidebar_filter_panel', $context, $blocks);
            // line 36
            echo "        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_element_product_listing_filter_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_filter_button"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_filter_button"));

        // line 13
        echo "                <button class=\"btn header-actions-btn filter-panel-wrapper-toggle\"
                        type=\"button\"
                        data-offcanvas-filter=\"true\"
                        aria-haspopup=\"true\"
                        aria-expanded=\"false\"
                        aria-label=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.menuLink"), "html", null, true);
        echo "\">
                    ";
        // line 19
        $this->displayBlock('element_product_listing_filter_button_icon', $context, $blocks);
        // line 22
        echo "                    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterTitleText"), "html", null, true);
        echo "
                </button>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_element_product_listing_filter_button_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_filter_button_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_filter_button_icon"));

        // line 20
        echo "                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", 20);
        })())->display(twig_array_merge($context, ["name" => "sliders-horizontal"]));
        // line 21
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_element_sidebar_filter_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_sidebar_filter_panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_sidebar_filter_panel"));

        // line 27
        echo "                <div id=\"filter-panel-wrapper\"
                     class=\"filter-panel-wrapper\"
                     data-offcanvas-filter-content=\"true\">
                    ";
        // line 30
        $this->loadTemplate("@Storefront/storefront/component/listing/filter-panel.html.twig", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", 30)->display(twig_array_merge($context, ["listing" =>         // line 31
($context["listing"] ?? null), "sidebar" =>         // line 32
($context["sidebar"] ?? null)]));
        // line 34
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  198 => 34,  196 => 32,  195 => 31,  194 => 30,  189 => 27,  179 => 26,  169 => 21,  160 => 20,  150 => 19,  136 => 22,  134 => 19,  130 => 18,  123 => 13,  113 => 12,  101 => 36,  99 => 26,  96 => 25,  94 => 12,  91 => 11,  89 => 10,  86 => 9,  83 => 8,  80 => 7,  77 => 6,  74 => 5,  71 => 4,  68 => 3,  66 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block element_sidebar_filter %}
    {# Use values from cms data if context is a cmsPage, otherwise `listing` and `sidebar` must be set manually #}
    {% if cmsPage is defined %}
        {% set config = element.fieldConfig.elements %}
        {% set slot = cmsPage.firstElementOfType('product-listing') %}
        {% set listing = slot.data.listing %}
        {% set sidebar = block.sectionPosition == 'sidebar' %}
    {% endif %}

    {% if listing.aggregations.elements|length > 0 %}
        <div class=\"cms-element-sidebar-filter\">
            {% block element_product_listing_filter_button %}
                <button class=\"btn header-actions-btn filter-panel-wrapper-toggle\"
                        type=\"button\"
                        data-offcanvas-filter=\"true\"
                        aria-haspopup=\"true\"
                        aria-expanded=\"false\"
                        aria-label=\"{{ \"general.menuLink\"|trans }}\">
                    {% block element_product_listing_filter_button_icon %}
                        {% sw_icon 'sliders-horizontal' %}
                    {% endblock %}
                    {{ \"listing.filterTitleText\"|trans }}
                </button>
            {% endblock %}

            {% block element_sidebar_filter_panel %}
                <div id=\"filter-panel-wrapper\"
                     class=\"filter-panel-wrapper\"
                     data-offcanvas-filter-content=\"true\">
                    {% sw_include '@Storefront/storefront/component/listing/filter-panel.html.twig' with {
                        listing: listing,
                        sidebar: sidebar
                    } %}
                </div>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", "/var/www/html/shopwaresix/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-sidebar-filter.html.twig");
    }
}
