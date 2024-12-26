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

/* home/index.html.twig */
class __TwigTemplate_c44107bd8a44409a8588014634aff240 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Acceuil!";
        
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
        yield "    <main class=\"main\">

        <!-- hero slider -->
        <div class=\"hero-section\">
            <div class=\"hero-slider owl-carousel owl-theme\">
                <div class=\"hero-single\" style=\"background: url(";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/slider/slider-1.jpg"), "html", null, true);
        yield ")\">
                    <div class=\"container\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-md-12 col-lg-7\">
                                <div class=\"hero-content\">
                                    <h6 class=\"hero-sub-title\" data-animation=\"fadeInDown\" data-delay=\".25s\">
                                        <i class=\"far fa-book-open-reader\"></i>Université de Lille !
                                    </h6>
                                    <h1 class=\"hero-title\" data-animation=\"fadeInRight\" data-delay=\".50s\">
                                        Inspirons <span>demain</span>
                                    </h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\".75s\">
                                        Le système de réservation des salles de l'Universite
                                        de Lille facilite l'organisation des cours et des événements.
                                    </p>
                                    <div class=\"hero-btn\" data-animation=\"fadeInUp\" data-delay=\"1s\">
                                        <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new");
        yield "\" class=\"theme-btn\">Effectuer une Reservation<i
                                                class=\"fas fa-arrow-right-long\"></i></a>
                                        <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"theme-btn theme-btn2\">Contactez-nous<i
                                                class=\"fas fa-arrow-right-long\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero slider end -->
    </main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  116 => 29,  111 => 27,  92 => 11,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Acceuil!{% endblock %}

{% block body %}
    <main class=\"main\">

        <!-- hero slider -->
        <div class=\"hero-section\">
            <div class=\"hero-slider owl-carousel owl-theme\">
                <div class=\"hero-single\" style=\"background: url({{asset('/img/slider/slider-1.jpg')}})\">
                    <div class=\"container\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-md-12 col-lg-7\">
                                <div class=\"hero-content\">
                                    <h6 class=\"hero-sub-title\" data-animation=\"fadeInDown\" data-delay=\".25s\">
                                        <i class=\"far fa-book-open-reader\"></i>Université de Lille !
                                    </h6>
                                    <h1 class=\"hero-title\" data-animation=\"fadeInRight\" data-delay=\".50s\">
                                        Inspirons <span>demain</span>
                                    </h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\".75s\">
                                        Le système de réservation des salles de l'Universite
                                        de Lille facilite l'organisation des cours et des événements.
                                    </p>
                                    <div class=\"hero-btn\" data-animation=\"fadeInUp\" data-delay=\"1s\">
                                        <a href=\"{{path('app_reservation_new')}}\" class=\"theme-btn\">Effectuer une Reservation<i
                                                class=\"fas fa-arrow-right-long\"></i></a>
                                        <a href=\"{{path('app_contact')}}\" class=\"theme-btn theme-btn2\">Contactez-nous<i
                                                class=\"fas fa-arrow-right-long\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero slider end -->
    </main>

{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\systeme-reservation\\templates\\home\\index.html.twig");
    }
}
