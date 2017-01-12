<?php

/* SRVDVServerBundle:responsable:ReserveResponsable.html.twig */
class __TwigTemplate_44f6e3f59ccc391b844dea927a53d98d60dc383d7d7802a018c715ca83cca7ff extends Twig_Template
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
        $__internal_f4104b24bf9feb28a2cee4958ce9ba3140616c40c6f7cd1a8ca3c2fd8acf38b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4104b24bf9feb28a2cee4958ce9ba3140616c40c6f7cd1a8ca3c2fd8acf38b7->enter($__internal_f4104b24bf9feb28a2cee4958ce9ba3140616c40c6f7cd1a8ca3c2fd8acf38b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:ReserveResponsable.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 31)));
        echo "
\t


<div id=\"content\">
\t</br>

\t</br>
\t\t<div class=\"col-xs-2 col-md-4 col-lg-3 centreVerticalement\">\t  
            ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                 <fieldset class=\"well the-fieldset\">
                 <legend > Ajouter une réservation:</legend>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbHeur", array()), 'label', array("label" => "Nombre d'heures  : "));
        echo "
\t\t\t\t\t";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbHeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "Matiere", array()), 'label', array("label" => "Matiere : "));
        echo "
\t\t\t\t\t";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "Matiere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "reset", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t </fieldset>
\t\t\t";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_end');
        echo "\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
                \t\t<tr><th colspan=\"20\">listes des réservations sur la filière \" ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fil"] ?? $this->getContext($context, "fil")), "niveau", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fil"] ?? $this->getContext($context, "fil")), "nom", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fil"] ?? $this->getContext($context, "fil")), "anneeFiliere", array()), "html", null, true);
        echo "\"</th></tr>
\t\t\t\t\t<tr><th>#</th><th>Date </th><th>Nombre d\\'heures </th><th>Utilisateur </th><th>Matiere</th><th>Type </th><th>Heures Total</th><th>Mod</th><th>Supp</th></tr>

\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 46
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute(($context["fil"] ?? $this->getContext($context, "fil")), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "filiere", array()), "id", array()))) {
                // line 47
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "dateInscription", array()), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nbHeur", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "nom", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "User", array()), "prenom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 54
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "nbrHeurGroupe", array()) * $this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "NombreGroupe", array())), "html", null, true);
                echo "</td>

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 58
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["u"], "user", array()), "id", array()))) {
                    // line 59
                    echo "\t\t\t\t\t\t\t\t\t\t<button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ModInscription_responsable", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
\t\t\t\t\t\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 63
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["u"], "user", array()), "id", array()))) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                    echo ")\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
\t\t\t\t\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            // line 68
            echo "\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
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
        window.location.href =\"SuppInscription/\"+id;
\t}

}
</script>


";
        // line 98
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:responsable:ReserveResponsable.html.twig", 98)->display($context);
        
        $__internal_f4104b24bf9feb28a2cee4958ce9ba3140616c40c6f7cd1a8ca3c2fd8acf38b7->leave($__internal_f4104b24bf9feb28a2cee4958ce9ba3140616c40c6f7cd1a8ca3c2fd8acf38b7_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:responsable:ReserveResponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 98,  177 => 70,  170 => 68,  165 => 66,  159 => 64,  157 => 63,  153 => 61,  147 => 59,  145 => 58,  138 => 54,  134 => 53,  130 => 52,  124 => 51,  120 => 50,  116 => 49,  112 => 48,  109 => 47,  106 => 46,  102 => 45,  90 => 40,  79 => 32,  73 => 29,  69 => 28,  59 => 21,  55 => 20,  48 => 16,  44 => 15,  37 => 11,  25 => 2,  22 => 1,);
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
{{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 31 })) }}
\t


<div id=\"content\">
\t</br>

\t</br>
\t\t<div class=\"col-xs-2 col-md-4 col-lg-3 centreVerticalement\">\t  
            {{ form_start(f,{'attr':{'novalidate':'novalidate'}})}}
                 <fieldset class=\"well the-fieldset\">
                 <legend > Ajouter une réservation:</legend>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.nbHeur,'Nombre d\\'heures  : ')}}
\t\t\t\t\t{{ form_widget(f.nbHeur,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.Matiere,'Matiere : ')}}
\t\t\t\t\t{{ form_widget(f.Matiere,{'attr':{'class':'form-control'}})}}

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t{{ form_widget(f.save,{'attr':{'class':'btn btn-success'}})}}
\t\t\t\t\t{{ form_widget(f.reset,{'attr':{'class':'btn btn-info'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t </fieldset>
\t\t\t{{ form_end(f)}}\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
                \t\t<tr><th colspan=\"20\">listes des réservations sur la filière \" {{ fil.niveau}} {{ fil.nom}}  {{ fil.anneeFiliere}}\"</th></tr>
\t\t\t\t\t<tr><th>#</th><th>Date </th><th>Nombre d\\'heures </th><th>Utilisateur </th><th>Matiere</th><th>Type </th><th>Heures Total</th><th>Mod</th><th>Supp</th></tr>

\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for u in reservations %}
\t\t\t\t\t\t{% if fil.id  == u.Matiere.filiere.id  %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ u.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.dateInscription | date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.nbHeur }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.User.nom }}&nbsp;{{ u.User.prenom }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.Matiere.nom}}</td>
\t\t\t\t\t\t\t\t<td>{{ u.Matiere.TypeEnseignant.libelle }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.Matiere.nbrHeurGroupe * u.Matiere.NombreGroupe }}</td>

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if app.user.id  == u.user.id  %}
\t\t\t\t\t\t\t\t\t\t<button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='{{path('ModInscription_responsable',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if app.user.id  == u.user.id  %}
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser({{ u.id }})\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endif %}\t
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
        window.location.href =\"SuppInscription/\"+id;
\t}

}
</script>


{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}
", "SRVDVServerBundle:responsable:ReserveResponsable.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/responsable/ReserveResponsable.html.twig");
    }
}
