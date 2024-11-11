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

/* components/aboututility.html.twig */
class __TwigTemplate_7b7395d4214ce931e5511711c8ee0ae3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/aboututility.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/aboututility.html.twig"));

        // line 2
        yield "<div
\tclass=\"rounded-xl bg-Blue-800 p-12 flex flex-col gap-4\">
\t";
        // line 5
        yield "\t<div class=\"text-Blue-300 text-4xl\">";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilitiy"]) || array_key_exists("utilitiy", $context) ? $context["utilitiy"] : (function () { throw new RuntimeError('Variable "utilitiy" does not exist.', 5, $this->source); })()), "icon", [], "array", false, false, false, 5);
        yield "</div>
\t<h3 class=\"text-white font-semibold text-xl\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilitiy"]) || array_key_exists("utilitiy", $context) ? $context["utilitiy"] : (function () { throw new RuntimeError('Variable "utilitiy" does not exist.', 6, $this->source); })()), "title", [], "array", false, false, false, 6), "html", null, true);
        yield "<span class=\"text-Blue-300\">.</span>
\t</h3>
\t<p class=\"text-Blue-200\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilitiy"]) || array_key_exists("utilitiy", $context) ? $context["utilitiy"] : (function () { throw new RuntimeError('Variable "utilitiy" does not exist.', 8, $this->source); })()), "content", [], "array", false, false, false, 8), "html", null, true);
        yield "</p>
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
        return "components/aboututility.html.twig";
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
        return array (  62 => 8,  57 => 6,  52 => 5,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Recieves utility information from about container #}
<div
\tclass=\"rounded-xl bg-Blue-800 p-12 flex flex-col gap-4\">
\t{# '| raw' is used to render raw html, in this case and <i> tag with an icon. #}
\t<div class=\"text-Blue-300 text-4xl\">{{utilitiy[\"icon\"] | raw}}</div>
\t<h3 class=\"text-white font-semibold text-xl\">{{utilitiy[\"title\"]}}<span class=\"text-Blue-300\">.</span>
\t</h3>
\t<p class=\"text-Blue-200\">{{utilitiy[\"content\"]}}</p>
</div>
", "components/aboututility.html.twig", "C:\\Users\\TVTVTV\\Documents\\GitHub\\SparkzSelling\\templates\\components\\aboututility.html.twig");
    }
}
