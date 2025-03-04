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

/* back/event/_form.html.twig */
class __TwigTemplate_89b5507cdcb6f5a55ecf47f25ea26445 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/event/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/event/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

    ";
        // line 4
        yield "    <div class=\"form-group mb-3\">
        ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Title"]);
        yield "
        ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <div class=\"invalid-feedback\">
            Please enter a title.
        </div>
    </div>

    ";
        // line 13
        yield "    <div class=\"form-group mb-3\">
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "rows" => "5"]]);
        yield "
        <div class=\"invalid-feedback\">
            Please enter a description.
        </div>
    </div>

    ";
        // line 22
        yield "    <div class=\"form-group mb-3\">
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "date", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date"]);
        yield "
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "date", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <div class=\"invalid-feedback\">
            Please enter a valid date.
        </div>
    </div>

    ";
        // line 31
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "categoryevent", [], "any", true, true, false, 31)) {
            // line 32
            yield "        <div class=\"form-group mb-3\">
            ";
            // line 33
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "categoryevent", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Category"]);
            yield "
            ";
            // line 34
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "categoryevent", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
            <div class=\"invalid-feedback\">
                Please select a category.
            </div>
        </div>
    ";
        }
        // line 40
        yield "
    ";
        // line 42
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", true, true, false, 42)) {
            // line 43
            yield "        <div class=\"form-group mb-3\">
            ";
            // line 44
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "photo", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Photo"]);
            yield "
            ";
            // line 45
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "photo", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
            <div class=\"invalid-feedback\">
                Please upload a photo.
            </div>
        </div>
    ";
        }
        // line 51
        yield "
    ";
        // line 53
        yield "    <div class=\"form-group text-center\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 54, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
    </div>

";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/event/_form.html.twig";
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
        return array (  154 => 57,  148 => 54,  145 => 53,  142 => 51,  133 => 45,  129 => 44,  126 => 43,  123 => 42,  120 => 40,  111 => 34,  107 => 33,  104 => 32,  101 => 31,  92 => 24,  88 => 23,  85 => 22,  76 => 15,  72 => 14,  69 => 13,  60 => 6,  56 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

    {# Champ pour le titre #}
    <div class=\"form-group mb-3\">
        {{ form_label(form.title, 'Title', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
        <div class=\"invalid-feedback\">
            Please enter a title.
        </div>
    </div>

    {# Champ pour la description #}
    <div class=\"form-group mb-3\">
        {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': '5'}}) }}
        <div class=\"invalid-feedback\">
            Please enter a description.
        </div>
    </div>

    {# Champ pour la date #}
    <div class=\"form-group mb-3\">
        {{ form_label(form.date, 'Date', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.date, {'attr': {'class': 'form-control'}}) }}
        <div class=\"invalid-feedback\">
            Please enter a valid date.
        </div>
    </div>

    {# Champ pour la catégorie (si applicable) #}
    {% if form.categoryevent is defined %}
        <div class=\"form-group mb-3\">
            {{ form_label(form.categoryevent, 'Category', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.categoryevent, {'attr': {'class': 'form-control'}}) }}
            <div class=\"invalid-feedback\">
                Please select a category.
            </div>
        </div>
    {% endif %}

    {# Champ pour la photo (si applicable) #}
    {% if form.photo is defined %}
        <div class=\"form-group mb-3\">
            {{ form_label(form.photo, 'Photo', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.photo, {'attr': {'class': 'form-control'}}) }}
            <div class=\"invalid-feedback\">
                Please upload a photo.
            </div>
        </div>
    {% endif %}

    {# Bouton de soumission #}
    <div class=\"form-group text-center\">
        <button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
    </div>

{{ form_end(form) }}", "back/event/_form.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\back\\event\\_form.html.twig");
    }
}
