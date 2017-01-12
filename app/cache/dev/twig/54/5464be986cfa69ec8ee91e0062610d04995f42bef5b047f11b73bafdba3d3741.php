<?php

/* SRVDVServerBundle:home:ListeUsers.html.twig */
class __TwigTemplate_69aefb4f0754fbced990e3d44d2093528aeccf0b26fb691e0a57ba990ba02b5b extends Twig_Template
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
        $__internal_6372550258290c682e2ba17f3c707c68f93e37e92f1660623816adb0a80b2664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6372550258290c682e2ba17f3c707c68f93e37e92f1660623816adb0a80b2664->enter($__internal_6372550258290c682e2ba17f3c707c68f93e37e92f1660623816adb0a80b2664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:home:ListeUsers.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "  
                   ";
            // line 3
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => "users")));
            echo "
                      ";
        } else {
            // line 5
            echo "                      
                     ";
            // line 6
            $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:home:ListeUsers.html.twig", 6)->display($context);
            // line 7
            echo "                     ";
        }
        // line 8
        echo "
</br>
<div>

\t\t\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
                \t<thead>
\t\t\t\t\t<tr><th># </th><th>Nom lyes </th><th>Prenom</th><th>enseignant</th><th>Roles</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo "\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr >
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "type", array()), "libelle", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
                                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["r"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 31
                echo "                                    ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                            </td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                   </tbody>
\t\t\t\t</table> 
            
\t\t</div>
\t
</div>

<script type=\"text/javascript\" charset=\"utf-8\" >

\$(document).ready(function() {
    \$('#example').DataTable(
      
      
         

    );
} );


</script>


";
        // line 60
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:home:ListeUsers.html.twig", 60)->display($context);
        // line 61
        echo "


";
        
        $__internal_6372550258290c682e2ba17f3c707c68f93e37e92f1660623816adb0a80b2664->leave($__internal_6372550258290c682e2ba17f3c707c68f93e37e92f1660623816adb0a80b2664_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:home:ListeUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 61,  130 => 60,  106 => 38,  96 => 33,  87 => 31,  83 => 30,  78 => 28,  73 => 26,  69 => 25,  65 => 24,  54 => 18,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  29 => 3,  25 => 2,  22 => 1,);
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
{% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}  
                   {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 'users' })) }}
                      {% else %}
                      
                     {% include \"SRVDVServerBundle:admin:MenuAdmin.html.twig\" %}
                     {% endif %}

</br>
<div>

\t\t\t\t\t<div class=\"table-responsive\">
                <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"98%\" >
                \t<thead>
\t\t\t\t\t<tr><th># </th><th>Nom lyes </th><th>Prenom</th><th>enseignant</th><th>Roles</th></tr>
\t\t\t\t   </thead>
\t\t\t\t   <tbody>
\t\t\t\t\t\t{% for r in users %}\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr >
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>{{ r.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ r.nom }}</td>
\t\t\t\t\t\t\t\t<td>{{ r.prenom }}</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>{{ r.type.libelle}}</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
                                {% for role in r.roles %}
                                    {{ role }}
                                {% endfor %}
                            </td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t{% endfor %}
                   </tbody>
\t\t\t\t</table> 
            
\t\t</div>
\t
</div>

<script type=\"text/javascript\" charset=\"utf-8\" >

\$(document).ready(function() {
    \$('#example').DataTable(
      
      
         

    );
} );


</script>


{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}



", "SRVDVServerBundle:home:ListeUsers.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/home/ListeUsers.html.twig");
    }
}
