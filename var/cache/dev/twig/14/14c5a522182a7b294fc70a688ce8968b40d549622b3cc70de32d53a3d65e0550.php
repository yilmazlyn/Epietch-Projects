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

/* user/mostFavoriteAdmin.html.twig */
class __TwigTemplate_b4fbe865daaff83e9e2452845533f56b69fb974ebaef668dce942997054de96b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/mostFavoriteAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/mostFavoriteAdmin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/mostFavoriteAdmin.html.twig", 1);
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
        echo "
    <!-- Mobile Specific Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"img/fav.png\">
    <!-- Author Meta -->
    <meta name=\"author\" content=\"codepixer\">
    <!-- Meta Description -->
    <meta name=\"description\" content=\"\">
    <!-- Meta Keyword -->
    <meta name=\"keywords\" content=\"\">
    <!-- meta character set -->
    <meta charset=\"UTF-8\">
    <!-- Site Title -->
    <title>Book</title>

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700\" rel=\"stylesheet\">
    <!--
    CSS
    ============================================= -->
    <link rel=\"stylesheet\" href=\"../css/linearicons.css\">
    <link rel=\"stylesheet\" href=\"../css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"../css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"../css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"../css/nice-select.css\">
    <link rel=\"stylesheet\" href=\"../css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"../css/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"../css/main.css\">
    <link href=\"/admin/assets/css/dashboard.css\" rel=\"stylesheet\"/>

    <style>
        *{
            text-decoration: none !important;
        }
    </style>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "
    <header id=\"header\" id=\"home\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-between d-flex\">
                <div id=\"logo\">
                    <a href=\"index.html\"><img height=\"35px\" src=\"img/logo.png\" alt=\"\" title=\"\" /></a>
                </div>
                <nav id=\"nav-menu-container\">
                    <ul class=\"nav-menu\">
                        <li class=\"menu-active\"><a href=\"/home\">Home</a></li>
                        ";
        // line 54
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 55
            echo "                            <li><a href=\"/films/favorite/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "html", null, true);
            echo "\">Favorites</a></li>
                            <li><a href=\"/films/lists\">My list</a></li>
                            <li><a href=\"/editProfile/";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
            echo "\">Profile</a></li>
                            <a> <img id=\"logout\"><a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"color: white;\">logout</a></a>

                            ";
            // line 60
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 61
                echo "                                <a href=\"/admin\" class=\"login-panel\"><i class=\"fa fa-user\"></i> Admin Pannel</a>
                            ";
            }
            // line 63
            echo "
                        ";
        } else {
            // line 65
            echo "                            <a> <img id=\"logout\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"color: white;\">login</a></a>
                            <a> <img id=\"logout\"><a href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" style=\"color: white;\">Inscription</a></a>
                        ";
        }
        // line 68
        echo "
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->
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

    <section class=\"course-area section-gap\" id=\"course\">
        <div class=\"container\">
            <div class=\"page-header d-flex justify-content-between\">
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
            <br><br>

            <div class=\"row d-flex justify-content-center\">
                <div class=\"menu-content pb-60 col-lg-9\">
                    <div class=\"title text-center\">
                        <h1 class=\"mb-10\">Most popular</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"active-course-carusel\">
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c1.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  CREATIVE </h4></a>
                            <p>
                                All about art.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c2.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  HOBBY </h4></a>
                            <p>
                                All about hobbies.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c3.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  MUSIC </h4></a>
                            <p>
                                All about music.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"active-course-carusel\">
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c1.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  CREATIVE </h4></a>
                            <p>
                                All about art.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c2.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  HOBBY </h4></a>
                            <p>
                                All about hobbies.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c3.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  MUSIC </h4></a>
                            <p>
                                All about music.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"active-course-carusel\">
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c1.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  CREATIVE </h4></a>
                            <p>
                                All about art.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c2.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  HOBBY </h4></a>
                            <p>
                                All about hobbies.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c3.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  MUSIC </h4></a>
                            <p>
                                All about music.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-5  col-md-6 col-sm-6\">
                    <div class=\"single-footer-widget\">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class=\"\" id=\"mc_embed_signup\">
                            <form target=\"_blank\" novalidate=\"true\"
                                  action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                                  method=\"get\" class=\"form-inline\">
                                <input class=\"form-control\" name=\"EMAIL\" placeholder=\"Enter Email\"
                                       onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Email '\"
                                       required=\"\" type=\"email\">
                                <button class=\"click-btn btn btn-default\"><i class=\"fa fa-long-arrow-right\"
                                                                             aria-hidden=\"true\"></i></button>
                                <div style=\"position: absolute; left: -5000px;\">
                                    <input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\"
                                           type=\"text\">
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

    // line 267
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 268
        echo "
    <script src=\"../js/vendor/jquery-2.2.4.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"../js/vendor/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
    <script src=\"../js/easing.min.js\"></script>
    <script src=\"../js/hoverIntent.js\"></script>
    <script src=\"../js/superfish.min.js\"></script>
    <script src=\"../js/jquery.ajaxchimp.min.js\"></script>
    <script src=\"../js/jquery.magnific-popup.min.js\"></script>
    <script src=\"../js/owl.carousel.min.js\"></script>
    <script src=\"../js/jquery.sticky.js\"></script>
    <script src=\"../js/jquery.nice-select.min.js\"></script>
    <script src=\"../js/parallax.min.js\"></script>
    <script src=\"../js/waypoints.min.js\"></script>
    <script src=\"../js/jquery.counterup.min.js\"></script>
    <script src=\"../js/mail-script.js\"></script>
    <script src=\"../js/main.js\"></script>
    </body>
    </html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/mostFavoriteAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 268,  383 => 267,  176 => 68,  171 => 66,  166 => 65,  162 => 63,  158 => 61,  156 => 60,  151 => 58,  147 => 57,  141 => 55,  139 => 54,  127 => 44,  117 => 43,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}

    <!-- Mobile Specific Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"img/fav.png\">
    <!-- Author Meta -->
    <meta name=\"author\" content=\"codepixer\">
    <!-- Meta Description -->
    <meta name=\"description\" content=\"\">
    <!-- Meta Keyword -->
    <meta name=\"keywords\" content=\"\">
    <!-- meta character set -->
    <meta charset=\"UTF-8\">
    <!-- Site Title -->
    <title>Book</title>

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700\" rel=\"stylesheet\">
    <!--
    CSS
    ============================================= -->
    <link rel=\"stylesheet\" href=\"../css/linearicons.css\">
    <link rel=\"stylesheet\" href=\"../css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"../css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"../css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"../css/nice-select.css\">
    <link rel=\"stylesheet\" href=\"../css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"../css/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"../css/main.css\">
    <link href=\"/admin/assets/css/dashboard.css\" rel=\"stylesheet\"/>

    <style>
        *{
            text-decoration: none !important;
        }
    </style>


{% endblock %}

{% block body %}

    <header id=\"header\" id=\"home\">
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
    </header><!-- #header -->
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

    <section class=\"course-area section-gap\" id=\"course\">
        <div class=\"container\">
            <div class=\"page-header d-flex justify-content-between\">
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
            <br><br>

            <div class=\"row d-flex justify-content-center\">
                <div class=\"menu-content pb-60 col-lg-9\">
                    <div class=\"title text-center\">
                        <h1 class=\"mb-10\">Most popular</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"active-course-carusel\">
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c1.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  CREATIVE </h4></a>
                            <p>
                                All about art.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c2.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  HOBBY </h4></a>
                            <p>
                                All about hobbies.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c3.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  MUSIC </h4></a>
                            <p>
                                All about music.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"active-course-carusel\">
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c1.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  CREATIVE </h4></a>
                            <p>
                                All about art.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c2.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  HOBBY </h4></a>
                            <p>
                                All about hobbies.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c3.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  MUSIC </h4></a>
                            <p>
                                All about music.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"active-course-carusel\">
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c1.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  CREATIVE </h4></a>
                            <p>
                                All about art.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c2.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  HOBBY </h4></a>
                            <p>
                                All about hobbies.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-course item\">
                        <img class=\"img-fluid\" src=\"../img/c3.jpg\" alt=\"\">
                        <div class=\"details\">
                            <a href=\"#\"><h4>  MUSIC </h4></a>
                            <p>
                                All about music.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-5  col-md-6 col-sm-6\">
                    <div class=\"single-footer-widget\">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class=\"\" id=\"mc_embed_signup\">
                            <form target=\"_blank\" novalidate=\"true\"
                                  action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                                  method=\"get\" class=\"form-inline\">
                                <input class=\"form-control\" name=\"EMAIL\" placeholder=\"Enter Email\"
                                       onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Email '\"
                                       required=\"\" type=\"email\">
                                <button class=\"click-btn btn btn-default\"><i class=\"fa fa-long-arrow-right\"
                                                                             aria-hidden=\"true\"></i></button>
                                <div style=\"position: absolute; left: -5000px;\">
                                    <input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\"
                                           type=\"text\">
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

    <script src=\"../js/vendor/jquery-2.2.4.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"../js/vendor/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
    <script src=\"../js/easing.min.js\"></script>
    <script src=\"../js/hoverIntent.js\"></script>
    <script src=\"../js/superfish.min.js\"></script>
    <script src=\"../js/jquery.ajaxchimp.min.js\"></script>
    <script src=\"../js/jquery.magnific-popup.min.js\"></script>
    <script src=\"../js/owl.carousel.min.js\"></script>
    <script src=\"../js/jquery.sticky.js\"></script>
    <script src=\"../js/jquery.nice-select.min.js\"></script>
    <script src=\"../js/parallax.min.js\"></script>
    <script src=\"../js/waypoints.min.js\"></script>
    <script src=\"../js/jquery.counterup.min.js\"></script>
    <script src=\"../js/mail-script.js\"></script>
    <script src=\"../js/main.js\"></script>
    </body>
    </html>

{% endblock %}
", "user/mostFavoriteAdmin.html.twig", "/home/coding/Rendu/symfony_project/templates/user/mostFavoriteAdmin.html.twig");
    }
}
