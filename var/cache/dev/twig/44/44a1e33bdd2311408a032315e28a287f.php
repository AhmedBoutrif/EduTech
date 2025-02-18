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

/* back/feed/showb.html.twig */
class __TwigTemplate_71a4b1eb025932cc6a790fa920e73521 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/feed/showb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/feed/showb.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/feed/showb.html.twig", 1);
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

        yield "Feed";
        
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
        <h1 class=\"mb-4 text-center\">Feed Details</h1>

        <!-- Feed Table -->
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-body\">
                <table class=\"table table-bordered table-striped\">
                    <tbody>
                        <tr>
                            <th class=\"w-25\">Id</th>
                            <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feed"]) || array_key_exists("feed", $context) ? $context["feed"] : (function () { throw new RuntimeError('Variable "feed" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">Publication</th>
                            <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feed"]) || array_key_exists("feed", $context) ? $context["feed"] : (function () { throw new RuntimeError('Variable "feed" does not exist.', 20, $this->source); })()), "publication", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Commentaires Section -->
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-body\">
                <h2>Commentaires</h2>
                <ul class=\"list-group\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feed"]) || array_key_exists("feed", $context) ? $context["feed"] : (function () { throw new RuntimeError('Variable "feed" does not exist.', 32, $this->source); })()), "Commentaire", [], "any", false, false, false, 32));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 33
            yield "                        <li class=\"list-group-item\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 33), "html", null, true);
            yield "</li>
                    ";
            $context['_iterated'] = true;
        }
        // line 36
        if (!$context['_iterated']) {
            // line 35
            yield "                        <li class=\"list-group-item\">Aucun commentaire pour le moment.</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                </ul>
            </div>
        </div>

        <!-- Navigation Links -->
        <div class=\"d-flex justify-content-between\">
            <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feedb_index");
        yield "\" class=\"btn btn-secondary\">Back to List</a>
            <a href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feedb_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["feed"]) || array_key_exists("feed", $context) ? $context["feed"] : (function () { throw new RuntimeError('Variable "feed" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Edit</a>
<a href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaireb_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["feed"]) || array_key_exists("feed", $context) ? $context["feed"] : (function () { throw new RuntimeError('Variable "feed" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        yield "\" class=\"btn btn-success\">Ajouter un commentaire</a>

        </div>

        <!-- Delete Form -->
        <div class=\"mt-3 text-center\">
            ";
        // line 51
        yield Twig\Extension\CoreExtension::include($this->env, $context, "feed/_delete_form.html.twig");
        yield "
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
        return "back/feed/showb.html.twig";
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
        return array (  180 => 51,  171 => 45,  167 => 44,  163 => 43,  155 => 37,  148 => 35,  146 => 36,  139 => 33,  134 => 32,  119 => 20,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseB.html.twig' %}

{% block title %}Feed{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"mb-4 text-center\">Feed Details</h1>

        <!-- Feed Table -->
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-body\">
                <table class=\"table table-bordered table-striped\">
                    <tbody>
                        <tr>
                            <th class=\"w-25\">Id</th>
                            <td>{{ feed.id }}</td>
                        </tr>
                        <tr>
                            <th class=\"w-25\">Publication</th>
                            <td>{{ feed.publication }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Commentaires Section -->
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-body\">
                <h2>Commentaires</h2>
                <ul class=\"list-group\">
                    {% for commentaire in feed.Commentaire %}
                        <li class=\"list-group-item\">{{ commentaire.contenu }}</li>
                    {% else %}
                        <li class=\"list-group-item\">Aucun commentaire pour le moment.</li>
                    {% endfor %}
                </ul>
            </div>
        </div>

        <!-- Navigation Links -->
        <div class=\"d-flex justify-content-between\">
            <a href=\"{{ path('app_feedb_index') }}\" class=\"btn btn-secondary\">Back to List</a>
            <a href=\"{{ path('app_feedb_edit', {'id': feed.id}) }}\" class=\"btn btn-primary\">Edit</a>
<a href=\"{{ path('app_commentaireb_new', {'id': feed.id}) }}\" class=\"btn btn-success\">Ajouter un commentaire</a>

        </div>

        <!-- Delete Form -->
        <div class=\"mt-3 text-center\">
            {{ include('feed/_delete_form.html.twig') }}
        </div>
    </div>
{% endblock %}
", "back/feed/showb.html.twig", "C:\\Users\\bisse\\OneDrive\\Images\\edutech_1\\edutech\\templates\\back\\feed\\showb.html.twig");
    }
}
