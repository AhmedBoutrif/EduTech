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

/* quiz/play.html.twig */
class __TwigTemplate_d423f41666a665cc361237064bd2b5bd extends Template
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
            'results' => [$this, 'block_results'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/play.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/play.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/play.html.twig", 1);
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

        yield "Jouer un Quiz";
        
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
        yield "<div class=\"d-flex justify-content-center align-items-center min-vh-100\">
    <div class=\"quiz-container\" id=\"quiz\" data-quiz-id=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "\">
        <div class=\"quiz-header\">
            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_index");
        yield "\"><span class=\"fa fa-angle-left pr-2\"></span> Retour au quiz</a>
            <p class=\"text-muted\">Répondez aux questions ci-dessous</p>
            <div class=\"progress\">
                <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
        </div>

        <div id=\"question-container\">
            <p class=\"question\" id=\"question\"></p>
            <div class=\"options\" id=\"options\"></div>
        </div>

        <div class=\"quiz-footer\">
            <div class=\"timer\" id=\"timer\">Time: 30s</div>
            <button class=\"btn btn-primary\" id=\"next-btn\">Next</button>
        </div>
    </div>
</div>
";
        // line 27
        yield from $this->unwrap()->yieldBlock('results', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_results(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "results"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "results"));

        // line 28
        yield "    ";
        // line 29
        yield "    ";
        if (array_key_exists("note", $context)) {
            // line 30
            yield "        <div class=\"results text-center\">
            <h5>Votre note : <strong>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 31, $this->source); })()), "html", null, true);
            yield "</strong> / 5</h5>
            <h5>Pièces requises : ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prixPiece"]) || array_key_exists("prixPiece", $context) ? $context["prixPiece"] : (function () { throw new RuntimeError('Variable "prixPiece" does not exist.', 32, $this->source); })()), "html", null, true);
            yield " 🪙</h5>
            <form action=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_play", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" method=\"POST\">
                <input type=\"hidden\" name=\"note\" value=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 34, $this->source); })()), "html", null, true);
            yield "\">
                <input type=\"hidden\" name=\"reponses_utilisateur\" value='";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["reponses_utilisateur"]) || array_key_exists("reponses_utilisateur", $context) ? $context["reponses_utilisateur"] : (function () { throw new RuntimeError('Variable "reponses_utilisateur" does not exist.', 35, $this->source); })())), "html", null, true);
            yield "'>
                <input type=\"hidden\" name=\"prix_piece\" value=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prixPiece"]) || array_key_exists("prixPiece", $context) ? $context["prixPiece"] : (function () { throw new RuntimeError('Variable "prixPiece" does not exist.', 36, $this->source); })()), "html", null, true);
            yield "\">
                <button type=\"submit\" class=\"btn btn-success\">Soumettre</button>
            </form>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
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

        // line 45
        yield "    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        body {
            background-color: #f0f2f5;
        }

        .quiz-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
            width: 100%;
        }

        .quiz-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .question {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .options {
            display: grid;
            gap: 10px;
        }

        .option {
            background-color: #f8f9fa;
            border: 2px solid #dee2e6;
            border-radius: 10px;
            padding: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .option:hover {
            background-color: #e9ecef;
        }

        .option.selected {
            background-color: #cfe2ff;
            border-color: #0d6efd;
        }

        .option.correct {
            background-color: #d4edda;
            border-color: #28a745;
        }

        .option.incorrect {
            background-color: #f8d7da;
            border-color: #dc3545;
        }

        .quiz-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
        }

        .timer {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .progress {
            height: 10px;
            margin-bottom: 20px;
        }

        .results {
            text-align: center;
            margin-top: 20px;
        }

        .result-icon {
            font-size: 4rem;
            margin-bottom: 20px;
        }

        .score {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 139
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

        // line 140
        yield "    <script>
        const quizData = [
            ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 142, $this->source); })()), "questions", [], "any", false, false, false, 142));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 143
            yield "            {
                question: \"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 144), "html", null, true);
            yield "\",
                options: [
                    ";
            // line 146
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["question"], "options", [], "any", true, true, false, 146) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "options", [], "any", false, false, false, 146)))) {
                // line 147
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "options", [], "any", false, false, false, 147));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 148
                    yield "                            \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                    yield "\",
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                yield "                    ";
            }
            // line 151
            yield "                ],
                correct: ";
            // line 152
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["question"], "correctOptionIndex", [], "any", true, true, false, 152) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["question"], "correctOptionIndex", [], "any", false, false, false, 152)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "correctOptionIndex", [], "any", false, false, false, 152), "html", null, true)) : (0));
            yield ",
                points: ";
            // line 153
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["question"], "points", [], "any", true, true, false, 153) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["question"], "points", [], "any", false, false, false, 153)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "points", [], "any", false, false, false, 153), "html", null, true)) : (5));
            yield "
            },
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "        ];

        let currentQuestion = 0;
        let score = 0;
        let totalPoints = 0;
        let timer;
        let timeLeft = 30;
        let reponsesUtilisateur = [];

        const questionEl = document.getElementById('question');
        const optionsEl = document.getElementById('options');
        const nextBtn = document.getElementById('next-btn');
        const timerEl = document.getElementById('timer');
        const progressBar = document.querySelector('.progress-bar');
        const quizContainer = document.getElementById('quiz');
        const quizId = quizContainer.dataset.quizId; // Récupère l'ID du quiz

        function loadQuestion() {
            const question = quizData[currentQuestion];
            questionEl.textContent = question.question;
            optionsEl.innerHTML = '';
            question.options.forEach((option, index) => {
                const button = document.createElement('button');
                button.textContent = option;
                button.classList.add('option');
                button.addEventListener('click', () => selectOption(button, index));
                optionsEl.appendChild(button);
            });
            nextBtn.style.display = 'none';
            timeLeft = 30;
            if (timer) clearInterval(timer);
            startTimer();
            updateProgress();
        }

        function selectOption(selectedButton, optionIndex) {
            const buttons = optionsEl.getElementsByClassName('option');
            Array.from(buttons).forEach(button => button.classList.remove('selected'));
            selectedButton.classList.add('selected');
            nextBtn.style.display = 'block';
            reponsesUtilisateur[currentQuestion] = selectedButton.textContent;
        }

        function startTimer() {
            timer = setInterval(() => {
                timeLeft--;
                timerEl.textContent = `Time: \${timeLeft}s`;
                if (timeLeft === 0) {
                    clearInterval(timer);
                    checkAnswer();
                }
            }, 1000);
        }

        function checkAnswer() {
            const selectedOption = document.querySelector('.option.selected');
            if (!selectedOption) return;

            const selectedAnswer = Array.from(optionsEl.children).indexOf(selectedOption);
            const question = quizData[currentQuestion];

            if (selectedAnswer === question.correct) {
                score++;
                totalPoints += question.points;
                selectedOption.classList.add('correct');
            } else {
                selectedOption.classList.add('incorrect');
                optionsEl.children[question.correct].classList.add('correct');
            }

            Array.from(optionsEl.children).forEach(button => button.disabled = true);
            clearInterval(timer);
        }

        function updateProgress() {
            const progress = ((currentQuestion + 1) / quizData.length) * 100;
            progressBar.style.width = `\${progress}%`;
            progressBar.setAttribute('aria-valuenow', progress);
        }

      function showResults() {
    const totalPointsPossible = quizData.reduce((acc, question) => acc + question.points, 0);
    const note = (totalPoints / totalPointsPossible) * 5; // Note sur 5
    const prixPiece = score * 40; // 40 pièces par question correcte

    quizContainer.innerHTML = `
        <div class=\"results\">
            <div class=\"result-icon\">
                <i class=\"fas \${score > quizData.length / 2 ? 'fa-trophy text-success' : 'fa-times-circle text-danger'}\"></i>
            </div>
            <h5>Votre note : <strong>\${note.toFixed(2)}</strong> / 5</h5>
            <h5>Pièces requises : \${prixPiece} 🪙</h5>
            <form action=\"/quiz/\${quizId}/play\" method=\"POST\">
                <input type=\"hidden\" name=\"note\" value=\"\${note.toFixed(2)}\">
                <input type=\"hidden\" name=\"reponses_utilisateur\" value='\${JSON.stringify(reponsesUtilisateur)}'>
                <input type=\"hidden\" name=\"prix_piece\" value=\"\${prixPiece}\">
                <button type=\"submit\" class=\"btn btn-success\">Soumettre</button>
            </form>
        </div>
    `;
}
        nextBtn.addEventListener('click', () => {
            checkAnswer();
            currentQuestion++;
            if (currentQuestion < quizData.length) {
                loadQuestion();
            } else {
                showResults();
            }
        });

        loadQuestion();
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
        return "quiz/play.html.twig";
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
        return array (  380 => 156,  371 => 153,  367 => 152,  364 => 151,  361 => 150,  352 => 148,  347 => 147,  345 => 146,  340 => 144,  337 => 143,  333 => 142,  329 => 140,  316 => 139,  213 => 45,  200 => 44,  183 => 36,  179 => 35,  175 => 34,  171 => 33,  167 => 32,  163 => 31,  160 => 30,  157 => 29,  155 => 28,  132 => 27,  111 => 9,  106 => 7,  103 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Jouer un Quiz{% endblock %}

{% block main %}
<div class=\"d-flex justify-content-center align-items-center min-vh-100\">
    <div class=\"quiz-container\" id=\"quiz\" data-quiz-id=\"{{ quiz.id }}\">
        <div class=\"quiz-header\">
            <a href=\"{{ path('app_quiz_index') }}\"><span class=\"fa fa-angle-left pr-2\"></span> Retour au quiz</a>
            <p class=\"text-muted\">Répondez aux questions ci-dessous</p>
            <div class=\"progress\">
                <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            </div>
        </div>

        <div id=\"question-container\">
            <p class=\"question\" id=\"question\"></p>
            <div class=\"options\" id=\"options\"></div>
        </div>

        <div class=\"quiz-footer\">
            <div class=\"timer\" id=\"timer\">Time: 30s</div>
            <button class=\"btn btn-primary\" id=\"next-btn\">Next</button>
        </div>
    </div>
</div>
{% block results %}
    {# Affichage de la note après soumission #}
    {% if note is defined %}
        <div class=\"results text-center\">
            <h5>Votre note : <strong>{{ note }}</strong> / 5</h5>
            <h5>Pièces requises : {{ prixPiece }} 🪙</h5>
            <form action=\"{{ path('app_quiz_play', {'id': quiz.id}) }}\" method=\"POST\">
                <input type=\"hidden\" name=\"note\" value=\"{{ note }}\">
                <input type=\"hidden\" name=\"reponses_utilisateur\" value='{{ reponses_utilisateur|json_encode }}'>
                <input type=\"hidden\" name=\"prix_piece\" value=\"{{ prixPiece }}\">
                <button type=\"submit\" class=\"btn btn-success\">Soumettre</button>
            </form>
        </div>
    {% endif %}
{% endblock %}
{% endblock %}

{% block stylesheets %}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        body {
            background-color: #f0f2f5;
        }

        .quiz-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
            width: 100%;
        }

        .quiz-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .question {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .options {
            display: grid;
            gap: 10px;
        }

        .option {
            background-color: #f8f9fa;
            border: 2px solid #dee2e6;
            border-radius: 10px;
            padding: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .option:hover {
            background-color: #e9ecef;
        }

        .option.selected {
            background-color: #cfe2ff;
            border-color: #0d6efd;
        }

        .option.correct {
            background-color: #d4edda;
            border-color: #28a745;
        }

        .option.incorrect {
            background-color: #f8d7da;
            border-color: #dc3545;
        }

        .quiz-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
        }

        .timer {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .progress {
            height: 10px;
            margin-bottom: 20px;
        }

        .results {
            text-align: center;
            margin-top: 20px;
        }

        .result-icon {
            font-size: 4rem;
            margin-bottom: 20px;
        }

        .score {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
{% endblock %}

{% block javascripts %}
    <script>
        const quizData = [
            {% for question in quiz.questions %}
            {
                question: \"{{ question.question }}\",
                options: [
                    {% if question.options is defined and question.options is not empty %}
                        {% for option in question.options %}
                            \"{{ option }}\",
                        {% endfor %}
                    {% endif %}
                ],
                correct: {{ question.correctOptionIndex ?? 0 }},
                points: {{ question.points ?? 5 }}
            },
            {% endfor %}
        ];

        let currentQuestion = 0;
        let score = 0;
        let totalPoints = 0;
        let timer;
        let timeLeft = 30;
        let reponsesUtilisateur = [];

        const questionEl = document.getElementById('question');
        const optionsEl = document.getElementById('options');
        const nextBtn = document.getElementById('next-btn');
        const timerEl = document.getElementById('timer');
        const progressBar = document.querySelector('.progress-bar');
        const quizContainer = document.getElementById('quiz');
        const quizId = quizContainer.dataset.quizId; // Récupère l'ID du quiz

        function loadQuestion() {
            const question = quizData[currentQuestion];
            questionEl.textContent = question.question;
            optionsEl.innerHTML = '';
            question.options.forEach((option, index) => {
                const button = document.createElement('button');
                button.textContent = option;
                button.classList.add('option');
                button.addEventListener('click', () => selectOption(button, index));
                optionsEl.appendChild(button);
            });
            nextBtn.style.display = 'none';
            timeLeft = 30;
            if (timer) clearInterval(timer);
            startTimer();
            updateProgress();
        }

        function selectOption(selectedButton, optionIndex) {
            const buttons = optionsEl.getElementsByClassName('option');
            Array.from(buttons).forEach(button => button.classList.remove('selected'));
            selectedButton.classList.add('selected');
            nextBtn.style.display = 'block';
            reponsesUtilisateur[currentQuestion] = selectedButton.textContent;
        }

        function startTimer() {
            timer = setInterval(() => {
                timeLeft--;
                timerEl.textContent = `Time: \${timeLeft}s`;
                if (timeLeft === 0) {
                    clearInterval(timer);
                    checkAnswer();
                }
            }, 1000);
        }

        function checkAnswer() {
            const selectedOption = document.querySelector('.option.selected');
            if (!selectedOption) return;

            const selectedAnswer = Array.from(optionsEl.children).indexOf(selectedOption);
            const question = quizData[currentQuestion];

            if (selectedAnswer === question.correct) {
                score++;
                totalPoints += question.points;
                selectedOption.classList.add('correct');
            } else {
                selectedOption.classList.add('incorrect');
                optionsEl.children[question.correct].classList.add('correct');
            }

            Array.from(optionsEl.children).forEach(button => button.disabled = true);
            clearInterval(timer);
        }

        function updateProgress() {
            const progress = ((currentQuestion + 1) / quizData.length) * 100;
            progressBar.style.width = `\${progress}%`;
            progressBar.setAttribute('aria-valuenow', progress);
        }

      function showResults() {
    const totalPointsPossible = quizData.reduce((acc, question) => acc + question.points, 0);
    const note = (totalPoints / totalPointsPossible) * 5; // Note sur 5
    const prixPiece = score * 40; // 40 pièces par question correcte

    quizContainer.innerHTML = `
        <div class=\"results\">
            <div class=\"result-icon\">
                <i class=\"fas \${score > quizData.length / 2 ? 'fa-trophy text-success' : 'fa-times-circle text-danger'}\"></i>
            </div>
            <h5>Votre note : <strong>\${note.toFixed(2)}</strong> / 5</h5>
            <h5>Pièces requises : \${prixPiece} 🪙</h5>
            <form action=\"/quiz/\${quizId}/play\" method=\"POST\">
                <input type=\"hidden\" name=\"note\" value=\"\${note.toFixed(2)}\">
                <input type=\"hidden\" name=\"reponses_utilisateur\" value='\${JSON.stringify(reponsesUtilisateur)}'>
                <input type=\"hidden\" name=\"prix_piece\" value=\"\${prixPiece}\">
                <button type=\"submit\" class=\"btn btn-success\">Soumettre</button>
            </form>
        </div>
    `;
}
        nextBtn.addEventListener('click', () => {
            checkAnswer();
            currentQuestion++;
            if (currentQuestion < quizData.length) {
                loadQuestion();
            } else {
                showResults();
            }
        });

        loadQuestion();
    </script>
{% endblock %}", "quiz/play.html.twig", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\quiz\\play.html.twig");
    }
}
