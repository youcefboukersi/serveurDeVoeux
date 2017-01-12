<?php

/* SRVDVServerBundle:admin:UsersAdmin.html.twig */
class __TwigTemplate_1be44b63fdc9963018ff236ab01bbc21d32062bea27edd970cc9f7900147eb26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee5d2ac7674f818238469ba7ce09560f43e172c861226d3364a70af3d9b9bb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5d2ac7674f818238469ba7ce09560f43e172c861226d3364a70af3d9b9bb56->enter($__internal_ee5d2ac7674f818238469ba7ce09560f43e172c861226d3364a70af3d9b9bb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:UsersAdmin.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 43)));
        echo "

<div id=\"content\">
    </br>
        
    <div class=\"col-xs-2 col-md-4 col-lg-2 centreVerticalement\">
      
";
        // line 9
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 12
        echo "    </div>
        
    <div class=\" centreVerticalement\"> 
        <div class=\"table-responsive\">
            <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                <thead>
                    <tr><th>#</th><th>nom</th><th>prenom</th><th>username</th><th>mail</th><th>role</th><th>type</th><th>H</th><th>Mod</th><th>Supp</th></tr>
                </thead>
                <tbody>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Users"] ?? $this->getContext($context, "Users")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 22
            echo "                        <tr>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "prenom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "email", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["u"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 30
                echo "                                    ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                            </td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "type", array()), "libelle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nombreHeurTheo", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 36
            if (($this->getAttribute($context["u"], "enabled", array()) == 1)) {
                // line 37
                echo "                            <button  type=\"button\" class=\"btn btn-success\" onclick=\"window.location.href ='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Users", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span></b></button>
                                 ";
            } else {
                // line 39
                echo "                                 <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Users", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></b></button>
                                 ";
            }
            // line 41
            echo "
                           </td>
                            <td><button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser(";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo ")\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button></td>
                        </tr>\t
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </tbody>
            </table> 
        </div>
        <h1>Etat mail :: ";
        // line 49
        echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
        echo "</h1>
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
        // line 67
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:UsersAdmin.html.twig", 67)->display($context);
        
        $__internal_ee5d2ac7674f818238469ba7ce09560f43e172c861226d3364a70af3d9b9bb56->leave($__internal_ee5d2ac7674f818238469ba7ce09560f43e172c861226d3364a70af3d9b9bb56_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07f0a0a91b9fcf9549bbdf9751fec396f5b61578f635b01cbcdbcc819293f274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f0a0a91b9fcf9549bbdf9751fec396f5b61578f635b01cbcdbcc819293f274->enter($__internal_07f0a0a91b9fcf9549bbdf9751fec396f5b61578f635b01cbcdbcc819293f274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "SRVDVServerBundle:admin:UsersAdmin.html.twig", 10)->display($context);
        
        $__internal_07f0a0a91b9fcf9549bbdf9751fec396f5b61578f635b01cbcdbcc819293f274->leave($__internal_07f0a0a91b9fcf9549bbdf9751fec396f5b61578f635b01cbcdbcc819293f274_prof);

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
        return array (  168 => 10,  162 => 9,  155 => 67,  134 => 49,  129 => 46,  120 => 43,  116 => 41,  110 => 39,  104 => 37,  102 => 36,  97 => 34,  93 => 33,  90 => 32,  81 => 30,  77 => 29,  72 => 27,  68 => 26,  64 => 25,  60 => 24,  56 => 23,  53 => 22,  49 => 21,  38 => 12,  36 => 9,  26 => 2,  23 => 1,);
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
{{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 43 })) }}

<div id=\"content\">
    </br>
        
    <div class=\"col-xs-2 col-md-4 col-lg-2 centreVerticalement\">
      
{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
    </div>
        
    <div class=\" centreVerticalement\"> 
        <div class=\"table-responsive\">
            <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                <thead>
                    <tr><th>#</th><th>nom</th><th>prenom</th><th>username</th><th>mail</th><th>role</th><th>type</th><th>H</th><th>Mod</th><th>Supp</th></tr>
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
                            <td>
                                {% if u.enabled == 1 %}
                            <button  type=\"button\" class=\"btn btn-success\" onclick=\"window.location.href ='{{path('Modifier_Users',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span></b></button>
                                 {% else %}
                                 <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href ='{{path('Modifier_Users',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></b></button>
                                 {% endif %}

                           </td>
                            <td><button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser({{ u.id }})\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button></td>
                        </tr>\t
                    {% endfor %}
                </tbody>
            </table> 
        </div>
        <h1>Etat mail :: {{email}}</h1>
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
