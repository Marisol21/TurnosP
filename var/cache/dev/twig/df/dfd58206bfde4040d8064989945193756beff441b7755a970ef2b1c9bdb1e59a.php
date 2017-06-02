<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3e0bfdb580122853f0c093e0ea8c0588d47a395d8407bf38e328e615b90ae81f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_270017afc116c14b2d519e77eaf94b54c55a1344c778b3d282a6f7fc1f31a54e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270017afc116c14b2d519e77eaf94b54c55a1344c778b3d282a6f7fc1f31a54e->enter($__internal_270017afc116c14b2d519e77eaf94b54c55a1344c778b3d282a6f7fc1f31a54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_623e773b540b4ab0575b93000dec8bc62183c4ae63c75402ec32fd29cd9588a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623e773b540b4ab0575b93000dec8bc62183c4ae63c75402ec32fd29cd9588a1->enter($__internal_623e773b540b4ab0575b93000dec8bc62183c4ae63c75402ec32fd29cd9588a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_270017afc116c14b2d519e77eaf94b54c55a1344c778b3d282a6f7fc1f31a54e->leave($__internal_270017afc116c14b2d519e77eaf94b54c55a1344c778b3d282a6f7fc1f31a54e_prof);

        
        $__internal_623e773b540b4ab0575b93000dec8bc62183c4ae63c75402ec32fd29cd9588a1->leave($__internal_623e773b540b4ab0575b93000dec8bc62183c4ae63c75402ec32fd29cd9588a1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d36a6937594c3c95c1c563a44cc056fd5c7bbdf1fa61f206593d2c4218bc156a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36a6937594c3c95c1c563a44cc056fd5c7bbdf1fa61f206593d2c4218bc156a->enter($__internal_d36a6937594c3c95c1c563a44cc056fd5c7bbdf1fa61f206593d2c4218bc156a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7637ae3de2dd0f25b403ccfb386f572eb1a3ca740ebfd293b25a04103ce106d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7637ae3de2dd0f25b403ccfb386f572eb1a3ca740ebfd293b25a04103ce106d5->enter($__internal_7637ae3de2dd0f25b403ccfb386f572eb1a3ca740ebfd293b25a04103ce106d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7637ae3de2dd0f25b403ccfb386f572eb1a3ca740ebfd293b25a04103ce106d5->leave($__internal_7637ae3de2dd0f25b403ccfb386f572eb1a3ca740ebfd293b25a04103ce106d5_prof);

        
        $__internal_d36a6937594c3c95c1c563a44cc056fd5c7bbdf1fa61f206593d2c4218bc156a->leave($__internal_d36a6937594c3c95c1c563a44cc056fd5c7bbdf1fa61f206593d2c4218bc156a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e092bb8dc142a6626f39b733954411695ada9b157fa13a80c0b497ba5a826bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e092bb8dc142a6626f39b733954411695ada9b157fa13a80c0b497ba5a826bbd->enter($__internal_e092bb8dc142a6626f39b733954411695ada9b157fa13a80c0b497ba5a826bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_59f2627c6a88c554e7d88305239110f4c7fafb2501e646d5ae171628c0bf3d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f2627c6a88c554e7d88305239110f4c7fafb2501e646d5ae171628c0bf3d24->enter($__internal_59f2627c6a88c554e7d88305239110f4c7fafb2501e646d5ae171628c0bf3d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_59f2627c6a88c554e7d88305239110f4c7fafb2501e646d5ae171628c0bf3d24->leave($__internal_59f2627c6a88c554e7d88305239110f4c7fafb2501e646d5ae171628c0bf3d24_prof);

        
        $__internal_e092bb8dc142a6626f39b733954411695ada9b157fa13a80c0b497ba5a826bbd->leave($__internal_e092bb8dc142a6626f39b733954411695ada9b157fa13a80c0b497ba5a826bbd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c0a501b0943d7b71aadcdbd8e903de40593df478d86ce22d86aece6e844809b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0a501b0943d7b71aadcdbd8e903de40593df478d86ce22d86aece6e844809b->enter($__internal_8c0a501b0943d7b71aadcdbd8e903de40593df478d86ce22d86aece6e844809b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d31001b0376ec6f638e807f203b511fac7a1b169a50e8d94c0a6c9fe31966b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31001b0376ec6f638e807f203b511fac7a1b169a50e8d94c0a6c9fe31966b9b->enter($__internal_d31001b0376ec6f638e807f203b511fac7a1b169a50e8d94c0a6c9fe31966b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d31001b0376ec6f638e807f203b511fac7a1b169a50e8d94c0a6c9fe31966b9b->leave($__internal_d31001b0376ec6f638e807f203b511fac7a1b169a50e8d94c0a6c9fe31966b9b_prof);

        
        $__internal_8c0a501b0943d7b71aadcdbd8e903de40593df478d86ce22d86aece6e844809b->leave($__internal_8c0a501b0943d7b71aadcdbd8e903de40593df478d86ce22d86aece6e844809b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Turnos\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
