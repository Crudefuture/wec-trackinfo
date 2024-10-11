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

/* partials/base.html.twig */
class __TwigTemplate_620f1adb3c22b9fad3088ba6d5aa05985006d6c36b25e2d9ee20c549c5bc33f1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blocks/base.html.twig", "partials/base.html.twig", 4);
        // line 4
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 4, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'body_classes' => [$this, 'block_body_classes'],
                'header' => [$this, 'block_header'],
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'messages' => [$this, 'block_messages'],
                'footer' => [$this, 'block_footer'],
                'mobile' => [$this, 'block_mobile'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->bodyClassFunc($context, [0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "production-mode")) ? (".min.css") : (".css"));
        // line 5
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
<head>
";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('assets', $context, $blocks);
        // line 40
        echo "</head>
<body id=\"top\" class=\"";
        // line 41
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div id=\"page-wrapper\">
    ";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 74
        echo "
    ";
        // line 75
        $this->displayBlock('hero', $context, $blocks);
        // line 76
        echo "
        <section id=\"start\">
        ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "        </section>

    </div>

    ";
        // line 92
        $this->displayBlock('footer', $context, $blocks);
        // line 95
        echo "
    ";
        // line 96
        $this->displayBlock('mobile', $context, $blocks);
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('bottom', $context, $blocks);
        // line 112
        echo "
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head');
    }

    // line 8
    public function block_head_deferred($context, array $blocks = [])
    {
        // line 9
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 14
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 14)->display($context);
        // line 15
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png"), "html", null, true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://fonts/font-styles.css"), "html", null, true);
        echo "\" type=\"text/css\" charset=\"utf-8\" />
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 23
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 24
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 27
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        // line 31
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 32
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 33
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 36
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 37
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 38
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 41
    public function block_body_classes($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
    }

    // line 43
    public function block_header($context, array $blocks = [])
    {
        // line 44
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        ";
        // line 48
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "                    </section>
                    <section class=\"navbar-section desktop-menu\">

                       ";
        // line 57
        echo "
                        ";
        // line 58
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 59
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 59)->display($context);
            echo "</span>
                        ";
        }
        // line 61
        echo "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
    }

    // line 75
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 78
    public function block_body($context, array $blocks = [])
    {
        // line 79
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"";
        // line 80
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 81
        $this->displayBlock('messages', $context, $blocks);
        // line 84
        echo "                    ";
        $this->displayBlock("content_surround", $context, $blocks);
        echo "
                </section>
            </section>
        ";
    }

    // line 81
    public function block_messages($context, array $blocks = [])
    {
        // line 82
        echo "                        ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 82);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 83
        echo "                    ";
    }

    // line 92
    public function block_footer($context, array $blocks = [])
    {
        // line 93
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 93)->display($context);
        // line 94
        echo "    ";
    }

    // line 96
    public function block_mobile($context, array $blocks = [])
    {
        // line 97
        echo "    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 100
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 100)->display(twig_array_merge($context, ["mobile" => true]));
        // line 101
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 103
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 103)->display(twig_array_merge($context, ["tree" => true]));
        // line 104
        echo "            </nav>
        </div>
    </div>
    ";
    }

    // line 109
    public function block_bottom($context, array $blocks = [])
    {
        // line 110
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 110,  365 => 109,  358 => 104,  356 => 103,  352 => 101,  350 => 100,  345 => 97,  342 => 96,  338 => 94,  335 => 93,  332 => 92,  328 => 83,  317 => 82,  314 => 81,  305 => 84,  303 => 81,  299 => 80,  296 => 79,  293 => 78,  288 => 75,  272 => 61,  266 => 59,  264 => 58,  261 => 57,  256 => 49,  254 => 48,  248 => 45,  245 => 44,  242 => 43,  236 => 41,  229 => 38,  224 => 37,  221 => 36,  211 => 33,  208 => 32,  205 => 31,  202 => 30,  197 => 27,  194 => 26,  191 => 25,  186 => 24,  181 => 23,  178 => 22,  175 => 21,  168 => 18,  164 => 17,  160 => 16,  157 => 15,  155 => 14,  144 => 10,  141 => 9,  138 => 8,  125 => 112,  123 => 109,  120 => 108,  118 => 96,  115 => 95,  113 => 92,  107 => 88,  105 => 78,  101 => 76,  99 => 75,  96 => 74,  94 => 43,  89 => 41,  86 => 40,  84 => 36,  81 => 35,  79 => 30,  76 => 29,  74 => 21,  71 => 20,  69 => 8,  64 => 6,  61 => 5,  59 => 3,  57 => 2,  55 => 1,  25 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
{% use 'blocks/base.html.twig' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head deferred %}
    <meta charset=\"utf-8\" />
    <title>{% if page.title %}{{ page.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <link rel=\"stylesheet\" href=\"{{  url('theme://fonts/font-styles.css') }}\" type=\"text/css\" charset=\"utf-8\" />
{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
    {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
    {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
    {% do assets.addCss('theme://css-compiled/theme'~compress) %}
    {% do assets.addCss('theme://css/custom.css') %}
    {% do assets.addCss('theme://css/line-awesome.min.css') %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 101) %}
    {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">
    {% block header %}
        <section id=\"header\" class=\"section\">
            <section class=\"{{ grid_size }}\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        {% include 'partials/logo.html.twig' %}
                    </section>
                    <section class=\"navbar-section desktop-menu\">

                       {# <nav class=\"dropmenu animated\">
                        {% block header_navigation %}
                            {% include 'partials/navigation.html.twig' %}
                        {% endblock %}
                        </nav>#}

                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %}

                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"{{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {{ block('content_surround') }}
                </section>
            </section>
        {% endblock %}
        </section>

    </div>

    {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}

    {% block mobile %}
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>
    {% endblock %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "C:\\laragon\\www\\wec\\user\\themes\\fiawec\\templates\\partials\\base.html.twig");
    }
    private $deferred;
}
