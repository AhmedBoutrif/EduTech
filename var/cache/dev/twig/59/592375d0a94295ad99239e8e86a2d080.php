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

/* base.html.twig */
class __TwigTemplate_ed88787cee1af254a443492482e196ea extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">

    <!-- Favicons -->
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">
    <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/img/apple-touch-icon.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\">

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Main CSS File -->
    <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    ";
        // line 30
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 31
        yield "</head>

<body class=\"index-page\">

    ";
        // line 35
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 78
        yield "
    ";
        // line 79
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 80
        yield "
    ";
        // line 81
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 139
        yield "
    <!-- Scroll Top -->
    <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

    <!-- Preloader -->
    <div id=\"preloader\"></div>

    <!-- Vendor JS Files -->
    <script src=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/vendor/imagesloaded/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Main JS File -->
    <script src=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/js/main.js"), "html", null, true);
        yield "\"></script>

    ";
        // line 159
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 160
        yield "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        yield "Index - Append Bootstrap Template";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 36
        yield "    <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
        <div class=\"container-fluid position-relative d-flex align-items-center justify-content-between\">
            <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"logo d-flex align-items-center me-auto me-xl-0\">
                <h1 class=\"sitename\">Append</h1><span>.</span>
            </a>

            <nav id=\"navmenu\" class=\"navmenu\">
                    <ul>
                        <!-- Liens principaux -->
                        <li><a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#hero\" class=\"active\">Home</a></li>
                        <li><a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "#services\">Services</a></li>
                        <li><a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_portfolio");
        yield "#portfolio\">Portfolio</a></li>
                        <li><a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pricing");
        yield "#pricing\">Pricing</a></li>
                        <li><a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "#team\">Team</a></li>
                        <li><a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        yield "\">Cours</a></li>

                        <!-- Menu déroulant pour la gestion -->
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Gérer
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li><a class=\"dropdown-item\" href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_index");
        yield "\">Gérer Cours</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificat_index");
        yield "\">Gérer Certificat</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_index");
        yield "\">Gérer Quiz</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Toggle pour version mobile -->
                    <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
                </nav>



            

            <a class=\"btn-getstarted\" href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "#about\">Get Started</a>
        </div>
        
    </header>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 82
        yield "    <footer id=\"footer\" class=\"footer position-relative light-background\">
        <div class=\"container footer-top\">
            <div class=\"row gy-4\">
                <div class=\"col-lg-5 col-md-12 footer-about\">
                    <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"logo d-flex align-items-center\">
                        <span class=\"sitename\">Append</span>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class=\"social-links d-flex mt-4\">
                        <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
                        <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                        <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                        <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                    </div>
                </div>

                <div class=\"col-lg-2 col-6 footer-links\">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">About us</a></li>
                        <li><a href=\"#\">Services</a></li>
                        <li><a href=\"#\">Terms of service</a></li>
                        <li><a href=\"#\">Privacy policy</a></li>
                    </ul>
                </div>

                <div class=\"col-lg-2 col-6 footer-links\">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href=\"#\">Web Design</a></li>
                        <li><a href=\"#\">Web Development</a></li>
                        <li><a href=\"#\">Product Management</a></li>
                        <li><a href=\"#\">Marketing</a></li>
                        <li><a href=\"#\">Graphic Design</a></li>
                    </ul>
                </div>

                <div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
                    <h4>Contact Us</h4>
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                    <p>United States</p>
                    <p class=\"mt-4\"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                    <p><strong>Email:</strong> <span>info@example.com</span></p>
                </div>
            </div>
        </div>

        <div class=\"container copyright text-center mt-4\">
            <p>© <span>Copyright</span> <strong class=\"sitename\">Append</strong> <span>All Rights Reserved</span></p>
            <div class=\"credits\">
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
            </div>
        </div>
    </footer>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 159
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  444 => 159,  380 => 86,  374 => 82,  361 => 81,  339 => 79,  323 => 73,  307 => 60,  303 => 59,  299 => 58,  288 => 50,  284 => 49,  280 => 48,  276 => 47,  272 => 46,  268 => 45,  258 => 38,  254 => 36,  241 => 35,  219 => 30,  196 => 7,  183 => 160,  181 => 159,  176 => 157,  170 => 154,  166 => 153,  162 => 152,  158 => 151,  154 => 150,  150 => 149,  146 => 148,  142 => 147,  132 => 139,  130 => 81,  127 => 80,  125 => 79,  122 => 78,  120 => 35,  114 => 31,  112 => 30,  107 => 28,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  74 => 13,  70 => 12,  62 => 7,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <title>{% block title %}Index - Append Bootstrap Template{% endblock %}</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">

    <!-- Favicons -->
    <link href=\"{{ asset('assets/front/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('assets/front/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"{{ asset('assets/front/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/front/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/front/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/front/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/front/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

    <!-- Main CSS File -->
    <link href=\"{{ asset('assets/front/css/main.css') }}\" rel=\"stylesheet\">

    {% block stylesheets %}{% endblock %}
</head>

<body class=\"index-page\">

    {% block header %}
    <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
        <div class=\"container-fluid position-relative d-flex align-items-center justify-content-between\">
            <a href=\"{{ path('app_home') }}\" class=\"logo d-flex align-items-center me-auto me-xl-0\">
                <h1 class=\"sitename\">Append</h1><span>.</span>
            </a>

            <nav id=\"navmenu\" class=\"navmenu\">
                    <ul>
                        <!-- Liens principaux -->
                        <li><a href=\"{{ path('app_home') }}#hero\" class=\"active\">Home</a></li>
                        <li><a href=\"{{ path('app_services') }}#services\">Services</a></li>
                        <li><a href=\"{{ path('app_portfolio') }}#portfolio\">Portfolio</a></li>
                        <li><a href=\"{{ path('app_pricing') }}#pricing\">Pricing</a></li>
                        <li><a href=\"{{ path('app_team') }}#team\">Team</a></li>
                        <li><a href=\"{{ path('app_blog') }}\">Cours</a></li>

                        <!-- Menu déroulant pour la gestion -->
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Gérer
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li><a class=\"dropdown-item\" href=\"{{ path('app_cours_index') }}\">Gérer Cours</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('app_certificat_index') }}\">Gérer Certificat</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('app_quiz_index') }}\">Gérer Quiz</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Toggle pour version mobile -->
                    <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
                </nav>



            

            <a class=\"btn-getstarted\" href=\"{{ path('app_home') }}#about\">Get Started</a>
        </div>
        
    </header>
    {% endblock %}

    {% block main %}{% endblock %}

    {% block footer %}
    <footer id=\"footer\" class=\"footer position-relative light-background\">
        <div class=\"container footer-top\">
            <div class=\"row gy-4\">
                <div class=\"col-lg-5 col-md-12 footer-about\">
                    <a href=\"{{ path('app_home') }}\" class=\"logo d-flex align-items-center\">
                        <span class=\"sitename\">Append</span>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class=\"social-links d-flex mt-4\">
                        <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
                        <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                        <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                        <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                    </div>
                </div>

                <div class=\"col-lg-2 col-6 footer-links\">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">About us</a></li>
                        <li><a href=\"#\">Services</a></li>
                        <li><a href=\"#\">Terms of service</a></li>
                        <li><a href=\"#\">Privacy policy</a></li>
                    </ul>
                </div>

                <div class=\"col-lg-2 col-6 footer-links\">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href=\"#\">Web Design</a></li>
                        <li><a href=\"#\">Web Development</a></li>
                        <li><a href=\"#\">Product Management</a></li>
                        <li><a href=\"#\">Marketing</a></li>
                        <li><a href=\"#\">Graphic Design</a></li>
                    </ul>
                </div>

                <div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
                    <h4>Contact Us</h4>
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                    <p>United States</p>
                    <p class=\"mt-4\"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                    <p><strong>Email:</strong> <span>info@example.com</span></p>
                </div>
            </div>
        </div>

        <div class=\"container copyright text-center mt-4\">
            <p>© <span>Copyright</span> <strong class=\"sitename\">Append</strong> <span>All Rights Reserved</span></p>
            <div class=\"credits\">
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
            </div>
        </div>
    </footer>
    {% endblock %}

    <!-- Scroll Top -->
    <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

    <!-- Preloader -->
    <div id=\"preloader\"></div>

    <!-- Vendor JS Files -->
    <script src=\"{{ asset('assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/front/vendor/php-email-form/validate.js') }}\"></script>
    <script src=\"{{ asset('assets/front/vendor/aos/aos.js') }}\"></script>
    <script src=\"{{ asset('assets/front/vendor/glightbox/js/glightbox.min.js') }}\"></script>
    <script src=\"{{ asset('assets/front/vendor/purecounter/purecounter_vanilla.js') }}\"></script>
    <script src=\"{{ asset('assets/front/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('assets/front/vendor/isotope-layout/isotope.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('assets/front/vendor/swiper/swiper-bundle.min.js') }}\"></script>

    <!-- Main JS File -->
    <script src=\"{{ asset('assets/front/js/main.js') }}\"></script>

    {% block javascripts %}{% endblock %}
</body>

</html>", "base.html.twig", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\base.html.twig");
    }
}
