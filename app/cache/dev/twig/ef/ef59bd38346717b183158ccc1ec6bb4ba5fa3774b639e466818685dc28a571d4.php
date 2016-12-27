<?php

/* SRVDVServerBundle:admin:UsersAdmin.html.twig */
class __TwigTemplate_c4b3168ea88d500f7486be3a706d0f580e60f33c90b50b03043dc8e000dcee5f extends Twig_Template
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
        $__internal_3c443e7b6932b3fff082a0ce62d9698ea3244c81a0d41936a4d1d9a1b3e37dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c443e7b6932b3fff082a0ce62d9698ea3244c81a0d41936a4d1d9a1b3e37dd5->enter($__internal_3c443e7b6932b3fff082a0ce62d9698ea3244c81a0d41936a4d1d9a1b3e37dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:UsersAdmin.html.twig"));

        // line 1
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:admin:UsersAdmin.html.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"nav\" >
    <div id=\"enseignant\" class=\"ouvert\">
        <h3>Administrateur</h3>
        <ul>
            <li  ><a href=\"\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
            <li  ><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addrole\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer role</a></li></br>
            <li><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addtype\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer statut</a></li></br>
            <li class=\"active\"><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/users\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Users</a></li>\t</br>\t\t
            <li><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addFiliere\"><span class=\"glyphicon glyphicon-book\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer fili&egrave;r</a></li></br>
            <li ><a  href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/TypeEns\"><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>&nbsp;  Type Enseignement</a></li></br>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["Users"]) ? $context["Users"] : $this->getContext($context, "Users")));
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
                            <td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='ModUsers/";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
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
        
        $__internal_3c443e7b6932b3fff082a0ce62d9698ea3244c81a0d41936a4d1d9a1b3e37dd5->leave($__internal_3c443e7b6932b3fff082a0ce62d9698ea3244c81a0d41936a4d1d9a1b3e37dd5_prof);

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
        return array (  145 => 69,  124 => 50,  115 => 47,  111 => 46,  107 => 45,  103 => 44,  100 => 43,  91 => 41,  87 => 40,  82 => 38,  78 => 37,  74 => 36,  70 => 35,  66 => 34,  63 => 33,  59 => 32,  46 => 22,  24 => 2,  22 => 1,);
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
            <li  ><a href=\"\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
            <li  ><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addrole\"><span class=\"glyphicon glyphicon-th-large\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer role</a></li></br>
            <li><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addtype\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer statut</a></li></br>
            <li class=\"active\"><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/users\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Users</a></li>\t</br>\t\t
            <li><a href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/addFiliere\"><span class=\"glyphicon glyphicon-book\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer fili&egrave;r</a></li></br>
            <li ><a  href=\"http://localhost:8181/serveurdevoeux/web/app_dev.php/admin/TypeEns\"><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>&nbsp;  Type Enseignement</a></li></br>
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
                            <td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='ModUsers/{{ u.id }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
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
{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:UsersAdmin.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/UsersAdmin.html.twig");
    }
}
