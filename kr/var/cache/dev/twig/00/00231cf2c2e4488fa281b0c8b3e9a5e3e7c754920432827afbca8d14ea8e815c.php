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
        $__internal_884c2bd50f89acbf158b82342547746635d89cae615c548f7898ac61e83632a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884c2bd50f89acbf158b82342547746635d89cae615c548f7898ac61e83632a2->enter($__internal_884c2bd50f89acbf158b82342547746635d89cae615c548f7898ac61e83632a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $__internal_a3548fb045cac532ae57498f8b2fee0fd1acfca7cb8367308f5ec68be7b25002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3548fb045cac532ae57498f8b2fee0fd1acfca7cb8367308f5ec68be7b25002->enter($__internal_a3548fb045cac532ae57498f8b2fee0fd1acfca7cb8367308f5ec68be7b25002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_884c2bd50f89acbf158b82342547746635d89cae615c548f7898ac61e83632a2->leave($__internal_884c2bd50f89acbf158b82342547746635d89cae615c548f7898ac61e83632a2_prof);

        
        $__internal_a3548fb045cac532ae57498f8b2fee0fd1acfca7cb8367308f5ec68be7b25002->leave($__internal_a3548fb045cac532ae57498f8b2fee0fd1acfca7cb8367308f5ec68be7b25002_prof);

    }

    // line 4
    public function block_body_title($context, array $blocks = array())
    {
        $__internal_c9495291eec7656fdb89840490ecb41d0c1798d8e2fbc13d8b677cb585ea761e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9495291eec7656fdb89840490ecb41d0c1798d8e2fbc13d8b677cb585ea761e->enter($__internal_c9495291eec7656fdb89840490ecb41d0c1798d8e2fbc13d8b677cb585ea761e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        $__internal_67e2abeb87e42dfa931216b3b3e637f8594af719f34247ad3d0d8259aa796258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e2abeb87e42dfa931216b3b3e637f8594af719f34247ad3d0d8259aa796258->enter($__internal_67e2abeb87e42dfa931216b3b3e637f8594af719f34247ad3d0d8259aa796258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        echo "Главная";
        
        $__internal_67e2abeb87e42dfa931216b3b3e637f8594af719f34247ad3d0d8259aa796258->leave($__internal_67e2abeb87e42dfa931216b3b3e637f8594af719f34247ad3d0d8259aa796258_prof);

        
        $__internal_c9495291eec7656fdb89840490ecb41d0c1798d8e2fbc13d8b677cb585ea761e->leave($__internal_c9495291eec7656fdb89840490ecb41d0c1798d8e2fbc13d8b677cb585ea761e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_84d595a655afc08da88bb1df682bbd8a96afcbd3d3f042a98e30b722c9668bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d595a655afc08da88bb1df682bbd8a96afcbd3d3f042a98e30b722c9668bf4->enter($__internal_84d595a655afc08da88bb1df682bbd8a96afcbd3d3f042a98e30b722c9668bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53814e58b81ac3f5f3d71f0c4f1d1727cdcbaa90adceb60538f08c91017316aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53814e58b81ac3f5f3d71f0c4f1d1727cdcbaa90adceb60538f08c91017316aa->enter($__internal_53814e58b81ac3f5f3d71f0c4f1d1727cdcbaa90adceb60538f08c91017316aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "    </div>
";
        
        $__internal_53814e58b81ac3f5f3d71f0c4f1d1727cdcbaa90adceb60538f08c91017316aa->leave($__internal_53814e58b81ac3f5f3d71f0c4f1d1727cdcbaa90adceb60538f08c91017316aa_prof);

        
        $__internal_84d595a655afc08da88bb1df682bbd8a96afcbd3d3f042a98e30b722c9668bf4->leave($__internal_84d595a655afc08da88bb1df682bbd8a96afcbd3d3f042a98e30b722c9668bf4_prof);

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
        return array (  85 => 13,  79 => 11,  73 => 9,  71 => 8,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
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
    </div>
{% endblock %}", "BloggerBlogBundle:Page:index.html.twig", "D:\\krr\\kr\\src\\Blogger\\BlogBundle/Resources/views/Page/index.html.twig");
    }
}
