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

/* certificat/jouer.html.twig */
class __TwigTemplate_8b7f475331304f89186c471a01845fef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certificat/jouer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certificat/jouer.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Quiz</title>
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: #eee;
        }
        .wrapper {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .option {
            display: block;
            padding: 10px;
            background-color: #f4f4f4;
            margin: 5px 0;
            cursor: pointer;
            border-radius: 5px;
        }
        .option:hover {
            background-color: #e8e8e8;
        }
        .selected {
            background-color: #79d70f !important;
            color: white;
        }
        input[type=\"radio\"] {
            display: none;
        }
    </style>
</head>
<body>

<div class=\"wrapper\">
    <h3 class=\"text-center\">Quiz</h3>
    <form method=\"post\" action=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_submit");
        yield "\">
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 48
            yield "            <div class=\"question-block\">
                <p class=\"font-weight-bold\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "text", [], "any", false, false, false, 49), "html", null, true);
            yield "</p>
                <div class=\"options\">
                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "options", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 52
                yield "                        <label class=\"option ";
                if ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 52), (isset($context["reponse_utilisateur"]) || array_key_exists("reponse_utilisateur", $context) ? $context["reponse_utilisateur"] : (function () { throw new RuntimeError('Variable "reponse_utilisateur" does not exist.', 52, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse_utilisateur"]) || array_key_exists("reponse_utilisateur", $context) ? $context["reponse_utilisateur"] : (function () { throw new RuntimeError('Variable "reponse_utilisateur" does not exist.', 52, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 52), [], "array", false, false, false, 52) == $context["option"]))) {
                    yield "selected";
                }
                yield "\">
                            <input type=\"radio\" name=\"reponse_utilisateur[";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 53), "html", null, true);
                yield "]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "\" 
                                ";
                // line 54
                if ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 54), (isset($context["reponse_utilisateur"]) || array_key_exists("reponse_utilisateur", $context) ? $context["reponse_utilisateur"] : (function () { throw new RuntimeError('Variable "reponse_utilisateur" does not exist.', 54, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse_utilisateur"]) || array_key_exists("reponse_utilisateur", $context) ? $context["reponse_utilisateur"] : (function () { throw new RuntimeError('Variable "reponse_utilisateur" does not exist.', 54, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 54), [], "array", false, false, false, 54) == $context["option"]))) {
                    yield "checked";
                }
                yield ">
                            ";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "
                        </label>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "        <button type=\"submit\" class=\"btn btn-primary mt-3 w-100\">Soumettre</button>
    </form>
</div>

<script>
    \$(document).ready(function(){
        \$(\".option\").click(function(){
            \$(this).siblings().removeClass(\"selected\");
            \$(this).addClass(\"selected\");
            \$(this).find(\"input\").prop(\"checked\", true);
        });
    });
</script>

</body>
</html>
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
        return "certificat/jouer.html.twig";
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
        return array (  151 => 61,  143 => 58,  134 => 55,  128 => 54,  122 => 53,  115 => 52,  111 => 51,  106 => 49,  103 => 48,  99 => 47,  95 => 46,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Quiz</title>
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: #eee;
        }
        .wrapper {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .option {
            display: block;
            padding: 10px;
            background-color: #f4f4f4;
            margin: 5px 0;
            cursor: pointer;
            border-radius: 5px;
        }
        .option:hover {
            background-color: #e8e8e8;
        }
        .selected {
            background-color: #79d70f !important;
            color: white;
        }
        input[type=\"radio\"] {
            display: none;
        }
    </style>
</head>
<body>

<div class=\"wrapper\">
    <h3 class=\"text-center\">Quiz</h3>
    <form method=\"post\" action=\"{{ path('quiz_submit') }}\">
        {% for question in questions %}
            <div class=\"question-block\">
                <p class=\"font-weight-bold\">{{ question.text }}</p>
                <div class=\"options\">
                    {% for option in question.options %}
                        <label class=\"option {% if question.id in reponse_utilisateur and reponse_utilisateur[question.id] == option %}selected{% endif %}\">
                            <input type=\"radio\" name=\"reponse_utilisateur[{{ question.id }}]\" value=\"{{ option }}\" 
                                {% if question.id in reponse_utilisateur and reponse_utilisateur[question.id] == option %}checked{% endif %}>
                            {{ option }}
                        </label>
                    {% endfor %}
                </div>
            </div>
        {% endfor %}
        <button type=\"submit\" class=\"btn btn-primary mt-3 w-100\">Soumettre</button>
    </form>
</div>

<script>
    \$(document).ready(function(){
        \$(\".option\").click(function(){
            \$(this).siblings().removeClass(\"selected\");
            \$(this).addClass(\"selected\");
            \$(this).find(\"input\").prop(\"checked\", true);
        });
    });
</script>

</body>
</html>
", "certificat/jouer.html.twig", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\certificat\\jouer.html.twig");
    }
}
