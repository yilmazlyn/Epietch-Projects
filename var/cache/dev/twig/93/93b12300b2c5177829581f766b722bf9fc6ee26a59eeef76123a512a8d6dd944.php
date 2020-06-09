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

/* home/film.html.twig */
class __TwigTemplate_2e7fae2d39b589217c4c6d755674bc1c44af4bd974723773e92e092a29dbfcd2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/film.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/film.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/film.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<html lang=\"zxx\" class=\"no-js\">
<head>
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
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\" integrity=\"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay\" crossorigin=\"anonymous\">
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

    <style>
        .toggleDiv{
            height: auto;
            opacity: inherit;
        }
        .toggleDivClose{
            height: 0;
            opacity: 0;
        }
    </style>
</head>
<body>

<!-- Page Preloder -->
<div id=\"preloder\">
    <div class=\"loader\"></div>
</div>

<header id=\"header\" id=\"home\">
    <div class=\"container\">
        <div class=\"row align-items-center justify-content-between d-flex\">
            <div id=\"logo\">
                <a href=\"index.html\"><img height=\"35px\" src=\"/img/logo.png\" alt=\"\" title=\"\"/></a>
            </div>
            <nav id=\"nav-menu-container\">
                <ul class=\"nav-menu\">
                    <li class=\"menu-active\"><a href=\"/home\">Home</a></li>
                    ";
        // line 65
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 66
            echo "                        <li><a href=\"/films/favorite/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
            echo "\">Favorites</a></li>
                        <li><a href=\"/films/lists\">My list</a></li>
                        <li><a href=\"/editProfile/";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\">Profile</a></li>
                        <a> <img id=\"logout\"><a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"color: white;\">logout</a></a>

                        ";
            // line 71
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 72
                echo "                            <a href=\"/admin\" class=\"login-panel\"><i class=\"fa fa-user\"></i> Admin Pannel</a>
                        ";
            }
            // line 74
            echo "
                    ";
        } else {
            // line 76
            echo "                        <a> <img id=\"logout\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"color: white;\">login</a></a>
                        <a> <img id=\"logout\"><a href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"
                                                style=\"color: white;\">Inscription</a></a>
                    ";
        }
        // line 80
        echo "
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->

<section class=\"section-gap info-area\" id=\"about\">
    <input type=\"hidden\" id=\"idF\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["idF"]) || array_key_exists("idF", $context) ? $context["idF"] : (function () { throw new RuntimeError('Variable "idF" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "\">
    <input type=\"hidden\" id=\"idU\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "id", [], "any", false, false, false, 89), "html", null, true);
        echo "\">
    <div class=\"container\">
        <div class=\"single-info row mt-40 align-items-center\">
            <div class=\"col-lg-6 col-md-12 text-center no-padding info-left\">
                <div class=\"info-thumb\">


                    <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 96, $this->source); })())), "html", null, true);
        echo "\" class=\"img-fluid info-img\" alt=\"\">
                </div>
            </div>
            <div class=\"col-lg-6 col-md-12 no-padding info-rigth\">
                <div class=\"info-content\">
                    ";
        // line 102
        echo "                    <div class=\"d-flex justify-content-between\">
                        <h2 class=\"pb-30\">";
        // line 103
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "title", [], "any", true, true, false, 103)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "title", [], "any", false, false, false, 103), "Name of the film")) : ("Name of the film")), "html", null, true);
        echo " </h2>
                        ";
        // line 104
        if (0 === twig_compare((isset($context["favorite"]) || array_key_exists("favorite", $context) ? $context["favorite"] : (function () { throw new RuntimeError('Variable "favorite" does not exist.', 104, $this->source); })()), "true")) {
            // line 105
            echo "                        <i data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105), "html", null, true);
            echo "\" style=\"font-size: 24px\" class=\"text-warning fas fa-star __favorite\"></i><!--étoile pour favoris-->
                        ";
        } else {
            // line 107
            echo "                        <i data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107), "html", null, true);
            echo "\" style=\"font-size: 24px\" class=\"text-warning far fa-star __favorite\"></i>
                        ";
        }
        // line 109
        echo "                    </div>

                    <div ><h4 style=\"display: inline-block \">Actors :  </h4>
                        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actors"]) || array_key_exists("actors", $context) ? $context["actors"] : (function () { throw new RuntimeError('Variable "actors" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 113
            echo "                            ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["actor"], "name", [], "any", true, true, false, 113)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["actor"], "name", [], "any", false, false, false, 113), "actor_name")) : ("actor_name")), "html", null, true);
            echo " ,
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                        <br>
                    </div>
                    <div ><h4 style=\"display: inline-block \">Release Date :  </h4> ";
        // line 117
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "release_date", [], "any", true, true, false, 117)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "release_date", [], "any", false, false, false, 117), "Release Date")) : ("Release Date")), "html", null, true);
        echo "</div>
                    <div ><h4 style=\"display: inline-block \">Genres :  </h4>
                        ";
        // line 119
        if (twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "genres", [], "any", true, true, false, 119)) {
            // line 120
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 120, $this->source); })()), "genres", [], "any", false, false, false, 120));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 121
                echo "                                ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["genre"], "name", [], "any", true, true, false, 121)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["genre"], "name", [], "any", false, false, false, 121), "Genre_n")) : ("Genre_n")), "html", null, true);
                echo " ,
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                        ";
        }
        // line 124
        echo "                    </div>
                    <div ><h4 style=\"display: inline-block \">Popularity :  </h4> ";
        // line 125
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "popularity", [], "any", true, true, false, 125)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "popularity", [], "any", false, false, false, 125), "Popularity")) : ("Popularity")), "html", null, true);
        echo "</div>
                    <h4>Description:</h4>
                    <p>
                        ";
        // line 128
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "overview", [], "any", true, true, false, 128)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "overview", [], "any", false, false, false, 128), "Resume of the film")) : ("Resume of the film")), "html", null, true);
        echo "
                    </p>

                    <lable>Add to my list</lable>
                    <select name=\"list\" id=\"listName\">
                        <option selected=\"\" disabled=\"disabled\">Choose Among List</option>
                        ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lists"]) || array_key_exists("lists", $context) ? $context["lists"] : (function () { throw new RuntimeError('Variable "lists" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 135
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 135), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 135), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "

                    </select>

                    <br><br>

                    <div class=\"form-group\">
                        <i id=\"plusIcon\" style=\"font-size: 20px\" class=\"fas fa-plus\"> </i>
                        <span>Create a new list</span>
                    </div>

                    <div id=\"createAList\" class=\"form-group toggleDivClose\" >
                        <label class=\"form-label\">Name of the list</label>
                        <input type=\"text\" class=\"form-control mb-5 password\" name=\"NewListName\" id=\"NewListName\"
                               value=\"\">
                        <label class=\"form-label\">Description</label>
                        <input type=\"testarea\" class=\"form-control mb-5 password\" name=\"NewListDesc\" id=\"NewListDesc\"
                               value=\"\">
                        <p class=\"help-block text-danger passwordError\">
                        </p>
                        <button  class=\"btn btn-success createListBtn __addList\" >Confirm</button>
                        <button class=\"btn btn-warning\"><a href=\"/home\">Cancel</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
<script src=\"../js/global.js\"></script>
</body>
</html>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/film.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 137,  308 => 135,  304 => 134,  295 => 128,  289 => 125,  286 => 124,  283 => 123,  274 => 121,  269 => 120,  267 => 119,  262 => 117,  258 => 115,  249 => 113,  245 => 112,  240 => 109,  234 => 107,  228 => 105,  226 => 104,  222 => 103,  219 => 102,  211 => 96,  201 => 89,  197 => 88,  187 => 80,  181 => 77,  176 => 76,  172 => 74,  168 => 72,  166 => 71,  161 => 69,  157 => 68,  151 => 66,  149 => 65,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}

<html lang=\"zxx\" class=\"no-js\">
<head>
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
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\" integrity=\"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay\" crossorigin=\"anonymous\">
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

    <style>
        .toggleDiv{
            height: auto;
            opacity: inherit;
        }
        .toggleDivClose{
            height: 0;
            opacity: 0;
        }
    </style>
</head>
<body>

<!-- Page Preloder -->
<div id=\"preloder\">
    <div class=\"loader\"></div>
</div>

<header id=\"header\" id=\"home\">
    <div class=\"container\">
        <div class=\"row align-items-center justify-content-between d-flex\">
            <div id=\"logo\">
                <a href=\"index.html\"><img height=\"35px\" src=\"/img/logo.png\" alt=\"\" title=\"\"/></a>
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
                        <a> <img id=\"logout\"><a href=\"{{ path('app_register') }}\"
                                                style=\"color: white;\">Inscription</a></a>
                    {% endif %}

                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->

<section class=\"section-gap info-area\" id=\"about\">
    <input type=\"hidden\" id=\"idF\" value=\"{{ idF }}\">
    <input type=\"hidden\" id=\"idU\" value=\"{{ app.user.id }}\">
    <div class=\"container\">
        <div class=\"single-info row mt-40 align-items-center\">
            <div class=\"col-lg-6 col-md-12 text-center no-padding info-left\">
                <div class=\"info-thumb\">


                    <img src=\"{{ asset (src) }}\" class=\"img-fluid info-img\" alt=\"\">
                </div>
            </div>
            <div class=\"col-lg-6 col-md-12 no-padding info-rigth\">
                <div class=\"info-content\">
                    {#{ dump (movie) }#}
                    <div class=\"d-flex justify-content-between\">
                        <h2 class=\"pb-30\">{{ movie.title|default('Name of the film') }} </h2>
                        {% if favorite == 'true' %}
                        <i data-id=\"{{ movie.id }}\" style=\"font-size: 24px\" class=\"text-warning fas fa-star __favorite\"></i><!--étoile pour favoris-->
                        {% else %}
                        <i data-id=\"{{ movie.id }}\" style=\"font-size: 24px\" class=\"text-warning far fa-star __favorite\"></i>
                        {% endif %}
                    </div>

                    <div ><h4 style=\"display: inline-block \">Actors :  </h4>
                        {% for actor in actors %}
                            {{ actor.name|default('actor_name') }} ,
                        {% endfor %}
                        <br>
                    </div>
                    <div ><h4 style=\"display: inline-block \">Release Date :  </h4> {{ movie.release_date|default('Release Date') }}</div>
                    <div ><h4 style=\"display: inline-block \">Genres :  </h4>
                        {% if movie.genres is defined %}
                            {% for genre in movie.genres %}
                                {{ genre.name|default('Genre_n') }} ,
                            {% endfor %}
                        {% endif %}
                    </div>
                    <div ><h4 style=\"display: inline-block \">Popularity :  </h4> {{ movie.popularity|default('Popularity') }}</div>
                    <h4>Description:</h4>
                    <p>
                        {{ movie.overview|default('Resume of the film') }}
                    </p>

                    <lable>Add to my list</lable>
                    <select name=\"list\" id=\"listName\">
                        <option selected=\"\" disabled=\"disabled\">Choose Among List</option>
                        {% for list in lists %}
                            <option value=\"{{ list.id }}\">{{ list.name }}</option>
                        {% endfor %}


                    </select>

                    <br><br>

                    <div class=\"form-group\">
                        <i id=\"plusIcon\" style=\"font-size: 20px\" class=\"fas fa-plus\"> </i>
                        <span>Create a new list</span>
                    </div>

                    <div id=\"createAList\" class=\"form-group toggleDivClose\" >
                        <label class=\"form-label\">Name of the list</label>
                        <input type=\"text\" class=\"form-control mb-5 password\" name=\"NewListName\" id=\"NewListName\"
                               value=\"\">
                        <label class=\"form-label\">Description</label>
                        <input type=\"testarea\" class=\"form-control mb-5 password\" name=\"NewListDesc\" id=\"NewListDesc\"
                               value=\"\">
                        <p class=\"help-block text-danger passwordError\">
                        </p>
                        <button  class=\"btn btn-success createListBtn __addList\" >Confirm</button>
                        <button class=\"btn btn-warning\"><a href=\"/home\">Cancel</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
<script src=\"../js/global.js\"></script>
</body>
</html>


{% endblock %}
", "home/film.html.twig", "/home/coding/Rendu/symfony_project/templates/home/film.html.twig");
    }
}
