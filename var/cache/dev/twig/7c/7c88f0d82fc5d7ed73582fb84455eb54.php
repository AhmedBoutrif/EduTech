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

/* event/_delete_form.html.twig */
class __TwigTemplate_b25aa9f4c8c52927bb5084319c676529 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/_delete_form.html.twig"));

        // line 1
        yield "<form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        yield "\" 
      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3))), "html", null, true);
        yield "\">
    
    <button class=\"btn btn-danger btn-sm\" style=\"border-radius: 6px;\">
        <i class=\"fas fa-trash-alt\"></i> Supprimer
    </button>
</form>

<style>
    /* Style général pour les boutons */
    .btn-danger {
        background-color: #dc3545;
        color: white;
        border: none;
        border-radius: 6px;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #c82333;
        color: white;
        transform: scale(1.05);
    }

    .btn-danger:focus {
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
    }

    /* Espacement de l'icône */
    .fas.fa-trash-alt {
        margin-right: 8px;
    }

    /* Bouton de petite taille */
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.9rem;
    }

    /* Effet de survol du bouton */
    .btn-danger:hover {
        background-color: #c82333;
        color: white;
    }
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "event/_delete_form.html.twig";
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
        return array (  54 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form method=\"post\" action=\"{{ path('app_event_delete', {'id': event.id}) }}\" 
      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event.id) }}\">
    
    <button class=\"btn btn-danger btn-sm\" style=\"border-radius: 6px;\">
        <i class=\"fas fa-trash-alt\"></i> Supprimer
    </button>
</form>

<style>
    /* Style général pour les boutons */
    .btn-danger {
        background-color: #dc3545;
        color: white;
        border: none;
        border-radius: 6px;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #c82333;
        color: white;
        transform: scale(1.05);
    }

    .btn-danger:focus {
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
    }

    /* Espacement de l'icône */
    .fas.fa-trash-alt {
        margin-right: 8px;
    }

    /* Bouton de petite taille */
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.9rem;
    }

    /* Effet de survol du bouton */
    .btn-danger:hover {
        background-color: #c82333;
        color: white;
    }
</style>
", "event/_delete_form.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\event\\_delete_form.html.twig");
    }
}
