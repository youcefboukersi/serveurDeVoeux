<?php

/* SRVDVServerBundle:admin:UsersAdmin.html.twig */
class __TwigTemplate_69bd8ace6ced1a4f5b4c01e78bf6c300ced08d7ad28632d2d7f9721792d9b3e7 extends Twig_Template
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
        $__internal_eea9712a12a96911508b683ce09f4906b5c7e780b2347a7560ea9da405a8ea7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea9712a12a96911508b683ce09f4906b5c7e780b2347a7560ea9da405a8ea7d->enter($__internal_eea9712a12a96911508b683ce09f4906b5c7e780b2347a7560ea9da405a8ea7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:UsersAdmin.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 43)));
        echo "
  
  ";
        // line 4
        if (((isset($context["supprimer"]) ? $context["supprimer"] : $this->getContext($context, "supprimer")) == 0)) {
            // line 5
            echo "        <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Impossible de supprimer cet Utilisateur  </br>
                    Il est rataché à une Filière !!
              </div>
            </div>
          </div>
        </div>
        <script>
          document.getElementById('iddudiv').click();
        </script>
      ";
        }
        // line 22
        echo "  
  <div align=\"center\">
    </br>
    <div class=\"centreVerticalement\">
    </div>          
    <div class=\" centreVerticalement\"> 
      <button type=\"button\" class=\"btn btn-success\"  data-toggle=\"modal\" data-target=\"#myModalAjout\" ><span class=\"glyphicon glyphicon-plus\"></span>&nbsp; Ajouter un utilisateur </button>
      <div id=\"myModalAjout\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              <fieldset class=\"well the-fieldset\">
                <legend > Ajouter un utilisateur:</legend>
                ";
        // line 37
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 40
        echo "              </fieldset>
            </div>
            <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
            </div>
          </div>
        </div>
      </div>
      </br>
      ";
        // line 49
        if (((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")) == 1)) {
            // line 50
            echo "        <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Utilisateur inscrit !!
              </div>
            </div>
          </div>
        </div>
        <script>
          document.getElementById('iddudiv').click();
        </script>
      ";
        }
        // line 66
        echo "      </br>
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Noms</th><th>Prenoms</th><th>Logins</th><th>Emails</th><th>Rôles</th><th>Types utilisateurs</th><th>Heures théoriques</th><th>Last login</th><th>Actif/</th><th>Modifier</th><th>Supprimer</th></tr>
          </thead>
          <tbody>
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Users"]) ? $context["Users"] : $this->getContext($context, "Users")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 74
            echo "              <tr>

                <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                  ";
            // line 81
            if (($this->getAttribute($this->getAttribute($context["u"], "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
                echo "ADMIN ";
            }
            // line 82
            echo "                  ";
            if (($this->getAttribute($this->getAttribute($context["u"], "roles", array()), 0, array(), "array") == "ROLE_ENSEIG")) {
                echo "ENSEIG ";
            }
            // line 83
            echo "                  ";
            if (($this->getAttribute($this->getAttribute($context["u"], "roles", array()), 0, array(), "array") == "ROLE_RESP")) {
                echo "RESP ";
            }
            // line 84
            echo "
                </td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "type", array()), "libelle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nombreHeurTheo", array()), "html", null, true);
            echo "</td>
                <td>
                  ";
            // line 89
            if (($this->getAttribute($context["u"], "lastlogin", array()) != "")) {
                // line 90
                echo "                    ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "lastlogin", array()), "Y-m-d h:m:s"), "html", null, true);
                echo "
                  ";
            }
            // line 92
            echo "                </td>
                <td>
                  ";
            // line 94
            if (($this->getAttribute($context["u"], "enabled", array()) == 1)) {
                // line 95
                echo "                    <button  type=\"button\" class=\"btn btn-success\" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Users", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span></b></button>
                      ";
            } else {
                // line 97
                echo "                    <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Users", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></b></button>
                      ";
            }
            // line 99
            echo "                </td>
                <td>
                  <button  type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModalModifier";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
                  <div id=\"myModalModifier";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">

                      <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>

                          <form method=\"GET\" action=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_user_admin", array("user" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "\">
                            <fieldset class=\"well the-fieldset\">
                              <legend > modifier utilisateur:</legend>

                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Email address</label>
                                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"exampleInputEmail1\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "email", array()), "html", null, true);
            echo "\" >                        
                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Username</label>
                                <input  name=\"username\"class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
            echo "\" >                        
                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Nom</label>
                                <input  name=\"nom\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "\" >                        
                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Prenom</label>
                                <input  name=\"prenom\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "prenom", array()), "html", null, true);
            echo "\" >                        
                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Nombre Heure Theo</label>
                                <input type=\"number\" name=\"nombreHeurTheo\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nombreHeurTheo", array()), "html", null, true);
            echo "\">                        
                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">role</label>
                                <select  name=\"roles\"  class=\"form-control\" >
                                  <option></option>
                                  <option ";
            // line 138
            if (($this->getAttribute($this->getAttribute($context["u"], "roles", array()), 0, array(), "array") == "ROLE_ENSEIG")) {
                echo " selected ";
            }
            echo ">ROLE_ENSEIG</option>
                                  <option  ";
            // line 139
            if (($this->getAttribute($this->getAttribute($context["u"], "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
                echo " selected";
            }
            echo ">ROLE_ADMIN</option>
                                  <option  ";
            // line 140
            if (($this->getAttribute($this->getAttribute($context["u"], "roles", array()), 0, array(), "array") == "ROLE_RESP")) {
                echo " selected";
            }
            echo " >ROLE_RESP</option>
                                </select>

                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">statut</label>

                                <select name=\"type\" class=\"form-control\" >
                                  ";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 149
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getAttribute($context["u"], "type", array()), "libelle", array()) == $this->getAttribute($context["type"], "libelle", array()))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
                echo "</option>
                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "                                </select>                  
                              </div>                
                              <div class=\"form-group\">
                                <input type=\"submit\" value=\"mettre a jour\" class=\"btn btn-success\"/>
                              </div>
                            </fieldset>
                          </form> 
                        </div>
                        <div class=\"modal-footer\">
                          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <button type=\"button\" class=\"btn btn-warning\"  data-toggle=\"modal\" data-target=\"#myModal";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\" >
                    <b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b>
                  </button>


                  <div id=\"myModal";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">

                      <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Vous voulez vraiment supprimer cette Utilisatuer ?</ut>
                        </div>

                        <div class=\"modal-footer\">
                          <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
            // line 183
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_utilisateur_admin", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "'\"><b >Delete ! </b></button>
                          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                        </div>
                      </div>

                    </div>
                  </div>
                </td>
              </tr>\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "          </tbody>
        </table> 
      </div>

    </div>
  </div>



  <script>
    \$(document).ready(function () {
      \$('#example').DataTable();
    });
    function SupprimerUser(id) {

      var rep = confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur');

      if (rep) {
        window.location.href = 'suppUsers/' + id;
      }
    }
  </script>
  ";
        // line 215
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:UsersAdmin.html.twig", 215)->display($context);
        
        $__internal_eea9712a12a96911508b683ce09f4906b5c7e780b2347a7560ea9da405a8ea7d->leave($__internal_eea9712a12a96911508b683ce09f4906b5c7e780b2347a7560ea9da405a8ea7d_prof);

    }

    // line 37
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aaac3f5f678b106b27d2aff883ec061ff05d9107fc645b921183d57abf77e736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaac3f5f678b106b27d2aff883ec061ff05d9107fc645b921183d57abf77e736->enter($__internal_aaac3f5f678b106b27d2aff883ec061ff05d9107fc645b921183d57abf77e736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 38
        echo "                  ";
        $this->loadTemplate("SRVDVServerBundle:Registration:register_content.html.twig", "SRVDVServerBundle:admin:UsersAdmin.html.twig", 38)->display($context);
        // line 39
        echo "                ";
        
        $__internal_aaac3f5f678b106b27d2aff883ec061ff05d9107fc645b921183d57abf77e736->leave($__internal_aaac3f5f678b106b27d2aff883ec061ff05d9107fc645b921183d57abf77e736_prof);

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
        return array (  394 => 39,  391 => 38,  385 => 37,  378 => 215,  354 => 193,  338 => 183,  324 => 172,  316 => 167,  298 => 151,  283 => 149,  279 => 148,  266 => 140,  260 => 139,  254 => 138,  245 => 132,  238 => 128,  231 => 124,  224 => 120,  217 => 116,  208 => 110,  197 => 102,  193 => 101,  189 => 99,  183 => 97,  177 => 95,  175 => 94,  171 => 92,  165 => 90,  163 => 89,  158 => 87,  154 => 86,  150 => 84,  145 => 83,  140 => 82,  136 => 81,  131 => 79,  127 => 78,  123 => 77,  119 => 76,  115 => 74,  111 => 73,  102 => 66,  84 => 50,  82 => 49,  71 => 40,  69 => 37,  52 => 22,  33 => 5,  31 => 4,  26 => 2,  23 => 1,);
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
  
  {% if supprimer == 0  %}
        <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Impossible de supprimer cet Utilisateur  </br>
                    Il est rataché à une Filière !!
              </div>
            </div>
          </div>
        </div>
        <script>
          document.getElementById('iddudiv').click();
        </script>
      {% endif %}
  
  <div align=\"center\">
    </br>
    <div class=\"centreVerticalement\">
    </div>          
    <div class=\" centreVerticalement\"> 
      <button type=\"button\" class=\"btn btn-success\"  data-toggle=\"modal\" data-target=\"#myModalAjout\" ><span class=\"glyphicon glyphicon-plus\"></span>&nbsp; Ajouter un utilisateur </button>
      <div id=\"myModalAjout\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              <fieldset class=\"well the-fieldset\">
                <legend > Ajouter un utilisateur:</legend>
                {% block fos_user_content %}
                  {% include \"SRVDVServerBundle:Registration:register_content.html.twig\" %}
                {% endblock fos_user_content %}
              </fieldset>
            </div>
            <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
            </div>
          </div>
        </div>
      </div>
      </br>
      {% if email == 1  %}
        <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Utilisateur inscrit !!
              </div>
            </div>
          </div>
        </div>
        <script>
          document.getElementById('iddudiv').click();
        </script>
      {% endif %}
      </br>
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Noms</th><th>Prenoms</th><th>Logins</th><th>Emails</th><th>Rôles</th><th>Types utilisateurs</th><th>Heures théoriques</th><th>Last login</th><th>Actif/</th><th>Modifier</th><th>Supprimer</th></tr>
          </thead>
          <tbody>
            {% for u in Users %}
              <tr>

                <td>{{ u.nom }}</td>
                <td>{{ u.prenom }}</td>
                <td>{{ u.username }}</td>
                <td>{{ u.email }}</td>
                <td>
                  {% if u.roles[0] == \"ROLE_ADMIN\" %}ADMIN {% endif %}
                  {% if u.roles[0] == \"ROLE_ENSEIG\" %}ENSEIG {% endif %}
                  {% if u.roles[0] == \"ROLE_RESP\" %}RESP {% endif %}

                </td>
                <td>{{ u.type.libelle }}</td>
                <td>{{ u.nombreHeurTheo }}</td>
                <td>
                  {% if u.lastlogin != '' %}
                    {{ u.lastlogin|date('Y-m-d h:m:s')  }}
                  {% endif %}
                </td>
                <td>
                  {% if u.enabled == 1 %}
                    <button  type=\"button\" class=\"btn btn-success\" onclick=\"window.location.href = '{{path('Modifier_Users',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span></b></button>
                      {% else %}
                    <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{path('Modifier_Users',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></b></button>
                      {% endif %}
                </td>
                <td>
                  <button  type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModalModifier{{ u.id }}\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>
                  <div id=\"myModalModifier{{ u.id }}\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">

                      <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>

                          <form method=\"GET\" action=\"{{path('modifier_user_admin',{'user':u.id }) }}\">
                            <fieldset class=\"well the-fieldset\">
                              <legend > modifier utilisateur:</legend>

                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Email address</label>
                                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"exampleInputEmail1\" value=\"{{u.email}}\" >                        
                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Username</label>
                                <input  name=\"username\"class=\"form-control\" id=\"exampleInputEmail1\" value=\"{{u.username}}\" >                        
                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Nom</label>
                                <input  name=\"nom\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"{{u.nom}}\" >                        
                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Prenom</label>
                                <input  name=\"prenom\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"{{u.prenom}}\" >                        
                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Nombre Heure Theo</label>
                                <input type=\"number\" name=\"nombreHeurTheo\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"{{u.nombreHeurTheo}}\">                        
                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">role</label>
                                <select  name=\"roles\"  class=\"form-control\" >
                                  <option></option>
                                  <option {% if u.roles[0] == 'ROLE_ENSEIG'  %} selected {% endif %}>ROLE_ENSEIG</option>
                                  <option  {% if u.roles[0] == 'ROLE_ADMIN'  %} selected{% endif %}>ROLE_ADMIN</option>
                                  <option  {% if u.roles[0] == 'ROLE_RESP'  %} selected{% endif %} >ROLE_RESP</option>
                                </select>

                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">statut</label>

                                <select name=\"type\" class=\"form-control\" >
                                  {% for type in types %}
                                    <option value=\"{{type.id}}\" {% if u.type.libelle == type.libelle  %} selected {% endif %}>{{type.libelle}}</option>
                                  {% endfor %}
                                </select>                  
                              </div>                
                              <div class=\"form-group\">
                                <input type=\"submit\" value=\"mettre a jour\" class=\"btn btn-success\"/>
                              </div>
                            </fieldset>
                          </form> 
                        </div>
                        <div class=\"modal-footer\">
                          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <button type=\"button\" class=\"btn btn-warning\"  data-toggle=\"modal\" data-target=\"#myModal{{ u.id }}\" >
                    <b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b>
                  </button>


                  <div id=\"myModal{{ u.id }}\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">

                      <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Vous voulez vraiment supprimer cette Utilisatuer ?</ut>
                        </div>

                        <div class=\"modal-footer\">
                          <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{ path('supprimer_utilisateur_admin',{'id':u.id }) }}'\"><b >Delete ! </b></button>
                          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                        </div>
                      </div>

                    </div>
                  </div>
                </td>
              </tr>\t
            {% endfor %}
          </tbody>
        </table> 
      </div>

    </div>
  </div>



  <script>
    \$(document).ready(function () {
      \$('#example').DataTable();
    });
    function SupprimerUser(id) {

      var rep = confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur');

      if (rep) {
        window.location.href = 'suppUsers/' + id;
      }
    }
  </script>
  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:UsersAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/admin/UsersAdmin.html.twig");
    }
}
