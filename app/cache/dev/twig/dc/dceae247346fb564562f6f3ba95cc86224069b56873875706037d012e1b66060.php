<?php

/* SRVDVServerBundle:responsable:ReserveResponsable.html.twig */
class __TwigTemplate_c46546ed0a7f10c5eb49437a0af84a96fdae6818c9f1c75375cf2f8e18ab3ad3 extends Twig_Template
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
        $__internal_99f7b5bc948460827a80f32f18c03151250d04d1f38a62f6a47edf6af17645f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f7b5bc948460827a80f32f18c03151250d04d1f38a62f6a47edf6af17645f5->enter($__internal_99f7b5bc948460827a80f32f18c03151250d04d1f38a62f6a47edf6af17645f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:ReserveResponsable.html.twig"));

        // line 1
        $this->loadTemplate("SRVDVServerBundle:responsable:MenuResponsable.html.twig", "SRVDVServerBundle:responsable:ReserveResponsable.html.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"nav\" >
\t<div id=\"enseignant\" class=\"ouvert\">
\t\t<h3>Responsable</h3>
\t\t<ul>
\t\t\t<li  ><a href=\"\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
\t\t\t<li   ><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/responsable/Matiere\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Matières</a></li></br>
\t\t\t<li  class=\"active\"><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/responsable/inscription\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  Résérvation</a></li></br>
\t\t\t\t\t\t
\t\t</ul>
\t</div>
\t
</div>\t


<div id=\"content\">
\t</br>
\t\t<div class=\"col-xs-2 col-md-4 col-lg-3 centreVerticalement\">\t  
            ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "dateInscription", array()), 'label', array("label" => "Date Inscription : "));
        echo "
\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "dateInscription", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nbHeur", array()), 'label', array("label" => "Nombre d'heures  : "));
        echo "
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nbHeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "TypeEnseignant", array()), 'label', array("label" => "Type enseignement : "));
        echo "
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "TypeEnseignant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Utilisateur", array()), 'label', array("label" => "Utilisateur (session) : "));
        echo "
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Utilisateur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Matiere", array()), 'label', array("label" => "Matiere : "));
        echo "
\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Matiere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "reset", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
\t\t\t\t\t</div>
\t\t\t";
        // line 48
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>Date Inscription</th><th>Nombre d\\'heures </th><th>Type enseignement</th><th>Matiere</th><th>Utilisateur (session)</th><th>Mod</th><th>Supp</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 60
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "dateInscription", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nbHeur", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Utilisateur", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Utilisateur", array()), "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "TypeEnseignant", array()), "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='ModInscription/";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
\t\t\t\t\t\t\t\t<td><button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser(";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo ")\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button></td>
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
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
        // line 100
        $this->loadTemplate("SRVDVServerBundle:responsable:footerResponsable.html.twig", "SRVDVServerBundle:responsable:ReserveResponsable.html.twig", 100)->display($context);
        
        $__internal_99f7b5bc948460827a80f32f18c03151250d04d1f38a62f6a47edf6af17645f5->leave($__internal_99f7b5bc948460827a80f32f18c03151250d04d1f38a62f6a47edf6af17645f5_prof);

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
        return array (  202 => 100,  172 => 72,  163 => 69,  159 => 68,  154 => 66,  150 => 65,  144 => 64,  140 => 63,  136 => 62,  132 => 61,  129 => 60,  125 => 59,  111 => 48,  106 => 46,  102 => 45,  93 => 39,  89 => 38,  83 => 35,  79 => 34,  73 => 31,  69 => 30,  63 => 27,  59 => 26,  53 => 23,  49 => 22,  44 => 20,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"SRVDVServerBundle:responsable:MenuResponsable.html.twig\" %}

<div id=\"nav\" >
\t<div id=\"enseignant\" class=\"ouvert\">
\t\t<h3>Responsable</h3>
\t\t<ul>
\t\t\t<li  ><a href=\"\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
\t\t\t<li   ><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/responsable/Matiere\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Matières</a></li></br>
\t\t\t<li  class=\"active\"><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/responsable/inscription\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  Résérvation</a></li></br>
\t\t\t\t\t\t
\t\t</ul>
\t</div>
\t
</div>\t


<div id=\"content\">
\t</br>
\t\t<div class=\"col-xs-2 col-md-4 col-lg-3 centreVerticalement\">\t  
            {{ form_start(f,{'attr':{'novalidate':'novalidate'}})}}
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.dateInscription,'Date Inscription : ')}}
\t\t\t\t\t{{ form_widget(f.dateInscription,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.nbHeur,'Nombre d\\'heures  : ')}}
\t\t\t\t\t{{ form_widget(f.nbHeur,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.TypeEnseignant,'Type enseignement : ')}}
\t\t\t\t\t{{ form_widget(f.TypeEnseignant,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.Utilisateur,'Utilisateur (session) : ')}}
\t\t\t\t\t{{ form_widget(f.Utilisateur,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
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
\t\t\t{{ form_end(f)}}\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>Date Inscription</th><th>Nombre d\\'heures </th><th>Type enseignement</th><th>Matiere</th><th>Utilisateur (session)</th><th>Mod</th><th>Supp</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for u in reservations %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ u.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.dateInscription | date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.nbHeur }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.Utilisateur.nom }}&nbsp;{{ u.Utilisateur.prenom }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.Matiere.nom}}</td>
\t\t\t\t\t\t\t\t<td>{{ u.TypeEnseignant.libelle }}</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='ModInscription/{{ u.id }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
\t\t\t\t\t\t\t\t<td><button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser({{ u.id }})\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button></td>
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
        window.location.href =\"SuppInscription/\"+id;
\t}

}
</script>


{% include \"SRVDVServerBundle:responsable:footerResponsable.html.twig\" %}
", "SRVDVServerBundle:responsable:ReserveResponsable.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/responsable/ReserveResponsable.html.twig");
    }
}
