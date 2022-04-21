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

/* @Storefront/storefront/layout/meta.html.twig */
class __TwigTemplate_6fbbcf307c47d06615d232542db9f7a0c118f31fc2546c422d3561d7b9b60442 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_head_inner' => [$this, 'block_layout_head_inner'],
            'layout_head_meta_tags' => [$this, 'block_layout_head_meta_tags'],
            'layout_head_meta_tags_charset' => [$this, 'block_layout_head_meta_tags_charset'],
            'layout_head_meta_tags_viewport' => [$this, 'block_layout_head_meta_tags_viewport'],
            'layout_head_meta_tags_general' => [$this, 'block_layout_head_meta_tags_general'],
            'layout_head_meta_tags_general_author' => [$this, 'block_layout_head_meta_tags_general_author'],
            'layout_head_meta_tags_robots' => [$this, 'block_layout_head_meta_tags_robots'],
            'layout_head_meta_tags_general_revisit' => [$this, 'block_layout_head_meta_tags_general_revisit'],
            'layout_head_meta_tags_keywords' => [$this, 'block_layout_head_meta_tags_keywords'],
            'layout_head_meta_tags_description' => [$this, 'block_layout_head_meta_tags_description'],
            'layout_head_meta_tags_opengraph' => [$this, 'block_layout_head_meta_tags_opengraph'],
            'layout_head_meta_tags_type_og' => [$this, 'block_layout_head_meta_tags_type_og'],
            'layout_head_meta_tags_sitename_og' => [$this, 'block_layout_head_meta_tags_sitename_og'],
            'layout_head_meta_tags_title_og' => [$this, 'block_layout_head_meta_tags_title_og'],
            'layout_head_meta_tags_description_og' => [$this, 'block_layout_head_meta_tags_description_og'],
            'layout_head_meta_tags_image_og' => [$this, 'block_layout_head_meta_tags_image_og'],
            'layout_head_meta_tags_card_twitter' => [$this, 'block_layout_head_meta_tags_card_twitter'],
            'layout_head_meta_tags_sitename_twitter' => [$this, 'block_layout_head_meta_tags_sitename_twitter'],
            'layout_head_meta_tags_title_twitter' => [$this, 'block_layout_head_meta_tags_title_twitter'],
            'layout_head_meta_tags_description_twitter' => [$this, 'block_layout_head_meta_tags_description_twitter'],
            'layout_head_meta_tags_image_twitter' => [$this, 'block_layout_head_meta_tags_image_twitter'],
            'layout_head_meta_tags_schema_webpage' => [$this, 'block_layout_head_meta_tags_schema_webpage'],
            'layout_head_meta_tags_copyright_holder' => [$this, 'block_layout_head_meta_tags_copyright_holder'],
            'layout_head_meta_tags_copyright_year' => [$this, 'block_layout_head_meta_tags_copyright_year'],
            'layout_head_meta_tags_family_friendly' => [$this, 'block_layout_head_meta_tags_family_friendly'],
            'layout_head_meta_tags_image_meta' => [$this, 'block_layout_head_meta_tags_image_meta'],
            'layout_head_meta_tags_hreflangs' => [$this, 'block_layout_head_meta_tags_hreflangs'],
            'layout_head_favicon' => [$this, 'block_layout_head_favicon'],
            'layout_head_apple' => [$this, 'block_layout_head_apple'],
            'layout_head_android' => [$this, 'block_layout_head_android'],
            'layout_head_canonical' => [$this, 'block_layout_head_canonical'],
            'layout_head_title' => [$this, 'block_layout_head_title'],
            'layout_head_title_inner' => [$this, 'block_layout_head_title_inner'],
            'layout_head_stylesheet' => [$this, 'block_layout_head_stylesheet'],
            'layout_head_javascript_feature' => [$this, 'block_layout_head_javascript_feature'],
            'layout_head_javascript_tracking' => [$this, 'block_layout_head_javascript_tracking'],
            'layout_head_javascript_recaptcha' => [$this, 'block_layout_head_javascript_recaptcha'],
            'layout_head_javascript_token' => [$this, 'block_layout_head_javascript_token'],
            'layout_head_javascript_router' => [$this, 'block_layout_head_javascript_router'],
            'layout_head_javascript_breakpoints' => [$this, 'block_layout_head_javascript_breakpoints'],
            'layout_head_javascript_csrf' => [$this, 'block_layout_head_javascript_csrf'],
            'layout_head_javascript_wishlist_state' => [$this, 'block_layout_head_javascript_wishlist_state'],
            'layout_head_javascript_hmr_mode' => [$this, 'block_layout_head_javascript_hmr_mode'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/meta.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/meta.html.twig"));

        // line 1
        $this->displayBlock('layout_head_inner', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_head_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_inner"));

        // line 2
        echo "    ";
        $context["metaInformation"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["basicConfig"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation");
        // line 4
        echo "    ";
        $context["maxLength"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "seo.descriptionMaxLength");
        // line 5
        echo "    ";
        $context["metaDescription"] = twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_trim_filter(strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaDescription", [], "any", false, false, false, 5)))), "truncate", [0 => (($context["maxLength"]) ?? (160)), 1 => "…"], "method", false, false, false, 5);
        // line 6
        echo "    ";
        $context["metaTitle"] = twig_trim_filter(strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaTitle", [], "any", false, false, false, 6)));
        // line 7
        echo "    ";
        $context["metaKeywords"] = twig_trim_filter(strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaKeywords", [], "any", false, false, false, 7)));
        // line 8
        echo "
    <head>
        ";
        // line 10
        $this->displayBlock('layout_head_meta_tags', $context, $blocks);
        // line 74
        echo "
        ";
        // line 75
        $this->displayBlock('layout_head_favicon', $context, $blocks);
        // line 79
        echo "
        ";
        // line 80
        $this->displayBlock('layout_head_apple', $context, $blocks);
        // line 85
        echo "
        ";
        // line 86
        $this->displayBlock('layout_head_android', $context, $blocks);
        // line 93
        echo "
        ";
        // line 94
        $this->displayBlock('layout_head_canonical', $context, $blocks);
        // line 99
        echo "
        ";
        // line 100
        $this->displayBlock('layout_head_title', $context, $blocks);
        // line 107
        echo "
        ";
        // line 108
        $this->displayBlock('layout_head_stylesheet', $context, $blocks);
        // line 119
        echo "
        ";
        // line 120
        $this->displayBlock('layout_head_javascript_feature', $context, $blocks);
        // line 123
        echo "
        ";
        // line 125
        echo "        ";
        $this->displayBlock('layout_head_javascript_tracking', $context, $blocks);
        // line 128
        echo "
        ";
        // line 129
        $this->displayBlock('layout_head_javascript_recaptcha', $context, $blocks);
        // line 132
        echo "
        ";
        // line 133
        $this->displayBlock('layout_head_javascript_token', $context, $blocks);
        // line 135
        echo "
        ";
        // line 136
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\FeatureFlagExtension']->feature("FEATURE_NEXT_15917")) {
            // line 137
            echo "            ";
            $this->displayBlock('layout_head_javascript_router', $context, $blocks);
            // line 158
            echo "
            ";
            // line 159
            $this->displayBlock('layout_head_javascript_breakpoints', $context, $blocks);
            // line 173
            echo "
            ";
            // line 174
            $this->displayBlock('layout_head_javascript_csrf', $context, $blocks);
            // line 182
            echo "
            ";
            // line 183
            if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled")) {
                // line 184
                echo "                ";
                $this->displayBlock('layout_head_javascript_wishlist_state', $context, $blocks);
                // line 191
                echo "            ";
            }
            // line 192
            echo "
            ";
            // line 193
            $this->displayBlock('layout_head_javascript_hmr_mode', $context, $blocks);
            // line 207
            echo "        ";
        }
        // line 208
        echo "    </head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_layout_head_meta_tags($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags"));

        // line 11
        echo "            ";
        $this->displayBlock('layout_head_meta_tags_charset', $context, $blocks);
        // line 14
        echo "
            ";
        // line 15
        $this->displayBlock('layout_head_meta_tags_viewport', $context, $blocks);
        // line 19
        echo "
            ";
        // line 20
        $this->displayBlock('layout_head_meta_tags_general', $context, $blocks);
        // line 32
        echo "
            ";
        // line 33
        $this->displayBlock('layout_head_meta_tags_opengraph', $context, $blocks);
        // line 56
        echo "
            ";
        // line 57
        $this->displayBlock('layout_head_meta_tags_schema_webpage', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $this->displayBlock('layout_head_meta_tags_hreflangs', $context, $blocks);
        // line 73
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_layout_head_meta_tags_charset($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_charset"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_charset"));

        // line 12
        echo "                <meta charset=\"utf-8\">
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_layout_head_meta_tags_viewport($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_viewport"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_viewport"));

        // line 16
        echo "                <meta name=\"viewport\"
                      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_layout_head_meta_tags_general($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general"));

        // line 21
        echo "                <meta name=\"author\"
                      content=\"";
        // line 22
        $this->displayBlock('layout_head_meta_tags_general_author', $context, $blocks);
        echo "\"/>
                <meta name=\"robots\"
                      content=\"";
        // line 24
        $this->displayBlock('layout_head_meta_tags_robots', $context, $blocks);
        echo "\"/>
                <meta name=\"revisit-after\"
                      content=\"";
        // line 26
        $this->displayBlock('layout_head_meta_tags_general_revisit', $context, $blocks);
        echo "\"/>
                <meta name=\"keywords\"
                      content=\"";
        // line 28
        $this->displayBlock('layout_head_meta_tags_keywords', $context, $blocks);
        echo "\"/>
                <meta name=\"description\"
                      content=\"";
        // line 30
        $this->displayBlock('layout_head_meta_tags_description', $context, $blocks);
        echo "\"/>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_layout_head_meta_tags_general_author($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general_author"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general_author"));

        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "author", [], "any", false, false, false, 22)), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_layout_head_meta_tags_robots($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_robots"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_robots"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "robots", [], "any", false, false, false, 24), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_layout_head_meta_tags_general_revisit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general_revisit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general_revisit"));

        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "revisit", [], "any", false, false, false, 26)), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_layout_head_meta_tags_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_keywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_keywords"));

        echo twig_escape_filter($this->env, ($context["metaKeywords"] ?? null), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_layout_head_meta_tags_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description"));

        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_layout_head_meta_tags_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_opengraph"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_opengraph"));

        // line 34
        echo "                <meta property=\"og:type\"
                      content=\"";
        // line 35
        $this->displayBlock('layout_head_meta_tags_type_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:site_name\"
                      content=\"";
        // line 37
        $this->displayBlock('layout_head_meta_tags_sitename_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:title\"
                      content=\"";
        // line 39
        $this->displayBlock('layout_head_meta_tags_title_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:description\"
                      content=\"";
        // line 41
        $this->displayBlock('layout_head_meta_tags_description_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:image\"
                      content=\"";
        // line 43
        $this->displayBlock('layout_head_meta_tags_image_og', $context, $blocks);
        echo "\"/>

                <meta name=\"twitter:card\"
                      content=\"";
        // line 46
        $this->displayBlock('layout_head_meta_tags_card_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:site\"
                      content=\"";
        // line 48
        $this->displayBlock('layout_head_meta_tags_sitename_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:title\"
                      content=\"";
        // line 50
        $this->displayBlock('layout_head_meta_tags_title_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:description\"
                      content=\"";
        // line 52
        $this->displayBlock('layout_head_meta_tags_description_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:image\"
                      content=\"";
        // line 54
        $this->displayBlock('layout_head_meta_tags_image_twitter', $context, $blocks);
        echo "\"/>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_layout_head_meta_tags_type_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_type_og"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_type_og"));

        echo "website";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_layout_head_meta_tags_sitename_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_sitename_og"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_sitename_og"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 37), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_layout_head_meta_tags_title_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_title_og"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_title_og"));

        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_layout_head_meta_tags_description_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description_og"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description_og"));

        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_layout_head_meta_tags_image_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_og"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_og"));

        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_layout_head_meta_tags_card_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_card_twitter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_card_twitter"));

        echo "summary";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_layout_head_meta_tags_sitename_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_sitename_twitter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_sitename_twitter"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 48), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_layout_head_meta_tags_title_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_title_twitter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_title_twitter"));

        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_layout_head_meta_tags_description_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description_twitter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description_twitter"));

        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_layout_head_meta_tags_image_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_twitter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_twitter"));

        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_layout_head_meta_tags_schema_webpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_schema_webpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_schema_webpage"));

        // line 58
        echo "                <meta itemprop=\"copyrightHolder\"
                      content=\"";
        // line 59
        $this->displayBlock('layout_head_meta_tags_copyright_holder', $context, $blocks);
        echo "\"/>
                <meta itemprop=\"copyrightYear\"
                      content=\"";
        // line 61
        $this->displayBlock('layout_head_meta_tags_copyright_year', $context, $blocks);
        echo "\"/>
                <meta itemprop=\"isFamilyFriendly\"
                      content=\"";
        // line 63
        $this->displayBlock('layout_head_meta_tags_family_friendly', $context, $blocks);
        echo "\"/>
                <meta itemprop=\"image\"
                      content=\"";
        // line 65
        $this->displayBlock('layout_head_meta_tags_image_meta', $context, $blocks);
        echo "\"/>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_layout_head_meta_tags_copyright_holder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_copyright_holder"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_copyright_holder"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 59), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_layout_head_meta_tags_copyright_year($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_copyright_year"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_copyright_year"));

        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "copyrightYear", [], "any", false, false, false, 61)), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_layout_head_meta_tags_family_friendly($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_family_friendly"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_family_friendly"));

        if (twig_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "familyFriendly", [], "any", false, false, false, 63)) {
            echo "true";
        } else {
            echo "false";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_layout_head_meta_tags_image_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_meta"));

        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_layout_head_meta_tags_hreflangs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_hreflangs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_hreflangs"));

        // line 69
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hrefLang"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 70
            echo "                    <link rel=\"alternate\" hreflang=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "locale", [], "any", false, false, false, 70), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 70), "html", null, true);
            echo "\" />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_layout_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_favicon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_favicon"));

        // line 76
        echo "            <link rel=\"shortcut icon\"
                  href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-favicon"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_layout_head_apple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_apple"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_apple"));

        // line 81
        echo "            <link rel=\"apple-touch-icon\"
                  sizes=\"180x180\"
                  href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-share"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_layout_head_android($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_android"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_android"));

        // line 87
        echo "            <link rel=\"icon\"
                  sizes=\"192x192\"
                  href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-share"), "html", null, true);
        echo "\">
            <meta name=\"theme-color\"
                  content=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-color-brand-primary"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_layout_head_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_canonical"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_canonical"));

        // line 95
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 95), "canonical", [], "any", false, false, false, 95)) {
            // line 96
            echo "                <link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 96), "canonical", [], "any", false, false, false, 96), "html", null, true);
            echo "\" />
            ";
        }
        // line 98
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_layout_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_title"));

        // line 101
        echo "            <title itemprop=\"name\">
                ";
        // line 102
        $this->displayBlock('layout_head_title_inner', $context, $blocks);
        // line 105
        echo "            </title>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_layout_head_title_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_title_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_title_inner"));

        ob_start();
        // line 103
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "
                ";
        $___internal_c8977efdfe2d853fc6205c954424f006c05000e2858b7ce3adfbce4e9e562cd9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        echo twig_spaceless($___internal_c8977efdfe2d853fc6205c954424f006c05000e2858b7ce3adfbce4e9e562cd9_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_layout_head_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_stylesheet"));

        // line 109
        echo "            ";
        if (($context["isHMRMode"] ?? null)) {
            // line 110
            echo "                ";
            // line 111
            echo "            ";
        } else {
            // line 112
            echo "                ";
            $context["assets"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "assets.css");
            // line 113
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["assets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 114
                echo "                    <link rel=\"stylesheet\"
                      href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"], "theme"), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "            ";
        }
        // line 118
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 120
    public function block_layout_head_javascript_feature($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_feature"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_feature"));

        // line 121
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/feature.html.twig", "@Storefront/storefront/layout/meta.html.twig", 121)->display($context);
        // line 122
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_layout_head_javascript_tracking($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_tracking"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_tracking"));

        // line 126
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/analytics.html.twig", "@Storefront/storefront/layout/meta.html.twig", 126)->display($context);
        // line 127
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_layout_head_javascript_recaptcha($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_recaptcha"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_recaptcha"));

        // line 130
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/recaptcha.html.twig", "@Storefront/storefront/layout/meta.html.twig", 130)->display($context);
        // line 131
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 133
    public function block_layout_head_javascript_token($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_token"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_token"));

        // line 134
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_layout_head_javascript_router($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_router"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_router"));

        // line 138
        echo "                ";
        // line 139
        echo "                <script>
                    window.activeNavigationId = '";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 140), "navigation", [], "any", false, false, false, 140), "active", [], "any", false, false, false, 140), "id", [], "any", false, false, false, 140), "html", null, true);
        echo "';
                    window.router = {
                        'frontend.cart.offcanvas': '";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cart.offcanvas");
        echo "',
                        'frontend.cookie.offcanvas': '";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cookie.offcanvas");
        echo "',
                        'frontend.checkout.finish.page': '";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.finish.page");
        echo "',
                        'frontend.checkout.info': '";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.info");
        echo "',
                        'frontend.menu.offcanvas': '";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas");
        echo "',
                        'frontend.cms.page': '";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page");
        echo "',
                        'frontend.cms.navigation.page': '";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.navigation.page");
        echo "',
                        'frontend.account.addressbook': '";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.addressbook");
        echo "',
                        'frontend.csrf.generateToken': '";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.csrf.generateToken");
        echo "',
                        'frontend.country.country-data': '";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.country.country.data");
        echo "',
                        'frontend.store-api.proxy': '";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.store-api.proxy");
        echo "',
                    };
                    window.storeApiProxyToken = '";
        // line 154
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.store-api.proxy", ["mode" => "token"]);
        echo "';
                    window.salesChannelId = '";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 155), "attributes", [], "any", false, false, false, 155), "get", [0 => "sw-sales-channel-id"], "method", false, false, false, 155), "html", null, true);
        echo "';
                </script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 159
    public function block_layout_head_javascript_breakpoints($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_breakpoints"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_breakpoints"));

        // line 160
        echo "                ";
        // line 161
        echo "                <script>
                    ";
        // line 162
        $context["breakpoint"] = ["xs" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xs"), "sm" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm"), "md" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "lg" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg"), "xl" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl")];
        // line 169
        echo "
                    window.breakpoints = ";
        // line 170
        echo json_encode(($context["breakpoint"] ?? null));
        echo ";
                </script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 174
    public function block_layout_head_javascript_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_csrf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_csrf"));

        // line 175
        echo "                <script>
                    window.csrf = {
                        'enabled': '";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "csrfEnabled", [], "any", false, false, false, 177), "html", null, true);
        echo "',
                        'mode': '";
        // line 178
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "csrfMode", [], "any", false, false, false, 178), "html", null, true);
        echo "'
                    }
                </script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 184
    public function block_layout_head_javascript_wishlist_state($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_wishlist_state"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_wishlist_state"));

        // line 185
        echo "                    <script>
                        window.customerLoggedInState = ";
        // line 186
        echo ((( !(null === twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 186)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 186), "guest", [], "any", false, false, false, 186))) ? (1) : (0));
        echo ";

                        window.wishlistEnabled = ";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled"), "html", null, true);
        echo ";
                    </script>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 193
    public function block_layout_head_javascript_hmr_mode($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_hmr_mode"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_hmr_mode"));

        // line 194
        echo "                ";
        if (($context["isHMRMode"] ?? null)) {
            // line 195
            echo "                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/vendor-node.js\" defer></script>
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/vendor-shared.js\" defer></script>
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/runtime.js\" defer></script>
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/app.js\" defer></script>
                    ";
            // line 200
            echo "                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/storefront.js\" defer></script>
                ";
        } else {
            // line 202
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "assets.js"));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 203
                echo "                        <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"], "theme"), "html", null, true);
                echo "\" defer></script>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "                ";
        }
        // line 206
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/meta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1397 => 206,  1394 => 205,  1385 => 203,  1380 => 202,  1376 => 200,  1370 => 195,  1367 => 194,  1357 => 193,  1344 => 188,  1339 => 186,  1336 => 185,  1326 => 184,  1312 => 178,  1308 => 177,  1304 => 175,  1294 => 174,  1281 => 170,  1278 => 169,  1276 => 162,  1273 => 161,  1271 => 160,  1261 => 159,  1248 => 155,  1244 => 154,  1239 => 152,  1235 => 151,  1231 => 150,  1227 => 149,  1223 => 148,  1219 => 147,  1215 => 146,  1211 => 145,  1207 => 144,  1203 => 143,  1199 => 142,  1194 => 140,  1191 => 139,  1189 => 138,  1179 => 137,  1169 => 134,  1159 => 133,  1149 => 131,  1146 => 130,  1136 => 129,  1126 => 127,  1123 => 126,  1113 => 125,  1103 => 122,  1100 => 121,  1090 => 120,  1080 => 118,  1077 => 117,  1069 => 115,  1066 => 114,  1061 => 113,  1058 => 112,  1055 => 111,  1053 => 110,  1050 => 109,  1040 => 108,  1030 => 102,  1024 => 103,  1013 => 102,  1002 => 105,  1000 => 102,  997 => 101,  987 => 100,  977 => 98,  971 => 96,  968 => 95,  958 => 94,  946 => 91,  941 => 89,  937 => 87,  927 => 86,  915 => 83,  911 => 81,  901 => 80,  889 => 77,  886 => 76,  876 => 75,  866 => 72,  855 => 70,  850 => 69,  840 => 68,  821 => 65,  798 => 63,  779 => 61,  760 => 59,  748 => 65,  743 => 63,  738 => 61,  733 => 59,  730 => 58,  720 => 57,  701 => 54,  682 => 52,  663 => 50,  644 => 48,  625 => 46,  606 => 43,  587 => 41,  568 => 39,  549 => 37,  530 => 35,  518 => 54,  513 => 52,  508 => 50,  503 => 48,  498 => 46,  492 => 43,  487 => 41,  482 => 39,  477 => 37,  472 => 35,  469 => 34,  459 => 33,  440 => 30,  421 => 28,  402 => 26,  383 => 24,  364 => 22,  352 => 30,  347 => 28,  342 => 26,  337 => 24,  332 => 22,  329 => 21,  319 => 20,  307 => 16,  297 => 15,  286 => 12,  276 => 11,  266 => 73,  264 => 68,  261 => 67,  259 => 57,  256 => 56,  254 => 33,  251 => 32,  249 => 20,  246 => 19,  244 => 15,  241 => 14,  238 => 11,  228 => 10,  217 => 208,  214 => 207,  212 => 193,  209 => 192,  206 => 191,  203 => 184,  201 => 183,  198 => 182,  196 => 174,  193 => 173,  191 => 159,  188 => 158,  185 => 137,  183 => 136,  180 => 135,  178 => 133,  175 => 132,  173 => 129,  170 => 128,  167 => 125,  164 => 123,  162 => 120,  159 => 119,  157 => 108,  154 => 107,  152 => 100,  149 => 99,  147 => 94,  144 => 93,  142 => 86,  139 => 85,  137 => 80,  134 => 79,  132 => 75,  129 => 74,  127 => 10,  123 => 8,  120 => 7,  117 => 6,  114 => 5,  111 => 4,  108 => 3,  105 => 2,  86 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_head_inner %}
    {% set metaInformation = page.metaInformation %}
    {% set basicConfig = config('core.basicInformation') %}
    {% set maxLength = config('seo.descriptionMaxLength') %}
    {% set metaDescription = metaInformation.metaDescription|striptags|trim|u.truncate(maxLength ?? 160, '…') %}
    {% set metaTitle = metaInformation.metaTitle|striptags|trim %}
    {% set metaKeywords = metaInformation.metaKeywords|striptags|trim %}

    <head>
        {% block layout_head_meta_tags %}
            {% block layout_head_meta_tags_charset %}
                <meta charset=\"utf-8\">
            {% endblock %}

            {% block layout_head_meta_tags_viewport %}
                <meta name=\"viewport\"
                      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            {% endblock %}

            {% block layout_head_meta_tags_general %}
                <meta name=\"author\"
                      content=\"{% block layout_head_meta_tags_general_author %}{{ metaInformation.author|striptags }}{% endblock %}\"/>
                <meta name=\"robots\"
                      content=\"{% block layout_head_meta_tags_robots %}{{ metaInformation.robots }}{% endblock %}\"/>
                <meta name=\"revisit-after\"
                      content=\"{% block layout_head_meta_tags_general_revisit %}{{ metaInformation.revisit|striptags }}{% endblock %}\"/>
                <meta name=\"keywords\"
                      content=\"{% block layout_head_meta_tags_keywords %}{{ metaKeywords }}{% endblock %}\"/>
                <meta name=\"description\"
                      content=\"{% block layout_head_meta_tags_description %}{{ metaDescription }}{% endblock %}\"/>
            {% endblock %}

            {% block layout_head_meta_tags_opengraph %}
                <meta property=\"og:type\"
                      content=\"{% block layout_head_meta_tags_type_og %}website{% endblock %}\"/>
                <meta property=\"og:site_name\"
                      content=\"{% block layout_head_meta_tags_sitename_og %}{{ basicConfig.shopName }}{% endblock %}\"/>
                <meta property=\"og:title\"
                      content=\"{% block layout_head_meta_tags_title_og %}{{ metaTitle }}{% endblock %}\"/>
                <meta property=\"og:description\"
                      content=\"{% block layout_head_meta_tags_description_og %}{{ metaDescription }}{% endblock %}\"/>
                <meta property=\"og:image\"
                      content=\"{% block layout_head_meta_tags_image_og %}{{ theme_config('sw-logo-desktop') }}{% endblock %}\"/>

                <meta name=\"twitter:card\"
                      content=\"{% block layout_head_meta_tags_card_twitter %}summary{% endblock %}\"/>
                <meta name=\"twitter:site\"
                      content=\"{% block layout_head_meta_tags_sitename_twitter %}{{ basicConfig.shopName }}{% endblock %}\"/>
                <meta name=\"twitter:title\"
                      content=\"{% block layout_head_meta_tags_title_twitter %}{{ metaTitle }}{% endblock %}\"/>
                <meta name=\"twitter:description\"
                      content=\"{% block layout_head_meta_tags_description_twitter %}{{ metaDescription }}{% endblock %}\"/>
                <meta name=\"twitter:image\"
                      content=\"{% block layout_head_meta_tags_image_twitter %}{{ theme_config('sw-logo-desktop') }}{% endblock %}\"/>
            {% endblock %}

            {% block layout_head_meta_tags_schema_webpage %}
                <meta itemprop=\"copyrightHolder\"
                      content=\"{% block layout_head_meta_tags_copyright_holder %}{{ basicConfig.shopName }}{% endblock %}\"/>
                <meta itemprop=\"copyrightYear\"
                      content=\"{% block layout_head_meta_tags_copyright_year %}{{ metaInformation.copyrightYear|striptags }}{% endblock %}\"/>
                <meta itemprop=\"isFamilyFriendly\"
                      content=\"{% block layout_head_meta_tags_family_friendly %}{% if basicConfig.familyFriendly %}true{% else %}false{% endif %}{% endblock %}\"/>
                <meta itemprop=\"image\"
                      content=\"{% block layout_head_meta_tags_image_meta %}{{ theme_config('sw-logo-desktop') }}{% endblock %}\"/>
            {% endblock %}

            {% block layout_head_meta_tags_hreflangs %}
                {% for link in hrefLang %}
                    <link rel=\"alternate\" hreflang=\"{{ link.locale }}\" href=\"{{ link.url }}\" />
                {% endfor %}
            {% endblock %}
        {% endblock %}

        {% block layout_head_favicon %}
            <link rel=\"shortcut icon\"
                  href=\"{{ theme_config('sw-logo-favicon') }}\">
        {% endblock %}

        {% block layout_head_apple %}
            <link rel=\"apple-touch-icon\"
                  sizes=\"180x180\"
                  href=\"{{ theme_config('sw-logo-share') }}\">
        {% endblock %}

        {% block layout_head_android %}
            <link rel=\"icon\"
                  sizes=\"192x192\"
                  href=\"{{ theme_config('sw-logo-share') }}\">
            <meta name=\"theme-color\"
                  content=\"{{ theme_config('sw-color-brand-primary') }}\"/>
        {% endblock %}

        {% block layout_head_canonical %}
            {% if page.metaInformation.canonical %}
                <link rel=\"canonical\" href=\"{{ page.metaInformation.canonical }}\" />
            {% endif %}
        {% endblock %}

        {% block layout_head_title %}
            <title itemprop=\"name\">
                {% block layout_head_title_inner %}{% apply spaceless %}
                    {{ metaTitle }}
                {% endapply %}{% endblock %}
            </title>
        {% endblock %}

        {% block layout_head_stylesheet %}
            {% if isHMRMode %}
                {# CSS will be loaded from the JS automatically #}
            {% else %}
                {% set assets = theme_config('assets.css') %}
                {% for file in assets %}
                    <link rel=\"stylesheet\"
                      href=\"{{ asset(file, 'theme') }}\">
                {% endfor %}
            {% endif %}
        {% endblock %}

        {% block layout_head_javascript_feature %}
            {% sw_include \"@Storefront/storefront/component/feature.html.twig\" %}
        {% endblock %}

        {# Block for tracking scripts which are required to include in the `head` section of the document #}
        {% block layout_head_javascript_tracking %}
            {% sw_include \"@Storefront/storefront/component/analytics.html.twig\" %}
        {% endblock %}

        {% block layout_head_javascript_recaptcha %}
            {% sw_include \"@Storefront/storefront/component/recaptcha.html.twig\" %}
        {% endblock %}

        {% block layout_head_javascript_token %}
        {% endblock %}

        {% if feature('FEATURE_NEXT_15917') %}
            {% block layout_head_javascript_router %}
                {# Register all routes that will be needed in JavaScript to the window.router object #}
                <script>
                    window.activeNavigationId = '{{ page.header.navigation.active.id }}';
                    window.router = {
                        'frontend.cart.offcanvas': '{{ path('frontend.cart.offcanvas') }}',
                        'frontend.cookie.offcanvas': '{{ path('frontend.cookie.offcanvas') }}',
                        'frontend.checkout.finish.page': '{{ path('frontend.checkout.finish.page') }}',
                        'frontend.checkout.info': '{{ path('frontend.checkout.info') }}',
                        'frontend.menu.offcanvas': '{{ path('frontend.menu.offcanvas') }}',
                        'frontend.cms.page': '{{ path('frontend.cms.page') }}',
                        'frontend.cms.navigation.page': '{{ path('frontend.cms.navigation.page') }}',
                        'frontend.account.addressbook': '{{ path('frontend.account.addressbook') }}',
                        'frontend.csrf.generateToken': '{{ path('frontend.csrf.generateToken') }}',
                        'frontend.country.country-data': '{{ path('frontend.country.country.data') }}',
                        'frontend.store-api.proxy': '{{ path('frontend.store-api.proxy') }}',
                    };
                    window.storeApiProxyToken = '{{ sw_csrf(\"frontend.store-api.proxy\", {\"mode\": \"token\"}) }}';
                    window.salesChannelId = '{{ app.request.attributes.get('sw-sales-channel-id') }}';
                </script>
            {% endblock %}

            {% block layout_head_javascript_breakpoints %}
                {# Register the available viewport breakpoints the window.breakpoints object #}
                <script>
                    {% set breakpoint = {
                        'xs': theme_config('breakpoint.xs'),
                        'sm': theme_config('breakpoint.sm'),
                        'md': theme_config('breakpoint.md'),
                        'lg': theme_config('breakpoint.lg'),
                        'xl': theme_config('breakpoint.xl')
                    } %}

                    window.breakpoints = {{ breakpoint|json_encode()|raw }};
                </script>
            {% endblock %}

            {% block layout_head_javascript_csrf %}
                <script>
                    window.csrf = {
                        'enabled': '{{ shopware.csrfEnabled }}',
                        'mode': '{{ shopware.csrfMode }}'
                    }
                </script>
            {% endblock %}

            {% if config('core.cart.wishlistEnabled') %}
                {% block layout_head_javascript_wishlist_state %}
                    <script>
                        window.customerLoggedInState = {{ context.customer is not null and not context.customer.guest ? 1 : 0 }};

                        window.wishlistEnabled = {{ config('core.cart.wishlistEnabled') }};
                    </script>
                {% endblock %}
            {% endif %}

            {% block layout_head_javascript_hmr_mode %}
                {% if isHMRMode %}
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/vendor-node.js\" defer></script>
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/vendor-shared.js\" defer></script>
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/runtime.js\" defer></script>
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/app.js\" defer></script>
                    {# The storefront entry is a combined entry point which contains all plugins & themes #}
                    <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/storefront.js\" defer></script>
                {% else %}
                    {% for file in theme_config('assets.js') %}
                        <script type=\"text/javascript\" src=\"{{ asset(file, 'theme') }}\" defer></script>
                    {% endfor %}
                {% endif %}
            {% endblock %}
        {% endif %}
    </head>
{% endblock %}
", "@Storefront/storefront/layout/meta.html.twig", "/var/www/html/shopwaresix/vendor/shopware/storefront/Resources/views/storefront/layout/meta.html.twig");
    }
}
