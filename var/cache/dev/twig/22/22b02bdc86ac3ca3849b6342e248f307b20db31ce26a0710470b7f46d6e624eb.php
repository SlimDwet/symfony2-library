<?php

/* :author:index.html.twig */
class __TwigTemplate_e4b1d4dbc4ce552a89169a6eaa0e9b9549a960d22b4440646f212472186e804c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":author:index.html.twig", 1);
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
        $__internal_77650a8220bcb4c157c09127d58826fb1dd826c32b9c430ccf8f234224bf9c1d = $this->env->getExtension("native_profiler");
        $__internal_77650a8220bcb4c157c09127d58826fb1dd826c32b9c430ccf8f234224bf9c1d->enter($__internal_77650a8220bcb4c157c09127d58826fb1dd826c32b9c430ccf8f234224bf9c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":author:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77650a8220bcb4c157c09127d58826fb1dd826c32b9c430ccf8f234224bf9c1d->leave($__internal_77650a8220bcb4c157c09127d58826fb1dd826c32b9c430ccf8f234224bf9c1d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a28b79a43a5fd3c109ef37529bacfdf382abc43b86e3768d3a04097235002728 = $this->env->getExtension("native_profiler");
        $__internal_a28b79a43a5fd3c109ef37529bacfdf382abc43b86e3768d3a04097235002728->enter($__internal_a28b79a43a5fd3c109ef37529bacfdf382abc43b86e3768d3a04097235002728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"auhors\">
        <h1 class=\"page-header\">Liste des auteurs</h1>
        <br>
        <p>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("author_new");
        echo "\" class=\"btn btn-default\">Créer un auteur</a>
        </p>
        <br>
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Nom d'artiste</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors")));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 23
            echo "                <tr>
                    <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("author_show", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "firstname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "lastname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "nickname", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("author_show", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("author_edit", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
        </table>

    </div>
";
        
        $__internal_a28b79a43a5fd3c109ef37529bacfdf382abc43b86e3768d3a04097235002728->leave($__internal_a28b79a43a5fd3c109ef37529bacfdf382abc43b86e3768d3a04097235002728_prof);

    }

    public function getTemplateName()
    {
        return ":author:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 40,  97 => 34,  91 => 31,  84 => 27,  80 => 26,  76 => 25,  70 => 24,  67 => 23,  63 => 22,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="auhors">*/
/*         <h1 class="page-header">Liste des auteurs</h1>*/
/*         <br>*/
/*         <p>*/
/*             <a href="{{ path('author_new') }}" class="btn btn-default">Créer un auteur</a>*/
/*         </p>*/
/*         <br>*/
/*         <table class="table table-hover">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Prénom</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Nom d'artiste</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for author in authors %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('author_show', { 'id': author.id }) }}">{{ author.id }}</a></td>*/
/*                     <td>{{ author.firstname }}</td>*/
/*                     <td>{{ author.lastname }}</td>*/
/*                     <td>{{ author.nickname }}</td>*/
/*                     <td>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('author_show', { 'id': author.id }) }}">show</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('author_edit', { 'id': author.id }) }}">edit</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/* */
/*     </div>*/
/* {% endblock %}*/
