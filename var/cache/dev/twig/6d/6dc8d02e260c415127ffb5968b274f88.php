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

/* back/forms/newsletter.php */
class __TwigTemplate_22052770f3d627cd4c6d07dc2934ac46 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/forms/newsletter.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/forms/newsletter.php"));

        // line 1
        yield "<?php
  /**
  * Requires the \"PHP Email Form\" library
  * The \"PHP Email Form\" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  \$receiving_email_address = 'contact@example.com';

  if( file_exists(\$php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( \$php_email_form );
  } else {
    die( 'Unable to load the \"PHP Email Form\" Library!');
  }

  \$contact = new PHP_Email_Form;
  \$contact->ajax = true;
  
  \$contact->to = \$receiving_email_address;
  \$contact->from_name = \$_POST['email'];
  \$contact->from_email = \$_POST['email'];
  \$contact->subject =\"New Subscription: \" . \$_POST['email'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  \$contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  \$contact->add_message( \$_POST['email'], 'Email');

  echo \$contact->send();
?>
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
        return "back/forms/newsletter.php";
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
  /**
  * Requires the \"PHP Email Form\" library
  * The \"PHP Email Form\" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  \$receiving_email_address = 'contact@example.com';

  if( file_exists(\$php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( \$php_email_form );
  } else {
    die( 'Unable to load the \"PHP Email Form\" Library!');
  }

  \$contact = new PHP_Email_Form;
  \$contact->ajax = true;
  
  \$contact->to = \$receiving_email_address;
  \$contact->from_name = \$_POST['email'];
  \$contact->from_email = \$_POST['email'];
  \$contact->subject =\"New Subscription: \" . \$_POST['email'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  \$contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  \$contact->add_message( \$_POST['email'], 'Email');

  echo \$contact->send();
?>
", "back/forms/newsletter.php", "C:\\Users\\User\\Desktop\\edutech - Copie (5) - Copie\\templates\\back\\forms\\newsletter.php");
    }
}
