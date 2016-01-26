<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7487e28cf74fd481934e557753e716e05026e87a9896ca080d416a8f9bee67c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1574badb17bab1db04ab6dc31afc0787de382675b6b2b0c1019a73256118c995 = $this->env->getExtension("native_profiler");
        $__internal_1574badb17bab1db04ab6dc31afc0787de382675b6b2b0c1019a73256118c995->enter($__internal_1574badb17bab1db04ab6dc31afc0787de382675b6b2b0c1019a73256118c995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1574badb17bab1db04ab6dc31afc0787de382675b6b2b0c1019a73256118c995->leave($__internal_1574badb17bab1db04ab6dc31afc0787de382675b6b2b0c1019a73256118c995_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29ef0cd6bc5c039f40093079e2808d4e09dbf49f01ec9378528a96958d2c70ad = $this->env->getExtension("native_profiler");
        $__internal_29ef0cd6bc5c039f40093079e2808d4e09dbf49f01ec9378528a96958d2c70ad->enter($__internal_29ef0cd6bc5c039f40093079e2808d4e09dbf49f01ec9378528a96958d2c70ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
    <h1 class=\"page-header\">Connexion</h1>

    ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 12
        echo "
    <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

        <div class=\"form-group\">
            <label for=\"username\" class=\"col-sm-2 control-label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"col-sm-4\">
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Email\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\">
            </div>
        </div>

        <div class=\"form-group\">
            <label for=\"password\" class=\"col-sm-2 control-label\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"col-sm-4\">
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\">
            </div>
        </div>

        <div class=\"form-group\">
            <label for=\"remember_me\" class=\"col-sm-2 control-label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"col-sm-4\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-4\">
                <input type=\"submit\" class=\"btn btn-default\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </div>
    </form>
";
        
        $__internal_29ef0cd6bc5c039f40093079e2808d4e09dbf49f01ec9378528a96958d2c70ad->leave($__internal_29ef0cd6bc5c039f40093079e2808d4e09dbf49f01ec9378528a96958d2c70ad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 39,  89 => 31,  79 => 24,  71 => 19,  66 => 17,  60 => 14,  56 => 13,  53 => 12,  47 => 10,  45 => 9,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/*     <h1 class="page-header">Connexion</h1>*/
/* */
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path("fos_user_security_check") }}" method="post" class="form-horizontal">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*         <div class="form-group">*/
/*             <label for="username" class="col-sm-2 control-label">{{ 'security.login.username'|trans }}</label>*/
/*             <div class="col-sm-4">*/
/*                 <input type="text" class="form-control" id="username" name="_username" placeholder="Email" value="{{ last_username }}" required="required">*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="password" class="col-sm-2 control-label">{{ 'security.login.password'|trans }}</label>*/
/*             <div class="col-sm-4">*/
/*                 <input type="password" class="form-control" id="password" name="_password" required="required">*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="remember_me" class="col-sm-2 control-label">{{ 'security.login.remember_me'|trans }}</label>*/
/*             <div class="col-sm-4">*/
/*                 <input type="checkbox" id="remember_me" name="_remember_me" value="on">*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-offset-2 col-sm-4">*/
/*                 <input type="submit" class="btn btn-default" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* {% endblock fos_user_content %}*/
/* */
