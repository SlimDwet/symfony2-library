<?php

/* author/index.html.twig */
class __TwigTemplate_e4b1d4dbc4ce552a89169a6eaa0e9b9549a960d22b4440646f212472186e804c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "author/index.html.twig", 1);
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
        $__internal_6679e568a67f3dcc3545076c0628b021bf8e3d62e8a78a154f2a09e1f750b621 = $this->env->getExtension("native_profiler");
        $__internal_6679e568a67f3dcc3545076c0628b021bf8e3d62e8a78a154f2a09e1f750b621->enter($__internal_6679e568a67f3dcc3545076c0628b021bf8e3d62e8a78a154f2a09e1f750b621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6679e568a67f3dcc3545076c0628b021bf8e3d62e8a78a154f2a09e1f750b621->leave($__internal_6679e568a67f3dcc3545076c0628b021bf8e3d62e8a78a154f2a09e1f750b621_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_259efd6aa1ba1c6db5578dab2df8967c4f8d4842a41c0bc074eba39720dc0faa = $this->env->getExtension("native_profiler");
        $__internal_259efd6aa1ba1c6db5578dab2df8967c4f8d4842a41c0bc074eba39720dc0faa->enter($__internal_259efd6aa1ba1c6db5578dab2df8967c4f8d4842a41c0bc074eba39720dc0faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Author list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Nickname</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors")));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("author_show", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "lastname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "nickname", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("author_show", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
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
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("author_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_259efd6aa1ba1c6db5578dab2df8967c4f8d4842a41c0bc074eba39720dc0faa->leave($__internal_259efd6aa1ba1c6db5578dab2df8967c4f8d4842a41c0bc074eba39720dc0faa_prof);

    }

    public function getTemplateName()
    {
        return "author/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Author list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Firstname</th>*/
/*                 <th>Lastname</th>*/
/*                 <th>Nickname</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for author in authors %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('author_show', { 'id': author.id }) }}">{{ author.id }}</a></td>*/
/*                 <td>{{ author.firstname }}</td>*/
/*                 <td>{{ author.lastname }}</td>*/
/*                 <td>{{ author.nickname }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('author_show', { 'id': author.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('author_edit', { 'id': author.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('author_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
