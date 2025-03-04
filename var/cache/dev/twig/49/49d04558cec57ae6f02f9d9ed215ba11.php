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

/* event/_form.html.twig */
class __TwigTemplate_6794b2e650b5ea88b4112ecea487d6c2 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "forms-sample"]]);
        yield "

";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "errors", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 5
            yield "    <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 5), "html", null, true);
            yield "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 10
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "
<div class=\"form-group mb-4\">
    <label for=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "\" class=\"form-label\">
        <i class=\"fas fa-heading\"></i> Titre
    </label>
    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre de l'événement"]]);
        yield "
    <small class=\"text-danger\">";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), 'errors');
        yield "</small>
</div>

<div class=\"form-group mb-4\">
    <label for=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
        yield "\" class=\"form-label\">
        <i class=\"fas fa-align-left\"></i> Description
    </label>
    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
        yield "
    <small class=\"text-danger\">";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'errors');
        yield "</small>
</div>

<div class=\"form-group mb-4\">
    <label for=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32), "html", null, true);
        yield "\" class=\"form-label\">
        <i class=\"fas fa-calendar-alt\"></i> Date de l'événement
    </label>
    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "date", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    <small class=\"text-danger\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "date", [], "any", false, false, false, 36), 'errors');
        yield "</small>
</div>

<div class=\"form-group mb-4\">
    <label for=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "categoryevent", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), "html", null, true);
        yield "\" class=\"form-label\">
        <i class=\"fas fa-tags\"></i> Catégorie
    </label>
    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "categoryevent", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    <small class=\"text-danger\">";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "categoryevent", [], "any", false, false, false, 44), 'errors');
        yield "</small>
</div>

<div class=\"form-group mb-4\">
    <label for=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "photo", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
        yield "\" class=\"form-label\">
        <i class=\"fas fa-image\"></i> Photo de l'événement
    </label>
    ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "photo", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control-file"]]);
        yield "
    <small class=\"text-danger\">";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "photo", [], "any", false, false, false, 52), 'errors');
        yield "</small>

    ";
        // line 54
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "value", [], "any", false, false, false, 54), "photo", [], "any", false, false, false, 54)) {
            // line 55
            yield "        <div class=\"mt-3\">
            <p>Image actuelle :</p>
            <img src=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "vars", [], "any", false, false, false, 57), "value", [], "any", false, false, false, 57), "photo", [], "any", false, false, false, 57))), "html", null, true);
            yield "\" 
                 alt=\"Photo actuelle\" 
                 class=\"img-thumbnail rounded shadow\" 
                 width=\"200\">
        </div>
    ";
        }
        // line 63
        yield "</div>

<button type=\"submit\" class=\"btn btn-primary w-100 mt-3\" style=\"border-radius: 8px;\">
    <i class=\"fas fa-save\"></i> ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 66, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
</button>

";
        // line 69
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_end');
        yield "

<style>
    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        font-size: 1.1rem;
        color: #495057;
    }

    .form-control, .form-control-file {
        border-radius: 6px;
        border: 1px solid #ced4da;
        padding: 0.75rem 1rem;
        font-size: 1rem;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .form-control-file {
        padding: 0.375rem 0.75rem;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        font-size: 1rem;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .text-danger {
        font-size: 0.9rem;
        color: #dc3545;
    }

    .alert {
        margin-bottom: 1rem;
    }

    .img-thumbnail {
        border: 2px solid #ddd;
    }

    /* Améliorations supplémentaires */
    .btn-primary {
        border-radius: 6px;
        font-size: 1.2rem;
        padding: 12px 20px;
    }

    .form-control, .form-control-file {
        font-size: 1rem;
        border-radius: 8px;
        padding: 10px;
    }

    /* Espacement entre les sections */
    .form-group {
        margin-bottom: 2rem;
    }
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "event/_form.html.twig";
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
        return array (  206 => 69,  200 => 66,  195 => 63,  186 => 57,  182 => 55,  180 => 54,  175 => 52,  171 => 51,  165 => 48,  158 => 44,  154 => 43,  148 => 40,  141 => 36,  137 => 35,  131 => 32,  124 => 28,  120 => 27,  114 => 24,  107 => 20,  103 => 19,  97 => 16,  93 => 14,  78 => 11,  73 => 10,  69 => 9,  66 => 7,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'forms-sample'}}) }}

{# Affichage des erreurs globales du formulaire #}
{% for error in form.vars.errors %}
    <div class=\"alert alert-danger\">{{ error.message }}</div>
{% endfor %}

{# Affichage des messages flash #}
{% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }}\">{{ message }}</div>
    {% endfor %}
{% endfor %}

<div class=\"form-group mb-4\">
    <label for=\"{{ form.title.vars.id }}\" class=\"form-label\">
        <i class=\"fas fa-heading\"></i> Titre
    </label>
    {{ form_widget(form.title, {'attr': {'class': 'form-control', 'placeholder': 'Titre de l\\'événement'}}) }}
    <small class=\"text-danger\">{{ form_errors(form.title) }}</small>
</div>

<div class=\"form-group mb-4\">
    <label for=\"{{ form.description.vars.id }}\" class=\"form-label\">
        <i class=\"fas fa-align-left\"></i> Description
    </label>
    {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Description'}}) }}
    <small class=\"text-danger\">{{ form_errors(form.description) }}</small>
</div>

<div class=\"form-group mb-4\">
    <label for=\"{{ form.date.vars.id }}\" class=\"form-label\">
        <i class=\"fas fa-calendar-alt\"></i> Date de l'événement
    </label>
    {{ form_widget(form.date, {'attr': {'class': 'form-control'}}) }}
    <small class=\"text-danger\">{{ form_errors(form.date) }}</small>
</div>

<div class=\"form-group mb-4\">
    <label for=\"{{ form.categoryevent.vars.id }}\" class=\"form-label\">
        <i class=\"fas fa-tags\"></i> Catégorie
    </label>
    {{ form_widget(form.categoryevent, {'attr': {'class': 'form-control'}}) }}
    <small class=\"text-danger\">{{ form_errors(form.categoryevent) }}</small>
</div>

<div class=\"form-group mb-4\">
    <label for=\"{{ form.photo.vars.id }}\" class=\"form-label\">
        <i class=\"fas fa-image\"></i> Photo de l'événement
    </label>
    {{ form_widget(form.photo, {'attr': {'class': 'form-control-file'}}) }}
    <small class=\"text-danger\">{{ form_errors(form.photo) }}</small>

    {% if form.vars.value.photo %}
        <div class=\"mt-3\">
            <p>Image actuelle :</p>
            <img src=\"{{ asset('uploads/' ~ form.vars.value.photo) }}\" 
                 alt=\"Photo actuelle\" 
                 class=\"img-thumbnail rounded shadow\" 
                 width=\"200\">
        </div>
    {% endif %}
</div>

<button type=\"submit\" class=\"btn btn-primary w-100 mt-3\" style=\"border-radius: 8px;\">
    <i class=\"fas fa-save\"></i> {{ button_label|default('Enregistrer') }}
</button>

{{ form_end(form) }}

<style>
    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        font-size: 1.1rem;
        color: #495057;
    }

    .form-control, .form-control-file {
        border-radius: 6px;
        border: 1px solid #ced4da;
        padding: 0.75rem 1rem;
        font-size: 1rem;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .form-control-file {
        padding: 0.375rem 0.75rem;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        font-size: 1rem;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .text-danger {
        font-size: 0.9rem;
        color: #dc3545;
    }

    .alert {
        margin-bottom: 1rem;
    }

    .img-thumbnail {
        border: 2px solid #ddd;
    }

    /* Améliorations supplémentaires */
    .btn-primary {
        border-radius: 6px;
        font-size: 1.2rem;
        padding: 12px 20px;
    }

    .form-control, .form-control-file {
        font-size: 1rem;
        border-radius: 8px;
        padding: 10px;
    }

    /* Espacement entre les sections */
    .form-group {
        margin-bottom: 2rem;
    }
</style>
", "event/_form.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\event\\_form.html.twig");
    }
}
