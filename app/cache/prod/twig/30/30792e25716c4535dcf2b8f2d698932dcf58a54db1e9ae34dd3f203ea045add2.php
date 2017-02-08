<?php

/* SRVDVServerBundle:admin:UsersAdmin.html.twig */
class __TwigTemplate_7c1155925b82b3b1c23b2397e9bda5a5668fb79163018543e8c7f7be8e8a3db5 extends Twig_Template
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
        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 43)));
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
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 30
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
        // line 45
        if (((isset($context["email"]) ? $context["email"] : null) == 1)) {
            // line 46
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
        // line 72
        echo "      </br>
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Noms</th><th>Prenoms</th><th>Logins</th><th>Emails</th><th>Rôles</th><th>Types utilisateurs</th><th>Heures théoriques</th><th>Last login</th><th>Actif/</th><th>Modifier</th><th>Supprimer</th></tr>
          </thead>
          <tbody>
            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Users"]) ? $context["Users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 80
            echo "              <tr>

                <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                  ";
            // line 87
            if (($this->getAttribute($this->getAttribute($context["u"], "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
                echo "ADMIN ";
            }
            // line 88
            echo "                  ";
            if (($this->getAttribute($this->getAttribute($context["u"], "roles", array()), 0, array(), "array") == "ROLE_ENSEIG")) {
                echo "ENSEIG ";
            }
            // line 89
            echo "                  ";
            if (($this->getAttribute($this->getAttribute($context["u"], "roles", array()), 0, array(), "array") == "ROLE_RESP")) {
                echo "RESP ";
            }
            // line 90
            echo "
                </td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "type", array()), "libelle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nombreHeurTheo", array()), "html", null, true);
            echo "</td>
                <td>
                  ";
            // line 95
            if (($this->getAttribute($context["u"], "lastlogin", array()) != "")) {
                // line 96
                echo "                    ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "lastlogin", array()), "Y-m-d h:m:s"), "html", null, true);
                echo "
                  ";
            }
            // line 98
            echo "                </td>
                <td>
                  ";
            // line 100
            if (($this->getAttribute($context["u"], "enabled", array()) == 1)) {
                // line 101
                echo "                    <button  type=\"button\" class=\"btn btn-success\" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Users", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span></b></button>
                      ";
            } else {
                // line 103
                echo "                    <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Users", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "'\"><b ><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></b></button>
                      ";
            }
            // line 105
            echo "
                </td>
                <td>

                  <button  type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModalModifier";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button>



                  <div id=\"myModalModifier";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">

                      <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>

                          <form method=\"GET\" action=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_user_admin", array("user" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "\">
                            <fieldset class=\"well the-fieldset\">
                              <legend > modifier utilisateur:</legend>




                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Email address</label>
                                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"exampleInputEmail1\" value=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "email", array()), "html", null, true);
            echo "\" >                        
                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Username</label>
                                <input  name=\"username\"class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
            echo "\" >                        
                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Nom</label>
                                <input  name=\"nom\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "\" >                        
                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Prenom</label>
                                <input  name=\"prenom\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "prenom", array()), "html", null, true);
            echo "\" >                        
                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">Nombre Heure Theo</label>
                                <input type=\"number\" name=\"nombreHeurTheo\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nombreHeurTheo", array()), "html", null, true);
            echo "\">                        
                              </div>
                              <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\">role</label>
                                <select  name=\"roles\"  class=\"form-control\" >
                                  <option></option>
                                  <option ";
            // line 152
            if (($this->getAttribute($this->getAttribute($context["u"], "roles", array()), 0, array(), "array") == "ROLE_ENSEIG")) {
                echo " selected ";
            }
            echo ">ROLE_ENSEIG</option>
                                  <option  ";
            // line 153
            if (($this->getAttribute($this->getAttribute($context["u"], "roles", array()), 0, array(), "array") == "ROLE_ADMIN")) {
                echo " selected";
            }
            echo ">ROLE_ADMIN</option>
                                  <option  ";
            // line 154
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
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 163
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
            // line 165
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
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\" >
                    <b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b>
                  </button>


                  <div id=\"myModal";
            // line 203
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
            // line 214
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
        // line 233
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
        // line 255
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:UsersAdmin.html.twig", 255)->display($context);
    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 27
        echo "                  ";
        $this->loadTemplate("SRVDVServerBundle:Registration:register_content.html.twig", "SRVDVServerBundle:admin:UsersAdmin.html.twig", 27)->display($context);
        // line 28
        echo "
                ";
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
        return array (  419 => 28,  416 => 27,  413 => 26,  409 => 255,  385 => 233,  360 => 214,  346 => 203,  338 => 198,  303 => 165,  288 => 163,  284 => 162,  271 => 154,  265 => 153,  259 => 152,  250 => 146,  243 => 142,  236 => 138,  229 => 134,  222 => 130,  210 => 121,  199 => 113,  192 => 109,  186 => 105,  180 => 103,  174 => 101,  172 => 100,  168 => 98,  162 => 96,  160 => 95,  155 => 93,  151 => 92,  147 => 90,  142 => 89,  137 => 88,  133 => 87,  128 => 85,  124 => 84,  120 => 83,  116 => 82,  112 => 80,  108 => 79,  99 => 72,  71 => 46,  69 => 45,  52 => 30,  50 => 26,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SRVDVServerBundle:admin:UsersAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/admin/UsersAdmin.html.twig");
    }
}
