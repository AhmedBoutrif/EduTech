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

/* avaibility/calendar.html.twig */
class __TwigTemplate_4a79a36e47fd84fe450cc8372e632e16 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avaibility/calendar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avaibility/calendar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avaibility/calendar.html.twig", 1);
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

        yield "Calendrier du ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Avaibility"]) || array_key_exists("Avaibility", $context) ? $context["Avaibility"] : (function () { throw new RuntimeError('Variable "Avaibility" does not exist.', 3, $this->source); })()), "date", [], "any", false, false, false, 3), "d/m/Y"), "html", null, true);
        
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
        yield "<h1>Calendrier du ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Avaibility"]) || array_key_exists("Avaibility", $context) ? $context["Avaibility"] : (function () { throw new RuntimeError('Variable "Avaibility" does not exist.', 6, $this->source); })()), "date", [], "any", false, false, false, 6), "d/m/Y"), "html", null, true);
        yield "</h1>

<!-- FullCalendar and FontAwesome -->
<link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css\" rel=\"stylesheet\">
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">

<style>
.fc-event {
    padding: 20px;
    height: 40px !important;
    line-height: 15px !important;
    font-size: 12px !important;
    max-width: 400px !important;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    position: relative;
}
.confirmed-slot {
    border: 2px solid #1e7e34;
    box-shadow: 0px 4px 10px rgba(40, 167, 69, 0.7);
}
.fc-event:hover {
    transform: scale(1.2);
    box-shadow: 0px 6px 15px rgba(255, 255, 255, 0.9);
    filter: brightness(1.2);
    z-index: 50;
}
.event-time {
    color: white !important;
    font-weight: bold;
}
.confirm-icon {
    color: white !important;
    cursor: pointer;
    font-size: 18px;
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
}
.confirmed {
    color: #28a745 !important;
}
</style>

<div id=\"calendar\"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var meetings = [];

    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 61
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 61) != "canceled")) {
                // line 62
                yield "            meetings.push({
                id: '";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 63), "html", null, true);
                yield "',
                start: '";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "getStartTime", [], "method", false, false, false, 64), "Y-m-d\\TH:i:s"), "html", null, true);
                yield "',
                end: '";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "getStartTime", [], "method", false, false, false, 65), (("+" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "duration", [], "any", false, false, false, 65)) . " minutes")), "Y-m-d\\TH:i:s"), "html", null, true);
                yield "',
                color: '";
                // line 66
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 66) == "confirmed")) ? ("#28a745") : ("#87CEFA"));
                yield "',
                textColor: \"white\",
                extendedProps: {
                    status: '";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 69), "html", null, true);
                yield "',
                    startTime: '";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "getStartTime", [], "method", false, false, false, 70), "H:i"), "html", null, true);
                yield "',
                    endTime: '";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "getStartTime", [], "method", false, false, false, 71), (("+" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "duration", [], "any", false, false, false, 71)) . " minutes")), "H:i"), "html", null, true);
                yield "',
                    iconClass: '";
                // line 72
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 72) == "confirmed")) ? ("fa-check-square confirmed") : ("fa-square"));
                yield "'
                }
            });
        ";
            }
            // line 76
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridDay',
        locale: 'fr',
        initialDate: '";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Avaibility"]) || array_key_exists("Avaibility", $context) ? $context["Avaibility"] : (function () { throw new RuntimeError('Variable "Avaibility" does not exist.', 81, $this->source); })()), "date", [], "any", false, false, false, 81), "Y-m-d"), "html", null, true);
        yield "',
        slotMinTime: '";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Avaibility"]) || array_key_exists("Avaibility", $context) ? $context["Avaibility"] : (function () { throw new RuntimeError('Variable "Avaibility" does not exist.', 82, $this->source); })()), "startTime", [], "any", false, false, false, 82), "H:i:s"), "html", null, true);
        yield "',
         slotMaxTime: '";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Avaibility"]) || array_key_exists("Avaibility", $context) ? $context["Avaibility"] : (function () { throw new RuntimeError('Variable "Avaibility" does not exist.', 83, $this->source); })()), "endTime", [], "any", false, false, false, 83), "+1 minute"), "H:i:s"), "html", null, true);
        yield "',
        events: meetings,
        slotDuration: '00:15:00',
        slotLabelInterval: '01:00:00',
        height: 'auto',
        slotEventOverlap: false,

        eventDidMount: function(info) {
            if (info.event.backgroundColor === \"#28a745\") {
                info.el.classList.add(\"confirmed-slot\");
            }

            // Add reservation time and title
            let contentHtml = `
                <span class=\"event-time\">\${info.event.extendedProps.startTime} - \${info.event.extendedProps.endTime}</span>
                <br>
                <strong>\${info.event.title}</strong>
            `;

            info.el.innerHTML = contentHtml;

            // Create and append the confirmation icon
            let confirmIcon = document.createElement(\"i\");
            confirmIcon.classList.add(\"fas\", ...info.event.extendedProps.iconClass.split(\" \"));
            confirmIcon.classList.add(\"confirm-icon\");

            confirmIcon.dataset.id = info.event.id; // Store ID for AJAX request

            if (info.event.extendedProps.status !== \"confirmed\") {
                confirmIcon.addEventListener(\"click\", function() {
                    toggleReservationStatus(this);
                });
            }

            info.el.appendChild(confirmIcon);
        }
    });

    calendar.render();
});

// Toggle reservation status
function toggleReservationStatus(icon) {
    let reservationId = icon.dataset.id;

    fetch(`/toggle-reservation/\${reservationId}`, {
        method: \"POST\",
        headers: {
            \"X-Requested-With\": \"XMLHttpRequest\",
            \"Content-Type\": \"application/json\"
        },
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Toggle the icon
            if (data.status === \"confirmed\") {
                icon.classList.remove(\"fa-square\");
                icon.classList.add(\"fa-check-square\", \"confirmed\");
                icon.style.color = \"#28a745\";
            } else {
                icon.classList.remove(\"fa-check-square\", \"confirmed\");
                icon.classList.add(\"fa-square\");
                icon.style.color = \"black\";
            }
        }
    });
}
</script>

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
        return "avaibility/calendar.html.twig";
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
        return array (  226 => 83,  222 => 82,  218 => 81,  212 => 77,  206 => 76,  199 => 72,  195 => 71,  191 => 70,  187 => 69,  181 => 66,  177 => 65,  173 => 64,  169 => 63,  166 => 62,  163 => 61,  159 => 60,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Calendrier du {{ Avaibility.date|date('d/m/Y') }}{% endblock %}

{% block main %}
<h1>Calendrier du {{ Avaibility.date|date('d/m/Y') }}</h1>

<!-- FullCalendar and FontAwesome -->
<link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css\" rel=\"stylesheet\">
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">

<style>
.fc-event {
    padding: 20px;
    height: 40px !important;
    line-height: 15px !important;
    font-size: 12px !important;
    max-width: 400px !important;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    position: relative;
}
.confirmed-slot {
    border: 2px solid #1e7e34;
    box-shadow: 0px 4px 10px rgba(40, 167, 69, 0.7);
}
.fc-event:hover {
    transform: scale(1.2);
    box-shadow: 0px 6px 15px rgba(255, 255, 255, 0.9);
    filter: brightness(1.2);
    z-index: 50;
}
.event-time {
    color: white !important;
    font-weight: bold;
}
.confirm-icon {
    color: white !important;
    cursor: pointer;
    font-size: 18px;
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
}
.confirmed {
    color: #28a745 !important;
}
</style>

<div id=\"calendar\"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var meetings = [];

    {% for reservation in reservations %}
        {% if reservation.status != 'canceled' %}
            meetings.push({
                id: '{{ reservation.id }}',
                start: '{{ reservation.getStartTime()|date(\"Y-m-d\\\\TH:i:s\") }}',
                end: '{{ (reservation.getStartTime()|date_modify(\"+\" ~ reservation.duration ~ \" minutes\"))|date(\"Y-m-d\\\\TH:i:s\") }}',
                color: '{{ reservation.status == \"confirmed\" ? \"#28a745\" : \"#87CEFA\" }}',
                textColor: \"white\",
                extendedProps: {
                    status: '{{ reservation.status }}',
                    startTime: '{{ reservation.getStartTime()|date(\"H:i\") }}',
                    endTime: '{{ (reservation.getStartTime()|date_modify(\"+\" ~ reservation.duration ~ \" minutes\"))|date(\"H:i\") }}',
                    iconClass: '{{ reservation.status == \"confirmed\" ? \"fa-check-square confirmed\" : \"fa-square\" }}'
                }
            });
        {% endif %}
    {% endfor %}

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridDay',
        locale: 'fr',
        initialDate: '{{ Avaibility.date|date('Y-m-d') }}',
        slotMinTime: '{{ Avaibility.startTime|date(\"H:i:s\") }}',
         slotMaxTime: '{{ Avaibility.endTime|date_modify(\"+1 minute\")|date(\"H:i:s\") }}',
        events: meetings,
        slotDuration: '00:15:00',
        slotLabelInterval: '01:00:00',
        height: 'auto',
        slotEventOverlap: false,

        eventDidMount: function(info) {
            if (info.event.backgroundColor === \"#28a745\") {
                info.el.classList.add(\"confirmed-slot\");
            }

            // Add reservation time and title
            let contentHtml = `
                <span class=\"event-time\">\${info.event.extendedProps.startTime} - \${info.event.extendedProps.endTime}</span>
                <br>
                <strong>\${info.event.title}</strong>
            `;

            info.el.innerHTML = contentHtml;

            // Create and append the confirmation icon
            let confirmIcon = document.createElement(\"i\");
            confirmIcon.classList.add(\"fas\", ...info.event.extendedProps.iconClass.split(\" \"));
            confirmIcon.classList.add(\"confirm-icon\");

            confirmIcon.dataset.id = info.event.id; // Store ID for AJAX request

            if (info.event.extendedProps.status !== \"confirmed\") {
                confirmIcon.addEventListener(\"click\", function() {
                    toggleReservationStatus(this);
                });
            }

            info.el.appendChild(confirmIcon);
        }
    });

    calendar.render();
});

// Toggle reservation status
function toggleReservationStatus(icon) {
    let reservationId = icon.dataset.id;

    fetch(`/toggle-reservation/\${reservationId}`, {
        method: \"POST\",
        headers: {
            \"X-Requested-With\": \"XMLHttpRequest\",
            \"Content-Type\": \"application/json\"
        },
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Toggle the icon
            if (data.status === \"confirmed\") {
                icon.classList.remove(\"fa-square\");
                icon.classList.add(\"fa-check-square\", \"confirmed\");
                icon.style.color = \"#28a745\";
            } else {
                icon.classList.remove(\"fa-check-square\", \"confirmed\");
                icon.classList.add(\"fa-square\");
                icon.style.color = \"black\";
            }
        }
    });
}
</script>

{% endblock %}
", "avaibility/calendar.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\avaibility\\calendar.html.twig");
    }
}
