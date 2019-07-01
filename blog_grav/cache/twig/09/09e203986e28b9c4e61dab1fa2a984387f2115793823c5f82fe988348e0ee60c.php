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
class __TwigTemplate_8dad84462f1fd1b70508a5c0227dab29948bd7a4bf18ac910a7f74db54ad20e5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>

    <!-- Google Tag Manager -->
\t<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
\tnew Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
\tj=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
\t'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
\t})(window,document,'script','dataLayer','GTM-TV7C9RP');</script>
    <!-- End Google Tag Manager -->

    <meta charset=\"utf-8\">
    <!-- (1) Optimize for mobile versions: https://goo.gl/EOpFl -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- (1) force latest IE rendering engine: bit.ly/1c8EiC9 -->
    <meta https-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 19
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
        } else {
            echo $this->getAttribute(($context["site"] ?? null), "title", []);
        }
        echo "</title>
    ";
        // line 20
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 20)->display($context);
        // line 21
        echo "
    <meta name=\"HandheldFriendly\" content=\"True\" />
    <meta name=\"MobileOptimized\" content=\"320\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">

    <link rel=\"canonical\" href=\"";
        // line 27
        echo $this->getAttribute(($context["page"] ?? null), "url", [], "method");
        echo "\">

    <!-- Icons -->
    <!-- 16x16 -->
    <link rel=\"shortcut icon\" href=\"";
        // line 31
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.ico\">
    <!-- 32x32 -->
    <link rel=\"shortcut icon\" href=\"";
        // line 33
        echo ($context["theme_url"] ?? null);
        echo "/images/logo.png\">
    <!-- 57x57 (precomposed) for iPhone 3GS, pre-2011 iPod Touch and older Android devices -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 35
        echo ($context["theme_url"] ?? null);
        echo "/images/apple-touch-icon-precomposed.png\">
    <!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 37
        echo ($context["theme_url"] ?? null);
        echo "/images/apple-touch-icon-72x72-precomposed.png\">
    <!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and post-2011 iPod Touch -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 39
        echo ($context["theme_url"] ?? null);
        echo "/images/apple-touch-icon-114x114-precomposed.png\">
    <!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 41
        echo ($context["theme_url"] ?? null);
        echo "/images/apple-touch-icon-144x144-precomposed.png\">

    ";
        // line 43
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "
    ";
        // line 55
        $this->displayBlock('assets', $context, $blocks);
        // line 58
        echo " </head>
";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "    ";
        $context["home"] = $this->getAttribute(($context["pages"] ?? null), "find", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "home", []), "alias", [])], "method");
        // line 69
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 87
        echo "
        ";
        // line 88
        $this->displayBlock('content', $context, $blocks);
        // line 91
        echo "
        ";
        // line 92
        $this->displayBlock('footer', $context, $blocks);
        // line 95
        echo "
        ";
        // line 96
        $this->loadTemplate("partials/scripts.html.twig", "partials/base.html.twig", 96)->display($context);
        // line 97
        echo "
        ";
        // line 98
        $this->displayBlock('bottom', $context, $blocks);
        // line 102
        echo "    </body>
    </html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 43
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 44
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/font-awesome.min.css"], "method");
        // line 45
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/vendor/normalizeb146.css"], "method");
        // line 46
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/vendor/foundation.minb146.css"], "method");
        // line 47
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/styleb146.css"], "method");
        // line 48
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/postb146.css"], "method");
        // line 49
        echo "    ";
    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        // line 52
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/vendor/modernizrb146.js"], "method");
        // line 53
        echo "    ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 55
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 56
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        // line 60
        echo "    <body class=\"home-template\" itemscope itemtype=\"https://schema.org/WebPage\">

    <!-- Google Tag Manager (noscript) -->
\t<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TV7C9RP\"
\theight=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    ";
    }

    // line 69
    public function block_header($context, array $blocks = [])
    {
        // line 70
        echo "            <header class=\"summer-site-head\">
                <div class=\"summer-site-head-menu\">
                    <a class=\"summer-blog-logo\" href=\"";
        // line 72
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\"><img src=\"";
        echo ($context["base_url_relative"] ?? null);
        echo $this->getAttribute(($context["site"] ?? null), "logo", []);
        echo "\" alt=\"Blog Logo\" /></a>
                    ";
        // line 73
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 73)->display($context);
        // line 74
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"summer-site-head-content\" >
                    <div class=\"summer-site-head-bg\"></div>
                    <h1 class=\"summer-blog-title\">
                        <span class=\"summer-site-head-title-bg\">
                            ";
        // line 80
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "
                        </span>
                    </h1>
                    <h2 class=\"summer-blog-description\">";
        // line 83
        echo $this->getAttribute(($context["site"] ?? null), "description", []);
        echo "</h2>
                </div>
            </header>
        ";
    }

    // line 88
    public function block_content($context, array $blocks = [])
    {
        // line 89
        echo "            ";
        echo ($context["content"] ?? null);
        echo "
        ";
    }

    // line 92
    public function block_footer($context, array $blocks = [])
    {
        // line 93
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 93)->display($context);
        // line 94
        echo "        ";
    }

    // line 98
    public function block_bottom($context, array $blocks = [])
    {
        // line 99
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
            ";
        // line 100
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
        return array (  294 => 100,  289 => 99,  286 => 98,  282 => 94,  279 => 93,  276 => 92,  269 => 89,  266 => 88,  258 => 83,  252 => 80,  244 => 74,  242 => 73,  235 => 72,  231 => 70,  228 => 69,  217 => 60,  214 => 59,  206 => 56,  203 => 55,  194 => 53,  191 => 52,  188 => 51,  184 => 49,  181 => 48,  178 => 47,  175 => 46,  172 => 45,  169 => 44,  166 => 43,  159 => 102,  157 => 98,  154 => 97,  152 => 96,  149 => 95,  147 => 92,  144 => 91,  142 => 88,  139 => 87,  136 => 69,  133 => 68,  131 => 59,  128 => 58,  126 => 55,  123 => 54,  121 => 51,  118 => 50,  116 => 43,  111 => 41,  106 => 39,  101 => 37,  96 => 35,  91 => 33,  86 => 31,  79 => 27,  71 => 21,  69 => 20,  61 => 19,  41 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>

    <!-- Google Tag Manager -->
\t<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
\tnew Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
\tj=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
\t'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
\t})(window,document,'script','dataLayer','GTM-TV7C9RP');</script>
    <!-- End Google Tag Manager -->

    <meta charset=\"utf-8\">
    <!-- (1) Optimize for mobile versions: https://goo.gl/EOpFl -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- (1) force latest IE rendering engine: bit.ly/1c8EiC9 -->
    <meta https-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>{% if page.title %}{{ page.title }}{% else %}{{ site.title }}{% endif %}</title>
    {% include 'partials/metadata.html.twig' %}

    <meta name=\"HandheldFriendly\" content=\"True\" />
    <meta name=\"MobileOptimized\" content=\"320\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">

    <link rel=\"canonical\" href=\"{{ page.url() }}\">

    <!-- Icons -->
    <!-- 16x16 -->
    <link rel=\"shortcut icon\" href=\"{{ theme_url }}/images/favicon.ico\">
    <!-- 32x32 -->
    <link rel=\"shortcut icon\" href=\"{{ theme_url }}/images/logo.png\">
    <!-- 57x57 (precomposed) for iPhone 3GS, pre-2011 iPod Touch and older Android devices -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ theme_url }}/images/apple-touch-icon-precomposed.png\">
    <!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ theme_url }}/images/apple-touch-icon-72x72-precomposed.png\">
    <!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and post-2011 iPod Touch -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ theme_url }}/images/apple-touch-icon-114x114-precomposed.png\">
    <!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ theme_url }}/images/apple-touch-icon-144x144-precomposed.png\">

    {% block stylesheets %}
        {% do assets.addCss('theme://css/font-awesome.min.css') %}
        {% do assets.addCss('theme://css/vendor/normalizeb146.css') %}
        {% do assets.addCss('theme://css/vendor/foundation.minb146.css') %}
        {% do assets.addCss('theme://css/styleb146.css') %}
        {% do assets.addCss('theme://css/postb146.css') %}
    {% endblock %}

    {% block javascripts %}
        {% do assets.addJs('theme://js/vendor/modernizrb146.js') %}
    {% endblock %}

    {% block assets deferred %}
        {{ assets.css()|raw }}
    {% endblock %}
 </head>
{% block body %}
    <body class=\"home-template\" itemscope itemtype=\"https://schema.org/WebPage\">

    <!-- Google Tag Manager (noscript) -->
\t<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TV7C9RP\"
\theight=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    {% endblock %}
    {% set home = pages.find(config.system.home.alias) %}
        {% block header %}
            <header class=\"summer-site-head\">
                <div class=\"summer-site-head-menu\">
                    <a class=\"summer-blog-logo\" href=\"{{ base_url == '' ? '/' : base_url }}\"><img src=\"{{ base_url_relative }}{{ site.logo }}\" alt=\"Blog Logo\" /></a>
                    {% include 'partials/navigation.html.twig' %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"summer-site-head-content\" >
                    <div class=\"summer-site-head-bg\"></div>
                    <h1 class=\"summer-blog-title\">
                        <span class=\"summer-site-head-title-bg\">
                            {{ site.title }}
                        </span>
                    </h1>
                    <h2 class=\"summer-blog-description\">{{ site.description }}</h2>
                </div>
            </header>
        {% endblock %}

        {% block content %}
            {{ content }}
        {% endblock %}

        {% block footer %}
            {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {% include 'partials/scripts.html.twig' %}

        {% block bottom %}
            {{ assets.js()|raw }}
            {{ assets.js('bottom')|raw }}
        {% endblock %}
    </body>
    </html>
", "partials/base.html.twig", "/usr/share/nginx/html/user/themes/notepad/templates/partials/base.html.twig");
    }
}
