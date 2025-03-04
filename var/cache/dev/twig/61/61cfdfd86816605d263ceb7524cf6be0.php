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

/* partials/_notification_badge.html.twig */
class __TwigTemplate_ca626d8ba5946db92c0a92aafb58241b extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_notification_badge.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_notification_badge.html.twig"));

        // line 2
        yield "<div class=\"notification-container dropdown\">
    <button class=\"btn btn-link position-relative dropdown-toggle\" type=\"button\" id=\"notificationDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        <i class=\"bi bi-bell-fill fs-5\"></i>
        ";
        // line 5
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 5, $this->source); })())) > 0)) {
            // line 6
            yield "            <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger\">
                ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 7, $this->source); })())), "html", null, true);
            yield "
                <span class=\"visually-hidden\">Nouvelles notifications</span>
            </span>
        ";
        }
        // line 11
        yield "    </button>
    <ul class=\"dropdown-menu dropdown-menu-end notification-dropdown\" aria-labelledby=\"notificationDropdown\">
        <li><h6 class=\"dropdown-header\">Notifications</h6></li>
        
        ";
        // line 15
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 15, $this->source); })()))) {
            // line 16
            yield "            <li><span class=\"dropdown-item text-muted\">Aucune notification</span></li>
        ";
        } else {
            // line 18
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 19
                yield "                <li>
                    <a class=\"dropdown-item notification-item ";
                // line 20
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "isRead", [], "any", false, false, false, 20)) {
                    yield "unread";
                }
                yield "\" 
                       href=\"";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_marquer_lue", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                yield "\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0\">
                                <i class=\"bi ";
                // line 24
                if (CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "commentaire", [], "any", false, false, false, 24)) {
                    yield "bi-chat-text";
                } else {
                    yield "bi-hand-thumbs-up";
                }
                yield " text-primary\"></i>
                            </div>
                            <div class=\"flex-grow-1 ms-2\">
                                <p class=\"mb-0\">
                                    ";
                // line 28
                if (CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "commentaire", [], "any", false, false, false, 28)) {
                    // line 29
                    yield "                                        Quelqu'un a répondu à votre commentaire
                                    ";
                } else {
                    // line 31
                    yield "                                        Quelqu'un a réagi à votre contenu
                                    ";
                }
                // line 33
                yield "                                </p>
                                <small class=\"text-muted\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "createdAt", [], "any", false, false, false, 34), "d/m/Y H:i"), "html", null, true);
                yield "</small>
                            </div>
                        </div>
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item text-center\" href=\"";
            // line 41
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notification");
            yield "\">Voir toutes les notifications</a></li>
        ";
        }
        // line 43
        yield "    </ul>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_notification_badge.html.twig";
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
        return array (  141 => 43,  136 => 41,  133 => 40,  121 => 34,  118 => 33,  114 => 31,  110 => 29,  108 => 28,  97 => 24,  91 => 21,  85 => 20,  82 => 19,  77 => 18,  73 => 16,  71 => 15,  65 => 11,  58 => 7,  55 => 6,  53 => 5,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/partials/_notification_badge.html.twig #}
<div class=\"notification-container dropdown\">
    <button class=\"btn btn-link position-relative dropdown-toggle\" type=\"button\" id=\"notificationDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        <i class=\"bi bi-bell-fill fs-5\"></i>
        {% if notifications|length > 0 %}
            <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger\">
                {{ notifications|length }}
                <span class=\"visually-hidden\">Nouvelles notifications</span>
            </span>
        {% endif %}
    </button>
    <ul class=\"dropdown-menu dropdown-menu-end notification-dropdown\" aria-labelledby=\"notificationDropdown\">
        <li><h6 class=\"dropdown-header\">Notifications</h6></li>
        
        {% if notifications is empty %}
            <li><span class=\"dropdown-item text-muted\">Aucune notification</span></li>
        {% else %}
            {% for notification in notifications %}
                <li>
                    <a class=\"dropdown-item notification-item {% if not notification.isRead %}unread{% endif %}\" 
                       href=\"{{ path('notification_marquer_lue', {'id': notification.id}) }}\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0\">
                                <i class=\"bi {% if notification.commentaire %}bi-chat-text{% else %}bi-hand-thumbs-up{% endif %} text-primary\"></i>
                            </div>
                            <div class=\"flex-grow-1 ms-2\">
                                <p class=\"mb-0\">
                                    {% if notification.commentaire %}
                                        Quelqu'un a répondu à votre commentaire
                                    {% else %}
                                        Quelqu'un a réagi à votre contenu
                                    {% endif %}
                                </p>
                                <small class=\"text-muted\">{{ notification.createdAt|date('d/m/Y H:i') }}</small>
                            </div>
                        </div>
                    </a>
                </li>
            {% endfor %}
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item text-center\" href=\"{{ path('app_notification') }}\">Voir toutes les notifications</a></li>
        {% endif %}
    </ul>
</div>", "partials/_notification_badge.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\partials\\_notification_badge.html.twig");
    }
}
