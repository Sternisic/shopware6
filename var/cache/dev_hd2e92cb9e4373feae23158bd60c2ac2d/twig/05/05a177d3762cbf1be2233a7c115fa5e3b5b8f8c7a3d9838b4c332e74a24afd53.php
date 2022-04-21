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

/* @Storefront/storefront/block/cms-block-image-text-row.html.twig */
class __TwigTemplate_b60d0342d49e4ba2bd509c5f85a95ad9a06a31023dc4ba445f5e6c15348e0c5e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block_image_text_row' => [$this, 'block_block_image_text_row'],
            'block_image_text_row_left' => [$this, 'block_block_image_text_row_left'],
            'block_image_text_row_left_image' => [$this, 'block_block_image_text_row_left_image'],
            'block_image_text_row_left_text' => [$this, 'block_block_image_text_row_left_text'],
            'block_image_text_row_center' => [$this, 'block_block_image_text_row_center'],
            'block_image_text_row_center_image' => [$this, 'block_block_image_text_row_center_image'],
            'block_image_text_row_center_text' => [$this, 'block_block_image_text_row_center_text'],
            'block_image_text_row_right' => [$this, 'block_block_image_text_row_right'],
            'block_image_text_row_right_image' => [$this, 'block_block_image_text_row_right_image'],
            'block_image_text_row_right_text' => [$this, 'block_block_image_text_row_right_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/block/cms-block-image-text-row.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/block/cms-block-image-text-row.html.twig"));

        // line 1
        $this->displayBlock('block_image_text_row', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_block_image_text_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row"));

        // line 2
        echo "    ";
        $context["columns"] = 3;
        // line 3
        echo "    ";
        // line 4
        echo "    ";
        $context["id"] = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 4);
        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('block_image_text_row_left', $context, $blocks);
        // line 25
        echo "
    ";
        // line 26
        $this->displayBlock('block_image_text_row_center', $context, $blocks);
        // line 45
        echo "
    ";
        // line 46
        $this->displayBlock('block_image_text_row_right', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_block_image_text_row_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_left"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_left"));

        // line 7
        echo "        <div class=\"col-md-4\">
            ";
        // line 8
        $this->displayBlock('block_image_text_row_left_image', $context, $blocks);
        // line 15
        echo "
            ";
        // line 16
        $this->displayBlock('block_image_text_row_left_text', $context, $blocks);
        // line 23
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_block_image_text_row_left_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_left_image"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_left_image"));

        // line 9
        echo "                ";
        $context["element"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 9), "getSlot", [0 => "left-image"], "method", false, false, false, 9);
        // line 10
        echo "
                <div data-cms-element-id=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
                    ";
        // line 12
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName((("@Storefront/storefront/element/cms-element-" . twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 12)) . ".html.twig")));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-text-row.html.twig", 12);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 13
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_block_image_text_row_left_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_left_text"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_left_text"));

        // line 17
        echo "                ";
        $context["element"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 17), "getSlot", [0 => "left-text"], "method", false, false, false, 17);
        // line 18
        echo "
                <div data-cms-element-id=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
                    ";
        // line 20
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = null;
        try {
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName((("@Storefront/storefront/element/cms-element-" . twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 20)) . ".html.twig")));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-text-row.html.twig", 20);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) {
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144->display($context);
        }
        // line 21
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_block_image_text_row_center($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_center"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_center"));

        // line 27
        echo "        <div class=\"col-md-4\">
            ";
        // line 28
        $this->displayBlock('block_image_text_row_center_image', $context, $blocks);
        // line 35
        echo "
            ";
        // line 36
        $this->displayBlock('block_image_text_row_center_text', $context, $blocks);
        // line 43
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_block_image_text_row_center_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_center_image"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_center_image"));

        // line 29
        echo "                ";
        $context["element"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 29), "getSlot", [0 => "center-image"], "method", false, false, false, 29);
        // line 30
        echo "
                <div data-cms-element-id=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
                    ";
        // line 32
        $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = null;
        try {
            $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName((("@Storefront/storefront/element/cms-element-" . twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 32)) . ".html.twig")));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-text-row.html.twig", 32);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) {
            $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b->display($context);
        }
        // line 33
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_block_image_text_row_center_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_center_text"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_center_text"));

        // line 37
        echo "                ";
        $context["element"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 37), "getSlot", [0 => "center-text"], "method", false, false, false, 37);
        // line 38
        echo "
                <div data-cms-element-id=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
                    ";
        // line 40
        $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = null;
        try {
            $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName((("@Storefront/storefront/element/cms-element-" . twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 40)) . ".html.twig")));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-text-row.html.twig", 40);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) {
            $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002->display($context);
        }
        // line 41
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_block_image_text_row_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_right"));

        // line 47
        echo "        <div class=\"col-md-4\">
            ";
        // line 48
        $this->displayBlock('block_image_text_row_right_image', $context, $blocks);
        // line 55
        echo "
            ";
        // line 56
        $this->displayBlock('block_image_text_row_right_text', $context, $blocks);
        // line 63
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_block_image_text_row_right_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_right_image"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_right_image"));

        // line 49
        echo "                ";
        $context["element"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 49), "getSlot", [0 => "right-image"], "method", false, false, false, 49);
        // line 50
        echo "
                <div data-cms-element-id=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 51), "html", null, true);
        echo "\">
                    ";
        // line 52
        $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = null;
        try {
            $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName((("@Storefront/storefront/element/cms-element-" . twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 52)) . ".html.twig")));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-text-row.html.twig", 52);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) {
            $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4->display($context);
        }
        // line 53
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_block_image_text_row_right_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_right_text"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_row_right_text"));

        // line 57
        echo "                ";
        $context["element"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 57), "getSlot", [0 => "right-text"], "method", false, false, false, 57);
        // line 58
        echo "
                <div data-cms-element-id=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 59), "html", null, true);
        echo "\">
                    ";
        // line 60
        $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = null;
        try {
            $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName((("@Storefront/storefront/element/cms-element-" . twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 60)) . ".html.twig")));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-text-row.html.twig", 60);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) {
            $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666->display($context);
        }
        // line 61
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/block/cms-block-image-text-row.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  467 => 61,  451 => 60,  447 => 59,  444 => 58,  441 => 57,  431 => 56,  420 => 53,  404 => 52,  400 => 51,  397 => 50,  394 => 49,  384 => 48,  373 => 63,  371 => 56,  368 => 55,  366 => 48,  363 => 47,  353 => 46,  342 => 41,  326 => 40,  322 => 39,  319 => 38,  316 => 37,  306 => 36,  295 => 33,  279 => 32,  275 => 31,  272 => 30,  269 => 29,  259 => 28,  248 => 43,  246 => 36,  243 => 35,  241 => 28,  238 => 27,  228 => 26,  217 => 21,  201 => 20,  197 => 19,  194 => 18,  191 => 17,  181 => 16,  170 => 13,  154 => 12,  150 => 11,  147 => 10,  144 => 9,  134 => 8,  123 => 23,  121 => 16,  118 => 15,  116 => 8,  113 => 7,  103 => 6,  93 => 46,  90 => 45,  88 => 26,  85 => 25,  83 => 6,  80 => 5,  77 => 4,  75 => 3,  72 => 2,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block block_image_text_row %}
    {% set columns = 3 %}
    {# @deprecated tag:v6.5.0 - Use \"element.id\" directly instead. #}
    {% set id = element.id %}

    {% block block_image_text_row_left %}
        <div class=\"col-md-4\">
            {% block block_image_text_row_left_image %}
                {% set element = block.slots.getSlot('left-image') %}

                <div data-cms-element-id=\"{{ element.id }}\">
                    {% sw_include \"@Storefront/storefront/element/cms-element-\" ~ element.type ~ \".html.twig\" ignore missing %}
                </div>
            {% endblock %}

            {% block block_image_text_row_left_text %}
                {% set element = block.slots.getSlot('left-text') %}

                <div data-cms-element-id=\"{{ element.id }}\">
                    {% sw_include \"@Storefront/storefront/element/cms-element-\" ~ element.type ~ \".html.twig\" ignore missing %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}

    {% block block_image_text_row_center %}
        <div class=\"col-md-4\">
            {% block block_image_text_row_center_image %}
                {% set element = block.slots.getSlot('center-image') %}

                <div data-cms-element-id=\"{{ element.id }}\">
                    {% sw_include \"@Storefront/storefront/element/cms-element-\" ~ element.type ~ \".html.twig\" ignore missing %}
                </div>
            {% endblock %}

            {% block block_image_text_row_center_text %}
                {% set element = block.slots.getSlot('center-text') %}

                <div data-cms-element-id=\"{{ element.id }}\">
                    {% sw_include \"@Storefront/storefront/element/cms-element-\" ~ element.type ~ \".html.twig\" ignore missing %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}

    {% block block_image_text_row_right %}
        <div class=\"col-md-4\">
            {% block block_image_text_row_right_image %}
                {% set element = block.slots.getSlot('right-image') %}

                <div data-cms-element-id=\"{{ element.id }}\">
                    {% sw_include \"@Storefront/storefront/element/cms-element-\" ~ element.type ~ \".html.twig\" ignore missing %}
                </div>
            {% endblock %}

            {% block block_image_text_row_right_text %}
                {% set element = block.slots.getSlot('right-text') %}

                <div data-cms-element-id=\"{{ element.id }}\">
                    {% sw_include \"@Storefront/storefront/element/cms-element-\" ~ element.type ~ \".html.twig\" ignore missing %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/block/cms-block-image-text-row.html.twig", "/var/www/html/shopwaresix/vendor/shopware/storefront/Resources/views/storefront/block/cms-block-image-text-row.html.twig");
    }
}
