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

/* question/new.html.twig */
class __TwigTemplate_6d0814145c473895934c0ee33b36db98 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/new.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Créer une nouvelle question";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div class=\"container\">
    <h1 class=\"my-4\">Créer une nouvelle question</h1>

    ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        yield "

    <!-- Champ pour la question -->
    <div class=\"form-group\">
        <label class=\"control-label\">Question :</label>
        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "question", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <!-- Champ pour la réponse correcte -->
    <div class=\"form-group\">
        <label class=\"control-label\">Réponse correcte :</label>
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "reponseCorrecte", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <!-- Section pour les options -->
    <div id=\"options-container\" class=\"my-4\">
        <h3>Options</h3>
        <ul class=\"options list-unstyled\" data-prototype=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "options", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "prototype", [], "any", false, false, false, 28), 'widget'), "html_attr");
        yield "\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "options", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 30
            yield "                <li class=\"option-block card mb-3\">
                    <div class=\"card-body\">
                        ";
            // line 32
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["option"], 'row', ["attr" => ["class" => "form-control"]]);
            yield "
                        <button type=\"button\" class=\"btn btn-danger remove-option\">Supprimer</button>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "        </ul>
        <button type=\"button\" id=\"add-option\" class=\"btn btn-primary\">Ajouter une option</button>
    </div>

    <!-- Bouton Enregistrer -->
    <div class=\"text-center mt-4\">
        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
    </div>

    ";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        yield "
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const optionsContainer = document.querySelector('ul.options');
        const addButton = document.getElementById('add-option');
        const prototype = optionsContainer.dataset.prototype;

        addButton.addEventListener('click', function() {
            const index = optionsContainer.children.length;
            let newOption = prototype.replace(/__name__/g, index);
            
            const newElement = document.createElement('li');
            newElement.classList.add('option-block', 'card', 'mb-3');
            newElement.innerHTML = `
                <div class=\"card-body\">
                    \${newOption}
                    <button type=\"button\" class=\"btn btn-danger remove-option\">Supprimer</button>
                </div>
            `;
            optionsContainer.appendChild(newElement);
        });

        optionsContainer.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-option')) {
                event.target.closest('.option-block').remove();
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
        return "question/new.html.twig";
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
        return array (  165 => 46,  154 => 37,  143 => 32,  139 => 30,  135 => 29,  131 => 28,  122 => 22,  113 => 16,  105 => 11,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/question/new.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Créer une nouvelle question{% endblock %}

{% block main %}
<div class=\"container\">
    <h1 class=\"my-4\">Créer une nouvelle question</h1>

    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

    <!-- Champ pour la question -->
    <div class=\"form-group\">
        <label class=\"control-label\">Question :</label>
        {{ form_widget(form.question, {'attr': {'class': 'form-control'}}) }}
    </div>

    <!-- Champ pour la réponse correcte -->
    <div class=\"form-group\">
        <label class=\"control-label\">Réponse correcte :</label>
        {{ form_widget(form.reponseCorrecte, {'attr': {'class': 'form-control'}}) }}
    </div>

    <!-- Section pour les options -->
    <div id=\"options-container\" class=\"my-4\">
        <h3>Options</h3>
        <ul class=\"options list-unstyled\" data-prototype=\"{{ form_widget(form.options.vars.prototype)|e('html_attr') }}\">
            {% for option in form.options %}
                <li class=\"option-block card mb-3\">
                    <div class=\"card-body\">
                        {{ form_row(option, {'attr': {'class': 'form-control'}}) }}
                        <button type=\"button\" class=\"btn btn-danger remove-option\">Supprimer</button>
                    </div>
                </li>
            {% endfor %}
        </ul>
        <button type=\"button\" id=\"add-option\" class=\"btn btn-primary\">Ajouter une option</button>
    </div>

    <!-- Bouton Enregistrer -->
    <div class=\"text-center mt-4\">
        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
    </div>

    {{ form_end(form) }}
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const optionsContainer = document.querySelector('ul.options');
        const addButton = document.getElementById('add-option');
        const prototype = optionsContainer.dataset.prototype;

        addButton.addEventListener('click', function() {
            const index = optionsContainer.children.length;
            let newOption = prototype.replace(/__name__/g, index);
            
            const newElement = document.createElement('li');
            newElement.classList.add('option-block', 'card', 'mb-3');
            newElement.innerHTML = `
                <div class=\"card-body\">
                    \${newOption}
                    <button type=\"button\" class=\"btn btn-danger remove-option\">Supprimer</button>
                </div>
            `;
            optionsContainer.appendChild(newElement);
        });

        optionsContainer.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-option')) {
                event.target.closest('.option-block').remove();
            }
        });
    });
</script>
{% endblock %}", "question/new.html.twig", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\question\\new.html.twig");
    }
}
