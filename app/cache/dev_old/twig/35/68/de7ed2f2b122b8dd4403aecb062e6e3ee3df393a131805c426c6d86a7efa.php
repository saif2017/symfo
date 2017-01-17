<?php

/* EcoBundle:Default:AddInscription.html.twig */
class __TwigTemplate_3568de7ed2f2b122b8dd4403aecb062e6e3ee3df393a131805c426c6d86a7efa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(4);

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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Gestion Inscription</h1>
<form action=\"\" method=\"post\" >
    
    <table>
        <tr>
        
            <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Date", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Date", array()), 'errors');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Date", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
      
        
        <tr>
        
            <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Id_etudiant", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Id_etudiant", array()), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Id_etudiant", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        <tr>
        
            <td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Id_classe", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Id_classe", array()), 'errors');
        echo "
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Id_classe", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        <tr>
        
            <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Observation", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Observation", array()), 'errors');
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Observation", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        
        <tr>
        
            <td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Reglement", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Reglement", array()), 'errors');
        echo "
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Reglement", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        
        <tr>
        
            <td>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Montant", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Montant", array()), 'errors');
        echo "
                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Montant", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        <tr>
        
            <td>";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "num_Piece", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "num_Piece", array()), 'errors');
        echo "
                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "num_Piece", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        <tr>
        
            <td>";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Echeance", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Echeance", array()), 'errors');
        echo "
                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Echeance", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
        
        
         
        
        
        
        
          
        
       <tr><td><input type=\"submit\" /><td></tr>
";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
     
   </table>

    </form>
<h1> Liste Inscription </h1>
 <table border=\"1\">
     <tr>
         <th>Id Inscription</th>
         
        
     </tr>
         ";
        // line 116
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 117
            echo "<tr>
<td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>
<td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "Date", array()), "html", null, true);
            echo "</td>

<td><a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_insc", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"> Supprimer</a></td>
<td><a href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_insc", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\">Modifie</a></td>

</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 126
            echo "<tr><td>Aucune inscription n'a trouvée</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo " </table>
";
    }

    public function getTemplateName()
    {
        return "EcoBundle:Default:AddInscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 128,  256 => 126,  247 => 122,  243 => 121,  238 => 119,  234 => 118,  231 => 117,  226 => 116,  211 => 104,  193 => 89,  189 => 88,  184 => 86,  174 => 79,  170 => 78,  165 => 76,  155 => 69,  151 => 68,  146 => 66,  135 => 58,  131 => 57,  126 => 55,  115 => 47,  111 => 46,  106 => 44,  96 => 37,  92 => 36,  87 => 34,  77 => 27,  73 => 26,  68 => 24,  56 => 15,  52 => 14,  47 => 12,  39 => 6,  36 => 5,  11 => 4,);
    }
}
