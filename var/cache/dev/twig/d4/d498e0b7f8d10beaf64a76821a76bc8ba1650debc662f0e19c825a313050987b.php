<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a66f7feeccc64ec58a7671d7832396430d88f2e27434edb21459be8430e2f116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_0865de36608a1dff32d09fc38b7c54d81fcc8feaf8c661c5899cfcd862f2c112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0865de36608a1dff32d09fc38b7c54d81fcc8feaf8c661c5899cfcd862f2c112->enter($__internal_0865de36608a1dff32d09fc38b7c54d81fcc8feaf8c661c5899cfcd862f2c112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_df30d5411c71377e0d17eeb676bf7931f7a0180fd24d564603f6717902b631e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df30d5411c71377e0d17eeb676bf7931f7a0180fd24d564603f6717902b631e1->enter($__internal_df30d5411c71377e0d17eeb676bf7931f7a0180fd24d564603f6717902b631e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0865de36608a1dff32d09fc38b7c54d81fcc8feaf8c661c5899cfcd862f2c112->leave($__internal_0865de36608a1dff32d09fc38b7c54d81fcc8feaf8c661c5899cfcd862f2c112_prof);

        
        $__internal_df30d5411c71377e0d17eeb676bf7931f7a0180fd24d564603f6717902b631e1->leave($__internal_df30d5411c71377e0d17eeb676bf7931f7a0180fd24d564603f6717902b631e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f04283e5d5b2836acc2de88ace8328fd58f04a5cc21cdd2b529a9db4feaff9f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04283e5d5b2836acc2de88ace8328fd58f04a5cc21cdd2b529a9db4feaff9f3->enter($__internal_f04283e5d5b2836acc2de88ace8328fd58f04a5cc21cdd2b529a9db4feaff9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_de1fe53b189edf556f46fae700d079a36bcb5ed8340d63e54e7239050c7cf5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1fe53b189edf556f46fae700d079a36bcb5ed8340d63e54e7239050c7cf5ca->enter($__internal_de1fe53b189edf556f46fae700d079a36bcb5ed8340d63e54e7239050c7cf5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_de1fe53b189edf556f46fae700d079a36bcb5ed8340d63e54e7239050c7cf5ca->leave($__internal_de1fe53b189edf556f46fae700d079a36bcb5ed8340d63e54e7239050c7cf5ca_prof);

        
        $__internal_f04283e5d5b2836acc2de88ace8328fd58f04a5cc21cdd2b529a9db4feaff9f3->leave($__internal_f04283e5d5b2836acc2de88ace8328fd58f04a5cc21cdd2b529a9db4feaff9f3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72c80c33e72f7a0258d15ffc5d72a54fa468f1c658101f24ca0efb4b5ea38ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c80c33e72f7a0258d15ffc5d72a54fa468f1c658101f24ca0efb4b5ea38ef4->enter($__internal_72c80c33e72f7a0258d15ffc5d72a54fa468f1c658101f24ca0efb4b5ea38ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4011768176b6d06bb69e96e8d7faa4ebf3d22dcf6bf73e27e58169ae41b46b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4011768176b6d06bb69e96e8d7faa4ebf3d22dcf6bf73e27e58169ae41b46b44->enter($__internal_4011768176b6d06bb69e96e8d7faa4ebf3d22dcf6bf73e27e58169ae41b46b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4011768176b6d06bb69e96e8d7faa4ebf3d22dcf6bf73e27e58169ae41b46b44->leave($__internal_4011768176b6d06bb69e96e8d7faa4ebf3d22dcf6bf73e27e58169ae41b46b44_prof);

        
        $__internal_72c80c33e72f7a0258d15ffc5d72a54fa468f1c658101f24ca0efb4b5ea38ef4->leave($__internal_72c80c33e72f7a0258d15ffc5d72a54fa468f1c658101f24ca0efb4b5ea38ef4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_670effcdf67d881cf81974eed0ccb50ac668e9fcb8d1a7b151e835c3f16cf127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670effcdf67d881cf81974eed0ccb50ac668e9fcb8d1a7b151e835c3f16cf127->enter($__internal_670effcdf67d881cf81974eed0ccb50ac668e9fcb8d1a7b151e835c3f16cf127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_65e4f0a99878bee10ec3829d06d14e82e37dd14ebb9f02b24aed8002c3a07acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e4f0a99878bee10ec3829d06d14e82e37dd14ebb9f02b24aed8002c3a07acb->enter($__internal_65e4f0a99878bee10ec3829d06d14e82e37dd14ebb9f02b24aed8002c3a07acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_65e4f0a99878bee10ec3829d06d14e82e37dd14ebb9f02b24aed8002c3a07acb->leave($__internal_65e4f0a99878bee10ec3829d06d14e82e37dd14ebb9f02b24aed8002c3a07acb_prof);

        
        $__internal_670effcdf67d881cf81974eed0ccb50ac668e9fcb8d1a7b151e835c3f16cf127->leave($__internal_670effcdf67d881cf81974eed0ccb50ac668e9fcb8d1a7b151e835c3f16cf127_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Turnos\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
