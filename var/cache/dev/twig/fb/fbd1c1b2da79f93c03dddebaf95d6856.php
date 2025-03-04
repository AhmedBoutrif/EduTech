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

/* reservation/new.html.twig */
class __TwigTemplate_2ed6127498050976b08f0506a517abe1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/new.html.twig", 1);
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
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        yield "   
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Créer une nouvelle réservation</h1>
         ";
        // line 10
        yield "        
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "topic", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "id" => " reservation_topic", "maxlength" => "255"]]);
        // line 21
        yield "   
            <p id=\"charCount\" class=\"text-muted\">0 / 255</p>
            ";
        // line 23
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "topic", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "errors", [], "any", false, false, false, 23)) > 0)) {
            // line 24
            yield "                <p class=\"text-danger\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "topic", [], "any", false, false, false, 24), 'errors');
            yield "</p>
            ";
        }
        // line 26
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "topic", [], "any", false, false, false, 26), 'errors');
        yield "
        </div>

      

      ";
        // line 36
        yield "
             <div class=\"mb-3\">
    <label for=\"reservation_date\" class=\"form-label\">Date</label>
    <input type=\"text\" id=\"reservation_date\" class=\"form-control\" 
           value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 40, $this->source); })()), "avaibility", [], "any", false, false, false, 40), "date", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true);
        yield "\" disabled>
</div>


    <div class=\"mb-3\">
        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "hour", [], "any", false, false, false, 45), 'label');
        yield "
        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "hour", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "hour", [], "any", false, false, false, 47), 'errors');
        yield "
    </div>

       <div class=\"mb-3\">
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "duration", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Durée (minutes)"]);
        yield "
            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "duration", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "id" => "durationInput"]]);
        // line 57
        yield "
            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "duration", [], "any", false, false, false, 58), 'errors');
        yield "
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        ";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        yield "
    </div>

    ";
        // line 66
        yield "   
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>

    <script>
       document.addEventListener('DOMContentLoaded', function() {
    // Wait for the DOM to be fully loaded
    const inputField = document.getElementById(\"reservation_topic\");
    const charCountElement = document.getElementById(\"charCount\");

    if (inputField && charCountElement) {
        console.log(\"Input field and character count element found!\");
if (charCountElement)
        function updateCharCount() {
            const charCount = inputField.value.length;
            const maxLength = inputField.getAttribute(\"maxlength\");
            charCountElement.innerText = `\${charCount} / \${maxLength}`;

        console.log(`Current char count: \${charCount}`);
            
         if (charCount < 20 || charCount === 255) {
    console.log(\"🔴 Text color should be RED\");
    charCountElement.style.color = \"red\";
    charCountElement.style.setProperty(\"color\", \"red\", \"important\");

} else if (charCount >= 200 && charCount < 255) {
    console.log(\"🟠 Text color should be ORANGE\");
    charCountElement.style.color = \"orange\";
    charCountElement.style.setProperty(\"color\", \"orange\", \"important\");

} else {
    console.log(\"🟢 Text color should be GREEN\");
    charCountElement.style.color = \"green\";
    charCountElement.style.setProperty(\"color\", \"green\", \"important\");
}



        }

        // Update the count when the user types
        inputField.addEventListener(\"input\", updateCharCount);

        // Initialize the count when the page loads
        updateCharCount();
    } else {
        console.error(\"Input field or character count element not found!\");
        console.log(\"Input field:\", inputField);
        console.log(\"Character count element:\", charCountElement);
    }
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
        return "reservation/new.html.twig";
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
        return array (  192 => 66,  186 => 62,  179 => 58,  176 => 57,  174 => 52,  170 => 51,  163 => 47,  159 => 46,  155 => 45,  147 => 40,  141 => 36,  132 => 26,  126 => 24,  124 => 23,  120 => 21,  118 => 15,  114 => 14,  108 => 11,  105 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Réservation{% endblock %}

{% block main %}
   
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Créer une nouvelle réservation</h1>
         {# Debugging: Check if the \"topic\" field exists #}
        
        {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
        
        <div class=\"mb-3\">
            {{ form_label(form.topic, 'Sujet ', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.topic, {
                'attr': {
                    'class': 'form-control',
                    'id': ' reservation_topic',
                    'maxlength': '255',
                }
            }) }}   
            <p id=\"charCount\" class=\"text-muted\">0 / 255</p>
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
       document.addEventListener('DOMContentLoaded', function() {
    // Wait for the DOM to be fully loaded
    const inputField = document.getElementById(\"reservation_topic\");
    const charCountElement = document.getElementById(\"charCount\");

    if (inputField && charCountElement) {
        console.log(\"Input field and character count element found!\");
if (charCountElement)
        function updateCharCount() {
            const charCount = inputField.value.length;
            const maxLength = inputField.getAttribute(\"maxlength\");
            charCountElement.innerText = `\${charCount} / \${maxLength}`;

        console.log(`Current char count: \${charCount}`);
            
         if (charCount < 20 || charCount === 255) {
    console.log(\"🔴 Text color should be RED\");
    charCountElement.style.color = \"red\";
    charCountElement.style.setProperty(\"color\", \"red\", \"important\");

} else if (charCount >= 200 && charCount < 255) {
    console.log(\"🟠 Text color should be ORANGE\");
    charCountElement.style.color = \"orange\";
    charCountElement.style.setProperty(\"color\", \"orange\", \"important\");

} else {
    console.log(\"🟢 Text color should be GREEN\");
    charCountElement.style.color = \"green\";
    charCountElement.style.setProperty(\"color\", \"green\", \"important\");
}



        }

        // Update the count when the user types
        inputField.addEventListener(\"input\", updateCharCount);

        // Initialize the count when the page loads
        updateCharCount();
    } else {
        console.error(\"Input field or character count element not found!\");
        console.log(\"Input field:\", inputField);
        console.log(\"Character count element:\", charCountElement);
    }
});
    </script>
{% endblock %}", "reservation/new.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\reservation\\new.html.twig");
    }
}
