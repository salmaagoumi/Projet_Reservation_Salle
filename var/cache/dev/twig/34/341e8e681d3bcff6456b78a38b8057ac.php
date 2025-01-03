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

/* base.html.twig */
class __TwigTemplate_6e6701be530f7e8c740bbc20e62f3dbe extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Universite Lille</title>

    <!-- Favicon -->
    <link href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.svg"), "html", null, true);
        yield "\" rel=\"icon\">
    ";
        // line 19
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/all-fontawesome.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
</head>
<body>


    <!-- preloader -->
    <div class=\"preloader\">
        <div class=\"loader-book\">
            <div class=\"loader-book-page\"></div>
            <div class=\"loader-book-page\"></div>
            <div class=\"loader-book-page\"></div>
        </div>
    </div>
    <!-- preloader end -->

<!-- header area -->
    <header class=\"header\">
        <!-- header top -->
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"header-top-wrap\">
                    <div class=\"header-top-left\">
                        <div class=\"header-top-social\">
                            <span>Follow Us: </span>
                            <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                            <a href=\"#\"><i class=\"fab fa-whatsapp\"></i></a>
                        </div>
                    </div>
                    <div class=\"header-top-right\">
                        <div class=\"header-top-contact\">
                            <ul>
                                <li>
                                    <a href=\"#\"><i class=\"far fa-location-dot\"></i> 25/B Milford Road, New York</a>
                                </li>
                                <li>
                                    <a href=\"mailto:info@example.com\"><i class=\"far fa-envelopes\"></i> info@example.com</a>
                                </li>
                                <li>
                                    <a href=\"tel:+21236547898\"><i class=\"far fa-phone-volume\"></i> +2 123 654 7898</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"main-navigation\">
            <nav class=\"navbar navbar-expand-lg\">
                <div class=\"container position-relative\">
                    <a class=\"navbar-brand\" href=\"index.html\">
                        <img src=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/logo.png"), "html", null, true);
        yield "\" alt=\"logo\">
                    </a>
                    <div class=\"mobile-menu-right\">
                        <div class=\"search-btn\">
                            <button type=\"button\" class=\"nav-right-link search-box-outer\"><i
                                    class=\"far fa-search\"></i></button>
                        </div>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#main_nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-mobile-icon\"><i class=\"far fa-bars\"></i></span>
                        </button>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"main_nav\">
                        <ul class=\"navbar-nav\">
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a>
                            </li>

                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Gestion</a>
                                <ul class=\"dropdown-menu fade-down\">
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        yield "\">Salle</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enseignant_index");
        yield "\">Enseignant</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matiere_index");
        yield "\">Matiere</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_filiere_index");
        yield "\">Filiere</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promos_index");
        yield "\">Promos</a></li>
                                </ul>

                            </li>
                            
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contact</a></li>
                        </ul>
                        <div class=\"nav-right\">
                            ";
        // line 115
        yield "                            <div class=\"nav-right-btn mt-2\">
                                <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new");
        yield "\" class=\"theme-btn\"><span
                                        class=\"fal fa-pencil\"></span>Reserver Maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header area end -->
        <!-- popup search -->
    <div class=\"search-popup\">
        <button class=\"close-search\"><span class=\"far fa-times\"></span></button>
        <form action=\"#\">
            <div class=\"form-group\">
                <input type=\"search\" name=\"search-field\" placeholder=\"Search Here...\" required>
                <button type=\"submit\"><i class=\"far fa-search\"></i></button>
            </div>
        </form>
    </div>
    <!-- popup search end -->


    ";
        // line 238
        yield "
    <main>
    ";
        // line 240
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 242
        yield "    </main>

    ";
        // line 349
        yield "

    <!-- footer area -->
    ";
        // line 352
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 352, $this->source); })()), "request", [], "any", false, false, false, 352), "attributes", [], "any", false, false, false, 352), "get", ["_route"], "method", false, false, false, 352) != "app_home")) {
            // line 353
            yield "
    <footer class=\"footer-area\">
        <div class=\"footer-shape\">
            <img src=\"assets/img/shape/03.png\" alt=\"\">
        </div>
        <div class=\"footer-widget\">
            <div class=\"container\">
                <div class=\"row footer-widget-wrapper pt-100 pb-70\">
                    <div class=\"col-md-6 col-lg-4\">
                        <div class=\"footer-widget-box about-us\">
                            <a href=\"#\" class=\"footer-logo\">
                                <img src=\"assets/img/logo/logo-light.png\" alt=\"\">
                            </a>
                            <p class=\"mb-3\">
                                We are many variations of passages available but the majority have suffered alteration
                                in some form by injected humour words believable.
                            </p>
                            <ul class=\"footer-contact\">
                                <li><a href=\"tel:+21236547898\"><i class=\"far fa-phone\"></i>+2 123 654 7898</a></li>
                                <li><i class=\"far fa-map-marker-alt\"></i>25/B Milford Road, New York</li>
                                <li><a href=\"mailto:info@example.com\"><i
                                            class=\"far fa-envelope\"></i>info@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-2\">
                        <div class=\"footer-widget-box list\">
                            <h4 class=\"footer-widget-title\">Quick Links</h4>
                            <ul class=\"footer-list\">
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> About Us</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> FAQ's</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Testimonials</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Terms Of Service</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Privacy policy</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Update News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"footer-widget-box list\">
                            <h4 class=\"footer-widget-title\">Our Campus</h4>
                            <ul class=\"footer-list\">
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Campus Safety</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Student Activities</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Academic Department</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Planning & Administration</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Office Of The Chancellor</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Facility Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"footer-widget-box list\">
                            <h4 class=\"footer-widget-title\">Newsletter</h4>
                            <div class=\"footer-newsletter\">
                                <p>Subscribe Our Newsletter To Get Latest Update And News</p>
                                <div class=\"subscribe-form\">
                                    <form action=\"#\">
                                        <input type=\"email\" class=\"form-control\" placeholder=\"Your Email\">
                                        <button class=\"theme-btn\" type=\"submit\">
                                            Subscribe Now <i class=\"far fa-paper-plane\"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"copyright-wrapper\">
                    <div class=\"row\">
                        <div class=\"col-md-6 align-self-center\">
                            <p class=\"copyright-text\">
                                &copy; Copyright <span id=\"date\"></span> <a href=\"#\"> Eduka </a> All Rights Reserved.
                            </p>
                        </div>
                        <div class=\"col-md-6 align-self-center\">
                            <ul class=\"footer-social\">
                                <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fab fa-whatsapp\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fab fa-youtube\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    ";
        }
        // line 446
        yield "
    <!-- footer area end -->


    <!-- scroll-top -->
    <a href=\"#\" id=\"scroll-top\"><i class=\"far fa-arrow-up-from-arc\"></i></a>
    <!-- scroll-top end -->


    <!-- js -->
    <script src=\"";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/modernizr.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.appear.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 463
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 464
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/counter-up.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 240
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 241
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  418 => 241,  408 => 240,  396 => 467,  392 => 466,  388 => 465,  384 => 464,  380 => 463,  376 => 462,  372 => 461,  368 => 460,  364 => 459,  360 => 458,  356 => 457,  352 => 456,  340 => 446,  245 => 353,  243 => 352,  238 => 349,  234 => 242,  232 => 240,  228 => 238,  202 => 116,  199 => 115,  193 => 108,  185 => 103,  181 => 102,  177 => 101,  173 => 100,  169 => 99,  164 => 97,  157 => 93,  139 => 78,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  60 => 19,  56 => 9,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Universite Lille</title>

    <!-- Favicon -->
    <link href=\"{{ asset('img/favicon.svg') }}\" rel=\"icon\">
    {# <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">
    <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('lib/owlcarousel/assets/owl.theme.default.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\"> #}

    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/all-fontawesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
</head>
<body>


    <!-- preloader -->
    <div class=\"preloader\">
        <div class=\"loader-book\">
            <div class=\"loader-book-page\"></div>
            <div class=\"loader-book-page\"></div>
            <div class=\"loader-book-page\"></div>
        </div>
    </div>
    <!-- preloader end -->

<!-- header area -->
    <header class=\"header\">
        <!-- header top -->
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"header-top-wrap\">
                    <div class=\"header-top-left\">
                        <div class=\"header-top-social\">
                            <span>Follow Us: </span>
                            <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                            <a href=\"#\"><i class=\"fab fa-whatsapp\"></i></a>
                        </div>
                    </div>
                    <div class=\"header-top-right\">
                        <div class=\"header-top-contact\">
                            <ul>
                                <li>
                                    <a href=\"#\"><i class=\"far fa-location-dot\"></i> 25/B Milford Road, New York</a>
                                </li>
                                <li>
                                    <a href=\"mailto:info@example.com\"><i class=\"far fa-envelopes\"></i> info@example.com</a>
                                </li>
                                <li>
                                    <a href=\"tel:+21236547898\"><i class=\"far fa-phone-volume\"></i> +2 123 654 7898</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"main-navigation\">
            <nav class=\"navbar navbar-expand-lg\">
                <div class=\"container position-relative\">
                    <a class=\"navbar-brand\" href=\"index.html\">
                        <img src=\"{{ asset('img/logo/logo.png') }}\" alt=\"logo\">
                    </a>
                    <div class=\"mobile-menu-right\">
                        <div class=\"search-btn\">
                            <button type=\"button\" class=\"nav-right-link search-box-outer\"><i
                                    class=\"far fa-search\"></i></button>
                        </div>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#main_nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-mobile-icon\"><i class=\"far fa-bars\"></i></span>
                        </button>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"main_nav\">
                        <ul class=\"navbar-nav\">
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" href=\"{{path('app_home')}}\">Accueil</a>
                            </li>

                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" href=\"{{path('app_home')}}\">Gestion</a>
                                <ul class=\"dropdown-menu fade-down\">
                                    <li><a class=\"dropdown-item\" href=\"{{ path('app_salle_index') }}\">Salle</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{ path('app_enseignant_index') }}\">Enseignant</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{ path('app_matiere_index') }}\">Matiere</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{ path('app_filiere_index') }}\">Filiere</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{ path('app_promos_index') }}\">Promos</a></li>
                                </ul>

                            </li>
                            
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('app_contact')}}\">Contact</a></li>
                        </ul>
                        <div class=\"nav-right\">
                            {# <div class=\"search-btn\">
                                <button type=\"button\" class=\"nav-right-link search-box-outer\"><i
                                        class=\"far fa-search\"></i></button>
                            </div> #}
                            <div class=\"nav-right-btn mt-2\">
                                <a href=\"{{path('app_reservation_new')}}\" class=\"theme-btn\"><span
                                        class=\"fal fa-pencil\"></span>Reserver Maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header area end -->
        <!-- popup search -->
    <div class=\"search-popup\">
        <button class=\"close-search\"><span class=\"far fa-times\"></span></button>
        <form action=\"#\">
            <div class=\"form-group\">
                <input type=\"search\" name=\"search-field\" placeholder=\"Search Here...\" required>
                <button type=\"submit\"><i class=\"far fa-search\"></i></button>
            </div>
        </form>
    </div>
    <!-- popup search end -->


    {# <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
        <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
            <img src=\"{{ asset('img/logo1.png') }}\" alt=\"Logo\" style=\"height: 50px; width: auto;\">
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"index.html\" class=\"nav-item nav-link active\">Accueil</a>
                <a href=\"about.html\" class=\"nav-item nav-link\">À propos</a>
                <a href=\"courses.html\" class=\"nav-item nav-link\">Cours</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                    <div class=\"dropdown-menu fade-down m-0\">
                        <a href=\"{{ path('app_reservation_new') }}\" class=\"dropdown-item\">Réservation de salle</a>
                        <a href=\"{{ path('app_promos_index') }}\" class=\"dropdown-item\">Gestion Promos</a>
                        <a href=\"{{ path('app_filiere_index') }}\" class=\"dropdown-item\">Gestion Filière</a>
                        <a href=\"{{ path('app_enseignant_index') }}\" class=\"dropdown-item\">Gestion Enseignant</a>
                        <a href=\"{{ path('app_salle_index') }}\" class=\"dropdown-item\">Gestion Salle</a>
                        <a href=\"{{ path('app_matiere_index') }}\" class=\"dropdown-item\">Gestion Matiere</a>
                    </div>
                </div>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
            </div>
            <a href=\"https://www.univ-lille.fr/\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Rejoignez-nous<i class=\"fa fa-arrow-right ms-3\"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class=\"container-fluid p-0 mb-5\">
        <div class=\"owl-carousel header-carousel position-relative\">
            <div class=\"item\">
                <img class=\"img-fluid\" src=\"{{ asset('img/carousel-1.jpg') }}\" alt=\"Image 1\">
                <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
                    <div class=\"container\">
                        <h1 class=\"display-3 text-white\">Bienvenue à l'Université Lille</h1>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <img class=\"img-fluid\" src=\"{{ asset('img/carousel-2.jpg') }}\" alt=\"Image 2\">
                <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
                    <div class=\"container\">
                        <h1 class=\"display-3 text-white\">Inspirons demain</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"service-item text-center pt-3\">
                        <div class=\"p-4\">
                            <i class=\"fa fa-3x fa-graduation-cap text-primary mb-4\"></i>
                            <h5 class=\"mb-3\">Skilled Instructors</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"service-item text-center pt-3\">
                        <div class=\"p-4\">
                            <i class=\"fa fa-3x fa-globe text-primary mb-4\"></i>
                            <h5 class=\"mb-3\">Online Classes</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"service-item text-center pt-3\">
                        <div class=\"p-4\">
                            <i class=\"fa fa-3x fa-home text-primary mb-4\"></i>
                            <h5 class=\"mb-3\">Home Projects</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                    <div class=\"service-item text-center pt-3\">
                        <div class=\"p-4\">
                            <i class=\"fa fa-3x fa-book-open text-primary mb-4\"></i>
                            <h5 class=\"mb-3\">Book Library</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End --> #}

    <main>
    {% block body %}
    {% endblock %}
    </main>

    {# <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-3\">Quick Link</h4>
                    <a class=\"btn btn-link\" href=\"\">About Us</a>
                    <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                    <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
                    <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                    <a class=\"btn btn-link\" href=\"\">FAQs & Help</a>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-3\">Contact</h4>
                    <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                    <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                    <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                    <div class=\"d-flex pt-2\">
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-3\">Gallery</h4>
                    <div class=\"row g-2 pt-2\">
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-4\">
                            <img class=\"img-fluid bg-light p-1\" src=\"img/course-1.jpg\" alt=\"\">
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-white mb-3\">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                        <input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                        <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"copyright\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                        &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                        Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a>
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        <div class=\"footer-menu\">
                            <a href=\"\">Home</a>
                            <a href=\"\">Cookies</a>
                            <a href=\"\">Help</a>
                            <a href=\"\">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>

        <!-- Template Javascript -->
    <script src=\"{{ asset('js/main.js') }}\"></script>

    <!-- OwlCarousel Initialization -->
    <script>
        \$(document).ready(function(){
            \$(\".owl-carousel\").owlCarousel({
                items: 1, // Display one item at a time
                loop: true, // Enable infinite looping
                autoplay: true, // Automatically cycle through slides
                autoplayTimeout: 5000, // Set autoplay interval to 5 seconds
                // nav: true, // Display navigation arrows
                dots: true // Show dots for navigation
            });
        });
    </script> #}


    <!-- footer area -->
    {% if app.request.attributes.get('_route') != 'app_home' %}

    <footer class=\"footer-area\">
        <div class=\"footer-shape\">
            <img src=\"assets/img/shape/03.png\" alt=\"\">
        </div>
        <div class=\"footer-widget\">
            <div class=\"container\">
                <div class=\"row footer-widget-wrapper pt-100 pb-70\">
                    <div class=\"col-md-6 col-lg-4\">
                        <div class=\"footer-widget-box about-us\">
                            <a href=\"#\" class=\"footer-logo\">
                                <img src=\"assets/img/logo/logo-light.png\" alt=\"\">
                            </a>
                            <p class=\"mb-3\">
                                We are many variations of passages available but the majority have suffered alteration
                                in some form by injected humour words believable.
                            </p>
                            <ul class=\"footer-contact\">
                                <li><a href=\"tel:+21236547898\"><i class=\"far fa-phone\"></i>+2 123 654 7898</a></li>
                                <li><i class=\"far fa-map-marker-alt\"></i>25/B Milford Road, New York</li>
                                <li><a href=\"mailto:info@example.com\"><i
                                            class=\"far fa-envelope\"></i>info@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-2\">
                        <div class=\"footer-widget-box list\">
                            <h4 class=\"footer-widget-title\">Quick Links</h4>
                            <ul class=\"footer-list\">
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> About Us</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> FAQ's</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Testimonials</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Terms Of Service</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Privacy policy</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Update News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"footer-widget-box list\">
                            <h4 class=\"footer-widget-title\">Our Campus</h4>
                            <ul class=\"footer-list\">
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Campus Safety</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Student Activities</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Academic Department</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Planning & Administration</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Office Of The Chancellor</a></li>
                                <li><a href=\"#\"><i class=\"fas fa-caret-right\"></i> Facility Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"footer-widget-box list\">
                            <h4 class=\"footer-widget-title\">Newsletter</h4>
                            <div class=\"footer-newsletter\">
                                <p>Subscribe Our Newsletter To Get Latest Update And News</p>
                                <div class=\"subscribe-form\">
                                    <form action=\"#\">
                                        <input type=\"email\" class=\"form-control\" placeholder=\"Your Email\">
                                        <button class=\"theme-btn\" type=\"submit\">
                                            Subscribe Now <i class=\"far fa-paper-plane\"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"copyright-wrapper\">
                    <div class=\"row\">
                        <div class=\"col-md-6 align-self-center\">
                            <p class=\"copyright-text\">
                                &copy; Copyright <span id=\"date\"></span> <a href=\"#\"> Eduka </a> All Rights Reserved.
                            </p>
                        </div>
                        <div class=\"col-md-6 align-self-center\">
                            <ul class=\"footer-social\">
                                <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fab fa-whatsapp\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fab fa-youtube\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {% endif %}

    <!-- footer area end -->


    <!-- scroll-top -->
    <a href=\"#\" id=\"scroll-top\"><i class=\"far fa-arrow-up-from-arc\"></i></a>
    <!-- scroll-top end -->


    <!-- js -->
    <script src=\"{{asset('js/jquery-3.7.1.min.js')}}\"></script>
    <script src=\"{{asset('js/modernizr.min.js')}}\"></script>
    <script src=\"{{asset('js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"{{asset('js/imagesloaded.pkgd.min.js')}}\"></script>
    <script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
    <script src=\"{{ asset('js/isotope.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.appear.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.easing.min.js') }}\"></script>
    <script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('js/counter-up.js') }}\"></script>
    <script src=\"{{ asset('js/wow.min.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\systeme-reservation\\templates\\base.html.twig");
    }
}
