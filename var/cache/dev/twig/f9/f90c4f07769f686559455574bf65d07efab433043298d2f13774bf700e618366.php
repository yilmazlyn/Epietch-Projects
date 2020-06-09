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

/* user/usersListForAdmin.html.twig */
class __TwigTemplate_be8d894e55b002421c9ec6d42e5c6548899278e90db15db338149bbbd0837bb7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/usersListForAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/usersListForAdmin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/usersListForAdmin.html.twig", 1);
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
        body{
            padding-top: 0!important;
        }
        .nav-menu a{
            color: #FFF!important;
        }
        #nav-menu-container{
            display: flex;
            align-items: center;
        }
    </style>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "
    <div class=\"page\">
        <div class=\"page-main\">
            <div class=\"header py-4\" style=\"background: #ed4638\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-between d-flex\">
                        <div id=\"logo\">
                            <a href=\"index.html\"><img height=\"35px\" src=\"img/logo.png\" alt=\"\" title=\"\" /></a>
                        </div>
                        <nav id=\"nav-menu-container\">
                            <ul class=\"nav-menu\">
                                <li class=\"menu-active\"><a href=\"/home\">Home</a></li>
                                ";
        // line 64
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 65
            echo "                                    <li><a href=\"/films/favorite/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\">Favorites</a></li>
                                    <li><a href=\"/films/lists\">My list</a></li>
                                    <li><a href=\"/editProfile/";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\">Profile</a></li>
                                    <a> <img id=\"logout\"><a href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"color: white;\">logout</a></a>

                                    ";
            // line 70
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 71
                echo "                                        <a href=\"/admin\" class=\"login-panel\"><i class=\"fa fa-user\"></i> Admin Pannel</a>
                                    ";
            }
            // line 73
            echo "
                                ";
        } else {
            // line 75
            echo "                                    <a> <img id=\"logout\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"color: white;\">login</a></a>
                                    <a> <img id=\"logout\"><a href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" style=\"color: white;\">Inscription</a></a>
                                ";
        }
        // line 78
        echo "
                            </ul>
                        </nav><!-- #nav-menu-container -->
                    </div>
                </div>
            </div>
            <div class=\"header collapse d-lg-flex p-0\" id=\"headerMenuCollapse\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg order-lg-first\">
                            <ul class=\"nav nav-tabs border-0 flex-column flex-lg-row\">
                                <li class=\"nav-item\">
                                    <a href=\"/usersAdmin\" class=\"nav-link \">Users</a>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"admin/mostFavorite\"
                                       class=\"nav-link \">Most popular Films</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"my-3 my-md-5\">
                <div class=\"container\">

                    <div class=\"page-header d-flex justify-content-between\">
                        <h1 class=\"page-title\">Users</h1>

                        <div class=\"col-lg-3 ml-auto\">
                            <form class=\"input-icon my-3 my-lg-0\">
                                <input type=\"search\" class=\"form-control header-search\" placeholder=\"Search&hellip;\"
                                       tabindex=\"1\">
                                <div class=\"input-icon-addon\">
                                    <i class=\"fe fe-search\"></i>
                                </div>
                            </form>
                        </div>

                    </div>
                    ";
        // line 123
        echo "                    <div>
                        <div class=\"global_margin\">
                        </div>

                        <table class=\"table text-center\">
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Role</td>
                                <td>Action</td>
                            </tr>

                            ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 136, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 137
            echo "                                <tr>
                                    <td>";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 138), "html", null, true);
            echo "</td>
                                    <td>";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 139), "html", null, true);
            echo "</td>
                                    <td>";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 140), "html", null, true);
            echo "</td>
                                    <td>";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 141), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"/editProfileAdmin/";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 143), "html", null, true);
            echo "\" class=\"btn btn-sm btn-orange\">Edit</a>
                                        <span data-id=\"";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 144), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger cursor __deleteUser\">Delete</span>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- start footer Area -->
    <footer class=\"footer-area section-gap\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 col-md-6 col-sm-6\">
                    <div class=\"single-footer-widget\">
                        <h6>About Us</h6>
                        <p>
                            Top readers here.
                        </p>
                        <p class=\"footer-text\">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-5  col-md-6 col-sm-6\">
                    <div class=\"single-footer-widget\">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class=\"\" id=\"mc_embed_signup\">
                            <form target=\"_blank\" novalidate=\"true\" action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\" method=\"get\" class=\"form-inline\">
                                <input class=\"form-control\" name=\"EMAIL\" placeholder=\"Enter Email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Email '\" required=\"\" type=\"email\">
                                <button class=\"click-btn btn btn-default\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></button>
                                <div style=\"position: absolute; left: -5000px;\">
                                    <input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\" type=\"text\">
                                </div>

                                <div class=\"info\"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 col-sm-6 social-widget\">
                    <div class=\"single-footer-widget\">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class=\"footer-social d-flex align-items-center\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-behance\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 210
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 211
        echo "

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"/admin/assets/js/sweetalert.js\"></script>

    <script src=\"/admin/assets/js/require.min.js\"></script>


    <script src=\"/admin/assets/js/dashboard.js\"></script>
    <script src=\"/admin/assets/plugins/charts-c3/plugin.js\"></script>
    <script src=\"/admin/assets/plugins/maps-google/plugin.js\"></script>
    <script src=\"/admin/assets/plugins/input-mask/plugin.js\"></script>

    <script src=\"/admin/assets/js/admin.js\"></script>

    </body>
    </html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/usersListForAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 211,  352 => 210,  282 => 148,  272 => 144,  268 => 143,  263 => 141,  259 => 140,  255 => 139,  251 => 138,  248 => 137,  244 => 136,  229 => 123,  185 => 78,  180 => 76,  175 => 75,  171 => 73,  167 => 71,  165 => 70,  160 => 68,  156 => 67,  150 => 65,  148 => 64,  134 => 52,  124 => 51,  70 => 4,  60 => 3,  37 => 1,);
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
        body{
            padding-top: 0!important;
        }
        .nav-menu a{
            color: #FFF!important;
        }
        #nav-menu-container{
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
                    <div class=\"row align-items-center justify-content-between d-flex\">
                        <div id=\"logo\">
                            <a href=\"index.html\"><img height=\"35px\" src=\"img/logo.png\" alt=\"\" title=\"\" /></a>
                        </div>
                        <nav id=\"nav-menu-container\">
                            <ul class=\"nav-menu\">
                                <li class=\"menu-active\"><a href=\"/home\">Home</a></li>
                                {% if is_granted('ROLE_USER') %}
                                    <li><a href=\"/films/favorite/{{ app.user.id }}\">Favorites</a></li>
                                    <li><a href=\"/films/lists\">My list</a></li>
                                    <li><a href=\"/editProfile/{{ app.user.id }}\">Profile</a></li>
                                    <a> <img id=\"logout\"><a href=\"{{ path('app_logout') }}\" style=\"color: white;\">logout</a></a>

                                    {% if is_granted('ROLE_ADMIN') %}
                                        <a href=\"/admin\" class=\"login-panel\"><i class=\"fa fa-user\"></i> Admin Pannel</a>
                                    {% endif %}

                                {% else %}
                                    <a> <img id=\"logout\"><a href=\"{{ path('app_login') }}\" style=\"color: white;\">login</a></a>
                                    <a> <img id=\"logout\"><a href=\"{{ path('app_register') }}\" style=\"color: white;\">Inscription</a></a>
                                {% endif %}

                            </ul>
                        </nav><!-- #nav-menu-container -->
                    </div>
                </div>
            </div>
            <div class=\"header collapse d-lg-flex p-0\" id=\"headerMenuCollapse\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg order-lg-first\">
                            <ul class=\"nav nav-tabs border-0 flex-column flex-lg-row\">
                                <li class=\"nav-item\">
                                    <a href=\"/usersAdmin\" class=\"nav-link \">Users</a>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"admin/mostFavorite\"
                                       class=\"nav-link \">Most popular Films</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"my-3 my-md-5\">
                <div class=\"container\">

                    <div class=\"page-header d-flex justify-content-between\">
                        <h1 class=\"page-title\">Users</h1>

                        <div class=\"col-lg-3 ml-auto\">
                            <form class=\"input-icon my-3 my-lg-0\">
                                <input type=\"search\" class=\"form-control header-search\" placeholder=\"Search&hellip;\"
                                       tabindex=\"1\">
                                <div class=\"input-icon-addon\">
                                    <i class=\"fe fe-search\"></i>
                                </div>
                            </form>
                        </div>

                    </div>
                    {#  {% if isAdmin == true %}
                          <button>Test</button>
                      {% endif %}#}
                    <div>
                        <div class=\"global_margin\">
                        </div>

                        <table class=\"table text-center\">
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Role</td>
                                <td>Action</td>
                            </tr>

                            {% for user in users %}
                                <tr>
                                    <td>{{user.id}}</td>
                                    <td>{{user.username}}</td>
                                    <td>{{user.email}}</td>
                                    <td>{{user.role}}</td>
                                    <td>
                                        <a href=\"/editProfileAdmin/{{user.id}}\" class=\"btn btn-sm btn-orange\">Edit</a>
                                        <span data-id=\"{{user.id}}\" class=\"btn btn-sm btn-danger cursor __deleteUser\">Delete</span>
                                    </td>
                                </tr>
                            {% endfor %}
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- start footer Area -->
    <footer class=\"footer-area section-gap\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 col-md-6 col-sm-6\">
                    <div class=\"single-footer-widget\">
                        <h6>About Us</h6>
                        <p>
                            Top readers here.
                        </p>
                        <p class=\"footer-text\">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-5  col-md-6 col-sm-6\">
                    <div class=\"single-footer-widget\">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class=\"\" id=\"mc_embed_signup\">
                            <form target=\"_blank\" novalidate=\"true\" action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\" method=\"get\" class=\"form-inline\">
                                <input class=\"form-control\" name=\"EMAIL\" placeholder=\"Enter Email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Email '\" required=\"\" type=\"email\">
                                <button class=\"click-btn btn btn-default\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></button>
                                <div style=\"position: absolute; left: -5000px;\">
                                    <input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\" type=\"text\">
                                </div>

                                <div class=\"info\"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 col-sm-6 social-widget\">
                    <div class=\"single-footer-widget\">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class=\"footer-social d-flex align-items-center\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-behance\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

{% endblock %}

{% block javascripts %}


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"/admin/assets/js/sweetalert.js\"></script>

    <script src=\"/admin/assets/js/require.min.js\"></script>


    <script src=\"/admin/assets/js/dashboard.js\"></script>
    <script src=\"/admin/assets/plugins/charts-c3/plugin.js\"></script>
    <script src=\"/admin/assets/plugins/maps-google/plugin.js\"></script>
    <script src=\"/admin/assets/plugins/input-mask/plugin.js\"></script>

    <script src=\"/admin/assets/js/admin.js\"></script>

    </body>
    </html>

{% endblock %}", "user/usersListForAdmin.html.twig", "/home/coding/Rendu/symfony_project/templates/user/usersListForAdmin.html.twig");
    }
}
