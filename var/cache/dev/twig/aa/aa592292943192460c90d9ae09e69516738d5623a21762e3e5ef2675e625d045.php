<?php

/* author/new.html.twig */
class __TwigTemplate_42b13964c39c56564cea2845054766a15aec63bb2606a071c01660b21a052351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "author/new.html.twig", 1);
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
        $__internal_44abd80af159926444611c37956b71a5a698b60b4e2e119cc8ecf14dcf35b2a4 = $this->env->getExtension("native_profiler");
        $__internal_44abd80af159926444611c37956b71a5a698b60b4e2e119cc8ecf14dcf35b2a4->enter($__internal_44abd80af159926444611c37956b71a5a698b60b4e2e119cc8ecf14dcf35b2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44abd80af159926444611c37956b71a5a698b60b4e2e119cc8ecf14dcf35b2a4->leave($__internal_44abd80af159926444611c37956b71a5a698b60b4e2e119cc8ecf14dcf35b2a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_80d604be9de551385ffd393197d22ab15ad51cd01cb7e14f894aebac53ad29cf = $this->env->getExtension("native_profiler");
        $__internal_80d604be9de551385ffd393197d22ab15ad51cd01cb7e14f894aebac53ad29cf->enter($__internal_80d604be9de551385ffd393197d22ab15ad51cd01cb7e14f894aebac53ad29cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Author creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("author_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_80d604be9de551385ffd393197d22ab15ad51cd01cb7e14f894aebac53ad29cf->leave($__internal_80d604be9de551385ffd393197d22ab15ad51cd01cb7e14f894aebac53ad29cf_prof);

    }

    public function getTemplateName()
    {
        return "author/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Author creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('author_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
