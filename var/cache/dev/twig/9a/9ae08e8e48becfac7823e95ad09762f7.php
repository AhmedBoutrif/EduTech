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

/* home/blog.html.twig */
class __TwigTemplate_eec254329277bd79a53cab6e2503d470 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/blog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/blog.html.twig", 1);
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
        yield " <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title\" data-aos=\"fade\">
      <div class=\"heading\">
        <div class=\"container\">
          <div class=\"row d-flex justify-content-center text-center\">
            <div class=\"col-lg-8\">
              <h1>Blog</h1>
              <p class=\"mb-0\">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class=\"breadcrumbs\">
        <div class=\"container\">
          <ol>
            <li><a href=\"index.html\">Home</a></li>
            <li class=\"current\">Feed</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Feed Posts Section -->
    <section id=\"blog-posts\" class=\"blog-posts section\">

      <div class=\"container\">
        <div class=\"row gy-4\">

          <div class=\"col-lg-4\">
            <article>

              <div class=\"post-img\">
                <img src=\"assets/front/img/blog/blog-1.jpg\" alt=\"\" class=\"img-fluid\">
              </div>

              <p class=\"post-category\">Politics</p>

              <h2 class=\"title\">
                <a href=\"blog-details.html\">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class=\"d-flex align-items-center\">
                <img src=\"assets/front/img/blog/blog-author.jpg\" alt=\"\" class=\"img-fluid post-author-img flex-shrink-0\">
                <div class=\"post-meta\">
                  <p class=\"post-author\">Maria Doe</p>
                  <p class=\"post-date\">
                    <time datetime=\"2022-01-01\">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class=\"col-lg-4\">
            <article>

              <div class=\"post-img\">
                <img src=\"assets/front/img/blog/blog-2.jpg\" alt=\"\" class=\"img-fluid\">
              </div>

              <p class=\"post-category\">Sports</p>

              <h2 class=\"title\">
                <a href=\"blog-details.html\">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class=\"d-flex align-items-center\">
                <img src=\"assets/front/img/blog/blog-author-2.jpg\" alt=\"\" class=\"img-fluid post-author-img flex-shrink-0\">
                <div class=\"post-meta\">
                  <p class=\"post-author\">Allisa Mayer</p>
                  <p class=\"post-date\">
                    <time datetime=\"2022-01-01\">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class=\"col-lg-4\">
            <article>

              <div class=\"post-img\">
                <img src=\"assets/front/img/blog/blog-3.jpg\" alt=\"\" class=\"img-fluid\">
              </div>

              <p class=\"post-category\">Entertainment</p>

              <h2 class=\"title\">
                <a href=\"blog-details.html\">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class=\"d-flex align-items-center\">
                <img src=\"assets/front/img/blog/blog-author-3.jpg\" alt=\"\" class=\"img-fluid post-author-img flex-shrink-0\">
                <div class=\"post-meta\">
                  <p class=\"post-author\">Mark Dower</p>
                  <p class=\"post-date\">
                    <time datetime=\"2022-01-01\">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class=\"col-lg-4\">
            <article>

              <div class=\"post-img\">
                <img src=\"assets/front/img/blog/blog-4.jpg\" alt=\"\" class=\"img-fluid\">
              </div>

              <p class=\"post-category\">Sports</p>

              <h2 class=\"title\">
                <a href=\"blog-details.html\">Non rem rerum nam cum quo minus olor distincti</a>
              </h2>

              <div class=\"d-flex align-items-center\">
                <img src=\"assets/front/img/blog/blog-author-4.jpg\" alt=\"\" class=\"img-fluid post-author-img flex-shrink-0\">
                <div class=\"post-meta\">
                  <p class=\"post-author\">Lisa Neymar</p>
                  <p class=\"post-date\">
                    <time datetime=\"2022-01-01\">Jun 30, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class=\"col-lg-4\">
            <article>

              <div class=\"post-img\">
                <img src=\"assets/front/img/blog/blog-5.jpg\" alt=\"\" class=\"img-fluid\">
              </div>

              <p class=\"post-category\">Politics</p>

              <h2 class=\"title\">
                <a href=\"blog-details.html\">Accusamus quaerat aliquam qui debitis facilis consequatur</a>
              </h2>

              <div class=\"d-flex align-items-center\">
                <img src=\"assets/front/img/blog/blog-author-5.jpg\" alt=\"\" class=\"img-fluid post-author-img flex-shrink-0\">
                <div class=\"post-meta\">
                  <p class=\"post-author\">Denis Peterson</p>
                  <p class=\"post-date\">
                    <time datetime=\"2022-01-01\">Jan 30, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class=\"col-lg-4\">
            <article>

              <div class=\"post-img\">
                <img src=\"assets/front/img/blog/blog-6.jpg\" alt=\"\" class=\"img-fluid\">
              </div>

              <p class=\"post-category\">Entertainment</p>

              <h2 class=\"title\">
                <a href=\"blog-details.html\">Distinctio provident quibusdam numquam aperiam aut</a>
              </h2>

              <div class=\"d-flex align-items-center\">
                <img src=\"assets/front/img/blog/blog-author-6.jpg\" alt=\"\" class=\"img-fluid post-author-img flex-shrink-0\">
                <div class=\"post-meta\">
                  <p class=\"post-author\">Mika Lendon</p>
                  <p class=\"post-date\">
                    <time datetime=\"2022-01-01\">Feb 14, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

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
        return "home/blog.html.twig";
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

    <!-- Page Title -->
    <div class=\"page-title\" data-aos=\"fade\">
      <div class=\"heading\">
        <div class=\"container\">
          <div class=\"row d-flex justify-content-center text-center\">
            <div class=\"col-lg-8\">
              <h1>Blog</h1>
              <p class=\"mb-0\">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class=\"breadcrumbs\">
        <div class=\"container\">
          <ol>
            <li><a href=\"index.html\">Home</a></li>
            <li class=\"current\">Feed</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Feed Posts Section -->
    <section id=\"blog-posts\" class=\"blog-posts section\">

      <div class=\"container\">
        <div class=\"row gy-4\">

          <div class=\"col-lg-4\">
            <article>

              <div class=\"post-img\">
                <img src=\"assets/front/img/blog/blog-1.jpg\" alt=\"\" class=\"img-fluid\">
              </div>

              <p class=\"post-category\">Politics</p>

              <h2 class=\"title\">
                <a href=\"blog-details.html\">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class=\"d-flex align-items-center\">
                <img src=\"assets/front/img/blog/blog-author.jpg\" alt=\"\" class=\"img-fluid post-author-img flex-shrink-0\">
                <div class=\"post-meta\">
                  <p class=\"post-author\">Maria Doe</p>
                  <p class=\"post-date\">
                    <time datetime=\"2022-01-01\">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class=\"col-lg-4\">
            <article>

              <div class=\"post-img\">
                <img src=\"assets/front/img/blog/blog-2.jpg\" alt=\"\" class=\"img-fluid\">
              </div>

              <p class=\"post-category\">Sports</p>

              <h2 class=\"title\">
                <a href=\"blog-details.html\">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class=\"d-flex align-items-center\">
                <img src=\"assets/front/img/blog/blog-author-2.jpg\" alt=\"\" class=\"img-fluid post-author-img flex-shrink-0\">
                <div class=\"post-meta\">
                  <p class=\"post-author\">Allisa Mayer</p>
                  <p class=\"post-date\">
                    <time datetime=\"2022-01-01\">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class=\"col-lg-4\">
            <article>

              <div class=\"post-img\">
                <img src=\"assets/front/img/blog/blog-3.jpg\" alt=\"\" class=\"img-fluid\">
              </div>

              <p class=\"post-category\">Entertainment</p>

              <h2 class=\"title\">
                <a href=\"blog-details.html\">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class=\"d-flex align-items-center\">
                <img src=\"assets/front/img/blog/blog-author-3.jpg\" alt=\"\" class=\"img-fluid post-author-img flex-shrink-0\">
                <div class=\"post-meta\">
                  <p class=\"post-author\">Mark Dower</p>
                  <p class=\"post-date\">
                    <time datetime=\"2022-01-01\">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class=\"col-lg-4\">
            <article>

              <div class=\"post-img\">
                <img src=\"assets/front/img/blog/blog-4.jpg\" alt=\"\" class=\"img-fluid\">
              </div>

              <p class=\"post-category\">Sports</p>

              <h2 class=\"title\">
                <a href=\"blog-details.html\">Non rem rerum nam cum quo minus olor distincti</a>
              </h2>

              <div class=\"d-flex align-items-center\">
                <img src=\"assets/front/img/blog/blog-author-4.jpg\" alt=\"\" class=\"img-fluid post-author-img flex-shrink-0\">
                <div class=\"post-meta\">
                  <p class=\"post-author\">Lisa Neymar</p>
                  <p class=\"post-date\">
                    <time datetime=\"2022-01-01\">Jun 30, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class=\"col-lg-4\">
            <article>

              <div class=\"post-img\">
                <img src=\"assets/front/img/blog/blog-5.jpg\" alt=\"\" class=\"img-fluid\">
              </div>

              <p class=\"post-category\">Politics</p>

              <h2 class=\"title\">
                <a href=\"blog-details.html\">Accusamus quaerat aliquam qui debitis facilis consequatur</a>
              </h2>

              <div class=\"d-flex align-items-center\">
                <img src=\"assets/front/img/blog/blog-author-5.jpg\" alt=\"\" class=\"img-fluid post-author-img flex-shrink-0\">
                <div class=\"post-meta\">
                  <p class=\"post-author\">Denis Peterson</p>
                  <p class=\"post-date\">
                    <time datetime=\"2022-01-01\">Jan 30, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class=\"col-lg-4\">
            <article>

              <div class=\"post-img\">
                <img src=\"assets/front/img/blog/blog-6.jpg\" alt=\"\" class=\"img-fluid\">
              </div>

              <p class=\"post-category\">Entertainment</p>

              <h2 class=\"title\">
                <a href=\"blog-details.html\">Distinctio provident quibusdam numquam aperiam aut</a>
              </h2>

              <div class=\"d-flex align-items-center\">
                <img src=\"assets/front/img/blog/blog-author-6.jpg\" alt=\"\" class=\"img-fluid post-author-img flex-shrink-0\">
                <div class=\"post-meta\">
                  <p class=\"post-author\">Mika Lendon</p>
                  <p class=\"post-date\">
                    <time datetime=\"2022-01-01\">Feb 14, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

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
{% endblock %}", "home/blog.html.twig", "C:\\Users\\bisse\\OneDrive\\Images\\edutech_1\\edutech\\templates\\home\\blog.html.twig");
    }
}
