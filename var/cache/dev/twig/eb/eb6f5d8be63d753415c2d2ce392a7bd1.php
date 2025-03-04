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

/* home/services.html.twig */
class __TwigTemplate_fd970504081f5a25e23d861a2a7432b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/services.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/services.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/services.html.twig", 1);
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
    <!-- Services Section -->
    <section id=\"services\" class=\"services section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-6 \" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-briefcase\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"services-details.html\" class=\"stretched-link\">Lorem Ipsum</a></h4>
                <p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class=\"col-lg-6 \" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-card-checklist\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"services-details.html\" class=\"stretched-link\">Dolor Sitema</a></h4>
                <p class=\"description\">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-6 \" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-bar-chart\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"services-details.html\" class=\"stretched-link\">Sed ut perspiciatis</a></h4>
                <p class=\"description\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-6 \" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-binoculars\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"services-details.html\" class=\"stretched-link\">Magni Dolores</a></h4>
                <p class=\"description\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-6 \" data-aos=\"fade-up\" data-aos-delay=\"500\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-brightness-high\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"services-details.html\" class=\"stretched-link\">Nemo Enim</a></h4>
                <p class=\"description\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-6 \" data-aos=\"fade-up\" data-aos-delay=\"600\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-calendar4-week\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"services-details.html\" class=\"stretched-link\">Eiusmod Tempor</a></h4>
                <p class=\"description\">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

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
        return "home/services.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home - Append Bootstrap Template{% endblock %}

{% block main %}
<main class=\"main\">
    <!-- Services Section -->
    <section id=\"services\" class=\"services section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-6 \" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-briefcase\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"services-details.html\" class=\"stretched-link\">Lorem Ipsum</a></h4>
                <p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class=\"col-lg-6 \" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-card-checklist\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"services-details.html\" class=\"stretched-link\">Dolor Sitema</a></h4>
                <p class=\"description\">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-6 \" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-bar-chart\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"services-details.html\" class=\"stretched-link\">Sed ut perspiciatis</a></h4>
                <p class=\"description\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-6 \" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-binoculars\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"services-details.html\" class=\"stretched-link\">Magni Dolores</a></h4>
                <p class=\"description\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-6 \" data-aos=\"fade-up\" data-aos-delay=\"500\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-brightness-high\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"services-details.html\" class=\"stretched-link\">Nemo Enim</a></h4>
                <p class=\"description\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-lg-6 \" data-aos=\"fade-up\" data-aos-delay=\"600\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-calendar4-week\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"services-details.html\" class=\"stretched-link\">Eiusmod Tempor</a></h4>
                <p class=\"description\">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

</main>
{% endblock %}", "home/services.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\home\\services.html.twig");
    }
}
