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

/* post.html.twig */
class __TwigTemplate_6da990b9c9bed6a994f6a8cc131aca1c73225bdc5d93e9beb406ac55b743793f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->loadTemplate("post.html.twig", "post.html.twig", 1, "2094539767")->display($context);
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

{% block body %}
<body class=\"post-template\" itemscope itemtype=\"https://schema.org/WebPage\">
    <!-- Google Tag Manager (noscript) -->
\t    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TV7C9RP\"
\t    height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
{% endblock %}
{% block header %}{% endblock %}

{% block content %}
 <main id=\"summer-post-container\" class=\"summer-post-container intro-effect-sliced\" role=\"main\">
  <header class=\"summer-post-header\">
    <div class=\"bg-img\"></div>
    <div class=\"summer-post-menu-header\">
      <a class=\"summer-blog-logo\" href=\"{{ base_url_absolute }}\">
        <img src=\"{{ base_url }}{{ site.logo }}\" alt=\"Blog Logo\" />
      </a>
      {% include 'partials/navigation.html.twig' %}
    </div>
    <div class=\"summer-post-title bg-check\">
      <h1>{{ page.title }}</h1>
      <p>por <strong>{{ site.owner.name }}</strong> &#8212; sobre {% for tag in page.taxonomy.tag %}<a href=\"{{ base_url_absolute }}/tag:{{ tag }}\" data-toggle=\"tooltip\" title=\"Posts tagged with {{ tag }}\" rel=\"tag\">{{ tag }}</a>{%if not loop.last %}&nbsp;&comma;&nbsp;{% endif %}{% endfor %} <strong><time datetime=\"{{ page.date | date(site.date_long) }}\">{{ page.date | date(\"d M Y\") }}</time></strong></p>
    </div>
    <div class=\"bg-img\"></div>
  </header>

  <button class=\"trigger bg-check\" data-info=\"Leer más\"><span>Trigger</span></button>

  {% if page.header.image %}<img src=\"{{ page.media[page.header.image].url }}\" alt=\"cover-image\" />{% endif %}

    <article class=\"summer-post-content post\">
      <div>
        {{ content }}
      </div>
    </article>
    <div class=\"cf\"></div>
    <br />

    {% include 'partials/footer.html.twig' %}
    <div class=\"cf\"></div>
  </main>
{% endblock %}

{% block footer %}{% endblock %}
{% endembed %}
", "post.html.twig", "/usr/share/nginx/html/user/themes/notepad/templates/post.html.twig");
    }
}


/* post.html.twig */
class __TwigTemplate_6da990b9c9bed6a994f6a8cc131aca1c73225bdc5d93e9beb406ac55b743793f___2094539767 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "post.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "<body class=\"post-template\" itemscope itemtype=\"https://schema.org/WebPage\">
    <!-- Google Tag Manager (noscript) -->
\t    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TV7C9RP\"
\t    height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
";
    }

    // line 10
    public function block_header($context, array $blocks = [])
    {
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        // line 13
        echo " <main id=\"summer-post-container\" class=\"summer-post-container intro-effect-sliced\" role=\"main\">
  <header class=\"summer-post-header\">
    <div class=\"bg-img\"></div>
    <div class=\"summer-post-menu-header\">
      <a class=\"summer-blog-logo\" href=\"";
        // line 17
        echo ($context["base_url_absolute"] ?? null);
        echo "\">
        <img src=\"";
        // line 18
        echo ($context["base_url"] ?? null);
        echo $this->getAttribute(($context["site"] ?? null), "logo", []);
        echo "\" alt=\"Blog Logo\" />
      </a>
      ";
        // line 20
        $this->loadTemplate("partials/navigation.html.twig", "post.html.twig", 20)->display($context);
        // line 21
        echo "    </div>
    <div class=\"summer-post-title bg-check\">
      <h1>";
        // line 23
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
      <p>por <strong>";
        // line 24
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "name", []);
        echo "</strong> &#8212; sobre ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo "<a href=\"";
            echo ($context["base_url_absolute"] ?? null);
            echo "/tag:";
            echo $context["tag"];
            echo "\" data-toggle=\"tooltip\" title=\"Posts tagged with ";
            echo $context["tag"];
            echo "\" rel=\"tag\">";
            echo $context["tag"];
            echo "</a>";
            if ( !$this->getAttribute($context["loop"], "last", [])) {
                echo "&nbsp;&comma;&nbsp;";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " <strong><time datetime=\"";
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute(($context["site"] ?? null), "date_long", []));
        echo "\">";
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d M Y");
        echo "</time></strong></p>
    </div>
    <div class=\"bg-img\"></div>
  </header>

  <button class=\"trigger bg-check\" data-info=\"Leer más\"><span>Trigger</span></button>

  ";
        // line 31
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", [])) {
            echo "<img src=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []), [], "array"), "url", []);
            echo "\" alt=\"cover-image\" />";
        }
        // line 32
        echo "
    <article class=\"summer-post-content post\">
      <div>
        ";
        // line 35
        echo ($context["content"] ?? null);
        echo "
      </div>
    </article>
    <div class=\"cf\"></div>
    <br />

    ";
        // line 41
        $this->loadTemplate("partials/footer.html.twig", "post.html.twig", 41)->display($context);
        // line 42
        echo "    <div class=\"cf\"></div>
  </main>
";
    }

    // line 46
    public function block_footer($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 46,  255 => 42,  253 => 41,  244 => 35,  239 => 32,  233 => 31,  178 => 24,  174 => 23,  170 => 21,  168 => 20,  162 => 18,  158 => 17,  152 => 13,  149 => 12,  144 => 10,  135 => 4,  132 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

{% block body %}
<body class=\"post-template\" itemscope itemtype=\"https://schema.org/WebPage\">
    <!-- Google Tag Manager (noscript) -->
\t    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TV7C9RP\"
\t    height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
{% endblock %}
{% block header %}{% endblock %}

{% block content %}
 <main id=\"summer-post-container\" class=\"summer-post-container intro-effect-sliced\" role=\"main\">
  <header class=\"summer-post-header\">
    <div class=\"bg-img\"></div>
    <div class=\"summer-post-menu-header\">
      <a class=\"summer-blog-logo\" href=\"{{ base_url_absolute }}\">
        <img src=\"{{ base_url }}{{ site.logo }}\" alt=\"Blog Logo\" />
      </a>
      {% include 'partials/navigation.html.twig' %}
    </div>
    <div class=\"summer-post-title bg-check\">
      <h1>{{ page.title }}</h1>
      <p>por <strong>{{ site.owner.name }}</strong> &#8212; sobre {% for tag in page.taxonomy.tag %}<a href=\"{{ base_url_absolute }}/tag:{{ tag }}\" data-toggle=\"tooltip\" title=\"Posts tagged with {{ tag }}\" rel=\"tag\">{{ tag }}</a>{%if not loop.last %}&nbsp;&comma;&nbsp;{% endif %}{% endfor %} <strong><time datetime=\"{{ page.date | date(site.date_long) }}\">{{ page.date | date(\"d M Y\") }}</time></strong></p>
    </div>
    <div class=\"bg-img\"></div>
  </header>

  <button class=\"trigger bg-check\" data-info=\"Leer más\"><span>Trigger</span></button>

  {% if page.header.image %}<img src=\"{{ page.media[page.header.image].url }}\" alt=\"cover-image\" />{% endif %}

    <article class=\"summer-post-content post\">
      <div>
        {{ content }}
      </div>
    </article>
    <div class=\"cf\"></div>
    <br />

    {% include 'partials/footer.html.twig' %}
    <div class=\"cf\"></div>
  </main>
{% endblock %}

{% block footer %}{% endblock %}
{% endembed %}
", "post.html.twig", "/usr/share/nginx/html/user/themes/notepad/templates/post.html.twig");
    }
}
