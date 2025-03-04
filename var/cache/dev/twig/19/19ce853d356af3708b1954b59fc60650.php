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

/* back/quiz/new.html.twig */
class __TwigTemplate_28b0ec34ad989b2969dc10dadb1ab906 extends Template
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
        return "baseB.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/quiz/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/quiz/new.html.twig"));

        $this->parent = $this->loadTemplate("baseB.html.twig", "back/quiz/new.html.twig", 1);
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

        yield "Ajouter un Quiz";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Ajouter un Quiz</h1>
        
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8 col-lg-6\"> <!-- Limite la largeur du formulaire -->
                ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                <!-- Champ pour sélectionner le cours -->
                <div class=\"mb-4\">
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "cours", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Cours associé"]);
        yield "
                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "cours", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => (("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "cours", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "errors", [], "any", false, false, false, 18)) > 0)) ? (" is-invalid") : (""))) . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 19
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "cours", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "valid", [], "any", false, false, false, 19)) ? (" is-valid") : ("")))]]);
        // line 20
        yield "
                    ";
        // line 21
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "cours", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "errors", [], "any", false, false, false, 21)) > 0)) {
            // line 22
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "cours", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "errors", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 24
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 24), "html", null, true);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "                        </div>
                    ";
        }
        // line 28
        yield "                </div>

                <!-- Champ pour la note -->
                <div class=\"mb-4\">
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "note", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Note"]);
        yield "
                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "note", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => (("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "note", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "errors", [], "any", false, false, false, 35)) > 0)) ? (" is-invalid") : (""))) . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 36
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "note", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "valid", [], "any", false, false, false, 36)) ? (" is-valid") : ("")))]]);
        // line 37
        yield "
                    ";
        // line 38
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "note", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "errors", [], "any", false, false, false, 38)) > 0)) {
            // line 39
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "note", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "errors", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 41
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 41), "html", null, true);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "                        </div>
                    ";
        }
        // line 45
        yield "                </div>

                <!-- Champ pour la réponse utilisateur (vide) -->
                <div class=\"mb-4\">
                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "reponseUtilisateur", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Réponses utilisateur"]);
        yield "
                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "reponseUtilisateur", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => (("form-control response-user-input" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 52
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "reponseUtilisateur", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "errors", [], "any", false, false, false, 52)) > 0)) ? (" is-invalid") : (""))) . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 53
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "reponseUtilisateur", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "valid", [], "any", false, false, false, 53)) ? (" is-valid") : ("")))]]);
        // line 54
        yield "
                    ";
        // line 55
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "reponseUtilisateur", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55)) > 0)) {
            // line 56
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "reponseUtilisateur", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "errors", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 58
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 58), "html", null, true);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "                        </div>
                    ";
        }
        // line 62
        yield "                </div>

                <!-- Champ pour le prix par pièce -->
                <div class=\"mb-4\">
                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "prixPiece", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prix par pièce"]);
        yield "
                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "prixPiece", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => (("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 69
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "prixPiece", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "errors", [], "any", false, false, false, 69)) > 0)) ? (" is-invalid") : (""))) . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 70
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "prixPiece", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "valid", [], "any", false, false, false, 70)) ? (" is-valid") : ("")))]]);
        // line 71
        yield "
                    ";
        // line 72
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "prixPiece", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "errors", [], "any", false, false, false, 72)) > 0)) {
            // line 73
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "prixPiece", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "errors", [], "any", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 75
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 75), "html", null, true);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "                        </div>
                    ";
        }
        // line 79
        yield "                </div>
                
                <!-- Bouton Enregistrer -->
                <div class=\"text-center mt-4\">
                    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                </div>

                ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>

    <style>
        /* Style pour les champs valides */
        .form-control.is-valid {
            border-color: #28a745 !important; /* Bordure verte */
            background-color: #e8f0fe !important; /* Fond légèrement coloré */
        }

        /* Style pour les champs invalides */
        .form-control.is-invalid {
            border-color: #dc3545 !important; /* Bordure rouge */
            background-color: #f8d7da !important; /* Fond légèrement coloré */
        }

        /* Style pour les messages d'erreur */
        .invalid-feedback {
            color: #dc3545 !important; /* Texte rouge */
            font-size: 0.875em;
        }

        /* Style pour les messages de validation valides */
        .valid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #28a745; /* Texte vert */
        }

        .form-control.is-valid ~ .valid-feedback {
            display: block;
        }

        /* Style personnalisé pour le champ \"Réponse utilisateur\" */
        .response-user-input {
            height: auto; /* Ajuste la hauteur automatiquement */
            min-height: 38px; /* Hauteur minimale pour correspondre aux autres champs */
        }
    </style>
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
        return "back/quiz/new.html.twig";
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
        return array (  273 => 86,  264 => 79,  260 => 77,  251 => 75,  247 => 74,  244 => 73,  242 => 72,  239 => 71,  237 => 70,  236 => 69,  235 => 67,  231 => 66,  225 => 62,  221 => 60,  212 => 58,  208 => 57,  205 => 56,  203 => 55,  200 => 54,  198 => 53,  197 => 52,  196 => 50,  192 => 49,  186 => 45,  182 => 43,  173 => 41,  169 => 40,  166 => 39,  164 => 38,  161 => 37,  159 => 36,  158 => 35,  157 => 33,  153 => 32,  147 => 28,  143 => 26,  134 => 24,  130 => 23,  127 => 22,  125 => 21,  122 => 20,  120 => 19,  119 => 18,  118 => 16,  114 => 15,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseB.html.twig' %}

{% block title %}Ajouter un Quiz{% endblock %}

{% block main %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Ajouter un Quiz</h1>
        
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8 col-lg-6\"> <!-- Limite la largeur du formulaire -->
                {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

                <!-- Champ pour sélectionner le cours -->
                <div class=\"mb-4\">
                    {{ form_label(form.cours, 'Cours associé', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.cours, {'attr': {
                        'class': 'form-control' ~ 
                        (form.cours.vars.errors|length > 0 ? ' is-invalid' : '') ~ 
                        (form.cours.vars.valid ? ' is-valid' : '')
                    }}) }}
                    {% if form.cours.vars.errors|length > 0 %}
                        <div class=\"invalid-feedback\">
                            {% for error in form.cours.vars.errors %}
                                {{ error.message }}
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <!-- Champ pour la note -->
                <div class=\"mb-4\">
                    {{ form_label(form.note, 'Note', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.note, {'attr': {
                        'class': 'form-control' ~ 
                        (form.note.vars.errors|length > 0 ? ' is-invalid' : '') ~ 
                        (form.note.vars.valid ? ' is-valid' : '')
                    }}) }}
                    {% if form.note.vars.errors|length > 0 %}
                        <div class=\"invalid-feedback\">
                            {% for error in form.note.vars.errors %}
                                {{ error.message }}
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <!-- Champ pour la réponse utilisateur (vide) -->
                <div class=\"mb-4\">
                    {{ form_label(form.reponseUtilisateur, 'Réponses utilisateur', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.reponseUtilisateur, {'attr': {
                        'class': 'form-control response-user-input' ~ 
                        (form.reponseUtilisateur.vars.errors|length > 0 ? ' is-invalid' : '') ~ 
                        (form.reponseUtilisateur.vars.valid ? ' is-valid' : '')
                    }}) }}
                    {% if form.reponseUtilisateur.vars.errors|length > 0 %}
                        <div class=\"invalid-feedback\">
                            {% for error in form.reponseUtilisateur.vars.errors %}
                                {{ error.message }}
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <!-- Champ pour le prix par pièce -->
                <div class=\"mb-4\">
                    {{ form_label(form.prixPiece, 'Prix par pièce', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.prixPiece, {'attr': {
                        'class': 'form-control' ~ 
                        (form.prixPiece.vars.errors|length > 0 ? ' is-invalid' : '') ~ 
                        (form.prixPiece.vars.valid ? ' is-valid' : '')
                    }}) }}
                    {% if form.prixPiece.vars.errors|length > 0 %}
                        <div class=\"invalid-feedback\">
                            {% for error in form.prixPiece.vars.errors %}
                                {{ error.message }}
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>
                
                <!-- Bouton Enregistrer -->
                <div class=\"text-center mt-4\">
                    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                </div>

                {{ form_end(form) }}
            </div>
        </div>
    </div>

    <style>
        /* Style pour les champs valides */
        .form-control.is-valid {
            border-color: #28a745 !important; /* Bordure verte */
            background-color: #e8f0fe !important; /* Fond légèrement coloré */
        }

        /* Style pour les champs invalides */
        .form-control.is-invalid {
            border-color: #dc3545 !important; /* Bordure rouge */
            background-color: #f8d7da !important; /* Fond légèrement coloré */
        }

        /* Style pour les messages d'erreur */
        .invalid-feedback {
            color: #dc3545 !important; /* Texte rouge */
            font-size: 0.875em;
        }

        /* Style pour les messages de validation valides */
        .valid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #28a745; /* Texte vert */
        }

        .form-control.is-valid ~ .valid-feedback {
            display: block;
        }

        /* Style personnalisé pour le champ \"Réponse utilisateur\" */
        .response-user-input {
            height: auto; /* Ajuste la hauteur automatiquement */
            min-height: 38px; /* Hauteur minimale pour correspondre aux autres champs */
        }
    </style>
{% endblock %}", "back/quiz/new.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\back\\quiz\\new.html.twig");
    }
}
