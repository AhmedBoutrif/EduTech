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
class __TwigTemplate_6a2a89b4e050f01a2670ec5a6635fba2 extends Template
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_index");
        yield "\" class=\"btn btn-danger ms-2\">LOGOUT</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ajouter ceci dans votre interface, par exemple dans l'en-tête -->
<div class=\"notification-container\">
    <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notification");
        yield "\" class=\"notification-link\">
        <i class=\"bi bi-bell\"></i>
        <span id=\"notification-badge\" class=\"badge bg-danger\" style=\"display: none;\">0</span>
    </a>
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
        // line 41
        if ((array_key_exists("commentaires", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 41, $this->source); })())))) {
            // line 42
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 43
                yield "                                        <tr data-comment-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 43), "html", null, true);
                yield "\">
                                            <td>";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 44), "html", null, true);
                yield "</td>
                                            <td>";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 45), "html", null, true);
                yield "</td>
                                            <td>
                                                <a href=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                                                    <i class=\"bi bi-eye\"></i> Show
                                                </a>
                                                <a href=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-secondary\">
                                                    <i class=\"bi bi-pencil\"></i> Edit
                                                </a>
                                                <!-- Vote buttons -->
                                                <button class=\"vote-button btn btn-sm btn-outline-success\" 
                                                        data-content-id=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 55), "html", null, true);
                yield "\" 
                                                        data-content-type=\"commentaire\" 
                                                        data-vote-type=\"1\">
                                                   <i class=\"bi bi-hand-thumbs-up\"></i> 
                                                   <span class=\"vote-count-up-";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 59), "html", null, true);
                yield "\">
                                                    ";
                // line 60
                if (CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "upVotes", [], "any", true, true, false, 60)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "upVotes", [], "any", false, false, false, 60), "html", null, true);
                } else {
                    yield "0";
                }
                // line 61
                yield "                                                   </span>
                                                </button>
                                                <button class=\"vote-button btn btn-sm btn-outline-danger\" 
                                                        data-content-id=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 64), "html", null, true);
                yield "\" 
                                                        data-content-type=\"commentaire\" 
                                                        data-vote-type=\"-1\">
                                                   <i class=\"bi bi-hand-thumbs-down\"></i>
                                                   <span class=\"vote-count-down-";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 68), "html", null, true);
                yield "\">
                                                       ";
                // line 69
                if (CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "downVotes", [], "any", true, true, false, 69)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "downVotes", [], "any", false, false, false, 69), "html", null, true);
                } else {
                    yield "0";
                }
                // line 70
                yield "                                                   </span>
                                                </button>
    

                                                <!-- Sélecteur de langue -->
                                              ";
                // line 76
                yield "                                                <select class=\"form-select lang-select\" data-comment-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 76), "html", null, true);
                yield "\" style=\"width: auto; display: inline-block;\">
                                                    <option value=\"\">Select language</option>
                                                    <option value=\"en\">English</option>
                                                    <option value=\"fr\">Français</option>
                                                </select>
                                                <!-- Bouton de traduction -->
    
                                                 <button class=\"btn btn-sm btn-outline-success translate-btn\" data-id=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 83), "html", null, true);
                yield "\" data-lang=\"en\">
                                                     <i class=\"bi bi-translate\"></i> Traduire
                                                 </button>

                                                 <!-- Loader caché -->
                                                 <div id=\"loader-";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 88), "html", null, true);
                yield "\" class=\"spinner-border spinner-border-sm text-primary\" role=\"status\" style=\"display: none;\">
                                                    <span class=\"visually-hidden\">Traduction...</span>
                                                 </div>
                                             </div>

                                                 <!-- Affichage du texte traduit -->
                                                 <p id=\"translated-text-";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 94), "html", null, true);
                yield "\" class=\"mt-2 text-muted\"></p>

                                                 <!-- Vote feedback messages -->
                                                 <div class=\"vote-feedback-";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 97), "html", null, true);
                yield "\" style=\"color: green; display: none; margin-top: 5px;\"></div>
                                                 <div class=\"vote-error-";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 98), "html", null, true);
                yield "\" style=\"color: red; display: none; margin-top: 5px;\"></div>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            yield "                                ";
        } else {
            // line 103
            yield "                                    <tr>
                                        <td colspan=\"3\" class=\"text-center\">No comments found</td>
                                    </tr>
                                ";
        }
        // line 107
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bouton pour créer un nouveau commentaire -->
        <div class=\"text-end mb-4\">
            <a href=\"";
        // line 116
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
    <script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all translate buttons
    const translateButtons = document.querySelectorAll('.translate-btn');
    
    // Add event listener to each button
    translateButtons.forEach(button => {
        button.addEventListener('click', function() {
            const commentId = this.getAttribute('data-id');
            const commentText = document.querySelector(`tr[data-comment-id=\"\${commentId}\"] td:nth-child(2)`).textContent.trim();
            const selectedLang = document.querySelector(`select[data-comment-id=\"\${commentId}\"]`).value;
            
            if (!selectedLang) {
                alert('Please select a language first');
                return;
            }
            
            // Show loader
            document.getElementById(`loader-\${commentId}`).style.display = 'inline-block';
            
            // Make AJAX request
       fetch('";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_translate");
        yield "', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-Requested-With': 'XMLHttpRequest'
    },
    body: JSON.stringify({
        text: commentText,
        lang: selectedLang
    })
})
.then(response => {
    if (!response.ok) {
        throw new Error(`HTTP error! Status: \${response.status}`);
    }
    return response.json();
})
.then(data => {
    // Hide loader
    document.getElementById(`loader-\${commentId}`).style.display = 'none';
    
    // Show translated text
    if (data.error) {
        document.getElementById(`translated-text-\${commentId}`).textContent = `Error: \${data.error}`;
    } else {
        document.getElementById(`translated-text-\${commentId}`).textContent = data.translatedText;
    }
})
.catch(error => {
    // Hide loader and show error
    document.getElementById(`loader-\${commentId}`).style.display = 'none';
    document.getElementById(`translated-text-\${commentId}`).textContent = `Error: \${error.message}`;
    console.error('Translation error:', error);
});
        });
    });
});

// Vote functionality
document.querySelectorAll('.vote-button').forEach(button => {
    button.addEventListener('click', function() {
        const contentId = this.getAttribute('data-content-id');
        const contentType = this.getAttribute('data-content-type');
        const voteType = parseInt(this.getAttribute('data-vote-type'));

        const feedbackElement = document.querySelector(`.vote-feedback-\${contentId}`);
        const errorElement = document.querySelector(`.vote-error-\${contentId}`);
        
        // Masquer les messages précédents
        feedbackElement.style.display = 'none';
        errorElement.style.display = 'none';

        // Envoyer la requête POST
        fetch('";
        // line 200
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vote");
        yield "', {
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
                errorElement.textContent = data.error;
                errorElement.style.display = 'block';
            } else {
                // Afficher uniquement \"Like\" ou \"Dislike\"
                feedbackElement.textContent = voteType === 1 ? \"Like 👍\" : \"Dislike 👎\";
                feedbackElement.style.display = 'block';
                
                // Mettre à jour le nombre de votes
                refreshVoteCounts(contentId, contentType);
            }
        })
        .catch(error => {
            errorElement.textContent = 'Une erreur s\\'est produite: ' + error.message;
            errorElement.style.display = 'block';
        });
    });
});




// Function to refresh vote counts
function refreshVoteCounts(contentId, contentType) {
    fetch(`/commentaire/\${contentId}/votes`, {
        method: 'GET',
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        document.querySelector(`.vote-count-up-\${contentId}`).textContent = data.upVotes;
        document.querySelector(`.vote-count-down-\${contentId}`).textContent = data.downVotes;
    })
    .catch(error => {
        console.error('Error fetching vote counts:', error);
    });
}

const feedbackElement = document.querySelector(`.vote-feedback-\${contentId}`);
const errorElement = document.querySelector(`.vote-error-\${contentId}`);
feedbackElement.style.display = 'none';
errorElement.style.display = 'none';



// Fonction pour récupérer le nombre de notifications
function checkNotifications() {
    fetch('/api/notifications/count')
        .then(response => response.json())
        .then(data => {
            // Supposons que vous avez un élément pour afficher le nombre de notifications
            const notifBadge = document.getElementById('notification-badge');
            if (notifBadge) {
                if (data.count > 0) {
                    notifBadge.textContent = data.count;
                    notifBadge.style.display = 'inline-block';
                } else {
                    notifBadge.style.display = 'none';
                }
            }
        })
        .catch(error => console.error('Erreur lors de la récupération des notifications:', error));
}

// Vérifier les notifications au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
    checkNotifications();
    
    // Vérifier les notifications toutes les 30 secondes
    setInterval(checkNotifications, 30000);
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
        return array (  382 => 200,  326 => 147,  292 => 116,  281 => 107,  275 => 103,  272 => 102,  262 => 98,  258 => 97,  252 => 94,  243 => 88,  235 => 83,  224 => 76,  217 => 70,  211 => 69,  207 => 68,  200 => 64,  195 => 61,  189 => 60,  185 => 59,  178 => 55,  170 => 50,  164 => 47,  159 => 45,  155 => 44,  150 => 43,  145 => 42,  143 => 41,  120 => 21,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                        <a href=\"{{ path('app_commentaire_index') }}\" class=\"btn btn-danger ms-2\">LOGOUT</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ajouter ceci dans votre interface, par exemple dans l'en-tête -->
<div class=\"notification-container\">
    <a href=\"{{ path('app_notification') }}\" class=\"notification-link\">
        <i class=\"bi bi-bell\"></i>
        <span id=\"notification-badge\" class=\"badge bg-danger\" style=\"display: none;\">0</span>
    </a>
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
                                        <tr data-comment-id=\"{{ commentaire.id }}\">
                                            <td>{{ commentaire.id }}</td>
                                            <td>{{ commentaire.contenu }}</td>
                                            <td>
                                                <a href=\"{{ path('app_commentaire_show', {'id': commentaire.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                                    <i class=\"bi bi-eye\"></i> Show
                                                </a>
                                                <a href=\"{{ path('app_commentaire_edit', {'id': commentaire.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">
                                                    <i class=\"bi bi-pencil\"></i> Edit
                                                </a>
                                                <!-- Vote buttons -->
                                                <button class=\"vote-button btn btn-sm btn-outline-success\" 
                                                        data-content-id=\"{{ commentaire.id }}\" 
                                                        data-content-type=\"commentaire\" 
                                                        data-vote-type=\"1\">
                                                   <i class=\"bi bi-hand-thumbs-up\"></i> 
                                                   <span class=\"vote-count-up-{{ commentaire.id }}\">
                                                    {% if commentaire.upVotes is defined %}{{ commentaire.upVotes }}{% else %}0{% endif %}
                                                   </span>
                                                </button>
                                                <button class=\"vote-button btn btn-sm btn-outline-danger\" 
                                                        data-content-id=\"{{ commentaire.id }}\" 
                                                        data-content-type=\"commentaire\" 
                                                        data-vote-type=\"-1\">
                                                   <i class=\"bi bi-hand-thumbs-down\"></i>
                                                   <span class=\"vote-count-down-{{ commentaire.id }}\">
                                                       {% if commentaire.downVotes is defined %}{{ commentaire.downVotes }}{% else %}0{% endif %}
                                                   </span>
                                                </button>
    

                                                <!-- Sélecteur de langue -->
                                              {# Add this to your select element in the table #}
                                                <select class=\"form-select lang-select\" data-comment-id=\"{{ commentaire.id }}\" style=\"width: auto; display: inline-block;\">
                                                    <option value=\"\">Select language</option>
                                                    <option value=\"en\">English</option>
                                                    <option value=\"fr\">Français</option>
                                                </select>
                                                <!-- Bouton de traduction -->
    
                                                 <button class=\"btn btn-sm btn-outline-success translate-btn\" data-id=\"{{ commentaire.id }}\" data-lang=\"en\">
                                                     <i class=\"bi bi-translate\"></i> Traduire
                                                 </button>

                                                 <!-- Loader caché -->
                                                 <div id=\"loader-{{ commentaire.id }}\" class=\"spinner-border spinner-border-sm text-primary\" role=\"status\" style=\"display: none;\">
                                                    <span class=\"visually-hidden\">Traduction...</span>
                                                 </div>
                                             </div>

                                                 <!-- Affichage du texte traduit -->
                                                 <p id=\"translated-text-{{ commentaire.id }}\" class=\"mt-2 text-muted\"></p>

                                                 <!-- Vote feedback messages -->
                                                 <div class=\"vote-feedback-{{ commentaire.id }}\" style=\"color: green; display: none; margin-top: 5px;\"></div>
                                                 <div class=\"vote-error-{{ commentaire.id }}\" style=\"color: red; display: none; margin-top: 5px;\"></div>
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
    <script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all translate buttons
    const translateButtons = document.querySelectorAll('.translate-btn');
    
    // Add event listener to each button
    translateButtons.forEach(button => {
        button.addEventListener('click', function() {
            const commentId = this.getAttribute('data-id');
            const commentText = document.querySelector(`tr[data-comment-id=\"\${commentId}\"] td:nth-child(2)`).textContent.trim();
            const selectedLang = document.querySelector(`select[data-comment-id=\"\${commentId}\"]`).value;
            
            if (!selectedLang) {
                alert('Please select a language first');
                return;
            }
            
            // Show loader
            document.getElementById(`loader-\${commentId}`).style.display = 'inline-block';
            
            // Make AJAX request
       fetch('{{ path(\"app_commentaire_translate\") }}', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-Requested-With': 'XMLHttpRequest'
    },
    body: JSON.stringify({
        text: commentText,
        lang: selectedLang
    })
})
.then(response => {
    if (!response.ok) {
        throw new Error(`HTTP error! Status: \${response.status}`);
    }
    return response.json();
})
.then(data => {
    // Hide loader
    document.getElementById(`loader-\${commentId}`).style.display = 'none';
    
    // Show translated text
    if (data.error) {
        document.getElementById(`translated-text-\${commentId}`).textContent = `Error: \${data.error}`;
    } else {
        document.getElementById(`translated-text-\${commentId}`).textContent = data.translatedText;
    }
})
.catch(error => {
    // Hide loader and show error
    document.getElementById(`loader-\${commentId}`).style.display = 'none';
    document.getElementById(`translated-text-\${commentId}`).textContent = `Error: \${error.message}`;
    console.error('Translation error:', error);
});
        });
    });
});

// Vote functionality
document.querySelectorAll('.vote-button').forEach(button => {
    button.addEventListener('click', function() {
        const contentId = this.getAttribute('data-content-id');
        const contentType = this.getAttribute('data-content-type');
        const voteType = parseInt(this.getAttribute('data-vote-type'));

        const feedbackElement = document.querySelector(`.vote-feedback-\${contentId}`);
        const errorElement = document.querySelector(`.vote-error-\${contentId}`);
        
        // Masquer les messages précédents
        feedbackElement.style.display = 'none';
        errorElement.style.display = 'none';

        // Envoyer la requête POST
        fetch('{{ path(\"vote\") }}', {
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
                errorElement.textContent = data.error;
                errorElement.style.display = 'block';
            } else {
                // Afficher uniquement \"Like\" ou \"Dislike\"
                feedbackElement.textContent = voteType === 1 ? \"Like 👍\" : \"Dislike 👎\";
                feedbackElement.style.display = 'block';
                
                // Mettre à jour le nombre de votes
                refreshVoteCounts(contentId, contentType);
            }
        })
        .catch(error => {
            errorElement.textContent = 'Une erreur s\\'est produite: ' + error.message;
            errorElement.style.display = 'block';
        });
    });
});




// Function to refresh vote counts
function refreshVoteCounts(contentId, contentType) {
    fetch(`/commentaire/\${contentId}/votes`, {
        method: 'GET',
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        document.querySelector(`.vote-count-up-\${contentId}`).textContent = data.upVotes;
        document.querySelector(`.vote-count-down-\${contentId}`).textContent = data.downVotes;
    })
    .catch(error => {
        console.error('Error fetching vote counts:', error);
    });
}

const feedbackElement = document.querySelector(`.vote-feedback-\${contentId}`);
const errorElement = document.querySelector(`.vote-error-\${contentId}`);
feedbackElement.style.display = 'none';
errorElement.style.display = 'none';



// Fonction pour récupérer le nombre de notifications
function checkNotifications() {
    fetch('/api/notifications/count')
        .then(response => response.json())
        .then(data => {
            // Supposons que vous avez un élément pour afficher le nombre de notifications
            const notifBadge = document.getElementById('notification-badge');
            if (notifBadge) {
                if (data.count > 0) {
                    notifBadge.textContent = data.count;
                    notifBadge.style.display = 'inline-block';
                } else {
                    notifBadge.style.display = 'none';
                }
            }
        })
        .catch(error => console.error('Erreur lors de la récupération des notifications:', error));
}

// Vérifier les notifications au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
    checkNotifications();
    
    // Vérifier les notifications toutes les 30 secondes
    setInterval(checkNotifications, 30000);
});


</script>


{% endblock %}", "commentaire/index.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\commentaire\\index.html.twig");
    }
}
