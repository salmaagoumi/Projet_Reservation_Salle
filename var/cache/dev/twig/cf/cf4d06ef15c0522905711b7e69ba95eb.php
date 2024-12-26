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

/* enseignant/index.html.twig */
class __TwigTemplate_dda95ad90c9c2c9d18f0c95c7b5adfd9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "enseignant/index.html.twig", 1);
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

        yield "Enseignant index";
        
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
        yield "    <h1>Enseignant index</h1>

<main class=\"main\">

    <!-- breadcrumb -->
    <div class=\"site-breadcrumb\" style=\"background: url(";
        // line 11
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

    <div class=\"tuition-fee py-120\">
        <div class=\"container\">
            <div class=\"tuition-wrap\">
                <div class=\"mb-2\">
                    <h3 class=\"mb-3\">Table de resérvations</h3>
                </div>

                <div class='table-responsive'>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["enseignants"]) || array_key_exists("enseignants", $context) ? $context["enseignants"] : (function () { throw new RuntimeError('Variable "enseignants" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 41
            yield "                            <tr>
                                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "id", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                                <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "nom", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "prenom", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                                <td>
                                    <a href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enseignant_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\">show</a>
                                    <a href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enseignant_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\">edit</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            yield "                            <tr>
                                <td colspan=\"4\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['enseignant'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enseignant_new");
        yield "\">Nouveau</a>
    </div>


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
        return "enseignant/index.html.twig";
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
        return array (  174 => 60,  167 => 55,  158 => 51,  149 => 47,  145 => 46,  140 => 44,  136 => 43,  132 => 42,  129 => 41,  124 => 40,  92 => 11,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Enseignant index{% endblock %}

{% block body %}
    <h1>Enseignant index</h1>

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

    <div class=\"tuition-fee py-120\">
        <div class=\"container\">
            <div class=\"tuition-wrap\">
                <div class=\"mb-2\">
                    <h3 class=\"mb-3\">Table de resérvations</h3>
                </div>

                <div class='table-responsive'>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for enseignant in enseignants %}
                            <tr>
                                <td>{{ enseignant.id }}</td>
                                <td>{{ enseignant.nom }}</td>
                                <td>{{ enseignant.prenom }}</td>
                                <td>
                                    <a href=\"{{ path('app_enseignant_show', {'id': enseignant.id}) }}\">show</a>
                                    <a href=\"{{ path('app_enseignant_edit', {'id': enseignant.id}) }}\">edit</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"4\">no records found</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a href=\"{{ path('app_enseignant_new') }}\">Nouveau</a>
    </div>


</main>
{% endblock %}
", "enseignant/index.html.twig", "C:\\xampp\\htdocs\\systeme-reservation\\templates\\enseignant\\index.html.twig");
    }
}
