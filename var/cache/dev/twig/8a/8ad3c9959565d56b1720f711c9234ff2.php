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

/* avaibility/new.html.twig */
class __TwigTemplate_a04bb43a36a044c6c2fa68f78fb5d73b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avaibility/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avaibility/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avaibility/new.html.twig", 1);
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

        yield "Ajouter des disponibilités";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Ajouter des disponibilités</h1>

        <div class=\"card shadow-lg p-4\">
            <div class=\"card-body\">
                ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        yield "
                
                <div id=\"availability-entries\" data-prototype=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "availabilities", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "prototype", [], "any", false, false, false, 13), 'row'));
        yield "\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "availabilities", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["availability"]) {
            // line 15
            yield "                        <div class=\"availability-entry mb-3 border p-3 rounded\">
                            <div class=\"row g-3\">
                                <div class=\"col-md-4\">
                                    ";
            // line 18
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "date", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date"]);
            yield "
                                    ";
            // line 19
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "date", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control flatpickr-date"]]);
            yield "
                                    ";
            // line 20
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "date", [], "any", false, false, false, 20), 'errors');
            yield "
                                </div>
                                <div class=\"col-md-4\">
                                    ";
            // line 23
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "start_time", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Heure de début"]);
            yield "
                                    ";
            // line 24
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "start_time", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control flatpickr-time"]]);
            yield "
                                    ";
            // line 25
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "start_time", [], "any", false, false, false, 25), 'errors');
            yield "
                                </div>
                                <div class=\"col-md-4\">
                                    ";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "end_time", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Heure de fin"]);
            yield "
                                    ";
            // line 29
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "end_time", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control flatpickr-time"]]);
            yield "
                                    ";
            // line 30
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "end_time", [], "any", false, false, false, 30), 'errors');
            yield "
                                </div>
                            </div>
                            <button type=\"button\" class=\"btn btn-danger btn-sm remove-entry mt-3\">Supprimer</button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['availability'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                </div>

                <button type=\"button\" class=\"btn btn-success mt-3\" id=\"add-availability\">Ajouter une autre disponibilité</button>
                <br><br>

                <div class=\"d-flex gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                    <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Avaibility_index");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                </div>
                
                ";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>

    ";
        // line 52
        yield "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>

    <script>
        function initializeFlatpickr() {
            flatpickr(\".flatpickr-date\", {
                enableTime: false,
                dateFormat: \"Y-m-d\",
                locale: \"fr\"
            });

            flatpickr(\".flatpickr-time\", {
                enableTime: true,
                noCalendar: true,
                dateFormat: \"H:i\",
                time_24hr: true,
                locale: \"fr\"
            });
        }

        document.addEventListener(\"DOMContentLoaded\", function() {
            initializeFlatpickr(); // Initialiser Flatpickr sur les champs existants

            let container = document.getElementById('availability-entries');
            let addButton = document.getElementById('add-availability');
            let prototype = container.dataset.prototype;
            let index = container.querySelectorAll('.availability-entry').length;

            addButton.addEventListener('click', function() {
                let newEntry = document.createElement('div');
                newEntry.classList.add('availability-entry', 'mb-3', 'border', 'p-3', 'rounded');
                newEntry.innerHTML = prototype.replace(/__name__/g, index);
                container.appendChild(newEntry);
                index++;

                initializeFlatpickr(); // Réinitialiser Flatpickr pour inclure les nouveaux champs
            });

            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-entry')) {
                    let entry = event.target.closest('.availability-entry');
                    if (document.querySelectorAll('.availability-entry').length > 1) {
                        entry.remove();
                    }
                }
            });
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
        return "avaibility/new.html.twig";
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
        return array (  196 => 52,  188 => 46,  182 => 43,  173 => 36,  161 => 30,  157 => 29,  153 => 28,  147 => 25,  143 => 24,  139 => 23,  133 => 20,  129 => 19,  125 => 18,  120 => 15,  116 => 14,  112 => 13,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter des disponibilités{% endblock %}

{% block main %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Ajouter des disponibilités</h1>

        <div class=\"card shadow-lg p-4\">
            <div class=\"card-body\">
                {{ form_start(form) }}
                
                <div id=\"availability-entries\" data-prototype=\"{{ form_row(form.availabilities.vars.prototype)|e }}\">
                    {% for availability in form.availabilities %}
                        <div class=\"availability-entry mb-3 border p-3 rounded\">
                            <div class=\"row g-3\">
                                <div class=\"col-md-4\">
                                    {{ form_label(availability.date, 'Date', {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(availability.date, {'attr': {'class': 'form-control flatpickr-date'}}) }}
                                    {{ form_errors(availability.date) }}
                                </div>
                                <div class=\"col-md-4\">
                                    {{ form_label(availability.start_time, 'Heure de début', {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(availability.start_time, {'attr': {'class': 'form-control flatpickr-time'}}) }}
                                    {{ form_errors(availability.start_time) }}
                                </div>
                                <div class=\"col-md-4\">
                                    {{ form_label(availability.end_time, 'Heure de fin', {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(availability.end_time, {'attr': {'class': 'form-control flatpickr-time'}}) }}
                                    {{ form_errors(availability.end_time) }}
                                </div>
                            </div>
                            <button type=\"button\" class=\"btn btn-danger btn-sm remove-entry mt-3\">Supprimer</button>
                        </div>
                    {% endfor %}
                </div>

                <button type=\"button\" class=\"btn btn-success mt-3\" id=\"add-availability\">Ajouter une autre disponibilité</button>
                <br><br>

                <div class=\"d-flex gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                    <a href=\"{{ path('app_Avaibility_index') }}\" class=\"btn btn-secondary\">Annuler</a>
                </div>
                
                {{ form_end(form) }}
            </div>
        </div>
    </div>

    {# Flatpickr pour un meilleur choix de date/heure #}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>

    <script>
        function initializeFlatpickr() {
            flatpickr(\".flatpickr-date\", {
                enableTime: false,
                dateFormat: \"Y-m-d\",
                locale: \"fr\"
            });

            flatpickr(\".flatpickr-time\", {
                enableTime: true,
                noCalendar: true,
                dateFormat: \"H:i\",
                time_24hr: true,
                locale: \"fr\"
            });
        }

        document.addEventListener(\"DOMContentLoaded\", function() {
            initializeFlatpickr(); // Initialiser Flatpickr sur les champs existants

            let container = document.getElementById('availability-entries');
            let addButton = document.getElementById('add-availability');
            let prototype = container.dataset.prototype;
            let index = container.querySelectorAll('.availability-entry').length;

            addButton.addEventListener('click', function() {
                let newEntry = document.createElement('div');
                newEntry.classList.add('availability-entry', 'mb-3', 'border', 'p-3', 'rounded');
                newEntry.innerHTML = prototype.replace(/__name__/g, index);
                container.appendChild(newEntry);
                index++;

                initializeFlatpickr(); // Réinitialiser Flatpickr pour inclure les nouveaux champs
            });

            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-entry')) {
                    let entry = event.target.closest('.availability-entry');
                    if (document.querySelectorAll('.availability-entry').length > 1) {
                        entry.remove();
                    }
                }
            });
        });
    </script>
{% endblock %}
", "avaibility/new.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\avaibility\\new.html.twig");
    }
}
