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

/* back/certificat/show.html.twig */
class __TwigTemplate_9eb7fae6e86cef6f04a588512798fd11 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/certificat/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/certificat/show.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/certificat/show.html.twig", 1);
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

        yield "Certificat";
        
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
        yield "    <h1>Certificat</h1>

    <form method=\"post\" action=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificat_new");
        yield "\">
        ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        yield "

        <!-- Affichage du titre du certificat -->
        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nomc", [], "any", false, false, false, 12), 'row');
        yield "

        <!-- Conteneur des questions -->
        <div id=\"questions-container\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "questionc", [], "any", false, false, false, 16));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 17
            yield "                <div class=\"question-item\" data-question-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 17), "html", null, true);
            yield "\">
                    ";
            // line 18
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["question"], 'row');
            yield "
                    <div class=\"options-container\">
                        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "options", [], "any", false, false, false, 20), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 20), [], "array", false, false, false, 20));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 21
                yield "                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["option"], 'row');
                yield "
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "                    </div>
                    <button type=\"button\" class=\"btn btn-secondary add-option\">Ajouter une option</button>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "            <button type=\"button\" id=\"add-question\" class=\"btn btn-primary\">Ajouter une question</button>
        </div>

        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "reponse_correcte", [], "any", false, false, false, 30), 'row');
        yield "
        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "reponse_utilisateur", [], "any", false, false, false, 31), 'row');
        yield "
        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "submit", [], "any", false, false, false, 32), 'row');
        yield "

        ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
        yield "
    </form>

    <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificat_index");
        yield "\">Retour à la liste</a>
    <a href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificat_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["certificat"]) || array_key_exists("certificat", $context) ? $context["certificat"] : (function () { throw new RuntimeError('Variable "certificat" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\">Modifier</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
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

        // line 42
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let questionCount = document.querySelectorAll('.question-item').length;

            document.getElementById('add-question').addEventListener('click', function() {
                questionCount++;
                const questionsContainer = document.getElementById('questions-container');

                const questionDiv = document.createElement('div');
                questionDiv.classList.add('question-item');
                questionDiv.setAttribute('data-question-id', questionCount);
                questionDiv.innerHTML = `
                    <input type=\"text\" name=\"certificat[questionc][\${questionCount}]\" placeholder=\"Entrez une nouvelle question\" class=\"form-control\">
                    <div class=\"options-container\">
                        <input type=\"text\" name=\"certificat[options][\${questionCount}][]\" placeholder=\"Option 1\" class=\"form-control\">
                        <input type=\"text\" name=\"certificat[options][\${questionCount}][]\" placeholder=\"Option 2\" class=\"form-control\">
                        <input type=\"text\" name=\"certificat[options][\${questionCount}][]\" placeholder=\"Option 3\" class=\"form-control\">
                    </div>
                    <button type=\"button\" class=\"btn btn-secondary add-option\">Ajouter une option</button>
                `;
                questionsContainer.appendChild(questionDiv);
            });

            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('add-option')) {
                    const questionDiv = event.target.closest('.question-item');
                    const optionsContainer = questionDiv.querySelector('.options-container');
                    const optionInput = document.createElement('input');
                    optionInput.type = 'text';
                    optionInput.name = `certificat[options][\${questionDiv.getAttribute('data-question-id')}][]`;
                    optionInput.placeholder = 'Nouvelle option';
                    optionInput.classList.add('form-control');
                    optionsContainer.appendChild(optionInput);
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
        return "back/certificat/show.html.twig";
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
        return array (  254 => 42,  241 => 41,  228 => 38,  224 => 37,  218 => 34,  213 => 32,  209 => 31,  205 => 30,  200 => 27,  183 => 23,  166 => 21,  149 => 20,  144 => 18,  139 => 17,  122 => 16,  115 => 12,  109 => 9,  105 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseB.html.twig' %}

{% block title %}Certificat{% endblock %}

{% block body %}
    <h1>Certificat</h1>

    <form method=\"post\" action=\"{{ path('app_certificat_new') }}\">
        {{ form_start(form) }}

        <!-- Affichage du titre du certificat -->
        {{ form_row(form.nomc) }}

        <!-- Conteneur des questions -->
        <div id=\"questions-container\">
            {% for question in form.questionc %}
                <div class=\"question-item\" data-question-id=\"{{ loop.index }}\">
                    {{ form_row(question) }}
                    <div class=\"options-container\">
                        {% for option in form.options[loop.index0] %}
                            {{ form_row(option) }}
                        {% endfor %}
                    </div>
                    <button type=\"button\" class=\"btn btn-secondary add-option\">Ajouter une option</button>
                </div>
            {% endfor %}
            <button type=\"button\" id=\"add-question\" class=\"btn btn-primary\">Ajouter une question</button>
        </div>

        {{ form_row(form.reponse_correcte) }}
        {{ form_row(form.reponse_utilisateur) }}
        {{ form_row(form.submit) }}

        {{ form_end(form) }}
    </form>

    <a href=\"{{ path('app_certificat_index') }}\">Retour à la liste</a>
    <a href=\"{{ path('app_certificat_edit', {'id': certificat.id}) }}\">Modifier</a>
{% endblock %}

{% block javascripts %}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let questionCount = document.querySelectorAll('.question-item').length;

            document.getElementById('add-question').addEventListener('click', function() {
                questionCount++;
                const questionsContainer = document.getElementById('questions-container');

                const questionDiv = document.createElement('div');
                questionDiv.classList.add('question-item');
                questionDiv.setAttribute('data-question-id', questionCount);
                questionDiv.innerHTML = `
                    <input type=\"text\" name=\"certificat[questionc][\${questionCount}]\" placeholder=\"Entrez une nouvelle question\" class=\"form-control\">
                    <div class=\"options-container\">
                        <input type=\"text\" name=\"certificat[options][\${questionCount}][]\" placeholder=\"Option 1\" class=\"form-control\">
                        <input type=\"text\" name=\"certificat[options][\${questionCount}][]\" placeholder=\"Option 2\" class=\"form-control\">
                        <input type=\"text\" name=\"certificat[options][\${questionCount}][]\" placeholder=\"Option 3\" class=\"form-control\">
                    </div>
                    <button type=\"button\" class=\"btn btn-secondary add-option\">Ajouter une option</button>
                `;
                questionsContainer.appendChild(questionDiv);
            });

            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('add-option')) {
                    const questionDiv = event.target.closest('.question-item');
                    const optionsContainer = questionDiv.querySelector('.options-container');
                    const optionInput = document.createElement('input');
                    optionInput.type = 'text';
                    optionInput.name = `certificat[options][\${questionDiv.getAttribute('data-question-id')}][]`;
                    optionInput.placeholder = 'Nouvelle option';
                    optionInput.classList.add('form-control');
                    optionsContainer.appendChild(optionInput);
                }
            });
        });
    </script>
{% endblock %}
", "back/certificat/show.html.twig", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\back\\certificat\\show.html.twig");
    }
}
