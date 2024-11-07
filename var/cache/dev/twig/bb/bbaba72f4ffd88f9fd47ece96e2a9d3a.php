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

/* /landingpage/landing.html.twig */
class __TwigTemplate_387cd071c879dd690011d638803a16ad extends Template
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
            'body' => [$this, 'block_body'],
            'nav' => [$this, 'block_nav'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/landingpage/landing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/landingpage/landing.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/landingpage/landing.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "\t<main id=\"main\" class=\"flex flex-col bg-gradient-to-t from-Blue-800 to-Blue-600 gap-5 relative\">
\t\t<nav data-controller=\"scroll\" class=\"bg-Blue-900 min-w-[85%] rounded-full h-16 sticky top-6 m-auto flex z-20 items-center pl-10 pr-10 justify-between\">
\t\t\t";
        // line 6
        yield from $this->unwrap()->yieldBlock('nav', $context, $blocks);
        // line 9
        yield "\t\t</nav>
\t\t";
        // line 10
        yield from         $this->loadTemplate("/components/landingmain.html.twig", "/landingpage/landing.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "\t</main>
\t";
        // line 12
        yield from         $this->loadTemplate("/components/aboutcontainer.html.twig", "/landingpage/landing.html.twig", 12)->unwrap()->yield(CoreExtension::merge($context, ["utilities" => (isset($context["utilities"]) || array_key_exists("utilities", $context) ? $context["utilities"] : (function () { throw new RuntimeError('Variable "utilities" does not exist.', 12, $this->source); })())]));
        // line 13
        yield "\t";
        yield from         $this->loadTemplate("/components/contactform.html.twig", "/landingpage/landing.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "\t";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("footer");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 7
        yield "\t\t\t\t";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("header");
        yield "
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/landingpage/landing.html.twig";
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
        return array (  123 => 7,  110 => 6,  96 => 14,  93 => 13,  91 => 12,  88 => 11,  86 => 10,  83 => 9,  81 => 6,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<main id=\"main\" class=\"flex flex-col bg-gradient-to-t from-Blue-800 to-Blue-600 gap-5 relative\">
\t\t<nav data-controller=\"scroll\" class=\"bg-Blue-900 min-w-[85%] rounded-full h-16 sticky top-6 m-auto flex z-20 items-center pl-10 pr-10 justify-between\">
\t\t\t{% block nav %}
\t\t\t\t{{component(\"header\")}}
\t\t\t{% endblock %}
\t\t</nav>
\t\t{% include \"/components/landingmain.html.twig\" %}
\t</main>
\t{% include \"/components/aboutcontainer.html.twig\" with {\"utilities\": utilities} %}
\t{% include \"/components/contactform.html.twig\" %}
\t{{component(\"footer\")}}
{% endblock %}
", "/landingpage/landing.html.twig", "C:\\Users\\TVTVTV\\Documents\\GitHub\\SparkzSelling\\templates\\landingpage\\landing.html.twig");
    }
}
