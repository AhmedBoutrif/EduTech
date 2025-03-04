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

/* home/certifications.html.twig */
class __TwigTemplate_41e98ad14812bb2ce3bb8b0ef3338d42 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/certifications.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/certifications.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/certifications.html.twig", 1);
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
        yield "


 <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title\" data-aos=\"fade\">
      <div class=\"heading\">
        <div class=\"container\">
          <div class=\"row d-flex justify-content-center text-center\">
            <div class=\"col-lg-8\">
              <h1>Certifications</h1>
              <p class=\"mb-0\"></p>
            </div>
          </div>
        </div>
      </div>
      <nav class=\"breadcrumbs\">
        <div class=\"container\">
          <ol>
            <li><a href=\"index.html\">Home</a></li>
            <li class=\"current\">List Certifications</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <section id=\"blog-posts\" class=\"blog-posts section\">
      ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 35
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 36
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "\">
            ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "
";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "flashes", ["success"], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 43
            yield "    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
        ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "
      <div class=\"container\">
        <div class=\"row gy-4\">
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["certifications"]) || array_key_exists("certifications", $context) ? $context["certifications"] : (function () { throw new RuntimeError('Variable "certifications" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["certification"]) {
            // line 52
            yield "
<div class=\"col-lg-4\">
    <article>
      <div class=\"post-img position-relative\">
        <img src=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "img", [], "any", false, false, false, 56)), "html", null, true);
            yield "\" alt=\"\" class=\"img-fluid\">
        <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_favorite_new", ["certification_id" => CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" class=\"btn btn-light position-absolute top-0 end-0 m-2\">
            <i class=\"fas fa-heart\"></i>
        </a>
        
      </div>
  
  
      <h2 class=\"title\">
        <a href=\"blog-details.html\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "nom", [], "any", false, false, false, 65), "html", null, true);
            yield "</a>
      </h2>
  
      <div class=\"d-flex align-items-center\">
        <div class=\"post-meta\">
          <p class=\"post-author\">  ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "prix", [], "any", false, false, false, 70), "html", null, true);
            yield " Points </p>
          <p class=\"post-date\">
          </p>
        </div>
      </div>
      
      <div class=\"text-center mt-3\">
        <a href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
            Ajouter au panier
        </a>
    </div>
    
    </article>
  </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['certification'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "
        </div>
      </div>
    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section id=\"blog-pagination\" class=\"blog-pagination section\">

      <div class=\"container\">
        <div class=\"d-flex justify-content-center\">
          <ul>
            <li><a href=\"#\"><i class=\"bi bi-chevron-left\"></i></a></li>
            <li><a href=\"#\">1</a></li>
            <li><a href=\"#\" class=\"active\">2</a></li>
            <li><a href=\"#\">3</a></li>
            <li><a href=\"#\">4</a></li>
            <li>...</li>
            <li><a href=\"#\">10</a></li>
            <li><a href=\"#\"><i class=\"bi bi-chevron-right\"></i></a></li>
          </ul>
        </div>
      </div>

    </section><!-- /Blog Pagination Section -->

  </main>

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
        return "home/certifications.html.twig";
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
        return array (  240 => 86,  225 => 77,  215 => 70,  207 => 65,  196 => 57,  192 => 56,  186 => 52,  182 => 51,  177 => 48,  167 => 44,  164 => 43,  160 => 42,  157 => 41,  144 => 37,  139 => 36,  134 => 35,  130 => 34,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home - Append Bootstrap Template{% endblock %}

{% block main %}



 <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title\" data-aos=\"fade\">
      <div class=\"heading\">
        <div class=\"container\">
          <div class=\"row d-flex justify-content-center text-center\">
            <div class=\"col-lg-8\">
              <h1>Certifications</h1>
              <p class=\"mb-0\"></p>
            </div>
          </div>
        </div>
      </div>
      <nav class=\"breadcrumbs\">
        <div class=\"container\">
          <ol>
            <li><a href=\"index.html\">Home</a></li>
            <li class=\"current\">List Certifications</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <section id=\"blog-posts\" class=\"blog-posts section\">
      {% for type, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ type }}\">
            {{ message }}
        </div>
    {% endfor %}
{% endfor %}

{% for message in app.flashes('success') %}
    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
        {{ message }}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
{% endfor %}

      <div class=\"container\">
        <div class=\"row gy-4\">
{% for certification in certifications %}

<div class=\"col-lg-4\">
    <article>
      <div class=\"post-img position-relative\">
        <img src=\"{{ asset(certification.img) }}\" alt=\"\" class=\"img-fluid\">
        <a href=\"{{ path('app_favorite_new', { 'certification_id': certification.id }) }}\" class=\"btn btn-light position-absolute top-0 end-0 m-2\">
            <i class=\"fas fa-heart\"></i>
        </a>
        
      </div>
  
  
      <h2 class=\"title\">
        <a href=\"blog-details.html\">{{ certification.nom }}</a>
      </h2>
  
      <div class=\"d-flex align-items-center\">
        <div class=\"post-meta\">
          <p class=\"post-author\">  {{ certification.prix }} Points </p>
          <p class=\"post-date\">
          </p>
        </div>
      </div>
      
      <div class=\"text-center mt-3\">
        <a href=\"{{ path('app_cart_add', { 'id': certification.id }) }}\" class=\"btn btn-primary\">
            Ajouter au panier
        </a>
    </div>
    
    </article>
  </div>

{% endfor %}

        </div>
      </div>
    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section id=\"blog-pagination\" class=\"blog-pagination section\">

      <div class=\"container\">
        <div class=\"d-flex justify-content-center\">
          <ul>
            <li><a href=\"#\"><i class=\"bi bi-chevron-left\"></i></a></li>
            <li><a href=\"#\">1</a></li>
            <li><a href=\"#\" class=\"active\">2</a></li>
            <li><a href=\"#\">3</a></li>
            <li><a href=\"#\">4</a></li>
            <li>...</li>
            <li><a href=\"#\">10</a></li>
            <li><a href=\"#\"><i class=\"bi bi-chevron-right\"></i></a></li>
          </ul>
        </div>
      </div>

    </section><!-- /Blog Pagination Section -->

  </main>

</main>
{% endblock %}", "home/certifications.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\home\\certifications.html.twig");
    }
}
