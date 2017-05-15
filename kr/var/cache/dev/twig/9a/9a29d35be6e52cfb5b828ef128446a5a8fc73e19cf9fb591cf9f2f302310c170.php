<?php

/* BloggerBlogBundle:Security:login.html.twig */
class __TwigTemplate_145dc48c67d2de7ee630c7be1121351bb545fc89fa7e1c0969635d7179900042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23748a0f5f851f38fb0f582db614e010a719ac235df6e77d91bc554ceb3bf053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23748a0f5f851f38fb0f582db614e010a719ac235df6e77d91bc554ceb3bf053->enter($__internal_23748a0f5f851f38fb0f582db614e010a719ac235df6e77d91bc554ceb3bf053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Security:login.html.twig"));

        $__internal_02fa4af14938a714a1a9005038355af44b4b2394339dd9581e04c533f4a8408e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fa4af14938a714a1a9005038355af44b4b2394339dd9581e04c533f4a8408e->enter($__internal_02fa4af14938a714a1a9005038355af44b4b2394339dd9581e04c533f4a8408e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23748a0f5f851f38fb0f582db614e010a719ac235df6e77d91bc554ceb3bf053->leave($__internal_23748a0f5f851f38fb0f582db614e010a719ac235df6e77d91bc554ceb3bf053_prof);

        
        $__internal_02fa4af14938a714a1a9005038355af44b4b2394339dd9581e04c533f4a8408e->leave($__internal_02fa4af14938a714a1a9005038355af44b4b2394339dd9581e04c533f4a8408e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7640b92d54fc5908ecb8f377bb4aab235d6202f843e7a7c8dbb1196f34566436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7640b92d54fc5908ecb8f377bb4aab235d6202f843e7a7c8dbb1196f34566436->enter($__internal_7640b92d54fc5908ecb8f377bb4aab235d6202f843e7a7c8dbb1196f34566436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_541d79886f17f8c41146af463d509b0fa2f4e38f39b0469e021a70cfb202b3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541d79886f17f8c41146af463d509b0fa2f4e38f39b0469e021a70cfb202b3ef->enter($__internal_541d79886f17f8c41146af463d509b0fa2f4e38f39b0469e021a70cfb202b3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Вход";
        
        $__internal_541d79886f17f8c41146af463d509b0fa2f4e38f39b0469e021a70cfb202b3ef->leave($__internal_541d79886f17f8c41146af463d509b0fa2f4e38f39b0469e021a70cfb202b3ef_prof);

        
        $__internal_7640b92d54fc5908ecb8f377bb4aab235d6202f843e7a7c8dbb1196f34566436->leave($__internal_7640b92d54fc5908ecb8f377bb4aab235d6202f843e7a7c8dbb1196f34566436_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cc40346886104b8f179e360013c0b1d754acc133204b2647d483f8be8291442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc40346886104b8f179e360013c0b1d754acc133204b2647d483f8be8291442->enter($__internal_5cc40346886104b8f179e360013c0b1d754acc133204b2647d483f8be8291442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a50ae02b7087e10937d3de366f276d5cbf130992445f095ca9b56a0a415e0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a50ae02b7087e10937d3de366f276d5cbf130992445f095ca9b56a0a415e0c9->enter($__internal_4a50ae02b7087e10937d3de366f276d5cbf130992445f095ca9b56a0a415e0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
            echo "</div>
        <hr>
    ";
        }
        // line 11
        echo "    <div class=\"container\">
        <hr>
        <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_security_check");
        echo "\" method=\"POST\">
            <div class=\"form-group\">
                <label for=\"username\">Логин:</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Пароль:</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
            </div>
            <input type=\"submit\" class=\"btn btn-success\" name=\"login\" value=\"Отправить\" />
        </form>
        <div>
            <hr>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\">На главную</a>
        </div>
    </div>

";
        
        $__internal_4a50ae02b7087e10937d3de366f276d5cbf130992445f095ca9b56a0a415e0c9->leave($__internal_4a50ae02b7087e10937d3de366f276d5cbf130992445f095ca9b56a0a415e0c9_prof);

        
        $__internal_5cc40346886104b8f179e360013c0b1d754acc133204b2647d483f8be8291442->leave($__internal_5cc40346886104b8f179e360013c0b1d754acc133204b2647d483f8be8291442_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  88 => 16,  82 => 13,  78 => 11,  71 => 8,  68 => 7,  59 => 6,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Вход{% endblock%}


{% block body %}
    {% if error %}
        <div class=\"error\">{{ error.message }}</div>
        <hr>
    {% endif %}
    <div class=\"container\">
        <hr>
        <form action=\"{{ path('_security_check') }}\" method=\"POST\">
            <div class=\"form-group\">
                <label for=\"username\">Логин:</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Пароль:</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
            </div>
            <input type=\"submit\" class=\"btn btn-success\" name=\"login\" value=\"Отправить\" />
        </form>
        <div>
            <hr>
            <a href=\"{{ path('blogger_blog_homepage') }}\">На главную</a>
        </div>
    </div>

{% endblock %}", "BloggerBlogBundle:Security:login.html.twig", "D:\\krr\\kr\\src\\Blogger\\BlogBundle/Resources/views/Security/login.html.twig");
    }
}
