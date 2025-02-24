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
class __TwigTemplate_c02ba58eb311fa446d12375d0471e522 extends Template
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
        yield "    <div style=\"display: flex; flex-direction: column; justify-content: flex-end; align-items: center; height: 100vh; padding-bottom: 20px;\">
        <h1>Chat avec OpenAI</h1>

        <form method=\"POST\" style=\"width: 100%; max-width: 400px;\">
            <label for=\"message\">Entrez un message :</label>
            <input type=\"text\" id=\"message\" name=\"message\" placeholder=\"Entrez un message...\" required style=\"width: 100%; padding: 10px; margin-bottom: 10px;\">
            <button type=\"submit\" name=\"ok\" style=\"width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; cursor: pointer;\">
                Envoyer
            </button>
        </form>

        ";
        // line 15
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })())) {
            // line 16
            yield "            <div style=\"color: red; margin-top: 20px;\">
                <strong>Erreur :</strong> ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 20
        yield "
        ";
        // line 21
        if ((isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 21, $this->source); })())) {
            // line 22
            yield "            <div style=\"margin-top: 20px; text-align: center;\">
                <strong>Réponse :</strong> ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 23, $this->source); })()), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 26
        yield "    </div>
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
        return array (  114 => 26,  108 => 23,  105 => 22,  103 => 21,  100 => 20,  94 => 17,  91 => 16,  89 => 15,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    <div style=\"display: flex; flex-direction: column; justify-content: flex-end; align-items: center; height: 100vh; padding-bottom: 20px;\">
        <h1>Chat avec OpenAI</h1>

        <form method=\"POST\" style=\"width: 100%; max-width: 400px;\">
            <label for=\"message\">Entrez un message :</label>
            <input type=\"text\" id=\"message\" name=\"message\" placeholder=\"Entrez un message...\" required style=\"width: 100%; padding: 10px; margin-bottom: 10px;\">
            <button type=\"submit\" name=\"ok\" style=\"width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; cursor: pointer;\">
                Envoyer
            </button>
        </form>

        {% if error %}
            <div style=\"color: red; margin-top: 20px;\">
                <strong>Erreur :</strong> {{ error }}
            </div>
        {% endif %}

        {% if response %}
            <div style=\"margin-top: 20px; text-align: center;\">
                <strong>Réponse :</strong> {{ response }}
            </div>
        {% endif %}
    </div>
{% endblock %}", "chat/index.html.twig", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\chat\\index.html.twig");
    }
}
