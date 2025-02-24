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

/* quiz/new.html.twig */
class __TwigTemplate_f791ee218edd113ddaf9b23d6000f2e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/new.html.twig", 2);
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

        yield "Ajouter un Quiz";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Jouer au Quiz</h1>
        
        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        <!-- Section Questions -->
        <div id=\"questions\" class=\"mb-4\" data-prototype=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "questions", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "prototype", [], "any", false, false, false, 13), 'widget'), "html_attr");
        yield "\">
            <h3>Questions</h3>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "questions", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 16
            yield "                <div class=\"mb-2\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["question"], 'row');
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "            <button type=\"button\" class=\"btn btn-primary add-question\">Ajouter une question</button>
        </div>
        
        <!-- Section Options -->
        <div id=\"options\" class=\"mb-4\" data-prototype=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "options", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "prototype", [], "any", false, false, false, 22), 'widget'), "html_attr");
        yield "\">
            <h3>Options</h3>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "options", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 25
            yield "                <div class=\"mb-2\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["option"], 'row');
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "            <button type=\"button\" class=\"btn btn-primary add-option\">Ajouter une option</button>
        </div>
        
        <!-- Section Réponses Correctes -->
        <div id=\"reponsesCorrectes\" class=\"mb-4\" data-prototype=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "reponsesCorrectes", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "prototype", [], "any", false, false, false, 31), 'widget'), "html_attr");
        yield "\">
            <h3>Réponses Correctes</h3>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "reponsesCorrectes", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 34
            yield "                <div class=\"mb-2\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["reponse"], 'row');
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "            <button type=\"button\" class=\"btn btn-primary add-reponse-correcte\">Ajouter une réponse correcte</button>
        </div>
        
      
        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "cours", [], "any", false, false, false, 40), 'row');
        yield "
        
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

            // Ajout de 3 champs pour chaque clic sur \"Ajouter une option\"
            addField('options', 'add-option', 3);
            addField('questions', 'add-question', 1); // Gardez 1 champ pour les questions
            addField('reponsesCorrectes', 'add-reponse-correcte', 1); // Gardez 1 champ pour les réponses correctes
            addField('reponsesUtilisateur', 'add-reponse-utilisateur', 1); // Gardez 1 champ pour les réponses utilisateur
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
        return "quiz/new.html.twig";
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
        return array (  192 => 46,  183 => 40,  177 => 36,  168 => 34,  164 => 33,  159 => 31,  153 => 27,  144 => 25,  140 => 24,  135 => 22,  129 => 18,  120 => 16,  116 => 15,  111 => 13,  105 => 10,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Ajouter un Quiz{% endblock %}

{% block main %}
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

            // Ajout de 3 champs pour chaque clic sur \"Ajouter une option\"
            addField('options', 'add-option', 3);
            addField('questions', 'add-question', 1); // Gardez 1 champ pour les questions
            addField('reponsesCorrectes', 'add-reponse-correcte', 1); // Gardez 1 champ pour les réponses correctes
            addField('reponsesUtilisateur', 'add-reponse-utilisateur', 1); // Gardez 1 champ pour les réponses utilisateur
        });
    </script>
{% endblock %}", "quiz/new.html.twig", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\quiz\\new.html.twig");
    }
}
