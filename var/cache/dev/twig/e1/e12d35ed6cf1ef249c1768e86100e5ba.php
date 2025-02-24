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
class __TwigTemplate_e587b7fbf8ec8bf8b727c2173bdb4584 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/index.html.twig", 1);
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

        yield "Quiz index";
        
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
        yield "    <div class=\"container\">
        <h1 class=\"text-center mb-4\">Quiz index</h1>

        ";
        // line 10
        yield "        <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover mx-auto\" style=\"max-width: 90%;\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th>ID</th>
                        <th>Note</th>
                        <th>Questions</th>
                        <th>Options</th> ";
        // line 18
        yield "                        <th>Réponses Utilisateur</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["quizzes"]) || array_key_exists("quizzes", $context) ? $context["quizzes"] : (function () { throw new RuntimeError('Variable "quizzes" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 24
            yield "                        <tr>
                            <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                            <td>";
            // line 26
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "note", [], "any", true, true, false, 26) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "note", [], "any", false, false, false, 26)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "note", [], "any", false, false, false, 26), "html", null, true)) : ("Non noté"));
            yield "</td>
                            <td>
                                ";
            // line 28
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "questions", [], "any", false, false, false, 28))) {
                // line 29
                yield "                                    <ul class=\"list-unstyled\">
                                        ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "questions", [], "any", false, false, false, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                    // line 31
                    yield "                                            <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 31), "html", null, true);
                    yield "</li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                yield "                                    </ul>
                                ";
            } else {
                // line 35
                yield "                                    <span class=\"text-muted\">Aucune question</span>
                                ";
            }
            // line 37
            yield "                            </td>
                            <td>
                                ";
            // line 39
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "questions", [], "any", false, false, false, 39))) {
                // line 40
                yield "                                    <ul class=\"list-unstyled\">
                                        ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "questions", [], "any", false, false, false, 41));
                foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                    // line 42
                    yield "                                            <li>
                                                ";
                    // line 43
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 43), "html", null, true);
                    yield " :
                                                <ul>
                                                    ";
                    // line 45
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "options", [], "any", false, false, false, 45));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 46
                        yield "                                                        <li>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                        yield "</li> ";
                        // line 47
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    yield "                                                </ul>
                                            </li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                yield "                                    </ul>
                                ";
            } else {
                // line 53
                yield "                                    <span class=\"text-muted\">Aucune option</span>
                                ";
            }
            // line 55
            yield "                            </td>
                            <td>
                                ";
            // line 57
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "ReponseUtilisateur", [], "any", false, false, false, 57))) {
                // line 58
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "ReponseUtilisateur", [], "any", false, false, false, 58), ", "), "html", null, true);
                yield "
                                ";
            }
            // line 60
            yield "                            </td>
                            <td>
                                ";
            // line 63
            yield "                                <div class=\"d-flex flex-column gap-2\">
                                    <a href=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\" title=\"Voir\">
                                        <i class=\"bi bi-eye\"></i> Voir
                                    </a>
                                    <a href=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\" title=\"Éditer\">
                                        <i class=\"bi bi-pencil\"></i> Éditer
                                    </a>
                                    <form method=\"post\" action=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce quiz ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 71))), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                            <i class=\"bi bi-trash\"></i> Supprimer
                                        </button>
                                    </form>
                                    <a href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_play", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\" title=\"Jouer\">
                                        <i class=\"bi bi-play-circle\"></i> Jouer
                                    </a>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 86
        if (!$context['_iterated']) {
            // line 83
            yield "                        <tr>
                            <td colspan=\"6\" class=\"text-center\">Aucun quiz trouvé</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quiz'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "                </tbody>
            </table>
        </div>

        ";
        // line 92
        yield "        <div class=\"text-center mt-4\">
            <a href=\"";
        // line 93
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
        return array (  289 => 93,  286 => 92,  280 => 87,  271 => 83,  269 => 86,  258 => 76,  250 => 71,  246 => 70,  240 => 67,  234 => 64,  231 => 63,  227 => 60,  221 => 58,  219 => 57,  215 => 55,  211 => 53,  207 => 51,  199 => 48,  193 => 47,  189 => 46,  185 => 45,  180 => 43,  177 => 42,  173 => 41,  170 => 40,  168 => 39,  164 => 37,  160 => 35,  156 => 33,  147 => 31,  143 => 30,  140 => 29,  138 => 28,  133 => 26,  129 => 25,  126 => 24,  121 => 23,  114 => 18,  105 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quiz index{% endblock %}

{% block main %}
    <div class=\"container\">
        <h1 class=\"text-center mb-4\">Quiz index</h1>

        {# Tableau des quiz #}
        <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover mx-auto\" style=\"max-width: 90%;\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th>ID</th>
                        <th>Note</th>
                        <th>Questions</th>
                        <th>Options</th> {# Nouvelle colonne pour les options #}
                        <th>Réponses Utilisateur</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for quiz in quizzes %}
                        <tr>
                            <td>{{ quiz.id }}</td>
                            <td>{{ quiz.note ?? 'Non noté' }}</td>
                            <td>
                                {% if quiz.questions is not empty %}
                                    <ul class=\"list-unstyled\">
                                        {% for question in quiz.questions %}
                                            <li>{{ question.question }}</li>
                                        {% endfor %}
                                    </ul>
                                {% else %}
                                    <span class=\"text-muted\">Aucune question</span>
                                {% endif %}
                            </td>
                            <td>
                                {% if quiz.questions is not empty %}
                                    <ul class=\"list-unstyled\">
                                        {% for question in quiz.questions %}
                                            <li>
                                                {{ question.question }} :
                                                <ul>
                                                    {% for option in question.options %}
                                                        <li>{{ option }}</li> {# Affichage de chaque option #}
                                                    {% endfor %}
                                                </ul>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                {% else %}
                                    <span class=\"text-muted\">Aucune option</span>
                                {% endif %}
                            </td>
                            <td>
                                {% if quiz.ReponseUtilisateur is not empty %}
                                    {{ quiz.ReponseUtilisateur|join(', ') }}
                                {% endif %}
                            </td>
                            <td>
                                {# Boutons d'actions #}
                                <div class=\"d-flex flex-column gap-2\">
                                    <a href=\"{{ path('app_quiz_show', {'id': quiz.id}) }}\" class=\"btn btn-info btn-sm\" title=\"Voir\">
                                        <i class=\"bi bi-eye\"></i> Voir
                                    </a>
                                    <a href=\"{{ path('app_quiz_edit', {'id': quiz.id}) }}\" class=\"btn btn-warning btn-sm\" title=\"Éditer\">
                                        <i class=\"bi bi-pencil\"></i> Éditer
                                    </a>
                                    <form method=\"post\" action=\"{{ path('app_quiz_delete', {'id': quiz.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce quiz ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ quiz.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                            <i class=\"bi bi-trash\"></i> Supprimer
                                        </button>
                                    </form>
                                    <a href=\"{{ path('app_quiz_play', {'id': quiz.id}) }}\" class=\"btn btn-primary btn-sm\" title=\"Jouer\">
                                        <i class=\"bi bi-play-circle\"></i> Jouer
                                    </a>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\" class=\"text-center\">Aucun quiz trouvé</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        {# Bouton pour créer un nouveau quiz #}
        <div class=\"text-center mt-4\">
            <a href=\"{{ path('app_quiz_new') }}\" class=\"btn btn-success\">
                <i class=\"bi bi-plus-circle\"></i> Créer un nouveau quiz
            </a>
        </div>
    </div>
{% endblock %}
", "quiz/index.html.twig", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\quiz\\index.html.twig");
    }
}
