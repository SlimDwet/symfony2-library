<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a40bed17222526a456d002dc03d8e599f02cd9f014c432ac17c677855804b0e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fefa9f21be634a067c84c2f9461fbdc3efa608f12d1d9f8bbaef37768a311d97 = $this->env->getExtension("native_profiler");
        $__internal_fefa9f21be634a067c84c2f9461fbdc3efa608f12d1d9f8bbaef37768a311d97->enter($__internal_fefa9f21be634a067c84c2f9461fbdc3efa608f12d1d9f8bbaef37768a311d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fefa9f21be634a067c84c2f9461fbdc3efa608f12d1d9f8bbaef37768a311d97->leave($__internal_fefa9f21be634a067c84c2f9461fbdc3efa608f12d1d9f8bbaef37768a311d97_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_05f17e1e08fb94e3ccd7870a626d40ed713b78d74846cf2c9f29fabcc18b6e30 = $this->env->getExtension("native_profiler");
        $__internal_05f17e1e08fb94e3ccd7870a626d40ed713b78d74846cf2c9f29fabcc18b6e30->enter($__internal_05f17e1e08fb94e3ccd7870a626d40ed713b78d74846cf2c9f29fabcc18b6e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_05f17e1e08fb94e3ccd7870a626d40ed713b78d74846cf2c9f29fabcc18b6e30->leave($__internal_05f17e1e08fb94e3ccd7870a626d40ed713b78d74846cf2c9f29fabcc18b6e30_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b6c38e197c4538cb0f2f4ddf9f3b6f5a2540f80da3a9f9acc0a1a6b00e89023 = $this->env->getExtension("native_profiler");
        $__internal_7b6c38e197c4538cb0f2f4ddf9f3b6f5a2540f80da3a9f9acc0a1a6b00e89023->enter($__internal_7b6c38e197c4538cb0f2f4ddf9f3b6f5a2540f80da3a9f9acc0a1a6b00e89023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7b6c38e197c4538cb0f2f4ddf9f3b6f5a2540f80da3a9f9acc0a1a6b00e89023->leave($__internal_7b6c38e197c4538cb0f2f4ddf9f3b6f5a2540f80da3a9f9acc0a1a6b00e89023_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5724ec7aac91df8529d3ed4f1f27cfedeeee9bd0d6ffcdc204f5f908a0cafcf1 = $this->env->getExtension("native_profiler");
        $__internal_5724ec7aac91df8529d3ed4f1f27cfedeeee9bd0d6ffcdc204f5f908a0cafcf1->enter($__internal_5724ec7aac91df8529d3ed4f1f27cfedeeee9bd0d6ffcdc204f5f908a0cafcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5724ec7aac91df8529d3ed4f1f27cfedeeee9bd0d6ffcdc204f5f908a0cafcf1->leave($__internal_5724ec7aac91df8529d3ed4f1f27cfedeeee9bd0d6ffcdc204f5f908a0cafcf1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
