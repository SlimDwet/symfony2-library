<?php

/* ::base.html.twig */
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
        $__internal_e3603929dd21c448735674f8e17a3532d67533803c3232a19b61bce1f1501d06 = $this->env->getExtension("native_profiler");
        $__internal_e3603929dd21c448735674f8e17a3532d67533803c3232a19b61bce1f1501d06->enter($__internal_e3603929dd21c448735674f8e17a3532d67533803c3232a19b61bce1f1501d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e3603929dd21c448735674f8e17a3532d67533803c3232a19b61bce1f1501d06->leave($__internal_e3603929dd21c448735674f8e17a3532d67533803c3232a19b61bce1f1501d06_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d439699b8fadd6c625e815bd9b5b2ae3198000f6844dff6e17b67592043dbb7a = $this->env->getExtension("native_profiler");
        $__internal_d439699b8fadd6c625e815bd9b5b2ae3198000f6844dff6e17b67592043dbb7a->enter($__internal_d439699b8fadd6c625e815bd9b5b2ae3198000f6844dff6e17b67592043dbb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d439699b8fadd6c625e815bd9b5b2ae3198000f6844dff6e17b67592043dbb7a->leave($__internal_d439699b8fadd6c625e815bd9b5b2ae3198000f6844dff6e17b67592043dbb7a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7e8fd3fe3bd5a64ddce02927ac754b600aedd568b93bbf7988897042464760a = $this->env->getExtension("native_profiler");
        $__internal_e7e8fd3fe3bd5a64ddce02927ac754b600aedd568b93bbf7988897042464760a->enter($__internal_e7e8fd3fe3bd5a64ddce02927ac754b600aedd568b93bbf7988897042464760a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e7e8fd3fe3bd5a64ddce02927ac754b600aedd568b93bbf7988897042464760a->leave($__internal_e7e8fd3fe3bd5a64ddce02927ac754b600aedd568b93bbf7988897042464760a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_efbe37c4ce59fd89708ed1ba709ce9508ad7a70529a2db61ae26f5d49e6105be = $this->env->getExtension("native_profiler");
        $__internal_efbe37c4ce59fd89708ed1ba709ce9508ad7a70529a2db61ae26f5d49e6105be->enter($__internal_efbe37c4ce59fd89708ed1ba709ce9508ad7a70529a2db61ae26f5d49e6105be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_efbe37c4ce59fd89708ed1ba709ce9508ad7a70529a2db61ae26f5d49e6105be->leave($__internal_efbe37c4ce59fd89708ed1ba709ce9508ad7a70529a2db61ae26f5d49e6105be_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e9c44bf75a13f904be8d5a218b30813e3da2b02b1897607cc7bbd6747b86674b = $this->env->getExtension("native_profiler");
        $__internal_e9c44bf75a13f904be8d5a218b30813e3da2b02b1897607cc7bbd6747b86674b->enter($__internal_e9c44bf75a13f904be8d5a218b30813e3da2b02b1897607cc7bbd6747b86674b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e9c44bf75a13f904be8d5a218b30813e3da2b02b1897607cc7bbd6747b86674b->leave($__internal_e9c44bf75a13f904be8d5a218b30813e3da2b02b1897607cc7bbd6747b86674b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
