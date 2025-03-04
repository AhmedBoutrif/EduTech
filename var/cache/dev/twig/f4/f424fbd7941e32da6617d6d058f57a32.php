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

/* avaibility/show.html.twig */
class __TwigTemplate_485e2b6c3a0470d2463356a68c72f3fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avaibility/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avaibility/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avaibility/show.html.twig", 1);
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

        yield "Disponibilité";
        
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
        yield "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
<style>
a i {
    font-size: 24px;
    color:rgb(0, 0, 0); /* Couleur bleue */
    transition: transform 0.3s ease;
}

a:hover i {
    transform: scale(1.2);
    color:rgb(4, 4, 4); /* Bleu plus foncé au survol */
}



</style>
<div class=\"container mt-4\">
    <div class=\"card shadow-sm border-0 rounded\">
        <div class=\"card-body\">
            <h1 class=\"card-title text-center text-dark mb-4\">
                <i class=\"bi bi-calendar-check\"></i> Détails de la disponibilité
            </h1>

            <table class=\"table table-striped\">
                <tbody>
                   
                    <tr>
                        <th><i class=\"bi bi-calendar-event\"></i> Date</th>
                        <td>";
        // line 34
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["Avaibility"]) || array_key_exists("Avaibility", $context) ? $context["Avaibility"] : (function () { throw new RuntimeError('Variable "Avaibility" does not exist.', 34, $this->source); })()), "date", [], "any", false, false, false, 34)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Avaibility"]) || array_key_exists("Avaibility", $context) ? $context["Avaibility"] : (function () { throw new RuntimeError('Variable "Avaibility" does not exist.', 34, $this->source); })()), "date", [], "any", false, false, false, 34), "d M Y"), "html", null, true)) : (""));
        yield "</td>
                    </tr>
                    <tr>
                        <th><i class=\"bi bi-clock\"></i> Début</th>
                        <td>";
        // line 38
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["Avaibility"]) || array_key_exists("Avaibility", $context) ? $context["Avaibility"] : (function () { throw new RuntimeError('Variable "Avaibility" does not exist.', 38, $this->source); })()), "startTime", [], "any", false, false, false, 38)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Avaibility"]) || array_key_exists("Avaibility", $context) ? $context["Avaibility"] : (function () { throw new RuntimeError('Variable "Avaibility" does not exist.', 38, $this->source); })()), "startTime", [], "any", false, false, false, 38), "H:i"), "html", null, true)) : (""));
        yield "</td>
                    </tr>
                    <tr>
                        <th><i class=\"bi bi-clock-history\"></i> Fin</th>
                        <td>";
        // line 42
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["Avaibility"]) || array_key_exists("Avaibility", $context) ? $context["Avaibility"] : (function () { throw new RuntimeError('Variable "Avaibility" does not exist.', 42, $this->source); })()), "endTime", [], "any", false, false, false, 42)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Avaibility"]) || array_key_exists("Avaibility", $context) ? $context["Avaibility"] : (function () { throw new RuntimeError('Variable "Avaibility" does not exist.', 42, $this->source); })()), "endTime", [], "any", false, false, false, 42), "H:i"), "html", null, true)) : (""));
        yield "</td>
                    </tr>
                </tbody>
            </table>

            <!-- Boutons alignés en ligne -->
            <div class=\"d-flex justify-content-center gap-2 mt-4\">
                <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Avaibility_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"bi bi-arrow-left-circle\"></i> Retour
                </a>

                <a href=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Avaibility_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["Avaibility"]) || array_key_exists("Avaibility", $context) ? $context["Avaibility"] : (function () { throw new RuntimeError('Variable "Avaibility" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                    <i class=\"bi bi-pencil-square\"></i> Modifier
                </a>

                ";
        // line 57
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Avaibility/_delete_form.html.twig");
        yield "

                ";
        // line 59
        if ( !(isset($context["isPast"]) || array_key_exists("isPast", $context) ? $context["isPast"] : (function () { throw new RuntimeError('Variable "isPast" does not exist.', 59, $this->source); })())) {
            // line 60
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new", ["AvaibilityId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["Avaibility"]) || array_key_exists("Avaibility", $context) ? $context["Avaibility"] : (function () { throw new RuntimeError('Variable "Avaibility" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\" class=\"btn btn-success\">
                        <i class=\"bi bi-check-circle\"></i> Réserver
                    </a>
                ";
        }
        // line 64
        yield "
                <a href=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_showbyavaibility", ["AvaibilityId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["Avaibility"]) || array_key_exists("Avaibility", $context) ? $context["Avaibility"] : (function () { throw new RuntimeError('Variable "Avaibility" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
        yield "\" class=\"btn btn-info\">
                    <i class=\"bi bi-list-task\"></i> Réservations
                </a>
<a href=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["Avaibility"]) || array_key_exists("Avaibility", $context) ? $context["Avaibility"] : (function () { throw new RuntimeError('Variable "Avaibility" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
        yield "\" title=\"Voir le calendrier\">
    <i class=\"fa-solid fa-calendar\"></i>
</a>


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
        return "avaibility/show.html.twig";
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
        return array (  192 => 68,  186 => 65,  183 => 64,  175 => 60,  173 => 59,  168 => 57,  161 => 53,  154 => 49,  144 => 42,  137 => 38,  130 => 34,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Disponibilité{% endblock %}

{% block main %}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
<style>
a i {
    font-size: 24px;
    color:rgb(0, 0, 0); /* Couleur bleue */
    transition: transform 0.3s ease;
}

a:hover i {
    transform: scale(1.2);
    color:rgb(4, 4, 4); /* Bleu plus foncé au survol */
}



</style>
<div class=\"container mt-4\">
    <div class=\"card shadow-sm border-0 rounded\">
        <div class=\"card-body\">
            <h1 class=\"card-title text-center text-dark mb-4\">
                <i class=\"bi bi-calendar-check\"></i> Détails de la disponibilité
            </h1>

            <table class=\"table table-striped\">
                <tbody>
                   
                    <tr>
                        <th><i class=\"bi bi-calendar-event\"></i> Date</th>
                        <td>{{ Avaibility.date ? Avaibility.date|date('d M Y') : '' }}</td>
                    </tr>
                    <tr>
                        <th><i class=\"bi bi-clock\"></i> Début</th>
                        <td>{{ Avaibility.startTime ? Avaibility.startTime|date('H:i') : '' }}</td>
                    </tr>
                    <tr>
                        <th><i class=\"bi bi-clock-history\"></i> Fin</th>
                        <td>{{ Avaibility.endTime ? Avaibility.endTime|date('H:i') : '' }}</td>
                    </tr>
                </tbody>
            </table>

            <!-- Boutons alignés en ligne -->
            <div class=\"d-flex justify-content-center gap-2 mt-4\">
                <a href=\"{{ path('app_Avaibility_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"bi bi-arrow-left-circle\"></i> Retour
                </a>

                <a href=\"{{ path('app_Avaibility_edit', {'id': Avaibility.id}) }}\" class=\"btn btn-warning\">
                    <i class=\"bi bi-pencil-square\"></i> Modifier
                </a>

                {{ include('Avaibility/_delete_form.html.twig') }}

                {% if not isPast %}
                    <a href=\"{{ path('app_reservation_new', {'AvaibilityId': Avaibility.id}) }}\" class=\"btn btn-success\">
                        <i class=\"bi bi-check-circle\"></i> Réserver
                    </a>
                {% endif %}

                <a href=\"{{ path('app_reservation_showbyavaibility', {'AvaibilityId': Avaibility.id}) }}\" class=\"btn btn-info\">
                    <i class=\"bi bi-list-task\"></i> Réservations
                </a>
<a href=\"{{ path('app_calendar', {'id': Avaibility.id}) }}\" title=\"Voir le calendrier\">
    <i class=\"fa-solid fa-calendar\"></i>
</a>


            </div>

        </div>
    </div>
</div>
{% endblock %}
", "avaibility/show.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\avaibility\\show.html.twig");
    }
}
