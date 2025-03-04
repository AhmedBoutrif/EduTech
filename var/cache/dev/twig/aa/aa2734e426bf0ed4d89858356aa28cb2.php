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

/* home/portfolio.html.twig */
class __TwigTemplate_83cc8373d7012f86f764090f542979e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/portfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/portfolio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/portfolio.html.twig", 1);
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
 <!-- Portfolio Section -->
    <section id=\"portfolio\" class=\"portfolio section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"isotope-layout\" data-default-filter=\"*\" data-layout=\"masonry\" data-sort=\"original-order\">

          <ul class=\"portfolio-filters isotope-filters\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <li data-filter=\"*\" class=\"filter-active\">All</li>
            <li data-filter=\".filter-app\">App</li>
            <li data-filter=\".filter-product\">Card</li>
            <li data-filter=\".filter-branding\">Web</li>
          </ul><!-- End Portfolio Filters -->

          <div class=\"row gy-4 isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-app\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-1.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-1.jpg\" title=\"App 1\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-product\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-2.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Product 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-2.jpg\" title=\"Product 1\" data-gallery=\"portfolio-gallery-product\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-branding\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-3.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-3.jpg\" title=\"Branding 1\" data-gallery=\"portfolio-gallery-branding\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-app\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-4.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-4.jpg\" title=\"App 2\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-product\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-5.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-5.jpg\" title=\"Product 2\" data-gallery=\"portfolio-gallery-product\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-branding\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-6.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-6.jpg\" title=\"Branding 2\" data-gallery=\"portfolio-gallery-branding\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-app\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-7.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-7.jpg\" title=\"App 3\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-product\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-8.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-8.jpg\" title=\"Product 3\" data-gallery=\"portfolio-gallery-product\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-branding\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-9.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-9.jpg\" title=\"Branding 2\" data-gallery=\"portfolio-gallery-branding\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->
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
        return "home/portfolio.html.twig";
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
 <!-- Portfolio Section -->
    <section id=\"portfolio\" class=\"portfolio section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"isotope-layout\" data-default-filter=\"*\" data-layout=\"masonry\" data-sort=\"original-order\">

          <ul class=\"portfolio-filters isotope-filters\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <li data-filter=\"*\" class=\"filter-active\">All</li>
            <li data-filter=\".filter-app\">App</li>
            <li data-filter=\".filter-product\">Card</li>
            <li data-filter=\".filter-branding\">Web</li>
          </ul><!-- End Portfolio Filters -->

          <div class=\"row gy-4 isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-app\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-1.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-1.jpg\" title=\"App 1\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-product\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-2.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Product 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-2.jpg\" title=\"Product 1\" data-gallery=\"portfolio-gallery-product\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-branding\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-3.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-3.jpg\" title=\"Branding 1\" data-gallery=\"portfolio-gallery-branding\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-app\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-4.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-4.jpg\" title=\"App 2\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-product\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-5.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-5.jpg\" title=\"Product 2\" data-gallery=\"portfolio-gallery-product\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-branding\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-6.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-6.jpg\" title=\"Branding 2\" data-gallery=\"portfolio-gallery-branding\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-app\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-7.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-7.jpg\" title=\"App 3\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-product\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-8.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-8.jpg\" title=\"Product 3\" data-gallery=\"portfolio-gallery-product\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-branding\">
              <img src=\"assets/front/img/masonry-portfolio/masonry-portfolio-9.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href=\"assets/front/img/masonry-portfolio/masonry-portfolio-9.jpg\" title=\"Branding 2\" data-gallery=\"portfolio-gallery-branding\" class=\"glightbox preview-link\"><i class=\"bi bi-zoom-in\"></i></a>
                <a href=\"portfolio-details.html\" title=\"More Details\" class=\"details-link\"><i class=\"bi bi-link-45deg\"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->
{% endblock %}", "home/portfolio.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\home\\portfolio.html.twig");
    }
}
