<?php

/* base.html.twig */
class __TwigTemplate_377bcaee8ca78177ed59abf745922275dc7fcc617f52991b81d4254c65e86a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05815f6f374b1d3b060a7dd08a500d1b0799491e2367cc84b3244eb38f00fc03 = $this->env->getExtension("native_profiler");
        $__internal_05815f6f374b1d3b060a7dd08a500d1b0799491e2367cc84b3244eb38f00fc03->enter($__internal_05815f6f374b1d3b060a7dd08a500d1b0799491e2367cc84b3244eb38f00fc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        </div>
        <script src=\"//code.jquery.com/jquery-1.12.0.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_05815f6f374b1d3b060a7dd08a500d1b0799491e2367cc84b3244eb38f00fc03->leave($__internal_05815f6f374b1d3b060a7dd08a500d1b0799491e2367cc84b3244eb38f00fc03_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a131c37933aa38a31ffdef57857cc42eefedcbac474048b7c8f6ab3cf3f4184 = $this->env->getExtension("native_profiler");
        $__internal_5a131c37933aa38a31ffdef57857cc42eefedcbac474048b7c8f6ab3cf3f4184->enter($__internal_5a131c37933aa38a31ffdef57857cc42eefedcbac474048b7c8f6ab3cf3f4184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5a131c37933aa38a31ffdef57857cc42eefedcbac474048b7c8f6ab3cf3f4184->leave($__internal_5a131c37933aa38a31ffdef57857cc42eefedcbac474048b7c8f6ab3cf3f4184_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f29d1d15c30a81493e548749bc4878fc024e93d45c57c1c66412d6b79ed3159 = $this->env->getExtension("native_profiler");
        $__internal_3f29d1d15c30a81493e548749bc4878fc024e93d45c57c1c66412d6b79ed3159->enter($__internal_3f29d1d15c30a81493e548749bc4878fc024e93d45c57c1c66412d6b79ed3159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3f29d1d15c30a81493e548749bc4878fc024e93d45c57c1c66412d6b79ed3159->leave($__internal_3f29d1d15c30a81493e548749bc4878fc024e93d45c57c1c66412d6b79ed3159_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_53d65eddf83fa79c105d59b39f196881c14e9effb5fb8c262995b7c8292dcf5a = $this->env->getExtension("native_profiler");
        $__internal_53d65eddf83fa79c105d59b39f196881c14e9effb5fb8c262995b7c8292dcf5a->enter($__internal_53d65eddf83fa79c105d59b39f196881c14e9effb5fb8c262995b7c8292dcf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_53d65eddf83fa79c105d59b39f196881c14e9effb5fb8c262995b7c8292dcf5a->leave($__internal_53d65eddf83fa79c105d59b39f196881c14e9effb5fb8c262995b7c8292dcf5a_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_718aab6d51ff83e9df8ddd13216ae011c57999096e724ec9ab81a464028aec00 = $this->env->getExtension("native_profiler");
        $__internal_718aab6d51ff83e9df8ddd13216ae011c57999096e724ec9ab81a464028aec00->enter($__internal_718aab6d51ff83e9df8ddd13216ae011c57999096e724ec9ab81a464028aec00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_718aab6d51ff83e9df8ddd13216ae011c57999096e724ec9ab81a464028aec00->leave($__internal_718aab6d51ff83e9df8ddd13216ae011c57999096e724ec9ab81a464028aec00_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 16,  88 => 12,  77 => 7,  65 => 5,  56 => 17,  54 => 16,  49 => 13,  47 => 12,  39 => 8,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*         <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
