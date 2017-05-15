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
        $__internal_dce765855d42b59aad03afa7ad877ba90936dbfb45eb2ea181be04dae41e02bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce765855d42b59aad03afa7ad877ba90936dbfb45eb2ea181be04dae41e02bf->enter($__internal_dce765855d42b59aad03afa7ad877ba90936dbfb45eb2ea181be04dae41e02bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Prepod:index.html.twig"));

        $__internal_932281c2919d644ae20c5c0dce53b9b96c0eeab120ac9642b946e031bb151ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932281c2919d644ae20c5c0dce53b9b96c0eeab120ac9642b946e031bb151ab6->enter($__internal_932281c2919d644ae20c5c0dce53b9b96c0eeab120ac9642b946e031bb151ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Prepod:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dce765855d42b59aad03afa7ad877ba90936dbfb45eb2ea181be04dae41e02bf->leave($__internal_dce765855d42b59aad03afa7ad877ba90936dbfb45eb2ea181be04dae41e02bf_prof);

        
        $__internal_932281c2919d644ae20c5c0dce53b9b96c0eeab120ac9642b946e031bb151ab6->leave($__internal_932281c2919d644ae20c5c0dce53b9b96c0eeab120ac9642b946e031bb151ab6_prof);

    }

    // line 4
    public function block_body_title($context, array $blocks = array())
    {
        $__internal_e772077d6afd4748f81f76f356fafc6c4d98c90b0f2a09ca1d337abde0b7fe7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e772077d6afd4748f81f76f356fafc6c4d98c90b0f2a09ca1d337abde0b7fe7c->enter($__internal_e772077d6afd4748f81f76f356fafc6c4d98c90b0f2a09ca1d337abde0b7fe7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        $__internal_c76eb49b8299940687bf5d968fc7a25a91f908480dfacfe62972ad03baa36e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76eb49b8299940687bf5d968fc7a25a91f908480dfacfe62972ad03baa36e6a->enter($__internal_c76eb49b8299940687bf5d968fc7a25a91f908480dfacfe62972ad03baa36e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        echo "Пенель преподавателя";
        
        $__internal_c76eb49b8299940687bf5d968fc7a25a91f908480dfacfe62972ad03baa36e6a->leave($__internal_c76eb49b8299940687bf5d968fc7a25a91f908480dfacfe62972ad03baa36e6a_prof);

        
        $__internal_e772077d6afd4748f81f76f356fafc6c4d98c90b0f2a09ca1d337abde0b7fe7c->leave($__internal_e772077d6afd4748f81f76f356fafc6c4d98c90b0f2a09ca1d337abde0b7fe7c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1031d7ab68696beedf516b4b822bbdc7607c60d992f9862d15451ae6fa4b01d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1031d7ab68696beedf516b4b822bbdc7607c60d992f9862d15451ae6fa4b01d6->enter($__internal_1031d7ab68696beedf516b4b822bbdc7607c60d992f9862d15451ae6fa4b01d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fea4fcbb9ea094c1d9f8212d4ac581b1147e020b1be9e4cd35df42da3e3ec5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea4fcbb9ea094c1d9f8212d4ac581b1147e020b1be9e4cd35df42da3e3ec5ec->enter($__internal_fea4fcbb9ea094c1d9f8212d4ac581b1147e020b1be9e4cd35df42da3e3ec5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        <h1>Панель преподавателя</h1>
        <hr>
        <hr>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_index");
        echo "\">Зявки</a>

    </div>
";
        
        $__internal_fea4fcbb9ea094c1d9f8212d4ac581b1147e020b1be9e4cd35df42da3e3ec5ec->leave($__internal_fea4fcbb9ea094c1d9f8212d4ac581b1147e020b1be9e4cd35df42da3e3ec5ec_prof);

        
        $__internal_1031d7ab68696beedf516b4b822bbdc7607c60d992f9862d15451ae6fa4b01d6->leave($__internal_1031d7ab68696beedf516b4b822bbdc7607c60d992f9862d15451ae6fa4b01d6_prof);

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
        return array (  74 => 11,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
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
        <hr>
        <a href=\"{{ path('blogger_blog_bidd_index') }}\">Зявки</a>

    </div>
{% endblock %}", "BloggerBlogBundle:Prepod:index.html.twig", "D:\\krr\\kr\\src\\Blogger\\BlogBundle/Resources/views/Prepod/index.html.twig");
    }
}
