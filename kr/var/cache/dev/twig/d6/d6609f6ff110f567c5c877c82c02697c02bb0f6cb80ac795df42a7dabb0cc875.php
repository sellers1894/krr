<?php

/* BloggerBlogBundle:Prepod:index.html.twig */
class __TwigTemplate_2f5626d8f13957d708c78f4331d7c74bc1cf3b2da7b826c6ec4a8ce4057282a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Prepod:index.html.twig", 2);
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
        $__internal_b61b7c65b4eeb77f8d5c60440ebdb5fbf3f29e4ddc52b16a10b79e6bf51ec018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61b7c65b4eeb77f8d5c60440ebdb5fbf3f29e4ddc52b16a10b79e6bf51ec018->enter($__internal_b61b7c65b4eeb77f8d5c60440ebdb5fbf3f29e4ddc52b16a10b79e6bf51ec018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Prepod:index.html.twig"));

        $__internal_0cbd7c06c7d82633e8afd9762e6e2a29bb5ecf9cbd2eb40b3498c5e1bea7607c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbd7c06c7d82633e8afd9762e6e2a29bb5ecf9cbd2eb40b3498c5e1bea7607c->enter($__internal_0cbd7c06c7d82633e8afd9762e6e2a29bb5ecf9cbd2eb40b3498c5e1bea7607c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Prepod:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b61b7c65b4eeb77f8d5c60440ebdb5fbf3f29e4ddc52b16a10b79e6bf51ec018->leave($__internal_b61b7c65b4eeb77f8d5c60440ebdb5fbf3f29e4ddc52b16a10b79e6bf51ec018_prof);

        
        $__internal_0cbd7c06c7d82633e8afd9762e6e2a29bb5ecf9cbd2eb40b3498c5e1bea7607c->leave($__internal_0cbd7c06c7d82633e8afd9762e6e2a29bb5ecf9cbd2eb40b3498c5e1bea7607c_prof);

    }

    // line 4
    public function block_body_title($context, array $blocks = array())
    {
        $__internal_0e3a06125554ec045bf58f355bac5c484d8fff1b83a5f70360bcda977507efc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3a06125554ec045bf58f355bac5c484d8fff1b83a5f70360bcda977507efc0->enter($__internal_0e3a06125554ec045bf58f355bac5c484d8fff1b83a5f70360bcda977507efc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        $__internal_f547079be6cdde8d2ef8565bbca8a9cf2c41eb59b08344d29c351ff595849c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f547079be6cdde8d2ef8565bbca8a9cf2c41eb59b08344d29c351ff595849c30->enter($__internal_f547079be6cdde8d2ef8565bbca8a9cf2c41eb59b08344d29c351ff595849c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        echo "Пенель преподавателя";
        
        $__internal_f547079be6cdde8d2ef8565bbca8a9cf2c41eb59b08344d29c351ff595849c30->leave($__internal_f547079be6cdde8d2ef8565bbca8a9cf2c41eb59b08344d29c351ff595849c30_prof);

        
        $__internal_0e3a06125554ec045bf58f355bac5c484d8fff1b83a5f70360bcda977507efc0->leave($__internal_0e3a06125554ec045bf58f355bac5c484d8fff1b83a5f70360bcda977507efc0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd329df1f822d01b33f0712bf0862b8ea0fe863b6f1d1df7eb2ec63c96af57fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd329df1f822d01b33f0712bf0862b8ea0fe863b6f1d1df7eb2ec63c96af57fa->enter($__internal_cd329df1f822d01b33f0712bf0862b8ea0fe863b6f1d1df7eb2ec63c96af57fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1731160a45d9886e82e35039cf320ddfda628ccd7af74326f6be0cbdc58e613a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1731160a45d9886e82e35039cf320ddfda628ccd7af74326f6be0cbdc58e613a->enter($__internal_1731160a45d9886e82e35039cf320ddfda628ccd7af74326f6be0cbdc58e613a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        <h1>Панель преподавателя</h1>
        <hr>
        <h3>Привет, <i>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "user", array()), "fio", array()), "html", null, true);
        echo "</i></h3>
        <hr>
        <h3><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_index");
        echo "\">Зявки</a></h3>
        <h3><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\">На главную</a></h3>
        <h3><a class=\"btn btn-danger\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_security_logout");
        echo "\">Выход</a></h3>

    </div>
";
        
        $__internal_1731160a45d9886e82e35039cf320ddfda628ccd7af74326f6be0cbdc58e613a->leave($__internal_1731160a45d9886e82e35039cf320ddfda628ccd7af74326f6be0cbdc58e613a_prof);

        
        $__internal_cd329df1f822d01b33f0712bf0862b8ea0fe863b6f1d1df7eb2ec63c96af57fa->leave($__internal_cd329df1f822d01b33f0712bf0862b8ea0fe863b6f1d1df7eb2ec63c96af57fa_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Prepod:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 14,  82 => 13,  78 => 12,  73 => 10,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/index.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block body_title %}Пенель преподавателя{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Панель преподавателя</h1>
        <hr>
        <h3>Привет, <i>{{ app.user.fio }}</i></h3>
        <hr>
        <h3><a href=\"{{ path('blogger_blog_bidd_index') }}\">Зявки</a></h3>
        <h3><a href=\"{{ path('blogger_blog_homepage') }}\">На главную</a></h3>
        <h3><a class=\"btn btn-danger\" href=\"{{ path('_security_logout') }}\">Выход</a></h3>

    </div>
{% endblock %}", "BloggerBlogBundle:Prepod:index.html.twig", "D:\\krr\\kr\\src\\Blogger\\BlogBundle/Resources/views/Prepod/index.html.twig");
    }
}
