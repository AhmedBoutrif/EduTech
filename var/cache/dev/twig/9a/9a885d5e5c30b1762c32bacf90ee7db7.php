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

/* qr_code/test.html.twig */
class __TwigTemplate_5061c9db21c6897208e235e599d36fb4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qr_code/test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qr_code/test.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Test QR Code</title>
</head>
<body>
    <h1>QR Code de test</h1>
    ";
        // line 9
        if ((isset($context["qr_code_image"]) || array_key_exists("qr_code_image", $context) ? $context["qr_code_image"] : (function () { throw new RuntimeError('Variable "qr_code_image" does not exist.', 9, $this->source); })())) {
            // line 10
            yield "        <!-- Vous pouvez ajouter du style pour vérifier la dimension -->
        <img src=\"data:image/png;base64,";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qr_code_image"]) || array_key_exists("qr_code_image", $context) ? $context["qr_code_image"] : (function () { throw new RuntimeError('Variable "qr_code_image" does not exist.', 11, $this->source); })()), "html", null, true);
            yield "\" alt=\"QR Code\" style=\"width:300px;\">
    ";
        } else {
            // line 13
            yield "        <p>Il y a eu un problème avec la génération du code QR.</p>
    ";
        }
        // line 15
        yield "</body>
</html>
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
        return "qr_code/test.html.twig";
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
        return array (  72 => 15,  68 => 13,  63 => 11,  60 => 10,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Test QR Code</title>
</head>
<body>
    <h1>QR Code de test</h1>
    {% if qr_code_image %}
        <!-- Vous pouvez ajouter du style pour vérifier la dimension -->
        <img src=\"data:image/png;base64,{{ qr_code_image }}\" alt=\"QR Code\" style=\"width:300px;\">
    {% else %}
        <p>Il y a eu un problème avec la génération du code QR.</p>
    {% endif %}
</body>
</html>
", "qr_code/test.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\qr_code\\test.html.twig");
    }
}
