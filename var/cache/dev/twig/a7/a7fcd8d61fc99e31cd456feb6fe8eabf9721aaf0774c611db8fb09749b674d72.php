<?php

/* TurnosBundle:Default:adminCoors.html.twig */
class __TwigTemplate_40a4d007c63031c143149f502eda0d9ec06a3da3e4e6090d2c2ff89c7133b5dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TurnosBundle:Default:adminCoors.html.twig", 1);
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
        $__internal_5ea5597e7bb1951a5e3cd2981992d71d46c542819b77b25c1c59da9bd3c5633c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea5597e7bb1951a5e3cd2981992d71d46c542819b77b25c1c59da9bd3c5633c->enter($__internal_5ea5597e7bb1951a5e3cd2981992d71d46c542819b77b25c1c59da9bd3c5633c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TurnosBundle:Default:adminCoors.html.twig"));

        $__internal_15abd541b6dd75d57c7f2af17d43ee730dd9f468303cce214677fdd29847b900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15abd541b6dd75d57c7f2af17d43ee730dd9f468303cce214677fdd29847b900->enter($__internal_15abd541b6dd75d57c7f2af17d43ee730dd9f468303cce214677fdd29847b900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TurnosBundle:Default:adminCoors.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ea5597e7bb1951a5e3cd2981992d71d46c542819b77b25c1c59da9bd3c5633c->leave($__internal_5ea5597e7bb1951a5e3cd2981992d71d46c542819b77b25c1c59da9bd3c5633c_prof);

        
        $__internal_15abd541b6dd75d57c7f2af17d43ee730dd9f468303cce214677fdd29847b900->leave($__internal_15abd541b6dd75d57c7f2af17d43ee730dd9f468303cce214677fdd29847b900_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_c9ba771a0666ddb98f653147dfdbf8531800be4c013301eb2486776ac7d2fe88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ba771a0666ddb98f653147dfdbf8531800be4c013301eb2486776ac7d2fe88->enter($__internal_c9ba771a0666ddb98f653147dfdbf8531800be4c013301eb2486776ac7d2fe88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_6d26e78e30b577fbde4ffce72a073caefada65aaf5cc835ac44c3aecb81c0524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d26e78e30b577fbde4ffce72a073caefada65aaf5cc835ac44c3aecb81c0524->enter($__internal_6d26e78e30b577fbde4ffce72a073caefada65aaf5cc835ac44c3aecb81c0524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 3
        echo "    ";
        // line 4
        echo "    <div class=\"row\">
        <form class=\"col s10\">
            <div class=\"row\">
                <div class=\"input-field col s6\">
                    <input id=\"nombreCoor\" name=\"nombreCoor\" type=\"text\" class=\"validate\">
                    <label for=\"name\">Nombre</label>
                </div>
                <div class=\"input-field col s2\">
                    <input id=\"idCoor\" name=\"idCoor\" type=\"text\" style=\"visibility: hidden\" class=\"validate\">
                    <label for=\"idCoor\"></label>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s4\">
                    <input id=\"usrCoor\" name=\"usrCoor\" type=\"text\" class=\"validate\">
                    <label for=\"usuario\">Usuario</label>
                </div>
                <div class=\"input-field col s4\">
                    ";
        // line 23
        echo "                    <input type=\"text\" id=\"pwdCoor\" name=\"pwdCoor\" class=\"validate\">
                    <label for=\"password\">Password</label>
                </div>
            </div>
        </form>
    </div>

    <input type=\"button\" id=\"Agregar\" value=\"Agregar\" />
    <input type=\"button\" id=\"Eliminar\" value=\"Eliminar\" />
    <input type=\"button\" id=\"Guardar\" value=\"Guardar\" />

    ";
        // line 43
        echo "
    <table class=\"\">
        <thead>
        <tr>
            <th>Nombre</th>
            ";
        // line 49
        echo "        </tr>
        </thead>
        <tbody id=\"tbody\"> ";
        // line 52
        echo "
        </tbody>
    </table>
";
        
        $__internal_6d26e78e30b577fbde4ffce72a073caefada65aaf5cc835ac44c3aecb81c0524->leave($__internal_6d26e78e30b577fbde4ffce72a073caefada65aaf5cc835ac44c3aecb81c0524_prof);

        
        $__internal_c9ba771a0666ddb98f653147dfdbf8531800be4c013301eb2486776ac7d2fe88->leave($__internal_c9ba771a0666ddb98f653147dfdbf8531800be4c013301eb2486776ac7d2fe88_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd44ab76fc1d5772cb4e1954ce07dfe07cc14ea99cdf141b261c15d0d7017569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd44ab76fc1d5772cb4e1954ce07dfe07cc14ea99cdf141b261c15d0d7017569->enter($__internal_dd44ab76fc1d5772cb4e1954ce07dfe07cc14ea99cdf141b261c15d0d7017569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c1426708faa030eb2b8eaa3783321a1ce22516e2064e14f4ab34621813858c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1426708faa030eb2b8eaa3783321a1ce22516e2064e14f4ab34621813858c4f->enter($__internal_c1426708faa030eb2b8eaa3783321a1ce22516e2064e14f4ab34621813858c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function(){
            \$(\"#tbody\").load(\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LlenarTablaCoordinadores");
        echo "\")
            \$(\"#Agregar\").click(function(){
                \$.ajax({
                    url: \"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Agregar");
        echo "\",
                    type: \"POST\",
                    data: \$(\".validate\").serialize(),
                    success: function(data){
                        if(\$.trim(data == \"1\"))
                                \$(\"#tbody\").load(\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LlenarTablaCoordinadores");
        echo "\");
                        else
                                alert(\"Problemas al insertar\");
                    }
                });
            });
            \$(\"#Guardar\").click(function(){
                \$.ajax({
                    url: \"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Guardar");
        echo "\",
                    type: \"POST\",
                    data: \$(\".validate\").serialize(),
                    success: function (data) {
                        if(\$.trim(data == \"1\"))
                            \$(\"#tbody\").load(\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LlenarTablaCoordinadores");
        echo "\");
                        else
                            alert(\"Problemas al actulizar\");
                    }
                });
            });
            \$(\"#Eliminar\").click(function(){
                \$.ajax({
                    url: \"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Eliminar");
        echo "\",
                    type: \"POST\",
                    data: \$(\".validate\").serialize(),
                    success: function(data){
                        if (\$.trim(data == \"1\"))
                                \$(\"#tbody\").load(\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LlenarTablaCoordinadores");
        echo "\");
                        else
                                alert(\"Problemas al eliminar\");
                    }
                });
            });
        });
    </script>
";
        
        $__internal_c1426708faa030eb2b8eaa3783321a1ce22516e2064e14f4ab34621813858c4f->leave($__internal_c1426708faa030eb2b8eaa3783321a1ce22516e2064e14f4ab34621813858c4f_prof);

        
        $__internal_dd44ab76fc1d5772cb4e1954ce07dfe07cc14ea99cdf141b261c15d0d7017569->leave($__internal_dd44ab76fc1d5772cb4e1954ce07dfe07cc14ea99cdf141b261c15d0d7017569_prof);

    }

    public function getTemplateName()
    {
        return "TurnosBundle:Default:adminCoors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 95,  169 => 90,  158 => 82,  150 => 77,  139 => 69,  131 => 64,  125 => 61,  118 => 58,  109 => 57,  96 => 52,  92 => 49,  85 => 43,  72 => 23,  52 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
                    <input id=\"nombreCoor\" name=\"nombreCoor\" type=\"text\" class=\"validate\">
                    <label for=\"name\">Nombre</label>
                </div>
                <div class=\"input-field col s2\">
                    <input id=\"idCoor\" name=\"idCoor\" type=\"text\" style=\"visibility: hidden\" class=\"validate\">
                    <label for=\"idCoor\"></label>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s4\">
                    <input id=\"usrCoor\" name=\"usrCoor\" type=\"text\" class=\"validate\">
                    <label for=\"usuario\">Usuario</label>
                </div>
                <div class=\"input-field col s4\">
                    {#<input id=\"pwdCoor\" type=\"password\" class=\"validate\">#}
                    <input type=\"text\" id=\"pwdCoor\" name=\"pwdCoor\" class=\"validate\">
                    <label for=\"password\">Password</label>
                </div>
            </div>
        </form>
    </div>

    <input type=\"button\" id=\"Agregar\" value=\"Agregar\" />
    <input type=\"button\" id=\"Eliminar\" value=\"Eliminar\" />
    <input type=\"button\" id=\"Guardar\" value=\"Guardar\" />

    {#<form action=\"\">
        <input type=\"text\" id=\"idCoor\" name=\"idCoor\" class=\"validate\">
        <input type=\"text\" id=\"nombreCoor\" name=\"nombreCoor\" class=\"validate\">
        <input type=\"text\" id=\"usrCoor\" name=\"usrCoor\" class=\"validate\">
        <input type=\"text\" id=\"pwdCoor\" name=\"pwdCoor\" class=\"validate\">
        <input type=\"button\" id=\"Agregar\" value=\"Agregar\" />
        <input type=\"button\" id=\"Eliminar\" value=\"Eliminar\" />
        <input type=\"button\" id=\"Guardar\" value=\"Guardar\" />
    </form>#}

    <table class=\"\">
        <thead>
        <tr>
            <th>Nombre</th>
            {#<th>Carrera</th>#}
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
            \$(\"#tbody\").load(\"{{ path('LlenarTablaCoordinadores') }}\")
            \$(\"#Agregar\").click(function(){
                \$.ajax({
                    url: \"{{ path('Agregar') }}\",
                    type: \"POST\",
                    data: \$(\".validate\").serialize(),
                    success: function(data){
                        if(\$.trim(data == \"1\"))
                                \$(\"#tbody\").load(\"{{ path(\"LlenarTablaCoordinadores\") }}\");
                        else
                                alert(\"Problemas al insertar\");
                    }
                });
            });
            \$(\"#Guardar\").click(function(){
                \$.ajax({
                    url: \"{{ path('Guardar') }}\",
                    type: \"POST\",
                    data: \$(\".validate\").serialize(),
                    success: function (data) {
                        if(\$.trim(data == \"1\"))
                            \$(\"#tbody\").load(\"{{ path(\"LlenarTablaCoordinadores\") }}\");
                        else
                            alert(\"Problemas al actulizar\");
                    }
                });
            });
            \$(\"#Eliminar\").click(function(){
                \$.ajax({
                    url: \"{{ path('Eliminar') }}\",
                    type: \"POST\",
                    data: \$(\".validate\").serialize(),
                    success: function(data){
                        if (\$.trim(data == \"1\"))
                                \$(\"#tbody\").load(\"{{ path(\"LlenarTablaCoordinadores\") }}\");
                        else
                                alert(\"Problemas al eliminar\");
                    }
                });
            });
        });
    </script>
{% endblock %}", "TurnosBundle:Default:adminCoors.html.twig", "C:\\xampp\\htdocs\\Turnos\\src\\TurnosBundle/Resources/views/Default/adminCoors.html.twig");
    }
}
