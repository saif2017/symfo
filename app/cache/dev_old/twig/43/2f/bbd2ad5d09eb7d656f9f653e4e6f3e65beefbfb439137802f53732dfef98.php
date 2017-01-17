<?php

/* EcoBundle:Default:listClasse.html.twig */
class __TwigTemplate_432fbbd2ad5d09eb7d656f9f653e4e6f3e65beefbfb439137802f53732dfef98 extends Twig_Template
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
        echo " <h1> liste Classes </h1>
 <table border=\"1\">
     <tr>
        
         <th>Libelle</th>
         
         ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")));
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 12
            echo "<tr>
<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>
<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "Libelle_classe", array()), "html", null, true);
            echo "</td>

</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo " </table>
 ";
    }

    public function getTemplateName()
    {
        return "EcoBundle:Default:listClasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  58 => 14,  54 => 13,  51 => 12,  47 => 11,  39 => 5,  36 => 4,  11 => 3,);
    }
}
