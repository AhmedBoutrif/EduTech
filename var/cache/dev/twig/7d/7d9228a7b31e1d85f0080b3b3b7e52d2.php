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

/* quiz/edit.html.twig */
class __TwigTemplate_dd3f5fdd64427a1d5c6102e5f846c681 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/edit.html.twig", 3);
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

        yield "Modifier le Quiz";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Modifier le Quiz</h1>

        ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
            <h2>Quiz :</h2>
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "note", [], "any", false, false, false, 13), 'row');
        yield " <!-- Champ pour la note -->
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "prixPiece", [], "any", false, false, false, 14), 'row');
        yield " <!-- Champ pour le prix de la pièce -->
            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "cours", [], "any", false, false, false, 15), 'row');
        yield " <!-- Champ pour le cours associé -->

            <h2>Questions :</h2>
            <ul class=\"questions\" data-prototype=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "questions", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "prototype", [], "any", false, false, false, 18), 'widget'), "html_attr");
        yield "\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "questions", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 20
            yield "                    <li>
                        ";
            // line 21
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 21), 'row');
            yield " <!-- Champ pour la question -->
                        ";
            // line 22
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "options", [], "any", false, false, false, 22), 'row');
            yield " <!-- Champ pour les options -->
                        ";
            // line 23
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "reponseCorrecte", [], "any", false, false, false, 23), 'row');
            yield " <!-- Champ pour la réponse correcte -->
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "            </ul>

            <button type=\"submit\" class=\"btn btn-success\">Enregistrer les modifications</button>
        ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
        yield "

        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_index");
        yield "\" class=\"btn btn-secondary mt-3\">Retour à la liste</a>
    </div>

    ";
        // line 34
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const addQuestionButton = document.createElement('button');
                addQuestionButton.type = 'button';
                addQuestionButton.innerText = 'Ajouter une question';
                addQuestionButton.className = 'btn btn-primary';

                const questionList = document.querySelector('ul.questions');
                questionList.appendChild(addQuestionButton);

                addQuestionButton.addEventListener('click', function () {
                    const prototype = questionList.dataset.prototype;
                    const index = questionList.children.length - 1; // Soustraire le bouton
                    const newForm = prototype.replace(/__name__/g, index);
                    const newFormItem = document.createElement('li');
                    newFormItem.innerHTML = newForm;
                    questionList.insertBefore(newFormItem, addQuestionButton);
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
        return "quiz/edit.html.twig";
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
        return array (  192 => 35,  169 => 34,  163 => 31,  158 => 29,  153 => 26,  144 => 23,  140 => 22,  136 => 21,  133 => 20,  129 => 19,  125 => 18,  119 => 15,  115 => 14,  111 => 13,  106 => 11,  101 => 8,  88 => 7,  65 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/quiz/edit.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Modifier le Quiz{% endblock %}

{% block main %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Modifier le Quiz</h1>

        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
            <h2>Quiz :</h2>
            {{ form_row(form.note) }} <!-- Champ pour la note -->
            {{ form_row(form.prixPiece) }} <!-- Champ pour le prix de la pièce -->
            {{ form_row(form.cours) }} <!-- Champ pour le cours associé -->

            <h2>Questions :</h2>
            <ul class=\"questions\" data-prototype=\"{{ form_widget(form.questions.vars.prototype)|e('html_attr') }}\">
                {% for question in form.questions %}
                    <li>
                        {{ form_row(question.question) }} <!-- Champ pour la question -->
                        {{ form_row(question.options) }} <!-- Champ pour les options -->
                        {{ form_row(question.reponseCorrecte) }} <!-- Champ pour la réponse correcte -->
                    </li>
                {% endfor %}
            </ul>

            <button type=\"submit\" class=\"btn btn-success\">Enregistrer les modifications</button>
        {{ form_end(form) }}

        <a href=\"{{ path('app_quiz_index') }}\" class=\"btn btn-secondary mt-3\">Retour à la liste</a>
    </div>

    {% block javascripts %}
        {{ parent() }}
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const addQuestionButton = document.createElement('button');
                addQuestionButton.type = 'button';
                addQuestionButton.innerText = 'Ajouter une question';
                addQuestionButton.className = 'btn btn-primary';

                const questionList = document.querySelector('ul.questions');
                questionList.appendChild(addQuestionButton);

                addQuestionButton.addEventListener('click', function () {
                    const prototype = questionList.dataset.prototype;
                    const index = questionList.children.length - 1; // Soustraire le bouton
                    const newForm = prototype.replace(/__name__/g, index);
                    const newFormItem = document.createElement('li');
                    newFormItem.innerHTML = newForm;
                    questionList.insertBefore(newFormItem, addQuestionButton);
                });
            });
        </script>
    {% endblock %}
{% endblock %}", "quiz/edit.html.twig", "C:\\Users\\User\\Desktop\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\quiz\\edit.html.twig");
    }
}
