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

/* event/new.html.twig */
class __TwigTemplate_e18da8dc1f589cafe6275833fee50f83 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/new.html.twig", 1);
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

        yield "Créer un nouvel événement";
        
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
        <div class=\"card shadow-lg p-4\">
            <h1 class=\"mb-4 text-center text-primary\">Créer un nouvel événement</h1>

            <div class=\"row justify-content-center\">
                <div class=\"col-md-8\">
                    <div class=\"card-body\">
                        ";
        // line 14
        yield "                        ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
        yield "
                            <div class=\"mb-3\">
                                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), 'row', ["label" => "Titre de l'événement", "attr" => ["class" => "form-control", "placeholder" => "Entrez le titre de l'événement"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), 'row', ["label" => "Description", "attr" => ["class" => "form-control", "rows" => 5, "placeholder" => "Décrivez l'événement"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "date", [], "any", false, false, false, 24), 'row', ["label" => "Date", "attr" => ["class" => "form-control", "placeholder" => "Sélectionnez la date"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "photo", [], "any", false, false, false, 28), 'row', ["label" => "Photo de l'événement", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>

                            <div class=\"text-center mt-4\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg px-4 py-2\">
                                    <i class=\"fas fa-plus-circle\"></i> Créer l'événement
                                </button>
                            </div>
                        ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>

            <div class=\"text-center mt-3\">
                <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\" class=\"btn btn-secondary btn-lg px-4 py-2\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
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
        return "event/new.html.twig";
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
        return array (  156 => 42,  147 => 36,  136 => 28,  129 => 24,  122 => 20,  115 => 16,  109 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un nouvel événement{% endblock %}

{% block main %}
    <div class=\"container mt-5\">
        <div class=\"card shadow-lg p-4\">
            <h1 class=\"mb-4 text-center text-primary\">Créer un nouvel événement</h1>

            <div class=\"row justify-content-center\">
                <div class=\"col-md-8\">
                    <div class=\"card-body\">
                        {# Formulaire d'ajout d'événement #}
                        {{ form_start(form, {'attr': {'class': 'form'}}) }}
                            <div class=\"mb-3\">
                                {{ form_row(form.title, {'label': 'Titre de l\\'événement', 'attr': {'class': 'form-control', 'placeholder': 'Entrez le titre de l\\'événement'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_row(form.description, {'label': 'Description', 'attr': {'class': 'form-control', 'rows': 5, 'placeholder': 'Décrivez l\\'événement'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_row(form.date, {'label': 'Date', 'attr': {'class': 'form-control', 'placeholder': 'Sélectionnez la date'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_row(form.photo, {'label': 'Photo de l\\'événement', 'attr': {'class': 'form-control'}}) }}
                            </div>

                            <div class=\"text-center mt-4\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg px-4 py-2\">
                                    <i class=\"fas fa-plus-circle\"></i> Créer l'événement
                                </button>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>

            <div class=\"text-center mt-3\">
                <a href=\"{{ path('app_event_index') }}\" class=\"btn btn-secondary btn-lg px-4 py-2\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
            </div>
        </div>
    </div>
{% endblock %}
", "event/new.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\event\\new.html.twig");
    }
}
