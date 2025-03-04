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

/* home/index.html.twig */
class __TwigTemplate_0d75185564dfedb90a963aa4ec497b04 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Home - Append Bootstrap Template";
        
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
        yield "<main class=\"main\">
    <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section dark-background\">
        <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/img/hero-bg.jpg"), "html", null, true);
        yield "\" alt=\"\" data-aos=\"fade-in\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10\">
                    <h2 data-aos=\"fade-up\" data-aos-delay=\"100\">Welcome to Our Website</h2>
                    <p data-aos=\"fade-up\" data-aos-delay=\"200\">We are team of talented designers making websites with Bootstrap</p>
                </div>
                <div class=\"col-lg-5\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                    <form action=\"forms/newsletter.php\" method=\"post\" class=\"php-email-form\">
                        <div class=\"sign-up-form\"><input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\"></div>
                        <div class=\"loading\">Loading</div>
                        <div class=\"error-message\"></div>
                        <div class=\"sent-message\">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id=\"clients\" class=\"clients section\">
        <div class=\"container\" data-aos=\"fade-up\">
            <div class=\"row gy-4\">
                <div class=\"col-xl-2 col-md-3 col-6 client-logo\">
                    <img src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/img/clients/client-1.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                </div><!-- End Client Item -->
                <!-- Repeat for other clients -->
            </div>
        </div>
    </section><!-- /Clients Section -->

    <!-- Other sections can be added here following the same pattern -->

</main>
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
        return "home/index.html.twig";
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
        return array (  132 => 33,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home - Append Bootstrap Template{% endblock %}

{% block main %}
<main class=\"main\">
    <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section dark-background\">
        <img src=\"{{ asset('assets/front/img/hero-bg.jpg') }}\" alt=\"\" data-aos=\"fade-in\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10\">
                    <h2 data-aos=\"fade-up\" data-aos-delay=\"100\">Welcome to Our Website</h2>
                    <p data-aos=\"fade-up\" data-aos-delay=\"200\">We are team of talented designers making websites with Bootstrap</p>
                </div>
                <div class=\"col-lg-5\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                    <form action=\"forms/newsletter.php\" method=\"post\" class=\"php-email-form\">
                        <div class=\"sign-up-form\"><input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\"></div>
                        <div class=\"loading\">Loading</div>
                        <div class=\"error-message\"></div>
                        <div class=\"sent-message\">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id=\"clients\" class=\"clients section\">
        <div class=\"container\" data-aos=\"fade-up\">
            <div class=\"row gy-4\">
                <div class=\"col-xl-2 col-md-3 col-6 client-logo\">
                    <img src=\"{{ asset('assets/front/img/clients/client-1.png') }}\" class=\"img-fluid\" alt=\"\">
                </div><!-- End Client Item -->
                <!-- Repeat for other clients -->
            </div>
        </div>
    </section><!-- /Clients Section -->

    <!-- Other sections can be added here following the same pattern -->

</main>
{% endblock %}", "home/index.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\home\\index.html.twig");
    }
}
