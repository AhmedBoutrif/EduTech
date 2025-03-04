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

/* back/cours/showb.html.twig */
class __TwigTemplate_f9ade6dabb02864012cbba27106c5a9c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/cours/showb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/cours/showb.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/cours/showb.html.twig", 1);
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

        yield "Cours";
        
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
        yield "    <h1 class=\"text-center mb-4\">Cours</h1>

    <!-- Boutons Retour et Modifier en haut -->
    <div class=\"text-center mb-4\">
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coursb_index");
        yield "\" class=\"btn btn-primary\">Retour à la liste</a>
        <a href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coursb_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">Modifier</a>
    </div>

    <!-- Tableau des informations du cours -->
    <div class=\"table-responsive mt-5\">
        <table class=\"table table-striped table-sm mx-auto\" style=\"max-width: 80%;\">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Categorie</th>
                    <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 24, $this->source); })()), "categorie", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Titre</th>
                    <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 28, $this->source); })()), "titre", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Contenu</th>
                    <td>
                        ";
        // line 33
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 33, $this->source); })()), "contenu", [], "any", false, false, false, 33)) && is_string($_v1 = ".pdf") && str_ends_with($_v0, $_v1))) {
            // line 34
            yield "                            ";
            if ((isset($context["fileExists"]) || array_key_exists("fileExists", $context) ? $context["fileExists"] : (function () { throw new RuntimeError('Variable "fileExists" does not exist.', 34, $this->source); })())) {
                // line 35
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pdf/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 35, $this->source); })()), "contenu", [], "any", false, false, false, 35))), "html", null, true);
                yield "\" target=\"_blank\">
                                    Voir le PDF : ";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 36, $this->source); })()), "contenu", [], "any", false, false, false, 36), "html", null, true);
                yield "
                                </a>
                            ";
            } else {
                // line 39
                yield "                                <span>Le fichier n'existe pas.</span>
                            ";
            }
            // line 41
            yield "                        ";
        } else {
            // line 42
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 42, $this->source); })()), "contenu", [], "any", false, false, false, 42), "html", null, true);
            yield "
                        ";
        }
        // line 44
        yield "                    </td>
                </tr>
                <tr>
                    <th>Num_Certif</th>
                    <td>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 48, $this->source); })()), "certification", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
        yield "</td>
                </tr>
            </tbody>
        </table>
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
        return "back/cours/showb.html.twig";
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
        return array (  179 => 48,  173 => 44,  167 => 42,  164 => 41,  160 => 39,  154 => 36,  149 => 35,  146 => 34,  144 => 33,  136 => 28,  129 => 24,  122 => 20,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseB.html.twig' %}

{% block title %}Cours{% endblock %}

{% block body %}
    <h1 class=\"text-center mb-4\">Cours</h1>

    <!-- Boutons Retour et Modifier en haut -->
    <div class=\"text-center mb-4\">
        <a href=\"{{ path('app_coursb_index') }}\" class=\"btn btn-primary\">Retour à la liste</a>
        <a href=\"{{ path('app_coursb_edit', {'id': cours.id}) }}\" class=\"btn btn-warning\">Modifier</a>
    </div>

    <!-- Tableau des informations du cours -->
    <div class=\"table-responsive mt-5\">
        <table class=\"table table-striped table-sm mx-auto\" style=\"max-width: 80%;\">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ cours.id }}</td>
                </tr>
                <tr>
                    <th>Categorie</th>
                    <td>{{ cours.categorie }}</td>
                </tr>
                <tr>
                    <th>Titre</th>
                    <td>{{ cours.titre }}</td>
                </tr>
                <tr>
                    <th>Contenu</th>
                    <td>
                        {% if cours.contenu ends with '.pdf' %}
                            {% if fileExists %}
                                <a href=\"{{ asset('uploads/pdf/' ~ cours.contenu) }}\" target=\"_blank\">
                                    Voir le PDF : {{ cours.contenu }}
                                </a>
                            {% else %}
                                <span>Le fichier n'existe pas.</span>
                            {% endif %}
                        {% else %}
                            {{ cours.contenu }}
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Num_Certif</th>
                    <td>{{ cours.certification.id }}</td>
                </tr>
            </tbody>
        </table>
    </div>

{% endblock %}
", "back/cours/showb.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\back\\cours\\showb.html.twig");
    }
}
