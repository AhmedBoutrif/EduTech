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
class __TwigTemplate_eed3b6c966043c762f9c7c65d47b9351 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/edit.html.twig", 1);
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

        yield "Modifier le Quiz";
        
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
        yield "    <h1 class=\"text-center mb-4\">Modifier le Quiz</h1>

    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "errors", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 14
            yield "                    <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 14), "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "
                <!-- Section Quiz -->
                <div class=\"card mb-4 shadow\">
                    <div class=\"card-header bg-primary text-white\">
                        <h2 class=\"h5 mb-0\">Quiz</h2>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"mb-3\">
                            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "note", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Note"]);
        yield "
                            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "note", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "note", [], "any", false, false, false, 26), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "prixPiece", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prix par pièce"]);
        yield "
                            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "prixPiece", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "prixPiece", [], "any", false, false, false, 32), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "cours", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Cours associé"]);
        yield "
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "cours", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "cours", [], "any", false, false, false, 38), 'errors');
        yield "
                        </div>
                    </div>
                </div>

                <!-- Section Questions -->
                <div class=\"card mb-4 shadow\">
                    <div class=\"card-header bg-primary text-white\">
                        <h2 class=\"h5 mb-0\">Questions</h2>
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"list-unstyled\" id=\"questions-list\" data-prototype=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "questions", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "prototype", [], "any", false, false, false, 49), 'widget'), "html_attr");
        yield "\">
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "questions", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 51
            yield "                                <li class=\"mb-3\">
                                    ";
            // line 52
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["question"], 'widget', ["attr" => ["class" => "form-control mb-2"]]);
            yield "
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                        </ul>
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"add-question\">Ajouter une question</button>
                    </div>
                </div>

                <!-- Section Réponses Utilisateur -->
                <div class=\"card mb-4 shadow\">
                    <div class=\"card-header bg-primary text-white\">
                        <h2 class=\"h5 mb-0\">Réponses Utilisateur</h2>
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"list-unstyled\" id=\"reponses-list\" data-prototype=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "reponseUtilisateur", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "prototype", [], "any", false, false, false, 66), 'widget'), "html_attr");
        yield "\">
                            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "reponseUtilisateur", [], "any", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 68
            yield "                                <li class=\"mb-3\">
                                    ";
            // line 69
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["reponse"], 'widget', ["attr" => ["class" => "form-control mb-2"]]);
            yield "
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                        </ul>
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"add-reponse\">Ajouter une réponse</button>
                    </div>
                </div>

                <!-- Boutons -->
                <div class=\"d-flex justify-content-between mt-4\">
                    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                    <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>
                </div>

                ";
        // line 83
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
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

        // line 90
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ajouter une question
            document.getElementById('add-question').addEventListener('click', function() {
                const questionsList = document.getElementById('questions-list');
                const prototype = questionsList.dataset.prototype;
                const newForm = prototype.replace(/__name__/g, questionsList.children.length);
                const newFormLi = document.createElement('li');
                newFormLi.innerHTML = newForm;
                questionsList.appendChild(newFormLi);
            });

            // Ajouter une réponse
            document.getElementById('add-reponse').addEventListener('click', function() {
                const reponsesList = document.getElementById('reponses-list');
                const prototype = reponsesList.dataset.prototype;
                const newForm = prototype.replace(/__name__/g, reponsesList.children.length);
                const newFormLi = document.createElement('li');
                newFormLi.innerHTML = newForm;
                reponsesList.appendChild(newFormLi);
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
        return array (  286 => 90,  273 => 89,  257 => 83,  251 => 80,  241 => 72,  232 => 69,  229 => 68,  225 => 67,  221 => 66,  208 => 55,  199 => 52,  196 => 51,  192 => 50,  188 => 49,  174 => 38,  170 => 37,  166 => 36,  159 => 32,  155 => 31,  151 => 30,  144 => 26,  140 => 25,  136 => 24,  126 => 16,  117 => 14,  113 => 13,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le Quiz{% endblock %}

{% block main %}
    <h1 class=\"text-center mb-4\">Modifier le Quiz</h1>

    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

                {% for error in form.vars.errors %}
                    <div class=\"alert alert-danger\">{{ error.message }}</div>
                {% endfor %}

                <!-- Section Quiz -->
                <div class=\"card mb-4 shadow\">
                    <div class=\"card-header bg-primary text-white\">
                        <h2 class=\"h5 mb-0\">Quiz</h2>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"mb-3\">
                            {{ form_label(form.note, 'Note', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.note, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.note) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(form.prixPiece, 'Prix par pièce', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.prixPiece, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.prixPiece) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(form.cours, 'Cours associé', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.cours, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.cours) }}
                        </div>
                    </div>
                </div>

                <!-- Section Questions -->
                <div class=\"card mb-4 shadow\">
                    <div class=\"card-header bg-primary text-white\">
                        <h2 class=\"h5 mb-0\">Questions</h2>
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"list-unstyled\" id=\"questions-list\" data-prototype=\"{{ form_widget(form.questions.vars.prototype)|e('html_attr') }}\">
                            {% for question in form.questions %}
                                <li class=\"mb-3\">
                                    {{ form_widget(question, {'attr': {'class': 'form-control mb-2'}}) }}
                                </li>
                            {% endfor %}
                        </ul>
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"add-question\">Ajouter une question</button>
                    </div>
                </div>

                <!-- Section Réponses Utilisateur -->
                <div class=\"card mb-4 shadow\">
                    <div class=\"card-header bg-primary text-white\">
                        <h2 class=\"h5 mb-0\">Réponses Utilisateur</h2>
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"list-unstyled\" id=\"reponses-list\" data-prototype=\"{{ form_widget(form.reponseUtilisateur.vars.prototype)|e('html_attr') }}\">
                            {% for reponse in form.reponseUtilisateur %}
                                <li class=\"mb-3\">
                                    {{ form_widget(reponse, {'attr': {'class': 'form-control mb-2'}}) }}
                                </li>
                            {% endfor %}
                        </ul>
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"add-reponse\">Ajouter une réponse</button>
                    </div>
                </div>

                <!-- Boutons -->
                <div class=\"d-flex justify-content-between mt-4\">
                    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                    <a href=\"{{ path('app_quiz_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
                </div>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ajouter une question
            document.getElementById('add-question').addEventListener('click', function() {
                const questionsList = document.getElementById('questions-list');
                const prototype = questionsList.dataset.prototype;
                const newForm = prototype.replace(/__name__/g, questionsList.children.length);
                const newFormLi = document.createElement('li');
                newFormLi.innerHTML = newForm;
                questionsList.appendChild(newFormLi);
            });

            // Ajouter une réponse
            document.getElementById('add-reponse').addEventListener('click', function() {
                const reponsesList = document.getElementById('reponses-list');
                const prototype = reponsesList.dataset.prototype;
                const newForm = prototype.replace(/__name__/g, reponsesList.children.length);
                const newFormLi = document.createElement('li');
                newFormLi.innerHTML = newForm;
                reponsesList.appendChild(newFormLi);
            });
        });
    </script>
{% endblock %}", "quiz/edit.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\quiz\\edit.html.twig");
    }
}
