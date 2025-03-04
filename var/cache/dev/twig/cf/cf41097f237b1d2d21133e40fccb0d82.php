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

/* reservation/edit.html.twig */
class __TwigTemplate_07be358e55c0a234c369402b9c0459d5 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/edit.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Modifier la Réservation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "   
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Modifier la réservation</h1>
        
        ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
        
        <div class=\"mb-3\">
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "topic", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Sujet "]);
        yield "
            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "topic", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "id" => "topicInput", "maxlength" => "255", "oninput" => "updateCharCount()"]]);
        // line 22
        yield "   
      
            <p id=\"charCount\" class=\"text-muted\">0 / 255</p>
            
            ";
        // line 26
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "topic", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "errors", [], "any", false, false, false, 26)) > 0)) {
            // line 27
            yield "                <p class=\"text-danger\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "topic", [], "any", false, false, false, 27), 'errors');
            yield "</p>
            ";
        }
        // line 29
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "topic", [], "any", false, false, false, 29), 'errors');
        yield "
        </div>

       <div class=\"mb-3\">
    <label for=\"reservation_date\" class=\"form-label\">Date</label>
    <input type=\"text\" id=\"reservation_date\" class=\"form-control\" 
           value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 35, $this->source); })()), "avaibility", [], "any", false, false, false, 35), "date", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true);
        yield "\" disabled>
</div>


        <div class=\"mb-3\">
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "hour", [], "any", false, false, false, 40), 'label');
        yield "
            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "hour", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "hour", [], "any", false, false, false, 42), 'errors');
        yield "
        </div>

        <div class=\"mb-3\">
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "duration", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Durée (minutes)"]);
        yield "
            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "duration", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "id" => "durationInput"]]);
        // line 52
        yield "
            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "duration", [], "any", false, false, false, 53), 'errors');
        yield "
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
        <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"btn btn-secondary\">Retour</a>
        ";
        // line 58
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        yield "
    </div>

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const timePicker = document.querySelector('.time-picker');
            if (timePicker) {
                flatpickr(timePicker, {
                    enableTime: true,
                    noCalendar: true,
                    dateFormat: \"H:i\",
                    time_24hr: true,
                    minuteIncrement: 15
                     defaultDate: \"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 74, $this->source); })()), "startTime", [], "any", false, false, false, 74), "H:i"), "html", null, true);
        yield "\" 
                      defaultHour: ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 75, $this->source); })()), "startTime", [], "any", false, false, false, 75), "G"), "html", null, true);
        yield ", 
                    defaultMinute: ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 76, $this->source); })()), "startTime", [], "any", false, false, false, 76), "i"), "html", null, true);
        yield "
                });
            }
        });

        function updateCharCount() {
            var inputField = document.getElementById(\"topicInput\");
            var charCount = inputField.value.length;
            var maxLength = inputField.getAttribute(\"maxlength\");
            var charCountElement = document.getElementById(\"charCount\");

            charCountElement.innerText = charCount + \" / \" + maxLength;

            if (charCount < 20) {
                charCountElement.style.color = \"red\";
            } else {
                charCountElement.style.color = \"green\";
            }
        }

        document.addEventListener(\"DOMContentLoaded\", function () {
            let hourInput = document.getElementById(\"reservation_hour\");
            hourInput.setAttribute(\"min\", \"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "hour", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "attr", [], "any", false, false, false, 98), "min", [], "any", false, false, false, 98), "html", null, true);
        yield "\");
            hourInput.setAttribute(\"max\", \"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "hour", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "attr", [], "any", false, false, false, 99), "max", [], "any", false, false, false, 99), "html", null, true);
        yield "\");
        });

        document.addEventListener(\"DOMContentLoaded\", function() {
            updateCharCount();
            document.getElementById(\"topicInput\").addEventListener(\"input\", updateCharCount);
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
        return "reservation/edit.html.twig";
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
        return array (  241 => 99,  237 => 98,  212 => 76,  208 => 75,  204 => 74,  185 => 58,  181 => 57,  174 => 53,  171 => 52,  169 => 47,  165 => 46,  158 => 42,  154 => 41,  150 => 40,  142 => 35,  132 => 29,  126 => 27,  124 => 26,  118 => 22,  116 => 15,  112 => 14,  106 => 11,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/reservation/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Modifier la Réservation{% endblock %}

{% block main %}
   
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Modifier la réservation</h1>
        
        {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
        
        <div class=\"mb-3\">
            {{ form_label(form.topic, 'Sujet ', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.topic, {
                'attr': {
                    'class': 'form-control',
                    'id': 'topicInput',
                    'maxlength': '255',
                    'oninput': 'updateCharCount()'
                }
            }) }}   
      
            <p id=\"charCount\" class=\"text-muted\">0 / 255</p>
            
            {% if form.topic.vars.errors|length > 0 %}
                <p class=\"text-danger\">{{ form_errors(form.topic) }}</p>
            {% endif %}
            {{ form_errors(form.topic) }}
        </div>

       <div class=\"mb-3\">
    <label for=\"reservation_date\" class=\"form-label\">Date</label>
    <input type=\"text\" id=\"reservation_date\" class=\"form-control\" 
           value=\"{{ reservation.avaibility.date|date('Y-m-d') }}\" disabled>
</div>


        <div class=\"mb-3\">
            {{ form_label(form.hour) }}
            {{ form_widget(form.hour, { 'attr': {'class': 'form-control'} }) }}
            {{ form_errors(form.hour) }}
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.duration, \"Durée (minutes)\", {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.duration, {
                'attr': {
                    'class': 'form-control',
                    'id': 'durationInput'
                }
            }) }}
            {{ form_errors(form.duration) }}
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
        <a href=\"{{ path('app_reservation_index') }}\" class=\"btn btn-secondary\">Retour</a>
        {{ form_end(form) }}
    </div>

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const timePicker = document.querySelector('.time-picker');
            if (timePicker) {
                flatpickr(timePicker, {
                    enableTime: true,
                    noCalendar: true,
                    dateFormat: \"H:i\",
                    time_24hr: true,
                    minuteIncrement: 15
                     defaultDate: \"{{ reservation.startTime|date('H:i') }}\" 
                      defaultHour: {{ reservation.startTime|date('G') }}, 
                    defaultMinute: {{ reservation.startTime|date('i') }}
                });
            }
        });

        function updateCharCount() {
            var inputField = document.getElementById(\"topicInput\");
            var charCount = inputField.value.length;
            var maxLength = inputField.getAttribute(\"maxlength\");
            var charCountElement = document.getElementById(\"charCount\");

            charCountElement.innerText = charCount + \" / \" + maxLength;

            if (charCount < 20) {
                charCountElement.style.color = \"red\";
            } else {
                charCountElement.style.color = \"green\";
            }
        }

        document.addEventListener(\"DOMContentLoaded\", function () {
            let hourInput = document.getElementById(\"reservation_hour\");
            hourInput.setAttribute(\"min\", \"{{ form.hour.vars.attr.min }}\");
            hourInput.setAttribute(\"max\", \"{{ form.hour.vars.attr.max }}\");
        });

        document.addEventListener(\"DOMContentLoaded\", function() {
            updateCharCount();
            document.getElementById(\"topicInput\").addEventListener(\"input\", updateCharCount);
        });
    </script>
{% endblock %}
", "reservation/edit.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\reservation\\edit.html.twig");
    }
}
