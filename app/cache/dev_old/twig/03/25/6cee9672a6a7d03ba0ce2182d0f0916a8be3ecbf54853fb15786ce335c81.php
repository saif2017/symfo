<?php

/* EcoBundle:Default:AddEleve.html.twig */
class __TwigTemplate_03256cee9672a6a7d03ba0ce2182d0f0916a8be3ecbf54853fb15786ce335c81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<h1>Gestion Eleve</h1>
<form action=\"\" method=\"post\" >
    
    <table>
        
        <tr>
        
            <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'errors');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        
        <tr>
        
            <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        <tr>
        
            <td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'errors');
        echo "
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        <tr>
        
            <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel_tuteur", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel_tuteur", array()), 'errors');
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel_tuteur", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        
        <tr>
        
            <td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse_tuteur", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse_tuteur", array()), 'errors');
        echo "
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse_tuteur", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        
        <tr>
        
            <td>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "ville", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "ville", array()), 'errors');
        echo "
                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "ville", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        <tr>
        
            <td>";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom_tuteur", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom_tuteur", array()), 'errors');
        echo "
                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom_tuteur", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        <tr>
        
            <td>";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "email_tuteur", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "email_tuteur", array()), 'errors');
        echo "
                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "email_tuteur", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
        
        
         <tr>
        
            <td>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "profession_tuteur", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "profession_tuteur", array()), 'errors');
        echo "
                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "profession_tuteur", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
         
        
        
         
        
        

        
        
        
        
          
        
       <tr><td><input type=\"submit\" /><td></tr>
";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
     
   </table>

    </form>
<h1> Liste Etudiant </h1>
 <table border=\"1\">
     <tr>
         <th>Id Etudiant</th>
         
        
     </tr>
         ";
        // line 132
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")));
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
            echo "\"class=\"btn btn-sm btn-danger \"> Supprimer</a></td>
<td><a href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_etud", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-sm btn-primary \">Modifie</a></td>

</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 141
            echo "<tr><td>Aucun client n'a trouvée</td></tr>
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
        return "EcoBundle:Default:AddEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 143,  279 => 141,  270 => 137,  266 => 136,  261 => 134,  258 => 133,  253 => 132,  238 => 120,  216 => 101,  212 => 100,  207 => 98,  195 => 89,  191 => 88,  186 => 86,  176 => 79,  172 => 78,  167 => 76,  157 => 69,  153 => 68,  148 => 66,  137 => 58,  133 => 57,  128 => 55,  117 => 47,  113 => 46,  108 => 44,  98 => 37,  94 => 36,  89 => 34,  79 => 27,  75 => 26,  70 => 24,  59 => 16,  55 => 15,  50 => 13,  39 => 5,  36 => 4,  11 => 3,);
    }
}
