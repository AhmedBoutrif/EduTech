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

/* back/abonnement/edit.html.twig */
class __TwigTemplate_df8bfc749632d22425ea1f5e7d813ffd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/abonnement/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/abonnement/edit.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/abonnement/edit.html.twig", 1);
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

        yield "Edit Abonnement";
        
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
        yield "<main id=\"main\" class=\"main\">
    <div class=\"pagetitle text-center\">
        <h1>Edit Abonnement</h1>
        <nav>
            <ol class=\"breadcrumb d-flex justify-content-center\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item\">Forms</li>
                <li class=\"breadcrumb-item active\">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Modifier Abonnement</h5>
                        
                        <style>
                            form {
                                display: flex;
                                flex-direction: column;
                                gap: 15px;
                            }
                            .form-group {
                                display: flex;
                                flex-direction: column;
                                gap: 5px;
                            }
                            .form-group label {
                                font-weight: bold;
                            }
                            .form-control {
                                width: 100%;
                                padding: 10px;
                                border: 1px solid #ced4da;
                                border-radius: 5px;
                                font-size: 1rem;
                            }
                            .btn-container {
                                display: flex;
                                justify-content: space-between;
                                margin-top: 15px;
                            }
                            .btn {
                                padding: 10px 15px;
                                border-radius: 5px;
                                font-size: 1rem;
                                font-weight: bold;
                                transition: all 0.3s;
                                text-align: center;
                            }
                            .btn-update {
                                background-color: black !important;
                                color: white !important;
                            }
                            .btn-update:hover {
                                background-color: #333 !important;
                            }
                            .btn-secondary {
                                background-color: #6c757d;
                                color: white;
                            }
                            .btn-secondary:hover {
                                background-color: #5a6268;
                            }
                        </style>
                        
                        ";
        // line 75
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_start');
        yield "
                            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 77
            yield "                                <div class=\"form-group\">
                                    ";
            // line 78
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label');
            yield "
                                    ";
            // line 79
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
            // line 80
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
            yield "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "                            <div class=\"btn-container\">
                                <button class=\"btn btn-update\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 84, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
                                <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_controller_abonnement_index");
        yield "\" class=\"btn btn-secondary\">Retour</a>
                            </div>
                        ";
        // line 87
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
        yield "
                        
                        ";
        // line 89
        yield Twig\Extension\CoreExtension::include($this->env, $context, "controller_abonnement/_delete_form.html.twig");
        yield "
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
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
        return "back/abonnement/edit.html.twig";
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
        return array (  216 => 89,  211 => 87,  206 => 85,  202 => 84,  199 => 83,  190 => 80,  186 => 79,  182 => 78,  179 => 77,  175 => 76,  171 => 75,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseB.html.twig' %}

{% block title %}Edit Abonnement{% endblock %}

{% block body %}
<main id=\"main\" class=\"main\">
    <div class=\"pagetitle text-center\">
        <h1>Edit Abonnement</h1>
        <nav>
            <ol class=\"breadcrumb d-flex justify-content-center\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item\">Forms</li>
                <li class=\"breadcrumb-item active\">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Modifier Abonnement</h5>
                        
                        <style>
                            form {
                                display: flex;
                                flex-direction: column;
                                gap: 15px;
                            }
                            .form-group {
                                display: flex;
                                flex-direction: column;
                                gap: 5px;
                            }
                            .form-group label {
                                font-weight: bold;
                            }
                            .form-control {
                                width: 100%;
                                padding: 10px;
                                border: 1px solid #ced4da;
                                border-radius: 5px;
                                font-size: 1rem;
                            }
                            .btn-container {
                                display: flex;
                                justify-content: space-between;
                                margin-top: 15px;
                            }
                            .btn {
                                padding: 10px 15px;
                                border-radius: 5px;
                                font-size: 1rem;
                                font-weight: bold;
                                transition: all 0.3s;
                                text-align: center;
                            }
                            .btn-update {
                                background-color: black !important;
                                color: white !important;
                            }
                            .btn-update:hover {
                                background-color: #333 !important;
                            }
                            .btn-secondary {
                                background-color: #6c757d;
                                color: white;
                            }
                            .btn-secondary:hover {
                                background-color: #5a6268;
                            }
                        </style>
                        
                        {{ form_start(form) }}
                            {% for field in form %}
                                <div class=\"form-group\">
                                    {{ form_label(field) }}
                                    {{ form_widget(field, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(field) }}
                                </div>
                            {% endfor %}
                            <div class=\"btn-container\">
                                <button class=\"btn btn-update\">{{ button_label|default('Save') }}</button>
                                <a href=\"{{ path('app_controller_abonnement_index') }}\" class=\"btn btn-secondary\">Retour</a>
                            </div>
                        {{ form_end(form) }}
                        
                        {{ include('controller_abonnement/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
{% endblock %}
", "back/abonnement/edit.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\back\\abonnement\\edit.html.twig");
    }
}
