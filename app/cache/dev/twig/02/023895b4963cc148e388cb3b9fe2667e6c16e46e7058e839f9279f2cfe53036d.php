<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_b283d00cce3d3284b390a84bbbf1bf1c096f0da4e731a80e9faac044cdcfc96b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a10d258e614dc0001c6862c2a4ac09a1f013fb61bfdc51bded7c81e9873e561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a10d258e614dc0001c6862c2a4ac09a1f013fb61bfdc51bded7c81e9873e561->enter($__internal_9a10d258e614dc0001c6862c2a4ac09a1f013fb61bfdc51bded7c81e9873e561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a10d258e614dc0001c6862c2a4ac09a1f013fb61bfdc51bded7c81e9873e561->leave($__internal_9a10d258e614dc0001c6862c2a4ac09a1f013fb61bfdc51bded7c81e9873e561_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3936afdb34fcb29f2b840e037c63270bc567657625a2abcbcf3f3705bed246c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3936afdb34fcb29f2b840e037c63270bc567657625a2abcbcf3f3705bed246c->enter($__internal_a3936afdb34fcb29f2b840e037c63270bc567657625a2abcbcf3f3705bed246c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_a3936afdb34fcb29f2b840e037c63270bc567657625a2abcbcf3f3705bed246c->leave($__internal_a3936afdb34fcb29f2b840e037c63270bc567657625a2abcbcf3f3705bed246c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
