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

/* categoryevent/show.html.twig */
class __TwigTemplate_880cab763d92a9dd7d1df916404768fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categoryevent/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categoryevent/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categoryevent/show.html.twig", 1);
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

        yield "Categoryevent";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Categoryevent</h1>

        <div class=\"card shadow-sm\">
            <div class=\"card-body\">
                <table class=\"table table-bordered table-striped table-hover\">
                    <tbody>
                        <tr>
                            <th class=\"bg-primary text-white\">Id</th>
                            <td>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoryevent"]) || array_key_exists("categoryevent", $context) ? $context["categoryevent"] : (function () { throw new RuntimeError('Variable "categoryevent" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th class=\"bg-primary text-white\">Location</th>
                            <td>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoryevent"]) || array_key_exists("categoryevent", $context) ? $context["categoryevent"] : (function () { throw new RuntimeError('Variable "categoryevent" does not exist.', 19, $this->source); })()), "location", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th class=\"bg-primary text-white\">Type</th>
                            <td>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoryevent"]) || array_key_exists("categoryevent", $context) ? $context["categoryevent"] : (function () { throw new RuntimeError('Variable "categoryevent" does not exist.', 23, $this->source); })()), "type", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th class=\"bg-primary text-white\">Duration</th>
                            <td>";
        // line 27
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoryevent"]) || array_key_exists("categoryevent", $context) ? $context["categoryevent"] : (function () { throw new RuntimeError('Variable "categoryevent" does not exist.', 27, $this->source); })()), "duration", [], "any", false, false, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoryevent"]) || array_key_exists("categoryevent", $context) ? $context["categoryevent"] : (function () { throw new RuntimeError('Variable "categoryevent" does not exist.', 27, $this->source); })()), "duration", [], "any", false, false, false, 27), "H:i:s"), "html", null, true)) : (""));
        yield "</td>
                        </tr>
                    </tbody>
                </table>

                <div class=\"d-flex justify-content-between\">
                    <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categoryevent_index");
        yield "\" class=\"btn btn-secondary\">Back to list</a>
                    <a href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categoryevent_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoryevent"]) || array_key_exists("categoryevent", $context) ? $context["categoryevent"] : (function () { throw new RuntimeError('Variable "categoryevent" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">Edit</a>
                </div>

                <div class=\"mt-4\">
                    ";
        // line 38
        yield Twig\Extension\CoreExtension::include($this->env, $context, "categoryevent/_delete_form.html.twig");
        yield "
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
        return "categoryevent/show.html.twig";
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
        return array (  152 => 38,  145 => 34,  141 => 33,  132 => 27,  125 => 23,  118 => 19,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Categoryevent{% endblock %}

{% block main %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Categoryevent</h1>

        <div class=\"card shadow-sm\">
            <div class=\"card-body\">
                <table class=\"table table-bordered table-striped table-hover\">
                    <tbody>
                        <tr>
                            <th class=\"bg-primary text-white\">Id</th>
                            <td>{{ categoryevent.id }}</td>
                        </tr>
                        <tr>
                            <th class=\"bg-primary text-white\">Location</th>
                            <td>{{ categoryevent.location }}</td>
                        </tr>
                        <tr>
                            <th class=\"bg-primary text-white\">Type</th>
                            <td>{{ categoryevent.type }}</td>
                        </tr>
                        <tr>
                            <th class=\"bg-primary text-white\">Duration</th>
                            <td>{{ categoryevent.duration ? categoryevent.duration|date('H:i:s') : '' }}</td>
                        </tr>
                    </tbody>
                </table>

                <div class=\"d-flex justify-content-between\">
                    <a href=\"{{ path('app_categoryevent_index') }}\" class=\"btn btn-secondary\">Back to list</a>
                    <a href=\"{{ path('app_categoryevent_edit', {'id': categoryevent.id}) }}\" class=\"btn btn-warning\">Edit</a>
                </div>

                <div class=\"mt-4\">
                    {{ include('categoryevent/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "categoryevent/show.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\categoryevent\\show.html.twig");
    }
}
