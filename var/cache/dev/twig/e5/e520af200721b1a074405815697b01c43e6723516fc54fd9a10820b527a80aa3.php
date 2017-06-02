<?php

/* ::base.html.twig */
class __TwigTemplate_ed670b1aee3e66b8ce31e5932f55a332c35f0ac82419849f8f18b38bb46e527f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_713677cd0f4e328e08c27c3f2300b4dcdd609fe23331ff666997f6aad205f7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_713677cd0f4e328e08c27c3f2300b4dcdd609fe23331ff666997f6aad205f7c6->enter($__internal_713677cd0f4e328e08c27c3f2300b4dcdd609fe23331ff666997f6aad205f7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d6ab90360bc8d7649a9d44654fba76dea461540abd3131003dda8364c61fd146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ab90360bc8d7649a9d44654fba76dea461540abd3131003dda8364c61fd146->enter($__internal_d6ab90360bc8d7649a9d44654fba76dea461540abd3131003dda8364c61fd146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
    <nav>
        <div class=\"nav-wrapper\">
            <a href=\"#\" class=\"brand-logo\">Logo</a>
            <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                <li><a href=\"AdminCoord\">Coordinadores</a></li>
                <li><a href=\"\">Alumnos</a></li>
                <li><a href=\"AdminCarr\">Carreras</a></li>
                <li><a href=\"\">Cerrar Sesión</a></li>
            </ul>
        </div>
    </nav>
    <body>
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>
";
        
        $__internal_713677cd0f4e328e08c27c3f2300b4dcdd609fe23331ff666997f6aad205f7c6->leave($__internal_713677cd0f4e328e08c27c3f2300b4dcdd609fe23331ff666997f6aad205f7c6_prof);

        
        $__internal_d6ab90360bc8d7649a9d44654fba76dea461540abd3131003dda8364c61fd146->leave($__internal_d6ab90360bc8d7649a9d44654fba76dea461540abd3131003dda8364c61fd146_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ab958605bc16d08b73fd27f9b16021ed28742c2e6aef9bc4c675ca6d5298af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab958605bc16d08b73fd27f9b16021ed28742c2e6aef9bc4c675ca6d5298af5->enter($__internal_3ab958605bc16d08b73fd27f9b16021ed28742c2e6aef9bc4c675ca6d5298af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f51f646a4424ea56072d21c91a898bf26e1c3f28fedc6468d0c603ac72b868ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51f646a4424ea56072d21c91a898bf26e1c3f28fedc6468d0c603ac72b868ee->enter($__internal_f51f646a4424ea56072d21c91a898bf26e1c3f28fedc6468d0c603ac72b868ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "¡Bienvenido!";
        
        $__internal_f51f646a4424ea56072d21c91a898bf26e1c3f28fedc6468d0c603ac72b868ee->leave($__internal_f51f646a4424ea56072d21c91a898bf26e1c3f28fedc6468d0c603ac72b868ee_prof);

        
        $__internal_3ab958605bc16d08b73fd27f9b16021ed28742c2e6aef9bc4c675ca6d5298af5->leave($__internal_3ab958605bc16d08b73fd27f9b16021ed28742c2e6aef9bc4c675ca6d5298af5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_375ed342cae2300cfdad33a424a3ccc5f8c3079a19de0f2533dccdf6ba4cedf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_375ed342cae2300cfdad33a424a3ccc5f8c3079a19de0f2533dccdf6ba4cedf9->enter($__internal_375ed342cae2300cfdad33a424a3ccc5f8c3079a19de0f2533dccdf6ba4cedf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9060092f49d31f2192aa1b6869acadd7b2b8d80dfec5f24569653d243dd83840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9060092f49d31f2192aa1b6869acadd7b2b8d80dfec5f24569653d243dd83840->enter($__internal_9060092f49d31f2192aa1b6869acadd7b2b8d80dfec5f24569653d243dd83840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/icon.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_9060092f49d31f2192aa1b6869acadd7b2b8d80dfec5f24569653d243dd83840->leave($__internal_9060092f49d31f2192aa1b6869acadd7b2b8d80dfec5f24569653d243dd83840_prof);

        
        $__internal_375ed342cae2300cfdad33a424a3ccc5f8c3079a19de0f2533dccdf6ba4cedf9->leave($__internal_375ed342cae2300cfdad33a424a3ccc5f8c3079a19de0f2533dccdf6ba4cedf9_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_b48ddd5f2eacfa6b07d5fbe76841d608b4e1b30be5f653decfbda810f3b200a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b48ddd5f2eacfa6b07d5fbe76841d608b4e1b30be5f653decfbda810f3b200a0->enter($__internal_b48ddd5f2eacfa6b07d5fbe76841d608b4e1b30be5f653decfbda810f3b200a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba592a4c3272204754a517a4ea2756c648e0b9d054b5e99bfb872eb59610d181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba592a4c3272204754a517a4ea2756c648e0b9d054b5e99bfb872eb59610d181->enter($__internal_ba592a4c3272204754a517a4ea2756c648e0b9d054b5e99bfb872eb59610d181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "            <div id=\"contenido\">
                ";
        // line 26
        $this->displayBlock('contenido', $context, $blocks);
        // line 29
        echo "            </div>
        ";
        
        $__internal_ba592a4c3272204754a517a4ea2756c648e0b9d054b5e99bfb872eb59610d181->leave($__internal_ba592a4c3272204754a517a4ea2756c648e0b9d054b5e99bfb872eb59610d181_prof);

        
        $__internal_b48ddd5f2eacfa6b07d5fbe76841d608b4e1b30be5f653decfbda810f3b200a0->leave($__internal_b48ddd5f2eacfa6b07d5fbe76841d608b4e1b30be5f653decfbda810f3b200a0_prof);

    }

    // line 26
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_854434b13fe2e59265d0f6ccb7e7fa2c2bde65b3f58e86a3a846e0ba9db6fe51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854434b13fe2e59265d0f6ccb7e7fa2c2bde65b3f58e86a3a846e0ba9db6fe51->enter($__internal_854434b13fe2e59265d0f6ccb7e7fa2c2bde65b3f58e86a3a846e0ba9db6fe51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_535a4d31aaf324d5ddcc2fea4f63261301fb19a024dd00ebb547c89b226aa94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535a4d31aaf324d5ddcc2fea4f63261301fb19a024dd00ebb547c89b226aa94e->enter($__internal_535a4d31aaf324d5ddcc2fea4f63261301fb19a024dd00ebb547c89b226aa94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 27
        echo "
                ";
        
        $__internal_535a4d31aaf324d5ddcc2fea4f63261301fb19a024dd00ebb547c89b226aa94e->leave($__internal_535a4d31aaf324d5ddcc2fea4f63261301fb19a024dd00ebb547c89b226aa94e_prof);

        
        $__internal_854434b13fe2e59265d0f6ccb7e7fa2c2bde65b3f58e86a3a846e0ba9db6fe51->leave($__internal_854434b13fe2e59265d0f6ccb7e7fa2c2bde65b3f58e86a3a846e0ba9db6fe51_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d9ad0847a36e3036c17040beae5464f42623aa19736e881ba2fe89127380054f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ad0847a36e3036c17040beae5464f42623aa19736e881ba2fe89127380054f->enter($__internal_d9ad0847a36e3036c17040beae5464f42623aa19736e881ba2fe89127380054f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a5b933dfd34aa23437b8b04673f9f8991b45279f58ba24ca2132799147a9ca94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b933dfd34aa23437b8b04673f9f8991b45279f58ba24ca2132799147a9ca94->enter($__internal_a5b933dfd34aa23437b8b04673f9f8991b45279f58ba24ca2132799147a9ca94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.0.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_a5b933dfd34aa23437b8b04673f9f8991b45279f58ba24ca2132799147a9ca94->leave($__internal_a5b933dfd34aa23437b8b04673f9f8991b45279f58ba24ca2132799147a9ca94_prof);

        
        $__internal_d9ad0847a36e3036c17040beae5464f42623aa19736e881ba2fe89127380054f->leave($__internal_d9ad0847a36e3036c17040beae5464f42623aa19736e881ba2fe89127380054f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 33,  175 => 32,  166 => 31,  155 => 27,  146 => 26,  135 => 29,  133 => 26,  130 => 25,  121 => 24,  109 => 8,  104 => 7,  95 => 6,  77 => 5,  65 => 35,  62 => 31,  60 => 24,  42 => 10,  40 => 6,  36 => 5,  30 => 1,);
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
        <title>{% block title %}¡Bienvenido!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/materialize.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/icon.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <nav>
        <div class=\"nav-wrapper\">
            <a href=\"#\" class=\"brand-logo\">Logo</a>
            <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                <li><a href=\"AdminCoord\">Coordinadores</a></li>
                <li><a href=\"\">Alumnos</a></li>
                <li><a href=\"AdminCarr\">Carreras</a></li>
                <li><a href=\"\">Cerrar Sesión</a></li>
            </ul>
        </div>
    </nav>
    <body>
        {% block body %}
            <div id=\"contenido\">
                {%  block contenido %}

                {%  endblock %}
            </div>
        {% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-3.1.0.js') }}\"></script>
            <script src=\"{{ asset('js/materialize.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\Turnos\\app/Resources\\views/base.html.twig");
    }
}
