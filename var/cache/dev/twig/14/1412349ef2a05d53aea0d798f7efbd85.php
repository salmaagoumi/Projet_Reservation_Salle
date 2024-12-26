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

/* reservation/index.html.twig */
class __TwigTemplate_87e9381ea9a9a0fef195b2f52454dc7c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
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

        yield "Reservation index";
        
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

        <div class=\"tuition-fee py-120\">
            <div class=\"container\">
                <div class=\"tuition-wrap\">
                    <div class=\"mb-2\">
                        <h3 class=\"mb-3\">Table de resérvations</h3>
                  </div>

                      <div class='table-responsive'>
            <table class=\"table table-light\">
        <thead>
            <tr>
                <th>Jour</th>
                <th>Heur de Depart</th>
                <th>Heur Fin</th>
                <th>Salle</th>
                <th>Enseignant</th>
                <th>Promos</th>
                <th>Matiere</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 43
            yield "            <tr>
                <td>";
            // line 44
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "jour", [], "any", false, false, false, 44)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "jour", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 45
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "heurDeb", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "heurDeb", [], "any", false, false, false, 45), "H:i:s"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 46
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "heurFin", [], "any", false, false, false, 46)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "heurFin", [], "any", false, false, false, 46), "H:i:s"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "salle", [], "any", false, false, false, 47), "getNomSalle", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "enseignant", [], "any", false, false, false, 48), "getNom", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "promos", [], "any", false, false, false, 49), "getNomPromos", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "matiere", [], "any", false, false, false, 50), "getNomMatiere", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\">Afficher</a>
                    -
                    <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\">Modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            yield "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "        </tbody>
    </table>
    <div class=\"mt-4 mb-2\">                    
    <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new");
        yield "\" class=\"theme-btn mt-4\">Nouveau Reservation</a>
    </div>
    </div>
    </div>
    </div>
    </main>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reservation/index.html.twig";
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
        return array (  191 => 65,  186 => 62,  177 => 58,  168 => 54,  163 => 52,  158 => 50,  154 => 49,  150 => 48,  146 => 47,  142 => 46,  138 => 45,  134 => 44,  131 => 43,  126 => 42,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservation index{% endblock %}

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

        <div class=\"tuition-fee py-120\">
            <div class=\"container\">
                <div class=\"tuition-wrap\">
                    <div class=\"mb-2\">
                        <h3 class=\"mb-3\">Table de resérvations</h3>
                  </div>

                      <div class='table-responsive'>
            <table class=\"table table-light\">
        <thead>
            <tr>
                <th>Jour</th>
                <th>Heur de Depart</th>
                <th>Heur Fin</th>
                <th>Salle</th>
                <th>Enseignant</th>
                <th>Promos</th>
                <th>Matiere</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for reservation in reservations %}
            <tr>
                <td>{{ reservation.jour ? reservation.jour|date('Y-m-d') : '' }}</td>
                <td>{{ reservation.heurDeb ? reservation.heurDeb|date('H:i:s') : '' }}</td>
                <td>{{ reservation.heurFin ? reservation.heurFin|date('H:i:s') : '' }}</td>
                <td>{{ reservation.salle.getNomSalle }}</td>
                <td>{{ reservation.enseignant.getNom }}</td>
                <td>{{ reservation.promos.getNomPromos }}</td>
                <td>{{ reservation.matiere.getNomMatiere }}</td>
                <td>
                    <a href=\"{{ path('app_reservation_show', {'id': reservation.id}) }}\">Afficher</a>
                    -
                    <a href=\"{{ path('app_reservation_edit', {'id': reservation.id}) }}\">Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <div class=\"mt-4 mb-2\">                    
    <a href=\"{{ path('app_reservation_new') }}\" class=\"theme-btn mt-4\">Nouveau Reservation</a>
    </div>
    </div>
    </div>
    </div>
    </main>
    </div>
{% endblock %}
", "reservation/index.html.twig", "C:\\xampp\\htdocs\\systeme-reservation\\templates\\reservation\\index.html.twig");
    }
}
