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

/* back/reservation/showbyAvaibility.html.twig */
class __TwigTemplate_f712b1561e10a6a158f0fefcf92001e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/reservation/showbyAvaibility.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/reservation/showbyAvaibility.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/reservation/showbyAvaibility.html.twig", 1);
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
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 21
            yield "                    ";
            $context["currentDateTime"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d H:i");
            // line 22
            yield "                    ";
            $context["reservationStartTime"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "startTime", [], "any", false, false, false, 22), "Y-m-d H:i");
            // line 23
            yield "                    ";
            $context["reservationEndTime"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "startTime", [], "any", false, false, false, 23), (("+" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "duration", [], "any", false, false, false, 23)) . " minutes")), "Y-m-d H:i");
            // line 24
            yield "                    ";
            $context["isPast"] = ((isset($context["reservationEndTime"]) || array_key_exists("reservationEndTime", $context) ? $context["reservationEndTime"] : (function () { throw new RuntimeError('Variable "reservationEndTime" does not exist.', 24, $this->source); })()) < (isset($context["currentDateTime"]) || array_key_exists("currentDateTime", $context) ? $context["currentDateTime"] : (function () { throw new RuntimeError('Variable "currentDateTime" does not exist.', 24, $this->source); })()));
            // line 25
            yield "
                    <tr>
                        <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "topic", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                        <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationStartTime"]) || array_key_exists("reservationStartTime", $context) ? $context["reservationStartTime"] : (function () { throw new RuntimeError('Variable "reservationStartTime" does not exist.', 28, $this->source); })()), "html", null, true);
            yield "</td>
                        <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationEndTime"]) || array_key_exists("reservationEndTime", $context) ? $context["reservationEndTime"] : (function () { throw new RuntimeError('Variable "reservationEndTime" does not exist.', 29, $this->source); })()), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 31
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 31) == "confirmed")) {
                // line 32
                yield "                                <span class=\"badge bg-success\">Confirmé</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 33
$context["reservation"], "status", [], "any", false, false, false, 33) == "not confirmed")) {
                // line 34
                yield "                                <span class=\"badge bg-warning text-dark\">En attente</span>
                            ";
            } else {
                // line 36
                yield "                                <span class=\"badge bg-danger\">Annulé</span>
                            ";
            }
            // line 38
            yield "                        </td>
                        <td>
                            ";
            // line 40
            if ( !(isset($context["isPast"]) || array_key_exists("isPast", $context) ? $context["isPast"] : (function () { throw new RuntimeError('Variable "isPast" does not exist.', 40, $this->source); })())) {
                // line 41
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                <a href=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                yield "\" class=\"btn btn-danger btn-sm\" 
                                   onclick=\"return confirm('Voulez-vous vraiment supprimer cette réservation ?');\">Supprimer</a>
                            ";
            }
            // line 45
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 47
        if (!$context['_iterated']) {
            // line 48
            yield "                    <tr>
                        <td colspan=\"5\" class=\"text-center\">Aucune réservation trouvée.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "            </tbody>
        </table>

        <a href=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_Avaibility_show", ["id" => (isset($context["AvaibilityId"]) || array_key_exists("AvaibilityId", $context) ? $context["AvaibilityId"] : (function () { throw new RuntimeError('Variable "AvaibilityId" does not exist.', 55, $this->source); })())]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">Retour à la disponibilité</a>
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
        return "back/reservation/showbyAvaibility.html.twig";
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
        return array (  204 => 55,  199 => 52,  190 => 48,  188 => 47,  182 => 45,  176 => 42,  171 => 41,  169 => 40,  165 => 38,  161 => 36,  157 => 34,  155 => 33,  152 => 32,  150 => 31,  145 => 29,  141 => 28,  137 => 27,  133 => 25,  130 => 24,  127 => 23,  124 => 22,  121 => 21,  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                    {% set isPast = reservationEndTime < currentDateTime %}

                    <tr>
                        <td>{{ reservation.topic }}</td>
                        <td>{{ reservationStartTime }}</td>
                        <td>{{ reservationEndTime }}</td>
                        <td>
                            {% if reservation.status == 'confirmed' %}
                                <span class=\"badge bg-success\">Confirmé</span>
                            {% elseif reservation.status == 'not confirmed' %}
                                <span class=\"badge bg-warning text-dark\">En attente</span>
                            {% else %}
                                <span class=\"badge bg-danger\">Annulé</span>
                            {% endif %}
                        </td>
                        <td>
                            {% if not isPast %}
                                <a href=\"{{ path('admin_reservation_edit', {'id': reservation.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                <a href=\"{{ path('admin_reservation_delete', {'id': reservation.id}) }}\" class=\"btn btn-danger btn-sm\" 
                                   onclick=\"return confirm('Voulez-vous vraiment supprimer cette réservation ?');\">Supprimer</a>
                            {% endif %}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\" class=\"text-center\">Aucune réservation trouvée.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <a href=\"{{ path('admin_Avaibility_show', {'id': AvaibilityId}) }}\" class=\"btn btn-secondary\">Retour à la disponibilité</a>
    </div>
{% endblock %}
", "back/reservation/showbyAvaibility.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\back\\reservation\\showbyAvaibility.html.twig");
    }
}
