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

/* email.php */
class __TwigTemplate_cd23e57b1653736c538027d1798d50dc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email.php"));

        // line 1
        yield "<?php
require_once './vendor/autoload.php';

use Symfony\\Component\\Mailer\\Exception\\TransportExceptionInterface;
use Symfony\\Component\\Mailer\\Transport;
use Symfony\\Component\\Mailer\\Mailer;
use Symfony\\Component\\Mime\\Email;

// Create a Transport object
\$transport = Transport::fromDsn('smtp://amroush123@gmail.com:npcfowmbtolgyqfe@smtp.gmail.com:587');

// Create a Mailer object
\$mailer = new Mailer(\$transport);

// Create an Email object
\$email = (new Email());

// Set the \"From\" address
\$email->from('amroush123@gmail.com');

// Set the \"To\" address
\$email->to(
    'ahmedboutrif0@gmail.com'
);
// Set a \"subject\"
\$email->subject('A Cool Subject!');

// Set the plain-text \"body\"
\$email->text('The plain text version of the message.');

// Send email
\$mailer->send(\$email);";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "email.php";
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
        return new Source("<?php
require_once './vendor/autoload.php';

use Symfony\\Component\\Mailer\\Exception\\TransportExceptionInterface;
use Symfony\\Component\\Mailer\\Transport;
use Symfony\\Component\\Mailer\\Mailer;
use Symfony\\Component\\Mime\\Email;

// Create a Transport object
\$transport = Transport::fromDsn('smtp://amroush123@gmail.com:npcfowmbtolgyqfe@smtp.gmail.com:587');

// Create a Mailer object
\$mailer = new Mailer(\$transport);

// Create an Email object
\$email = (new Email());

// Set the \"From\" address
\$email->from('amroush123@gmail.com');

// Set the \"To\" address
\$email->to(
    'ahmedboutrif0@gmail.com'
);
// Set a \"subject\"
\$email->subject('A Cool Subject!');

// Set the plain-text \"body\"
\$email->text('The plain text version of the message.');

// Send email
\$mailer->send(\$email);", "email.php", "C:\\Users\\ahmed\\Videos\\Z-Boutrif\\edutech_1\\edutech_1\\edutech\\templates\\email.php");
    }
}
