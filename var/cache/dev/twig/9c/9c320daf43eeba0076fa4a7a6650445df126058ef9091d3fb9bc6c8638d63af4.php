<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a40bed17222526a456d002dc03d8e599f02cd9f014c432ac17c677855804b0e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_31d8a2046b24d05252925f1afada6d3b86cec2f5bf89a2c8b34baf74b5513326 = $this->env->getExtension("native_profiler");
        $__internal_31d8a2046b24d05252925f1afada6d3b86cec2f5bf89a2c8b34baf74b5513326->enter($__internal_31d8a2046b24d05252925f1afada6d3b86cec2f5bf89a2c8b34baf74b5513326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31d8a2046b24d05252925f1afada6d3b86cec2f5bf89a2c8b34baf74b5513326->leave($__internal_31d8a2046b24d05252925f1afada6d3b86cec2f5bf89a2c8b34baf74b5513326_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e224a66ef718e4dd0abc173826e0ee06b289b5918745e613832d712cdeee516b = $this->env->getExtension("native_profiler");
        $__internal_e224a66ef718e4dd0abc173826e0ee06b289b5918745e613832d712cdeee516b->enter($__internal_e224a66ef718e4dd0abc173826e0ee06b289b5918745e613832d712cdeee516b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e224a66ef718e4dd0abc173826e0ee06b289b5918745e613832d712cdeee516b->leave($__internal_e224a66ef718e4dd0abc173826e0ee06b289b5918745e613832d712cdeee516b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0648e2b0151a00070c02e84735c356bd5ec8f0ab7d3acb1c34bed82c15e2cc83 = $this->env->getExtension("native_profiler");
        $__internal_0648e2b0151a00070c02e84735c356bd5ec8f0ab7d3acb1c34bed82c15e2cc83->enter($__internal_0648e2b0151a00070c02e84735c356bd5ec8f0ab7d3acb1c34bed82c15e2cc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0648e2b0151a00070c02e84735c356bd5ec8f0ab7d3acb1c34bed82c15e2cc83->leave($__internal_0648e2b0151a00070c02e84735c356bd5ec8f0ab7d3acb1c34bed82c15e2cc83_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7afddb10e7d410e55d62d6071ac3adc5cfa49a3e44b86c2f782a00231c2b793e = $this->env->getExtension("native_profiler");
        $__internal_7afddb10e7d410e55d62d6071ac3adc5cfa49a3e44b86c2f782a00231c2b793e->enter($__internal_7afddb10e7d410e55d62d6071ac3adc5cfa49a3e44b86c2f782a00231c2b793e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7afddb10e7d410e55d62d6071ac3adc5cfa49a3e44b86c2f782a00231c2b793e->leave($__internal_7afddb10e7d410e55d62d6071ac3adc5cfa49a3e44b86c2f782a00231c2b793e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
