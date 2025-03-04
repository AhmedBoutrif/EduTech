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

/* back/event/show.html.twig */
class __TwigTemplate_c81d646838423a3431b853c06be70bbe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/event/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/event/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/event/show.html.twig", 1);
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

        yield "Détails de l'événement";
        
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
        yield "    <h1>Détails de l'événement</h1>

    <div>
        <h3>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        yield "</h3>
        <p>Description : ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "description", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
        <p>Date de l'événement : ";
        // line 11
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 11, $this->source); })()), "date", [], "any", false, false, false, 11)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 11, $this->source); })()), "date", [], "any", false, false, false, 11), "d M Y"), "html", null, true)) : ("Date non définie"));
        yield "</p>

        <div class=\"event-images\">
            <h4>Photos :</h4>
            <div class=\"image-grid\">
                <div class=\"image-item\">
                    <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "photo", [], "any", false, false, false, 17))), "html", null, true);
        yield "\" alt=\"Photo de l'événement\">
                </div>
                <!-- Ajoutez d'autres images si nécessaire -->
                <div class=\"image-item\">
                    <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "photo", [], "any", false, false, false, 21))), "html", null, true);
        yield "\" alt=\"Photo de l'événement\">
                </div>
                <div class=\"image-item\">
                    <img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 24, $this->source); })()), "photo", [], "any", false, false, false, 24))), "html", null, true);
        yield "\" alt=\"Photo de l'événement\">
                </div>
            </div>
        </div>

        <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_event_index");
        yield "\" class=\"btn btn-info\">Retour à la liste</a>
    </div>

    ";
        // line 33
        yield "    <style>
        /* Container pour afficher les images en grille */
        .event-images {
            margin-top: 20px;
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 images par ligne */
            gap: 20px; /* Espacement entre les images */
        }

        .image-item {
            overflow: hidden;
            position: relative;
        }

        /* Contrôler la taille des images */
        .image-item img {
            width: 100%; /* Remplir la largeur de la cellule */
            height: auto; /* Garder le ratio de l'image */
            object-fit: cover; /* Couvrir la zone sans déformer l'image */
            border-radius: 8px; /* Pour arrondir les bords des images */
        }

        /* Media Query pour responsive */
        @media (max-width: 768px) {
            .image-grid {
                grid-template-columns: repeat(2, 1fr); /* 2 images par ligne sur les écrans plus petits */
            }
        }

        @media (max-width: 480px) {
            .image-grid {
                grid-template-columns: 1fr; /* 1 image par ligne sur les très petits écrans */
            }
        }
    </style>

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
        return "back/event/show.html.twig";
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
        return array (  149 => 33,  143 => 29,  135 => 24,  129 => 21,  122 => 17,  113 => 11,  109 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'événement{% endblock %}

{% block main %}
    <h1>Détails de l'événement</h1>

    <div>
        <h3>{{ event.title }}</h3>
        <p>Description : {{ event.description }}</p>
        <p>Date de l'événement : {{ event.date ? event.date|date('d M Y') : 'Date non définie' }}</p>

        <div class=\"event-images\">
            <h4>Photos :</h4>
            <div class=\"image-grid\">
                <div class=\"image-item\">
                    <img src=\"{{ asset('uploads/events/' ~ event.photo) }}\" alt=\"Photo de l'événement\">
                </div>
                <!-- Ajoutez d'autres images si nécessaire -->
                <div class=\"image-item\">
                    <img src=\"{{ asset('uploads/events/' ~ event.photo) }}\" alt=\"Photo de l'événement\">
                </div>
                <div class=\"image-item\">
                    <img src=\"{{ asset('uploads/events/' ~ event.photo) }}\" alt=\"Photo de l'événement\">
                </div>
            </div>
        </div>

        <a href=\"{{ path('admin_event_index') }}\" class=\"btn btn-info\">Retour à la liste</a>
    </div>

    {# Ajout du CSS directement dans le fichier Twig #}
    <style>
        /* Container pour afficher les images en grille */
        .event-images {
            margin-top: 20px;
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 images par ligne */
            gap: 20px; /* Espacement entre les images */
        }

        .image-item {
            overflow: hidden;
            position: relative;
        }

        /* Contrôler la taille des images */
        .image-item img {
            width: 100%; /* Remplir la largeur de la cellule */
            height: auto; /* Garder le ratio de l'image */
            object-fit: cover; /* Couvrir la zone sans déformer l'image */
            border-radius: 8px; /* Pour arrondir les bords des images */
        }

        /* Media Query pour responsive */
        @media (max-width: 768px) {
            .image-grid {
                grid-template-columns: repeat(2, 1fr); /* 2 images par ligne sur les écrans plus petits */
            }
        }

        @media (max-width: 480px) {
            .image-grid {
                grid-template-columns: 1fr; /* 1 image par ligne sur les très petits écrans */
            }
        }
    </style>

{% endblock %}
", "back/event/show.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\back\\event\\show.html.twig");
    }
}
