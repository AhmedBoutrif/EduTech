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

/* back/reservation/index.html.twig */
class __TwigTemplate_bd84a44ef43450814a6219d1629939ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/reservation/index.html.twig", 1);
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

        yield "Liste des Réservations";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Liste des Réservations</h1>

        <table class=\"table table-striped table-bordered\">
            <thead class=\"table-dark\">
                <tr>
                   
                    <th>Sujet</th>
                    <th>Heure de début</th>
                    <th>Heure de fin</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 22
            yield "    ";
            $context["currentDateTime"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d H:i");
            // line 23
            yield "    ";
            $context["reservationStartTime"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "startTime", [], "any", false, false, false, 23), "Y-m-d H:i");
            // line 24
            yield "    ";
            $context["reservationEndTime"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "startTime", [], "any", false, false, false, 24), (("+" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "duration", [], "any", false, false, false, 24)) . " minutes")), "Y-m-d H:i");
            // line 25
            yield "    ";
            $context["isPast"] = ((isset($context["reservationEndTime"]) || array_key_exists("reservationEndTime", $context) ? $context["reservationEndTime"] : (function () { throw new RuntimeError('Variable "reservationEndTime" does not exist.', 25, $this->source); })()) < (isset($context["currentDateTime"]) || array_key_exists("currentDateTime", $context) ? $context["currentDateTime"] : (function () { throw new RuntimeError('Variable "currentDateTime" does not exist.', 25, $this->source); })()));
            yield " ";
            // line 26
            yield "
    <tr>
        <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "topic", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
        <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationStartTime"]) || array_key_exists("reservationStartTime", $context) ? $context["reservationStartTime"] : (function () { throw new RuntimeError('Variable "reservationStartTime" does not exist.', 29, $this->source); })()), "html", null, true);
            yield "</td>
        <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationEndTime"]) || array_key_exists("reservationEndTime", $context) ? $context["reservationEndTime"] : (function () { throw new RuntimeError('Variable "reservationEndTime" does not exist.', 30, $this->source); })()), "html", null, true);
            yield "</td>  ";
            // line 31
            yield "        <td>
            ";
            // line 32
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 32) == "confirmed")) {
                // line 33
                yield "                <span class=\"badge bg-success\">Confirmé</span>
            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 34
$context["reservation"], "status", [], "any", false, false, false, 34) == "pending")) {
                // line 35
                yield "                <span class=\"badge bg-warning text-dark\">En attente</span>
            ";
            } else {
                // line 37
                yield "                <span class=\"badge bg-danger\">Annulé</span>
            ";
            }
            // line 39
            yield "        </td>
        <td>
            <a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Voir</a>

         ";
            // line 43
            if ( !((isset($context["isPast"]) || array_key_exists("isPast", $context) ? $context["isPast"] : (function () { throw new RuntimeError('Variable "isPast" does not exist.', 43, $this->source); })()) || (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 43) == "canceled"))) {
                // line 44
                yield "    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
";
            }
            // line 46
            yield "        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "

            </tbody>
        </table>

        <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_new");
        yield "\" class=\"btn btn-primary\">Créer une nouvelle réservation</a>
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
        return "back/reservation/index.html.twig";
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
        return array (  199 => 54,  192 => 49,  184 => 46,  178 => 44,  176 => 43,  171 => 41,  167 => 39,  163 => 37,  159 => 35,  157 => 34,  154 => 33,  152 => 32,  149 => 31,  146 => 30,  142 => 29,  138 => 28,  134 => 26,  130 => 25,  127 => 24,  124 => 23,  121 => 22,  117 => 21,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseB.html.twig' %}

{% block title %}Liste des Réservations{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Liste des Réservations</h1>

        <table class=\"table table-striped table-bordered\">
            <thead class=\"table-dark\">
                <tr>
                   
                    <th>Sujet</th>
                    <th>Heure de début</th>
                    <th>Heure de fin</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
      {% for reservation in reservations %}
    {% set currentDateTime = \"now\"|date(\"Y-m-d H:i\") %}
    {% set reservationStartTime = reservation.startTime|date(\"Y-m-d H:i\") %}
    {% set reservationEndTime = (reservation.startTime|date_modify('+' ~ reservation.duration ~ ' minutes'))|date(\"Y-m-d H:i\") %}
    {% set isPast = reservationEndTime < currentDateTime %} {# Vérifie si la réunion est passée #}

    <tr>
        <td>{{ reservation.topic }}</td>
        <td>{{ reservationStartTime }}</td>
        <td>{{ reservationEndTime }}</td>  {# Affiche l'heure de fin calculée #}
        <td>
            {% if reservation.status == 'confirmed' %}
                <span class=\"badge bg-success\">Confirmé</span>
            {% elseif reservation.status == 'pending' %}
                <span class=\"badge bg-warning text-dark\">En attente</span>
            {% else %}
                <span class=\"badge bg-danger\">Annulé</span>
            {% endif %}
        </td>
        <td>
            <a href=\"{{ path('admin_reservation_show', {'id': reservation.id}) }}\" class=\"btn btn-info btn-sm\">Voir</a>

         {% if not (isPast or reservation.status == 'canceled') %}
    <a href=\"{{ path('app_reservation_edit', {'id': reservation.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
{% endif %}
        </td>
    </tr>
{% endfor %}


            </tbody>
        </table>

        <a href=\"{{ path('admin_reservation_new') }}\" class=\"btn btn-primary\">Créer une nouvelle réservation</a>
    </div>
{% endblock %}
", "back/reservation/index.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\back\\reservation\\index.html.twig");
    }
}
