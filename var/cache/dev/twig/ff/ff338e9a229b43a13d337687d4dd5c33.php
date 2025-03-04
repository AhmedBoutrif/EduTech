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

/* avaibility/index.html.twig */
class __TwigTemplate_0defe6df5a6eebe9b304d11ca7ef0ada extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avaibility/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avaibility/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avaibility/index.html.twig", 1);
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

        yield "Liste des disponibilités";
        
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
        yield "    <div class=\"container mt-4\">
        <h1 class=\"text-center text-primary mb-4\">📅 Disponibilités</h1>

        <!-- Filter Section -->
        <div class=\"d-flex justify-content-center mb-4\">
            <div class=\"input-group w-50 shadow-sm\">
                <span class=\"input-group-text bg-light border-secondary\">
                    <i class=\"bi bi-calendar text-primary\"></i>
                </span>
                <input type=\"text\" id=\"availability-filter\" class=\"form-control border-secondary rounded-end\" 
                       placeholder=\"Sélectionnez une date...\" readonly>
                <button class=\"btn btn-light border-secondary\" id=\"clear-filter\">
                    <i class=\"bi bi-x-circle text-danger\"></i>
                </button>
            </div>
        </div>

        <!-- Availabilities List -->
        <div class=\"row\" id=\"availability-list\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availabilities"]) || array_key_exists("availabilities", $context) ? $context["availabilities"] : (function () { throw new RuntimeError('Variable "availabilities" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["avaibility"]) {
            // line 26
            yield "                <div class=\"col-md-4 availability-item\" data-date=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avaibility"], "date", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true);
            yield "\">
                    <div class=\"card bg-light shadow-lg border border-secondary rounded-3 mb-3\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-dark\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avaibility"], "date", [], "any", false, false, false, 29), "d M Y"), "html", null, true);
            yield "</h5>
                            <p class=\"card-text text-dark\">
                                ⏰ <strong>Début :</strong> ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avaibility"], "startTime", [], "any", false, false, false, 31), "H:i"), "html", null, true);
            yield " <br>
                                ⏳ <strong>Fin :</strong> ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avaibility"], "endTime", [], "any", false, false, false, 32), "H:i"), "html", null, true);
            yield "
                            </p>

                            <div class=\"d-flex justify-content-between\">
                                <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Avaibility_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avaibility"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm border\">
                                    <i class=\"bi bi-eye text-dark\"></i>
                                </a>
                                
                                <a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Avaibility_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avaibility"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm border\">
                                    <i class=\"bi bi-pencil text-dark\"></i>
                                </a>

                                <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Avaibility_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avaibility"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm border\">
                                    <i class=\"bi bi-trash text-dark\"></i>
                                </a>
                                
  


                            </div>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 55
        if (!$context['_iterated']) {
            // line 56
            yield "                <div class=\"col-12\">
                    <p class=\"text-center text-muted\">Aucune disponibilité trouvée.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avaibility'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "        </div>

        <div class=\"text-center mt-4\">
            <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Avaibility_new");
        yield "\" class=\"btn btn-success\">
                <i class=\"bi bi-plus-circle\"></i> Ajouter une disponibilité
            </a>
        </div>
    </div>

    ";
        // line 70
        yield "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>

    <script>
        flatpickr(\"#availability-filter\", {
            enableTime: false,
            dateFormat: \"Y-m-d\",
            locale: \"fr\",
            onChange: function(selectedDates, dateStr) {
                filterAvailabilities(dateStr);
            }
        });

        function filterAvailabilities(selectedDate) {
            document.querySelectorAll('.availability-item').forEach(item => {
                let itemDate = item.getAttribute('data-date');
                if (!selectedDate || itemDate === selectedDate) {
                    item.style.display = \"block\";
                } else {
                    item.style.display = \"none\";
                }
            });
        }

        // Clear filter button
        document.getElementById(\"clear-filter\").addEventListener(\"click\", function () {
            document.getElementById(\"availability-filter\").value = \"\";
            filterAvailabilities(\"\");
        });
    </script>
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
        return "avaibility/index.html.twig";
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
        return array (  204 => 70,  195 => 63,  190 => 60,  181 => 56,  179 => 55,  163 => 44,  156 => 40,  149 => 36,  142 => 32,  138 => 31,  133 => 29,  126 => 26,  121 => 25,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des disponibilités{% endblock %}

{% block main %}
    <div class=\"container mt-4\">
        <h1 class=\"text-center text-primary mb-4\">📅 Disponibilités</h1>

        <!-- Filter Section -->
        <div class=\"d-flex justify-content-center mb-4\">
            <div class=\"input-group w-50 shadow-sm\">
                <span class=\"input-group-text bg-light border-secondary\">
                    <i class=\"bi bi-calendar text-primary\"></i>
                </span>
                <input type=\"text\" id=\"availability-filter\" class=\"form-control border-secondary rounded-end\" 
                       placeholder=\"Sélectionnez une date...\" readonly>
                <button class=\"btn btn-light border-secondary\" id=\"clear-filter\">
                    <i class=\"bi bi-x-circle text-danger\"></i>
                </button>
            </div>
        </div>

        <!-- Availabilities List -->
        <div class=\"row\" id=\"availability-list\">
            {% for avaibility in availabilities %}
                <div class=\"col-md-4 availability-item\" data-date=\"{{ avaibility.date|date('Y-m-d') }}\">
                    <div class=\"card bg-light shadow-lg border border-secondary rounded-3 mb-3\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-dark\">{{ avaibility.date|date('d M Y') }}</h5>
                            <p class=\"card-text text-dark\">
                                ⏰ <strong>Début :</strong> {{ avaibility.startTime|date('H:i') }} <br>
                                ⏳ <strong>Fin :</strong> {{ avaibility.endTime|date('H:i') }}
                            </p>

                            <div class=\"d-flex justify-content-between\">
                                <a href=\"{{ path('app_Avaibility_show', {'id': avaibility.id}) }}\" class=\"btn btn-light btn-sm border\">
                                    <i class=\"bi bi-eye text-dark\"></i>
                                </a>
                                
                                <a href=\"{{ path('app_Avaibility_edit', {'id': avaibility.id}) }}\" class=\"btn btn-light btn-sm border\">
                                    <i class=\"bi bi-pencil text-dark\"></i>
                                </a>

                                <a href=\"{{ path('app_Avaibility_delete', {'id': avaibility.id}) }}\" class=\"btn btn-light btn-sm border\">
                                    <i class=\"bi bi-trash text-dark\"></i>
                                </a>
                                
  


                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-12\">
                    <p class=\"text-center text-muted\">Aucune disponibilité trouvée.</p>
                </div>
            {% endfor %}
        </div>

        <div class=\"text-center mt-4\">
            <a href=\"{{ path('app_Avaibility_new') }}\" class=\"btn btn-success\">
                <i class=\"bi bi-plus-circle\"></i> Ajouter une disponibilité
            </a>
        </div>
    </div>

    {# Flatpickr for date selection #}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>

    <script>
        flatpickr(\"#availability-filter\", {
            enableTime: false,
            dateFormat: \"Y-m-d\",
            locale: \"fr\",
            onChange: function(selectedDates, dateStr) {
                filterAvailabilities(dateStr);
            }
        });

        function filterAvailabilities(selectedDate) {
            document.querySelectorAll('.availability-item').forEach(item => {
                let itemDate = item.getAttribute('data-date');
                if (!selectedDate || itemDate === selectedDate) {
                    item.style.display = \"block\";
                } else {
                    item.style.display = \"none\";
                }
            });
        }

        // Clear filter button
        document.getElementById(\"clear-filter\").addEventListener(\"click\", function () {
            document.getElementById(\"availability-filter\").value = \"\";
            filterAvailabilities(\"\");
        });
    </script>
{% endblock %}
", "avaibility/index.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\avaibility\\index.html.twig");
    }
}
