<?php

/* :FormTemplate:bootstrap2.html.twig */
class __TwigTemplate_f4e38a4c7aa999e3eedab8251936831892f905686acc6450283521ef2524d518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13b3365da87c8f847b3761f766d29db55b666a10bb88600ba6296f369a93df12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b3365da87c8f847b3761f766d29db55b666a10bb88600ba6296f369a93df12->enter($__internal_13b3365da87c8f847b3761f766d29db55b666a10bb88600ba6296f369a93df12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FormTemplate:bootstrap2.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 244
        $this->displayBlock('form_label', $context, $blocks);
        // line 266
        $this->displayBlock('button_label', $context, $blocks);
        // line 270
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 278
        $this->displayBlock('form_row', $context, $blocks);
        // line 286
        $this->displayBlock('button_row', $context, $blocks);
        // line 292
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 298
        $this->displayBlock('form', $context, $blocks);
        // line 304
        $this->displayBlock('form_start', $context, $blocks);
        // line 317
        $this->displayBlock('form_end', $context, $blocks);
        // line 324
        $this->displayBlock('form_errors', $context, $blocks);
        // line 334
        $this->displayBlock('form_rest', $context, $blocks);
        // line 341
        echo "
";
        // line 344
        $this->displayBlock('form_rows', $context, $blocks);
        // line 350
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 366
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 380
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 394
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_13b3365da87c8f847b3761f766d29db55b666a10bb88600ba6296f369a93df12->leave($__internal_13b3365da87c8f847b3761f766d29db55b666a10bb88600ba6296f369a93df12_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_eb9568a69cd94d0cce0cc53c769359225e2ee1bb5406ee67ef1e3e7de8dfba7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9568a69cd94d0cce0cc53c769359225e2ee1bb5406ee67ef1e3e7de8dfba7e->enter($__internal_eb9568a69cd94d0cce0cc53c769359225e2ee1bb5406ee67ef1e3e7de8dfba7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_eb9568a69cd94d0cce0cc53c769359225e2ee1bb5406ee67ef1e3e7de8dfba7e->leave($__internal_eb9568a69cd94d0cce0cc53c769359225e2ee1bb5406ee67ef1e3e7de8dfba7e_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_73e60690b44a5921d14baa94da04538924f05e1a54071657fed7020b7a17fd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e60690b44a5921d14baa94da04538924f05e1a54071657fed7020b7a17fd4b->enter($__internal_73e60690b44a5921d14baa94da04538924f05e1a54071657fed7020b7a17fd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_73e60690b44a5921d14baa94da04538924f05e1a54071657fed7020b7a17fd4b->leave($__internal_73e60690b44a5921d14baa94da04538924f05e1a54071657fed7020b7a17fd4b_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_29937583e78f9b4b1e9ccb7d2960fba4d4a95ca852b5994f91cd30bec65690ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29937583e78f9b4b1e9ccb7d2960fba4d4a95ca852b5994f91cd30bec65690ad->enter($__internal_29937583e78f9b4b1e9ccb7d2960fba4d4a95ca852b5994f91cd30bec65690ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_29937583e78f9b4b1e9ccb7d2960fba4d4a95ca852b5994f91cd30bec65690ad->leave($__internal_29937583e78f9b4b1e9ccb7d2960fba4d4a95ca852b5994f91cd30bec65690ad_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_a5322ac3fb93c1d66582b4bc64e3e28fca7c3aa037ac594e8fa36e9d6993430f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5322ac3fb93c1d66582b4bc64e3e28fca7c3aa037ac594e8fa36e9d6993430f->enter($__internal_a5322ac3fb93c1d66582b4bc64e3e28fca7c3aa037ac594e8fa36e9d6993430f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_a5322ac3fb93c1d66582b4bc64e3e28fca7c3aa037ac594e8fa36e9d6993430f->leave($__internal_a5322ac3fb93c1d66582b4bc64e3e28fca7c3aa037ac594e8fa36e9d6993430f_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_4550e1499b6ccf577652d92681ef0377ae85446f03f1a19ce91242cefc3c720d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4550e1499b6ccf577652d92681ef0377ae85446f03f1a19ce91242cefc3c720d->enter($__internal_4550e1499b6ccf577652d92681ef0377ae85446f03f1a19ce91242cefc3c720d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_4550e1499b6ccf577652d92681ef0377ae85446f03f1a19ce91242cefc3c720d->leave($__internal_4550e1499b6ccf577652d92681ef0377ae85446f03f1a19ce91242cefc3c720d_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_7a57acc3c1106f67bdc1237d30883000dac3488467a9018c746edd3101e135e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a57acc3c1106f67bdc1237d30883000dac3488467a9018c746edd3101e135e4->enter($__internal_7a57acc3c1106f67bdc1237d30883000dac3488467a9018c746edd3101e135e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_7a57acc3c1106f67bdc1237d30883000dac3488467a9018c746edd3101e135e4->leave($__internal_7a57acc3c1106f67bdc1237d30883000dac3488467a9018c746edd3101e135e4_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_2fa4ba596379356e40552c0ec635c97af90c8712398172c6a99a3c94bc60dd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa4ba596379356e40552c0ec635c97af90c8712398172c6a99a3c94bc60dd76->enter($__internal_2fa4ba596379356e40552c0ec635c97af90c8712398172c6a99a3c94bc60dd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_2fa4ba596379356e40552c0ec635c97af90c8712398172c6a99a3c94bc60dd76->leave($__internal_2fa4ba596379356e40552c0ec635c97af90c8712398172c6a99a3c94bc60dd76_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a158c5b1d9c401774fa80210eff2dcca7327bb51e05aa7eb5c5a37c018d38eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a158c5b1d9c401774fa80210eff2dcca7327bb51e05aa7eb5c5a37c018d38eca->enter($__internal_a158c5b1d9c401774fa80210eff2dcca7327bb51e05aa7eb5c5a37c018d38eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_a158c5b1d9c401774fa80210eff2dcca7327bb51e05aa7eb5c5a37c018d38eca->leave($__internal_a158c5b1d9c401774fa80210eff2dcca7327bb51e05aa7eb5c5a37c018d38eca_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_bc562983f4b58cb6963388419d6cebcef9376f290e2f23177ba3cc16827e0285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc562983f4b58cb6963388419d6cebcef9376f290e2f23177ba3cc16827e0285->enter($__internal_bc562983f4b58cb6963388419d6cebcef9376f290e2f23177ba3cc16827e0285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bc562983f4b58cb6963388419d6cebcef9376f290e2f23177ba3cc16827e0285->leave($__internal_bc562983f4b58cb6963388419d6cebcef9376f290e2f23177ba3cc16827e0285_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_cea16ff549182d407b83ebf56c7174d321127d7ec3accbbbfa063d16456a3fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea16ff549182d407b83ebf56c7174d321127d7ec3accbbbfa063d16456a3fc9->enter($__internal_cea16ff549182d407b83ebf56c7174d321127d7ec3accbbbfa063d16456a3fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_cea16ff549182d407b83ebf56c7174d321127d7ec3accbbbfa063d16456a3fc9->leave($__internal_cea16ff549182d407b83ebf56c7174d321127d7ec3accbbbfa063d16456a3fc9_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_3e60bccd7801a839ec2b61b4146f3bc1d3c79179c5b05aab46dbcf699d2781e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e60bccd7801a839ec2b61b4146f3bc1d3c79179c5b05aab46dbcf699d2781e2->enter($__internal_3e60bccd7801a839ec2b61b4146f3bc1d3c79179c5b05aab46dbcf699d2781e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_3e60bccd7801a839ec2b61b4146f3bc1d3c79179c5b05aab46dbcf699d2781e2->leave($__internal_3e60bccd7801a839ec2b61b4146f3bc1d3c79179c5b05aab46dbcf699d2781e2_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_f4a23034ae9df8409c599c91d243a431f2c31e81490be3fc145e916c2cb94a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a23034ae9df8409c599c91d243a431f2c31e81490be3fc145e916c2cb94a64->enter($__internal_f4a23034ae9df8409c599c91d243a431f2c31e81490be3fc145e916c2cb94a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_f4a23034ae9df8409c599c91d243a431f2c31e81490be3fc145e916c2cb94a64->leave($__internal_f4a23034ae9df8409c599c91d243a431f2c31e81490be3fc145e916c2cb94a64_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_02b24276f25510809881baacee8569438c0f1bdbabc21ffa1e219f32575e8c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b24276f25510809881baacee8569438c0f1bdbabc21ffa1e219f32575e8c34->enter($__internal_02b24276f25510809881baacee8569438c0f1bdbabc21ffa1e219f32575e8c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_02b24276f25510809881baacee8569438c0f1bdbabc21ffa1e219f32575e8c34->leave($__internal_02b24276f25510809881baacee8569438c0f1bdbabc21ffa1e219f32575e8c34_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_21831481005a28bee98580b041e2d140685cfaf86b3c6839d85c6401b6b046a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21831481005a28bee98580b041e2d140685cfaf86b3c6839d85c6401b6b046a8->enter($__internal_21831481005a28bee98580b041e2d140685cfaf86b3c6839d85c6401b6b046a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_21831481005a28bee98580b041e2d140685cfaf86b3c6839d85c6401b6b046a8->leave($__internal_21831481005a28bee98580b041e2d140685cfaf86b3c6839d85c6401b6b046a8_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_7e1ac4a6e21162fd504f0f06b5b1274706986f461e4f81e41d745d69074a5124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1ac4a6e21162fd504f0f06b5b1274706986f461e4f81e41d745d69074a5124->enter($__internal_7e1ac4a6e21162fd504f0f06b5b1274706986f461e4f81e41d745d69074a5124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_7e1ac4a6e21162fd504f0f06b5b1274706986f461e4f81e41d745d69074a5124->leave($__internal_7e1ac4a6e21162fd504f0f06b5b1274706986f461e4f81e41d745d69074a5124_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_743d6067e89824547c1fdb7b92041f0470314e703c3ac3befe98ee3e92ee1de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743d6067e89824547c1fdb7b92041f0470314e703c3ac3befe98ee3e92ee1de1->enter($__internal_743d6067e89824547c1fdb7b92041f0470314e703c3ac3befe98ee3e92ee1de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_743d6067e89824547c1fdb7b92041f0470314e703c3ac3befe98ee3e92ee1de1->leave($__internal_743d6067e89824547c1fdb7b92041f0470314e703c3ac3befe98ee3e92ee1de1_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_daf92c1513fe0da16d4cebd0bd465be69c0339842889c2d7f1bf011ccc270a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf92c1513fe0da16d4cebd0bd465be69c0339842889c2d7f1bf011ccc270a3a->enter($__internal_daf92c1513fe0da16d4cebd0bd465be69c0339842889c2d7f1bf011ccc270a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_daf92c1513fe0da16d4cebd0bd465be69c0339842889c2d7f1bf011ccc270a3a->leave($__internal_daf92c1513fe0da16d4cebd0bd465be69c0339842889c2d7f1bf011ccc270a3a_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_c8e5f2c7dfc75ff39f269a02e3c383e4f11c1ac0c862712f6744191d46a2ad62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e5f2c7dfc75ff39f269a02e3c383e4f11c1ac0c862712f6744191d46a2ad62->enter($__internal_c8e5f2c7dfc75ff39f269a02e3c383e4f11c1ac0c862712f6744191d46a2ad62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_c8e5f2c7dfc75ff39f269a02e3c383e4f11c1ac0c862712f6744191d46a2ad62->leave($__internal_c8e5f2c7dfc75ff39f269a02e3c383e4f11c1ac0c862712f6744191d46a2ad62_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_d3ceb67ba4a9e3348125e2c4379d8e71f535bb848c027dd20beaa5354ea1e666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ceb67ba4a9e3348125e2c4379d8e71f535bb848c027dd20beaa5354ea1e666->enter($__internal_d3ceb67ba4a9e3348125e2c4379d8e71f535bb848c027dd20beaa5354ea1e666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d3ceb67ba4a9e3348125e2c4379d8e71f535bb848c027dd20beaa5354ea1e666->leave($__internal_d3ceb67ba4a9e3348125e2c4379d8e71f535bb848c027dd20beaa5354ea1e666_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_d69428580615d2cb89f2dce7c6cd920b6c428107ec35ac3514d8a55b9cc26be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69428580615d2cb89f2dce7c6cd920b6c428107ec35ac3514d8a55b9cc26be8->enter($__internal_d69428580615d2cb89f2dce7c6cd920b6c428107ec35ac3514d8a55b9cc26be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d69428580615d2cb89f2dce7c6cd920b6c428107ec35ac3514d8a55b9cc26be8->leave($__internal_d69428580615d2cb89f2dce7c6cd920b6c428107ec35ac3514d8a55b9cc26be8_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_973602718e1a1f3f7332e0de9ac73fc7331c9862e8e310fdb1433f6295f1a39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973602718e1a1f3f7332e0de9ac73fc7331c9862e8e310fdb1433f6295f1a39c->enter($__internal_973602718e1a1f3f7332e0de9ac73fc7331c9862e8e310fdb1433f6295f1a39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_973602718e1a1f3f7332e0de9ac73fc7331c9862e8e310fdb1433f6295f1a39c->leave($__internal_973602718e1a1f3f7332e0de9ac73fc7331c9862e8e310fdb1433f6295f1a39c_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_d600ae4f7bbf6365571c2ceae7479f70d1ccb0fe5df2cbd8a4b892e5422bdd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d600ae4f7bbf6365571c2ceae7479f70d1ccb0fe5df2cbd8a4b892e5422bdd4b->enter($__internal_d600ae4f7bbf6365571c2ceae7479f70d1ccb0fe5df2cbd8a4b892e5422bdd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d600ae4f7bbf6365571c2ceae7479f70d1ccb0fe5df2cbd8a4b892e5422bdd4b->leave($__internal_d600ae4f7bbf6365571c2ceae7479f70d1ccb0fe5df2cbd8a4b892e5422bdd4b_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_08a2a326beba0bc4630fd597fc9dee88d2f227d1faf0ff1f444471c903a47d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a2a326beba0bc4630fd597fc9dee88d2f227d1faf0ff1f444471c903a47d93->enter($__internal_08a2a326beba0bc4630fd597fc9dee88d2f227d1faf0ff1f444471c903a47d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_08a2a326beba0bc4630fd597fc9dee88d2f227d1faf0ff1f444471c903a47d93->leave($__internal_08a2a326beba0bc4630fd597fc9dee88d2f227d1faf0ff1f444471c903a47d93_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_6d3c8567358f3b95faf6293c535b66bf5b000891a996ad5d838700d8fab452ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3c8567358f3b95faf6293c535b66bf5b000891a996ad5d838700d8fab452ec->enter($__internal_6d3c8567358f3b95faf6293c535b66bf5b000891a996ad5d838700d8fab452ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6d3c8567358f3b95faf6293c535b66bf5b000891a996ad5d838700d8fab452ec->leave($__internal_6d3c8567358f3b95faf6293c535b66bf5b000891a996ad5d838700d8fab452ec_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_9651fc2cff3812d7e56c704b629ce4bb1c801c6ac534e6931c72d188002d5c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9651fc2cff3812d7e56c704b629ce4bb1c801c6ac534e6931c72d188002d5c2a->enter($__internal_9651fc2cff3812d7e56c704b629ce4bb1c801c6ac534e6931c72d188002d5c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9651fc2cff3812d7e56c704b629ce4bb1c801c6ac534e6931c72d188002d5c2a->leave($__internal_9651fc2cff3812d7e56c704b629ce4bb1c801c6ac534e6931c72d188002d5c2a_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_c114ae215aca4e5013860a1824189f215b23591757fadfc5fa90c59efbe3cdc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c114ae215aca4e5013860a1824189f215b23591757fadfc5fa90c59efbe3cdc2->enter($__internal_c114ae215aca4e5013860a1824189f215b23591757fadfc5fa90c59efbe3cdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 222
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 223
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 226
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_c114ae215aca4e5013860a1824189f215b23591757fadfc5fa90c59efbe3cdc2->leave($__internal_c114ae215aca4e5013860a1824189f215b23591757fadfc5fa90c59efbe3cdc2_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_63cb09a32502904cad3f7f8974aded67d37fe6f9a339dd1c35ed16f9298a5d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63cb09a32502904cad3f7f8974aded67d37fe6f9a339dd1c35ed16f9298a5d2d->enter($__internal_63cb09a32502904cad3f7f8974aded67d37fe6f9a339dd1c35ed16f9298a5d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_63cb09a32502904cad3f7f8974aded67d37fe6f9a339dd1c35ed16f9298a5d2d->leave($__internal_63cb09a32502904cad3f7f8974aded67d37fe6f9a339dd1c35ed16f9298a5d2d_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_4d82aa964a57873d0f9944564a6590bec3281eaee2794c32f8f1d30e7bf7a317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d82aa964a57873d0f9944564a6590bec3281eaee2794c32f8f1d30e7bf7a317->enter($__internal_4d82aa964a57873d0f9944564a6590bec3281eaee2794c32f8f1d30e7bf7a317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_4d82aa964a57873d0f9944564a6590bec3281eaee2794c32f8f1d30e7bf7a317->leave($__internal_4d82aa964a57873d0f9944564a6590bec3281eaee2794c32f8f1d30e7bf7a317_prof);

    }

    // line 244
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_365a70b5d0515d97735447943a19b36a6a74a43dfa37a53c437edb4387b57476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365a70b5d0515d97735447943a19b36a6a74a43dfa37a53c437edb4387b57476->enter($__internal_365a70b5d0515d97735447943a19b36a6a74a43dfa37a53c437edb4387b57476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 245
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 246
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 247
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 249
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 250
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 252
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 253
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 254
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 255
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 256
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 259
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 262
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_365a70b5d0515d97735447943a19b36a6a74a43dfa37a53c437edb4387b57476->leave($__internal_365a70b5d0515d97735447943a19b36a6a74a43dfa37a53c437edb4387b57476_prof);

    }

    // line 266
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_08acb2675f7458d31be912e4c18e1fec27555bcfb367067a781dfb05dc6b3686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08acb2675f7458d31be912e4c18e1fec27555bcfb367067a781dfb05dc6b3686->enter($__internal_08acb2675f7458d31be912e4c18e1fec27555bcfb367067a781dfb05dc6b3686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_08acb2675f7458d31be912e4c18e1fec27555bcfb367067a781dfb05dc6b3686->leave($__internal_08acb2675f7458d31be912e4c18e1fec27555bcfb367067a781dfb05dc6b3686_prof);

    }

    // line 270
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_5d15c5653dbe0894ec4173a8b66df8b4ff99df6c0804dcfa19ae1ee0033e41de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d15c5653dbe0894ec4173a8b66df8b4ff99df6c0804dcfa19ae1ee0033e41de->enter($__internal_5d15c5653dbe0894ec4173a8b66df8b4ff99df6c0804dcfa19ae1ee0033e41de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 275
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_5d15c5653dbe0894ec4173a8b66df8b4ff99df6c0804dcfa19ae1ee0033e41de->leave($__internal_5d15c5653dbe0894ec4173a8b66df8b4ff99df6c0804dcfa19ae1ee0033e41de_prof);

    }

    // line 278
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4de6fd5f22db04ffe81a1bbdbe36e3c2fbd806b7da574efbcf0b2693e1176ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de6fd5f22db04ffe81a1bbdbe36e3c2fbd806b7da574efbcf0b2693e1176ed0->enter($__internal_4de6fd5f22db04ffe81a1bbdbe36e3c2fbd806b7da574efbcf0b2693e1176ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 279
        echo "<div>";
        // line 280
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 281
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 282
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 283
        echo "</div>";
        
        $__internal_4de6fd5f22db04ffe81a1bbdbe36e3c2fbd806b7da574efbcf0b2693e1176ed0->leave($__internal_4de6fd5f22db04ffe81a1bbdbe36e3c2fbd806b7da574efbcf0b2693e1176ed0_prof);

    }

    // line 286
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_bed4339e676a46c0870b8886fa13f5a0fe6045c6241e9bd8d95ebb50887abcac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed4339e676a46c0870b8886fa13f5a0fe6045c6241e9bd8d95ebb50887abcac->enter($__internal_bed4339e676a46c0870b8886fa13f5a0fe6045c6241e9bd8d95ebb50887abcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 287
        echo "<div>";
        // line 288
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 289
        echo "</div>";
        
        $__internal_bed4339e676a46c0870b8886fa13f5a0fe6045c6241e9bd8d95ebb50887abcac->leave($__internal_bed4339e676a46c0870b8886fa13f5a0fe6045c6241e9bd8d95ebb50887abcac_prof);

    }

    // line 292
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_988cba8f34ff8f3cc86ac38dab8e210f8ca733e75154949a425ab455a3531f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988cba8f34ff8f3cc86ac38dab8e210f8ca733e75154949a425ab455a3531f04->enter($__internal_988cba8f34ff8f3cc86ac38dab8e210f8ca733e75154949a425ab455a3531f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 293
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_988cba8f34ff8f3cc86ac38dab8e210f8ca733e75154949a425ab455a3531f04->leave($__internal_988cba8f34ff8f3cc86ac38dab8e210f8ca733e75154949a425ab455a3531f04_prof);

    }

    // line 298
    public function block_form($context, array $blocks = array())
    {
        $__internal_c5e2c17c6bc81404ac87249db5cfee5accadd73d7cfc2424f2f9346be0c27adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e2c17c6bc81404ac87249db5cfee5accadd73d7cfc2424f2f9346be0c27adb->enter($__internal_c5e2c17c6bc81404ac87249db5cfee5accadd73d7cfc2424f2f9346be0c27adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 299
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 300
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 301
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_c5e2c17c6bc81404ac87249db5cfee5accadd73d7cfc2424f2f9346be0c27adb->leave($__internal_c5e2c17c6bc81404ac87249db5cfee5accadd73d7cfc2424f2f9346be0c27adb_prof);

    }

    // line 304
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_50f9114112b6a555e89f65d775728bcc22a59e3cd9456d5a798550f6e9e2acfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f9114112b6a555e89f65d775728bcc22a59e3cd9456d5a798550f6e9e2acfc->enter($__internal_50f9114112b6a555e89f65d775728bcc22a59e3cd9456d5a798550f6e9e2acfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 305
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 306
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 307
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 309
            $context["form_method"] = "POST";
        }
        // line 311
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 312
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 313
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_50f9114112b6a555e89f65d775728bcc22a59e3cd9456d5a798550f6e9e2acfc->leave($__internal_50f9114112b6a555e89f65d775728bcc22a59e3cd9456d5a798550f6e9e2acfc_prof);

    }

    // line 317
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_c0347bf97716b5afcb27fa5c9b7d069855ee7a7c6866818ad0a021b4b6d9742d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0347bf97716b5afcb27fa5c9b7d069855ee7a7c6866818ad0a021b4b6d9742d->enter($__internal_c0347bf97716b5afcb27fa5c9b7d069855ee7a7c6866818ad0a021b4b6d9742d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 318
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 319
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 321
        echo "</form>";
        
        $__internal_c0347bf97716b5afcb27fa5c9b7d069855ee7a7c6866818ad0a021b4b6d9742d->leave($__internal_c0347bf97716b5afcb27fa5c9b7d069855ee7a7c6866818ad0a021b4b6d9742d_prof);

    }

    // line 324
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_35d65a7648fba9fe2d9b13716e823811cb45e780a103700c4dd7584e48d02867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d65a7648fba9fe2d9b13716e823811cb45e780a103700c4dd7584e48d02867->enter($__internal_35d65a7648fba9fe2d9b13716e823811cb45e780a103700c4dd7584e48d02867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 325
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 326
            echo "<ul>";
            // line 327
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 328
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 330
            echo "</ul>";
        }
        
        $__internal_35d65a7648fba9fe2d9b13716e823811cb45e780a103700c4dd7584e48d02867->leave($__internal_35d65a7648fba9fe2d9b13716e823811cb45e780a103700c4dd7584e48d02867_prof);

    }

    // line 334
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_cd30eb021e7c69962b11d7092878de72878a582c510b2b9dae79d7d44a017b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd30eb021e7c69962b11d7092878de72878a582c510b2b9dae79d7d44a017b7a->enter($__internal_cd30eb021e7c69962b11d7092878de72878a582c510b2b9dae79d7d44a017b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 335
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 336
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 337
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_cd30eb021e7c69962b11d7092878de72878a582c510b2b9dae79d7d44a017b7a->leave($__internal_cd30eb021e7c69962b11d7092878de72878a582c510b2b9dae79d7d44a017b7a_prof);

    }

    // line 344
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_366b2a4442404f037ce2aa5f5a5d5461db09f2c39feaf56ec604f8ca3d9cde88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366b2a4442404f037ce2aa5f5a5d5461db09f2c39feaf56ec604f8ca3d9cde88->enter($__internal_366b2a4442404f037ce2aa5f5a5d5461db09f2c39feaf56ec604f8ca3d9cde88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 345
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 346
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_366b2a4442404f037ce2aa5f5a5d5461db09f2c39feaf56ec604f8ca3d9cde88->leave($__internal_366b2a4442404f037ce2aa5f5a5d5461db09f2c39feaf56ec604f8ca3d9cde88_prof);

    }

    // line 350
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_1dc89496bc538733d9ed6f747644b89e1fccaadaa32973507efb9c008a930850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc89496bc538733d9ed6f747644b89e1fccaadaa32973507efb9c008a930850->enter($__internal_1dc89496bc538733d9ed6f747644b89e1fccaadaa32973507efb9c008a930850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 351
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 352
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 353
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 355
            echo " ";
            // line 356
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 357
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 358
$context["attrvalue"] === true)) {
                // line 359
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 360
$context["attrvalue"] === false)) {
                // line 361
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1dc89496bc538733d9ed6f747644b89e1fccaadaa32973507efb9c008a930850->leave($__internal_1dc89496bc538733d9ed6f747644b89e1fccaadaa32973507efb9c008a930850_prof);

    }

    // line 366
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_79fa55a2c59b46f0567b23b99bb557785962c16a54637b9d3d8a0a0496ee67b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79fa55a2c59b46f0567b23b99bb557785962c16a54637b9d3d8a0a0496ee67b7->enter($__internal_79fa55a2c59b46f0567b23b99bb557785962c16a54637b9d3d8a0a0496ee67b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 367
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 368
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 369
            echo " ";
            // line 370
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 371
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 372
$context["attrvalue"] === true)) {
                // line 373
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 374
$context["attrvalue"] === false)) {
                // line 375
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_79fa55a2c59b46f0567b23b99bb557785962c16a54637b9d3d8a0a0496ee67b7->leave($__internal_79fa55a2c59b46f0567b23b99bb557785962c16a54637b9d3d8a0a0496ee67b7_prof);

    }

    // line 380
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_7b6c0344034e17bca2e8331ad7a787d520318004e8d893cb083c74b4dfae88bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6c0344034e17bca2e8331ad7a787d520318004e8d893cb083c74b4dfae88bc->enter($__internal_7b6c0344034e17bca2e8331ad7a787d520318004e8d893cb083c74b4dfae88bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 381
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 382
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 383
            echo " ";
            // line 384
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 385
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 386
$context["attrvalue"] === true)) {
                // line 387
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 388
$context["attrvalue"] === false)) {
                // line 389
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7b6c0344034e17bca2e8331ad7a787d520318004e8d893cb083c74b4dfae88bc->leave($__internal_7b6c0344034e17bca2e8331ad7a787d520318004e8d893cb083c74b4dfae88bc_prof);

    }

    // line 394
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_af4e445c2c0f7d2373d31f7486fc04df360dad2e4f474cae60886335cdadd531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4e445c2c0f7d2373d31f7486fc04df360dad2e4f474cae60886335cdadd531->enter($__internal_af4e445c2c0f7d2373d31f7486fc04df360dad2e4f474cae60886335cdadd531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 396
            echo " ";
            // line 397
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 399
$context["attrvalue"] === true)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 401
$context["attrvalue"] === false)) {
                // line 402
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_af4e445c2c0f7d2373d31f7486fc04df360dad2e4f474cae60886335cdadd531->leave($__internal_af4e445c2c0f7d2373d31f7486fc04df360dad2e4f474cae60886335cdadd531_prof);

    }

    public function getTemplateName()
    {
        return ":FormTemplate:bootstrap2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1399 => 402,  1397 => 401,  1392 => 400,  1390 => 399,  1385 => 398,  1383 => 397,  1381 => 396,  1377 => 395,  1371 => 394,  1356 => 389,  1354 => 388,  1349 => 387,  1347 => 386,  1342 => 385,  1340 => 384,  1338 => 383,  1334 => 382,  1325 => 381,  1319 => 380,  1304 => 375,  1302 => 374,  1297 => 373,  1295 => 372,  1290 => 371,  1288 => 370,  1286 => 369,  1282 => 368,  1276 => 367,  1270 => 366,  1255 => 361,  1253 => 360,  1248 => 359,  1246 => 358,  1241 => 357,  1239 => 356,  1237 => 355,  1233 => 354,  1229 => 353,  1225 => 352,  1219 => 351,  1213 => 350,  1202 => 346,  1198 => 345,  1192 => 344,  1180 => 337,  1178 => 336,  1174 => 335,  1168 => 334,  1160 => 330,  1152 => 328,  1148 => 327,  1146 => 326,  1144 => 325,  1138 => 324,  1131 => 321,  1128 => 319,  1126 => 318,  1120 => 317,  1110 => 313,  1108 => 312,  1081 => 311,  1078 => 309,  1075 => 307,  1073 => 306,  1071 => 305,  1065 => 304,  1058 => 301,  1056 => 300,  1054 => 299,  1048 => 298,  1041 => 293,  1035 => 292,  1028 => 289,  1026 => 288,  1024 => 287,  1018 => 286,  1011 => 283,  1009 => 282,  1007 => 281,  1005 => 280,  1003 => 279,  997 => 278,  990 => 275,  984 => 270,  973 => 266,  950 => 262,  946 => 259,  943 => 256,  942 => 255,  941 => 254,  939 => 253,  937 => 252,  934 => 250,  932 => 249,  929 => 247,  927 => 246,  925 => 245,  919 => 244,  912 => 239,  910 => 238,  904 => 237,  897 => 234,  895 => 233,  889 => 232,  876 => 229,  872 => 226,  869 => 223,  868 => 222,  867 => 221,  865 => 220,  863 => 219,  857 => 218,  850 => 215,  848 => 214,  842 => 213,  835 => 210,  833 => 209,  827 => 208,  820 => 205,  818 => 204,  812 => 203,  805 => 200,  803 => 199,  797 => 198,  789 => 195,  787 => 194,  781 => 193,  774 => 190,  772 => 189,  766 => 188,  759 => 185,  757 => 184,  751 => 183,  744 => 180,  738 => 179,  731 => 176,  729 => 175,  723 => 174,  716 => 171,  714 => 170,  708 => 168,  700 => 164,  696 => 163,  692 => 160,  686 => 159,  680 => 158,  674 => 157,  668 => 156,  662 => 155,  656 => 154,  650 => 153,  645 => 149,  639 => 148,  633 => 147,  627 => 146,  621 => 145,  615 => 144,  609 => 143,  603 => 142,  597 => 139,  595 => 138,  591 => 137,  588 => 135,  586 => 134,  580 => 133,  572 => 129,  562 => 128,  557 => 127,  555 => 126,  552 => 124,  550 => 123,  544 => 122,  536 => 118,  534 => 116,  533 => 115,  532 => 114,  531 => 113,  527 => 112,  524 => 110,  522 => 109,  516 => 108,  508 => 104,  506 => 103,  504 => 102,  502 => 101,  500 => 100,  496 => 99,  493 => 97,  491 => 96,  485 => 95,  468 => 92,  462 => 91,  445 => 88,  439 => 87,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 394,  153 => 380,  151 => 366,  149 => 350,  147 => 344,  144 => 341,  142 => 334,  140 => 324,  138 => 317,  136 => 304,  134 => 298,  132 => 292,  130 => 286,  128 => 278,  126 => 270,  124 => 266,  122 => 244,  120 => 237,  118 => 232,  116 => 218,  114 => 213,  112 => 208,  110 => 203,  108 => 198,  106 => 193,  104 => 188,  102 => 183,  100 => 179,  98 => 174,  96 => 168,  94 => 133,  92 => 122,  90 => 108,  88 => 95,  86 => 91,  84 => 87,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
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
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}", ":FormTemplate:bootstrap2.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\app/Resources\\views/FormTemplate/bootstrap2.html.twig");
    }
}
