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
class __TwigTemplate_3e748fee6c26b947a9a8be5001666297 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/components/aboutcontainer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/components/aboutcontainer.html.twig"));

        // line 1
        yield "<div id=\"about\" class=\"pt-28 flex flex-col bg-Blue-700 gap-5 relative\">
\t<h1 class=\"max-w-3xl m-auto text-7xl text-white font-extrabold text-center tracking-tighter\">Detta är
\t\t<span class=\"text-Blue-200\">Sparkz</span>
\t</h1>
\t<p class=\"m-auto text-Blue-100 font-semibold text-xl\">Hantera ditt erbjudande mot kunder på bästa sätt. Sparkz täcker alla områden.</p>
\t<div class=\"grid grid-cols-3 gap-4 max-w-[80%] m-auto pt-8 pb-16\">
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["utilities"]) || array_key_exists("utilities", $context) ? $context["utilities"] : (function () { throw new RuntimeError('Variable "utilities" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utilitiy"]) {
            // line 8
            yield "\t\t\t";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("aboututility", ["utilitiy" => $context["utilitiy"]]);
            yield "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['utilitiy'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "\t</div>
</div>
<div class=\"w-full h-28 bg-gradient-to-tl from-Blue-800 from-[49%] via-Blue-700 via-50% to-Blue-700 to-50%\"></div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  69 => 10,  60 => 8,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"about\" class=\"pt-28 flex flex-col bg-Blue-700 gap-5 relative\">
\t<h1 class=\"max-w-3xl m-auto text-7xl text-white font-extrabold text-center tracking-tighter\">Detta är
\t\t<span class=\"text-Blue-200\">Sparkz</span>
\t</h1>
\t<p class=\"m-auto text-Blue-100 font-semibold text-xl\">Hantera ditt erbjudande mot kunder på bästa sätt. Sparkz täcker alla områden.</p>
\t<div class=\"grid grid-cols-3 gap-4 max-w-[80%] m-auto pt-8 pb-16\">
\t\t{% for utilitiy in utilities %}
\t\t\t{{component(\"aboututility\", {\"utilitiy\": utilitiy})}}
\t\t{% endfor %}
\t</div>
</div>
<div class=\"w-full h-28 bg-gradient-to-tl from-Blue-800 from-[49%] via-Blue-700 via-50% to-Blue-700 to-50%\"></div>
", "/components/aboutcontainer.html.twig", "C:\\Users\\TVTVTV\\Documents\\GitHub\\SparkzSelling\\templates\\components\\aboutcontainer.html.twig");
    }
}
