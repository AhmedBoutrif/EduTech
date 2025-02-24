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

/* contact.html */
class __TwigTemplate_337348fdc5bee22669a5a492fa2fe0c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html"));

        // line 1
        yield "@@include('header.htm')

@@include('blocks/navigation.htm', {\"contact\": \"active\"})

@@include('blocks/page-title.htm', {\"page-link\": \"index.html\", \"page-title\" : \"Home\" , \"nasted\" : \"nasted\" , \"description\" : \"Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.\", \"single-page-title\": \"Contact Us\" })

<!-- contact -->
<section class=\"section bg-gray\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h2 class=\"section-title\">Contact Us</h2>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-7 mb-4 mb-lg-0\">
        <form action=\"/contact.html\" method=\"POST\">
          <input type=\"text\" class=\"form-control mb-3\" id=\"name\" name=\"name\" placeholder=\"Your Name\" required>
          <input type=\"email\" class=\"form-control mb-3\" id=\"mail\" name=\"mail\" placeholder=\"Your Email\" required>
          <input type=\"text\" class=\"form-control mb-3\" id=\"subject\" name=\"subject\" placeholder=\"Subject\" required>
          <textarea name=\"message\" id=\"message\" class=\"form-control mb-3\" placeholder=\"Your Message\" required></textarea>
          <button type=\"submit\" value=\"send\" class=\"btn btn-primary\">SEND MESSAGE</button>
        </form>
      </div>
      <div class=\"col-lg-5\">
        <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit recusandae voluptates doloremque veniam temporibus porro culpa ipsa, nisi soluta minima saepe laboriosam debitis nesciunt. Dolore, labore. Accusamus nulla sed cum aliquid exercitationem debitis error harum porro maxime quo iusto aliquam dicta modi earum fugiat, vel possimus commodi, deleniti et veniam, fuga ipsum praesentium. Odit unde optio nulla ipsum quae obcaecati! Quod esse natus quibusdam asperiores quam vel, tempore itaque architecto ducimus expedita</p>
        <a href=\"tel:+8802057843248\" class=\"text-color h5 d-block\">+880 20 5784 3248</a>
        <a href=\"mailto:yourmail@email.com\" class=\"mb-5 text-color h5 d-block\">yourmail@email.com</a>
        <p>71 Shelton Street<br>London WC2H 9JQ England</p>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->

<!-- gmap -->
<section class=\"section pt-0\">
  <!-- Google Map -->
  <div id=\"map_canvas\" data-latitude=\"51.507351\" data-longitude=\"-0.127758\"></div>
</section>
<!-- /gmap -->

@@include('blocks/footer.htm')

@@include('footer.htm')";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "contact.html";
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
        return new Source("@@include('header.htm')

@@include('blocks/navigation.htm', {\"contact\": \"active\"})

@@include('blocks/page-title.htm', {\"page-link\": \"index.html\", \"page-title\" : \"Home\" , \"nasted\" : \"nasted\" , \"description\" : \"Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.\", \"single-page-title\": \"Contact Us\" })

<!-- contact -->
<section class=\"section bg-gray\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h2 class=\"section-title\">Contact Us</h2>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-7 mb-4 mb-lg-0\">
        <form action=\"/contact.html\" method=\"POST\">
          <input type=\"text\" class=\"form-control mb-3\" id=\"name\" name=\"name\" placeholder=\"Your Name\" required>
          <input type=\"email\" class=\"form-control mb-3\" id=\"mail\" name=\"mail\" placeholder=\"Your Email\" required>
          <input type=\"text\" class=\"form-control mb-3\" id=\"subject\" name=\"subject\" placeholder=\"Subject\" required>
          <textarea name=\"message\" id=\"message\" class=\"form-control mb-3\" placeholder=\"Your Message\" required></textarea>
          <button type=\"submit\" value=\"send\" class=\"btn btn-primary\">SEND MESSAGE</button>
        </form>
      </div>
      <div class=\"col-lg-5\">
        <p class=\"mb-5\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit recusandae voluptates doloremque veniam temporibus porro culpa ipsa, nisi soluta minima saepe laboriosam debitis nesciunt. Dolore, labore. Accusamus nulla sed cum aliquid exercitationem debitis error harum porro maxime quo iusto aliquam dicta modi earum fugiat, vel possimus commodi, deleniti et veniam, fuga ipsum praesentium. Odit unde optio nulla ipsum quae obcaecati! Quod esse natus quibusdam asperiores quam vel, tempore itaque architecto ducimus expedita</p>
        <a href=\"tel:+8802057843248\" class=\"text-color h5 d-block\">+880 20 5784 3248</a>
        <a href=\"mailto:yourmail@email.com\" class=\"mb-5 text-color h5 d-block\">yourmail@email.com</a>
        <p>71 Shelton Street<br>London WC2H 9JQ England</p>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->

<!-- gmap -->
<section class=\"section pt-0\">
  <!-- Google Map -->
  <div id=\"map_canvas\" data-latitude=\"51.507351\" data-longitude=\"-0.127758\"></div>
</section>
<!-- /gmap -->

@@include('blocks/footer.htm')

@@include('footer.htm')", "contact.html", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\contact.html");
    }
}
