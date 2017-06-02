<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_60f4ec78c4b7cd383730742837bb6b3740b4e14ca380bac4513551a7028251bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f29fa3b662a78656f7afc9f2e96433de491180fbe82558c129a6f6e62f6ff176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29fa3b662a78656f7afc9f2e96433de491180fbe82558c129a6f6e62f6ff176->enter($__internal_f29fa3b662a78656f7afc9f2e96433de491180fbe82558c129a6f6e62f6ff176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_3a3b1f47c1fd7cd46b2043e07ad73d5dd6644b86ab0da78c03c732ecdfb6d788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3b1f47c1fd7cd46b2043e07ad73d5dd6644b86ab0da78c03c732ecdfb6d788->enter($__internal_3a3b1f47c1fd7cd46b2043e07ad73d5dd6644b86ab0da78c03c732ecdfb6d788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f29fa3b662a78656f7afc9f2e96433de491180fbe82558c129a6f6e62f6ff176->leave($__internal_f29fa3b662a78656f7afc9f2e96433de491180fbe82558c129a6f6e62f6ff176_prof);

        
        $__internal_3a3b1f47c1fd7cd46b2043e07ad73d5dd6644b86ab0da78c03c732ecdfb6d788->leave($__internal_3a3b1f47c1fd7cd46b2043e07ad73d5dd6644b86ab0da78c03c732ecdfb6d788_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\Turnos\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
