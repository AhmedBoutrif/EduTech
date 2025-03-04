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

/* vote/vote.html.twig */
class __TwigTemplate_95930c3b99349cc7be10cf442f780f7a extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vote/vote.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vote/vote.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vote/vote.html.twig", 1);
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

        yield "Système de vote";
        
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
        yield "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .vote-button { cursor: pointer; padding: 5px 10px; margin: 5px; }
    .vote-feedback { color: green; display: none; margin-top: 10px; }
    .vote-error { color: red; display: none; margin-top: 10px; }
</style>

<div class=\"example-wrapper\">
    <h1>Système de vote</h1>
    
    <div id=\"vote-demo\">
        <h2>Exemple de Feed</h2>
        <div class=\"content\">
            <p>Ceci est un exemple de contenu de Feed.</p>
            <div class=\"vote-controls\">
                <button class=\"vote-button\" data-content-id=\"1\" data-content-type=\"feed\" data-vote-type=\"1\">👍 Like</button>
                <button class=\"vote-button\" data-content-id=\"1\" data-content-type=\"feed\" data-vote-type=\"-1\">👎 Dislike</button>
            </div>
        </div>
        
        <h2>Exemple de Commentaire</h2>
        <div class=\"content\">
            <p>Ceci est un exemple de commentaire.</p>
            <div class=\"vote-controls\">
                <button class=\"vote-button\" data-content-id=\"1\" data-content-type=\"commentaire\" data-vote-type=\"1\">👍 Like</button>
                <button class=\"vote-button\" data-content-id=\"1\" data-content-type=\"commentaire\" data-vote-type=\"-1\">👎 Dislike</button>
            </div>
        </div>
        
        <div class=\"vote-feedback\">Vote enregistré avec succès!</div>
        <div class=\"vote-error\">Erreur: <span id=\"error-message\"></span></div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const voteButtons = document.querySelectorAll('.vote-button');
    const voteFeedback = document.querySelector('.vote-feedback');
    const voteError = document.querySelector('.vote-error');
    const errorMessage = document.querySelector('#error-message');
    
    voteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const contentId = this.getAttribute('data-content-id');
            const contentType = this.getAttribute('data-content-type');
            const voteType = parseInt(this.getAttribute('data-vote-type'));
            
            // Masquer les messages précédents
            voteFeedback.style.display = 'none';
            voteError.style.display = 'none';
            
            // Envoyer la requête POST
            fetch('/vote', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    contentId: contentId,
                    contentType: contentType,
                    type: voteType
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    errorMessage.textContent = data.error;
                    voteError.style.display = 'block';
                } else {
                    voteFeedback.textContent = data.message;
                    voteFeedback.style.display = 'block';
                }
            })
            .catch(error => {
                errorMessage.textContent = 'Une erreur s\\'est produite: ' + error.message;
                voteError.style.display = 'block';
            });
        });
    });
});
</script>
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
        return "vote/vote.html.twig";
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

{% block title %}Système de vote{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .vote-button { cursor: pointer; padding: 5px 10px; margin: 5px; }
    .vote-feedback { color: green; display: none; margin-top: 10px; }
    .vote-error { color: red; display: none; margin-top: 10px; }
</style>

<div class=\"example-wrapper\">
    <h1>Système de vote</h1>
    
    <div id=\"vote-demo\">
        <h2>Exemple de Feed</h2>
        <div class=\"content\">
            <p>Ceci est un exemple de contenu de Feed.</p>
            <div class=\"vote-controls\">
                <button class=\"vote-button\" data-content-id=\"1\" data-content-type=\"feed\" data-vote-type=\"1\">👍 Like</button>
                <button class=\"vote-button\" data-content-id=\"1\" data-content-type=\"feed\" data-vote-type=\"-1\">👎 Dislike</button>
            </div>
        </div>
        
        <h2>Exemple de Commentaire</h2>
        <div class=\"content\">
            <p>Ceci est un exemple de commentaire.</p>
            <div class=\"vote-controls\">
                <button class=\"vote-button\" data-content-id=\"1\" data-content-type=\"commentaire\" data-vote-type=\"1\">👍 Like</button>
                <button class=\"vote-button\" data-content-id=\"1\" data-content-type=\"commentaire\" data-vote-type=\"-1\">👎 Dislike</button>
            </div>
        </div>
        
        <div class=\"vote-feedback\">Vote enregistré avec succès!</div>
        <div class=\"vote-error\">Erreur: <span id=\"error-message\"></span></div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const voteButtons = document.querySelectorAll('.vote-button');
    const voteFeedback = document.querySelector('.vote-feedback');
    const voteError = document.querySelector('.vote-error');
    const errorMessage = document.querySelector('#error-message');
    
    voteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const contentId = this.getAttribute('data-content-id');
            const contentType = this.getAttribute('data-content-type');
            const voteType = parseInt(this.getAttribute('data-vote-type'));
            
            // Masquer les messages précédents
            voteFeedback.style.display = 'none';
            voteError.style.display = 'none';
            
            // Envoyer la requête POST
            fetch('/vote', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    contentId: contentId,
                    contentType: contentType,
                    type: voteType
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    errorMessage.textContent = data.error;
                    voteError.style.display = 'block';
                } else {
                    voteFeedback.textContent = data.message;
                    voteFeedback.style.display = 'block';
                }
            })
            .catch(error => {
                errorMessage.textContent = 'Une erreur s\\'est produite: ' + error.message;
                voteError.style.display = 'block';
            });
        });
    });
});
</script>
{% endblock %}", "vote/vote.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\vote\\vote.html.twig");
    }
}
