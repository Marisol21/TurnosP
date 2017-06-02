<?php

/* TurnosBundle:Default:loginAdmin.html.twig */
class __TwigTemplate_124485ee449c1d97452d1681e8fb90bcd787d5d20b7e97137f195876078bef89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21afba820e21d65b18b3845f8672cd4c2b27a2b5e6f938de0886f119cb6957b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21afba820e21d65b18b3845f8672cd4c2b27a2b5e6f938de0886f119cb6957b9->enter($__internal_21afba820e21d65b18b3845f8672cd4c2b27a2b5e6f938de0886f119cb6957b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TurnosBundle:Default:loginAdmin.html.twig"));

        $__internal_372b2c12f7a22acc1a1888a24fc2a4cc8936cd28691e305f4d95f2128f7be705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372b2c12f7a22acc1a1888a24fc2a4cc8936cd28691e305f4d95f2128f7be705->enter($__internal_372b2c12f7a22acc1a1888a24fc2a4cc8936cd28691e305f4d95f2128f7be705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TurnosBundle:Default:loginAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
    ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "    <style>
        .container{
            margin: 0 auto;
            max-width: 1080px;
            width: 30%;
        }
    </style>

    ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "</body>i
</html>";
        
        $__internal_21afba820e21d65b18b3845f8672cd4c2b27a2b5e6f938de0886f119cb6957b9->leave($__internal_21afba820e21d65b18b3845f8672cd4c2b27a2b5e6f938de0886f119cb6957b9_prof);

        
        $__internal_372b2c12f7a22acc1a1888a24fc2a4cc8936cd28691e305f4d95f2128f7be705->leave($__internal_372b2c12f7a22acc1a1888a24fc2a4cc8936cd28691e305f4d95f2128f7be705_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_95100660856099ae1b9e1e343b9c8608aff50ae3c090342917e8582fccde21c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95100660856099ae1b9e1e343b9c8608aff50ae3c090342917e8582fccde21c7->enter($__internal_95100660856099ae1b9e1e343b9c8608aff50ae3c090342917e8582fccde21c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_476ae5828c0e4911f895a2c6c0be723d649a05fab011d97cef1124d4730929ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476ae5828c0e4911f895a2c6c0be723d649a05fab011d97cef1124d4730929ca->enter($__internal_476ae5828c0e4911f895a2c6c0be723d649a05fab011d97cef1124d4730929ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administrador";
        
        $__internal_476ae5828c0e4911f895a2c6c0be723d649a05fab011d97cef1124d4730929ca->leave($__internal_476ae5828c0e4911f895a2c6c0be723d649a05fab011d97cef1124d4730929ca_prof);

        
        $__internal_95100660856099ae1b9e1e343b9c8608aff50ae3c090342917e8582fccde21c7->leave($__internal_95100660856099ae1b9e1e343b9c8608aff50ae3c090342917e8582fccde21c7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a0973f24cb1cf12a67082ad90ca52371431a31fbd39194c625d02946bd07c7fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0973f24cb1cf12a67082ad90ca52371431a31fbd39194c625d02946bd07c7fa->enter($__internal_a0973f24cb1cf12a67082ad90ca52371431a31fbd39194c625d02946bd07c7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_946866d65406fee5c148197f3a629c2deda9d6b40f6280b026bf94aa8e9bcae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946866d65406fee5c148197f3a629c2deda9d6b40f6280b026bf94aa8e9bcae3->enter($__internal_946866d65406fee5c148197f3a629c2deda9d6b40f6280b026bf94aa8e9bcae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/icon.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_946866d65406fee5c148197f3a629c2deda9d6b40f6280b026bf94aa8e9bcae3->leave($__internal_946866d65406fee5c148197f3a629c2deda9d6b40f6280b026bf94aa8e9bcae3_prof);

        
        $__internal_a0973f24cb1cf12a67082ad90ca52371431a31fbd39194c625d02946bd07c7fa->leave($__internal_a0973f24cb1cf12a67082ad90ca52371431a31fbd39194c625d02946bd07c7fa_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_26acee3a85de1bbed9e50041f0a73617c5def0e0da3d8c48fc9a83b0ca6a72e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26acee3a85de1bbed9e50041f0a73617c5def0e0da3d8c48fc9a83b0ca6a72e0->enter($__internal_26acee3a85de1bbed9e50041f0a73617c5def0e0da3d8c48fc9a83b0ca6a72e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89c545a1ff3df438c434f450b9fde55948197f4baf1fb9c94fec19b71fc4fec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c545a1ff3df438c434f450b9fde55948197f4baf1fb9c94fec19b71fc4fec3->enter($__internal_89c545a1ff3df438c434f450b9fde55948197f4baf1fb9c94fec19b71fc4fec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "        <div class=\"container\">
            <table>
                <tr>
                   <h2 align=\"center\">Login</h2>
                </tr>
                <td>
                    <tr>
                        <div class=\"input-field col s3\">
                            <input id=\"usuarioAdmin\" name=\"usuarioAdmin\" type=\"text\" class=\"validate\" />
                            <label for=\"usuario\">Usuario</label>
                        </div>
                    </tr>
                    <tr>
                        <div class=\"input-field col s3\">
                            <input type=\"password\" id=\"contrasenaAdmin\" name=\"contrasenaAdmin\" type=\"text\" class=\"validate\" />
                            <label for=\"contrasena\">Contraseña</label>
                        </div>
                    </tr>
                    <tr>
                        <div class=\"form-group\" align=\"center\">
                            <input type=\"button\" id=\"iniciarAdmin\" name=\"iniciarAdmin\" value=\"Ingresar\"/>
                        </div>
                    </tr>
                </td>
            </table>
        </div>
    ";
        
        $__internal_89c545a1ff3df438c434f450b9fde55948197f4baf1fb9c94fec19b71fc4fec3->leave($__internal_89c545a1ff3df438c434f450b9fde55948197f4baf1fb9c94fec19b71fc4fec3_prof);

        
        $__internal_26acee3a85de1bbed9e50041f0a73617c5def0e0da3d8c48fc9a83b0ca6a72e0->leave($__internal_26acee3a85de1bbed9e50041f0a73617c5def0e0da3d8c48fc9a83b0ca6a72e0_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f08253c0e77c69612c9bb359b5e60a4c1835378c2502ef1feed1d2a93cf44119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08253c0e77c69612c9bb359b5e60a4c1835378c2502ef1feed1d2a93cf44119->enter($__internal_f08253c0e77c69612c9bb359b5e60a4c1835378c2502ef1feed1d2a93cf44119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c848f8deb72d689e8aa9d1b6ec6e6f441f7af112893df12ee5fcb19615db0e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c848f8deb72d689e8aa9d1b6ec6e6f441f7af112893df12ee5fcb19615db0e53->enter($__internal_c848f8deb72d689e8aa9d1b6ec6e6f441f7af112893df12ee5fcb19615db0e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.0.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.min.js"), "html", null, true);
        echo "\"></script>
        <script>
            //jQuery(document).ready(function(\$){           OTRA FORMA DE COLOCAR
            \$(document).ready(function(){
                    \$(\"#iniciarAdmin\").click(function () {
                        if(\$(\"#usuarioAdmin\").val() == \"\"){
                            alert(\"Usuario es requerido\");
                            }
                        else if(\$(\"#contrasenaAdmin\").val() == \"\"){
                              alert(\"Contraseña requerida\");
                        }
                        else {
                            \$.ajax({
                                url: \"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("loginAdmin");
        echo "\",
                                type: \"POST\",
                                data: \$(\".validate\").serialize(),
                                success: function (data) {
                                    if (\$.trim(data) == \"1\")
                                            document.location.href = '";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AdminCoord");
        echo "'
                                    else
                                            alert(\"Usuario o contraseña incorrecto\");
                                }
                            });
                        }
                    });
            });
            </script>
    ";
        
        $__internal_c848f8deb72d689e8aa9d1b6ec6e6f441f7af112893df12ee5fcb19615db0e53->leave($__internal_c848f8deb72d689e8aa9d1b6ec6e6f441f7af112893df12ee5fcb19615db0e53_prof);

        
        $__internal_f08253c0e77c69612c9bb359b5e60a4c1835378c2502ef1feed1d2a93cf44119->leave($__internal_f08253c0e77c69612c9bb359b5e60a4c1835378c2502ef1feed1d2a93cf44119_prof);

    }

    public function getTemplateName()
    {
        return "TurnosBundle:Default:loginAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 70,  193 => 65,  177 => 52,  172 => 51,  163 => 50,  127 => 15,  118 => 14,  106 => 8,  101 => 7,  92 => 6,  74 => 5,  63 => 80,  61 => 50,  51 => 42,  49 => 14,  41 => 10,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Administrador{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/materialize.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/icon.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body>
    {% block body %}
        <div class=\"container\">
            <table>
                <tr>
                   <h2 align=\"center\">Login</h2>
                </tr>
                <td>
                    <tr>
                        <div class=\"input-field col s3\">
                            <input id=\"usuarioAdmin\" name=\"usuarioAdmin\" type=\"text\" class=\"validate\" />
                            <label for=\"usuario\">Usuario</label>
                        </div>
                    </tr>
                    <tr>
                        <div class=\"input-field col s3\">
                            <input type=\"password\" id=\"contrasenaAdmin\" name=\"contrasenaAdmin\" type=\"text\" class=\"validate\" />
                            <label for=\"contrasena\">Contraseña</label>
                        </div>
                    </tr>
                    <tr>
                        <div class=\"form-group\" align=\"center\">
                            <input type=\"button\" id=\"iniciarAdmin\" name=\"iniciarAdmin\" value=\"Ingresar\"/>
                        </div>
                    </tr>
                </td>
            </table>
        </div>
    {% endblock %}
    <style>
        .container{
            margin: 0 auto;
            max-width: 1080px;
            width: 30%;
        }
    </style>

    {% block javascripts %}
        <script src=\"{{ asset('js/jquery-3.1.0.js') }}\"></script>
        <script src=\"{{ asset('js/materialize.min.js') }}\"></script>
        <script>
            //jQuery(document).ready(function(\$){           OTRA FORMA DE COLOCAR
            \$(document).ready(function(){
                    \$(\"#iniciarAdmin\").click(function () {
                        if(\$(\"#usuarioAdmin\").val() == \"\"){
                            alert(\"Usuario es requerido\");
                            }
                        else if(\$(\"#contrasenaAdmin\").val() == \"\"){
                              alert(\"Contraseña requerida\");
                        }
                        else {
                            \$.ajax({
                                url: \"{{ path('loginAdmin') }}\",
                                type: \"POST\",
                                data: \$(\".validate\").serialize(),
                                success: function (data) {
                                    if (\$.trim(data) == \"1\")
                                            document.location.href = '{{ path('AdminCoord') }}'
                                    else
                                            alert(\"Usuario o contraseña incorrecto\");
                                }
                            });
                        }
                    });
            });
            </script>
    {% endblock %}
</body>i
</html>", "TurnosBundle:Default:loginAdmin.html.twig", "C:\\xampp\\htdocs\\Turnos\\src\\TurnosBundle/Resources/views/Default/loginAdmin.html.twig");
    }
}
