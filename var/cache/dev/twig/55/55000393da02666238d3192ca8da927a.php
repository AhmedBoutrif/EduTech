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

/* back/quiz/show.html.twig */
class __TwigTemplate_36fea4f6eab1324fc68c689f0c4bf6b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/quiz/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/quiz/show.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/quiz/show.html.twig", 1);
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

        yield "Détails du Quiz";
        
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
        yield "    <div class=\"container mt-4\">
        <div class=\"card mx-auto\" style=\"max-width: 80%;\">
            <div class=\"card-header text-center\">
                <h2>Détails du Quiz</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"font-weight-bold\">Note : ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 12, $this->source); })()), "note", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>

                <h3 class=\"mt-4\">Questions :</h3>
                <ul class=\"list-group\">
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 16, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 17
            yield "                        <li class=\"list-group-item\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["question"], "html", null, true);
            yield "</li>
                    ";
            $context['_iterated'] = true;
        }
        // line 18
        if (!$context['_iterated']) {
            // line 19
            yield "                        <li class=\"list-group-item\">Aucune question disponible</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "                </ul>

                <h3 class=\"mt-4\">Options :</h3>
                <ul class=\"list-group\">
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 26
            yield "                        <li class=\"list-group-item\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "</li>
                    ";
            $context['_iterated'] = true;
        }
        // line 27
        if (!$context['_iterated']) {
            // line 28
            yield "                        <li class=\"list-group-item\">Aucune option disponible</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "                </ul>

                <h3 class=\"mt-4\">Réponses Correctes :</h3>
                <ul class=\"list-group\">
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reponsesCorrectes"]) || array_key_exists("reponsesCorrectes", $context) ? $context["reponsesCorrectes"] : (function () { throw new RuntimeError('Variable "reponsesCorrectes" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 35
            yield "                        <li class=\"list-group-item\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["reponse"], "html", null, true);
            yield "</li>
                    ";
            $context['_iterated'] = true;
        }
        // line 36
        if (!$context['_iterated']) {
            // line 37
            yield "                        <li class=\"list-group-item\">Aucune réponse correcte disponible</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "                </ul>

                <h3 class=\"mt-4\">Réponses Utilisateur :</h3>
                <ul class=\"list-group\">
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reponsesUtilisateur"]) || array_key_exists("reponsesUtilisateur", $context) ? $context["reponsesUtilisateur"] : (function () { throw new RuntimeError('Variable "reponsesUtilisateur" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 44
            yield "                        <li class=\"list-group-item\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["reponse"], "html", null, true);
            yield "</li>
                    ";
            $context['_iterated'] = true;
        }
        // line 45
        if (!$context['_iterated']) {
            // line 46
            yield "                        <li class=\"list-group-item\">Aucune réponse utilisateur disponible</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                </ul>

                <div class=\"text-center mt-4\">
                    <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizb_index");
        yield "\" class=\"btn btn-primary\">Retour à la liste</a>
                </div>
            </div>
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
        return "back/quiz/show.html.twig";
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
        return array (  222 => 51,  217 => 48,  210 => 46,  208 => 45,  201 => 44,  196 => 43,  190 => 39,  183 => 37,  181 => 36,  174 => 35,  169 => 34,  163 => 30,  156 => 28,  154 => 27,  147 => 26,  142 => 25,  136 => 21,  129 => 19,  127 => 18,  120 => 17,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseB.html.twig' %}

{% block title %}Détails du Quiz{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <div class=\"card mx-auto\" style=\"max-width: 80%;\">
            <div class=\"card-header text-center\">
                <h2>Détails du Quiz</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"font-weight-bold\">Note : {{ quiz.note }}</p>

                <h3 class=\"mt-4\">Questions :</h3>
                <ul class=\"list-group\">
                    {% for question in questions %}
                        <li class=\"list-group-item\">{{ question }}</li>
                    {% else %}
                        <li class=\"list-group-item\">Aucune question disponible</li>
                    {% endfor %}
                </ul>

                <h3 class=\"mt-4\">Options :</h3>
                <ul class=\"list-group\">
                    {% for option in options %}
                        <li class=\"list-group-item\">{{ option }}</li>
                    {% else %}
                        <li class=\"list-group-item\">Aucune option disponible</li>
                    {% endfor %}
                </ul>

                <h3 class=\"mt-4\">Réponses Correctes :</h3>
                <ul class=\"list-group\">
                    {% for reponse in reponsesCorrectes %}
                        <li class=\"list-group-item\">{{ reponse }}</li>
                    {% else %}
                        <li class=\"list-group-item\">Aucune réponse correcte disponible</li>
                    {% endfor %}
                </ul>

                <h3 class=\"mt-4\">Réponses Utilisateur :</h3>
                <ul class=\"list-group\">
                    {% for reponse in reponsesUtilisateur %}
                        <li class=\"list-group-item\">{{ reponse }}</li>
                    {% else %}
                        <li class=\"list-group-item\">Aucune réponse utilisateur disponible</li>
                    {% endfor %}
                </ul>

                <div class=\"text-center mt-4\">
                    <a href=\"{{ path('app_quizb_index') }}\" class=\"btn btn-primary\">Retour à la liste</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "back/quiz/show.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\back\\quiz\\show.html.twig");
    }
}
