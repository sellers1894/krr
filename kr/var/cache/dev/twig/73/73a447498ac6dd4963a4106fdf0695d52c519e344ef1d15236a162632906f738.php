<?php

/* @BloggerBlog/Bidd/new.html.twig */
class __TwigTemplate_4bbca01ff91f98f277e4a01ca0c0bc304b576058b5019a7ba568d984f0b30ce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@BloggerBlog/Bidd/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70b13295d08b27142680416a2e2aa0100a973c46c72893debf0c6a214acf13f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b13295d08b27142680416a2e2aa0100a973c46c72893debf0c6a214acf13f9->enter($__internal_70b13295d08b27142680416a2e2aa0100a973c46c72893debf0c6a214acf13f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Bidd/new.html.twig"));

        $__internal_c100e31fd8565f312c48a8dfc839726450ee7084847dbaabaf680ac317a65e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c100e31fd8565f312c48a8dfc839726450ee7084847dbaabaf680ac317a65e4b->enter($__internal_c100e31fd8565f312c48a8dfc839726450ee7084847dbaabaf680ac317a65e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Bidd/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b13295d08b27142680416a2e2aa0100a973c46c72893debf0c6a214acf13f9->leave($__internal_70b13295d08b27142680416a2e2aa0100a973c46c72893debf0c6a214acf13f9_prof);

        
        $__internal_c100e31fd8565f312c48a8dfc839726450ee7084847dbaabaf680ac317a65e4b->leave($__internal_c100e31fd8565f312c48a8dfc839726450ee7084847dbaabaf680ac317a65e4b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3b7e6e3b15468908026dc4a4a0e5e6e4de1241b53b2dbc2742cbf813c9856b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b7e6e3b15468908026dc4a4a0e5e6e4de1241b53b2dbc2742cbf813c9856b3->enter($__internal_b3b7e6e3b15468908026dc4a4a0e5e6e4de1241b53b2dbc2742cbf813c9856b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93e04e447b96a38390e6acf3b93c5a93963ed4d978cd7ea5015fe92b31578b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e04e447b96a38390e6acf3b93c5a93963ed4d978cd7ea5015fe92b31578b23->enter($__internal_93e04e447b96a38390e6acf3b93c5a93963ed4d978cd7ea5015fe92b31578b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bidd creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_93e04e447b96a38390e6acf3b93c5a93963ed4d978cd7ea5015fe92b31578b23->leave($__internal_93e04e447b96a38390e6acf3b93c5a93963ed4d978cd7ea5015fe92b31578b23_prof);

        
        $__internal_b3b7e6e3b15468908026dc4a4a0e5e6e4de1241b53b2dbc2742cbf813c9856b3->leave($__internal_b3b7e6e3b15468908026dc4a4a0e5e6e4de1241b53b2dbc2742cbf813c9856b3_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Bidd/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Bidd creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('blogger_blog_bidd_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@BloggerBlog/Bidd/new.html.twig", "D:\\krr\\kr\\src\\Blogger\\BlogBundle\\Resources\\views\\Bidd\\new.html.twig");
    }
}
