<?php

/* @BloggerBlog/Bidd/index.html.twig */
class __TwigTemplate_02e647f8f9c81674d19f0f006d67e32ac6b423b3f57b2bf6fa64d72bb55aa6a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@BloggerBlog/Bidd/index.html.twig", 1);
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
        $__internal_9c4de2b48479ec76ca9f6ffb834d5b055126d988745ae5b35b2205fef28e0e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c4de2b48479ec76ca9f6ffb834d5b055126d988745ae5b35b2205fef28e0e1c->enter($__internal_9c4de2b48479ec76ca9f6ffb834d5b055126d988745ae5b35b2205fef28e0e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Bidd/index.html.twig"));

        $__internal_287c8ec8fe264bf5cd5d25cde045058bc66a03013a6e4c3ade75bbdda5b8e9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_287c8ec8fe264bf5cd5d25cde045058bc66a03013a6e4c3ade75bbdda5b8e9d0->enter($__internal_287c8ec8fe264bf5cd5d25cde045058bc66a03013a6e4c3ade75bbdda5b8e9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Bidd/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c4de2b48479ec76ca9f6ffb834d5b055126d988745ae5b35b2205fef28e0e1c->leave($__internal_9c4de2b48479ec76ca9f6ffb834d5b055126d988745ae5b35b2205fef28e0e1c_prof);

        
        $__internal_287c8ec8fe264bf5cd5d25cde045058bc66a03013a6e4c3ade75bbdda5b8e9d0->leave($__internal_287c8ec8fe264bf5cd5d25cde045058bc66a03013a6e4c3ade75bbdda5b8e9d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba950eefb5843e4d388831be94ca16e8955b7c8738da7942755b06f6587c7f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba950eefb5843e4d388831be94ca16e8955b7c8738da7942755b06f6587c7f8e->enter($__internal_ba950eefb5843e4d388831be94ca16e8955b7c8738da7942755b06f6587c7f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d716890ad7b6a229d0aed7113e84b5e6bfc3efc08faccf12d0b19c4bf00da9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d716890ad7b6a229d0aed7113e84b5e6bfc3efc08faccf12d0b19c4bf00da9d6->enter($__internal_d716890ad7b6a229d0aed7113e84b5e6bfc3efc08faccf12d0b19c4bf00da9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bidds list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Fio</th>
                <th>Mark1</th>
                <th>Mark2</th>
                <th>Mark3</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bidds"]) || array_key_exists("bidds", $context) ? $context["bidds"] : (function () { throw new Twig_Error_Runtime('Variable "bidds" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bidd"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "fio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "mark1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "mark2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "mark3", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bidd"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bidd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_new");
        echo "\">Create a new bidd</a>
        </li>
    </ul>
";
        
        $__internal_d716890ad7b6a229d0aed7113e84b5e6bfc3efc08faccf12d0b19c4bf00da9d6->leave($__internal_d716890ad7b6a229d0aed7113e84b5e6bfc3efc08faccf12d0b19c4bf00da9d6_prof);

        
        $__internal_ba950eefb5843e4d388831be94ca16e8955b7c8738da7942755b06f6587c7f8e->leave($__internal_ba950eefb5843e4d388831be94ca16e8955b7c8738da7942755b06f6587c7f8e_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Bidd/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  115 => 37,  103 => 31,  97 => 28,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Bidds list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Fio</th>
                <th>Mark1</th>
                <th>Mark2</th>
                <th>Mark3</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for bidd in bidds %}
            <tr>
                <td><a href=\"{{ path('blogger_blog_bidd_show', { 'id': bidd.id }) }}\">{{ bidd.id }}</a></td>
                <td>{{ bidd.fio }}</td>
                <td>{{ bidd.mark1 }}</td>
                <td>{{ bidd.mark2 }}</td>
                <td>{{ bidd.mark3 }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('blogger_blog_bidd_show', { 'id': bidd.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('blogger_blog_bidd_show', { 'id': bidd.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('blogger_blog_bidd_new') }}\">Create a new bidd</a>
        </li>
    </ul>
{% endblock %}
", "@BloggerBlog/Bidd/index.html.twig", "D:\\krr\\kr\\src\\Blogger\\BlogBundle\\Resources\\views\\Bidd\\index.html.twig");
    }
}
