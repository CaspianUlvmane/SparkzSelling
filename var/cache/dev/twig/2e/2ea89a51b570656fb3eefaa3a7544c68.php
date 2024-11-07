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

/* /components/landingmain.html.twig */
class __TwigTemplate_ad739882cf5f3e8f3d15d603db9b481c extends Template
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
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "/landingpage/landing.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/components/landingmain.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/components/landingmain.html.twig"));

        $this->parent = $this->loadTemplate("/landingpage/landing.html.twig", "/components/landingmain.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        yield "
\t<h1 class=\"pt-36 max-w-3xl m-auto text-7xl text-white font-extrabold text-center tracking-tighter\">Ett
\t\t<span class=\"text-Blue-200\">bokningssystem</span>
\t\tsom gör det lätt att må bra</h1>
\t<p class=\"m-auto text-Blue-100 font-semibold text-xl\">Detta är en relativt kort ingress som just nu saknar ett syfte.</p>
\t<button class=\"text-lg rounded-full bg-Blue-200 w-fit m-auto p-4 pl-7 pr-7 font-semibold hover:bg-white transition-all duration-300\">Boka möte</button>

\t<img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sparkz_calender.png"), "html", null, true);
        yield "\" alt=\"Sparkz kalender på mobil och på dator\" class=\"max-w-[80%] m-auto pb-8\"/>
\t<div class=\"max-w-screen h-28 bg-gradient-to-tl from-Blue-700 from-[49%] via-transparent via-50% to-transparent to-50%\"></div>

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
        return "/components/landingmain.html.twig";
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
        return array (  85 => 11,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"/landingpage/landing.html.twig\" %}

{% block main %}

\t<h1 class=\"pt-36 max-w-3xl m-auto text-7xl text-white font-extrabold text-center tracking-tighter\">Ett
\t\t<span class=\"text-Blue-200\">bokningssystem</span>
\t\tsom gör det lätt att må bra</h1>
\t<p class=\"m-auto text-Blue-100 font-semibold text-xl\">Detta är en relativt kort ingress som just nu saknar ett syfte.</p>
\t<button class=\"text-lg rounded-full bg-Blue-200 w-fit m-auto p-4 pl-7 pr-7 font-semibold hover:bg-white transition-all duration-300\">Boka möte</button>

\t<img src=\"{{ asset('images/sparkz_calender.png') }}\" alt=\"Sparkz kalender på mobil och på dator\" class=\"max-w-[80%] m-auto pb-8\"/>
\t<div class=\"max-w-screen h-28 bg-gradient-to-tl from-Blue-700 from-[49%] via-transparent via-50% to-transparent to-50%\"></div>

{% endblock %}
", "/components/landingmain.html.twig", "C:\\Users\\TVTVTV\\Documents\\GitHub\\SparkzSelling\\templates\\components\\landingmain.html.twig");
    }
}
