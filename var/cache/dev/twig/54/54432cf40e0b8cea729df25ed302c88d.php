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

/* commentaire/index.html.twig */
class __TwigTemplate_d084b4223d0a1fc68576518b26ada90b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commentaire/index.html.twig", 1);
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

        yield "Comment Index - Multipédia";
        
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
        yield "    <div class=\"container-fluid\">
        <!-- En-tête -->
        <div class=\"row mb-4\">
            <div class=\"col-md-12\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h1>Comment Index</h1>
                    <div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Type here...\">
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_new");
        yield "\" class=\"btn btn-danger ms-2\">LOGOUT</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des commentaires -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card shadow-sm mb-4\">
                    <div class=\"card-body\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th scope=\"col\">ID</th>
                                    <th scope=\"col\">Comment</th>
                                    <th scope=\"col\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 34
        if ((array_key_exists("commentaires", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 34, $this->source); })())))) {
            // line 35
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 36
                yield "                                        <tr>
                                            <td>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 37), "html", null, true);
                yield "</td>
                                            <td>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 38), "html", null, true);
                yield "</td>
                                            <td>
                                                <a href=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                                                    <i class=\"bi bi-eye\"></i> Show
                                                </a>
                                                <a href=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-secondary\">
                                                    <i class=\"bi bi-pencil\"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "                                ";
        } else {
            // line 50
            yield "                                    <tr>
                                        <td colspan=\"3\" class=\"text-center\">No comments found</td>
                                    </tr>
                                ";
        }
        // line 54
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bouton pour créer un nouveau commentaire -->
        <div class=\"text-end mb-4\">
            <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_index");
        yield "\" class=\"btn btn-primary\">
                <i class=\"bi bi-plus-circle\"></i> Create New Comment
            </a>
        </div>

        <!-- Pied de page -->
        <footer class=\"mt-5 text-center\">
            <p>&copy; 2023 Multipédia. Tous droits réservés.</p>
        </footer>
    </div>
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
        return "commentaire/index.html.twig";
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
        return array (  190 => 63,  179 => 54,  173 => 50,  170 => 49,  158 => 43,  152 => 40,  147 => 38,  143 => 37,  140 => 36,  135 => 35,  133 => 34,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Comment Index - Multipédia{% endblock %}

{% block main %}
    <div class=\"container-fluid\">
        <!-- En-tête -->
        <div class=\"row mb-4\">
            <div class=\"col-md-12\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h1>Comment Index</h1>
                    <div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Type here...\">
                        <a href=\"{{ path('app_commentaire_new') }}\" class=\"btn btn-danger ms-2\">LOGOUT</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des commentaires -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card shadow-sm mb-4\">
                    <div class=\"card-body\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th scope=\"col\">ID</th>
                                    <th scope=\"col\">Comment</th>
                                    <th scope=\"col\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% if commentaires is defined and commentaires is not empty %}
                                    {% for commentaire in commentaires %}
                                        <tr>
                                            <td>{{ commentaire.id }}</td>
                                            <td>{{ commentaire.contenu }}</td>
                                            <td>
                                                <a href=\"{{ path('app_commentaire_show', {'id': commentaire.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                                    <i class=\"bi bi-eye\"></i> Show
                                                </a>
                                                <a href=\"{{ path('app_commentaire_edit', {'id': commentaire.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">
                                                    <i class=\"bi bi-pencil\"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                {% else %}
                                    <tr>
                                        <td colspan=\"3\" class=\"text-center\">No comments found</td>
                                    </tr>
                                {% endif %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bouton pour créer un nouveau commentaire -->
        <div class=\"text-end mb-4\">
            <a href=\"{{ path('app_commentaire_index') }}\" class=\"btn btn-primary\">
                <i class=\"bi bi-plus-circle\"></i> Create New Comment
            </a>
        </div>

        <!-- Pied de page -->
        <footer class=\"mt-5 text-center\">
            <p>&copy; 2023 Multipédia. Tous droits réservés.</p>
        </footer>
    </div>
{% endblock %}", "commentaire/index.html.twig", "C:\\Users\\bisse\\OneDrive\\Images\\edutech_1\\edutech\\templates\\commentaire\\index.html.twig");
    }
}
