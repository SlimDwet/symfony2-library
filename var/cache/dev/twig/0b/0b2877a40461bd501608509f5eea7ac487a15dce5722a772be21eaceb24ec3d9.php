<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_d1a9f290de99ffe1a1bab429d8ec566334f738bc56ca2aa0075fd9897827ec9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1520aa532ac9f75d087289e0c79d36aa89b11c35938987d65b29998c834f3c0e = $this->env->getExtension("native_profiler");
        $__internal_1520aa532ac9f75d087289e0c79d36aa89b11c35938987d65b29998c834f3c0e->enter($__internal_1520aa532ac9f75d087289e0c79d36aa89b11c35938987d65b29998c834f3c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1520aa532ac9f75d087289e0c79d36aa89b11c35938987d65b29998c834f3c0e->leave($__internal_1520aa532ac9f75d087289e0c79d36aa89b11c35938987d65b29998c834f3c0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59373a2e77176b5ff023de66838259a43193b3029c0151309bf895838f001649 = $this->env->getExtension("native_profiler");
        $__internal_59373a2e77176b5ff023de66838259a43193b3029c0151309bf895838f001649->enter($__internal_59373a2e77176b5ff023de66838259a43193b3029c0151309bf895838f001649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div>
    ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
        <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 11
            echo "        <!-- <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a> -->
    ";
        }
        // line 13
        echo "</div>

";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 16
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 17
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
<div>
    ";
        // line 24
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 26
        echo "</div>
";
        
        $__internal_59373a2e77176b5ff023de66838259a43193b3029c0151309bf895838f001649->leave($__internal_59373a2e77176b5ff023de66838259a43193b3029c0151309bf895838f001649_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d1f72e5481c8868b86cc56bc3e459637b2680ab4ae6225d9ed44b84a893c003 = $this->env->getExtension("native_profiler");
        $__internal_8d1f72e5481c8868b86cc56bc3e459637b2680ab4ae6225d9ed44b84a893c003->enter($__internal_8d1f72e5481c8868b86cc56bc3e459637b2680ab4ae6225d9ed44b84a893c003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "    ";
        
        $__internal_8d1f72e5481c8868b86cc56bc3e459637b2680ab4ae6225d9ed44b84a893c003->leave($__internal_8d1f72e5481c8868b86cc56bc3e459637b2680ab4ae6225d9ed44b84a893c003_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 25,  114 => 24,  106 => 26,  104 => 24,  100 => 22,  87 => 18,  82 => 17,  77 => 16,  73 => 15,  69 => 13,  61 => 11,  55 => 8,  51 => 7,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div>*/
/*     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*         {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*         <a href="{{ path('fos_user_security_logout') }}">*/
/*             {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*         </a>*/
/*     {% else %}*/
/*         <!-- <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a> -->*/
/*     {% endif %}*/
/* </div>*/
/* */
/* {% for type, messages in app.session.flashBag.all %}*/
/*     {% for message in messages %}*/
/*         <div class="{{ type }}">*/
/*             {{ message|trans({}, 'FOSUserBundle') }}*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endfor %}*/
/* */
/* <div>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
/* {% endblock body %}*/
