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

/* certificat/new.html.twig */
class __TwigTemplate_be37449f81486357d432cc5cec380d74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certificat/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certificat/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "certificat/new.html.twig", 1);
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

        yield "Créer un Certificat";
        
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
    <h1 class=\"my-4 text-center\">Créer un Certificat</h1>

    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        yield "

    <!-- Nom du certificat -->
    <div class=\"form-group\">
        <label class=\"control-label\">Nom du certificat :</label>
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nomc", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <!-- Description -->
    <div class=\"form-group\">
        <label class=\"control-label\">Description :</label>
        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "descriptionc", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <!-- Prix -->
    <div class=\"form-group\">
        <label class=\"control-label\">Prix :</label>
        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "prixc", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <!-- Prix par pièce -->
    <div class=\"form-group\">
        <label class=\"control-label\">Prix par pièce :</label>
        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "prix_piece", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <!-- Section Questions -->
    <div id=\"questions-container\" class=\"my-4\">
        <h3>Questions</h3>
        <div id=\"questions\" data-prototype=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "questionc", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "prototype", [], "any", false, false, false, 38), 'widget'), "html_attr");
        yield "\">
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "questionc", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 40
            yield "                <div class=\"question-block card mb-3\">
                    <div class=\"card-body\">
                        <div class=\"form-group\">
                            <label>Question :</label>
                            ";
            // line 44
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "label", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                        </div>

                        <div class=\"options-container form-group\">
                            <label>Options :</label>
                            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "options", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 50
                yield "                                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["option"], 'widget', ["attr" => ["class" => "form-control mb-2"]]);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "                        </div>

                        <div class=\"form-group\">
                            <label>Réponse correcte :</label>
                            ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "reponse_correcte", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                        </div>

                        <button type=\"button\" class=\"btn btn-danger remove-question\">Supprimer</button>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "        </div>
        <button type=\"button\" id=\"add-question\" class=\"btn btn-primary\">Ajouter une question</button>
    </div>

    <!-- Bouton de soumission -->
    <div class=\"text-center mt-4\">
        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
    </div>

    ";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        yield "
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const questionsContainer = document.getElementById('questions');
        const addButton = document.getElementById('add-question');
        const prototype = questionsContainer.dataset.prototype;

        addButton.addEventListener('click', function() {
            const index = questionsContainer.children.length;
            let newQuestion = prototype.replace(/__name__/g, index);
            
            const newElement = document.createElement('div');
            newElement.classList.add('question-block', 'card', 'mb-3');
            newElement.innerHTML = `
                <div class=\"card-body\">
                    <div class=\"form-group\">
                        <label>Question :</label>
                        \${newQuestion}
                    </div>
                    <div class=\"options-container form-group\">
                        <label>Options :</label>
                        <input type=\"text\" name=\"questionc[\${index}][options][]\" class=\"form-control mb-2\" required>
                        <input type=\"text\" name=\"questionc[\${index}][options][]\" class=\"form-control mb-2\" required>
                        <input type=\"text\" name=\"questionc[\${index}][options][]\" class=\"form-control mb-2\" required>
                    </div>
                    <div class=\"form-group\">
                        <label>Réponse correcte :</label>
                        <input type=\"text\" name=\"questionc[\${index}][reponse_correcte]\" class=\"form-control\" required>
                    </div>
                    <button type=\"button\" class=\"btn btn-danger remove-question\">Supprimer</button>
                </div>
            `;
            questionsContainer.appendChild(newElement);
        });

        questionsContainer.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-question')) {
                event.target.closest('.question-block').remove();
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
        return "certificat/new.html.twig";
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
        return array (  214 => 72,  203 => 63,  190 => 56,  184 => 52,  175 => 50,  171 => 49,  163 => 44,  157 => 40,  153 => 39,  149 => 38,  140 => 32,  131 => 26,  122 => 20,  113 => 14,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un Certificat{% endblock %}

{% block main %}
<div class=\"container\">
    <h1 class=\"my-4 text-center\">Créer un Certificat</h1>

    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

    <!-- Nom du certificat -->
    <div class=\"form-group\">
        <label class=\"control-label\">Nom du certificat :</label>
        {{ form_widget(form.nomc, {'attr': {'class': 'form-control'}}) }}
    </div>

    <!-- Description -->
    <div class=\"form-group\">
        <label class=\"control-label\">Description :</label>
        {{ form_widget(form.descriptionc, {'attr': {'class': 'form-control'}}) }}
    </div>

    <!-- Prix -->
    <div class=\"form-group\">
        <label class=\"control-label\">Prix :</label>
        {{ form_widget(form.prixc, {'attr': {'class': 'form-control'}}) }}
    </div>

    <!-- Prix par pièce -->
    <div class=\"form-group\">
        <label class=\"control-label\">Prix par pièce :</label>
        {{ form_widget(form.prix_piece, {'attr': {'class': 'form-control'}}) }}
    </div>

    <!-- Section Questions -->
    <div id=\"questions-container\" class=\"my-4\">
        <h3>Questions</h3>
        <div id=\"questions\" data-prototype=\"{{ form_widget(form.questionc.vars.prototype)|e('html_attr') }}\">
            {% for question in form.questionc %}
                <div class=\"question-block card mb-3\">
                    <div class=\"card-body\">
                        <div class=\"form-group\">
                            <label>Question :</label>
                            {{ form_widget(question.label, {'attr': {'class': 'form-control'}}) }}
                        </div>

                        <div class=\"options-container form-group\">
                            <label>Options :</label>
                            {% for option in question.options %}
                                {{ form_widget(option, {'attr': {'class': 'form-control mb-2'}}) }}
                            {% endfor %}
                        </div>

                        <div class=\"form-group\">
                            <label>Réponse correcte :</label>
                            {{ form_widget(question.reponse_correcte, {'attr': {'class': 'form-control'}}) }}
                        </div>

                        <button type=\"button\" class=\"btn btn-danger remove-question\">Supprimer</button>
                    </div>
                </div>
            {% endfor %}
        </div>
        <button type=\"button\" id=\"add-question\" class=\"btn btn-primary\">Ajouter une question</button>
    </div>

    <!-- Bouton de soumission -->
    <div class=\"text-center mt-4\">
        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
    </div>

    {{ form_end(form) }}
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const questionsContainer = document.getElementById('questions');
        const addButton = document.getElementById('add-question');
        const prototype = questionsContainer.dataset.prototype;

        addButton.addEventListener('click', function() {
            const index = questionsContainer.children.length;
            let newQuestion = prototype.replace(/__name__/g, index);
            
            const newElement = document.createElement('div');
            newElement.classList.add('question-block', 'card', 'mb-3');
            newElement.innerHTML = `
                <div class=\"card-body\">
                    <div class=\"form-group\">
                        <label>Question :</label>
                        \${newQuestion}
                    </div>
                    <div class=\"options-container form-group\">
                        <label>Options :</label>
                        <input type=\"text\" name=\"questionc[\${index}][options][]\" class=\"form-control mb-2\" required>
                        <input type=\"text\" name=\"questionc[\${index}][options][]\" class=\"form-control mb-2\" required>
                        <input type=\"text\" name=\"questionc[\${index}][options][]\" class=\"form-control mb-2\" required>
                    </div>
                    <div class=\"form-group\">
                        <label>Réponse correcte :</label>
                        <input type=\"text\" name=\"questionc[\${index}][reponse_correcte]\" class=\"form-control\" required>
                    </div>
                    <button type=\"button\" class=\"btn btn-danger remove-question\">Supprimer</button>
                </div>
            `;
            questionsContainer.appendChild(newElement);
        });

        questionsContainer.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-question')) {
                event.target.closest('.question-block').remove();
            }
        });
    });
</script>
{% endblock %}
", "certificat/new.html.twig", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\certificat\\new.html.twig");
    }
}
