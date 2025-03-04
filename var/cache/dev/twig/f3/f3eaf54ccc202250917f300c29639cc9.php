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

/* cours/blog-details.html.twig */
class __TwigTemplate_46e8a37d569101a2bc87dbb4cc4da241 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/blog-details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/blog-details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cours/blog-details.html.twig", 1);
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
        yield "  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title\" data-aos=\"fade\">
      <div class=\"heading\">
        <div class=\"container\">
          <div class=\"row d-flex justify-content-center text-center\">
            <div class=\"col-lg-8\">
              <h1>Cours Détail</h1>
              <p class=\"mb-0\">Rejoignez-nous dès aujourd'hui et donnez un coup d'accélérateur à votre apprentissage !</p>
            </div>
          </div>
        </div>
      </div>
      <nav class=\"breadcrumbs\">
        <div class=\"container\">
          <ol>
            <li><a href=\"index.html\">Home</a></li>
            <li class=\"current\">Cours Detail</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <div class=\"container\">
      <div class=\"row\">

        <!-- Main Content -->
        <div class=\"col-lg-8\">

          <!-- Blog Details Section -->
          <section id=\"blog-details\" class=\"blog-details section\">
            <div class=\"container\">
              <article class=\"article\">
                <div class=\"post-img\">
                  <img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/blog/blog-1.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"img-fluid\">
                </div>

                <h2 class=\"title\">Bienvenue sur notre plateforme d'apprentissage !</h2>

                <div class=\"content\">
                  <p>
                     Ici, vous trouverez une variété de cours au format PDF, soigneusement élaborés par nos enseignants expérimentés. 
                    Chaque cours est détaillé et conçu pour vous fournir une compréhension approfondie des sujets abordés.
                  </p>

                  <p>
                    Pour renforcer vos connaissances, nous proposons également des quiz interactifs qui vous permettront de tester vos acquis et d'évaluer votre progression.
                    À la fin de chaque module, vous aurez la possibilité d'obtenir un certification, attestant de vos compétences et de votre engagement à vous améliorer.
                  </p>

                  <blockquote>
                    <p>Le travail acharné surmonte tous les obstacles</p>
                  </blockquote>
                </div><!-- End post content -->
              </article>
            </div>
          </section><!-- /Blog Details Section -->

          <!-- Blog Author Section -->
          <section id=\"blog-author\" class=\"blog-author section\">
            <div class=\"container\">
              <div class=\"author-container d-flex align-items-center\">
                <img src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/blog/blog-author.jpg"), "html", null, true);
        yield "\" class=\"rounded-circle flex-shrink-0\" alt=\"\">
                <div>
                  <h4>Jane Smith</h4>
                  <div class=\"social-links\">
                    <a href=\"https://x.com/#\"><i class=\"bi bi-twitter-x\"></i></a>
                    <a href=\"https://facebook.com/#\"><i class=\"bi bi-facebook\"></i></a>
                    <a href=\"https://instagram.com/#\"><i class=\"bi bi-instagram\"></i></a>
                  </div>
                  <p>
                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                  </p>
                </div>
              </div>
            </div>
          </section><!-- /Blog Author Section -->

        </div><!-- End Main Content -->





        <!-- Sidebar -->
        <div class=\"col-lg-4 sidebar\">
          <div class=\"widgets-container\">

          <!-- Bouton pour accéder au chat -->
            <div class=\"chat-button-container\">
                <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat");
        yield "\" class=\"chat-button\">
                    <i class=\"fas fa-comments\"></i> Accéder au Chat
                </a>
            </div>

          <div class=\"widgets-container\">


              <<!-- Liste des Quiz -->>
<div class=\"recent-posts-widget widget-item\">
    <h3 class=\"widget-title\">Liste des Quiz</h3>

    ";
        // line 109
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["quizzes"]) || array_key_exists("quizzes", $context) ? $context["quizzes"] : (function () { throw new RuntimeError('Variable "quizzes" does not exist.', 109, $this->source); })()))) {
            // line 110
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["quizzes"]) || array_key_exists("quizzes", $context) ? $context["quizzes"] : (function () { throw new RuntimeError('Variable "quizzes" does not exist.', 110, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
                // line 111
                yield "            <div class=\"post-item\">
                <div>
                    <h4>
                        <a href=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_play", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 114)]), "html", null, true);
                yield "\">
                            Quiz:";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 115), "html", null, true);
                yield " <!-- Afficher \"Quiz:ID\" -->
                        </a>
                    </h4>
                    
                </div>
            </div><!-- End recent post item-->
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['quiz'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "    ";
        } else {
            // line 123
            yield "        <p>Aucun quiz disponible pour le moment.</p>
    ";
        }
        // line 125
        yield "</div><!--/Liste des Quiz -->


<!-- Liste des Certificats -->
<div class=\"recent-posts-widget widget-item\">
    <h3 class=\"widget-title\">Liste des Certificats</h3>

    ";
        // line 132
        if ((isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 132, $this->source); })())) {
            // line 133
            yield "        <div class=\"post-item\">
            <div>
                <h4>
                    <a href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certification_play", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 136, $this->source); })()), "id", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\">
                        ";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 137, $this->source); })()), "nom", [], "any", false, false, false, 137), "html", null, true);
            yield " <!-- Afficher le nom du certification -->
                    </a>
                    <li><a href=\"";
            // line 139
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certification_index");
            yield "\">Certifications</a></li>

                </h4>
            </div>
        </div><!-- End recent post item-->
    ";
        } else {
            // line 145
            yield "        <p>Aucun certification disponible pour le moment.</p>
    ";
        }
        // line 147
        yield "</div><!--/Liste des Certificats -->
          </div>
        </div><!-- End Sidebar -->




              

      </div>
    </div>

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
        return "cours/blog-details.html.twig";
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
        return array (  288 => 147,  284 => 145,  275 => 139,  270 => 137,  266 => 136,  261 => 133,  259 => 132,  250 => 125,  246 => 123,  243 => 122,  230 => 115,  226 => 114,  221 => 111,  216 => 110,  214 => 109,  199 => 97,  168 => 69,  137 => 41,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
              <h1>Cours Détail</h1>
              <p class=\"mb-0\">Rejoignez-nous dès aujourd'hui et donnez un coup d'accélérateur à votre apprentissage !</p>
            </div>
          </div>
        </div>
      </div>
      <nav class=\"breadcrumbs\">
        <div class=\"container\">
          <ol>
            <li><a href=\"index.html\">Home</a></li>
            <li class=\"current\">Cours Detail</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <div class=\"container\">
      <div class=\"row\">

        <!-- Main Content -->
        <div class=\"col-lg-8\">

          <!-- Blog Details Section -->
          <section id=\"blog-details\" class=\"blog-details section\">
            <div class=\"container\">
              <article class=\"article\">
                <div class=\"post-img\">
                  <img src=\"{{ asset('assets/img/blog/blog-1.jpg') }}\" alt=\"\" class=\"img-fluid\">
                </div>

                <h2 class=\"title\">Bienvenue sur notre plateforme d'apprentissage !</h2>

                <div class=\"content\">
                  <p>
                     Ici, vous trouverez une variété de cours au format PDF, soigneusement élaborés par nos enseignants expérimentés. 
                    Chaque cours est détaillé et conçu pour vous fournir une compréhension approfondie des sujets abordés.
                  </p>

                  <p>
                    Pour renforcer vos connaissances, nous proposons également des quiz interactifs qui vous permettront de tester vos acquis et d'évaluer votre progression.
                    À la fin de chaque module, vous aurez la possibilité d'obtenir un certification, attestant de vos compétences et de votre engagement à vous améliorer.
                  </p>

                  <blockquote>
                    <p>Le travail acharné surmonte tous les obstacles</p>
                  </blockquote>
                </div><!-- End post content -->
              </article>
            </div>
          </section><!-- /Blog Details Section -->

          <!-- Blog Author Section -->
          <section id=\"blog-author\" class=\"blog-author section\">
            <div class=\"container\">
              <div class=\"author-container d-flex align-items-center\">
                <img src=\"{{ asset('assets/img/blog/blog-author.jpg') }}\" class=\"rounded-circle flex-shrink-0\" alt=\"\">
                <div>
                  <h4>Jane Smith</h4>
                  <div class=\"social-links\">
                    <a href=\"https://x.com/#\"><i class=\"bi bi-twitter-x\"></i></a>
                    <a href=\"https://facebook.com/#\"><i class=\"bi bi-facebook\"></i></a>
                    <a href=\"https://instagram.com/#\"><i class=\"bi bi-instagram\"></i></a>
                  </div>
                  <p>
                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                  </p>
                </div>
              </div>
            </div>
          </section><!-- /Blog Author Section -->

        </div><!-- End Main Content -->





        <!-- Sidebar -->
        <div class=\"col-lg-4 sidebar\">
          <div class=\"widgets-container\">

          <!-- Bouton pour accéder au chat -->
            <div class=\"chat-button-container\">
                <a href=\"{{ path('chat') }}\" class=\"chat-button\">
                    <i class=\"fas fa-comments\"></i> Accéder au Chat
                </a>
            </div>

          <div class=\"widgets-container\">


              <<!-- Liste des Quiz -->>
<div class=\"recent-posts-widget widget-item\">
    <h3 class=\"widget-title\">Liste des Quiz</h3>

    {% if quizzes is not empty %}
        {% for quiz in quizzes %}
            <div class=\"post-item\">
                <div>
                    <h4>
                        <a href=\"{{ path('app_quiz_play', {'id': quiz.id}) }}\">
                            Quiz:{{ quiz.id }} <!-- Afficher \"Quiz:ID\" -->
                        </a>
                    </h4>
                    
                </div>
            </div><!-- End recent post item-->
        {% endfor %}
    {% else %}
        <p>Aucun quiz disponible pour le moment.</p>
    {% endif %}
</div><!--/Liste des Quiz -->


<!-- Liste des Certificats -->
<div class=\"recent-posts-widget widget-item\">
    <h3 class=\"widget-title\">Liste des Certificats</h3>

    {% if certification %}
        <div class=\"post-item\">
            <div>
                <h4>
                    <a href=\"{{ path('app_certification_play', {'id': certification.id}) }}\">
                        {{ certification.nom }} <!-- Afficher le nom du certification -->
                    </a>
                    <li><a href=\"{{ path('app_certification_index') }}\">Certifications</a></li>

                </h4>
            </div>
        </div><!-- End recent post item-->
    {% else %}
        <p>Aucun certification disponible pour le moment.</p>
    {% endif %}
</div><!--/Liste des Certificats -->
          </div>
        </div><!-- End Sidebar -->




              

      </div>
    </div>

  </main>
{% endblock %}", "cours/blog-details.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\cours\\blog-details.html.twig");
    }
}
