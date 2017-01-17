<?php

/* EcoBundle:Default:AddInsc.html.twig */
class __TwigTemplate_46d173ac9e53ff9b0c75c5df5c3093dcd2451c77b9fe21f1d4f07b2d12c180ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Gestion Eleve</h1>
<form action=\"\" method=\"post\" >
    
    <table>
        
        <tr>
        
            <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "zz", array()), 'label');
        echo "</td>
            <td>
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "zz", array()), 'errors');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "zz", array()), 'widget');
        echo "
            </td>
        
        
        </tr>   
        
       
        
        
        
          
        
       <tr><td><input type=\"submit\" /><td></tr>
";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
     
   </table>

    </form>

";
    }

    public function getTemplateName()
    {
        return "EcoBundle:Default:AddInsc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  57 => 14,  53 => 13,  48 => 11,  39 => 4,  36 => 3,  11 => 2,);
    }
}
