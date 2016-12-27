<?php

/* SRVDVServerBundle:admin:UsersAdmin.html.twig */
class __TwigTemplate_1be44b63fdc9963018ff236ab01bbc21d32062bea27edd970cc9f7900147eb26 extends Twig_Template
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
        $__internal_6ed5a4062599d15ae60f71bc48e4864c16568167767387610eb7eb7575847df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed5a4062599d15ae60f71bc48e4864c16568167767387610eb7eb7575847df8->enter($__internal_6ed5a4062599d15ae60f71bc48e4864c16568167767387610eb7eb7575847df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:UsersAdmin.html.twig"));

        // line 1
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:admin:UsersAdmin.html.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"nav\" >
    <div id=\"enseignant\" class=\"ouvert\">
        <h3>Administrateur</h3>
        <ul>
            <li  ><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("form_profile_user");
        echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Annee");
        echo "\"><span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer Année</a></li></br>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Type");
        echo "\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer statut</a></li></br>
            <li class=\"active\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_utilisateur");
        echo "\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Users</a></li>\t</br>\t\t
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_filiere");
        echo "\"><span class=\"glyphicon glyphicon-book\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer fili&egrave;r</a></li></br>
            <li ><a  href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_typeens");
        echo "\"><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>&nbsp;  Type Enseignement</a></li></br>
            <li><a href=\"\"><span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span>&nbsp;  Basculer sur la nouvelle ann&eacute;e</a></li></br>  
        </ul>
    </div>
</div>\t

<div id=\"content\">
    </br>
        
    <div class=\"col-xs-2 col-md-4 col-lg-2 centreVerticalement\">
        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Registration:register"));
        echo "
    </div>
        
    <div class=\" centreVerticalement\"> 
        <div class=\"table-responsive\">
            <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                <thead>
                    <tr><th>#</th><th>nom</th><th>prenom</th><th>username</th><th>mail</th><th>role</th><th>type</th><th>Heure Theo</th><th>Mod</th><th>Supp</th></tr>
                </thead>
                <tbody>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Users"] ?? $this->getContext($context, "Users")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 33
            echo "                        <tr>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "prenom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "email", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["u"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 41
                echo "                                    ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                            </td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "type", array()), "libelle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nombreHeurTheo", array()), "html", null, true);
            echo "</td>
                            <td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Users", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
                            <td><button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser(";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo ")\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button></td>
                        </tr>\t
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </tbody>
            </table> 
        </div>
    </div>
</div>

<script>
    \$(document).ready(function() {
        \$('#example').DataTable();
    } );
    function SupprimerUser(id){
        
        var rep=confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur' ) ;
        
        if(rep){
            window.location.href ='suppUsers/'+id;
        }
    }
</script>
";
        // line 69
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:UsersAdmin.html.twig", 69)->display($context);
        
        $__internal_6ed5a4062599d15ae60f71bc48e4864c16568167767387610eb7eb7575847df8->leave($__internal_6ed5a4062599d15ae60f71bc48e4864c16568167767387610eb7eb7575847df8_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:UsersAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 69,  142 => 50,  133 => 47,  129 => 46,  125 => 45,  121 => 44,  118 => 43,  109 => 41,  105 => 40,  100 => 38,  96 => 37,  92 => 36,  88 => 35,  84 => 34,  81 => 33,  77 => 32,  64 => 22,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"SRVDVServerBundle:admin:MenuAdmin.html.twig\" %}

<div id=\"nav\" >
    <div id=\"enseignant\" class=\"ouvert\">
        <h3>Administrateur</h3>
        <ul>
            <li  ><a href=\"{{path('form_profile_user')}}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
            <li><a href=\"{{path('list_form_Annee')}}\"><span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer Année</a></li></br>
            <li><a href=\"{{path('list_form_Type')}}\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer statut</a></li></br>
            <li class=\"active\"><a href=\"{{path('list_form_utilisateur')}}\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Users</a></li>\t</br>\t\t
            <li><a href=\"{{path('list_form_filiere')}}\"><span class=\"glyphicon glyphicon-book\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer fili&egrave;r</a></li></br>
            <li ><a  href=\"{{path('list_form_typeens')}}\"><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>&nbsp;  Type Enseignement</a></li></br>
            <li><a href=\"\"><span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span>&nbsp;  Basculer sur la nouvelle ann&eacute;e</a></li></br>  
        </ul>
    </div>
</div>\t

<div id=\"content\">
    </br>
        
    <div class=\"col-xs-2 col-md-4 col-lg-2 centreVerticalement\">
        {{ render (controller(\"FOSUserBundle:Registration:register\")) }}
    </div>
        
    <div class=\" centreVerticalement\"> 
        <div class=\"table-responsive\">
            <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                <thead>
                    <tr><th>#</th><th>nom</th><th>prenom</th><th>username</th><th>mail</th><th>role</th><th>type</th><th>Heure Theo</th><th>Mod</th><th>Supp</th></tr>
                </thead>
                <tbody>
                    {% for u in Users %}
                        <tr>
                            <td>{{ u.id }}</td>
                            <td>{{ u.nom }}</td>
                            <td>{{ u.prenom }}</td>
                            <td>{{ u.username }}</td>
                            <td>{{ u.email }}</td>
                            <td>
                                {% for role in u.roles %}
                                    {{ role }}
                                {% endfor %}
                            </td>
                            <td>{{ u.type.libelle }}</td>
                            <td>{{ u.nombreHeurTheo }}</td>
                            <td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='{{path('Modifier_Users',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
                            <td><button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser({{ u.id }})\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button></td>
                        </tr>\t
                    {% endfor %}
                </tbody>
            </table> 
        </div>
    </div>
</div>

<script>
    \$(document).ready(function() {
        \$('#example').DataTable();
    } );
    function SupprimerUser(id){
        
        var rep=confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur' ) ;
        
        if(rep){
            window.location.href ='suppUsers/'+id;
        }
    }
</script>
{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:UsersAdmin.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/UsersAdmin.html.twig");
    }
}
