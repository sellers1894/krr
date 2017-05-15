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
        $__internal_24c1dc0c08c98ae71d4998810b014e790222b86fa0d1fc2a593dae8626b1650a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c1dc0c08c98ae71d4998810b014e790222b86fa0d1fc2a593dae8626b1650a->enter($__internal_24c1dc0c08c98ae71d4998810b014e790222b86fa0d1fc2a593dae8626b1650a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $__internal_bd819e32b02b5dfc5f7bc0e8ac0716c5e4b1473fd98bd0aa6a4d615dfd162d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd819e32b02b5dfc5f7bc0e8ac0716c5e4b1473fd98bd0aa6a4d615dfd162d4c->enter($__internal_bd819e32b02b5dfc5f7bc0e8ac0716c5e4b1473fd98bd0aa6a4d615dfd162d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24c1dc0c08c98ae71d4998810b014e790222b86fa0d1fc2a593dae8626b1650a->leave($__internal_24c1dc0c08c98ae71d4998810b014e790222b86fa0d1fc2a593dae8626b1650a_prof);

        
        $__internal_bd819e32b02b5dfc5f7bc0e8ac0716c5e4b1473fd98bd0aa6a4d615dfd162d4c->leave($__internal_bd819e32b02b5dfc5f7bc0e8ac0716c5e4b1473fd98bd0aa6a4d615dfd162d4c_prof);

    }

    // line 4
    public function block_body_title($context, array $blocks = array())
    {
        $__internal_e8152ef450bb5dd708e2a2bb20d4cfe7b0b792c763af21f28ffe164843754a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8152ef450bb5dd708e2a2bb20d4cfe7b0b792c763af21f28ffe164843754a3c->enter($__internal_e8152ef450bb5dd708e2a2bb20d4cfe7b0b792c763af21f28ffe164843754a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        $__internal_5de086f17a98f8b99c887987d659d24345ff5af3cf46733cb57b0a0b83c9567a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de086f17a98f8b99c887987d659d24345ff5af3cf46733cb57b0a0b83c9567a->enter($__internal_5de086f17a98f8b99c887987d659d24345ff5af3cf46733cb57b0a0b83c9567a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        echo "Главная";
        
        $__internal_5de086f17a98f8b99c887987d659d24345ff5af3cf46733cb57b0a0b83c9567a->leave($__internal_5de086f17a98f8b99c887987d659d24345ff5af3cf46733cb57b0a0b83c9567a_prof);

        
        $__internal_e8152ef450bb5dd708e2a2bb20d4cfe7b0b792c763af21f28ffe164843754a3c->leave($__internal_e8152ef450bb5dd708e2a2bb20d4cfe7b0b792c763af21f28ffe164843754a3c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e4fd7994c17f1c01bbfb4661fbf6f9cff4c733ff525a3a6942461b07fbfbc07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4fd7994c17f1c01bbfb4661fbf6f9cff4c733ff525a3a6942461b07fbfbc07->enter($__internal_6e4fd7994c17f1c01bbfb4661fbf6f9cff4c733ff525a3a6942461b07fbfbc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b409b8c4354376ea59ea7c1671570cf526018cf721de4a5451bb371d62a5413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b409b8c4354376ea59ea7c1671570cf526018cf721de4a5451bb371d62a5413->enter($__internal_9b409b8c4354376ea59ea7c1671570cf526018cf721de4a5451bb371d62a5413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_security_login");
            echo "\">Подать заявку</a>
        ";
        }
        // line 22
        echo "    </div>
";
        
        $__internal_9b409b8c4354376ea59ea7c1671570cf526018cf721de4a5451bb371d62a5413->leave($__internal_9b409b8c4354376ea59ea7c1671570cf526018cf721de4a5451bb371d62a5413_prof);

        
        $__internal_6e4fd7994c17f1c01bbfb4661fbf6f9cff4c733ff525a3a6942461b07fbfbc07->leave($__internal_6e4fd7994c17f1c01bbfb4661fbf6f9cff4c733ff525a3a6942461b07fbfbc07_prof);

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
            <a class=\"btn btn-success center-block\" href=\"{{ path('_security_login') }}\">Подать заявку</a>
        {% endif %}
    </div>
{% endblock %}", "BloggerBlogBundle:Page:index.html.twig", "D:\\krr\\kr\\src\\Blogger\\BlogBundle/Resources/views/Page/index.html.twig");
    }
}
