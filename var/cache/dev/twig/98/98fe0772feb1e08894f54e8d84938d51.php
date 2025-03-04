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
class __TwigTemplate_1c7dc66e9545e9f00c34af2386d6b8f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/new.html.twig", 1);
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

        yield "Créer une nouvelle question";
        
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
        yield "<div class=\"container\">
    <h1 class=\"my-4\">Créer une nouvelle question</h1>

    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal", "novalidate" => "novalidate"]]);
        yield "

    <!-- Champ pour la question -->
    <div class=\"form-group\">
        <label class=\"control-label\">Question :</label>
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "question", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
        <div class=\"invalid-feedback text-danger\">
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "question", [], "any", false, false, false, 16), 'errors');
        yield "
        </div>
    </div>

    <!-- Champ pour la réponse correcte -->
    <div class=\"form-group\">
        <label class=\"control-label\">Réponse correcte :</label>
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "reponseCorrecte", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
        <div class=\"invalid-feedback text-danger\">
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "reponseCorrecte", [], "any", false, false, false, 25), 'errors');
        yield "
        </div>
    </div>

    <!-- Section pour les options -->
    <div id=\"options-container\" class=\"my-4\">
        <h3>Options</h3>
        <ul class=\"options list-unstyled\">
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "options", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 34
            yield "                <li class=\"option-block card mb-3\">
                    <div class=\"card-body\">
                        ";
            // line 36
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["option"], 'row', ["attr" => ["class" => "form-control", "required" => "required"]]);
            yield "
                        <button type=\"button\" class=\"btn btn-danger remove-option\">Supprimer</button>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "        </ul>
        <button type=\"button\" id=\"add-option\" class=\"btn btn-primary\">Ajouter une option</button>
        <button type=\"button\" id=\"check-answer\" class=\"btn btn-info\">Vérifier la réponse</button>
    </div>

    <!-- Champ pour le quiz -->
    <div class=\"form-group\">
        <label class=\"control-label\">Quiz :</label>
        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "quiz", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <div class=\"invalid-feedback text-danger\">
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "quiz", [], "any", false, false, false, 51), 'errors');
        yield "
        </div>
    </div>

    <!-- Champ pour le certificat -->
    <div class=\"form-group\">
        <label class=\"control-label\">Certificat :</label>
        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "certification", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <div class=\"invalid-feedback text-danger\">
            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "certification", [], "any", false, false, false, 60), 'errors');
        yield "
        </div>
    </div>

    <!-- Bouton Enregistrer -->
    <div class=\"text-center mt-4\">
        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
    </div>

    ";
        // line 69
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_end');
        yield "
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const optionsContainer = document.querySelector('ul.options');
        const addButton = document.getElementById('add-option');
        const checkAnswerButton = document.getElementById('check-answer');
        const form = document.querySelector('form');

        // Ajouter une option
        addButton.addEventListener('click', function() {
            const newOption = document.createElement('li');
            newOption.classList.add('option-block', 'card', 'mb-3');
            newOption.innerHTML = `
                <div class=\"card-body\">
                    <input type=\"text\" class=\"form-control\" name=\"question[options][]\" required />
                    <button type=\"button\" class=\"btn btn-danger remove-option\">Supprimer</button>
                </div>
            `;
            optionsContainer.appendChild(newOption);
        });

        // Supprimer une option
        optionsContainer.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-option')) {
                event.target.closest('.option-block').remove();
            }
        });

        // Vérifier si la réponse correcte appartient aux options
        checkAnswerButton.addEventListener('click', function() {
            const reponseCorrecteInput = document.querySelector('#question_reponseCorrecte');
            const options = Array.from(optionsContainer.querySelectorAll('input[type=\"text\"]')).map(input => input.value.trim());
            const reponseCorrecte = reponseCorrecteInput.value.trim();

            if (options.includes(reponseCorrecte)) {
                alert('La réponse correcte est valide.');
            } else {
                alert('La réponse correcte ne correspond à aucune option.');
            }
        });

        // Validation du formulaire avant la soumission
        form.addEventListener('submit', function(event) {
            let isValid = true;

            // Vérifier que la question ne commence pas par un nombre
            const questionInput = document.querySelector('#question_question');
            if (/^\\d/.test(questionInput.value.trim())) {
                isValid = false;
                questionInput.classList.add('is-invalid');
                document.querySelector('#question_question + .invalid-feedback').textContent = 'La question ne doit pas commencer par un nombre.';
            } else {
                questionInput.classList.remove('is-invalid');
            }

            // Vérifier que quiz ou certificat est rempli
            const quizInput = document.querySelector('#question_quiz');
            const certificationInput = document.querySelector('#question_certification');
            if (!quizInput.value && !certificationInput.value) {
                isValid = false;
                quizInput.classList.add('is-invalid');
                certificationInput.classList.add('is-invalid');
                document.querySelector('#question_quiz + .invalid-feedback').textContent = 'Vous devez choisir un quiz ou un certificat.';
                document.querySelector('#question_certification + .invalid-feedback').textContent = 'Vous devez choisir un quiz ou un certificat.';
            } else {
                quizInput.classList.remove('is-invalid');
                certificationInput.classList.remove('is-invalid');
            }

            // Vérifier qu'il y a au moins une option
            if (optionsContainer.children.length === 0) {
                isValid = false;
                alert('Il faut au moins une option.');
            }

            // Empêcher la soumission si le formulaire est invalide
            if (!isValid) {
                event.preventDefault();
                event.stopPropagation();
            }

            // Ajouter la classe was-validated pour afficher les messages d'erreur
            form.classList.add('was-validated');
        }, false);
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
        return array (  205 => 69,  193 => 60,  188 => 58,  178 => 51,  173 => 49,  163 => 41,  152 => 36,  148 => 34,  144 => 33,  133 => 25,  128 => 23,  118 => 16,  113 => 14,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer une nouvelle question{% endblock %}

{% block main %}
<div class=\"container\">
    <h1 class=\"my-4\">Créer une nouvelle question</h1>

    {{ form_start(form, {'attr': {'class': 'form-horizontal', 'novalidate': 'novalidate'}}) }}

    <!-- Champ pour la question -->
    <div class=\"form-group\">
        <label class=\"control-label\">Question :</label>
        {{ form_widget(form.question, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
        <div class=\"invalid-feedback text-danger\">
            {{ form_errors(form.question) }}
        </div>
    </div>

    <!-- Champ pour la réponse correcte -->
    <div class=\"form-group\">
        <label class=\"control-label\">Réponse correcte :</label>
        {{ form_widget(form.reponseCorrecte, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
        <div class=\"invalid-feedback text-danger\">
            {{ form_errors(form.reponseCorrecte) }}
        </div>
    </div>

    <!-- Section pour les options -->
    <div id=\"options-container\" class=\"my-4\">
        <h3>Options</h3>
        <ul class=\"options list-unstyled\">
            {% for option in form.options %}
                <li class=\"option-block card mb-3\">
                    <div class=\"card-body\">
                        {{ form_row(option, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                        <button type=\"button\" class=\"btn btn-danger remove-option\">Supprimer</button>
                    </div>
                </li>
            {% endfor %}
        </ul>
        <button type=\"button\" id=\"add-option\" class=\"btn btn-primary\">Ajouter une option</button>
        <button type=\"button\" id=\"check-answer\" class=\"btn btn-info\">Vérifier la réponse</button>
    </div>

    <!-- Champ pour le quiz -->
    <div class=\"form-group\">
        <label class=\"control-label\">Quiz :</label>
        {{ form_widget(form.quiz, {'attr': {'class': 'form-control'}}) }}
        <div class=\"invalid-feedback text-danger\">
            {{ form_errors(form.quiz) }}
        </div>
    </div>

    <!-- Champ pour le certificat -->
    <div class=\"form-group\">
        <label class=\"control-label\">Certificat :</label>
        {{ form_widget(form.certification, {'attr': {'class': 'form-control'}}) }}
        <div class=\"invalid-feedback text-danger\">
            {{ form_errors(form.certification) }}
        </div>
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
        const checkAnswerButton = document.getElementById('check-answer');
        const form = document.querySelector('form');

        // Ajouter une option
        addButton.addEventListener('click', function() {
            const newOption = document.createElement('li');
            newOption.classList.add('option-block', 'card', 'mb-3');
            newOption.innerHTML = `
                <div class=\"card-body\">
                    <input type=\"text\" class=\"form-control\" name=\"question[options][]\" required />
                    <button type=\"button\" class=\"btn btn-danger remove-option\">Supprimer</button>
                </div>
            `;
            optionsContainer.appendChild(newOption);
        });

        // Supprimer une option
        optionsContainer.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-option')) {
                event.target.closest('.option-block').remove();
            }
        });

        // Vérifier si la réponse correcte appartient aux options
        checkAnswerButton.addEventListener('click', function() {
            const reponseCorrecteInput = document.querySelector('#question_reponseCorrecte');
            const options = Array.from(optionsContainer.querySelectorAll('input[type=\"text\"]')).map(input => input.value.trim());
            const reponseCorrecte = reponseCorrecteInput.value.trim();

            if (options.includes(reponseCorrecte)) {
                alert('La réponse correcte est valide.');
            } else {
                alert('La réponse correcte ne correspond à aucune option.');
            }
        });

        // Validation du formulaire avant la soumission
        form.addEventListener('submit', function(event) {
            let isValid = true;

            // Vérifier que la question ne commence pas par un nombre
            const questionInput = document.querySelector('#question_question');
            if (/^\\d/.test(questionInput.value.trim())) {
                isValid = false;
                questionInput.classList.add('is-invalid');
                document.querySelector('#question_question + .invalid-feedback').textContent = 'La question ne doit pas commencer par un nombre.';
            } else {
                questionInput.classList.remove('is-invalid');
            }

            // Vérifier que quiz ou certificat est rempli
            const quizInput = document.querySelector('#question_quiz');
            const certificationInput = document.querySelector('#question_certification');
            if (!quizInput.value && !certificationInput.value) {
                isValid = false;
                quizInput.classList.add('is-invalid');
                certificationInput.classList.add('is-invalid');
                document.querySelector('#question_quiz + .invalid-feedback').textContent = 'Vous devez choisir un quiz ou un certificat.';
                document.querySelector('#question_certification + .invalid-feedback').textContent = 'Vous devez choisir un quiz ou un certificat.';
            } else {
                quizInput.classList.remove('is-invalid');
                certificationInput.classList.remove('is-invalid');
            }

            // Vérifier qu'il y a au moins une option
            if (optionsContainer.children.length === 0) {
                isValid = false;
                alert('Il faut au moins une option.');
            }

            // Empêcher la soumission si le formulaire est invalide
            if (!isValid) {
                event.preventDefault();
                event.stopPropagation();
            }

            // Ajouter la classe was-validated pour afficher les messages d'erreur
            form.classList.add('was-validated');
        }, false);
    });
</script>
{% endblock %}", "question/new.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\question\\new.html.twig");
    }
}
