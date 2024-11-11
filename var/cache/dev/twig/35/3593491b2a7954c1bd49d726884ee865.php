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

/* /landingpage/thankyou.html.twig */
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/landingpage/thankyou.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/landingpage/thankyou.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/landingpage/thankyou.html.twig", 1);
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
        yield "\t<div class=\"bg-Blue-800 pt-20 relative h-screen w-full overflow-hidden\">
\t\t<div class=\"overflow-hidden\">
\t\t\t<img class=\"opacity-10 object-cover z-0\" src=\"";
        // line 6
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
        // line 16
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("footer");
        yield "
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
        return "/landingpage/thankyou.html.twig";
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
        return array (  93 => 16,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
\t<div class=\"bg-Blue-800 pt-20 relative h-screen w-full overflow-hidden\">
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
", "/landingpage/thankyou.html.twig", "C:\\Users\\TVTVTV\\Documents\\GitHub\\SparkzSelling\\templates\\landingpage\\thankyou.html.twig");
    }
}
