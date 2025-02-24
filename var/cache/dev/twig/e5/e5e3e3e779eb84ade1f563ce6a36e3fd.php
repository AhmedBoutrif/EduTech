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

/* back/certificat/new.html.twig */
class __TwigTemplate_c380da60864aedaadce1714f37be0b39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/certificat/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/certificat/new.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/certificat/new.html.twig", 1);
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container\">
    <h1 class=\"my-4\">Créer un Certificat</h1>

    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        yield "

    <div class=\"form-group\">
        <label class=\"control-label\">Nom du certificat :</label>
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nomc", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <div class=\"form-group\">
        <label class=\"control-label\">Description :</label>
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "descriptionc", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <div class=\"form-group\">
        <label class=\"control-label\">Prix :</label>
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prixc", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <div class=\"form-group\">
        <label class=\"control-label\">Prix par pièce :</label>
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prix_piece", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    ";
        // line 32
        yield "    <div id=\"questions-container\" class=\"my-4\">
        <h3>Questions</h3>
        <div id=\"questions\" data-prototype=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "questionc", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "prototype", [], "any", false, false, false, 34), 'widget'), "html_attr");
        yield "\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "questionc", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 36
            yield "                <div class=\"question-block card mb-3\">
                    <div class=\"card-body\">
                        <div class=\"form-group\">
                            <label>Question :</label>
                            ";
            // line 40
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "label", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                        </div>

                        <div class=\"options-container form-group\">
                            <label>Options :</label>
                            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "options", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 46
                yield "                                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["option"], 'widget', ["attr" => ["class" => "form-control mb-2"]]);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "                        </div>

                        <div class=\"form-group\">
                            <label>Réponse correcte :</label>
                            ";
            // line 52
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "reponse_correcte", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 59
        yield "        </div>
        <button type=\"button\" id=\"add-question\" class=\"btn btn-primary\">Ajouter une question</button>
    </div>

    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>

    ";
        // line 65
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
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
        return "back/certificat/new.html.twig";
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
        return array (  208 => 65,  200 => 59,  187 => 52,  181 => 48,  172 => 46,  168 => 45,  160 => 40,  154 => 36,  150 => 35,  146 => 34,  142 => 32,  136 => 28,  128 => 23,  120 => 18,  112 => 13,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseB.html.twig' %}

{% block title %}Créer un Certificat{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"my-4\">Créer un Certificat</h1>

    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

    <div class=\"form-group\">
        <label class=\"control-label\">Nom du certificat :</label>
        {{ form_widget(form.nomc, {'attr': {'class': 'form-control'}}) }}
    </div>

    <div class=\"form-group\">
        <label class=\"control-label\">Description :</label>
        {{ form_widget(form.descriptionc, {'attr': {'class': 'form-control'}}) }}
    </div>

    <div class=\"form-group\">
        <label class=\"control-label\">Prix :</label>
        {{ form_widget(form.prixc, {'attr': {'class': 'form-control'}}) }}
    </div>

    <div class=\"form-group\">
        <label class=\"control-label\">Prix par pièce :</label>
        {{ form_widget(form.prix_piece, {'attr': {'class': 'form-control'}}) }}
    </div>

    {# Section pour les questions avec options et réponses #}
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

    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>

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
{% endblock %}", "back/certificat/new.html.twig", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\back\\certificat\\new.html.twig");
    }
}
