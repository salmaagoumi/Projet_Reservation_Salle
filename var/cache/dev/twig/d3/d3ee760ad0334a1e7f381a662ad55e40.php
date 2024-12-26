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

/* contact/index.html.twig */
class __TwigTemplate_31d8f34ee2f3f7ad37477c43d74a04dd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        yield "Contactez-nous!";
        
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
        yield "<main class=\"main\">

        <!-- breadcrumb -->
        <div class=\"site-breadcrumb\" style=\"background: url(";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/breadcrumb/01.jpg"), "html", null, true);
        yield ")\">
            <div class=\"container\">
                <h2 class=\"breadcrumb-title\">Contactez-Nous</h2>
                <ul class=\"breadcrumb-menu\">
                    <li><a href=\"index.html\">Accuiel</a></li>
                    <li class=\"active\">Contactez-Nous</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- contact area -->
        <div class=\"contact-area py-120\">
            <div class=\"container\">
                ";
        // line 72
        yield "                <div class=\"contact-wrapper\">
                    <div class=\"row\">
                        <div class=\"col-lg-5\">
                            <div class=\"contact-img\">
                                <img src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/contact/02.jpg"), "html", null, true);
        yield "\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-lg-7 align-self-center\">
                            <div class=\"contact-form\">
                                <div class=\"contact-form-header\">
                                    <h2>Contactez-nous</h2>
                                    <p>Pour contacter l'université de Lille,
                                     utilisez le formulaire en ligne ou appelez notre service dédié. </p>
                                </div>
                                <form method=\"post\" action=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("php/contact.php"), "html", null, true);
        yield "\" id=\"contact-form\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" name=\"name\"
                                                    placeholder=\"Nom\" required>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <input type=\"email\" class=\"form-control\" name=\"email\"
                                                    placeholder=\"Email\" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" name=\"subject\"
                                            placeholder=\"Sujet\" required>
                                    </div>
                                    <div class=\"form-group\">
                                        <textarea name=\"message\" cols=\"30\" rows=\"5\" class=\"form-control\"
                                            placeholder=\"Message\"></textarea>
                                    </div>
                                    <button type=\"submit\" class=\"theme-btn\">Envoyer Votre
                                        Message <i class=\"far fa-paper-plane\"></i></button>
                                    <div class=\"col-md-12 mt-3\">
                                        <div class=\"form-messege text-success\"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end contact area -->
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
        return "contact/index.html.twig";
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
        return array (  127 => 86,  114 => 76,  108 => 72,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contactez-nous!{% endblock %}

{% block body %}
<main class=\"main\">

        <!-- breadcrumb -->
        <div class=\"site-breadcrumb\" style=\"background: url({{asset('img/breadcrumb/01.jpg')}})\">
            <div class=\"container\">
                <h2 class=\"breadcrumb-title\">Contactez-Nous</h2>
                <ul class=\"breadcrumb-menu\">
                    <li><a href=\"index.html\">Accuiel</a></li>
                    <li class=\"active\">Contactez-Nous</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- contact area -->
        <div class=\"contact-area py-120\">
            <div class=\"container\">
                {# <div class=\"contact-content\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div class=\"contact-info\">
                                <div class=\"contact-info-icon\">
                                    <i class=\"fal fa-map-location-dot\"></i>
                                </div>
                                <div class=\"contact-info-content\">
                                    <h5>Office Address</h5>
                                    <p>25/B Milford, New York, USA</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"contact-info\">
                                <div class=\"contact-info-icon\">
                                    <i class=\"fal fa-phone-volume\"></i>
                                </div>
                                <div class=\"contact-info-content\">
                                    <h5>Call Us</h5>
                                    <p>+2 123 4565 789</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"contact-info\">
                                <div class=\"contact-info-icon\">
                                    <i class=\"fal fa-envelopes\"></i>
                                </div>
                                <div class=\"contact-info-content\">
                                    <h5>Email Us</h5>
                                    <p>info@example.com</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"contact-info\">
                                <div class=\"contact-info-icon\">
                                    <i class=\"fal fa-alarm-clock\"></i>
                                </div>
                                <div class=\"contact-info-content\">
                                    <h5>Open Time</h5>
                                    <p>Mon - Sat (10.00AM - 05.30PM)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> #}
                <div class=\"contact-wrapper\">
                    <div class=\"row\">
                        <div class=\"col-lg-5\">
                            <div class=\"contact-img\">
                                <img src=\"{{asset('img/contact/02.jpg')}}\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-lg-7 align-self-center\">
                            <div class=\"contact-form\">
                                <div class=\"contact-form-header\">
                                    <h2>Contactez-nous</h2>
                                    <p>Pour contacter l'université de Lille,
                                     utilisez le formulaire en ligne ou appelez notre service dédié. </p>
                                </div>
                                <form method=\"post\" action=\"{{asset('php/contact.php')}}\" id=\"contact-form\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" name=\"name\"
                                                    placeholder=\"Nom\" required>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <input type=\"email\" class=\"form-control\" name=\"email\"
                                                    placeholder=\"Email\" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" name=\"subject\"
                                            placeholder=\"Sujet\" required>
                                    </div>
                                    <div class=\"form-group\">
                                        <textarea name=\"message\" cols=\"30\" rows=\"5\" class=\"form-control\"
                                            placeholder=\"Message\"></textarea>
                                    </div>
                                    <button type=\"submit\" class=\"theme-btn\">Envoyer Votre
                                        Message <i class=\"far fa-paper-plane\"></i></button>
                                    <div class=\"col-md-12 mt-3\">
                                        <div class=\"form-messege text-success\"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end contact area -->
    </main>
{% endblock %}
", "contact/index.html.twig", "C:\\xampp\\htdocs\\systeme-reservation\\templates\\contact\\index.html.twig");
    }
}
