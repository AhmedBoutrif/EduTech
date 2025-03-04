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

/* quiz/index.html.twig */
class __TwigTemplate_e95d6e78b18c296222719e9c2045a2a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/index.html.twig", 2);
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

        yield "Index des Quizzes";
        
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
        yield "    <div class=\"container\">
        <h1 class=\"text-center mb-4\">Index des Quizzes</h1>

        <!-- Bouton pour afficher les statistiques globales -->
        <div class=\"text-center mb-4\">
            <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_statistiques");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"bi bi-bar-chart\"></i> Voir les statistiques globales
            </a>
        </div>

        <!-- Tableau des quizzes -->
        <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover mx-auto\" style=\"max-width: 90%;\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th>ID</th>
                        <th>Note</th>
                        <th>Questions</th>
                        <th>Options</th>
                        <th>Réponses Utilisateur</th>
                        <th>PrixPiece</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["quizzes"]) || array_key_exists("quizzes", $context) ? $context["quizzes"] : (function () { throw new RuntimeError('Variable "quizzes" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 33
            yield "                        <tr>
                            <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                            <td>";
            // line 35
            yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "note", [], "any", false, false, false, 35))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "note", [], "any", false, false, false, 35), "html", null, true)) : ("Non noté"));
            yield "</td>
                            <td>
                                ";
            // line 37
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "questions", [], "any", false, false, false, 37)) > 0)) {
                // line 38
                yield "                                    <ul class=\"list-unstyled\">
                                        ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "questions", [], "any", false, false, false, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                    // line 40
                    yield "                                            <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 40), "html", null, true);
                    yield "</li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                yield "                                    </ul>
                                ";
            } else {
                // line 44
                yield "                                    <p>Aucune question disponible.</p>
                                ";
            }
            // line 46
            yield "                            </td>
                            <td>
                                ";
            // line 48
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "questions", [], "any", false, false, false, 48)) > 0)) {
                // line 49
                yield "                                    <ul class=\"list-unstyled\">
                                        ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "questions", [], "any", false, false, false, 50));
                foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                    // line 51
                    yield "                                            <li>
                                                ";
                    // line 52
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 52), "html", null, true);
                    yield " :
                                                <ul>
                                                    ";
                    // line 54
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "options", [], "any", false, false, false, 54));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 55
                        yield "                                                        <li>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                        yield "</li>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    yield "                                                </ul>
                                            </li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                yield "                                    </ul>
                                ";
            } else {
                // line 62
                yield "                                    <span class=\"text-muted\">Aucune option disponible.</span>
                                ";
            }
            // line 64
            yield "                            </td>
                            <td>
                                ";
            // line 66
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "reponseUtilisateur", [], "any", false, false, false, 66))) {
                // line 67
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "reponseUtilisateur", [], "any", false, false, false, 67), ", "), "html", null, true);
                yield "
                                ";
            } else {
                // line 69
                yield "                                    <span class=\"text-muted\">Aucune réponse utilisateur disponible.</span>
                                ";
            }
            // line 71
            yield "                            </td>
                            <td>";
            // line 72
            yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "prixPiece", [], "any", false, false, false, 72))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "prixPiece", [], "any", false, false, false, 72), "html", null, true)) : ("Non défini"));
            yield "</td>
                            <td>
                                <div class=\"d-flex flex-column gap-2\">
                                   
                                    <a href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\" title=\"Éditer\">
                                        <i class=\"bi bi-pencil\"></i> Éditer
                                    </a>
                                    <form method=\"post\" action=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce quiz ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 80))), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                            <i class=\"bi bi-trash\"></i> Supprimer
                                        </button>
                                    </form>
                                    <!-- Afficher le bouton \"Jouer\" uniquement si le quiz a des questions -->
                                    ";
            // line 86
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "questions", [], "any", false, false, false, 86)) > 0)) {
                // line 87
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_play", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm\" title=\"Jouer\">
                                            <i class=\"bi bi-play-circle\"></i> Jouer
                                        </a>
                                    ";
            }
            // line 91
            yield "                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 94
        if (!$context['_iterated']) {
            // line 95
            yield "                        <tr>
                            <td colspan=\"7\" class=\"text-center\">Aucun quiz trouvé</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quiz'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "                </tbody>
            </table>
        </div>

        <div class=\"text-center mt-4\">
            <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_new");
        yield "\" class=\"btn btn-success\">
                <i class=\"bi bi-plus-circle\"></i> Créer un nouveau quiz
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
        return "quiz/index.html.twig";
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
        return array (  303 => 104,  296 => 99,  287 => 95,  285 => 94,  278 => 91,  270 => 87,  268 => 86,  259 => 80,  255 => 79,  249 => 76,  242 => 72,  239 => 71,  235 => 69,  229 => 67,  227 => 66,  223 => 64,  219 => 62,  215 => 60,  207 => 57,  198 => 55,  194 => 54,  189 => 52,  186 => 51,  182 => 50,  179 => 49,  177 => 48,  173 => 46,  169 => 44,  165 => 42,  156 => 40,  152 => 39,  149 => 38,  147 => 37,  142 => 35,  138 => 34,  135 => 33,  130 => 32,  107 => 12,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/quiz/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Index des Quizzes{% endblock %}

{% block main %}
    <div class=\"container\">
        <h1 class=\"text-center mb-4\">Index des Quizzes</h1>

        <!-- Bouton pour afficher les statistiques globales -->
        <div class=\"text-center mb-4\">
            <a href=\"{{ path('app_quiz_statistiques') }}\" class=\"btn btn-secondary\">
                <i class=\"bi bi-bar-chart\"></i> Voir les statistiques globales
            </a>
        </div>

        <!-- Tableau des quizzes -->
        <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover mx-auto\" style=\"max-width: 90%;\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th>ID</th>
                        <th>Note</th>
                        <th>Questions</th>
                        <th>Options</th>
                        <th>Réponses Utilisateur</th>
                        <th>PrixPiece</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for quiz in quizzes %}
                        <tr>
                            <td>{{ quiz.id }}</td>
                            <td>{{ quiz.note is not null ? quiz.note : 'Non noté' }}</td>
                            <td>
                                {% if quiz.questions|length > 0 %}
                                    <ul class=\"list-unstyled\">
                                        {% for question in quiz.questions %}
                                            <li>{{ question.question }}</li>
                                        {% endfor %}
                                    </ul>
                                {% else %}
                                    <p>Aucune question disponible.</p>
                                {% endif %}
                            </td>
                            <td>
                                {% if quiz.questions|length > 0 %}
                                    <ul class=\"list-unstyled\">
                                        {% for question in quiz.questions %}
                                            <li>
                                                {{ question.question }} :
                                                <ul>
                                                    {% for option in question.options %}
                                                        <li>{{ option }}</li>
                                                    {% endfor %}
                                                </ul>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                {% else %}
                                    <span class=\"text-muted\">Aucune option disponible.</span>
                                {% endif %}
                            </td>
                            <td>
                                {% if quiz.reponseUtilisateur is not empty %}
                                    {{ quiz.reponseUtilisateur|join(', ') }}
                                {% else %}
                                    <span class=\"text-muted\">Aucune réponse utilisateur disponible.</span>
                                {% endif %}
                            </td>
                            <td>{{ quiz.prixPiece is not null ? quiz.prixPiece : 'Non défini' }}</td>
                            <td>
                                <div class=\"d-flex flex-column gap-2\">
                                   
                                    <a href=\"{{ path('app_quiz_edit', {'id': quiz.id}) }}\" class=\"btn btn-warning btn-sm\" title=\"Éditer\">
                                        <i class=\"bi bi-pencil\"></i> Éditer
                                    </a>
                                    <form method=\"post\" action=\"{{ path('app_quiz_delete', {'id': quiz.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce quiz ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ quiz.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                            <i class=\"bi bi-trash\"></i> Supprimer
                                        </button>
                                    </form>
                                    <!-- Afficher le bouton \"Jouer\" uniquement si le quiz a des questions -->
                                    {% if quiz.questions|length > 0 %}
                                        <a href=\"{{ path('app_quiz_play', {'id': quiz.id}) }}\" class=\"btn btn-primary btn-sm\" title=\"Jouer\">
                                            <i class=\"bi bi-play-circle\"></i> Jouer
                                        </a>
                                    {% endif %}
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"7\" class=\"text-center\">Aucun quiz trouvé</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <div class=\"text-center mt-4\">
            <a href=\"{{ path('app_quiz_new') }}\" class=\"btn btn-success\">
                <i class=\"bi bi-plus-circle\"></i> Créer un nouveau quiz
            </a>
        </div>
    </div>
{% endblock %}", "quiz/index.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\quiz\\index.html.twig");
    }
}
