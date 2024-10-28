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

/* /main/homepage.html.twig */
class __TwigTemplate_0d9c9ec52ef5b0202b00fafb5f937e17 extends Template
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
            'nav' => [$this, 'block_nav'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/main/homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/main/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/main/homepage.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "\t";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Header");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "

\t<div class=\"m-auto p-4\" style='columns: 12rem 3'>
\t\t";
        // line 11
        $context["handValue"] = 0;
        // line 12
        yield "\t\t";
        $context["ACE"] = false;
        // line 13
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cards"]) || array_key_exists("cards", $context) ? $context["cards"] : (function () { throw new RuntimeError('Variable "cards" does not exist.', 13, $this->source); })()), "cards", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 14
            yield "\t\t\t";
            $context["message"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["card"], "value", [], "any", false, false, false, 14) . " of ") . CoreExtension::getAttribute($this->env, $this->source, $context["card"], "suit", [], "any", false, false, false, 14));
            // line 15
            yield "\t\t\t";
            $context["src"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["card"], "images", [], "any", false, false, false, 15), "png", [], "any", false, false, false, 15);
            // line 16
            yield "\t\t\t";
            if (CoreExtension::matches("/^\\d+\$/", CoreExtension::getAttribute($this->env, $this->source, $context["card"], "value", [], "any", false, false, false, 16))) {
                // line 17
                yield "\t\t\t\t";
                $context["handValue"] = ((isset($context["handValue"]) || array_key_exists("handValue", $context) ? $context["handValue"] : (function () { throw new RuntimeError('Variable "handValue" does not exist.', 17, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["card"], "value", [], "any", false, false, false, 17));
                // line 18
                yield "\t\t\t";
            } else {
                // line 19
                yield "\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["card"], "value", [], "any", false, false, false, 19) == "ACE")) {
                    // line 20
                    yield "\t\t\t\t\t";
                    $context["ACE"] = true;
                    // line 21
                    yield "\t\t\t\t\t";
                    $context["handValue"] = ((isset($context["handValue"]) || array_key_exists("handValue", $context) ? $context["handValue"] : (function () { throw new RuntimeError('Variable "handValue" does not exist.', 21, $this->source); })()) + 11);
                    // line 22
                    yield "\t\t\t\t";
                } else {
                    // line 23
                    yield "\t\t\t\t\t";
                    $context["handValue"] = ((isset($context["handValue"]) || array_key_exists("handValue", $context) ? $context["handValue"] : (function () { throw new RuntimeError('Variable "handValue" does not exist.', 23, $this->source); })()) + 10);
                    // line 24
                    yield "\t\t\t\t";
                }
                // line 25
                yield "\t\t\t";
            }
            // line 26
            yield "\t\t\t";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Card", ["message" => (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 26, $this->source); })()), "src" => (isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 26, $this->source); })()), "alt" => (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 26, $this->source); })())]);
            yield "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['card'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "\t\t";
        if ((((isset($context["handValue"]) || array_key_exists("handValue", $context) ? $context["handValue"] : (function () { throw new RuntimeError('Variable "handValue" does not exist.', 28, $this->source); })()) > 21) && (isset($context["ACE"]) || array_key_exists("ACE", $context) ? $context["ACE"] : (function () { throw new RuntimeError('Variable "ACE" does not exist.', 28, $this->source); })()))) {
            // line 29
            yield "\t\t\t";
            $context["handValue"] = ((isset($context["handValue"]) || array_key_exists("handValue", $context) ? $context["handValue"] : (function () { throw new RuntimeError('Variable "handValue" does not exist.', 29, $this->source); })()) - 9);
            // line 30
            yield "\t\t";
        }
        // line 31
        yield "\t\t";
        if (((isset($context["handValue"]) || array_key_exists("handValue", $context) ? $context["handValue"] : (function () { throw new RuntimeError('Variable "handValue" does not exist.', 31, $this->source); })()) == 21)) {
            // line 32
            yield "\t\t\t";
            yield "You Won";
            yield "
\t\t\t";
        } else {
            // line 34
            yield "\t\t";
        }
        // line 35
        yield "\t</div>
\t<button class='bg-gradient-to-t from-slate-400 to-slate-200 rounded-lg h-fit p-2 border-slate-800 border-2 hover:cursor-pointer hover:from-slate-600 hover:to-slate-400'>Draw a new card</button>
\t<div style='columns: 10em'>
\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit vel, quibusdam veniam ipsa consequuntur placeat dolor quidem veritatis. Tempora cumque ipsam repellendus expedita animi quas ab voluptas dolores sint autem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit vel, quibusdam veniam ipsa consequuntur placeat dolor quidem veritatis. Tempora cumque ipsam repellendus expedita animi quas ab voluptas dolores sint autem.</p>
\t</div>
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
        return "/main/homepage.html.twig";
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
        return array (  185 => 35,  182 => 34,  176 => 32,  173 => 31,  170 => 30,  167 => 29,  164 => 28,  155 => 26,  152 => 25,  149 => 24,  146 => 23,  143 => 22,  140 => 21,  137 => 20,  134 => 19,  131 => 18,  128 => 17,  125 => 16,  122 => 15,  119 => 14,  114 => 13,  111 => 12,  109 => 11,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block nav  %}
\t{{ component('Header')}}
{% endblock %}

{% block body%}


\t<div class=\"m-auto p-4\" style='columns: 12rem 3'>
\t\t{% set handValue = 0 %}
\t\t{% set ACE = false %}
\t\t{% for card in cards.cards %}
\t\t\t{% set message = card.value ~ ' of ' ~  card.suit %}
\t\t\t{% set src = card.images.png %}
\t\t\t{% if card.value matches '/^\\\\d+\$/' %}
\t\t\t\t{% set handValue = handValue + card.value %}
\t\t\t{% else %}
\t\t\t\t{% if card.value == 'ACE' %}
\t\t\t\t\t{% set ACE = true %}
\t\t\t\t\t{% set handValue = handValue + 11 %}
\t\t\t\t{% else %}
\t\t\t\t\t{% set handValue = handValue + 10 %}
\t\t\t\t{% endif %}
\t\t\t{% endif %}
\t\t\t{{ component('Card', { message: message, src: src, alt: message }) }}
\t\t{% endfor %}
\t\t{% if handValue > 21 and ACE %}
\t\t\t{% set handValue = handValue - 9 %}
\t\t{% endif %}
\t\t{% if handValue == 21 %}
\t\t\t{{'You Won'}}
\t\t\t{% else %}
\t\t{% endif %}
\t</div>
\t<button class='bg-gradient-to-t from-slate-400 to-slate-200 rounded-lg h-fit p-2 border-slate-800 border-2 hover:cursor-pointer hover:from-slate-600 hover:to-slate-400'>Draw a new card</button>
\t<div style='columns: 10em'>
\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit vel, quibusdam veniam ipsa consequuntur placeat dolor quidem veritatis. Tempora cumque ipsam repellendus expedita animi quas ab voluptas dolores sint autem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit vel, quibusdam veniam ipsa consequuntur placeat dolor quidem veritatis. Tempora cumque ipsam repellendus expedita animi quas ab voluptas dolores sint autem.</p>
\t</div>
{% endblock %}
", "/main/homepage.html.twig", "C:\\Users\\TVTVTV\\Documents\\GitHub\\Test Map\\templates\\main\\homepage.html.twig");
    }
}
