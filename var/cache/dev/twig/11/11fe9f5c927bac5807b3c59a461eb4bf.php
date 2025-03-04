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

/* back/quiz/stat.html.twig */
class __TwigTemplate_34f49b2288cf8600bccf0aef8ce665fe extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "baseB.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/quiz/stat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/quiz/stat.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/quiz/stat.html.twig", 2);
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

        yield "Statistiques des Quizzes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <!-- Styles spécifiques à cette page -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Inclure Chart.js via CDN -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
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

        // line 18
        yield "    <div class=\"container\">
        <h1 class=\"text-center mb-4\">Statistiques des Quizzes</h1>

        <!-- Afficher les statistiques globales -->
        <div class=\"alert alert-info text-center\">
            <strong>Taux de réussite global :</strong> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tauxReussite"]) || array_key_exists("tauxReussite", $context) ? $context["tauxReussite"] : (function () { throw new RuntimeError('Variable "tauxReussite" does not exist.', 23, $this->source); })()), 2), "html", null, true);
        yield "%
        </div>

        <div class=\"alert alert-danger text-center\">
            <strong>Taux d'échec global :</strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tauxEchec"]) || array_key_exists("tauxEchec", $context) ? $context["tauxEchec"] : (function () { throw new RuntimeError('Variable "tauxEchec" does not exist.', 27, $this->source); })()), 2), "html", null, true);
        yield "%
        </div>

        <!-- Diagramme en camembert -->
        <div class=\"text-center\" style=\"width: 300px; margin: 0 auto;\">
            <canvas id=\"quizStatsChart\" width=\"300\" height=\"300\"></canvas>
        </div>

        <!-- Détails des statistiques -->
        <div class=\"card mt-4\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Détails des statistiques</h5>
                <p class=\"card-text\">
                    <strong>Nombre total de quizzes :</strong> ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalQuiz"]) || array_key_exists("totalQuiz", $context) ? $context["totalQuiz"] : (function () { throw new RuntimeError('Variable "totalQuiz" does not exist.', 40, $this->source); })()), "html", null, true);
        yield "<br>
                    <strong>Quizzes réussis :</strong> ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quizReussis"]) || array_key_exists("quizReussis", $context) ? $context["quizReussis"] : (function () { throw new RuntimeError('Variable "quizReussis" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "<br>
                    <strong>Quizzes échoués :</strong> ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quizEchecs"]) || array_key_exists("quizEchecs", $context) ? $context["quizEchecs"] : (function () { throw new RuntimeError('Variable "quizEchecs" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "
                </p>
            </div>
        </div>

        <!-- Bouton pour retourner à la liste des quizzes -->
        <div class=\"text-center mt-4\">
            <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizb_index");
        yield "\" class=\"btn btn-primary\">
                <i class=\"bi bi-arrow-left\"></i> Retour à la liste
            </a>
        </div>
    </div>

    <!-- Script pour afficher le diagramme en camembert -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('quizStatsChart').getContext('2d');
            const quizStatsChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Réussite', 'Échec'],
                    datasets: [{
                        data: [";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tauxReussite"]) || array_key_exists("tauxReussite", $context) ? $context["tauxReussite"] : (function () { throw new RuntimeError('Variable "tauxReussite" does not exist.', 64, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tauxEchec"]) || array_key_exists("tauxEchec", $context) ? $context["tauxEchec"] : (function () { throw new RuntimeError('Variable "tauxEchec" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "],
                        backgroundColor: ['#36a2eb', '#ff6384'],
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // Désactive le maintien du ratio d'aspect
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.label + ': ' + context.raw + '%';
                                }
                            }
                        }
                    }
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
        return "back/quiz/stat.html.twig";
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
        return array (  225 => 64,  207 => 49,  197 => 42,  193 => 41,  189 => 40,  173 => 27,  166 => 23,  159 => 18,  146 => 17,  130 => 12,  117 => 11,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/quiz/statistiques.html.twig #}
{% extends 'baseB.html.twig' %}

{% block title %}Statistiques des Quizzes{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <!-- Styles spécifiques à cette page -->
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Inclure Chart.js via CDN -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"text-center mb-4\">Statistiques des Quizzes</h1>

        <!-- Afficher les statistiques globales -->
        <div class=\"alert alert-info text-center\">
            <strong>Taux de réussite global :</strong> {{ tauxReussite|number_format(2) }}%
        </div>

        <div class=\"alert alert-danger text-center\">
            <strong>Taux d'échec global :</strong> {{ tauxEchec|number_format(2) }}%
        </div>

        <!-- Diagramme en camembert -->
        <div class=\"text-center\" style=\"width: 300px; margin: 0 auto;\">
            <canvas id=\"quizStatsChart\" width=\"300\" height=\"300\"></canvas>
        </div>

        <!-- Détails des statistiques -->
        <div class=\"card mt-4\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Détails des statistiques</h5>
                <p class=\"card-text\">
                    <strong>Nombre total de quizzes :</strong> {{ totalQuiz }}<br>
                    <strong>Quizzes réussis :</strong> {{ quizReussis }}<br>
                    <strong>Quizzes échoués :</strong> {{ quizEchecs }}
                </p>
            </div>
        </div>

        <!-- Bouton pour retourner à la liste des quizzes -->
        <div class=\"text-center mt-4\">
            <a href=\"{{ path('app_quizb_index') }}\" class=\"btn btn-primary\">
                <i class=\"bi bi-arrow-left\"></i> Retour à la liste
            </a>
        </div>
    </div>

    <!-- Script pour afficher le diagramme en camembert -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('quizStatsChart').getContext('2d');
            const quizStatsChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Réussite', 'Échec'],
                    datasets: [{
                        data: [{{ tauxReussite }}, {{ tauxEchec }}],
                        backgroundColor: ['#36a2eb', '#ff6384'],
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // Désactive le maintien du ratio d'aspect
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.label + ': ' + context.raw + '%';
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
{% endblock %}", "back/quiz/stat.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\back\\quiz\\stat.html.twig");
    }
}
