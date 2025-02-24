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

/* certificat/index.html.twig */
class __TwigTemplate_9f855b8ea38953939fe8b69bb48c27fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certificat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certificat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "certificat/index.html.twig", 1);
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

        yield "Liste des Certificats";
        
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
        yield "    <h1 class=\"mb-4\">Liste des Certificats</h1>

    <table class=\"table table-striped table-bordered\">
        <thead class=\"table-dark\">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Prix Pièce</th>
                <th>Questions</th>
                <th>Réponses Correctes</th>
                <th>Options</th>
                <th>Réponses Utilisateur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["certificats"]) || array_key_exists("certificats", $context) ? $context["certificats"] : (function () { throw new RuntimeError('Variable "certificats" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["certificat"]) {
            // line 24
            yield "                <tr>
                    <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "id", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "id", [], "any", false, false, false, 25), "N/A")) : ("N/A")), "html", null, true);
            yield "</td>
                    <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "nom", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "nom", [], "any", false, false, false, 26), "Non défini")) : ("Non défini")), "html", null, true);
            yield "</td>
                    <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "prix", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "prix", [], "any", false, false, false, 27), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield " DT</td>
                    <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "PrixPiece", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "PrixPiece", [], "any", false, false, false, 28), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield " DT</td>
                    <td>
                        ";
            // line 30
            if ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "questionc", [], "any", false, false, false, 30)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "questionc", [], "any", false, false, false, 30)))) {
                // line 31
                yield "                            ";
                $context["questions"] = [];
                // line 32
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "questionc", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 33
                    yield "                                ";
                    if (is_iterable($context["item"])) {
                        // line 34
                        yield "                                    ";
                        $context["questions"] = Twig\Extension\CoreExtension::merge((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 34, $this->source); })()), [((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 34), "")) : (""))]);
                        // line 35
                        yield "                                ";
                    } else {
                        // line 36
                        yield "                                    ";
                        $context["questions"] = Twig\Extension\CoreExtension::merge((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 36, $this->source); })()), [((true) ? (Twig\Extension\CoreExtension::default($context["item"], "")) : (""))]);
                        // line 37
                        yield "                                ";
                    }
                    // line 38
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 39, $this->source); })()), ", "), "html", null, true);
                yield "
                        ";
            } else {
                // line 41
                yield "                            <span class=\"text-muted\">Aucune question</span>
                        ";
            }
            // line 43
            yield "                    </td>

                    <td>
                        ";
            // line 46
            if ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "reponseCorrecte", [], "any", false, false, false, 46)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "reponseCorrecte", [], "any", false, false, false, 46)))) {
                // line 47
                yield "                            ";
                $context["reponsesCorrectes"] = [];
                // line 48
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "reponseCorrecte", [], "any", false, false, false, 48));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 49
                    yield "                                ";
                    if (is_iterable($context["item"])) {
                        // line 50
                        yield "                                    ";
                        $context["reponsesCorrectes"] = Twig\Extension\CoreExtension::merge((isset($context["reponsesCorrectes"]) || array_key_exists("reponsesCorrectes", $context) ? $context["reponsesCorrectes"] : (function () { throw new RuntimeError('Variable "reponsesCorrectes" does not exist.', 50, $this->source); })()), [((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 50), "")) : (""))]);
                        // line 51
                        yield "                                ";
                    } else {
                        // line 52
                        yield "                                    ";
                        $context["reponsesCorrectes"] = Twig\Extension\CoreExtension::merge((isset($context["reponsesCorrectes"]) || array_key_exists("reponsesCorrectes", $context) ? $context["reponsesCorrectes"] : (function () { throw new RuntimeError('Variable "reponsesCorrectes" does not exist.', 52, $this->source); })()), [((true) ? (Twig\Extension\CoreExtension::default($context["item"], "")) : (""))]);
                        // line 53
                        yield "                                ";
                    }
                    // line 54
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["reponsesCorrectes"]) || array_key_exists("reponsesCorrectes", $context) ? $context["reponsesCorrectes"] : (function () { throw new RuntimeError('Variable "reponsesCorrectes" does not exist.', 55, $this->source); })()), ", "), "html", null, true);
                yield "
                        ";
            } else {
                // line 57
                yield "                            <span class=\"text-muted\">Aucune réponse correcte</span>
                        ";
            }
            // line 59
            yield "                    </td>

                    <td>
                        ";
            // line 62
            if ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "options", [], "any", false, false, false, 62)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "options", [], "any", false, false, false, 62)))) {
                // line 63
                yield "                            ";
                $context["options"] = [];
                // line 64
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "options", [], "any", false, false, false, 64));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 65
                    yield "                                ";
                    if (is_iterable($context["item"])) {
                        // line 66
                        yield "                                    ";
                        $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 66, $this->source); })()), [((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 66), "")) : (""))]);
                        // line 67
                        yield "                                ";
                    } else {
                        // line 68
                        yield "                                    ";
                        $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 68, $this->source); })()), [((true) ? (Twig\Extension\CoreExtension::default($context["item"], "")) : (""))]);
                        // line 69
                        yield "                                ";
                    }
                    // line 70
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 71, $this->source); })()), ", "), "html", null, true);
                yield "
                        ";
            } else {
                // line 73
                yield "                            <span class=\"text-muted\">Aucune option</span>
                        ";
            }
            // line 75
            yield "                    </td>

                    <td>
                        ";
            // line 78
            if ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "reponseUtilisateur", [], "any", false, false, false, 78)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "reponseUtilisateur", [], "any", false, false, false, 78)))) {
                // line 79
                yield "                            ";
                $context["reponsesUtilisateur"] = [];
                // line 80
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "reponseUtilisateur", [], "any", false, false, false, 80));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 81
                    yield "                                ";
                    if (is_iterable($context["item"])) {
                        // line 82
                        yield "                                    ";
                        $context["reponsesUtilisateur"] = Twig\Extension\CoreExtension::merge((isset($context["reponsesUtilisateur"]) || array_key_exists("reponsesUtilisateur", $context) ? $context["reponsesUtilisateur"] : (function () { throw new RuntimeError('Variable "reponsesUtilisateur" does not exist.', 82, $this->source); })()), [((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", true, true, false, 82)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 82), "")) : (""))]);
                        // line 83
                        yield "                                ";
                    } else {
                        // line 84
                        yield "                                    ";
                        $context["reponsesUtilisateur"] = Twig\Extension\CoreExtension::merge((isset($context["reponsesUtilisateur"]) || array_key_exists("reponsesUtilisateur", $context) ? $context["reponsesUtilisateur"] : (function () { throw new RuntimeError('Variable "reponsesUtilisateur" does not exist.', 84, $this->source); })()), [((true) ? (Twig\Extension\CoreExtension::default($context["item"], "")) : (""))]);
                        // line 85
                        yield "                                ";
                    }
                    // line 86
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["reponsesUtilisateur"]) || array_key_exists("reponsesUtilisateur", $context) ? $context["reponsesUtilisateur"] : (function () { throw new RuntimeError('Variable "reponsesUtilisateur" does not exist.', 87, $this->source); })()), ", "), "html", null, true);
                yield "
                        ";
            } else {
                // line 89
                yield "                            <span class=\"text-muted\">Aucune réponse utilisateur</span>
                        ";
            }
            // line 91
            yield "                    </td>

                    <td>
                        <a href=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificat_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">👁️ Voir</a>
                        <a href=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificat_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">✏️ Modifier</a>
                        <form method=\"post\" action=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificat_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce certificat ?');\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">🗑️ Supprimer</button>
                        </form>
                         <!-- Bouton pour jouer au certif -->
                        <a href=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificat_jouer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\" title=\"Jouer\">
                            <i class=\"bi bi-play-circle\"></i> Jouer
                        </a>
                    </td>
                </tr>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 112
        if (!$context['_iterated']) {
            // line 109
            yield "                <tr>
                    <td colspan=\"10\" class=\"text-center text-muted\">Aucun certificat trouvé.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['certificat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificat_new");
        yield "\" class=\"btn btn-success\">➕ Ajouter un certificat</a>
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
        return "certificat/index.html.twig";
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
        return array (  372 => 116,  367 => 113,  358 => 109,  356 => 112,  344 => 101,  336 => 96,  332 => 95,  328 => 94,  323 => 91,  319 => 89,  313 => 87,  307 => 86,  304 => 85,  301 => 84,  298 => 83,  295 => 82,  292 => 81,  287 => 80,  284 => 79,  282 => 78,  277 => 75,  273 => 73,  267 => 71,  261 => 70,  258 => 69,  255 => 68,  252 => 67,  249 => 66,  246 => 65,  241 => 64,  238 => 63,  236 => 62,  231 => 59,  227 => 57,  221 => 55,  215 => 54,  212 => 53,  209 => 52,  206 => 51,  203 => 50,  200 => 49,  195 => 48,  192 => 47,  190 => 46,  185 => 43,  181 => 41,  175 => 39,  169 => 38,  166 => 37,  163 => 36,  160 => 35,  157 => 34,  154 => 33,  149 => 32,  146 => 31,  144 => 30,  139 => 28,  135 => 27,  131 => 26,  127 => 25,  124 => 24,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Certificats{% endblock %}

{% block main %}
    <h1 class=\"mb-4\">Liste des Certificats</h1>

    <table class=\"table table-striped table-bordered\">
        <thead class=\"table-dark\">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Prix Pièce</th>
                <th>Questions</th>
                <th>Réponses Correctes</th>
                <th>Options</th>
                <th>Réponses Utilisateur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for certificat in certificats %}
                <tr>
                    <td>{{ certificat.id|default('N/A') }}</td>
                    <td>{{ certificat.nom|default('Non défini') }}</td>
                    <td>{{ certificat.prix|default(0)|number_format(0, ',', ' ') }} DT</td>
                    <td>{{ certificat.PrixPiece|default(0)|number_format(0, ',', ' ') }} DT</td>
                    <td>
                        {% if certificat.questionc is iterable and certificat.questionc is not empty %}
                            {% set questions = [] %}
                            {% for item in certificat.questionc %}
                                {% if item is iterable %}
                                    {% set questions = questions|merge([item.label|default('')]) %}
                                {% else %}
                                    {% set questions = questions|merge([item|default('')]) %}
                                {% endif %}
                            {% endfor %}
                            {{ questions|join(', ') }}
                        {% else %}
                            <span class=\"text-muted\">Aucune question</span>
                        {% endif %}
                    </td>

                    <td>
                        {% if certificat.reponseCorrecte is iterable and certificat.reponseCorrecte is not empty %}
                            {% set reponsesCorrectes = [] %}
                            {% for item in certificat.reponseCorrecte %}
                                {% if item is iterable %}
                                    {% set reponsesCorrectes = reponsesCorrectes|merge([item.label|default('')]) %}
                                {% else %}
                                    {% set reponsesCorrectes = reponsesCorrectes|merge([item|default('')]) %}
                                {% endif %}
                            {% endfor %}
                            {{ reponsesCorrectes|join(', ') }}
                        {% else %}
                            <span class=\"text-muted\">Aucune réponse correcte</span>
                        {% endif %}
                    </td>

                    <td>
                        {% if certificat.options is iterable and certificat.options is not empty %}
                            {% set options = [] %}
                            {% for item in certificat.options %}
                                {% if item is iterable %}
                                    {% set options = options|merge([item.label|default('')]) %}
                                {% else %}
                                    {% set options = options|merge([item|default('')]) %}
                                {% endif %}
                            {% endfor %}
                            {{ options|join(', ') }}
                        {% else %}
                            <span class=\"text-muted\">Aucune option</span>
                        {% endif %}
                    </td>

                    <td>
                        {% if certificat.reponseUtilisateur is iterable and certificat.reponseUtilisateur is not empty %}
                            {% set reponsesUtilisateur = [] %}
                            {% for item in certificat.reponseUtilisateur %}
                                {% if item is iterable %}
                                    {% set reponsesUtilisateur = reponsesUtilisateur|merge([item.label|default('')]) %}
                                {% else %}
                                    {% set reponsesUtilisateur = reponsesUtilisateur|merge([item|default('')]) %}
                                {% endif %}
                            {% endfor %}
                            {{ reponsesUtilisateur|join(', ') }}
                        {% else %}
                            <span class=\"text-muted\">Aucune réponse utilisateur</span>
                        {% endif %}
                    </td>

                    <td>
                        <a href=\"{{ path('app_certificat_show', {'id': certificat.id}) }}\" class=\"btn btn-primary btn-sm\">👁️ Voir</a>
                        <a href=\"{{ path('app_certificat_edit', {'id': certificat.id}) }}\" class=\"btn btn-warning btn-sm\">✏️ Modifier</a>
                        <form method=\"post\" action=\"{{ path('app_certificat_delete', {'id': certificat.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce certificat ?');\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">🗑️ Supprimer</button>
                        </form>
                         <!-- Bouton pour jouer au certif -->
                        <a href=\"{{ path('app_certificat_jouer', {'id': certificat.id}) }}\" class=\"btn btn-primary btn-sm\" title=\"Jouer\">
                            <i class=\"bi bi-play-circle\"></i> Jouer
                        </a>
                    </td>
                </tr>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"10\" class=\"text-center text-muted\">Aucun certificat trouvé.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_certificat_new') }}\" class=\"btn btn-success\">➕ Ajouter un certificat</a>
{% endblock %}
", "certificat/index.html.twig", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\certificat\\index.html.twig");
    }
}
