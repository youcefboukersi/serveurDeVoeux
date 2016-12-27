<?php

/* @SRVDVServer/layout1.html.twig */
class __TwigTemplate_050c15fbfccce43f56a0a0333af65220e57b8ba56bace914f00daae1f7b75cca extends Twig_Template
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
        $__internal_e492d59eb12bbdf016fa8ed33d4a7561cff52d8d47056f9ef24f35b50eaa8017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e492d59eb12bbdf016fa8ed33d4a7561cff52d8d47056f9ef24f35b50eaa8017->enter($__internal_e492d59eb12bbdf016fa8ed33d4a7561cff52d8d47056f9ef24f35b50eaa8017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/layout1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>SVEDI</title>
\t<link rel=stylesheet type=\"text/css\" href=\"../assets/css/home.css\"/>
\t<script type=\"text/javascript\" src=\"../assets/javascript/jquery-2.1.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"../assets/javascript/connexion.js\"></script>
</head>

<body>
    <h1>Test Lyout</h1>
<div id=\"svedi\">
    <img src=\"../assets/images/svediMoyen.png\"/>
</div>

<div id=\"connexion\">
\t<img src=\"../assets/images/connexionTop.png\"/>
\t\t<div>
\t\t\t<div id=\"connect\">
\t\t\t<p>Connectez-vous :</p> 
\t\t\t
                        
                           
        <div>
            ";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 26
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 31
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 33
        echo "        </div>

        ";
        // line 35
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 36
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 37
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 38
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 39
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        ";
        }
        // line 44
        echo "
        <div>
            ";
        // line 46
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 48
        echo "        </div>
\t\t\t

\t\t\t<p ><a id=\"forgot\">Mot de passe oubli&eacute; ?</a></p>
\t\t\t<p class=\"full\"><?php echo @\$error_credentials; ?></p>
\t\t\t</div>
\t\t\t<div id=\"recup\"><br/>
\t\t\t\t<form action=\"recupMdp\" method=\"POST\">
\t\t\t\t<p>Veuillez saisir votre email,<br/>un mot de passe temporaire vous sera envoy&eacute;.</p><br/>
\t\t\t\t<input type=\"text\" id=\"mail\" name=\"mailRecup\" placeholder=\"Adresse email\"/>
\t\t\t\t<input class=\"button\" type=\"submit\" name=\"envoiMdp\" id=\"envoiMdp\" value=\"Envoyer\"/>
\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t<img src=\"../assets/images/connexionBtm.png\"/>
</div>
</body>
</html>";
        
        $__internal_e492d59eb12bbdf016fa8ed33d4a7561cff52d8d47056f9ef24f35b50eaa8017->leave($__internal_e492d59eb12bbdf016fa8ed33d4a7561cff52d8d47056f9ef24f35b50eaa8017_prof);

    }

    // line 46
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24f47f3e28a0c9e32052f23f0b1ca7ed14a8133001bbd09e34768ec66ed3608b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f47f3e28a0c9e32052f23f0b1ca7ed14a8133001bbd09e34768ec66ed3608b->enter($__internal_24f47f3e28a0c9e32052f23f0b1ca7ed14a8133001bbd09e34768ec66ed3608b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 47
        echo "            ";
        
        $__internal_24f47f3e28a0c9e32052f23f0b1ca7ed14a8133001bbd09e34768ec66ed3608b->leave($__internal_24f47f3e28a0c9e32052f23f0b1ca7ed14a8133001bbd09e34768ec66ed3608b_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/layout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 47,  143 => 46,  119 => 48,  117 => 46,  113 => 44,  110 => 43,  104 => 42,  95 => 39,  90 => 38,  85 => 37,  80 => 36,  78 => 35,  74 => 33,  66 => 31,  60 => 28,  56 => 27,  51 => 26,  49 => 25,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>SVEDI</title>
\t<link rel=stylesheet type=\"text/css\" href=\"../assets/css/home.css\"/>
\t<script type=\"text/javascript\" src=\"../assets/javascript/jquery-2.1.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"../assets/javascript/connexion.js\"></script>
</head>

<body>
    <h1>Test Lyout</h1>
<div id=\"svedi\">
    <img src=\"../assets/images/svediMoyen.png\"/>
</div>

<div id=\"connexion\">
\t<img src=\"../assets/images/connexionTop.png\"/>
\t\t<div>
\t\t\t<div id=\"connect\">
\t\t\t<p>Connectez-vous :</p> 
\t\t\t
                        
                           
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
\t\t\t

\t\t\t<p ><a id=\"forgot\">Mot de passe oubli&eacute; ?</a></p>
\t\t\t<p class=\"full\"><?php echo @\$error_credentials; ?></p>
\t\t\t</div>
\t\t\t<div id=\"recup\"><br/>
\t\t\t\t<form action=\"recupMdp\" method=\"POST\">
\t\t\t\t<p>Veuillez saisir votre email,<br/>un mot de passe temporaire vous sera envoy&eacute;.</p><br/>
\t\t\t\t<input type=\"text\" id=\"mail\" name=\"mailRecup\" placeholder=\"Adresse email\"/>
\t\t\t\t<input class=\"button\" type=\"submit\" name=\"envoiMdp\" id=\"envoiMdp\" value=\"Envoyer\"/>
\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t<img src=\"../assets/images/connexionBtm.png\"/>
</div>
</body>
</html>", "@SRVDVServer/layout1.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\layout1.html.twig");
    }
}
