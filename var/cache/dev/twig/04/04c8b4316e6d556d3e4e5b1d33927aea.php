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

/* /components/aboutcontainer.html.twig */
class __TwigTemplate_d9d5f53e24a420ad12f6abaf1d2ecdd0 extends Template
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
            'about' => [$this, 'block_about'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "/components/footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/components/aboutcontainer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/components/aboutcontainer.html.twig"));

        $this->parent = $this->loadTemplate("/components/footer.html.twig", "/components/aboutcontainer.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_about(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "about"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "about"));

        // line 4
        yield "\t<div id=\"about\" class=\"pt-28 flex flex-col bg-Blue-700 gap-5 relative\">
\t\t<h1 class=\"max-w-3xl m-auto text-7xl text-white font-extrabold text-center tracking-tighter\">Detta är
\t\t\t<span class=\"text-Blue-200\">Sparkz</span>
\t\t</h1>
\t\t<p class=\"m-auto text-Blue-100 font-semibold text-xl\">Hantera ditt erbjudande mot kunder på bästa sätt. Sparkz täcker alla områden.</p>
\t\t<div class=\"grid grid-cols-3 gap-4 max-w-[80%] m-auto pt-8 pb-16\">
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["utilities"]) || array_key_exists("utilities", $context) ? $context["utilities"] : (function () { throw new RuntimeError('Variable "utilities" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utilitiy"]) {
            // line 11
            yield "\t\t\t\t";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("aboututility", ["utilitiy" => $context["utilitiy"]]);
            yield "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['utilitiy'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "\t\t</div>
\t</div>
\t<div class=\"max-w-screen h-28 bg-gradient-to-tl from-Blue-800 from-[49%] via-Blue-700 via-50% to-Blue-700 to-50%\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/components/aboutcontainer.html.twig";
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
        return array (  97 => 13,  88 => 11,  84 => 10,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"/components/footer.html.twig\" %}

{% block about %}
\t<div id=\"about\" class=\"pt-28 flex flex-col bg-Blue-700 gap-5 relative\">
\t\t<h1 class=\"max-w-3xl m-auto text-7xl text-white font-extrabold text-center tracking-tighter\">Detta är
\t\t\t<span class=\"text-Blue-200\">Sparkz</span>
\t\t</h1>
\t\t<p class=\"m-auto text-Blue-100 font-semibold text-xl\">Hantera ditt erbjudande mot kunder på bästa sätt. Sparkz täcker alla områden.</p>
\t\t<div class=\"grid grid-cols-3 gap-4 max-w-[80%] m-auto pt-8 pb-16\">
\t\t\t{% for utilitiy in utilities %}
\t\t\t\t{{component(\"aboututility\", {\"utilitiy\": utilitiy})}}
\t\t\t{% endfor %}
\t\t</div>
\t</div>
\t<div class=\"max-w-screen h-28 bg-gradient-to-tl from-Blue-800 from-[49%] via-Blue-700 via-50% to-Blue-700 to-50%\"></div>
{% endblock %}
", "/components/aboutcontainer.html.twig", "C:\\Users\\TVTVTV\\Documents\\GitHub\\SparkzSelling\\templates\\components\\aboutcontainer.html.twig");
    }
}
