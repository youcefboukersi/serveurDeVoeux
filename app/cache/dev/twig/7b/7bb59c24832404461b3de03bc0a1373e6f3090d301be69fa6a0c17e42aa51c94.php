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
        $__internal_e81c8fa19b8ec2c986c6d84e31d95f662ee3d900db412b44b28d842642301f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81c8fa19b8ec2c986c6d84e31d95f662ee3d900db412b44b28d842642301f1a->enter($__internal_e81c8fa19b8ec2c986c6d84e31d95f662ee3d900db412b44b28d842642301f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:MatiereResponsable.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 32)));
        echo "





<div align=\"center\">
\t</br>
\t\t<div class=\" centreVerticalement\">

  
            ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
            <fieldset class=\"well the-fieldset\">
    <legend > Ajouter une matière:</legend>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nom", array()), 'label', array("label" => "Nom : "));
        echo "
\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "NombreGroupe", array()), 'label', array("label" => "Nombre de groupe : "));
        echo "
\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "NombreGroupe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbrHeurGroupe", array()), 'label', array("label" => "Nombre d'heures par groupe : "));
        echo "
\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nbrHeurGroupe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "semestre", array()), 'label', array("label" => "Semestre : "));
        echo "
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "semestre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "Filiere", array()), 'label', array("label" => "Filiere : "));
        echo "
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "Filiere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "TypeEnseignant", array()), 'label', array("label" => "Type Enseignement : "));
        echo "
\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "TypeEnseignant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "reset", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t  </fieldset>

\t\t\t";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_end');
        echo "\t\t
\t\t</div>
<div class=\" centreVerticalement\">&nbsp;&nbsp;&nbsp;&nbsp;</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
                \t\t<tr ><th align=\"center\" colspan=\"20\" >Liste des matières</th></tr>
\t\t\t\t\t<tr><th>nom</th><th>h/groupe</th><th>groupes</th><th>Année</th><th>semestre</th><th>Filiere</th><th>Type-Ens</th><th>Mod</th><th>Supp</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ListeMatieres"] ?? $this->getContext($context, "ListeMatieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 63
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "anneeFiliere", array()), "id", array()) == ($context["idAnnee"] ?? $this->getContext($context, "idAnnee")))) {
                // line 64
                echo "
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nbrHeurGroupe", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "NombreGroupe", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "anneeFiliere", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "semestre", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "niveau", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "TypeEnseignant", array()), "libelle", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 75
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "user", array()), "id", array()))) {
                    // line 76
                    echo "\t\t\t\t\t\t\t\t\t \t<button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Matiere", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                    echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
 \t\t\t\t\t\t\t\t\t";
                }
                // line 77
                echo "\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 80
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["u"], "Filiere", array()), "user", array()), "id", array()))) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                    echo ")\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
\t\t\t\t\t\t\t\t\t";
                }
                // line 82
                echo "\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            // line 85
            echo "\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
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
        // line 115
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:responsable:MatiereResponsable.html.twig", 115)->display($context);
        
        $__internal_e81c8fa19b8ec2c986c6d84e31d95f662ee3d900db412b44b28d842642301f1a->leave($__internal_e81c8fa19b8ec2c986c6d84e31d95f662ee3d900db412b44b28d842642301f1a_prof);

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
        return array (  243 => 115,  213 => 87,  206 => 85,  200 => 82,  194 => 81,  192 => 80,  187 => 77,  181 => 76,  179 => 75,  173 => 72,  167 => 71,  163 => 70,  159 => 69,  155 => 68,  151 => 67,  147 => 66,  143 => 64,  140 => 63,  136 => 62,  120 => 49,  113 => 45,  109 => 44,  101 => 39,  97 => 38,  91 => 35,  87 => 34,  81 => 31,  77 => 30,  70 => 26,  66 => 25,  60 => 22,  56 => 21,  50 => 18,  46 => 17,  39 => 13,  25 => 2,  22 => 1,);
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
{{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", {'id': 32 })) }}





<div align=\"center\">
\t</br>
\t\t<div class=\" centreVerticalement\">

  
            {{ form_start(f,{'attr':{'novalidate':'novalidate'}})}}
            <fieldset class=\"well the-fieldset\">
    <legend > Ajouter une matière:</legend>
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
\t\t\t\t\t  </fieldset>

\t\t\t{{ form_end(f)}}\t\t
\t\t</div>
<div class=\" centreVerticalement\">&nbsp;&nbsp;&nbsp;&nbsp;</div>

\t\t<div class=\" centreVerticalement\">

\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                \t<thead>
                \t\t<tr ><th align=\"center\" colspan=\"20\" >Liste des matières</th></tr>
\t\t\t\t\t<tr><th>nom</th><th>h/groupe</th><th>groupes</th><th>Année</th><th>semestre</th><th>Filiere</th><th>Type-Ens</th><th>Mod</th><th>Supp</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for u in ListeMatieres %}
\t\t\t\t\t\t{% if u.Filiere.anneeFiliere.id == idAnnee %}

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ u.nom }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.nbrHeurGroupe }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.NombreGroupe }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.Filiere.anneeFiliere }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.semestre }}</td>
\t\t\t\t\t\t\t\t<td>{{ u.Filiere.niveau}}&nbsp;{{ u.Filiere.nom}}</td>
\t\t\t\t\t\t\t\t<td>{{ u.TypeEnseignant.libelle }}</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if app.user.id  == u.Filiere.user.id  %}
\t\t\t\t\t\t\t\t\t \t<button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='{{path('Modifier_Matiere',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
 \t\t\t\t\t\t\t\t\t{% endif %}\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if app.user.id  == u.Filiere.user.id  %}
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser({{ u.id }})\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button>
\t\t\t\t\t\t\t\t\t{% endif %}\t
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
        window.location.href =\"SuppMatiere/\"+id;
\t}

}
</script>


{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}
", "SRVDVServerBundle:responsable:MatiereResponsable.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/responsable/MatiereResponsable.html.twig");
    }
}
