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

/* components/Header.html.twig */
class __TwigTemplate_168ab074ac8f8094a5dcb5852ec76813 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Header.html.twig"));

        // line 1
        yield "<ul class=\"flex text-xl w-fit relative gap-4 justify-center before:content-[''] before:w-full before:h-1 before:bg-slate-300 before:absolute before:rounded-full before:bottom-0\">
\t<li class=\"w-fit pb-1 relative gap-4 justify-center before:content-[''] before:w-0 before:left-[50%] hover:before:left-[0] hover:before:w-full before:h-1 hover:text-slate-700 hover:before:bg-slate-500 before:absolute before:rounded-full before:bottom-0 before:transition-all\">
\t\t<a href=\"/\">Hem</a>
\t</li>
\t<li class=\"w-fit pb-1 relative gap-4 hover:text-slate-700 justify-center before:content-[''] before:w-0 before:left-[50%] hover:before:left-[0] hover:before:w-full before:h-1 hover:before:bg-slate-500 before:absolute before:rounded-full before:bottom-0 before:transition-all\">
\t\t<a href=\"/Contact\">Kontakt</a>
\t</li>
\t<li class=\"w-fit pb-1 relative gap-4 hover:text-slate-700 justify-center before:content-[''] before:w-0 before:left-[50%] hover:before:left-[0] hover:before:w-full before:h-1 hover:before:bg-slate-500 before:absolute before:rounded-full before:bottom-0 before:transition-all\">
\t\t<a href=\"/Demo\">DEMO</a>
\t</li>
\t<li class=\"w-fit pb-1 relative gap-4 hover:text-slate-700 justify-center before:content-[''] before:w-0 before:left-[50%] hover:before:left-[0] hover:before:w-full before:h-1 hover:before:bg-slate-500 before:absolute before:rounded-full before:bottom-0 before:transition-all\">
\t\t<a href=\"/?view=FaQ\">Frågor & Svar</a>
\t</li>
</ul>
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
        return "components/Header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<ul class=\"flex text-xl w-fit relative gap-4 justify-center before:content-[''] before:w-full before:h-1 before:bg-slate-300 before:absolute before:rounded-full before:bottom-0\">
\t<li class=\"w-fit pb-1 relative gap-4 justify-center before:content-[''] before:w-0 before:left-[50%] hover:before:left-[0] hover:before:w-full before:h-1 hover:text-slate-700 hover:before:bg-slate-500 before:absolute before:rounded-full before:bottom-0 before:transition-all\">
\t\t<a href=\"/\">Hem</a>
\t</li>
\t<li class=\"w-fit pb-1 relative gap-4 hover:text-slate-700 justify-center before:content-[''] before:w-0 before:left-[50%] hover:before:left-[0] hover:before:w-full before:h-1 hover:before:bg-slate-500 before:absolute before:rounded-full before:bottom-0 before:transition-all\">
\t\t<a href=\"/Contact\">Kontakt</a>
\t</li>
\t<li class=\"w-fit pb-1 relative gap-4 hover:text-slate-700 justify-center before:content-[''] before:w-0 before:left-[50%] hover:before:left-[0] hover:before:w-full before:h-1 hover:before:bg-slate-500 before:absolute before:rounded-full before:bottom-0 before:transition-all\">
\t\t<a href=\"/Demo\">DEMO</a>
\t</li>
\t<li class=\"w-fit pb-1 relative gap-4 hover:text-slate-700 justify-center before:content-[''] before:w-0 before:left-[50%] hover:before:left-[0] hover:before:w-full before:h-1 hover:before:bg-slate-500 before:absolute before:rounded-full before:bottom-0 before:transition-all\">
\t\t<a href=\"/?view=FaQ\">Frågor & Svar</a>
\t</li>
</ul>
", "components/Header.html.twig", "C:\\Users\\TVTVTV\\Documents\\GitHub\\Test Map\\templates\\components\\Header.html.twig");
    }
}
