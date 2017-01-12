<?php

/* SRVDVServerBundle:admin:AnneeAdmin.html.twig */
class __TwigTemplate_506763d39e9e86d1dfbd1693d0cbe07979055e2d427c4a66f93d4947f0723d62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d393464529bbb5ee8544025bac612712824a0361143b5b54747f6d3dda7e986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d393464529bbb5ee8544025bac612712824a0361143b5b54747f6d3dda7e986->enter($__internal_1d393464529bbb5ee8544025bac612712824a0361143b5b54747f6d3dda7e986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:AnneeAdmin.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 45)));
        echo "

<div id=\"content\">
\t</br>
\t\t<div class=\"col-xs-2 col-md-4 col-lg-3 centreVerticalement\">\t  
            ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "annee", array()), 'label', array("label" => "Année : "));
        echo "
\t\t\t\t\t";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "annee", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "etat", array()), 'label', array("label" => "Actif: "));
        echo "
\t\t\t\t\t";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "etat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_end');
        echo "\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>nom</th><th>Coefficient</th><th>Mod</th><th>Supp</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Annees"] ?? $this->getContext($context, "Annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 34
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "annee", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 38
            if (($this->getAttribute($context["u"], "etat", array()) == 1)) {
                // line 39
                echo "                                 OUI
                                ";
            }
            // line 40
            echo "</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 44
            if (($this->getAttribute($context["u"], "etat", array()) == 0)) {
                // line 45
                echo "                                 <button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Annee", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
                                ";
            }
            // line 46
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 48
            if (($this->getAttribute($context["u"], "etat", array()) == 0)) {
                echo "<button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                echo ")\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
\t\t\t\t\t\t\t\t";
            }
            // line 49
            echo "</td>
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                   </tbody>
\t\t\t\t</table> 
            </div>
\t\t</div>
\t
</div>




<script>
\$(document).ready(function() {
    \$('#example').DataTable();
} );

function SupprimerUser(id){

\tvar rep=confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur' ) ;

\tif(rep){
        window.location.href ='suppAnnee/'+id;
\t}

}
</script>
";
        // line 77
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:AnneeAdmin.html.twig", 77)->display($context);
        
        $__internal_1d393464529bbb5ee8544025bac612712824a0361143b5b54747f6d3dda7e986->leave($__internal_1d393464529bbb5ee8544025bac612712824a0361143b5b54747f6d3dda7e986_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:AnneeAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 77,  135 => 52,  127 => 49,  120 => 48,  116 => 46,  110 => 45,  108 => 44,  102 => 40,  98 => 39,  96 => 38,  91 => 36,  87 => 35,  84 => 34,  80 => 33,  66 => 22,  60 => 19,  52 => 14,  48 => 13,  42 => 10,  38 => 9,  33 => 7,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
{{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 45 })) }}

<div id=\"content\">
\t</br>
\t\t<div class=\"col-xs-2 col-md-4 col-lg-3 centreVerticalement\">\t  
            {{ form_start(f,{'attr':{'novalidate':'novalidate'}})}}
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.annee,'Année : ')}}
\t\t\t\t\t{{ form_widget(f.annee,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.etat,'Actif: ')}}
\t\t\t\t\t{{ form_widget(f.etat,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_widget(f.save,{'attr':{'class':'btn btn-success'}})}}
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t{{ form_end(f)}}\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>nom</th><th>Coefficient</th><th>Mod</th><th>Supp</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for u in Annees %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ u.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.annee }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if u.etat == 1 %}
                                 OUI
                                {% endif %}</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if u.etat == 0 %}
                                 <button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='{{path('Modifier_Annee',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
                                {% endif %}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if u.etat == 0 %}<button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser({{ u.id }})\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
\t\t\t\t\t\t\t\t{% endif %}</td>
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t{% endfor %}
                   </tbody>
\t\t\t\t</table> 
            </div>
\t\t</div>
\t
</div>




<script>
\$(document).ready(function() {
    \$('#example').DataTable();
} );

function SupprimerUser(id){

\tvar rep=confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur' ) ;

\tif(rep){
        window.location.href ='suppAnnee/'+id;
\t}

}
</script>
{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:AnneeAdmin.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/AnneeAdmin.html.twig");
    }
}
