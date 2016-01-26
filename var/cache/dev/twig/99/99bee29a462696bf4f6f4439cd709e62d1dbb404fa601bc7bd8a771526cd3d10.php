<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_85f4264165a54320aa4fa04e15b4faa93283df0f8fdec47caddb2e70d4723e44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_2078a60b3a391cdde24fb2fe3eb63a21949ef23e79396a89fa7716d644fdd074 = $this->env->getExtension("native_profiler");
        $__internal_2078a60b3a391cdde24fb2fe3eb63a21949ef23e79396a89fa7716d644fdd074->enter($__internal_2078a60b3a391cdde24fb2fe3eb63a21949ef23e79396a89fa7716d644fdd074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2078a60b3a391cdde24fb2fe3eb63a21949ef23e79396a89fa7716d644fdd074->leave($__internal_2078a60b3a391cdde24fb2fe3eb63a21949ef23e79396a89fa7716d644fdd074_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06371c69d745000e33560529ce3fa5f52b9f78ee2533121d1175ac39feb716b3 = $this->env->getExtension("native_profiler");
        $__internal_06371c69d745000e33560529ce3fa5f52b9f78ee2533121d1175ac39feb716b3->enter($__internal_06371c69d745000e33560529ce3fa5f52b9f78ee2533121d1175ac39feb716b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_06371c69d745000e33560529ce3fa5f52b9f78ee2533121d1175ac39feb716b3->leave($__internal_06371c69d745000e33560529ce3fa5f52b9f78ee2533121d1175ac39feb716b3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac0278f0e28b561be8a53368e8ef9b1d0a3e1f4fbbb75357fc73d37602f9a9e4 = $this->env->getExtension("native_profiler");
        $__internal_ac0278f0e28b561be8a53368e8ef9b1d0a3e1f4fbbb75357fc73d37602f9a9e4->enter($__internal_ac0278f0e28b561be8a53368e8ef9b1d0a3e1f4fbbb75357fc73d37602f9a9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ac0278f0e28b561be8a53368e8ef9b1d0a3e1f4fbbb75357fc73d37602f9a9e4->leave($__internal_ac0278f0e28b561be8a53368e8ef9b1d0a3e1f4fbbb75357fc73d37602f9a9e4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_810864f282ceb6847f5a21c88967a17437e1cf18a523df39abdcc35ef20e580c = $this->env->getExtension("native_profiler");
        $__internal_810864f282ceb6847f5a21c88967a17437e1cf18a523df39abdcc35ef20e580c->enter($__internal_810864f282ceb6847f5a21c88967a17437e1cf18a523df39abdcc35ef20e580c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_810864f282ceb6847f5a21c88967a17437e1cf18a523df39abdcc35ef20e580c->leave($__internal_810864f282ceb6847f5a21c88967a17437e1cf18a523df39abdcc35ef20e580c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
