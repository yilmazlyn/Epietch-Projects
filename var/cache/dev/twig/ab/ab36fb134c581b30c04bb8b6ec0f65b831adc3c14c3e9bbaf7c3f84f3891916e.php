<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* user/editProfileAdmin.html.twig */
class __TwigTemplate_8dac1c1d7b5a67fc836f0aaf504690b00926ab948b8a792a39b01d67b64a0b3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/editProfileAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/editProfileAdmin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/editProfileAdmin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta http-equiv=\"Content-Language\" content=\"en\"/>
    <meta name=\"msapplication-TileColor\" content=\"#2d89ef\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
    <meta name=\"HandheldFriendly\" content=\"True\">
    <meta name=\"MobileOptimized\" content=\"320\">
    <link rel=\"icon\" href=\"/admin/assets/images/favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./favicon.ico\"/>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\"
          integrity=\"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,700\" rel=\"stylesheet\">

    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Admin</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext\">

    <!-- Dashboard Core -->
    <link href=\"/admin/assets/css/dashboard.css\" rel=\"stylesheet\"/>
    <!-- c3.js Charts Plugin -->
    <link href=\"/admin/assets/plugins/charts-c3/plugin.css\" rel=\"stylesheet\"/>
    <!-- Google Maps Plugin -->
    <link href=\"/admin/assets/plugins/maps-google/plugin.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"/css/main.css\">

    <style>
        body {
            padding-top: 0 !important;
        }

        .nav-menu a {
            color: #FFF !important;
        }

        #nav-menu-container {
            display: flex;
            align-items: center;
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "


    <div class=\"page\">
        <div class=\"page-main\">
            <div class=\"header py-4\" style=\"background: #ed4638\">
                <div class=\"container\">
                    <div class=\"d-flex justify-content-between\">
                        <div id=\"logo\">
                            <a href=\"index.html\"><img height=\"35px\" src=\"../img/logo.png\" alt=\"\" title=\"\"/></a>
                        </div>
                        <nav id=\"nav-menu-container\">
                            <ul class=\"nav-menu\">
                                <li class=\"menu-active\"><a href=\"/home\">Home</a></li>
                                <li><a href=\"/films/favorite\">Favorites</a></li>
                                <li><a href=\"/films/lists\">My list</a></li>

                                <a href=\"/admin\" class=\"login-panel\"><i class=\"fa fa-user\"></i> Admin Pannel</a>

                                <a> <img id=\"logout\"><a href=\"#\" style=\"color: white;\">logout</a> </a>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class=\"my-3 my-md-5\">
                <div class=\"container\">

                    <div class=\"page-header\">
                        <h1 class=\"page-title\">Edit user</h1>
                    </div>

                    <div class=\"row\">

                        <div class=\"col-lg-6\">
                            <form class=\"card p-3 form-group\" method=\"POST\" action=\"/saveUserAdmin/";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88), "html", null, true);
        echo "\">

                                <div class=\"form-group\">
                                    <label class=\"form-label\">Username</label>
                                    <input type=\"text\" class=\"form-control\" name=\"username\"
                                           value=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "username", [], "any", false, false, false, 93), "html", null, true);
        echo "\">
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"form-label\">Email</label>
                                    <input type=\"text\" class=\"form-control\" name=\"email\" readonly
                                           value=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "email", [], "any", false, false, false, 99), "html", null, true);
        echo "\">
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"form-label\">Password</label>
                                    <input type=\"password\" class=\"form-control\" name=\"password\"
                                           value=\"\">
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"form-label\">Confirm Password</label>
                                    <input type=\"password\" class=\"form-control\" name=\"passwordConfirm\"
                                           value=\"\">
                                    <p class=\"help-block text-danger\">

                                        ";
        // line 114
        if ((isset($context["password_erreur"]) || array_key_exists("password_erreur", $context))) {
            // line 115
            echo "                                            ";
            echo twig_escape_filter($this->env, (isset($context["password_erreur"]) || array_key_exists("password_erreur", $context) ? $context["password_erreur"] : (function () { throw new RuntimeError('Variable "password_erreur" does not exist.', 115, $this->source); })()), "html", null, true);
            echo "
                                        ";
        }
        // line 117
        echo "                                    </p>
                                </div>

                                <label class=\"form-label\">Status</label>
                                <div class=\"selectgroup selectgroup-pills mb-4\">

                                    <label class=\"selectgroup-item\">
                                        <input type=\"radio\" name=\"isBanned\" value=\"isBanned\" ";
        // line 124
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 124, $this->source); })()), "isBanned", [], "any", false, false, false, 124), 1)) {
            echo " checked=\"\" ";
        }
        // line 125
        echo "                                               class=\"selectgroup-input\" >
                                        <span class=\"selectgroup-button\">is Banned</span>
                                    </label>

                                    <label class=\"selectgroup-item\">
                                        <input type=\"radio\" name=\"isBanned\" value=\"isNotBanned\" ";
        // line 130
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "isBanned", [], "any", false, false, false, 130), 0)) {
            echo " checked=\"\" ";
        }
        // line 131
        echo "                                               class=\"selectgroup-input\"  >
                                        <span class=\"selectgroup-button\">is not Banned</span>
                                    </label>

                                </div>

                                <div class=\"form-group\">
                                    <input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Save\">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 152
        echo "

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <script src=\"/admin/assets/js/require.min.js\"></script>


    <script src=\"/admin/assets/js/dashboard.js\"></script>
    <script src=\"/admin/assets/plugins/charts-c3/plugin.js\"></script>
    <script src=\"/admin/assets/plugins/maps-google/plugin.js\"></script>
    <script src=\"/admin/assets/plugins/input-mask/plugin.js\"></script>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/editProfileAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 152,  268 => 151,  240 => 131,  236 => 130,  229 => 125,  225 => 124,  216 => 117,  210 => 115,  208 => 114,  190 => 99,  181 => 93,  173 => 88,  136 => 53,  126 => 52,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta http-equiv=\"Content-Language\" content=\"en\"/>
    <meta name=\"msapplication-TileColor\" content=\"#2d89ef\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
    <meta name=\"HandheldFriendly\" content=\"True\">
    <meta name=\"MobileOptimized\" content=\"320\">
    <link rel=\"icon\" href=\"/admin/assets/images/favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./favicon.ico\"/>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\"
          integrity=\"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,700\" rel=\"stylesheet\">

    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Admin</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext\">

    <!-- Dashboard Core -->
    <link href=\"/admin/assets/css/dashboard.css\" rel=\"stylesheet\"/>
    <!-- c3.js Charts Plugin -->
    <link href=\"/admin/assets/plugins/charts-c3/plugin.css\" rel=\"stylesheet\"/>
    <!-- Google Maps Plugin -->
    <link href=\"/admin/assets/plugins/maps-google/plugin.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"/css/main.css\">

    <style>
        body {
            padding-top: 0 !important;
        }

        .nav-menu a {
            color: #FFF !important;
        }

        #nav-menu-container {
            display: flex;
            align-items: center;
        }
    </style>

{% endblock %}

{% block body %}



    <div class=\"page\">
        <div class=\"page-main\">
            <div class=\"header py-4\" style=\"background: #ed4638\">
                <div class=\"container\">
                    <div class=\"d-flex justify-content-between\">
                        <div id=\"logo\">
                            <a href=\"index.html\"><img height=\"35px\" src=\"../img/logo.png\" alt=\"\" title=\"\"/></a>
                        </div>
                        <nav id=\"nav-menu-container\">
                            <ul class=\"nav-menu\">
                                <li class=\"menu-active\"><a href=\"/home\">Home</a></li>
                                <li><a href=\"/films/favorite\">Favorites</a></li>
                                <li><a href=\"/films/lists\">My list</a></li>

                                <a href=\"/admin\" class=\"login-panel\"><i class=\"fa fa-user\"></i> Admin Pannel</a>

                                <a> <img id=\"logout\"><a href=\"#\" style=\"color: white;\">logout</a> </a>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class=\"my-3 my-md-5\">
                <div class=\"container\">

                    <div class=\"page-header\">
                        <h1 class=\"page-title\">Edit user</h1>
                    </div>

                    <div class=\"row\">

                        <div class=\"col-lg-6\">
                            <form class=\"card p-3 form-group\" method=\"POST\" action=\"/saveUserAdmin/{{ user.id }}\">

                                <div class=\"form-group\">
                                    <label class=\"form-label\">Username</label>
                                    <input type=\"text\" class=\"form-control\" name=\"username\"
                                           value=\"{{user.username}}\">
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"form-label\">Email</label>
                                    <input type=\"text\" class=\"form-control\" name=\"email\" readonly
                                           value=\"{{user.email}}\">
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"form-label\">Password</label>
                                    <input type=\"password\" class=\"form-control\" name=\"password\"
                                           value=\"\">
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"form-label\">Confirm Password</label>
                                    <input type=\"password\" class=\"form-control\" name=\"passwordConfirm\"
                                           value=\"\">
                                    <p class=\"help-block text-danger\">

                                        {% if(password_erreur is defined) %}
                                            {{ password_erreur }}
                                        {% endif %}
                                    </p>
                                </div>

                                <label class=\"form-label\">Status</label>
                                <div class=\"selectgroup selectgroup-pills mb-4\">

                                    <label class=\"selectgroup-item\">
                                        <input type=\"radio\" name=\"isBanned\" value=\"isBanned\" {% if user.isBanned == 1 %} checked=\"\" {% endif %}
                                               class=\"selectgroup-input\" >
                                        <span class=\"selectgroup-button\">is Banned</span>
                                    </label>

                                    <label class=\"selectgroup-item\">
                                        <input type=\"radio\" name=\"isBanned\" value=\"isNotBanned\" {% if user.isBanned == 0 %} checked=\"\" {% endif %}
                                               class=\"selectgroup-input\"  >
                                        <span class=\"selectgroup-button\">is not Banned</span>
                                    </label>

                                </div>

                                <div class=\"form-group\">
                                    <input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Save\">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
{% endblock %}

{% block javascripts %}


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <script src=\"/admin/assets/js/require.min.js\"></script>


    <script src=\"/admin/assets/js/dashboard.js\"></script>
    <script src=\"/admin/assets/plugins/charts-c3/plugin.js\"></script>
    <script src=\"/admin/assets/plugins/maps-google/plugin.js\"></script>
    <script src=\"/admin/assets/plugins/input-mask/plugin.js\"></script>



{% endblock %}", "user/editProfileAdmin.html.twig", "/home/coding/Rendu/symfony_project/templates/user/editProfileAdmin.html.twig");
    }
}
