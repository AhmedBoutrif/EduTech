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

/* home/panier.html.twig */
class __TwigTemplate_f3f2747afe62be6a18d81378cd7d177c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/panier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/panier.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>bs4 cart - Bootdey.com</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style type=\"text/css\">
    \tbody{
    margin-top:20px;
    background:#eee;
}
.ui-w-40 {
    width: 40px !important;
    height: auto;
}

.card{
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);    
}

.ui-product-color {
    display: inline-block;
    overflow: hidden;
    margin: .144em;
    width: .875rem;
    height: .875rem;
    border-radius: 10rem;
    -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    vertical-align: middle;
}
    </style>
</head>
<body>
<div class=\"container px-3 my-5 clearfix\">
    <!-- Shopping cart table -->
    <div class=\"card\">
        <div class=\"card-header\">
            <h2>Shopping Cart</h2>
        </div>
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "flashes", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 49
            yield "<div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "\">
    ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 51
                yield "        <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "        <div class=\"card-body\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered m-0\">
                <thead>
                  <tr>
                    <!-- Set columns width -->
                    <th class=\"text-center py-3 px-4\" style=\"min-width: 400px;\">Product Name &amp; Details</th>
                    <th class=\"text-right py-3 px-4\" style=\"width: 100px;\">Price</th>
                    <th class=\"text-center align-middle py-3 px-0\" style=\"width: 40px;\"><a href=\"#\" class=\"shop-tooltip float-none text-light\" title=\"\" data-original-title=\"Clear cart\"><i class=\"ino ion-md-trash\"></i></a></th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 68
            yield "
                  <tr>
                    <td class=\"p-4\">
                      <div class=\"media align-items-center\">
                        <img src=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 72), "html", null, true);
            yield "\"  class=\"d-block ui-w-40 ui-bordered mr-4\" alt=\"\">
                        <div class=\"media-body\">
                          <a href=\"#\" class=\"d-block text-dark\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 74), "html", null, true);
            yield "</a>
                          <small>
                            <span class=\"text-muted\">Color:</span>
                            <span class=\"text-muted\">Ships from: </span> China
                          </small>
                        </div>
                      </div>
                    </td>
                    <td class=\"text-right font-weight-semibold align-middle p-4\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 82), "html", null, true);
            yield "</td>
                    <td class=\"text-center align-middle px-0\"><a href=";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            yield " class=\"shop-tooltip close float-none text-danger\" title=\"\" data-original-title=\"Remove\">×</a></td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "                </tbody>
              </table>
              <div class=\"text-right\">
                <label class=\"text-muted font-weight-normal\">Total Points</label>
                <div class=\"text-large\"><strong>";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 90, $this->source); })()), "html", null, true);
        yield " Points</strong></div>
            </div>
            </div>

            <!-- / Shopping cart table -->
  
            <div class=\"float-right\">
<a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certification_index");
        yield "\" class=\"btn btn-lg btn-default md-btn-flat mt-2 mr-3\">Back to shopping</a>
              <button type=\"button\" class=\"btn btn-lg btn-primary mt-2\">Checkout</button>
            </div>
        
          </div>
      </div>
  </div>
<script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js\"></script>
<script type=\"text/javascript\">
\t
</script>
</body>
</html>
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
        return "home/panier.html.twig";
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
        return array (  221 => 97,  211 => 90,  205 => 86,  196 => 83,  192 => 82,  181 => 74,  176 => 72,  170 => 68,  166 => 67,  152 => 55,  145 => 53,  136 => 51,  132 => 50,  127 => 49,  123 => 48,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block main %}


<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>bs4 cart - Bootdey.com</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style type=\"text/css\">
    \tbody{
    margin-top:20px;
    background:#eee;
}
.ui-w-40 {
    width: 40px !important;
    height: auto;
}

.card{
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);    
}

.ui-product-color {
    display: inline-block;
    overflow: hidden;
    margin: .144em;
    width: .875rem;
    height: .875rem;
    border-radius: 10rem;
    -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    vertical-align: middle;
}
    </style>
</head>
<body>
<div class=\"container px-3 my-5 clearfix\">
    <!-- Shopping cart table -->
    <div class=\"card\">
        <div class=\"card-header\">
            <h2>Shopping Cart</h2>
        </div>
        {% for label, messages in app.flashes %}
<div class=\"alert alert-{{ label }}\">
    {% for message in messages %}
        <p>{{ message }}</p>
    {% endfor %}
</div>
{% endfor %}
        <div class=\"card-body\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered m-0\">
                <thead>
                  <tr>
                    <!-- Set columns width -->
                    <th class=\"text-center py-3 px-4\" style=\"min-width: 400px;\">Product Name &amp; Details</th>
                    <th class=\"text-right py-3 px-4\" style=\"width: 100px;\">Price</th>
                    <th class=\"text-center align-middle py-3 px-0\" style=\"width: 40px;\"><a href=\"#\" class=\"shop-tooltip float-none text-light\" title=\"\" data-original-title=\"Clear cart\"><i class=\"ino ion-md-trash\"></i></a></th>
                  </tr>
                </thead>
                <tbody>
                  {% for product in products %}

                  <tr>
                    <td class=\"p-4\">
                      <div class=\"media align-items-center\">
                        <img src=\"{{ product.image }}\"  class=\"d-block ui-w-40 ui-bordered mr-4\" alt=\"\">
                        <div class=\"media-body\">
                          <a href=\"#\" class=\"d-block text-dark\">{{ product.nom }}</a>
                          <small>
                            <span class=\"text-muted\">Color:</span>
                            <span class=\"text-muted\">Ships from: </span> China
                          </small>
                        </div>
                      </div>
                    </td>
                    <td class=\"text-right font-weight-semibold align-middle p-4\">{{product.price }}</td>
                    <td class=\"text-center align-middle px-0\"><a href={{ path('app_cart_remove' , {'id' : product.id}) }} class=\"shop-tooltip close float-none text-danger\" title=\"\" data-original-title=\"Remove\">×</a></td>
                  </tr>
                  {% endfor %}
                </tbody>
              </table>
              <div class=\"text-right\">
                <label class=\"text-muted font-weight-normal\">Total Points</label>
                <div class=\"text-large\"><strong>{{ totalPrice }} Points</strong></div>
            </div>
            </div>

            <!-- / Shopping cart table -->
  
            <div class=\"float-right\">
<a href=\"{{ path('app_certification_index') }}\" class=\"btn btn-lg btn-default md-btn-flat mt-2 mr-3\">Back to shopping</a>
              <button type=\"button\" class=\"btn btn-lg btn-primary mt-2\">Checkout</button>
            </div>
        
          </div>
      </div>
  </div>
<script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js\"></script>
<script type=\"text/javascript\">
\t
</script>
</body>
</html>
{% endblock %}

", "home/panier.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\home\\panier.html.twig");
    }
}
