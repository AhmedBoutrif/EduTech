<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/pricing.html.twig */
class __TwigTemplate_dc30cf1077c90cf4881b67b4dee8653e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/pricing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/pricing.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/pricing.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Home - Append Bootstrap Template";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        yield "<main class=\"main\">
    <!-- Pricing Section -->
    <section id=\"pricing\" class=\"pricing section\">

        <!-- Section Title -->
        <div class=\"container section-title\" data-aos=\"fade-up\">
            <h2>Abonnements</h2>
            <p></p>
        </div><!-- End Section Title -->

        <!-- Search Bar -->
        <div class=\"d-flex justify-content-center mb-4\">
            <input id=\"search-input\" class=\"form-control w-50 border-0 shadow-lg rounded-pill py-2 px-4\" type=\"text\" placeholder=\"Rechercher un abonnement...\" aria-label=\"Search\">
        </div>
        <!-- /Search Bar -->

        <div class=\"container\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"row g-4\" id=\"pricing-list\">

                ";
        // line 25
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 25, $this->source); })())) > 0)) {
            // line 26
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 26, $this->source); })()), "items", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["pricing"]) {
                // line 27
                yield "                    <div class=\"col-lg-4 pricing-item\">
                        <div class=\"pricing-card\">
                            <h3 class=\"pricing-name\">";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pricing"], "nom", [], "any", false, false, false, 29), "html", null, true);
                yield "</h3>
                            <div class=\"icon\">
                                <i class=\"bi bi-box\"></i>
                            </div>
                            <h4>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pricing"], "prix", [], "any", false, false, false, 33), "html", null, true);
                yield " <sup>DT</sup><span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pricing"], "duree", [], "any", false, false, false, 33), "html", null, true);
                yield " mois</span></h4>
                            <ul class=\"text-center\">
                                ";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pricing"], "description", [], "any", false, false, false, 35), "html", null, true);
                yield "
                            </ul>
                            <div class=\"text-center\">
                                <form action=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_controller_abonnement_pay", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pricing"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                yield "\" method=\"POST\">
                                    <button type=\"submit\" class=\"buy-btn\">Acheter</button>
                                </form>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['pricing'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "                ";
        } else {
            // line 46
            yield "                    <p class=\"text-center\">Aucun abonnement trouvé.</p>
                ";
        }
        // line 48
        yield "
            </div>

            <!-- Blog Pagination Section -->
            <section id=\"blog-pagination\" class=\"blog-pagination section\">
                <div class=\"container\">
                    <div class=\"d-flex justify-content-center\">
                        <ul class=\"pagination\">
                            <!-- Previous Page -->
                            <li class=\"page-item ";
        // line 57
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 57, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 57) == 1)) {
            yield "disabled";
        }
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pricing", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 58, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 58) - 1)]), "html", null, true);
        yield "\">
                                    <i class=\"bi bi-chevron-left\"></i>
                                </a>
                            </li>

                            <!-- Page Numbers -->
                            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 64, $this->source); })()), "pageCount", [], "any", false, false, false, 64)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 65
            yield "                                <li class=\"page-item ";
            if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 65, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 65))) {
                yield "active";
            }
            yield "\">
                                    <a class=\"page-link\" href=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pricing", ["page" => $context["page"]]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "</a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "
                            <!-- Next Page -->
                            <li class=\"page-item ";
        // line 71
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 71, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 71) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 71, $this->source); })()), "pageCount", [], "any", false, false, false, 71))) {
            yield "disabled";
        }
        yield "\">
                                <a class=\"page-link\" href=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pricing", ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 72, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 72) + 1)]), "html", null, true);
        yield "\">
                                    <i class=\"bi bi-chevron-right\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section><!-- /Blog Pagination Section -->

        </div>

    </section><!-- /Pricing Section -->
</main>

";
        // line 86
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 100
        yield "
";
        // line 101
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        yield "<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$(\"#search-input\").on(\"input\", function() {
            var value = \$(this).val().toLowerCase();

            \$(\".pricing-item\").filter(function() {
                \$(this).toggle(\$(this).find(\".pricing-name\").text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 102
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        /* Pagination stylisée */
        .pagination {
            list-style: none;
            padding-left: 0;
            display: flex;
            justify-content: center;
        }

        .pagination .page-item {
            margin: 0 5px;
        }

        .pagination .page-link {
            color: #333 !important; /* Texte normal */
            border: none !important; /* Suppression des bordures */
            background-color: transparent !important;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 18px;
        }

        .pagination .page-item.active .page-link {
            background-color: #d32f2f !important; /* Rouge plus foncé */
            color: white !important; /* Texte blanc */
            border-radius: 8px !important;
            padding: 12px 18px;
        }

        .pagination .page-item.disabled .page-link {
            color: #ccc !important; /* Grisé pour désactivé */
            pointer-events: none;
            background-color: white !important;
        }

        .pagination .page-item:hover .page-link {
            background-color: #b71c1c !important; /* Rouge encore plus foncé au survol */
            color: white !important;
            border-radius: 8px !important;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/pricing.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  314 => 102,  301 => 101,  278 => 87,  265 => 86,  254 => 101,  251 => 100,  249 => 86,  232 => 72,  226 => 71,  222 => 69,  211 => 66,  204 => 65,  200 => 64,  191 => 58,  185 => 57,  174 => 48,  170 => 46,  167 => 45,  154 => 38,  148 => 35,  141 => 33,  134 => 29,  130 => 27,  125 => 26,  123 => 25,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home - Append Bootstrap Template{% endblock %}

{% block main %}
<main class=\"main\">
    <!-- Pricing Section -->
    <section id=\"pricing\" class=\"pricing section\">

        <!-- Section Title -->
        <div class=\"container section-title\" data-aos=\"fade-up\">
            <h2>Abonnements</h2>
            <p></p>
        </div><!-- End Section Title -->

        <!-- Search Bar -->
        <div class=\"d-flex justify-content-center mb-4\">
            <input id=\"search-input\" class=\"form-control w-50 border-0 shadow-lg rounded-pill py-2 px-4\" type=\"text\" placeholder=\"Rechercher un abonnement...\" aria-label=\"Search\">
        </div>
        <!-- /Search Bar -->

        <div class=\"container\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"row g-4\" id=\"pricing-list\">

                {% if pagination|length > 0 %}
                    {% for pricing in pagination.items %}
                    <div class=\"col-lg-4 pricing-item\">
                        <div class=\"pricing-card\">
                            <h3 class=\"pricing-name\">{{ pricing.nom }}</h3>
                            <div class=\"icon\">
                                <i class=\"bi bi-box\"></i>
                            </div>
                            <h4>{{ pricing.prix }} <sup>DT</sup><span> {{ pricing.duree }} mois</span></h4>
                            <ul class=\"text-center\">
                                {{ pricing.description }}
                            </ul>
                            <div class=\"text-center\">
                                <form action=\"{{ path('app_controller_abonnement_pay', {id: pricing.id}) }}\" method=\"POST\">
                                    <button type=\"submit\" class=\"buy-btn\">Acheter</button>
                                </form>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->
                    {% endfor %}
                {% else %}
                    <p class=\"text-center\">Aucun abonnement trouvé.</p>
                {% endif %}

            </div>

            <!-- Blog Pagination Section -->
            <section id=\"blog-pagination\" class=\"blog-pagination section\">
                <div class=\"container\">
                    <div class=\"d-flex justify-content-center\">
                        <ul class=\"pagination\">
                            <!-- Previous Page -->
                            <li class=\"page-item {% if pagination.currentPageNumber == 1 %}disabled{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('app_pricing', {'page': pagination.currentPageNumber - 1}) }}\">
                                    <i class=\"bi bi-chevron-left\"></i>
                                </a>
                            </li>

                            <!-- Page Numbers -->
                            {% for page in 1..pagination.pageCount %}
                                <li class=\"page-item {% if page == pagination.currentPageNumber %}active{% endif %}\">
                                    <a class=\"page-link\" href=\"{{ path('app_pricing', {'page': page}) }}\">{{ page }}</a>
                                </li>
                            {% endfor %}

                            <!-- Next Page -->
                            <li class=\"page-item {% if pagination.currentPageNumber == pagination.pageCount %}disabled{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('app_pricing', {'page': pagination.currentPageNumber + 1}) }}\">
                                    <i class=\"bi bi-chevron-right\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section><!-- /Blog Pagination Section -->

        </div>

    </section><!-- /Pricing Section -->
</main>

{% block javascripts %}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$(\"#search-input\").on(\"input\", function() {
            var value = \$(this).val().toLowerCase();

            \$(\".pricing-item\").filter(function() {
                \$(this).toggle(\$(this).find(\".pricing-name\").text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Pagination stylisée */
        .pagination {
            list-style: none;
            padding-left: 0;
            display: flex;
            justify-content: center;
        }

        .pagination .page-item {
            margin: 0 5px;
        }

        .pagination .page-link {
            color: #333 !important; /* Texte normal */
            border: none !important; /* Suppression des bordures */
            background-color: transparent !important;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 18px;
        }

        .pagination .page-item.active .page-link {
            background-color: #d32f2f !important; /* Rouge plus foncé */
            color: white !important; /* Texte blanc */
            border-radius: 8px !important;
            padding: 12px 18px;
        }

        .pagination .page-item.disabled .page-link {
            color: #ccc !important; /* Grisé pour désactivé */
            pointer-events: none;
            background-color: white !important;
        }

        .pagination .page-item:hover .page-link {
            background-color: #b71c1c !important; /* Rouge encore plus foncé au survol */
            color: white !important;
            border-radius: 8px !important;
        }
    </style>
{% endblock %}
{% endblock %}


", "home/pricing.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\home\\pricing.html.twig");
    }
}
