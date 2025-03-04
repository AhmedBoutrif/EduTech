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

/* chat/index.html.twig */
class __TwigTemplate_b012685408263a03866baa199ac32e12 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chat/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <div class=\"chat-container\">
        <h1 class=\"chat-title\">Chat avec OpenAI</h1>

        <form method=\"POST\" class=\"chat-form\">
            <input
                type=\"text\"
                id=\"message\"
                name=\"message\"
                placeholder=\"Entrez un message...\"
                required
                class=\"form-input\"
            >
            <button type=\"submit\" name=\"ok\" class=\"form-button\">
                Envoyer
            </button>
        </form>

        ";
        // line 21
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })())) {
            // line 22
            yield "            <div class=\"error-message\">
                <strong>Erreur :</strong> ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })()), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 26
        yield "
        ";
        // line 27
        if ((isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 27, $this->source); })())) {
            // line 28
            yield "            <div class=\"response-message\">
                <strong>Réponse :</strong> ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 29, $this->source); })()), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 32
        yield "    </div>

    

    <style>
        /* Styles généraux */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
        }

        .chat-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
            margin-bottom: 2rem;
        }

        .chat-title {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1.5rem;
        }

        .chat-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .form-label {
            font-size: 1rem;
            color: #555;
            text-align: left;
        }

        .form-input {
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .form-input:focus {
            border-color: #007bff;
        }

        .form-button {
            padding: 0.75rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-button:hover {
            background-color: #0056b3;
        }

        .error-message {
            margin-top: 1.5rem;
            color: #dc3545;
            font-size: 0.9rem;
        }

        .response-message {
            margin-top: 1.5rem;
            color: #28a745;
            font-size: 1rem;
            background-color: #e9f9ee;
            padding: 1rem;
            border-radius: 5px;
            border: 1px solid #c3e6cb;
        }

        .content-section {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            text-align: left;
        }

        .useful-links {
            display: flex;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .useful-links ul {
            list-style: none;
            padding: 0;
        }

        .useful-links ul li {
            margin-bottom: 0.5rem;
        }

        .contact-info {
            margin-bottom: 2rem;
        }

        footer {
            text-align: center;
            margin-top: 2rem;
            font-size: 0.9rem;
            color: #666;
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
        return "chat/index.html.twig";
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
        return array (  120 => 32,  114 => 29,  111 => 28,  109 => 27,  106 => 26,  100 => 23,  97 => 22,  95 => 21,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"chat-container\">
        <h1 class=\"chat-title\">Chat avec OpenAI</h1>

        <form method=\"POST\" class=\"chat-form\">
            <input
                type=\"text\"
                id=\"message\"
                name=\"message\"
                placeholder=\"Entrez un message...\"
                required
                class=\"form-input\"
            >
            <button type=\"submit\" name=\"ok\" class=\"form-button\">
                Envoyer
            </button>
        </form>

        {% if error %}
            <div class=\"error-message\">
                <strong>Erreur :</strong> {{ error }}
            </div>
        {% endif %}

        {% if response %}
            <div class=\"response-message\">
                <strong>Réponse :</strong> {{ response }}
            </div>
        {% endif %}
    </div>

    

    <style>
        /* Styles généraux */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
        }

        .chat-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
            margin-bottom: 2rem;
        }

        .chat-title {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1.5rem;
        }

        .chat-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .form-label {
            font-size: 1rem;
            color: #555;
            text-align: left;
        }

        .form-input {
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .form-input:focus {
            border-color: #007bff;
        }

        .form-button {
            padding: 0.75rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-button:hover {
            background-color: #0056b3;
        }

        .error-message {
            margin-top: 1.5rem;
            color: #dc3545;
            font-size: 0.9rem;
        }

        .response-message {
            margin-top: 1.5rem;
            color: #28a745;
            font-size: 1rem;
            background-color: #e9f9ee;
            padding: 1rem;
            border-radius: 5px;
            border: 1px solid #c3e6cb;
        }

        .content-section {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            text-align: left;
        }

        .useful-links {
            display: flex;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .useful-links ul {
            list-style: none;
            padding: 0;
        }

        .useful-links ul li {
            margin-bottom: 0.5rem;
        }

        .contact-info {
            margin-bottom: 2rem;
        }

        footer {
            text-align: center;
            margin-top: 2rem;
            font-size: 0.9rem;
            color: #666;
        }
    </style>
{% endblock %}", "chat/index.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\chat\\index.html.twig");
    }
}
