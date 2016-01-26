<?php

/* :author:show.html.twig */
class __TwigTemplate_f1da250e2f37ec6c0048503c10b64edc0b5152f5e4064326834108076dc47832 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":author:show.html.twig", 1);
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
        $__internal_864f860a0b4cb68c9908fb61e7dfd0685c539d203fe9434efa9e0370f3c208ec = $this->env->getExtension("native_profiler");
        $__internal_864f860a0b4cb68c9908fb61e7dfd0685c539d203fe9434efa9e0370f3c208ec->enter($__internal_864f860a0b4cb68c9908fb61e7dfd0685c539d203fe9434efa9e0370f3c208ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":author:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_864f860a0b4cb68c9908fb61e7dfd0685c539d203fe9434efa9e0370f3c208ec->leave($__internal_864f860a0b4cb68c9908fb61e7dfd0685c539d203fe9434efa9e0370f3c208ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_685b3e82dabfb98bb7027ca75158354a1b7cd43301c844bad9418fc67f71c2bb = $this->env->getExtension("native_profiler");
        $__internal_685b3e82dabfb98bb7027ca75158354a1b7cd43301c844bad9418fc67f71c2bb->enter($__internal_685b3e82dabfb98bb7027ca75158354a1b7cd43301c844bad9418fc67f71c2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Author</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "firstname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "lastname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nickname</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "nickname", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("author_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("author_edit", array("id" => $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_685b3e82dabfb98bb7027ca75158354a1b7cd43301c844bad9418fc67f71c2bb->leave($__internal_685b3e82dabfb98bb7027ca75158354a1b7cd43301c844bad9418fc67f71c2bb_prof);

    }

    public function getTemplateName()
    {
        return ":author:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Author</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ author.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Firstname</th>*/
/*                 <td>{{ author.firstname }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastname</th>*/
/*                 <td>{{ author.lastname }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nickname</th>*/
/*                 <td>{{ author.nickname }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('author_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('author_edit', { 'id': author.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
