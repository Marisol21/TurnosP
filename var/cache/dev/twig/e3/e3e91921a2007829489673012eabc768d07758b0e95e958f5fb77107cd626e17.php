<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b587731a82fa1e2a9442bec2a9e1c3f0902ff01ccf9312478ac026d0fe404f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17cc1913d6ad3491394a2e5441d99c051e6a844357c7b8ca9c3660812b3444ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17cc1913d6ad3491394a2e5441d99c051e6a844357c7b8ca9c3660812b3444ab->enter($__internal_17cc1913d6ad3491394a2e5441d99c051e6a844357c7b8ca9c3660812b3444ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_75ae746e9e16b3aa5f9ff37297b9852e87679bacd74b1baf095b686eea746336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ae746e9e16b3aa5f9ff37297b9852e87679bacd74b1baf095b686eea746336->enter($__internal_75ae746e9e16b3aa5f9ff37297b9852e87679bacd74b1baf095b686eea746336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17cc1913d6ad3491394a2e5441d99c051e6a844357c7b8ca9c3660812b3444ab->leave($__internal_17cc1913d6ad3491394a2e5441d99c051e6a844357c7b8ca9c3660812b3444ab_prof);

        
        $__internal_75ae746e9e16b3aa5f9ff37297b9852e87679bacd74b1baf095b686eea746336->leave($__internal_75ae746e9e16b3aa5f9ff37297b9852e87679bacd74b1baf095b686eea746336_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd04f4da0bf009ddd07faaaa30e1c8065be48e14d46901f03b30ba8d37cffd5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd04f4da0bf009ddd07faaaa30e1c8065be48e14d46901f03b30ba8d37cffd5d->enter($__internal_bd04f4da0bf009ddd07faaaa30e1c8065be48e14d46901f03b30ba8d37cffd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6000cc68f5687af6b50bea03909ed85258c96c00646e8fd7481b968f67bd2afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6000cc68f5687af6b50bea03909ed85258c96c00646e8fd7481b968f67bd2afe->enter($__internal_6000cc68f5687af6b50bea03909ed85258c96c00646e8fd7481b968f67bd2afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6000cc68f5687af6b50bea03909ed85258c96c00646e8fd7481b968f67bd2afe->leave($__internal_6000cc68f5687af6b50bea03909ed85258c96c00646e8fd7481b968f67bd2afe_prof);

        
        $__internal_bd04f4da0bf009ddd07faaaa30e1c8065be48e14d46901f03b30ba8d37cffd5d->leave($__internal_bd04f4da0bf009ddd07faaaa30e1c8065be48e14d46901f03b30ba8d37cffd5d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_087ab240c68e72ae208a3e5302f8ecc6992392c5be008d4c5daa30e8f90b7868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087ab240c68e72ae208a3e5302f8ecc6992392c5be008d4c5daa30e8f90b7868->enter($__internal_087ab240c68e72ae208a3e5302f8ecc6992392c5be008d4c5daa30e8f90b7868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e1cfe20445084272e7fb719f45b29ede1e762856bbf6baa9c8440d61be22ca6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1cfe20445084272e7fb719f45b29ede1e762856bbf6baa9c8440d61be22ca6e->enter($__internal_e1cfe20445084272e7fb719f45b29ede1e762856bbf6baa9c8440d61be22ca6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e1cfe20445084272e7fb719f45b29ede1e762856bbf6baa9c8440d61be22ca6e->leave($__internal_e1cfe20445084272e7fb719f45b29ede1e762856bbf6baa9c8440d61be22ca6e_prof);

        
        $__internal_087ab240c68e72ae208a3e5302f8ecc6992392c5be008d4c5daa30e8f90b7868->leave($__internal_087ab240c68e72ae208a3e5302f8ecc6992392c5be008d4c5daa30e8f90b7868_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9847d639c42988b26c691675ff7af829486aeee27f731d64d937b902d0f83a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9847d639c42988b26c691675ff7af829486aeee27f731d64d937b902d0f83a23->enter($__internal_9847d639c42988b26c691675ff7af829486aeee27f731d64d937b902d0f83a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b188aa7c04180e512c116ac41dbc19fd829fb0e81e3ba6c410d01bbe50d12bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b188aa7c04180e512c116ac41dbc19fd829fb0e81e3ba6c410d01bbe50d12bc4->enter($__internal_b188aa7c04180e512c116ac41dbc19fd829fb0e81e3ba6c410d01bbe50d12bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b188aa7c04180e512c116ac41dbc19fd829fb0e81e3ba6c410d01bbe50d12bc4->leave($__internal_b188aa7c04180e512c116ac41dbc19fd829fb0e81e3ba6c410d01bbe50d12bc4_prof);

        
        $__internal_9847d639c42988b26c691675ff7af829486aeee27f731d64d937b902d0f83a23->leave($__internal_9847d639c42988b26c691675ff7af829486aeee27f731d64d937b902d0f83a23_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Turnos\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
