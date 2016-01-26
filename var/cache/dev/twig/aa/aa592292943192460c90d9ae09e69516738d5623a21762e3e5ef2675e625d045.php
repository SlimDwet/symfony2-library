<?php

/* :author:new.html.twig */
class __TwigTemplate_42b13964c39c56564cea2845054766a15aec63bb2606a071c01660b21a052351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":author:new.html.twig", 1);
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
        $__internal_a1dde0191e3c938864de2832afe33067530e13a094479cbe95f76f416ad6bfbc = $this->env->getExtension("native_profiler");
        $__internal_a1dde0191e3c938864de2832afe33067530e13a094479cbe95f76f416ad6bfbc->enter($__internal_a1dde0191e3c938864de2832afe33067530e13a094479cbe95f76f416ad6bfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":author:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1dde0191e3c938864de2832afe33067530e13a094479cbe95f76f416ad6bfbc->leave($__internal_a1dde0191e3c938864de2832afe33067530e13a094479cbe95f76f416ad6bfbc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0615cd67cf3adc6a4d20bca7edce251eb0819f4e460146c12bb14bf8ebb1ac5f = $this->env->getExtension("native_profiler");
        $__internal_0615cd67cf3adc6a4d20bca7edce251eb0819f4e460146c12bb14bf8ebb1ac5f->enter($__internal_0615cd67cf3adc6a4d20bca7edce251eb0819f4e460146c12bb14bf8ebb1ac5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"page-header\">Ajout d'un auteur</h1>
    <br>
    <p>
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("author_index");
        echo "\" class=\"btn btn-default\">Liste des auteurs</a>
    </p>
    <br>
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        <div class=\"form-group\">
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Prénom"));
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'row', array("attr" => array("class" => "form-control"), "label" => false));
        echo "
            </div>
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'row', array("attr" => array("class" => "form-control"), "label" => false));
        echo "
            </div>
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nickname", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom d'artiste"));
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nickname", array()), 'row', array("attr" => array("class" => "form-control"), "label" => false));
        echo "
            </div>
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nickname", array()), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-4\">
                <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-default\" />
            </div>
        </div>
    ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_0615cd67cf3adc6a4d20bca7edce251eb0819f4e460146c12bb14bf8ebb1ac5f->leave($__internal_0615cd67cf3adc6a4d20bca7edce251eb0819f4e460146c12bb14bf8ebb1ac5f_prof);

    }

    public function getTemplateName()
    {
        return ":author:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  101 => 33,  96 => 31,  91 => 29,  84 => 25,  79 => 23,  74 => 21,  67 => 17,  62 => 15,  57 => 13,  51 => 10,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1 class="page-header">Ajout d'un auteur</h1>*/
/*     <br>*/
/*     <p>*/
/*         <a href="{{ path('author_index') }}" class="btn btn-default">Liste des auteurs</a>*/
/*     </p>*/
/*     <br>*/
/*     {{ form_start(form, {'attr': { 'class': 'form-horizontal' }}) }}*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.firstname, 'Prénom', {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*             <div class="col-sm-4">*/
/*                 {{ form_row(form.firstname, {'attr': {'class': 'form-control'}, 'label': false}) }}*/
/*             </div>*/
/*             {{ form_errors(form.firstname) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.lastname, 'Nom', {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*             <div class="col-sm-4">*/
/*                 {{ form_row(form.lastname, {'attr': {'class': 'form-control'}, 'label': false}) }}*/
/*             </div>*/
/*             {{ form_errors(form.lastname) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.nickname, "Nom d'artiste", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*             <div class="col-sm-4">*/
/*                 {{ form_row(form.nickname, {'attr': {'class': 'form-control'}, 'label': false}) }}*/
/*             </div>*/
/*             {{ form_errors(form.nickname) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-sm-offset-2 col-sm-4">*/
/*                 <input type="submit" value="Ajouter" class="btn btn-default" />*/
/*             </div>*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* */
