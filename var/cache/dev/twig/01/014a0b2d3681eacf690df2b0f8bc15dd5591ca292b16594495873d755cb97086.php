<?php

/* TurnosBundle:Default:TablaCarreras.html.twig */
class __TwigTemplate_5bd00c638d30f2cd624159114a886844745e84192d955407491e515dc29c8f7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8a6951626b8479e01d51630d527189200f7b0e4193755cdecd4e97be3422100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a6951626b8479e01d51630d527189200f7b0e4193755cdecd4e97be3422100->enter($__internal_c8a6951626b8479e01d51630d527189200f7b0e4193755cdecd4e97be3422100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TurnosBundle:Default:TablaCarreras.html.twig"));

        $__internal_a59280eb1d0eb32117ee8c4688a70c729fdcf62893dcda5be3d46af51577a444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59280eb1d0eb32117ee8c4688a70c729fdcf62893dcda5be3d46af51577a444->enter($__internal_a59280eb1d0eb32117ee8c4688a70c729fdcf62893dcda5be3d46af51577a444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TurnosBundle:Default:TablaCarreras.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Carreras"]) ? $context["Carreras"] : $this->getContext($context, "Carreras")));
        foreach ($context['_seq'] as $context["_key"] => $context["carrera"]) {
            // line 2
            echo "    <tr>
        <td>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["carrera"], "NomCarrera", array()), "html", null, true);
            echo "</td>
        <td><input id=\"Modificar\" name=\"Modificar\" type=\"button\" data-id=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["carrera"], "idCarrera", array()), "html", null, true);
            echo "\" data-nombreC=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carrera"], "NomCarrera", array()), "html", null, true);
            echo "\"
                   data-nt=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["carrera"], "NoTurno", array()), "html", null, true);
            echo "\" data-idC=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carrera"], "idCoord", array()), "html", null, true);
            echo "\" value=\"Modificar\"></td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carrera'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_c8a6951626b8479e01d51630d527189200f7b0e4193755cdecd4e97be3422100->leave($__internal_c8a6951626b8479e01d51630d527189200f7b0e4193755cdecd4e97be3422100_prof);

        
        $__internal_a59280eb1d0eb32117ee8c4688a70c729fdcf62893dcda5be3d46af51577a444->leave($__internal_a59280eb1d0eb32117ee8c4688a70c729fdcf62893dcda5be3d46af51577a444_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31361716898eb035ce9bb9b71cc3d872ef6e1c1dcb1201f5c1be15ba7ae632a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31361716898eb035ce9bb9b71cc3d872ef6e1c1dcb1201f5c1be15ba7ae632a4->enter($__internal_31361716898eb035ce9bb9b71cc3d872ef6e1c1dcb1201f5c1be15ba7ae632a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0263818f6f0adeffcc1d8e2303147a4d22e4950b7f0ecd45f1d186879e614a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0263818f6f0adeffcc1d8e2303147a4d22e4950b7f0ecd45f1d186879e614a59->enter($__internal_0263818f6f0adeffcc1d8e2303147a4d22e4950b7f0ecd45f1d186879e614a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "    <script>
        \$(\"input#Modificar\").click(function(){
            alert(\$(this).data('id'));
            \$(\"#idCa\").val(\$(this).data('id'));
            \$(\"#nombreCarrera\").val(\$(this).data('nombreC'));
            \$(\"#notur\").val(\$(this).data('nt'));
            \$(\"#idco\").val(\$(this).data('idC'));
        });
    </script>
";
        
        $__internal_0263818f6f0adeffcc1d8e2303147a4d22e4950b7f0ecd45f1d186879e614a59->leave($__internal_0263818f6f0adeffcc1d8e2303147a4d22e4950b7f0ecd45f1d186879e614a59_prof);

        
        $__internal_31361716898eb035ce9bb9b71cc3d872ef6e1c1dcb1201f5c1be15ba7ae632a4->leave($__internal_31361716898eb035ce9bb9b71cc3d872ef6e1c1dcb1201f5c1be15ba7ae632a4_prof);

    }

    public function getTemplateName()
    {
        return "TurnosBundle:Default:TablaCarreras.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 10,  57 => 9,  54 => 8,  43 => 5,  37 => 4,  33 => 3,  30 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for carrera in Carreras %}
    <tr>
        <td>{{ carrera.NomCarrera }}</td>
        <td><input id=\"Modificar\" name=\"Modificar\" type=\"button\" data-id=\"{{ carrera.idCarrera }}\" data-nombreC=\"{{ carrera.NomCarrera }}\"
                   data-nt=\"{{ carrera.NoTurno }}\" data-idC=\"{{ carrera.idCoord }}\" value=\"Modificar\"></td>
    </tr>
{% endfor %}

{% block javascripts %}
    <script>
        \$(\"input#Modificar\").click(function(){
            alert(\$(this).data('id'));
            \$(\"#idCa\").val(\$(this).data('id'));
            \$(\"#nombreCarrera\").val(\$(this).data('nombreC'));
            \$(\"#notur\").val(\$(this).data('nt'));
            \$(\"#idco\").val(\$(this).data('idC'));
        });
    </script>
{% endblock%}", "TurnosBundle:Default:TablaCarreras.html.twig", "C:\\xampp\\htdocs\\Turnos\\src\\TurnosBundle/Resources/views/Default/TablaCarreras.html.twig");
    }
}
