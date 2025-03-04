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

/* back/reservation/new.html.twig */
class __TwigTemplate_db71381cbbce4f69aade7861d95a7ab9 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseB.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/reservation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/reservation/new.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/reservation/new.html.twig", 1);
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

        yield "Nouvelle Réservation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "   
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Créer une nouvelle réservation</h1>
        
        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
        
        <div class=\"mb-3\">
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "topic", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Sujet "]);
        yield "
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "topic", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control", "id" => "topicInput", "maxlength" => "255", "oninput" => "updateCharCount()"]]);
        // line 21
        yield "   
      
            <p id=\"charCount\" class=\"text-muted\">0 / 255</p>
            
            ";
        // line 26
        yield "            ";
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

      

      ";
        // line 39
        yield "
             <div class=\"mb-3\">
    <label for=\"reservation_date\" class=\"form-label\">Date</label>
    <input type=\"text\" id=\"reservation_date\" class=\"form-control\" 
           value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 43, $this->source); })()), "avaibility", [], "any", false, false, false, 43), "date", [], "any", false, false, false, 43), "Y-m-d"), "html", null, true);
        yield "\" disabled>
</div>


    <div class=\"mb-3\">
        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "hour", [], "any", false, false, false, 48), 'label');
        yield "
        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "hour", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "hour", [], "any", false, false, false, 50), 'errors');
        yield "
    </div>

       <div class=\"mb-3\">
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "duration", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Durée (minutes)"]);
        yield "
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "duration", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "id" => "durationInput"]]);
        // line 60
        yield "
            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "duration", [], "any", false, false, false, 61), 'errors');
        yield "
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        ";
        // line 65
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        yield "
    </div>

    ";
        // line 69
        yield "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>

    <script>
        // Initialize Flatpickr for start_time and end_time fields
      ";
        // line 75
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    const timePicker = document.querySelector('.time-picker');
    if (timePicker) {
        // You can use flatpickr or any other time picker library
        flatpickr(timePicker, {
            enableTime: true,
            noCalendar: true,
            dateFormat: \"H:i\",
            time_24hr: true,
            minuteIncrement: 15
        });
    }
});



        // Character count for topic input
        function updateCharCount() {
            var inputField = document.getElementById(\"topicInput\");
            var charCount = inputField.value.length;
            var maxLength = inputField.getAttribute(\"maxlength\");
            var charCountElement = document.getElementById(\"charCount\");

            charCountElement.innerText = charCount + \" / \" + maxLength;

            // Change color if less than 20 characters
            if (charCount < 20) {
                charCountElement.style.color = \"red\"; // Show warning color
            } else {
                charCountElement.style.color = \"green\"; // Valid input
            }
        }


document.addEventListener(\"DOMContentLoaded\", function () {
    let hourInput = document.getElementById(\"reservation_hour\");
    hourInput.setAttribute(\"min\", \"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "hour", [], "any", false, false, false, 112), "vars", [], "any", false, false, false, 112), "attr", [], "any", false, false, false, 112), "min", [], "any", false, false, false, 112), "html", null, true);
        yield "\");
    hourInput.setAttribute(\"max\", \"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "hour", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "attr", [], "any", false, false, false, 113), "max", [], "any", false, false, false, 113), "html", null, true);
        yield "\");
});


        // Ensure it updates even after form validation errors
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
        return "back/reservation/new.html.twig";
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
        return array (  243 => 113,  239 => 112,  200 => 75,  193 => 69,  187 => 65,  180 => 61,  177 => 60,  175 => 55,  171 => 54,  164 => 50,  160 => 49,  156 => 48,  148 => 43,  142 => 39,  133 => 29,  127 => 27,  124 => 26,  118 => 21,  116 => 14,  112 => 13,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseB.html.twig' %}

{% block title %}Nouvelle Réservation{% endblock %}

{% block body %}
   
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Créer une nouvelle réservation</h1>
        
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
            
            {# Show error message from Symfony validator #}
            {% if form.topic.vars.errors|length > 0 %}
                <p class=\"text-danger\">{{ form_errors(form.topic) }}</p>
            {% endif %}
            {{ form_errors(form.topic) }}
        </div>

      

      {#  <div class=\"mb-3\">
            {{ form_label(form.start_time, \"Heure de début\", {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.start_time, {'attr': {'class': 'form-control flatpickr', 'placeholder': 'Sélectionnez la date et l\\'heure de début'}}) }}
            {{ form_errors(form.start_time) }}
        </div> #}

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

        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        {{ form_end(form) }}
    </div>

    {# Include Flatpickr CSS and JS #}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>

    <script>
        // Initialize Flatpickr for start_time and end_time fields
      {# In your template #}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const timePicker = document.querySelector('.time-picker');
    if (timePicker) {
        // You can use flatpickr or any other time picker library
        flatpickr(timePicker, {
            enableTime: true,
            noCalendar: true,
            dateFormat: \"H:i\",
            time_24hr: true,
            minuteIncrement: 15
        });
    }
});



        // Character count for topic input
        function updateCharCount() {
            var inputField = document.getElementById(\"topicInput\");
            var charCount = inputField.value.length;
            var maxLength = inputField.getAttribute(\"maxlength\");
            var charCountElement = document.getElementById(\"charCount\");

            charCountElement.innerText = charCount + \" / \" + maxLength;

            // Change color if less than 20 characters
            if (charCount < 20) {
                charCountElement.style.color = \"red\"; // Show warning color
            } else {
                charCountElement.style.color = \"green\"; // Valid input
            }
        }


document.addEventListener(\"DOMContentLoaded\", function () {
    let hourInput = document.getElementById(\"reservation_hour\");
    hourInput.setAttribute(\"min\", \"{{ form.hour.vars.attr.min }}\");
    hourInput.setAttribute(\"max\", \"{{ form.hour.vars.attr.max }}\");
});


        // Ensure it updates even after form validation errors
        document.addEventListener(\"DOMContentLoaded\", function() {
            updateCharCount();
            document.getElementById(\"topicInput\").addEventListener(\"input\", updateCharCount);
        });
    </script>
{% endblock %}", "back/reservation/new.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\back\\reservation\\new.html.twig");
    }
}
