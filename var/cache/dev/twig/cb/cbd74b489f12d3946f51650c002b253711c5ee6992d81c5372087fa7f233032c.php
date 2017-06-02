<?php

/* TurnosBundle:Default:TablaCoordinadores.html.twig */
class __TwigTemplate_97ed1941fc8562176ee2ce05d329adbd7d79d0c54cd9250146726cbfd183946d extends Twig_Template
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
        $__internal_05bd67a10e4e18d18cbcd4fa4e670a7f595a86054823bbf1e8e19fe6198f2903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05bd67a10e4e18d18cbcd4fa4e670a7f595a86054823bbf1e8e19fe6198f2903->enter($__internal_05bd67a10e4e18d18cbcd4fa4e670a7f595a86054823bbf1e8e19fe6198f2903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TurnosBundle:Default:TablaCoordinadores.html.twig"));

        $__internal_e0f80dd10e34f45c4c5208df5d036d9697a770ed068c7765b745e5fdd500c3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f80dd10e34f45c4c5208df5d036d9697a770ed068c7765b745e5fdd500c3f9->enter($__internal_e0f80dd10e34f45c4c5208df5d036d9697a770ed068c7765b745e5fdd500c3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TurnosBundle:Default:TablaCoordinadores.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Coordinadores"]) ? $context["Coordinadores"] : $this->getContext($context, "Coordinadores")));
        foreach ($context['_seq'] as $context["_key"] => $context["coordinador"]) {
            // line 2
            echo "    <tr>
        <td>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["coordinador"], "NomCoord", array()), "html", null, true);
            echo "</td>
        <td><input id=\"Modificar\" name=\"Modificar\" type=\"button\" data-id=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["coordinador"], "idCoord", array()), "html", null, true);
            echo "\" data-nombre=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coordinador"], "NomCoord", array()), "html", null, true);
            echo "\"
                   data-usr=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["coordinador"], "UsrCoord", array()), "html", null, true);
            echo "\" data-psw=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coordinador"], "PwdCoord", array()), "html", null, true);
            echo "\" value=\"Modificar\"></td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coordinador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_05bd67a10e4e18d18cbcd4fa4e670a7f595a86054823bbf1e8e19fe6198f2903->leave($__internal_05bd67a10e4e18d18cbcd4fa4e670a7f595a86054823bbf1e8e19fe6198f2903_prof);

        
        $__internal_e0f80dd10e34f45c4c5208df5d036d9697a770ed068c7765b745e5fdd500c3f9->leave($__internal_e0f80dd10e34f45c4c5208df5d036d9697a770ed068c7765b745e5fdd500c3f9_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc6980b15d152929c0fda72e51987b9d9db26af1341f48f5cef5ebba75e70015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6980b15d152929c0fda72e51987b9d9db26af1341f48f5cef5ebba75e70015->enter($__internal_fc6980b15d152929c0fda72e51987b9d9db26af1341f48f5cef5ebba75e70015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5c6b460deb1cacbb05eedea10fb32313ff2eab21f7d8a425ead2fc92e728c0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6b460deb1cacbb05eedea10fb32313ff2eab21f7d8a425ead2fc92e728c0e4->enter($__internal_5c6b460deb1cacbb05eedea10fb32313ff2eab21f7d8a425ead2fc92e728c0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "    <script>
        \$(\"input#Modificar\").click(function(){
            alert(\$(this).data('id'));
            \$(\"#idCoor\").val(\$(this).data('id'));
            \$(\"#nombreCoor\").val(\$(this).data('nombre'));
            \$(\"#usrCoor\").val(\$(this).data('usr'));
            \$(\"#pwdCoor\").val(\$(this).data('psw'));
        });
    </script>
";
        
        $__internal_5c6b460deb1cacbb05eedea10fb32313ff2eab21f7d8a425ead2fc92e728c0e4->leave($__internal_5c6b460deb1cacbb05eedea10fb32313ff2eab21f7d8a425ead2fc92e728c0e4_prof);

        
        $__internal_fc6980b15d152929c0fda72e51987b9d9db26af1341f48f5cef5ebba75e70015->leave($__internal_fc6980b15d152929c0fda72e51987b9d9db26af1341f48f5cef5ebba75e70015_prof);

    }

    public function getTemplateName()
    {
        return "TurnosBundle:Default:TablaCoordinadores.html.twig";
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
        return new Twig_Source("{% for coordinador in Coordinadores %}
    <tr>
        <td>{{ coordinador.NomCoord }}</td>
        <td><input id=\"Modificar\" name=\"Modificar\" type=\"button\" data-id=\"{{ coordinador.idCoord }}\" data-nombre=\"{{ coordinador.NomCoord }}\"
                   data-usr=\"{{ coordinador.UsrCoord }}\" data-psw=\"{{ coordinador.PwdCoord }}\" value=\"Modificar\"></td>
    </tr>
{% endfor %}

{% block javascripts %}
    <script>
        \$(\"input#Modificar\").click(function(){
            alert(\$(this).data('id'));
            \$(\"#idCoor\").val(\$(this).data('id'));
            \$(\"#nombreCoor\").val(\$(this).data('nombre'));
            \$(\"#usrCoor\").val(\$(this).data('usr'));
            \$(\"#pwdCoor\").val(\$(this).data('psw'));
        });
    </script>
{% endblock%}", "TurnosBundle:Default:TablaCoordinadores.html.twig", "C:\\xampp\\htdocs\\Turnos\\src\\TurnosBundle/Resources/views/Default/TablaCoordinadores.html.twig");
    }
}
