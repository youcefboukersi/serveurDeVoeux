<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_46229c491d4fd88ea146b91857db25ba37d28d872211e90f7f84728ad3881f70 extends Twig_Template
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
        $__internal_ba867c705528817fc017e8ab40dc6abe85afece10a63746253fb9004ae83d2fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba867c705528817fc017e8ab40dc6abe85afece10a63746253fb9004ae83d2fc->enter($__internal_ba867c705528817fc017e8ab40dc6abe85afece10a63746253fb9004ae83d2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\"  class=\"form-horizontal\">
    ";
        // line 8
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "

 <div class=\"input-group col-xs-3 \">   
    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"username/email\" />
 </div>

   
  <div class=\"input-group col-xs-3\">  
    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"  class=\"form-control\" placeholder=\"Password\" />
</div>
   </br>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-danger\" />
</form>";
        
        $__internal_ba867c705528817fc017e8ab40dc6abe85afece10a63746253fb9004ae83d2fc->leave($__internal_ba867c705528817fc017e8ab40dc6abe85afece10a63746253fb9004ae83d2fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  54 => 15,  48 => 11,  42 => 9,  40 => 8,  36 => 7,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div style=\"color:red\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\"  class=\"form-horizontal\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}


 <div class=\"input-group col-xs-3 \">   
    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control\" placeholder=\"username/email\" />
 </div>

   
  <div class=\"input-group col-xs-3\">  
    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"  class=\"form-control\" placeholder=\"Password\" />
</div>
   </br>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" class=\"btn btn-danger\" />
</form>", "FOSUserBundle:Security:login_content.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Security/login_content.html.twig");
    }
}
