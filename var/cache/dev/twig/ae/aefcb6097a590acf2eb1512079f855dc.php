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

/* filiere/show.html.twig */
class __TwigTemplate_1aeaa64bfa6a60ac6a307e3cf402f690 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "filiere/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "filiere/show.html.twig", 1);
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

        yield "Filiere";
        
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
        yield "    <h1>Filiere</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filiere"]) || array_key_exists("filiere", $context) ? $context["filiere"] : (function () { throw new RuntimeError('Variable "filiere" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Nom_filiere</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filiere"]) || array_key_exists("filiere", $context) ? $context["filiere"] : (function () { throw new RuntimeError('Variable "filiere" does not exist.', 16, $this->source); })()), "nomFiliere", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_filiere_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_filiere_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["filiere"]) || array_key_exists("filiere", $context) ? $context["filiere"] : (function () { throw new RuntimeError('Variable "filiere" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "filiere/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "filiere/show.html.twig";
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
        return array (  118 => 25,  113 => 23,  108 => 21,  100 => 16,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Filiere{% endblock %}

{% block body %}
    <h1>Filiere</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ filiere.id }}</td>
            </tr>
            <tr>
                <th>Nom_filiere</th>
                <td>{{ filiere.nomFiliere }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_filiere_index') }}\">back to list</a>

    <a href=\"{{ path('app_filiere_edit', {'id': filiere.id}) }}\">edit</a>

    {{ include('filiere/_delete_form.html.twig') }}
{% endblock %}
", "filiere/show.html.twig", "C:\\xampp\\htdocs\\systeme-reservation\\systeme-reservation\\templates\\filiere\\show.html.twig");
    }
}