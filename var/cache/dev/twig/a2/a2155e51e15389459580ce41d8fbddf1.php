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

/* header.htm */
class __TwigTemplate_3b3e63cc41938eb4dfcc87a52d5fc63d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.htm"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.htm"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>

  <!-- Basic Page Needs
\t================================================== -->
  <meta charset=\"utf-8\">
  <title>Educenter - Education HTML Template</title>

  <!-- Mobile Specific Metas
\t================================================== -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"Construction Html5 Template\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
  <meta name=\"author\" content=\"Themefisher\">
  <meta name=\"generator\" content=\"Themefisher Educenter HTML Template v1.0\">
  
  <!-- theme meta -->
  <meta name=\"theme-name\" content=\"educenter\" />

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel=\"stylesheet\" href=\"plugins/bootstrap/bootstrap.min.css\">
  <!-- slick slider -->
  <link rel=\"stylesheet\" href=\"plugins/slick/slick.css\">
  <!-- themefy-icon -->
  <link rel=\"stylesheet\" href=\"plugins/themify-icons/themify-icons.css\">
  <!-- animation css -->
  <link rel=\"stylesheet\" href=\"plugins/animate/animate.css\">
  <!-- aos -->
  <link rel=\"stylesheet\" href=\"plugins/aos/aos.css\">
  <!-- venobox popup -->
  <link rel=\"stylesheet\" href=\"plugins/venobox/venobox.css\">

  <!-- Main Stylesheet -->
  <link href=\"css/style.css\" rel=\"stylesheet\">

  <!--Favicon-->
  <link rel=\"shortcut icon\" href=\"images/favicon.png\" type=\"image/x-icon\">
  <link rel=\"icon\" href=\"images/favicon.png\" type=\"image/x-icon\">

</head>

<body>
  <!-- preloader start -->
  <div class=\"preloader\">
    <img src=\"images/preloader.gif\" alt=\"preloader\">
  </div>
  <!-- preloader end -->
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
        return "header.htm";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>

  <!-- Basic Page Needs
\t================================================== -->
  <meta charset=\"utf-8\">
  <title>Educenter - Education HTML Template</title>

  <!-- Mobile Specific Metas
\t================================================== -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"Construction Html5 Template\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
  <meta name=\"author\" content=\"Themefisher\">
  <meta name=\"generator\" content=\"Themefisher Educenter HTML Template v1.0\">
  
  <!-- theme meta -->
  <meta name=\"theme-name\" content=\"educenter\" />

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel=\"stylesheet\" href=\"plugins/bootstrap/bootstrap.min.css\">
  <!-- slick slider -->
  <link rel=\"stylesheet\" href=\"plugins/slick/slick.css\">
  <!-- themefy-icon -->
  <link rel=\"stylesheet\" href=\"plugins/themify-icons/themify-icons.css\">
  <!-- animation css -->
  <link rel=\"stylesheet\" href=\"plugins/animate/animate.css\">
  <!-- aos -->
  <link rel=\"stylesheet\" href=\"plugins/aos/aos.css\">
  <!-- venobox popup -->
  <link rel=\"stylesheet\" href=\"plugins/venobox/venobox.css\">

  <!-- Main Stylesheet -->
  <link href=\"css/style.css\" rel=\"stylesheet\">

  <!--Favicon-->
  <link rel=\"shortcut icon\" href=\"images/favicon.png\" type=\"image/x-icon\">
  <link rel=\"icon\" href=\"images/favicon.png\" type=\"image/x-icon\">

</head>

<body>
  <!-- preloader start -->
  <div class=\"preloader\">
    <img src=\"images/preloader.gif\" alt=\"preloader\">
  </div>
  <!-- preloader end -->
", "header.htm", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\header.htm");
    }
}
