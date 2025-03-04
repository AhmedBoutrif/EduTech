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

/* notification/index.html.twig */
class __TwigTemplate_3385a151a3e614e7b854bd0c5519253c extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "notification/index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Notifications - Multipédia";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"container-fluid\">
    <div class=\"row mb-4\">
        <div class=\"col-md-12\">
            <h1>Mes notifications</h1>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    ";
        // line 18
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 18, $this->source); })()))) {
            // line 19
            yield "                        <div class=\"text-center py-5\">
                            <i class=\"bi bi-bell-slash fs-1 text-muted\"></i>
                            <p class=\"mt-3\">Vous n'avez aucune notification.</p>
                        </div>
                    ";
        } else {
            // line 24
            yield "                        <div class=\"list-group\">
                            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 26
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_marquer_lue", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                yield "\" 
                                   class=\"list-group-item list-group-item-action ";
                // line 27
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "isRead", [], "any", false, false, false, 27)) {
                    yield "list-group-item-primary";
                }
                yield "\">
                                    <div class=\"d-flex w-100 justify-content-between align-items-center\">
                                        <div>
                                            <h5 class=\"mb-1\">
                                                <i class=\"bi ";
                // line 31
                if (CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "commentaire", [], "any", false, false, false, 31)) {
                    yield "bi-chat-text";
                } else {
                    yield "bi-hand-thumbs-up";
                }
                yield " me-2\"></i>
                                                ";
                // line 32
                if (CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "commentaire", [], "any", false, false, false, 32)) {
                    // line 33
                    yield "                                                    Nouveau commentaire
                                                ";
                } else {
                    // line 35
                    yield "                                                    Nouvelle réaction
                                                ";
                }
                // line 37
                yield "                                            </h5>
                                            <p class=\"mb-1\">
                                                ";
                // line 39
                if (CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "commentaire", [], "any", false, false, false, 39)) {
                    // line 40
                    yield "                                                    Quelqu'un a répondu à votre commentaire: \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "commentaire", [], "any", false, false, false, 40), "contenu", [], "any", false, false, false, 40), 0, 50), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "commentaire", [], "any", false, false, false, 40), "contenu", [], "any", false, false, false, 40)) > 50)) {
                        yield "...";
                    }
                    yield "\"
                                                ";
                } else {
                    // line 42
                    yield "                                                    Quelqu'un a réagi à votre contenu
                                                ";
                }
                // line 44
                yield "                                            </p>
                                        </div>
                                        <small class=\"text-muted\">";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "createdAt", [], "any", false, false, false, 46), "d/m/Y H:i"), "html", null, true);
                yield "</small>
                                    </div>
                                </a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "                        </div>
                    ";
        }
        // line 52
        yield "                </div>
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
        return "notification/index.html.twig";
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
        return array (  198 => 52,  194 => 50,  184 => 46,  180 => 44,  176 => 42,  167 => 40,  165 => 39,  161 => 37,  157 => 35,  153 => 33,  151 => 32,  143 => 31,  134 => 27,  129 => 26,  125 => 25,  122 => 24,  115 => 19,  113 => 18,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/notification/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Notifications - Multipédia{% endblock %}

{% block main %}
<div class=\"container-fluid\">
    <div class=\"row mb-4\">
        <div class=\"col-md-12\">
            <h1>Mes notifications</h1>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    {% if notifications is empty %}
                        <div class=\"text-center py-5\">
                            <i class=\"bi bi-bell-slash fs-1 text-muted\"></i>
                            <p class=\"mt-3\">Vous n'avez aucune notification.</p>
                        </div>
                    {% else %}
                        <div class=\"list-group\">
                            {% for notification in notifications %}
                                <a href=\"{{ path('notification_marquer_lue', {'id': notification.id}) }}\" 
                                   class=\"list-group-item list-group-item-action {% if not notification.isRead %}list-group-item-primary{% endif %}\">
                                    <div class=\"d-flex w-100 justify-content-between align-items-center\">
                                        <div>
                                            <h5 class=\"mb-1\">
                                                <i class=\"bi {% if notification.commentaire %}bi-chat-text{% else %}bi-hand-thumbs-up{% endif %} me-2\"></i>
                                                {% if notification.commentaire %}
                                                    Nouveau commentaire
                                                {% else %}
                                                    Nouvelle réaction
                                                {% endif %}
                                            </h5>
                                            <p class=\"mb-1\">
                                                {% if notification.commentaire %}
                                                    Quelqu'un a répondu à votre commentaire: \"{{ notification.commentaire.contenu|slice(0, 50) }}{% if notification.commentaire.contenu|length > 50 %}...{% endif %}\"
                                                {% else %}
                                                    Quelqu'un a réagi à votre contenu
                                                {% endif %}
                                            </p>
                                        </div>
                                        <small class=\"text-muted\">{{ notification.createdAt|date('d/m/Y H:i') }}</small>
                                    </div>
                                </a>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "notification/index.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\notification\\index.html.twig");
    }
}
