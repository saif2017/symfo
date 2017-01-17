<?php

/* EcoBundle:Default:EditReglementEtudiant.html.twig */
class __TwigTemplate_80c960774906e2cf674e6950095ef521811edfd1b3a4dc5865c476ec616f9dcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 7
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(7);

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

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<h1>Gestion Reglement Etudiant</h1>
<form action=\"\" method=\"post\" >
    
    <table>
        
       
        
          <tr>
        
            <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "dateReg", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "dateReg", array()), 'errors');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "dateReg", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
         <tr>
        
            <td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Matricule", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Matricule", array()), 'errors');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Matricule", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
         <tr>
        
            <td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Annee", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Annee", array()), 'errors');
        echo "
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Annee", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
         <tr>
        
            <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "mois", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "mois", array()), 'errors');
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "mois", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
         <tr>
        
            <td>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "trimestre", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "trimestre", array()), 'errors');
        echo "
                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "trimestre", array()), 'widget');
        echo "
            </td>
        
        
        </tr>  
        
        
        
        
          
        
       <tr><td><input type=\"submit\" /><td></tr>
";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
     
   </table>

    </form>
<h1> Liste Reglement </h1>
 <table border=\"1\">
     <tr>
         <th>Id </th>
         
        
     </tr>
         ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 87
            echo "<tr>
<td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>

<td><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_regE", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-sm btn-danger \"> Supprimer</a></td>
<td><a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_regE", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-sm btn-primary \">Modifie</a></td>

</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 95
            echo "<tr><td>Aucun Reglement n'a trouvée</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo " </table>
";
    }

    public function getTemplateName()
    {
        return "EcoBundle:Default:EditReglementEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 97,  193 => 95,  184 => 91,  180 => 90,  175 => 88,  172 => 87,  167 => 86,  152 => 74,  137 => 62,  133 => 61,  128 => 59,  118 => 52,  114 => 51,  109 => 49,  99 => 42,  95 => 41,  90 => 39,  80 => 32,  76 => 31,  71 => 29,  61 => 22,  57 => 21,  52 => 19,  39 => 9,  36 => 8,  11 => 7,);
    }
}
