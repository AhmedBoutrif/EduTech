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

/* back/certificat/edit.html.twig */
class __TwigTemplate_13e6260e90ce9b39927db6f39534dce3 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseB.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/certificat/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/certificat/edit.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/certificat/edit.html.twig", 1);
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

        yield "Edit Certificat";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container\">
        <h1>Edit Certificat</h1>

        <form method=\"post\">
            <!-- Formulaire pour chaque question -->
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "questions", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 12
            yield "                <div class=\"form-group\">
                    <label for=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["question"], "vars", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13), "html", null, true);
            yield "\">Question :</label>
                    ";
            // line 14
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["question"], 'row', ["attr" => ["class" => "form-control"]]);
            yield "
                </div>

                <div class=\"form-group\">
                    <label for=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["question"], "reponse_correcte", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18), "html", null, true);
            yield "\">Réponse correcte :</label>
                    ";
            // line 19
            $context["reponse_correcte_row"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "reponse_correcte", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control"]]);
            // line 20
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reponse_correcte_row"]) || array_key_exists("reponse_correcte_row", $context) ? $context["reponse_correcte_row"] : (function () { throw new RuntimeError('Variable "reponse_correcte_row" does not exist.', 20, $this->source); })()), "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
            </div>
        </form>

        <!-- Lien de retour à la liste des certificats -->
        <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificatb_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>

        <!-- Formulaire de suppression -->
        ";
        // line 33
        yield Twig\Extension\CoreExtension::include($this->env, $context, "back/certificat/_delete_form.html.twig");
        yield "
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
        return "back/certificat/edit.html.twig";
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
        return array (  156 => 33,  150 => 30,  141 => 23,  131 => 20,  129 => 19,  125 => 18,  118 => 14,  114 => 13,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseB.html.twig' %}

{% block title %}Edit Certificat{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Edit Certificat</h1>

        <form method=\"post\">
            <!-- Formulaire pour chaque question -->
            {% for question in form.questions %}
                <div class=\"form-group\">
                    <label for=\"{{ question.vars.id }}\">Question :</label>
                    {{ form_row(question, {'attr': {'class': 'form-control'}}) }}
                </div>

                <div class=\"form-group\">
                    <label for=\"{{ question.reponse_correcte.vars.id }}\">Réponse correcte :</label>
                    {% set reponse_correcte_row = form_row(question.reponse_correcte, {'attr': {'class': 'form-control'}}) %}
                    {{ reponse_correcte_row }}
                </div>
            {% endfor %}

            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
            </div>
        </form>

        <!-- Lien de retour à la liste des certificats -->
        <a href=\"{{ path('app_certificatb_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>

        <!-- Formulaire de suppression -->
        {{ include('back/certificat/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "back/certificat/edit.html.twig", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\back\\certificat\\edit.html.twig");
    }
}
