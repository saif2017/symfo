<?php

/* EcoBundle:Default:EditEleve.html.twig */
class __TwigTemplate_ffb0b90dcb0a25f219dc75cca5867a5ca971a229361c11f5c83f394f3820f947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(5);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<h1>Gestion Eleve</h1>
<form action=\"\" method=\"post\" >
    
    <table>
        
        <tr>
        
            <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'errors');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        
        <tr>
        
            <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'errors');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        <tr>
        
            <td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'errors');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        <tr>
        
            <td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel_tuteur", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel_tuteur", array()), 'errors');
        echo "
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel_tuteur", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        
        <tr>
        
            <td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse_tuteur", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse_tuteur", array()), 'errors');
        echo "
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse_tuteur", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        
        <tr>
        
            <td>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "ville", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "ville", array()), 'errors');
        echo "
                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "ville", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        <tr>
        
            <td>";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom_tuteur", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom_tuteur", array()), 'errors');
        echo "
                ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom_tuteur", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        <tr>
        
            <td>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "email_tuteur", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "email_tuteur", array()), 'errors');
        echo "
                ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "email_tuteur", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
        
        
         <tr>
        
            <td>";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "profession_tuteur", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "profession_tuteur", array()), 'errors');
        echo "
                ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "profession_tuteur", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
        
        
        
        
          
        
       <tr><td><input type=\"submit\" /><td></tr>
";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
     
   </table>

    </form>





 <h1> liste Eleves </h1>
 <table border=\"1\">
     <tr>
         <th>Id Eleves</th>
         
        
     </tr>
         ";
        // line 132
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ele"]) ? $context["ele"] : $this->getContext($context, "ele")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 133
            echo "<tr>
<td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>

<td><a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_etud", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-sm btn-danger\">Supprimer</a></td>
<td><a href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_etud", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-sm btn-primary \">Modifier</a></td>

</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 141
            echo "<tr><td>Aucune Eleve n'a trouvée</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo " </table>
 ";
    }

    public function getTemplateName()
    {
        return "EcoBundle:Default:EditEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 143,  277 => 141,  268 => 137,  264 => 136,  259 => 134,  256 => 133,  251 => 132,  231 => 115,  216 => 103,  212 => 102,  207 => 100,  195 => 91,  191 => 90,  186 => 88,  176 => 81,  172 => 80,  167 => 78,  157 => 71,  153 => 70,  148 => 68,  137 => 60,  133 => 59,  128 => 57,  117 => 49,  113 => 48,  108 => 46,  98 => 39,  94 => 38,  89 => 36,  79 => 29,  75 => 28,  70 => 26,  59 => 18,  55 => 17,  50 => 15,  39 => 7,  36 => 6,  11 => 5,);
    }
}
