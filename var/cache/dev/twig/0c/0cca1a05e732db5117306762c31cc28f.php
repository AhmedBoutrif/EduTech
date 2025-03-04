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

/* avaibility/edit.html.twig */
class __TwigTemplate_44e8a69d80861c197f0842cc310fc31c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avaibility/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avaibility/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avaibility/edit.html.twig", 1);
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

        yield "Modifier une disponibilité";
        
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
        <h1 class=\"mb-4\">Modifier une disponibilité</h1>

        <div class=\"card shadow-lg p-4\">
            <div class=\"card-body\">
                ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        yield "
                
                <div class=\"mb-3\">
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "date", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date"]);
        yield "
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "date", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control flatpickr-date"]]);
        yield "
                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "date", [], "any", false, false, false, 16), 'errors');
        yield "
                </div>

                <div class=\"mb-3\">
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "start_time", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Heure de début"]);
        yield "
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "start_time", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control flatpickr-time"]]);
        yield "
                    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "start_time", [], "any", false, false, false, 22), 'errors');
        yield "
                </div>

                <div class=\"mb-3\">
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "end_time", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Heure de fin"]);
        yield "
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "end_time", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control flatpickr-time"]]);
        yield "
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "end_time", [], "any", false, false, false, 28), 'errors');
        yield "
                </div>
                
                <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Avaibility_index");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                
                ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>

    ";
        // line 40
        yield "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            let today = new Date();
            let maxDate = new Date();
            maxDate.setMonth(today.getMonth() + 1);

            flatpickr(\".flatpickr-date\", {
                enableTime: false,
                dateFormat: \"Y-m-d\",
                locale: \"fr\",
                minDate: today,
                maxDate: maxDate
            });

            flatpickr(\".flatpickr-time\", {
                enableTime: true,
                noCalendar: true,
                dateFormat: \"H:i\",
                time_24hr: true,
                locale: \"fr\"
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
        return "avaibility/edit.html.twig";
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
        return array (  171 => 40,  163 => 34,  158 => 32,  151 => 28,  147 => 27,  143 => 26,  136 => 22,  132 => 21,  128 => 20,  121 => 16,  117 => 15,  113 => 14,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier une disponibilité{% endblock %}

{% block main %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Modifier une disponibilité</h1>

        <div class=\"card shadow-lg p-4\">
            <div class=\"card-body\">
                {{ form_start(form) }}
                
                <div class=\"mb-3\">
                    {{ form_label(form.date, 'Date', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.date, {'attr': {'class': 'form-control flatpickr-date'}}) }}
                    {{ form_errors(form.date) }}
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.start_time, 'Heure de début', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.start_time, {'attr': {'class': 'form-control flatpickr-time'}}) }}
                    {{ form_errors(form.start_time) }}
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.end_time, 'Heure de fin', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.end_time, {'attr': {'class': 'form-control flatpickr-time'}}) }}
                    {{ form_errors(form.end_time) }}
                </div>
                
                <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                <a href=\"{{ path('app_Avaibility_index') }}\" class=\"btn btn-secondary\">Annuler</a>
                
                {{ form_end(form) }}
            </div>
        </div>
    </div>

    {# Flatpickr pour un meilleur choix de date/heure #}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            let today = new Date();
            let maxDate = new Date();
            maxDate.setMonth(today.getMonth() + 1);

            flatpickr(\".flatpickr-date\", {
                enableTime: false,
                dateFormat: \"Y-m-d\",
                locale: \"fr\",
                minDate: today,
                maxDate: maxDate
            });

            flatpickr(\".flatpickr-time\", {
                enableTime: true,
                noCalendar: true,
                dateFormat: \"H:i\",
                time_24hr: true,
                locale: \"fr\"
            });
        });
    </script>
{% endblock %}
", "avaibility/edit.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\avaibility\\edit.html.twig");
    }
}
