<?php

/* :FormTemplate:bootstrap.html.twig */
class __TwigTemplate_cb391c424ede3ca648242866adf47aed34685ee24c344a9a9a74614a9ca7f417 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_527920979915640100a68f0c58ad49080be2349b2a37b260dd657840b3818203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527920979915640100a68f0c58ad49080be2349b2a37b260dd657840b3818203->enter($__internal_527920979915640100a68f0c58ad49080be2349b2a37b260dd657840b3818203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FormTemplate:bootstrap.html.twig"));

        // line 1
        echo "<?php";
        // line 3
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 10
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        
        $__internal_527920979915640100a68f0c58ad49080be2349b2a37b260dd657840b3818203->leave($__internal_527920979915640100a68f0c58ad49080be2349b2a37b260dd657840b3818203_prof);

    }

    // line 3
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_e454f14c8033c62ea1773b952620d272ddfd30ac32a6925d068cb0fab0033b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e454f14c8033c62ea1773b952620d272ddfd30ac32a6925d068cb0fab0033b67->enter($__internal_e454f14c8033c62ea1773b952620d272ddfd30ac32a6925d068cb0fab0033b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 4
        echo "<div class=\"form-group\">";
        // line 5
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 6
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo " class=\"form-control\" />
</div>";
        
        $__internal_e454f14c8033c62ea1773b952620d272ddfd30ac32a6925d068cb0fab0033b67->leave($__internal_e454f14c8033c62ea1773b952620d272ddfd30ac32a6925d068cb0fab0033b67_prof);

    }

    // line 10
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_ff6f49c9d65426f2936686a05c2d46370eddfcd68abc13939769c1fee40af35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6f49c9d65426f2936686a05c2d46370eddfcd68abc13939769c1fee40af35f->enter($__internal_ff6f49c9d65426f2936686a05c2d46370eddfcd68abc13939769c1fee40af35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 11
        if (((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple"))) && ( !$this->getAttribute(($context["attr"] ?? null), "size", array(), "any", true, true) || ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 12
            $context["required"] = false;
        }
        // line 14
        echo "<div class=\"form-group\">
    <select ";
        // line 15
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo " class=\"form-control\">";
        // line 16
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 17
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 19
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 20
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 21
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 22
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 23
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 26
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 27
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 28
        echo "</select>
    </div>";
        
        $__internal_ff6f49c9d65426f2936686a05c2d46370eddfcd68abc13939769c1fee40af35f->leave($__internal_ff6f49c9d65426f2936686a05c2d46370eddfcd68abc13939769c1fee40af35f_prof);

    }

    public function getTemplateName()
    {
        return ":FormTemplate:bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 28,  110 => 27,  108 => 26,  102 => 23,  100 => 22,  98 => 21,  96 => 20,  94 => 19,  85 => 17,  83 => 16,  77 => 15,  74 => 14,  71 => 12,  69 => 11,  63 => 10,  45 => 6,  43 => 5,  41 => 4,  35 => 3,  28 => 10,  26 => 3,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php

{%- block form_widget_simple -%}
<div class=\"form-group\">
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} class=\"form-control\" />
</div>    
{%- endblock form_widget_simple -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <div class=\"form-group\">
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %} class=\"form-control\">
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
    </div>    
{%- endblock choice_widget_collapsed -%}", ":FormTemplate:bootstrap.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\app/Resources\\views/FormTemplate/bootstrap.html.twig");
    }
}
