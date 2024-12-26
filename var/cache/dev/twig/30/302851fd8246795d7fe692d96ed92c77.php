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

/* reservation/new.html.twig */
class __TwigTemplate_c9d85d38d17d2d847b3da9d2fc586031 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "New Reservation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "        <main class=\"main\">

        <!-- breadcrumb -->
        <div class=\"site-breadcrumb\" style=\"background: url(";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/breadcrumb/01.jpg"), "html", null, true);
        yield ")\">
            <div class=\"container\">
                <h2 class=\"breadcrumb-title\">Table de resérvations</h2>
                <ul class=\"breadcrumb-menu\">
                    <li><a href=\"index.html\">Acceuil</a></li>
                    <li class=\"active\">Reservations</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->
        <div class=\"application py-120\">
            <div class=\"container\">
                <div class=\"application-form\">
                    <h3>Nouveau Reservation</h3>
                     ";
        // line 23
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reservation/_form.html.twig");
        yield "
                </div>
            </div>
           

        </div>
        </main>
    <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\">back to list</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reservation/new.html.twig";
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
        return array (  117 => 30,  107 => 23,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Reservation{% endblock %}

{% block body %}
        <main class=\"main\">

        <!-- breadcrumb -->
        <div class=\"site-breadcrumb\" style=\"background: url({{asset('img/breadcrumb/01.jpg')}})\">
            <div class=\"container\">
                <h2 class=\"breadcrumb-title\">Table de resérvations</h2>
                <ul class=\"breadcrumb-menu\">
                    <li><a href=\"index.html\">Acceuil</a></li>
                    <li class=\"active\">Reservations</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->
        <div class=\"application py-120\">
            <div class=\"container\">
                <div class=\"application-form\">
                    <h3>Nouveau Reservation</h3>
                     {{ include('reservation/_form.html.twig') }}
                </div>
            </div>
           

        </div>
        </main>
    <a href=\"{{ path('app_reservation_index') }}\">back to list</a>
{% endblock %}
", "reservation/new.html.twig", "C:\\xampp\\htdocs\\systeme-reservation\\templates\\reservation\\new.html.twig");
    }
}
