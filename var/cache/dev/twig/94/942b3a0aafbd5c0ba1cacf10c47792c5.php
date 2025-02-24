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

/* home/team.html.twig */
class __TwigTemplate_821b7cf9ac12cd7d066622c691f14cbc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/team.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/team.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/team.html.twig", 1);
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
 <!-- Team Section -->
    <section id=\"team\" class=\"team section light-background\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"row gy-5\">

          <div class=\"col-lg-4 col-md-6 member\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"member-img\">
              <img src=\"assets/front/img/team/team-1.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"social\">
                <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
            <div class=\"member-info text-center\">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p>
            </div>
          </div><!-- End Team Member -->

          <div class=\"col-lg-4 col-md-6 member\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"member-img\">
              <img src=\"assets/front/img/team/team-2.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"social\">
                <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
            <div class=\"member-info text-center\">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores exercitationem ut</p>
            </div>
          </div><!-- End Team Member -->

          <div class=\"col-lg-4 col-md-6 member\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"member-img\">
              <img src=\"assets/front/img/team/team-3.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"social\">
                <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
            <div class=\"member-info text-center\">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis at qui</p>
            </div>
          </div><!-- End Team Member -->

          <div class=\"col-lg-4 col-md-6 member\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"member-img\">
              <img src=\"assets/front/img/team/team-4.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"social\">
                <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
            <div class=\"member-info text-center\">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam consectetur</p>
            </div>
          </div><!-- End Team Member -->

          <div class=\"col-lg-4 col-md-6 member\" data-aos=\"fade-up\" data-aos-delay=\"500\">
            <div class=\"member-img\">
              <img src=\"assets/front/img/team/team-5.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"social\">
                <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
            <div class=\"member-info text-center\">
              <h4>Brian Doe</h4>
              <span>Marketing</span>
              <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit laborum velit</p>
            </div>
          </div><!-- End Team Member -->

          <div class=\"col-lg-4 col-md-6 member\" data-aos=\"fade-up\" data-aos-delay=\"600\">
            <div class=\"member-img\">
              <img src=\"assets/front/img/team/team-6.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"social\">
                <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
            <div class=\"member-info text-center\">
              <h4>Josepha Palas</h4>
              <span>Operation</span>
              <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel</p>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

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
        return "home/team.html.twig";
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
 <!-- Team Section -->
    <section id=\"team\" class=\"team section light-background\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"row gy-5\">

          <div class=\"col-lg-4 col-md-6 member\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"member-img\">
              <img src=\"assets/front/img/team/team-1.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"social\">
                <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
            <div class=\"member-info text-center\">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p>
            </div>
          </div><!-- End Team Member -->

          <div class=\"col-lg-4 col-md-6 member\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"member-img\">
              <img src=\"assets/front/img/team/team-2.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"social\">
                <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
            <div class=\"member-info text-center\">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores exercitationem ut</p>
            </div>
          </div><!-- End Team Member -->

          <div class=\"col-lg-4 col-md-6 member\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"member-img\">
              <img src=\"assets/front/img/team/team-3.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"social\">
                <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
            <div class=\"member-info text-center\">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis at qui</p>
            </div>
          </div><!-- End Team Member -->

          <div class=\"col-lg-4 col-md-6 member\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"member-img\">
              <img src=\"assets/front/img/team/team-4.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"social\">
                <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
            <div class=\"member-info text-center\">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam consectetur</p>
            </div>
          </div><!-- End Team Member -->

          <div class=\"col-lg-4 col-md-6 member\" data-aos=\"fade-up\" data-aos-delay=\"500\">
            <div class=\"member-img\">
              <img src=\"assets/front/img/team/team-5.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"social\">
                <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
            <div class=\"member-info text-center\">
              <h4>Brian Doe</h4>
              <span>Marketing</span>
              <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit laborum velit</p>
            </div>
          </div><!-- End Team Member -->

          <div class=\"col-lg-4 col-md-6 member\" data-aos=\"fade-up\" data-aos-delay=\"600\">
            <div class=\"member-img\">
              <img src=\"assets/front/img/team/team-6.jpg\" class=\"img-fluid\" alt=\"\">
              <div class=\"social\">
                <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
            <div class=\"member-info text-center\">
              <h4>Josepha Palas</h4>
              <span>Operation</span>
              <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel</p>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

</main>
{% endblock %}", "home/team.html.twig", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\home\\team.html.twig");
    }
}
