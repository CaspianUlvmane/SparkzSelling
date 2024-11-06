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

/* components/contactform.html.twig */
class __TwigTemplate_b0aed1fc7740556f9492281a8308e1e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/contactform.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/contactform.html.twig"));

        // line 1
        yield "<div id=\"contact\" class=\"bg-Blue-800 pt-20 relative\">
\t<div class=\"h-[600px] overflow-hidden\">
\t\t<img class=\"opacity-10 object-cover\" src=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sparkz_logo_white.svg"), "html", null, true);
        yield "\" alt=\"\">
\t</div>
\t<form class=\"absolute left-1/2 top-1/2 translate-x-[-50%] translate-y-[-50%] flex flex-col gap-4 items-center\" action=\"/submit\" method=\"post\">
\t\t<h1 class=\"text-5xl text-white font-extrabold pb-6\">Kontakta
\t\t\t<span class=\"text-Blue-200\">oss</span>
\t\t</h1>
\t\t<input class=\"bg-transparent p-4 rounded-full w-[600px] text-xl border-2 border-white text-white focus-visible:outline-none focus-visible:shadow-input\" type=\"text\" name=\"name\" id=\"name\" placeholder=\"Namn\">
\t\t<input class=\"bg-transparent p-4 rounded-full w-[600px] text-xl border-2 border-white text-white focus-visible:outline-none focus-visible:shadow-input\" type=\"text\" name=\"email\" id=\"email\" placeholder=\"E-post\">
\t\t<input class=\"bg-transparent p-4 rounded-full w-[600px] text-xl border-2 border-white text-white focus-visible:outline-none focus-visible:shadow-input\" type=\"text\" name=\"phone\" id=\"phone\" placeholder=\"Telefon\">
\t\t<button class=\"text-lg rounded-full mt-6 bg-Blue-200 w-fit m-auto p-4 pl-7 pr-7 font-semibold hover:bg-white transition-all duration-300\">Skicka formulär</button>
\t</form>

</div>
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
        return "components/contactform.html.twig";
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
        return array (  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"contact\" class=\"bg-Blue-800 pt-20 relative\">
\t<div class=\"h-[600px] overflow-hidden\">
\t\t<img class=\"opacity-10 object-cover\" src=\"{{ asset('images/sparkz_logo_white.svg') }}\" alt=\"\">
\t</div>
\t<form class=\"absolute left-1/2 top-1/2 translate-x-[-50%] translate-y-[-50%] flex flex-col gap-4 items-center\" action=\"/submit\" method=\"post\">
\t\t<h1 class=\"text-5xl text-white font-extrabold pb-6\">Kontakta
\t\t\t<span class=\"text-Blue-200\">oss</span>
\t\t</h1>
\t\t<input class=\"bg-transparent p-4 rounded-full w-[600px] text-xl border-2 border-white text-white focus-visible:outline-none focus-visible:shadow-input\" type=\"text\" name=\"name\" id=\"name\" placeholder=\"Namn\">
\t\t<input class=\"bg-transparent p-4 rounded-full w-[600px] text-xl border-2 border-white text-white focus-visible:outline-none focus-visible:shadow-input\" type=\"text\" name=\"email\" id=\"email\" placeholder=\"E-post\">
\t\t<input class=\"bg-transparent p-4 rounded-full w-[600px] text-xl border-2 border-white text-white focus-visible:outline-none focus-visible:shadow-input\" type=\"text\" name=\"phone\" id=\"phone\" placeholder=\"Telefon\">
\t\t<button class=\"text-lg rounded-full mt-6 bg-Blue-200 w-fit m-auto p-4 pl-7 pr-7 font-semibold hover:bg-white transition-all duration-300\">Skicka formulär</button>
\t</form>

</div>
", "components/contactform.html.twig", "C:\\Users\\TVTVTV\\Documents\\GitHub\\SparkzSelling\\templates\\components\\contactform.html.twig");
    }
}
