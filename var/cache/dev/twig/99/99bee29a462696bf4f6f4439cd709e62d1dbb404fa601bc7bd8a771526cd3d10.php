<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_85f4264165a54320aa4fa04e15b4faa93283df0f8fdec47caddb2e70d4723e44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcbadc7dacfcd17003bdb2ca86db869c4ed6cb6fd59c8682ab171684ca17fb22 = $this->env->getExtension("native_profiler");
        $__internal_fcbadc7dacfcd17003bdb2ca86db869c4ed6cb6fd59c8682ab171684ca17fb22->enter($__internal_fcbadc7dacfcd17003bdb2ca86db869c4ed6cb6fd59c8682ab171684ca17fb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcbadc7dacfcd17003bdb2ca86db869c4ed6cb6fd59c8682ab171684ca17fb22->leave($__internal_fcbadc7dacfcd17003bdb2ca86db869c4ed6cb6fd59c8682ab171684ca17fb22_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c07f8a592c9a6102fdff86c62b0e3d83d21c7ec3ce498539b653f424a12f92a = $this->env->getExtension("native_profiler");
        $__internal_9c07f8a592c9a6102fdff86c62b0e3d83d21c7ec3ce498539b653f424a12f92a->enter($__internal_9c07f8a592c9a6102fdff86c62b0e3d83d21c7ec3ce498539b653f424a12f92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9c07f8a592c9a6102fdff86c62b0e3d83d21c7ec3ce498539b653f424a12f92a->leave($__internal_9c07f8a592c9a6102fdff86c62b0e3d83d21c7ec3ce498539b653f424a12f92a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecd0d36daebc585c09cf865f82662dc8d91002feb0fab30b59ce46f2cf5b8c91 = $this->env->getExtension("native_profiler");
        $__internal_ecd0d36daebc585c09cf865f82662dc8d91002feb0fab30b59ce46f2cf5b8c91->enter($__internal_ecd0d36daebc585c09cf865f82662dc8d91002feb0fab30b59ce46f2cf5b8c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ecd0d36daebc585c09cf865f82662dc8d91002feb0fab30b59ce46f2cf5b8c91->leave($__internal_ecd0d36daebc585c09cf865f82662dc8d91002feb0fab30b59ce46f2cf5b8c91_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a63b97e82221db23ba81e76021132d7919fc22574f52c1985ea09563fc1482d = $this->env->getExtension("native_profiler");
        $__internal_9a63b97e82221db23ba81e76021132d7919fc22574f52c1985ea09563fc1482d->enter($__internal_9a63b97e82221db23ba81e76021132d7919fc22574f52c1985ea09563fc1482d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9a63b97e82221db23ba81e76021132d7919fc22574f52c1985ea09563fc1482d->leave($__internal_9a63b97e82221db23ba81e76021132d7919fc22574f52c1985ea09563fc1482d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
