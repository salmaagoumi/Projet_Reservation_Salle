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

/* apropos/index.html.twig */
class __TwigTemplate_a4c859d44a7dfc580176fb7e988d69db extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apropos/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "apropos/index.html.twig", 1);
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

        yield "Apropos de nous!";
        
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
        <div class=\"site-breadcrumb\" style=\"background: url(asset(img/breadcrumb/01.jpg)\">
            <div class=\"container\">
                <h2 class=\"breadcrumb-title\">How To Apply</h2>
                <ul class=\"breadcrumb-menu\">
                    <li><a href=\"index.html\">Home</a></li>
                    <li class=\"active\">How To Apply</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- how apply -->
        <div class=\"how-apply pt-120 pb-80\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"content-info wow fadeInUp\" data-wow-delay=\".25s\">
                            <div class=\"site-heading mb-3\">
                                <span class=\"site-title-tagline\"><i class=\"far fa-book-open-reader\"></i> How To
                                    Apply</span>
                                <h2 class=\"site-title\">
                                    Details About <span>How To Apply</span> Eduka.
                                </h2>
                            </div>
                            <p class=\"content-text\">
                                There are many variations of passages available but the majority have suffered
                                alteration in some form by injected humour randomised words which don't look even
                                slightly believable. If you are going to use passage you need sure there anything
                                embarrassing first true generator on the Internet.
                            </p>
                            <p class=\"content-text mt-2\">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                            </p>
                            <div class=\"row my-3\">
                                <div class=\"col-md-6\">
                                    <ul class=\"content-list\">
                                        <li><i class=\"fas fa-check-circle\"></i>Start Online Submission</li>
                                        <li><i class=\"fas fa-check-circle\"></i>Submit The Form</li>
                                        <li><i class=\"fas fa-check-circle\"></i>Review The Submission</li>
                                    </ul>
                                </div>
                                <div class=\"col-md-6\">
                                    <ul class=\"content-list\">
                                        <li><i class=\"fas fa-check-circle\"></i>Gather Necessary Documents</li>
                                        <li><i class=\"fas fa-check-circle\"></i>Interviewing Process</li>
                                        <li><i class=\"fas fa-check-circle\"></i>Last Decision</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"content-btn\">
                                <a href=\"#\" class=\"theme-btn\">Apply Now<i class=\"fas fa-arrow-right-long\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"content-img wow fadeInRight\" data-wow-delay=\".25s\">
                            <img src=\"assets/img/apply/01.jpg\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- how apply end-->


        <!-- apply details -->
        <div class=\"apply-details\">
            <div class=\"container\">
                <div class=\"details-wrapper\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"details-left\">
                                <h3 class=\"mb-3\">Things To Know First</h3>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. 
                                </p>
                                <p class=\"mt-2\">
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here content here making it look like readable English.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"details-right\">
                                <h3 class=\"mb-3\">Documents And Financial Aid</h3>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
                                </p>
                                <ul class=\"content-list mt-2\">
                                    <li><i class=\"fas fa-check-circle\"></i>Sed ut perspiciatis unde omnis iste natus error sit doloremque laudantium.</li>
                                    <li><i class=\"fas fa-check-circle\"></i>Totam rem aperiam eaque ipsa quae ab illo inventore veritatis.</li>
                                    <li><i class=\"fas fa-check-circle\"></i>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit.</li>
                                    <li><i class=\"fas fa-check-circle\"></i>Dolores eos qui ratione voluptatem sequi nesciunte porro quisquam est.</li>
                                    <li><i class=\"fas fa-check-circle\"></i>Adipisci velit sed quia non numquam eius modi tempora incidunt.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- apply details end -->


        <!-- feature area -->
        <div class=\"feature-area fa2 py-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 mx-auto\">
                        <div class=\"site-heading text-center\">
                            <span class=\"site-title-tagline\"><i class=\"far fa-book-open-reader\"></i> Features</span>
                            <h2 class=\"site-title\">Our Awesome <span>Features</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\".25s\">
                            <span class=\"count\">01</span>
                            <div class=\"feature-icon\">
                                <img src=\"assets/img/icon/scholarship.svg\" alt=\"\">
                            </div>
                            <div class=\"feature-content\">
                                <h4 class=\"feature-title\">Scholarship Facility</h4>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"feature-item active wow fadeInDown\" data-wow-delay=\".25s\">
                            <span class=\"count\">02</span>
                            <div class=\"feature-icon\">
                                <img src=\"assets/img/icon/teacher.svg\" alt=\"\">
                            </div>
                            <div class=\"feature-content\">
                                <h4 class=\"feature-title\">Skilled Lecturers</h4>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\".25s\">
                            <span class=\"count\">03</span>
                            <div class=\"feature-icon\">
                                <img src=\"assets/img/icon/library.svg\" alt=\"\">
                            </div>
                            <div class=\"feature-content\">
                                <h4 class=\"feature-title\">Book Library Facility</h4>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\".25s\">
                            <span class=\"count\">04</span>
                            <div class=\"feature-icon\">
                                <img src=\"assets/img/icon/money.svg\" alt=\"\">
                            </div>
                            <div class=\"feature-content\">
                                <h4 class=\"feature-title\">Affordable Price</h4>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature area end -->


        <!-- video-area -->
        <div class=\"video-area\">
            <div class=\"container\">
                <div class=\"video-content\" style=\"background-image: url(assets/img/video/01.jpg);\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-12\">
                            <div class=\"video-wrapper\">
                                <a class=\"play-btn popup-youtube\" href=\"https://www.youtube.com/watch?v=ckHzmP1evNU\">
                                    <i class=\"fas fa-play\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- video-area end -->


        <!-- faq area -->
        <div class=\"faq-area py-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"faq-right\">
                            <div class=\"site-heading mb-3\">
                                <span class=\"site-title-tagline justify-content-start\"><i class=\"far fa-book-open-reader\"></i> Faq's</span>
                                <h2 class=\"site-title my-3\">General <span>frequently</span> asked questions</h2>
                            </div>
                            <p class=\"mb-3\">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even.</p>
                            <p class=\"mb-4\">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                            </p>
                            <a href=\"#\" class=\"theme-btn mt-2\">Have Any Question ?</a>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"accordion\" id=\"accordionExample\">
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingOne\">
                                    <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                        <span><i class=\"far fa-question\"></i></span> How Can do I apply ?
                                    </button>
                                </h2>
                                <div id=\"collapseOne\" class=\"accordion-collapse collapse show\"
                                    aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        We denounce with righteous indignation and dislike men who
                                        are so beguiled and demoralized by the charms of pleasure of the moment so
                                        blinded by desire ante odio dignissim quam vitae pulvinar turpis.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingTwo\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                        <span><i class=\"far fa-question\"></i></span> How Can I Become A Member
                                        ?
                                    </button>
                                </h2>
                                <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\"
                                    data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        We denounce with righteous indignation and dislike men who
                                        are so beguiled and demoralized by the charms of pleasure of the moment so
                                        blinded by desire ante odio dignissim quam vitae pulvinar turpis.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingThree\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseThree\" aria-expanded=\"false\"
                                        aria-controls=\"collapseThree\">
                                        <span><i class=\"far fa-question\"></i></span> What Payment Gateway You Support ?
                                    </button>
                                </h2>
                                <div id=\"collapseThree\" class=\"accordion-collapse collapse\"
                                    aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        We denounce with righteous indignation and dislike men who
                                        are so beguiled and demoralized by the charms of pleasure of the moment so
                                        blinded by desire ante odio dignissim quam vitae pulvinar turpis.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingFour\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseFour\" aria-expanded=\"false\"
                                        aria-controls=\"collapseFour\">
                                        <span><i class=\"far fa-question\"></i></span> How Can I Cancel My Request ?
                                    </button>
                                </h2>
                                <div id=\"collapseFour\" class=\"accordion-collapse collapse\"
                                    aria-labelledby=\"headingFour\" data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        We denounce with righteous indignation and dislike men who
                                        are so beguiled and demoralized by the charms of pleasure of the moment so
                                        blinded by desire ante odio dignissim quam vitae pulvinar turpis.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq area end -->

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
        return "apropos/index.html.twig";
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
        return array (  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Apropos de nous!{% endblock %}

{% block body %}
<main class=\"main\">

        <!-- breadcrumb -->
        <div class=\"site-breadcrumb\" style=\"background: url(asset(img/breadcrumb/01.jpg)\">
            <div class=\"container\">
                <h2 class=\"breadcrumb-title\">How To Apply</h2>
                <ul class=\"breadcrumb-menu\">
                    <li><a href=\"index.html\">Home</a></li>
                    <li class=\"active\">How To Apply</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- how apply -->
        <div class=\"how-apply pt-120 pb-80\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"content-info wow fadeInUp\" data-wow-delay=\".25s\">
                            <div class=\"site-heading mb-3\">
                                <span class=\"site-title-tagline\"><i class=\"far fa-book-open-reader\"></i> How To
                                    Apply</span>
                                <h2 class=\"site-title\">
                                    Details About <span>How To Apply</span> Eduka.
                                </h2>
                            </div>
                            <p class=\"content-text\">
                                There are many variations of passages available but the majority have suffered
                                alteration in some form by injected humour randomised words which don't look even
                                slightly believable. If you are going to use passage you need sure there anything
                                embarrassing first true generator on the Internet.
                            </p>
                            <p class=\"content-text mt-2\">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                            </p>
                            <div class=\"row my-3\">
                                <div class=\"col-md-6\">
                                    <ul class=\"content-list\">
                                        <li><i class=\"fas fa-check-circle\"></i>Start Online Submission</li>
                                        <li><i class=\"fas fa-check-circle\"></i>Submit The Form</li>
                                        <li><i class=\"fas fa-check-circle\"></i>Review The Submission</li>
                                    </ul>
                                </div>
                                <div class=\"col-md-6\">
                                    <ul class=\"content-list\">
                                        <li><i class=\"fas fa-check-circle\"></i>Gather Necessary Documents</li>
                                        <li><i class=\"fas fa-check-circle\"></i>Interviewing Process</li>
                                        <li><i class=\"fas fa-check-circle\"></i>Last Decision</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"content-btn\">
                                <a href=\"#\" class=\"theme-btn\">Apply Now<i class=\"fas fa-arrow-right-long\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"content-img wow fadeInRight\" data-wow-delay=\".25s\">
                            <img src=\"assets/img/apply/01.jpg\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- how apply end-->


        <!-- apply details -->
        <div class=\"apply-details\">
            <div class=\"container\">
                <div class=\"details-wrapper\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"details-left\">
                                <h3 class=\"mb-3\">Things To Know First</h3>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. 
                                </p>
                                <p class=\"mt-2\">
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here content here making it look like readable English.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"details-right\">
                                <h3 class=\"mb-3\">Documents And Financial Aid</h3>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
                                </p>
                                <ul class=\"content-list mt-2\">
                                    <li><i class=\"fas fa-check-circle\"></i>Sed ut perspiciatis unde omnis iste natus error sit doloremque laudantium.</li>
                                    <li><i class=\"fas fa-check-circle\"></i>Totam rem aperiam eaque ipsa quae ab illo inventore veritatis.</li>
                                    <li><i class=\"fas fa-check-circle\"></i>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit.</li>
                                    <li><i class=\"fas fa-check-circle\"></i>Dolores eos qui ratione voluptatem sequi nesciunte porro quisquam est.</li>
                                    <li><i class=\"fas fa-check-circle\"></i>Adipisci velit sed quia non numquam eius modi tempora incidunt.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- apply details end -->


        <!-- feature area -->
        <div class=\"feature-area fa2 py-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 mx-auto\">
                        <div class=\"site-heading text-center\">
                            <span class=\"site-title-tagline\"><i class=\"far fa-book-open-reader\"></i> Features</span>
                            <h2 class=\"site-title\">Our Awesome <span>Features</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\".25s\">
                            <span class=\"count\">01</span>
                            <div class=\"feature-icon\">
                                <img src=\"assets/img/icon/scholarship.svg\" alt=\"\">
                            </div>
                            <div class=\"feature-content\">
                                <h4 class=\"feature-title\">Scholarship Facility</h4>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"feature-item active wow fadeInDown\" data-wow-delay=\".25s\">
                            <span class=\"count\">02</span>
                            <div class=\"feature-icon\">
                                <img src=\"assets/img/icon/teacher.svg\" alt=\"\">
                            </div>
                            <div class=\"feature-content\">
                                <h4 class=\"feature-title\">Skilled Lecturers</h4>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\".25s\">
                            <span class=\"count\">03</span>
                            <div class=\"feature-icon\">
                                <img src=\"assets/img/icon/library.svg\" alt=\"\">
                            </div>
                            <div class=\"feature-content\">
                                <h4 class=\"feature-title\">Book Library Facility</h4>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\".25s\">
                            <span class=\"count\">04</span>
                            <div class=\"feature-icon\">
                                <img src=\"assets/img/icon/money.svg\" alt=\"\">
                            </div>
                            <div class=\"feature-content\">
                                <h4 class=\"feature-title\">Affordable Price</h4>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature area end -->


        <!-- video-area -->
        <div class=\"video-area\">
            <div class=\"container\">
                <div class=\"video-content\" style=\"background-image: url(assets/img/video/01.jpg);\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-12\">
                            <div class=\"video-wrapper\">
                                <a class=\"play-btn popup-youtube\" href=\"https://www.youtube.com/watch?v=ckHzmP1evNU\">
                                    <i class=\"fas fa-play\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- video-area end -->


        <!-- faq area -->
        <div class=\"faq-area py-120\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"faq-right\">
                            <div class=\"site-heading mb-3\">
                                <span class=\"site-title-tagline justify-content-start\"><i class=\"far fa-book-open-reader\"></i> Faq's</span>
                                <h2 class=\"site-title my-3\">General <span>frequently</span> asked questions</h2>
                            </div>
                            <p class=\"mb-3\">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even.</p>
                            <p class=\"mb-4\">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                            </p>
                            <a href=\"#\" class=\"theme-btn mt-2\">Have Any Question ?</a>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"accordion\" id=\"accordionExample\">
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingOne\">
                                    <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                        <span><i class=\"far fa-question\"></i></span> How Can do I apply ?
                                    </button>
                                </h2>
                                <div id=\"collapseOne\" class=\"accordion-collapse collapse show\"
                                    aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        We denounce with righteous indignation and dislike men who
                                        are so beguiled and demoralized by the charms of pleasure of the moment so
                                        blinded by desire ante odio dignissim quam vitae pulvinar turpis.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingTwo\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                        <span><i class=\"far fa-question\"></i></span> How Can I Become A Member
                                        ?
                                    </button>
                                </h2>
                                <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\"
                                    data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        We denounce with righteous indignation and dislike men who
                                        are so beguiled and demoralized by the charms of pleasure of the moment so
                                        blinded by desire ante odio dignissim quam vitae pulvinar turpis.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingThree\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseThree\" aria-expanded=\"false\"
                                        aria-controls=\"collapseThree\">
                                        <span><i class=\"far fa-question\"></i></span> What Payment Gateway You Support ?
                                    </button>
                                </h2>
                                <div id=\"collapseThree\" class=\"accordion-collapse collapse\"
                                    aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        We denounce with righteous indignation and dislike men who
                                        are so beguiled and demoralized by the charms of pleasure of the moment so
                                        blinded by desire ante odio dignissim quam vitae pulvinar turpis.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"headingFour\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseFour\" aria-expanded=\"false\"
                                        aria-controls=\"collapseFour\">
                                        <span><i class=\"far fa-question\"></i></span> How Can I Cancel My Request ?
                                    </button>
                                </h2>
                                <div id=\"collapseFour\" class=\"accordion-collapse collapse\"
                                    aria-labelledby=\"headingFour\" data-bs-parent=\"#accordionExample\">
                                    <div class=\"accordion-body\">
                                        We denounce with righteous indignation and dislike men who
                                        are so beguiled and demoralized by the charms of pleasure of the moment so
                                        blinded by desire ante odio dignissim quam vitae pulvinar turpis.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq area end -->

    </main>
{% endblock %}
", "apropos/index.html.twig", "C:\\xampp\\htdocs\\systeme-reservation\\systeme-reservation\\templates\\apropos\\index.html.twig");
    }
}
