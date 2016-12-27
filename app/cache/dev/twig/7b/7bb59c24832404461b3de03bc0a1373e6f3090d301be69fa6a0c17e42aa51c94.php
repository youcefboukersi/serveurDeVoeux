<?php

/* SRVDVServerBundle:responsable:MatiereResponsable.html.twig */
class __TwigTemplate_f8eded35fad093df127b8a80192ef9cc0ceb387b8e6bb4465987e5e676d1fa57 extends Twig_Template
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
        $__internal_8541cae2a44ec72d5db68f36b8d57cf07c1b13f66e82bd394ab72089d68a09ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8541cae2a44ec72d5db68f36b8d57cf07c1b13f66e82bd394ab72089d68a09ee->enter($__internal_8541cae2a44ec72d5db68f36b8d57cf07c1b13f66e82bd394ab72089d68a09ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:MatiereResponsable.html.twig"));

        // line 1
        $this->loadTemplate("SRVDVServerBundle:responsable:MenuResponsable.html.twig", "SRVDVServerBundle:responsable:MatiereResponsable.html.twig", 1)->display($context);
        // line 2
        echo "

<div id=\"nav\" >
\t<div id=\"enseignant\" class=\"ouvert\">
\t\t<h3>Responsable</h3>
\t\t<ul>
\t\t\t<li  ><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("form_profile_user_resp");
        echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
\t\t\t<li  class=\"active\" ><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Matiere");
        echo "\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Matières</a></li></br>
\t\t\t<li  ><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_inscription");
        echo "\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  Résérvation</a></li></br>
\t\t\t\t\t\t
\t\t</ul>
\t</div>
\t
</div>\t


<div id=\"content\">
\t</br>
\t\t<div class=\"col-xs-2 col-md-4 col-lg-3 centreVerticalement\">\t  
            ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nom", array()), 'label', array("label" => "Nom : "));
        echo "
\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "NombreGroupe", array()), 'label', array("label" => "Nombre de groupe : "));
        echo "
\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "NombreGroupe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbrHeurGroupe", array()), 'label', array("label" => "Nombre d'heures par groupe : "));
        echo "
\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbrHeurGroupe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "semestre", array()), 'label', array("label" => "Semestre : "));
        echo "
\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "semestre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "Filiere", array()), 'label', array("label" => "Filiere : "));
        echo "
\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "Filiere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "TypeEnseignant", array()), 'label', array("label" => "Type Enseignement : "));
        echo "
\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "TypeEnseignant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "reset", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
\t\t\t\t\t</div>
\t\t\t";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_end');
        echo "\t\t
\t\t</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
\t\t\t\t\t<tr><th>#</th><th>nom</th><th>heures/groupe</th><th>Nombre groupes</th><th>Année</th><th>semestre</th><th>Type Ensiegnement</th><th>Filiere</th><th>Mod</th><th>Supp</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ListeMatieres"] ?? $this->getContext($context, "ListeMatieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 65
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nbrHeurGroupe", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "NombreGroupe", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "User", array()), "dateUtilisateur", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "semestre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "TypeEnseignant", array()), "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Matiere", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
\t\t\t\t\t\t\t\t<td><button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser(";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo ")\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button></td>
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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
        window.location.href =\"SuppMatiere/\"+id;
\t}

}
</script>


";
        // line 107
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:responsable:MatiereResponsable.html.twig", 107)->display($context);
        
        $__internal_8541cae2a44ec72d5db68f36b8d57cf07c1b13f66e82bd394ab72089d68a09ee->leave($__internal_8541cae2a44ec72d5db68f36b8d57cf07c1b13f66e82bd394ab72089d68a09ee_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:responsable:MatiereResponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 107,  198 => 79,  189 => 76,  185 => 75,  180 => 73,  176 => 72,  172 => 71,  168 => 70,  164 => 69,  160 => 68,  156 => 67,  152 => 66,  149 => 65,  145 => 64,  131 => 53,  126 => 51,  122 => 50,  114 => 45,  110 => 44,  104 => 41,  100 => 40,  94 => 37,  90 => 36,  83 => 32,  79 => 31,  73 => 28,  69 => 27,  63 => 24,  59 => 23,  54 => 21,  40 => 10,  36 => 9,  32 => 8,  24 => 2,  22 => 1,);
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
\t\t\t<li  ><a href=\"{{ path('form_profile_user_resp')}}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
\t\t\t<li  class=\"active\" ><a href=\"{{ path('list_form_Matiere')}}\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Matières</a></li></br>
\t\t\t<li  ><a href=\"{{path('list_form_inscription')}}\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  Résérvation</a></li></br>
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
\t\t\t\t\t{{ form_label(f.nom,'Nom : ')}}
\t\t\t\t\t{{ form_widget(f.nom,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.NombreGroupe,'Nombre de groupe : ')}}
\t\t\t\t\t{{ form_widget(f.NombreGroupe,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.nbrHeurGroupe,'Nombre d\\'heures par groupe : ')}}
\t\t\t\t\t{{ form_widget(f.nbrHeurGroupe,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.semestre,'Semestre : ')}}
\t\t\t\t\t{{ form_widget(f.semestre,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.Filiere,'Filiere : ')}}
\t\t\t\t\t{{ form_widget(f.Filiere,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(f.TypeEnseignant,'Type Enseignement : ')}}
\t\t\t\t\t{{ form_widget(f.TypeEnseignant,{'attr':{'class':'form-control'}})}}
\t\t\t\t\t</div>
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
\t\t\t\t\t<tr><th>#</th><th>nom</th><th>heures/groupe</th><th>Nombre groupes</th><th>Année</th><th>semestre</th><th>Type Ensiegnement</th><th>Filiere</th><th>Mod</th><th>Supp</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for u in ListeMatieres %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ u.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.nom }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.nbrHeurGroupe }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.NombreGroupe }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.Filiere.User.dateUtilisateur }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.semestre }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.Filiere.nom}}</td>
\t\t\t\t\t\t\t\t<td>{{ u.TypeEnseignant.libelle }}</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='{{path('Modifier_Matiere',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
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
        window.location.href =\"SuppMatiere/\"+id;
\t}

}
</script>


{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}
", "SRVDVServerBundle:responsable:MatiereResponsable.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/responsable/MatiereResponsable.html.twig");
    }
}
