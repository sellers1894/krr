<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_21246bdf3c9161f895236ea27c28cd9d3f466ef9a304dd88c6ce0cab63013463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:index.html.twig", 2);
        $this->blocks = array(
            'body_title' => array($this, 'block_body_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a04b2dce1889a126ec581462d1776f2320adb5452f8dc876c4388a7fef045813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04b2dce1889a126ec581462d1776f2320adb5452f8dc876c4388a7fef045813->enter($__internal_a04b2dce1889a126ec581462d1776f2320adb5452f8dc876c4388a7fef045813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $__internal_2bc37aeb51b59e2a0e1abe22017142f1942a046b8ebfed5fda1c05d975bdf605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc37aeb51b59e2a0e1abe22017142f1942a046b8ebfed5fda1c05d975bdf605->enter($__internal_2bc37aeb51b59e2a0e1abe22017142f1942a046b8ebfed5fda1c05d975bdf605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a04b2dce1889a126ec581462d1776f2320adb5452f8dc876c4388a7fef045813->leave($__internal_a04b2dce1889a126ec581462d1776f2320adb5452f8dc876c4388a7fef045813_prof);

        
        $__internal_2bc37aeb51b59e2a0e1abe22017142f1942a046b8ebfed5fda1c05d975bdf605->leave($__internal_2bc37aeb51b59e2a0e1abe22017142f1942a046b8ebfed5fda1c05d975bdf605_prof);

    }

    // line 4
    public function block_body_title($context, array $blocks = array())
    {
        $__internal_1147e2caf2c93b94ccf65abdad61732b3b599c3d2b5c507bee4a787a3ab217a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1147e2caf2c93b94ccf65abdad61732b3b599c3d2b5c507bee4a787a3ab217a2->enter($__internal_1147e2caf2c93b94ccf65abdad61732b3b599c3d2b5c507bee4a787a3ab217a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        $__internal_8bf2ec7264994229874fea6e7873431684b9f7dda7e09f2d90f3e2359c2300e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf2ec7264994229874fea6e7873431684b9f7dda7e09f2d90f3e2359c2300e9->enter($__internal_8bf2ec7264994229874fea6e7873431684b9f7dda7e09f2d90f3e2359c2300e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        echo "Главная";
        
        $__internal_8bf2ec7264994229874fea6e7873431684b9f7dda7e09f2d90f3e2359c2300e9->leave($__internal_8bf2ec7264994229874fea6e7873431684b9f7dda7e09f2d90f3e2359c2300e9_prof);

        
        $__internal_1147e2caf2c93b94ccf65abdad61732b3b599c3d2b5c507bee4a787a3ab217a2->leave($__internal_1147e2caf2c93b94ccf65abdad61732b3b599c3d2b5c507bee4a787a3ab217a2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4796fd7400ad9e2656ccb7938f4638ae13cc6a17f13f70cd7a232b4e84caa79e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4796fd7400ad9e2656ccb7938f4638ae13cc6a17f13f70cd7a232b4e84caa79e->enter($__internal_4796fd7400ad9e2656ccb7938f4638ae13cc6a17f13f70cd7a232b4e84caa79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bdb94ddcaee1c37e4bd3b94c4912e48849ddfbe2540f9a9b90edc91d939d3806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb94ddcaee1c37e4bd3b94c4912e48849ddfbe2540f9a9b90edc91d939d3806->enter($__internal_bdb94ddcaee1c37e4bd3b94c4912e48849ddfbe2540f9a9b90edc91d939d3806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        ";
        // line 8
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 9
            echo "            <a class=\"btn btn-warning center-block\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_security_logout");
            echo "\">Выход</a>
        ";
        } else {
            // line 11
            echo "            <a class=\"btn btn-success center-block\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_security_login");
            echo "\">Вход</a>
        ";
        }
        // line 13
        echo "
        <hr>
        <hr>

        ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 18
            echo "            <a class=\"btn btn-success center-block\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_prepod");
            echo "\">Редактирование заявок</a>
        ";
        } else {
            // line 20
            echo "            <a class=\"btn btn-success center-block\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_new");
            echo "\">Подать заявку</a>
        ";
        }
        // line 22
        echo "    </div>
";
        
        $__internal_bdb94ddcaee1c37e4bd3b94c4912e48849ddfbe2540f9a9b90edc91d939d3806->leave($__internal_bdb94ddcaee1c37e4bd3b94c4912e48849ddfbe2540f9a9b90edc91d939d3806_prof);

        
        $__internal_4796fd7400ad9e2656ccb7938f4638ae13cc6a17f13f70cd7a232b4e84caa79e->leave($__internal_4796fd7400ad9e2656ccb7938f4638ae13cc6a17f13f70cd7a232b4e84caa79e_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 22,  99 => 20,  93 => 18,  91 => 17,  85 => 13,  79 => 11,  73 => 9,  71 => 8,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/index.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block body_title %}Главная{% endblock %}

{% block body %}
    <div class=\"container\">
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <a class=\"btn btn-warning center-block\" href=\"{{ path('_security_logout') }}\">Выход</a>
        {% else %}
            <a class=\"btn btn-success center-block\" href=\"{{ path('_security_login') }}\">Вход</a>
        {% endif %}

        <hr>
        <hr>

        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <a class=\"btn btn-success center-block\" href=\"{{ path('blogger_blog_prepod') }}\">Редактирование заявок</a>
        {% else %}
            <a class=\"btn btn-success center-block\" href=\"{{ path('blogger_blog_bidd_new') }}\">Подать заявку</a>
        {% endif %}
    </div>
{% endblock %}", "BloggerBlogBundle:Page:index.html.twig", "D:\\krr\\kr\\src\\Blogger\\BlogBundle/Resources/views/Page/index.html.twig");
    }
}
