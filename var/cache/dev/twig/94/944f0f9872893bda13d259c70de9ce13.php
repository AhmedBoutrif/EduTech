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

/* back/certificat/index.html.twig */
class __TwigTemplate_4b69585bef7039065d0bcd1d68c27d7b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/certificat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/certificat/index.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/certificat/index.html.twig", 1);
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1 class=\"mb-4\">Liste des Certificats</h1>

    <table class=\"table table-striped table-bordered\">
        <thead class=\"table-dark\">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["certificats"]) || array_key_exists("certificats", $context) ? $context["certificats"] : (function () { throw new RuntimeError('Variable "certificats" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["certificat"]) {
            // line 25
            yield "                <tr>
                    <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "id", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "id", [], "any", false, false, false, 26), "N/A")) : ("N/A")), "html", null, true);
            yield "</td>
                    <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "nomc", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "nomc", [], "any", false, false, false, 27), "Non défini")) : ("Non défini")), "html", null, true);
            yield "</td>
                    <td>";
            // line 28
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "descriptionc", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "descriptionc", [], "any", false, false, false, 28), "Non défini")) : ("Non défini"))) > 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "descriptionc", [], "any", false, false, false, 28), 0, 50) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "descriptionc", [], "any", false, false, false, 28), "html", null, true)));
            yield "</td>
                    <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "prixc", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "prixc", [], "any", false, false, false, 29), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield " DT</td>
                    <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "prixPiece", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "prixPiece", [], "any", false, false, false, 30), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield " DT</td>
                    <td>
                        ";
            // line 32
            if ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "questionc", [], "any", false, false, false, 32)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "questionc", [], "any", false, false, false, 32)))) {
                // line 33
                yield "                            ";
                $context["questions"] = [];
                // line 34
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "questionc", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    yield "                                ";
                    if (is_iterable($context["item"])) {
                        // line 36
                        yield "                                    ";
                        $context["questions"] = Twig\Extension\CoreExtension::merge((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 36, $this->source); })()), [((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 36), "")) : (""))]);
                        // line 37
                        yield "                                ";
                    } else {
                        // line 38
                        yield "                                    ";
                        $context["questions"] = Twig\Extension\CoreExtension::merge((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 38, $this->source); })()), [((true) ? (Twig\Extension\CoreExtension::default($context["item"], "")) : (""))]);
                        // line 39
                        yield "                                ";
                    }
                    // line 40
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 41, $this->source); })()), ", "), "html", null, true);
                yield "
                        ";
            } else {
                // line 43
                yield "                            <span class=\"text-muted\">Aucune question</span>
                        ";
            }
            // line 45
            yield "                    </td>

                    <td>
                        ";
            // line 48
            if ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "reponseCorrecte", [], "any", false, false, false, 48)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "reponseCorrecte", [], "any", false, false, false, 48)))) {
                // line 49
                yield "                            ";
                $context["reponsesCorrectes"] = [];
                // line 50
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "reponseCorrecte", [], "any", false, false, false, 50));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 51
                    yield "                                ";
                    if (is_iterable($context["item"])) {
                        // line 52
                        yield "                                    ";
                        $context["reponsesCorrectes"] = Twig\Extension\CoreExtension::merge((isset($context["reponsesCorrectes"]) || array_key_exists("reponsesCorrectes", $context) ? $context["reponsesCorrectes"] : (function () { throw new RuntimeError('Variable "reponsesCorrectes" does not exist.', 52, $this->source); })()), [((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 52), "")) : (""))]);
                        // line 53
                        yield "                                ";
                    } else {
                        // line 54
                        yield "                                    ";
                        $context["reponsesCorrectes"] = Twig\Extension\CoreExtension::merge((isset($context["reponsesCorrectes"]) || array_key_exists("reponsesCorrectes", $context) ? $context["reponsesCorrectes"] : (function () { throw new RuntimeError('Variable "reponsesCorrectes" does not exist.', 54, $this->source); })()), [((true) ? (Twig\Extension\CoreExtension::default($context["item"], "")) : (""))]);
                        // line 55
                        yield "                                ";
                    }
                    // line 56
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["reponsesCorrectes"]) || array_key_exists("reponsesCorrectes", $context) ? $context["reponsesCorrectes"] : (function () { throw new RuntimeError('Variable "reponsesCorrectes" does not exist.', 57, $this->source); })()), ", "), "html", null, true);
                yield "
                        ";
            } else {
                // line 59
                yield "                            <span class=\"text-muted\">Aucune réponse correcte</span>
                        ";
            }
            // line 61
            yield "                    </td>

                    <td>
                        ";
            // line 64
            if ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "options", [], "any", false, false, false, 64)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "options", [], "any", false, false, false, 64)))) {
                // line 65
                yield "                            ";
                $context["options"] = [];
                // line 66
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "options", [], "any", false, false, false, 66));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 67
                    yield "                                ";
                    if (is_iterable($context["item"])) {
                        // line 68
                        yield "                                    ";
                        $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 68, $this->source); })()), [((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 68), "")) : (""))]);
                        // line 69
                        yield "                                ";
                    } else {
                        // line 70
                        yield "                                    ";
                        $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 70, $this->source); })()), [((true) ? (Twig\Extension\CoreExtension::default($context["item"], "")) : (""))]);
                        // line 71
                        yield "                                ";
                    }
                    // line 72
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 73, $this->source); })()), ", "), "html", null, true);
                yield "
                        ";
            } else {
                // line 75
                yield "                            <span class=\"text-muted\">Aucune option</span>
                        ";
            }
            // line 77
            yield "                    </td>

                    <td>
                        ";
            // line 80
            if ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "reponseUtilisateur", [], "any", false, false, false, 80)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "reponseUtilisateur", [], "any", false, false, false, 80)))) {
                // line 81
                yield "                            ";
                $context["reponsesUtilisateur"] = [];
                // line 82
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "reponseUtilisateur", [], "any", false, false, false, 82));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 83
                    yield "                                ";
                    if (is_iterable($context["item"])) {
                        // line 84
                        yield "                                    ";
                        $context["reponsesUtilisateur"] = Twig\Extension\CoreExtension::merge((isset($context["reponsesUtilisateur"]) || array_key_exists("reponsesUtilisateur", $context) ? $context["reponsesUtilisateur"] : (function () { throw new RuntimeError('Variable "reponsesUtilisateur" does not exist.', 84, $this->source); })()), [((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 84), "")) : (""))]);
                        // line 85
                        yield "                                ";
                    } else {
                        // line 86
                        yield "                                    ";
                        $context["reponsesUtilisateur"] = Twig\Extension\CoreExtension::merge((isset($context["reponsesUtilisateur"]) || array_key_exists("reponsesUtilisateur", $context) ? $context["reponsesUtilisateur"] : (function () { throw new RuntimeError('Variable "reponsesUtilisateur" does not exist.', 86, $this->source); })()), [((true) ? (Twig\Extension\CoreExtension::default($context["item"], "")) : (""))]);
                        // line 87
                        yield "                                ";
                    }
                    // line 88
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["reponsesUtilisateur"]) || array_key_exists("reponsesUtilisateur", $context) ? $context["reponsesUtilisateur"] : (function () { throw new RuntimeError('Variable "reponsesUtilisateur" does not exist.', 89, $this->source); })()), ", "), "html", null, true);
                yield "
                        ";
            } else {
                // line 91
                yield "                            <span class=\"text-muted\">Aucune réponse utilisateur</span>
                        ";
            }
            // line 93
            yield "                    </td>

                    <td>
                        <a href=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificatb_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">👁️ Voir</a>
                        <a href=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificatb_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">✏️ Modifier</a>
                        <form method=\"post\" action=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificatb_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["certificat"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce certificat ?');\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">🗑️ Supprimer</button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 108
        if (!$context['_iterated']) {
            // line 105
            yield "                <tr>
                    <td colspan=\"10\" class=\"text-center text-muted\">Aucun certificat trouvé.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['certificat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificatb_new");
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
        return "back/certificat/index.html.twig";
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
        return array (  368 => 112,  363 => 109,  354 => 105,  352 => 108,  341 => 98,  337 => 97,  333 => 96,  328 => 93,  324 => 91,  318 => 89,  312 => 88,  309 => 87,  306 => 86,  303 => 85,  300 => 84,  297 => 83,  292 => 82,  289 => 81,  287 => 80,  282 => 77,  278 => 75,  272 => 73,  266 => 72,  263 => 71,  260 => 70,  257 => 69,  254 => 68,  251 => 67,  246 => 66,  243 => 65,  241 => 64,  236 => 61,  232 => 59,  226 => 57,  220 => 56,  217 => 55,  214 => 54,  211 => 53,  208 => 52,  205 => 51,  200 => 50,  197 => 49,  195 => 48,  190 => 45,  186 => 43,  180 => 41,  174 => 40,  171 => 39,  168 => 38,  165 => 37,  162 => 36,  159 => 35,  154 => 34,  151 => 33,  149 => 32,  144 => 30,  140 => 29,  136 => 28,  132 => 27,  128 => 26,  125 => 25,  120 => 24,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseB.html.twig' %}

{% block title %}Liste des Certificats{% endblock %}

{% block body %}
    <h1 class=\"mb-4\">Liste des Certificats</h1>

    <table class=\"table table-striped table-bordered\">
        <thead class=\"table-dark\">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
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
                    <td>{{ certificat.nomc|default('Non défini') }}</td>
                    <td>{{ certificat.descriptionc|default('Non défini')|length > 50 ? certificat.descriptionc|slice(0, 50) ~ '...' : certificat.descriptionc }}</td>
                    <td>{{ certificat.prixc|default(0)|number_format(0, ',', ' ') }} DT</td>
                    <td>{{ certificat.prixPiece|default(0)|number_format(0, ',', ' ') }} DT</td>
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
                        <a href=\"{{ path('app_certificatb_show', {'id': certificat.id}) }}\" class=\"btn btn-primary btn-sm\">👁️ Voir</a>
                        <a href=\"{{ path('app_certificatb_edit', {'id': certificat.id}) }}\" class=\"btn btn-warning btn-sm\">✏️ Modifier</a>
                        <form method=\"post\" action=\"{{ path('app_certificatb_delete', {'id': certificat.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce certificat ?');\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">🗑️ Supprimer</button>
                        </form>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"10\" class=\"text-center text-muted\">Aucun certificat trouvé.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_certificatb_new') }}\" class=\"btn btn-success\">➕ Ajouter un certificat</a>
{% endblock %}
", "back/certificat/index.html.twig", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\back\\certificat\\index.html.twig");
    }
}
