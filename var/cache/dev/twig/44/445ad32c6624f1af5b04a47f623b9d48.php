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

/* back/quiz/play.html.twig */
class __TwigTemplate_ac661fec0c993ce917a6dd0b0fce77f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/quiz/play.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/quiz/play.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/quiz/play.html.twig", 1);
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

        yield "Jouer au Quiz";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Jouer au Quiz</h1>

        ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        <!-- Section Questions -->
        <div id=\"questions\" class=\"mb-4\" data-prototype=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "questions", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "prototype", [], "any", false, false, false, 12), 'widget'), "html_attr");
        yield "\">
            <h3>Questions</h3>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "questions", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 15
            yield "                <div class=\"mb-2\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["question"], 'row');
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "            <button type=\"button\" class=\"btn btn-primary add-question\">Ajouter une question</button>
        </div>

        <!-- Section Options -->
        <div id=\"options\" class=\"mb-4\" data-prototype=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "options", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "prototype", [], "any", false, false, false, 21), 'widget'), "html_attr");
        yield "\">
            <h3>Options</h3>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "options", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 24
            yield "                <div class=\"mb-2\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["option"], 'row');
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "            <button type=\"button\" class=\"btn btn-primary add-option\">Ajouter une option</button>
        </div>

        <!-- Section Réponses Correctes -->
        <div id=\"reponsesCorrectes\" class=\"mb-4\" data-prototype=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "reponsesCorrectes", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "prototype", [], "any", false, false, false, 30), 'widget'), "html_attr");
        yield "\">
            <h3>Réponses Correctes</h3>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "reponsesCorrectes", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 33
            yield "                <div class=\"mb-2\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["reponse"], 'row');
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "            <button type=\"button\" class=\"btn btn-primary add-reponse-correcte\">Ajouter une réponse correcte</button>
        </div>

        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "cours", [], "any", false, false, false, 38), 'row');
        yield "

        <div class=\"text-center mt-4\">
            <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
        </div>

        ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        yield "
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fonction pour ajouter dynamiquement des champs
            function addField(containerId, buttonClass, numberOfFields) {
                const container = document.getElementById(containerId);
                const addButton = document.querySelector(`.\${buttonClass}`);
                const prototype = container.dataset.prototype;

                addButton.addEventListener('click', function() {
                    const index = container.children.length;
                    // Ajouter les nouveaux champs
                    for (let i = 0; i < numberOfFields; i++) {
                        const newField = prototype.replace(/__name__/g, index + i); // Remplacer __name__ par l'index
                        const newFieldElement = document.createElement('div');
                        newFieldElement.innerHTML = newField;
                        newFieldElement.classList.add('mb-3'); // Ajouter une marge Bootstrap
                        container.insertBefore(newFieldElement, addButton);
                    }
                });
            }

            // Ajouter des champs pour chaque section
            addField('questions', 'add-question', 1); // Ajoute une question
            addField('options', 'add-option', 3); // Ajoute trois options
            addField('reponsesCorrectes', 'add-reponse-correcte', 1); // Ajoute une réponse correcte
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
        return "back/quiz/play.html.twig";
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
        return array (  191 => 44,  182 => 38,  177 => 35,  168 => 33,  164 => 32,  159 => 30,  153 => 26,  144 => 24,  140 => 23,  135 => 21,  129 => 17,  120 => 15,  116 => 14,  111 => 12,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseB.html.twig' %}

{% block title %}Jouer au Quiz{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Jouer au Quiz</h1>

        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

        <!-- Section Questions -->
        <div id=\"questions\" class=\"mb-4\" data-prototype=\"{{ form_widget(form.questions.vars.prototype)|e('html_attr') }}\">
            <h3>Questions</h3>
            {% for question in form.questions %}
                <div class=\"mb-2\">{{ form_row(question) }}</div>
            {% endfor %}
            <button type=\"button\" class=\"btn btn-primary add-question\">Ajouter une question</button>
        </div>

        <!-- Section Options -->
        <div id=\"options\" class=\"mb-4\" data-prototype=\"{{ form_widget(form.options.vars.prototype)|e('html_attr') }}\">
            <h3>Options</h3>
            {% for option in form.options %}
                <div class=\"mb-2\">{{ form_row(option) }}</div>
            {% endfor %}
            <button type=\"button\" class=\"btn btn-primary add-option\">Ajouter une option</button>
        </div>

        <!-- Section Réponses Correctes -->
        <div id=\"reponsesCorrectes\" class=\"mb-4\" data-prototype=\"{{ form_widget(form.reponsesCorrectes.vars.prototype)|e('html_attr') }}\">
            <h3>Réponses Correctes</h3>
            {% for reponse in form.reponsesCorrectes %}
                <div class=\"mb-2\">{{ form_row(reponse) }}</div>
            {% endfor %}
            <button type=\"button\" class=\"btn btn-primary add-reponse-correcte\">Ajouter une réponse correcte</button>
        </div>

        {{ form_row(form.cours) }}

        <div class=\"text-center mt-4\">
            <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
        </div>

        {{ form_end(form) }}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fonction pour ajouter dynamiquement des champs
            function addField(containerId, buttonClass, numberOfFields) {
                const container = document.getElementById(containerId);
                const addButton = document.querySelector(`.\${buttonClass}`);
                const prototype = container.dataset.prototype;

                addButton.addEventListener('click', function() {
                    const index = container.children.length;
                    // Ajouter les nouveaux champs
                    for (let i = 0; i < numberOfFields; i++) {
                        const newField = prototype.replace(/__name__/g, index + i); // Remplacer __name__ par l'index
                        const newFieldElement = document.createElement('div');
                        newFieldElement.innerHTML = newField;
                        newFieldElement.classList.add('mb-3'); // Ajouter une marge Bootstrap
                        container.insertBefore(newFieldElement, addButton);
                    }
                });
            }

            // Ajouter des champs pour chaque section
            addField('questions', 'add-question', 1); // Ajoute une question
            addField('options', 'add-option', 3); // Ajoute trois options
            addField('reponsesCorrectes', 'add-reponse-correcte', 1); // Ajoute une réponse correcte
        });
    </script>
{% endblock %}
", "back/quiz/play.html.twig", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\back\\quiz\\play.html.twig");
    }
}
