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

/* back/quiz/index.html.twig */
class __TwigTemplate_3785c4732ce635f2b268b0fd569f79d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/quiz/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/quiz/index.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/quiz/index.html.twig", 1);
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1 class=\"text-center mb-4\">Quiz index</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-sm mx-auto\" style=\"max-width: 80%;\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Note</th>
                    <th>Questions</th>
                    <th>Options</th>
                    <th>Réponses Correctes</th>
                    <th>Réponses Utilisateur</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["quizzes"]) || array_key_exists("quizzes", $context) ? $context["quizzes"] : (function () { throw new RuntimeError('Variable "quizzes" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 23
            yield "                <tr>
                    <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                    <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "note", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                    <td>";
            // line 26
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "questions", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "questions", [], "any", false, false, false, 26), ", "), "html", null, true)) : ("Aucune"));
            yield "</td>
                    <td>";
            // line 27
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "options", [], "any", false, false, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "options", [], "any", false, false, false, 27), ", "), "html", null, true)) : ("Aucune"));
            yield "</td>
                    <td>";
            // line 28
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "reponsesCorrectes", [], "any", false, false, false, 28)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "reponsesCorrectes", [], "any", false, false, false, 28), ", "), "html", null, true)) : ("Aucune"));
            yield "</td>
                    <td>";
            // line 29
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "reponsesUtilisateur", [], "any", false, false, false, 29)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "reponsesUtilisateur", [], "any", false, false, false, 29), ", "), "html", null, true)) : ("Aucune"));
            yield "</td>
                    <td>
                        <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizb_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\" title=\"Voir\">
                            <i class=\"bi bi-eye\"></i> Voir
                        </a>
                        <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizb_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\" title=\"Éditer\">
                            <i class=\"bi bi-pencil\"></i> Éditer
                        </a>
                        <form method=\"post\" action=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizb_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce quiz ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 38))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                        </form>
                        <!-- Bouton pour jouer au quiz -->
                        <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizb_play", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\" title=\"Jouer\">
                            <i class=\"bi bi-play-circle\"></i> Jouer
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 51
        if (!$context['_iterated']) {
            // line 48
            yield "                <tr>
                    <td colspan=\"7\" class=\"text-center\">Aucun enregistrement trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quiz'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "            </tbody>
        </table>
    </div>

    <div class=\"text-center\">
        <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_new");
        yield "\" class=\"btn btn-success\">Créer un nouveau quiz</a>
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
        return "back/quiz/index.html.twig";
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
        return array (  202 => 57,  195 => 52,  186 => 48,  184 => 51,  174 => 42,  167 => 38,  163 => 37,  157 => 34,  151 => 31,  146 => 29,  142 => 28,  138 => 27,  134 => 26,  130 => 25,  126 => 24,  123 => 23,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseB.html.twig' %}

{% block title %}Quiz index{% endblock %}

{% block body %}
    <h1 class=\"text-center mb-4\">Quiz index</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-sm mx-auto\" style=\"max-width: 80%;\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Note</th>
                    <th>Questions</th>
                    <th>Options</th>
                    <th>Réponses Correctes</th>
                    <th>Réponses Utilisateur</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for quiz in quizzes %}
                <tr>
                    <td>{{ quiz.id }}</td>
                    <td>{{ quiz.note }}</td>
                    <td>{{ quiz.questions ? quiz.questions|join(', ') : 'Aucune' }}</td>
                    <td>{{ quiz.options ? quiz.options|join(', ') : 'Aucune' }}</td>
                    <td>{{ quiz.reponsesCorrectes ? quiz.reponsesCorrectes|join(', ') : 'Aucune' }}</td>
                    <td>{{ quiz.reponsesUtilisateur ? quiz.reponsesUtilisateur|join(', ') : 'Aucune' }}</td>
                    <td>
                        <a href=\"{{ path('app_quizb_show', {'id': quiz.id}) }}\" class=\"btn btn-info btn-sm\" title=\"Voir\">
                            <i class=\"bi bi-eye\"></i> Voir
                        </a>
                        <a href=\"{{ path('app_quizb_edit', {'id': quiz.id}) }}\" class=\"btn btn-warning btn-sm\" title=\"Éditer\">
                            <i class=\"bi bi-pencil\"></i> Éditer
                        </a>
                        <form method=\"post\" action=\"{{ path('app_quizb_delete', {'id': quiz.id}) }}\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce quiz ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ quiz.id) }}\">
                            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                        </form>
                        <!-- Bouton pour jouer au quiz -->
                        <a href=\"{{ path('app_quizb_play', {'id': quiz.id}) }}\" class=\"btn btn-primary btn-sm\" title=\"Jouer\">
                            <i class=\"bi bi-play-circle\"></i> Jouer
                        </a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"7\" class=\"text-center\">Aucun enregistrement trouvé</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"text-center\">
        <a href=\"{{ path('app_quiz_new') }}\" class=\"btn btn-success\">Créer un nouveau quiz</a>
    </div>
{% endblock %}
", "back/quiz/index.html.twig", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\back\\quiz\\index.html.twig");
    }
}
