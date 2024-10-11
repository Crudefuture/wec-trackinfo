<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modular.html.twig */
class __TwigTemplate_78bfad0168599a78b364673f00bd906965c8768ff89e2d2e50e6cc6e865b233e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'bottom' => [$this, 'block_bottom'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'hero' => [$this, 'block_hero'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", []) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", [])));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        if (($context["show_onpage_menu"] ?? null)) {
            // line 7
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/singlepagenav.min.js"], "method");
            // line 8
            echo "    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_bottom($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    ";
        // line 14
        if (($context["show_onpage_menu"] ?? null)) {
            // line 15
            echo "        <script>
            // singlePageNav initialization & configuration
            \$('ul.navigation').singlePageNav({
                offset: \$('#header').outerHeight(),
                filter: ':not(.external)',
                updateHash: true,
                currentClass: 'active'
            });
        </script>
    ";
        }
    }

    // line 27
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 28
        echo "    ";
        if (($context["show_onpage_menu"] ?? null)) {
            // line 29
            echo "        <ul class=\"navigation\">
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                if ( !($this->getAttribute($this->getAttribute($context["module"], "header", []), "visible", []) === false)) {
                    // line 31
                    echo "                <li>
                    <a href=\"#\" @click.prevent=\"updateTrack('";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("hyphen", $this->getAttribute($context["module"], "menu", [])), "html", null, true);
                    echo "')\" :class=\"{ active: currentTrack === '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("hyphen", $this->getAttribute($context["module"], "menu", [])), "html", null, true);
                    echo "' }\">
                        ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "menu", []), "html", null, true);
                    echo "
                    </a>
                </li>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 38
                echo "                <li>
                    <a ";
                // line 39
                if ($this->getAttribute($context["mitem"], "class", [])) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "class", []), "html", null, true);
                    echo "\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "url", []), "html", null, true);
                echo "\">
                        ";
                // line 40
                if ($this->getAttribute($context["mitem"], "icon", [])) {
                    echo "<i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "icon", []), "html", null, true);
                    echo "\"></i>";
                }
                // line 41
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "text", []), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        </ul>
    ";
        } else {
            // line 47
            echo "        ";
            $this->displayParentBlock("header_navigation", $context, $blocks);
            echo "
    ";
        }
    }

    // line 51
    public function block_hero($context, array $blocks = [])
    {
        // line 52
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            if (($this->getAttribute($context["module"], "template", []) == "modular/hero")) {
                // line 53
                echo "        <div id=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("hyphen", $this->getAttribute($context["module"], "menu", [])), "html", null, true);
                echo "\" class=\"test\"></div>
        ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "content", []), "html", null, true);
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        // line 59
        echo "    <div id=\"app\">
        <div class=\"outer-nav-wrapper\">
            <ul class=\"navigation-lower\">
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            if ( !($this->getAttribute($this->getAttribute($context["module"], "header", []), "visible", []) === false)) {
                // line 63
                echo "                    <li>
                        <p id=\"#";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("hyphen", $this->getAttribute($context["module"], "menu", [])), "html", null, true);
                echo "\" @click.prevent=\"updateTrack('";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("hyphen", $this->getAttribute($context["module"], "menu", [])), "html", null, true);
                echo "')\" :class=\"{ active: currentTrack === '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("hyphen", $this->getAttribute($context["module"], "menu", [])), "html", null, true);
                echo "' }\">
                            ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "menu", []), "html", null, true);
                echo "
                        </p>
                    </li>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            </ul>
        </div>
        <div class=\"container grid-lg circuit-modules\">
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            if (($this->getAttribute($context["module"], "template", []) == "modular/circuit")) {
                // line 73
                echo "                <div v-show=\"currentTrack === '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("hyphen", $this->getAttribute($context["module"], "menu", [])), "html", null, true);
                echo "'\" class=\"circuit-module\" id=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("hyphen", $this->getAttribute($context["module"], "menu", [])), "html", null, true);
                echo "\">
                    ";
                // line 74
                $this->loadTemplate("modular/circuit.html.twig", "modular.html.twig", 74)->display(twig_array_merge($context, ["circuit" => $context["module"]]));
                // line 75
                echo "                </div>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 77,  255 => 75,  253 => 74,  246 => 73,  235 => 72,  230 => 69,  219 => 65,  211 => 64,  208 => 63,  203 => 62,  198 => 59,  195 => 58,  184 => 54,  179 => 53,  173 => 52,  170 => 51,  162 => 47,  158 => 45,  147 => 41,  141 => 40,  131 => 39,  128 => 38,  123 => 37,  112 => 33,  106 => 32,  103 => 31,  98 => 30,  95 => 29,  92 => 28,  89 => 27,  75 => 15,  73 => 14,  68 => 13,  65 => 12,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  41 => 1,  39 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}

{% block javascripts %}
    {% if show_onpage_menu %}
        {% do assets.add('theme://js/singlepagenav.min.js') %}
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block bottom %}
    {{ parent() }}
    {% if show_onpage_menu %}
        <script>
            // singlePageNav initialization & configuration
            \$('ul.navigation').singlePageNav({
                offset: \$('#header').outerHeight(),
                filter: ':not(.external)',
                updateHash: true,
                currentClass: 'active'
            });
        </script>
    {% endif %}
{% endblock %}

{% block header_navigation %}
    {% if show_onpage_menu %}
        <ul class=\"navigation\">
            {% for module in page.collection() if module.header.visible is not same as(false) %}
                <li>
                    <a href=\"#\" @click.prevent=\"updateTrack('{{ module.menu|hyphenize }}')\" :class=\"{ active: currentTrack === '{{ module.menu|hyphenize }}' }\">
                        {{ module.menu }}
                    </a>
                </li>
            {% endfor %}
            {% for mitem in site.menu %}
                <li>
                    <a {% if mitem.class %}class=\"{{ mitem.class }}\"{% endif %} href=\"{{ mitem.url }}\">
                        {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                        {{ mitem.text }}
                    </a>
                </li>
            {% endfor %}
        </ul>
    {% else %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block hero %}
    {% for module in page.collection() if module.template == 'modular/hero' %}
        <div id=\"{{ module.menu|hyphenize }}\" class=\"test\"></div>
        {{ module.content }}
    {% endfor %}
{% endblock %}

{% block content %}
    <div id=\"app\">
        <div class=\"outer-nav-wrapper\">
            <ul class=\"navigation-lower\">
                {% for module in page.collection() if module.header.visible is not same as(false) %}
                    <li>
                        <p id=\"#{{ module.menu|hyphenize }}\" @click.prevent=\"updateTrack('{{ module.menu|hyphenize }}')\" :class=\"{ active: currentTrack === '{{ module.menu|hyphenize }}' }\">
                            {{ module.menu }}
                        </p>
                    </li>
                {% endfor %}
            </ul>
        </div>
        <div class=\"container grid-lg circuit-modules\">
            {% for module in page.collection if module.template == 'modular/circuit' %}
                <div v-show=\"currentTrack === '{{ module.menu|hyphenize }}'\" class=\"circuit-module\" id=\"{{ module.menu|hyphenize }}\">
                    {% include 'modular/circuit.html.twig' with { 'circuit': module } %}
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

", "modular.html.twig", "C:\\laragon\\www\\wec\\user\\themes\\fiawec\\templates\\modular.html.twig");
    }
}
