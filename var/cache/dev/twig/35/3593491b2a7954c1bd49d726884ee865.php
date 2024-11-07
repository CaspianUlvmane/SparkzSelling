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

/* landingpage/thankyou.html.twig */
class __TwigTemplate_c5d4675a573c257870a5f00c01dbd199 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landingpage/thankyou.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landingpage/thankyou.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "landingpage/thankyou.html.twig", 1);
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
        yield "\t<div class=\"bg-Blue-800 pt-20 relative h-screen overflow-hidden\">
\t\t<nav data-controller=\"scroll\" class=\"bg-Blue-900 min-w-[85%] rounded-full h-16 absolute m-auto flex items-center pl-10 pr-10 justify-between z-10 left-1/2 top-6 translate-x-[-50%]\">
\t\t\t";
        // line 6
        yield from $this->unwrap()->yieldBlock('nav', $context, $blocks);
        // line 9
        yield "\t\t</nav>
\t\t<div class=\"overflow-hidden\">
\t\t\t<img class=\"opacity-10 object-cover z-0\" src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sparkz_logo_white.svg"), "html", null, true);
        yield "\" alt=\"\">
\t\t</div>
\t\t<div class=\"absolute left-1/2 top-1/2 translate-x-[-50%] translate-y-[-50%] flex flex-col gap-6\">
\t\t\t<div class=\"flex align-middle justify-center\">
\t\t\t\t<div data-controller=\"animation\" data-action=\"animation#connect\" class=\"text-Blue-300 duration-300 scale-1 transition-all  text-9xl border-4 aspect-square p-12 rounded-full flex justify-center items-center font-extrabold scaleanimation\">Tack
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div data-controller=\"animation\" data-action=\"animation#connect\" class=\"text-center transition-all duration-300 delay-300 text-white text-xl font-semibold scaleanimation\">Vi kontaktar dig snarast</div>
\t\t</div>
\t</div>
\t";
        // line 21
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
        return "landingpage/thankyou.html.twig";
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
        return array (  126 => 7,  113 => 6,  100 => 21,  87 => 11,  83 => 9,  81 => 6,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
\t<div class=\"bg-Blue-800 pt-20 relative h-screen overflow-hidden\">
\t\t<nav data-controller=\"scroll\" class=\"bg-Blue-900 min-w-[85%] rounded-full h-16 absolute m-auto flex items-center pl-10 pr-10 justify-between z-10 left-1/2 top-6 translate-x-[-50%]\">
\t\t\t{% block nav %}
\t\t\t\t{{component(\"header\")}}
\t\t\t{% endblock %}
\t\t</nav>
\t\t<div class=\"overflow-hidden\">
\t\t\t<img class=\"opacity-10 object-cover z-0\" src=\"{{ asset('images/sparkz_logo_white.svg') }}\" alt=\"\">
\t\t</div>
\t\t<div class=\"absolute left-1/2 top-1/2 translate-x-[-50%] translate-y-[-50%] flex flex-col gap-6\">
\t\t\t<div class=\"flex align-middle justify-center\">
\t\t\t\t<div data-controller=\"animation\" data-action=\"animation#connect\" class=\"text-Blue-300 duration-300 scale-1 transition-all  text-9xl border-4 aspect-square p-12 rounded-full flex justify-center items-center font-extrabold scaleanimation\">Tack
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div data-controller=\"animation\" data-action=\"animation#connect\" class=\"text-center transition-all duration-300 delay-300 text-white text-xl font-semibold scaleanimation\">Vi kontaktar dig snarast</div>
\t\t</div>
\t</div>
\t{{component('footer')}}
{% endblock %}
", "landingpage/thankyou.html.twig", "C:\\Users\\TVTVTV\\Documents\\GitHub\\SparkzSelling\\templates\\landingpage\\thankyou.html.twig");
    }
}
