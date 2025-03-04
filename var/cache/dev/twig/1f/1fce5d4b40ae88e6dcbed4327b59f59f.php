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

/* back/quiz/edit.html.twig */
class __TwigTemplate_e67ec32c412659d8c441451e00008291 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/quiz/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/quiz/edit.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/quiz/edit.html.twig", 1);
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Modifier le Quiz</h1>

        ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

        <!-- Section Quiz -->
        <div class=\"card mb-4 shadow\">
            <div class=\"card-header bg-primary text-white\">
                <h2 class=\"h5 mb-0\">Quiz</h2>
            </div>
            <div class=\"card-body\">
                <div class=\"mb-3\">
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "note", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Note"]);
        yield "
                    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "note", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control-plaintext bg-light p-2 border rounded", "readonly" => "readonly"]]);
        yield "
                </div>
                <div class=\"mb-3\">
                    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "prixPiece", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Prix par pièce"]);
        yield "
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prixPiece", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control-plaintext bg-light p-2 border rounded", "readonly" => "readonly"]]);
        yield "
                </div>
                <div class=\"mb-3\">
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "cours", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Cours associé"]);
        yield "
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "cours", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control-plaintext bg-light p-2 border rounded", "readonly" => "readonly"]]);
        yield "
                </div>
            </div>
        </div>

        <!-- Section Questions (en lecture seule, pour affichage seulement) -->
        <div class=\"card mb-4 shadow\">
            <div class=\"card-header bg-primary text-white\">
                <h2 class=\"h5 mb-0\">Questions</h2>
            </div>
            <div class=\"card-body\">
                ";
        // line 38
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 38, $this->source); })())) > 0)) {
            // line 39
            yield "                    <ul class=\"list-unstyled\">
                        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 41
                yield "                            <li class=\"mb-4 p-3 border rounded bg-light\">
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Question :</label>
                                    <input type=\"text\" class=\"form-control-plaintext bg-light p-2 border rounded\" value=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 44), "html", null, true);
                yield "\" readonly>
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Options :</label>
                                    <ul class=\"list-unstyled\">
                                        ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "options", [], "any", false, false, false, 49));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 50
                    yield "                                            <li>
                                                <input type=\"text\" class=\"form-control-plaintext bg-light p-2 border rounded mb-2\" value=\"";
                    // line 51
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                    yield "\" readonly>
                                            </li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                yield "                                    </ul>
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Réponse correcte :</label>
                                    <input type=\"text\" class=\"form-control-plaintext bg-light p-2 border rounded\" value=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "reponseCorrecte", [], "any", false, false, false, 58), "html", null, true);
                yield "\" readonly>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "                    </ul>
                ";
        } else {
            // line 64
            yield "                    <p class=\"text-muted\">Aucune question disponible.</p>
                ";
        }
        // line 66
        yield "            </div>
        </div>

        <!-- Bouton Enregistrer -->
        <div class=\"text-center\">
            <button type=\"submit\" class=\"btn btn-success btn-lg\">
                <i class=\"bi bi-save\"></i> Enregistrer les modifications
            </button>
        </div>

        ";
        // line 76
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
        yield "

        <!-- Bouton Retour -->
        <div class=\"text-center mt-3\">
            <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizb_index");
        yield "\" class=\"btn btn-secondary btn-lg\">
                <i class=\"bi bi-arrow-left\"></i> Retour à la liste
            </a>
        </div>
    </div>
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
        return "back/quiz/edit.html.twig";
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
        return array (  236 => 80,  229 => 76,  217 => 66,  213 => 64,  209 => 62,  199 => 58,  193 => 54,  184 => 51,  181 => 50,  177 => 49,  169 => 44,  164 => 41,  160 => 40,  157 => 39,  155 => 38,  141 => 27,  137 => 26,  131 => 23,  127 => 22,  121 => 19,  117 => 18,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseB.html.twig' %}

{% block title %}Modifier le Quiz{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Modifier le Quiz</h1>

        {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

        <!-- Section Quiz -->
        <div class=\"card mb-4 shadow\">
            <div class=\"card-header bg-primary text-white\">
                <h2 class=\"h5 mb-0\">Quiz</h2>
            </div>
            <div class=\"card-body\">
                <div class=\"mb-3\">
                    {{ form_label(form.note, 'Note', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.note, {'attr': {'class': 'form-control-plaintext bg-light p-2 border rounded', 'readonly': 'readonly'}}) }}
                </div>
                <div class=\"mb-3\">
                    {{ form_label(form.prixPiece, 'Prix par pièce', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.prixPiece, {'attr': {'class': 'form-control-plaintext bg-light p-2 border rounded', 'readonly': 'readonly'}}) }}
                </div>
                <div class=\"mb-3\">
                    {{ form_label(form.cours, 'Cours associé', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.cours, {'attr': {'class': 'form-control-plaintext bg-light p-2 border rounded', 'readonly': 'readonly'}}) }}
                </div>
            </div>
        </div>

        <!-- Section Questions (en lecture seule, pour affichage seulement) -->
        <div class=\"card mb-4 shadow\">
            <div class=\"card-header bg-primary text-white\">
                <h2 class=\"h5 mb-0\">Questions</h2>
            </div>
            <div class=\"card-body\">
                {% if questions|length > 0 %}
                    <ul class=\"list-unstyled\">
                        {% for question in questions %}
                            <li class=\"mb-4 p-3 border rounded bg-light\">
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Question :</label>
                                    <input type=\"text\" class=\"form-control-plaintext bg-light p-2 border rounded\" value=\"{{ question.question }}\" readonly>
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Options :</label>
                                    <ul class=\"list-unstyled\">
                                        {% for option in question.options %}
                                            <li>
                                                <input type=\"text\" class=\"form-control-plaintext bg-light p-2 border rounded mb-2\" value=\"{{ option }}\" readonly>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label fw-bold\">Réponse correcte :</label>
                                    <input type=\"text\" class=\"form-control-plaintext bg-light p-2 border rounded\" value=\"{{ question.reponseCorrecte }}\" readonly>
                                </div>
                            </li>
                        {% endfor %}
                    </ul>
                {% else %}
                    <p class=\"text-muted\">Aucune question disponible.</p>
                {% endif %}
            </div>
        </div>

        <!-- Bouton Enregistrer -->
        <div class=\"text-center\">
            <button type=\"submit\" class=\"btn btn-success btn-lg\">
                <i class=\"bi bi-save\"></i> Enregistrer les modifications
            </button>
        </div>

        {{ form_end(form) }}

        <!-- Bouton Retour -->
        <div class=\"text-center mt-3\">
            <a href=\"{{ path('app_quizb_index') }}\" class=\"btn btn-secondary btn-lg\">
                <i class=\"bi bi-arrow-left\"></i> Retour à la liste
            </a>
        </div>
    </div>
{% endblock %}", "back/quiz/edit.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\back\\quiz\\edit.html.twig");
    }
}
