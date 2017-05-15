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
        $__internal_e3bccddd0e6c8feb0d2eca47e3cb9ffc12dedca2cf903118c352b495a2a59f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3bccddd0e6c8feb0d2eca47e3cb9ffc12dedca2cf903118c352b495a2a59f84->enter($__internal_e3bccddd0e6c8feb0d2eca47e3cb9ffc12dedca2cf903118c352b495a2a59f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Security:login.html.twig"));

        $__internal_7c2d46fad230e1a786ca64cc7d0ab24e441a69aaf4db3092bc6d47e07b3e0267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2d46fad230e1a786ca64cc7d0ab24e441a69aaf4db3092bc6d47e07b3e0267->enter($__internal_7c2d46fad230e1a786ca64cc7d0ab24e441a69aaf4db3092bc6d47e07b3e0267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3bccddd0e6c8feb0d2eca47e3cb9ffc12dedca2cf903118c352b495a2a59f84->leave($__internal_e3bccddd0e6c8feb0d2eca47e3cb9ffc12dedca2cf903118c352b495a2a59f84_prof);

        
        $__internal_7c2d46fad230e1a786ca64cc7d0ab24e441a69aaf4db3092bc6d47e07b3e0267->leave($__internal_7c2d46fad230e1a786ca64cc7d0ab24e441a69aaf4db3092bc6d47e07b3e0267_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_52246846ce0c619dd5f6b224a2c4664423ce5755d1f38af6c97f83c33938d0b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52246846ce0c619dd5f6b224a2c4664423ce5755d1f38af6c97f83c33938d0b4->enter($__internal_52246846ce0c619dd5f6b224a2c4664423ce5755d1f38af6c97f83c33938d0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d89b6ac8ac236c72283e2d50db626bd0baf5c579fb76ed8899573abd554cde6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d89b6ac8ac236c72283e2d50db626bd0baf5c579fb76ed8899573abd554cde6->enter($__internal_8d89b6ac8ac236c72283e2d50db626bd0baf5c579fb76ed8899573abd554cde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Вход";
        
        $__internal_8d89b6ac8ac236c72283e2d50db626bd0baf5c579fb76ed8899573abd554cde6->leave($__internal_8d89b6ac8ac236c72283e2d50db626bd0baf5c579fb76ed8899573abd554cde6_prof);

        
        $__internal_52246846ce0c619dd5f6b224a2c4664423ce5755d1f38af6c97f83c33938d0b4->leave($__internal_52246846ce0c619dd5f6b224a2c4664423ce5755d1f38af6c97f83c33938d0b4_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ced4f1c7545cb44779f48c4f801b31f4adcb53e1c911c3cab365578f8b404eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced4f1c7545cb44779f48c4f801b31f4adcb53e1c911c3cab365578f8b404eae->enter($__internal_ced4f1c7545cb44779f48c4f801b31f4adcb53e1c911c3cab365578f8b404eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36f1f208ae871ee4b3b23d63e08e2fb54a9a5d8dc60ec3ac5483d1b5b8e3e415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f1f208ae871ee4b3b23d63e08e2fb54a9a5d8dc60ec3ac5483d1b5b8e3e415->enter($__internal_36f1f208ae871ee4b3b23d63e08e2fb54a9a5d8dc60ec3ac5483d1b5b8e3e415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"container\">
        ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 9, $this->getSourceContext()); })())) {
            // line 10
            echo "            <hr>
            <div class=\"alert alert-success\">
                Проверьте введённые данные
            </div>
        ";
        }
        // line 15
        echo "        <hr>
        <form action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_security_check");
        echo "\" method=\"POST\">
            <div class=\"form-group\">
                <label for=\"username\">Логин:</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
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
            <h3><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\">На главную</a></h3>
        </div>
    </div>

";
        
        $__internal_36f1f208ae871ee4b3b23d63e08e2fb54a9a5d8dc60ec3ac5483d1b5b8e3e415->leave($__internal_36f1f208ae871ee4b3b23d63e08e2fb54a9a5d8dc60ec3ac5483d1b5b8e3e415_prof);

        
        $__internal_ced4f1c7545cb44779f48c4f801b31f4adcb53e1c911c3cab365578f8b404eae->leave($__internal_ced4f1c7545cb44779f48c4f801b31f4adcb53e1c911c3cab365578f8b404eae_prof);

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
        return array (  103 => 29,  90 => 19,  84 => 16,  81 => 15,  74 => 10,  72 => 9,  68 => 7,  59 => 6,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Вход{% endblock%}


{% block body %}

    <div class=\"container\">
        {% if error %}
            <hr>
            <div class=\"alert alert-success\">
                Проверьте введённые данные
            </div>
        {% endif %}
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
            <h3><a href=\"{{ path('blogger_blog_homepage') }}\">На главную</a></h3>
        </div>
    </div>

{% endblock %}", "BloggerBlogBundle:Security:login.html.twig", "D:\\krr\\kr\\src\\Blogger\\BlogBundle/Resources/views/Security/login.html.twig");
    }
}
