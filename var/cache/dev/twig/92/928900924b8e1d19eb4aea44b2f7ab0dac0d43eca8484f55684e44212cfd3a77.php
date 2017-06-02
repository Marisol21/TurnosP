<?php

/* TurnosBundle:Default:adminCarreras.html.twig */
class __TwigTemplate_f8ce54d69ca26b5e31e2132c1b208d25b6e1b17afd9bd025107e1dc9db70a455 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TurnosBundle:Default:adminCarreras.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fbef7c95857052a37e4d9702a2d5a1a830f425b143c1672f75bcb7370c69c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fbef7c95857052a37e4d9702a2d5a1a830f425b143c1672f75bcb7370c69c03->enter($__internal_8fbef7c95857052a37e4d9702a2d5a1a830f425b143c1672f75bcb7370c69c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TurnosBundle:Default:adminCarreras.html.twig"));

        $__internal_1fc9ce344c213aee77b34ef7ac82d71c42d79f3926e65f04502913a738403936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc9ce344c213aee77b34ef7ac82d71c42d79f3926e65f04502913a738403936->enter($__internal_1fc9ce344c213aee77b34ef7ac82d71c42d79f3926e65f04502913a738403936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TurnosBundle:Default:adminCarreras.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fbef7c95857052a37e4d9702a2d5a1a830f425b143c1672f75bcb7370c69c03->leave($__internal_8fbef7c95857052a37e4d9702a2d5a1a830f425b143c1672f75bcb7370c69c03_prof);

        
        $__internal_1fc9ce344c213aee77b34ef7ac82d71c42d79f3926e65f04502913a738403936->leave($__internal_1fc9ce344c213aee77b34ef7ac82d71c42d79f3926e65f04502913a738403936_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_5d66bd69a7e9ffc86a5533c5e8c0a547903675abdb355c824a8350ff3edfe5f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d66bd69a7e9ffc86a5533c5e8c0a547903675abdb355c824a8350ff3edfe5f1->enter($__internal_5d66bd69a7e9ffc86a5533c5e8c0a547903675abdb355c824a8350ff3edfe5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_9683b20b3ec8c6e2d43ec9644b600a37f9a102af2108ad1509f352b71fc876cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9683b20b3ec8c6e2d43ec9644b600a37f9a102af2108ad1509f352b71fc876cd->enter($__internal_9683b20b3ec8c6e2d43ec9644b600a37f9a102af2108ad1509f352b71fc876cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 3
        echo "    ";
        // line 4
        echo "    <div class=\"row\">
        <form class=\"col s10\">
            <div class=\"row\">
                <div class=\"input-field col s6\">
                    <input id=\"nombreCarrera\" name=\"nombreCarrera\" type=\"text\" class=\"validate\">
                    <label for=\"name\">Nombre</label>
                </div>
                <div class=\"input-field col s2\">
                    <input id=\"idCa\" name=\"idCa\" type=\"text\" style=\"visibility: hidden\" class=\"validate\">
                    <label for=\"idCa\"></label>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s4\">
                    <input id=\"notur\" name=\"notur\" type=\"text\" class=\"validate\">
                    <label for=\"usuario\">Turno</label>
                </div>
                <div class=\"input-field col s4\">
                    ";
        // line 23
        echo "                    <input type=\"text\" id=\"idco\" name=\"idco\" class=\"validate\">
                    <label for=\"password\">Coordinador</label>
                </div>
            </div>
        </form>
    </div>

    <input type=\"button\" id=\"AgregarCrr\" value=\"Agregar\" />
    <input type=\"button\" id=\"EliminarCrr\" value=\"Eliminar\" />
    <input type=\"button\" id=\"GuardarCrr\" value=\"Guardar\" />

    <table>
        <thead>
        <tr>
            <th>Nombre Carrera</th>
        </tr>
        </thead>
        <tbody id=\"tbody\"> ";
        // line 41
        echo "
        </tbody>
    </table>
";
        
        $__internal_9683b20b3ec8c6e2d43ec9644b600a37f9a102af2108ad1509f352b71fc876cd->leave($__internal_9683b20b3ec8c6e2d43ec9644b600a37f9a102af2108ad1509f352b71fc876cd_prof);

        
        $__internal_5d66bd69a7e9ffc86a5533c5e8c0a547903675abdb355c824a8350ff3edfe5f1->leave($__internal_5d66bd69a7e9ffc86a5533c5e8c0a547903675abdb355c824a8350ff3edfe5f1_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8dd26587391be92ffb2255e26a93bf9ce4f0830e135d95149c036fb956b3df34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dd26587391be92ffb2255e26a93bf9ce4f0830e135d95149c036fb956b3df34->enter($__internal_8dd26587391be92ffb2255e26a93bf9ce4f0830e135d95149c036fb956b3df34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b37c427104797b9ca759d7ea1b50a79e3dfb2edee32fa403496747cdf6e3f8b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37c427104797b9ca759d7ea1b50a79e3dfb2edee32fa403496747cdf6e3f8b9->enter($__internal_b37c427104797b9ca759d7ea1b50a79e3dfb2edee32fa403496747cdf6e3f8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function(){
            \$(\"#tbody\").load(\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LlenarTablaCarreras");
        echo "\")
            \$(\"#AgregarCrr\").click(function(){
                \$.ajax({
                    url: \"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AgregarCrr");
        echo "\",
                    type: \"POST\",
                    data: \$(\".validate\").serialize(),
                    success: function(data){
                        if(\$.trim(data == \"1\"))
                            \$(\"#tbody\").load(\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LlenarTablaCarreras");
        echo "\");
                        else
                            alert(\"Problemas al insertar\");
                    }
                });
            });

            \$(\"\")
        });
    </script>
";
        
        $__internal_b37c427104797b9ca759d7ea1b50a79e3dfb2edee32fa403496747cdf6e3f8b9->leave($__internal_b37c427104797b9ca759d7ea1b50a79e3dfb2edee32fa403496747cdf6e3f8b9_prof);

        
        $__internal_8dd26587391be92ffb2255e26a93bf9ce4f0830e135d95149c036fb956b3df34->leave($__internal_8dd26587391be92ffb2255e26a93bf9ce4f0830e135d95149c036fb956b3df34_prof);

    }

    public function getTemplateName()
    {
        return "TurnosBundle:Default:adminCarreras.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 58,  126 => 53,  120 => 50,  113 => 47,  104 => 46,  91 => 41,  72 => 23,  52 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{%  block contenido %}
    {#comentar#}
    <div class=\"row\">
        <form class=\"col s10\">
            <div class=\"row\">
                <div class=\"input-field col s6\">
                    <input id=\"nombreCarrera\" name=\"nombreCarrera\" type=\"text\" class=\"validate\">
                    <label for=\"name\">Nombre</label>
                </div>
                <div class=\"input-field col s2\">
                    <input id=\"idCa\" name=\"idCa\" type=\"text\" style=\"visibility: hidden\" class=\"validate\">
                    <label for=\"idCa\"></label>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s4\">
                    <input id=\"notur\" name=\"notur\" type=\"text\" class=\"validate\">
                    <label for=\"usuario\">Turno</label>
                </div>
                <div class=\"input-field col s4\">
                    {#<input id=\"pwdCoor\" type=\"password\" class=\"validate\">#}
                    <input type=\"text\" id=\"idco\" name=\"idco\" class=\"validate\">
                    <label for=\"password\">Coordinador</label>
                </div>
            </div>
        </form>
    </div>

    <input type=\"button\" id=\"AgregarCrr\" value=\"Agregar\" />
    <input type=\"button\" id=\"EliminarCrr\" value=\"Eliminar\" />
    <input type=\"button\" id=\"GuardarCrr\" value=\"Guardar\" />

    <table>
        <thead>
        <tr>
            <th>Nombre Carrera</th>
        </tr>
        </thead>
        <tbody id=\"tbody\"> {# para hacer más dinamico la tabla#}

        </tbody>
    </table>
{%  endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(document).ready(function(){
            \$(\"#tbody\").load(\"{{ path('LlenarTablaCarreras') }}\")
            \$(\"#AgregarCrr\").click(function(){
                \$.ajax({
                    url: \"{{ path('AgregarCrr') }}\",
                    type: \"POST\",
                    data: \$(\".validate\").serialize(),
                    success: function(data){
                        if(\$.trim(data == \"1\"))
                            \$(\"#tbody\").load(\"{{ path(\"LlenarTablaCarreras\") }}\");
                        else
                            alert(\"Problemas al insertar\");
                    }
                });
            });

            \$(\"\")
        });
    </script>
{% endblock %}", "TurnosBundle:Default:adminCarreras.html.twig", "C:\\xampp\\htdocs\\Turnos\\src\\TurnosBundle/Resources/views/Default/adminCarreras.html.twig");
    }
}
