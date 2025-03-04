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

/* back/certification/liste.html.twig */
class __TwigTemplate_409010231bfd54dd411d0df04a533523 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/certification/liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/certification/liste.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/certification/liste.html.twig", 1);
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

        yield "List Certifications";
        
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
        yield "    <h1 class=\"text-center mb-4\">List Certifications</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-sm mx-auto\" style=\"max-width: 80%;\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Prix</th>
                    <th>Prix Pièce</th>
                    <th>Note</th>
                    <th>Questions</th>
                    <th>Options</th>
                    <th>Réponse Correcte</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["certifications"]) || array_key_exists("certifications", $context) ? $context["certifications"] : (function () { throw new RuntimeError('Variable "certifications" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["certification"]) {
            // line 27
            yield "                <tr>
                    <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                    <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "nom", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "nom", [], "any", false, false, false, 29), "Nom inconnu")) : ("Nom inconnu")), "html", null, true);
            yield "</td>
                    <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "description", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "description", [], "any", false, false, false, 30), "Aucune description")) : ("Aucune description")), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 32
            if (CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "img", [], "any", false, false, false, 32)) {
                // line 33
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/certifications/" . CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "img", [], "any", false, false, false, 33))), "html", null, true);
                yield "\" 
                                 alt=\"Image de ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "nom", [], "any", false, false, false, 34), "html", null, true);
                yield "\" 
                                 class=\"img-fluid rounded\" 
                                 style=\"max-width: 100px; height: auto;\">
                        ";
            } else {
                // line 38
                yield "                            <span class=\"text-muted\">Aucune image</span>
                        ";
            }
            // line 40
            yield "                    </td>
                    <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "prix", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "prix", [], "any", false, false, false, 41), 0)) : (0)), "html", null, true);
            yield " Points</td>
                    <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "prixPiece", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "prixPiece", [], "any", false, false, false, 42), 0)) : (0)), "html", null, true);
            yield " Points</td>
                    <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "note", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "note", [], "any", false, false, false, 43), "N/A")) : ("N/A")), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 45
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "questions", [], "any", false, false, false, 45))) {
                // line 46
                yield "                            <ul class=\"list-unstyled\">
                                ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "questions", [], "any", false, false, false, 47));
                foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                    // line 48
                    yield "                                    <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["question"], "question", [], "any", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 48), "N/A")) : ("N/A")), "html", null, true);
                    yield "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                yield "                            </ul>
                        ";
            } else {
                // line 52
                yield "                            <span class=\"text-muted\">Aucune question</span>
                        ";
            }
            // line 54
            yield "                    </td>
                    <td>
                        ";
            // line 56
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "questions", [], "any", false, false, false, 56))) {
                // line 57
                yield "                            <ul class=\"list-unstyled\">
                                ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "questions", [], "any", false, false, false, 58));
                foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                    // line 59
                    yield "                                    <li>
                                        ";
                    // line 60
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 60), "html", null, true);
                    yield " :
                                        <ul>
                                            ";
                    // line 62
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "options", [], "any", false, false, false, 62));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 63
                        yield "                                                <li>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                        yield "</li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    yield "                                        </ul>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                yield "                            </ul>
                        ";
            } else {
                // line 70
                yield "                            <span class=\"text-muted\">Aucune option</span>
                        ";
            }
            // line 72
            yield "                    </td>
                    <td>
                        ";
            // line 74
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "questions", [], "any", false, false, false, 74))) {
                // line 75
                yield "                            <ul class=\"list-unstyled\">
                                ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "questions", [], "any", false, false, false, 76));
                foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                    // line 77
                    yield "                                    <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["question"], "reponseCorrecte", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "reponseCorrecte", [], "any", false, false, false, 77), "N/A")) : ("N/A")), "html", null, true);
                    yield "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                yield "                            </ul>
                        ";
            } else {
                // line 81
                yield "                            <span class=\"text-muted\">Aucune réponse correcte</span>
                        ";
            }
            // line 83
            yield "                    </td>
                    <td>
                        <!-- Boutons d'action avec texte et icônes Bootstrap -->
                        <a href=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificationb_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\" title=\"Voir\">
                            <i class=\"bi bi-eye\"></i> Voir
                        </a>
                        <a href=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificationb_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\" title=\"Éditer\">
                            <i class=\"bi bi-pencil\"></i> Éditer
                        </a>
                        <!-- Bouton de suppression avec confirmation -->
                        <form action=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificationb_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            yield "\" method=\"post\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette certification ?');\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\" title=\"Supprimer\">
                                <i class=\"bi bi-trash\"></i> Supprimer
                            </button>
                        </form>
                        <!-- Bouton Jouer -->
                        ";
            // line 100
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "questions", [], "any", false, false, false, 100))) {
                // line 101
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificationb_play", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "id", [], "any", false, false, false, 101)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm mt-2\" title=\"Jouer\">
                                <i class=\"bi bi-play-circle\"></i> Jouer
                            </a>
                        ";
            }
            // line 105
            yield "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 107
        if (!$context['_iterated']) {
            // line 108
            yield "                <tr>
                    <td colspan=\"11\" class=\"text-center\">Aucune certification trouvée</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['certification'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "            </tbody>
        </table>
    </div>

    <div class=\"text-center\">
        <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificationb_new");
        yield "\" class=\"btn btn-success\">Créer une nouvelle certification</a>
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
        return "back/certification/liste.html.twig";
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
        return array (  345 => 117,  338 => 112,  329 => 108,  327 => 107,  321 => 105,  313 => 101,  311 => 100,  301 => 93,  294 => 89,  288 => 86,  283 => 83,  279 => 81,  275 => 79,  266 => 77,  262 => 76,  259 => 75,  257 => 74,  253 => 72,  249 => 70,  245 => 68,  237 => 65,  228 => 63,  224 => 62,  219 => 60,  216 => 59,  212 => 58,  209 => 57,  207 => 56,  203 => 54,  199 => 52,  195 => 50,  186 => 48,  182 => 47,  179 => 46,  177 => 45,  172 => 43,  168 => 42,  164 => 41,  161 => 40,  157 => 38,  150 => 34,  145 => 33,  143 => 32,  138 => 30,  134 => 29,  130 => 28,  127 => 27,  122 => 26,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseB.html.twig' %}

{% block title %}List Certifications{% endblock %}

{% block body %}
    <h1 class=\"text-center mb-4\">List Certifications</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-sm mx-auto\" style=\"max-width: 80%;\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Prix</th>
                    <th>Prix Pièce</th>
                    <th>Note</th>
                    <th>Questions</th>
                    <th>Options</th>
                    <th>Réponse Correcte</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for certification in certifications %}
                <tr>
                    <td>{{ certification.id }}</td>
                    <td>{{ certification.nom|default('Nom inconnu') }}</td>
                    <td>{{ certification.description|default('Aucune description') }}</td>
                    <td>
                        {% if certification.img %}
                            <img src=\"{{ asset('uploads/certifications/' ~ certification.img) }}\" 
                                 alt=\"Image de {{ certification.nom }}\" 
                                 class=\"img-fluid rounded\" 
                                 style=\"max-width: 100px; height: auto;\">
                        {% else %}
                            <span class=\"text-muted\">Aucune image</span>
                        {% endif %}
                    </td>
                    <td>{{ certification.prix|default(0) }} Points</td>
                    <td>{{ certification.prixPiece|default(0) }} Points</td>
                    <td>{{ certification.note|default('N/A') }}</td>
                    <td>
                        {% if certification.questions is not empty %}
                            <ul class=\"list-unstyled\">
                                {% for question in certification.questions %}
                                    <li>{{ question.question|default('N/A') }}</li>
                                {% endfor %}
                            </ul>
                        {% else %}
                            <span class=\"text-muted\">Aucune question</span>
                        {% endif %}
                    </td>
                    <td>
                        {% if certification.questions is not empty %}
                            <ul class=\"list-unstyled\">
                                {% for question in certification.questions %}
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
                            <span class=\"text-muted\">Aucune option</span>
                        {% endif %}
                    </td>
                    <td>
                        {% if certification.questions is not empty %}
                            <ul class=\"list-unstyled\">
                                {% for question in certification.questions %}
                                    <li>{{ question.reponseCorrecte|default('N/A') }}</li>
                                {% endfor %}
                            </ul>
                        {% else %}
                            <span class=\"text-muted\">Aucune réponse correcte</span>
                        {% endif %}
                    </td>
                    <td>
                        <!-- Boutons d'action avec texte et icônes Bootstrap -->
                        <a href=\"{{ path('app_certificationb_show', {'id': certification.id}) }}\" class=\"btn btn-info btn-sm\" title=\"Voir\">
                            <i class=\"bi bi-eye\"></i> Voir
                        </a>
                        <a href=\"{{ path('app_certificationb_edit', {'id': certification.id}) }}\" class=\"btn btn-warning btn-sm\" title=\"Éditer\">
                            <i class=\"bi bi-pencil\"></i> Éditer
                        </a>
                        <!-- Bouton de suppression avec confirmation -->
                        <form action=\"{{ path('app_certificationb_delete', {'id': certification.id}) }}\" method=\"post\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette certification ?');\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\" title=\"Supprimer\">
                                <i class=\"bi bi-trash\"></i> Supprimer
                            </button>
                        </form>
                        <!-- Bouton Jouer -->
                        {% if certification.questions is not empty %}
                            <a href=\"{{ path('app_certificationb_play', {'id': certification.id}) }}\" class=\"btn btn-primary btn-sm mt-2\" title=\"Jouer\">
                                <i class=\"bi bi-play-circle\"></i> Jouer
                            </a>
                        {% endif %}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"11\" class=\"text-center\">Aucune certification trouvée</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"text-center\">
        <a href=\"{{ path('app_certificationb_new') }}\" class=\"btn btn-success\">Créer une nouvelle certification</a>
    </div>
{% endblock %}", "back/certification/liste.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\back\\certification\\liste.html.twig");
    }
}
