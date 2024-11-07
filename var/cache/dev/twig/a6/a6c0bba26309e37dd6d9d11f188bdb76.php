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

/* components/footer.html.twig */
class __TwigTemplate_031d20903f7d69997a32333279ee6a77 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/footer.html.twig"));

        // line 1
        yield "<div class=\"h-60 bg-black flex items-center justify-center\">
\t<div class=\"w-[85%] flex justify-between\">
\t\t<img class=\"h-10\" style=\"filter: grayscale(100%) brightness(10)\" src=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sparkz_logo.svg"), "html", null, true);
        yield "\" alt=\"\">
\t\t<div class=\"text-white underline flex gap-8\">
\t\t\t<a class=\"hover:text-white\" href=\"mailto: info@sparkz.se\">info@sparkz.se</a>
\t\t\t<a href=\"tel:0708358158\">070 835 81 58</a>
\t\t</div>
\t</div>
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
        return "components/footer.html.twig";
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
        return new Source("<div class=\"h-60 bg-black flex items-center justify-center\">
\t<div class=\"w-[85%] flex justify-between\">
\t\t<img class=\"h-10\" style=\"filter: grayscale(100%) brightness(10)\" src=\"{{ asset('images/sparkz_logo.svg') }}\" alt=\"\">
\t\t<div class=\"text-white underline flex gap-8\">
\t\t\t<a class=\"hover:text-white\" href=\"mailto: info@sparkz.se\">info@sparkz.se</a>
\t\t\t<a href=\"tel:0708358158\">070 835 81 58</a>
\t\t</div>
\t</div>
</div>
", "components/footer.html.twig", "C:\\Users\\TVTVTV\\Documents\\GitHub\\SparkzSelling\\templates\\components\\footer.html.twig");
    }
}
