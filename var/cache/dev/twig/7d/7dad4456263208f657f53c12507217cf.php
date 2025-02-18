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

/* home/pricing.html.twig */
class __TwigTemplate_dc7e997f0010432913c92d4733c4e944 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/pricing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/pricing.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/pricing.html.twig", 1);
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
    <!-- Pricing Section -->
    <section id=\"pricing\" class=\"pricing section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Pricing</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\" data-aos=\"zoom-in\" data-aos-delay=\"100\">

        <div class=\"row g-4\">

          <div class=\"col-lg-4\">
            <div class=\"pricing-item\">
              <h3>Free Plan</h3>
              <div class=\"icon\">
                <i class=\"bi bi-box\"></i>
              </div>
              <h4><sup>\$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li class=\"na\"><i class=\"bi bi-x\"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class=\"na\"><i class=\"bi bi-x\"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class=\"text-center\"><a href=\"#\" class=\"buy-btn\">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class=\"col-lg-4\">
            <div class=\"pricing-item featured\">
              <h3>Business Plan</h3>
              <div class=\"icon\">
                <i class=\"bi bi-rocket\"></i>
              </div>

              <h4><sup>\$</sup>29<span> / month</span></h4>
              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class=\"text-center\"><a href=\"#\" class=\"buy-btn\">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class=\"col-lg-4\">
            <div class=\"pricing-item\">
              <h3>Developer Plan</h3>
              <div class=\"icon\">
                <i class=\"bi bi-send\"></i>
              </div>
              <h4><sup>\$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class=\"text-center\"><a href=\"#\" class=\"buy-btn\">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

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
        return "home/pricing.html.twig";
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
    <!-- Pricing Section -->
    <section id=\"pricing\" class=\"pricing section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Pricing</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\" data-aos=\"zoom-in\" data-aos-delay=\"100\">

        <div class=\"row g-4\">

          <div class=\"col-lg-4\">
            <div class=\"pricing-item\">
              <h3>Free Plan</h3>
              <div class=\"icon\">
                <i class=\"bi bi-box\"></i>
              </div>
              <h4><sup>\$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li class=\"na\"><i class=\"bi bi-x\"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class=\"na\"><i class=\"bi bi-x\"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class=\"text-center\"><a href=\"#\" class=\"buy-btn\">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class=\"col-lg-4\">
            <div class=\"pricing-item featured\">
              <h3>Business Plan</h3>
              <div class=\"icon\">
                <i class=\"bi bi-rocket\"></i>
              </div>

              <h4><sup>\$</sup>29<span> / month</span></h4>
              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class=\"text-center\"><a href=\"#\" class=\"buy-btn\">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class=\"col-lg-4\">
            <div class=\"pricing-item\">
              <h3>Developer Plan</h3>
              <div class=\"icon\">
                <i class=\"bi bi-send\"></i>
              </div>
              <h4><sup>\$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class=\"text-center\"><a href=\"#\" class=\"buy-btn\">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

</main>
{% endblock %}", "home/pricing.html.twig", "C:\\Users\\bisse\\OneDrive\\Images\\edutech_1\\edutech\\templates\\home\\pricing.html.twig");
    }
}
