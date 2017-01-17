<?php
namespace Eco\EcoBundle\Controller;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/index", name="index")
     * @Template()
     */
    public function indexAction()
    {
                $client = new \Eco\EcoBundle\Entity\eleve();
        $f = $this->createFormBuilder($client)

->add('nom','text',array('label' => 'Nom '))
->add('prenom','text',array('label' => 'Prenom : '))
->add('genre','text',array('label' => 'Genre : '))
->add('nom_tuteur','text',array('label' => 'Nom Tuteur : '))
->add('adresse_tuteur','text',array('label' => 'Adresse Tuteur : '))
->add('tel_tuteur','text',array('label' => 'Téléphonne Tuteur :  '))
->add('email_tuteur','text',array('label' => 'E_mail : '))
->add('ville','text',array('label' => 'Ville '))
->add('profession_tuteur','text',array('label' => 'profession_tuteur '))
->add('file')
->getForm();
          $request = $this->container->get('request');
         $f->handleRequest($request)   ;
               if ($f->isValid())
               {
                       

 $em = $this->container->get('doctrine')->getEntityManager();
 $em->persist($c);
 $em->flush();
               }
               
               
$clients = $this->getDoctrine()
               ->getRepository("Eco\EcoBundle\Entity\\eleve")
                ->findAll();
 return array('f'=>$f->createView(),'res'=>$clients);
        
        

    }
    
    /**
     * @Route("/AddEleve/",name="addEleve")
     * @Template()
     */
    public function AddEleveAction()
    {
         $c = new \Eco\EcoBundle\Entity\eleve();
         
         
         
        
      
         
      $f = $this->createFormBuilder($c)
->add('nom','text',array('label' => 'Nom '))
->add('prenom','text',array('label' => 'Prenom : '))
->add('genre','text',array('label' => 'Genre : '))
->add('nom_tuteur','text',array('label' => 'Nom Tuteur : '))
->add('adresse_tuteur','text',array('label' => 'Adresse Tuteur : '))
->add('tel_tuteur','text',array('label' => 'Téléphonne Tuteur :  '))
->add('email_tuteur','text',array('label' => 'E_mail : '))
->add('ville','text',array('label' => 'Ville '))
->add('profession_tuteur','text',array('label' => 'profession_tuteur '))
->getForm();
         $request = $this->container->get('request');
         
         $f->handleRequest($request)   ;
               if ($f->isValid())
               {           
                 $c->upload();

 $em = $this->container->get('doctrine')->getEntityManager();
 $em->persist($c);
 $em->flush();
               }
               
               
$clients = $this->getDoctrine()
               ->getRepository("Eco\EcoBundle\Entity\\eleve")
                ->findAll();
 return array('f'=>$f->createView(),'res'=>$clients);
     
        
        
        
        
   
    
    
     }
     
     
     
     
     
     
     
     
     
     
     
     
     
     
       public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\eleve',
        ));
    }

    public function getName()
    {
        return 'eleve';
    }

     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
      /**
     * @Route("/AddClasse/",name="AddClasse")
     * @Template()
     */
    
         public function AddClasseAction()
    {
        $client = new \Eco\EcoBundle\Entity\classe();
        $f = $this->createFormBuilder($client)
->add('Libelle_classe','text',array('label' => 'Libelle '))

->getForm();
          $request = $this->container->get('request');
         $f->handleRequest($request)   ;
               if ($f->isValid())
               {
 $em = $this->container->get('doctrine')->getEntityManager();
 $em->persist($client);
 $em->flush();
 
 
 
 
               }
               
               
               
 $clients = $this->getDoctrine()
               ->getRepository("\Eco\EcoBundle\Entity\classe")
                ->findAll();
 return array('f'=>$f->createView(),'res'=>$clients);
        
        

        
    }
    
    
    
     /**
     * @Route("/AddMatiere/",name="AddMat")
     * @Template()
     */
    public function AddMatiereAction()
    {$c = new \Eco\EcoBundle\Entity\matiere();
      $f = $this->createFormBuilder($c)
->add('Libelle_matiere','text',array('label' => 'Libelle_matiere '))



->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
               if ($f->isValid())
               {
 $em = $this->container->get('doctrine')->getEntityManager();
 $em->persist($c);
 $em->flush();
               }
               $clients = $this->getDoctrine()
               ->getRepository("\Eco\EcoBundle\Entity\matiere")
                ->findAll();
return array('f' => $f->createView(),'res'=>$clients);
     
        
        
        
        
        
        
    }
    
    /**
     * @Route("/AddProf/",name="addProf")
     * @Template()
     */
    public function AddProfAction()
    {   
          $c = new \Eco\EcoBundle\Entity\prof();
      $f = $this->createFormBuilder($c)
->add('libelle_prp','text',array('label' => 'Nom '))

->add('niveau','text',array('label' => 'Niveau : '))
  ->add('genre', 'choice', array('choices' => 
   array('M'=>'Masculin','F'=>'Femenin')),
   array('label' => 'Genre : '))



->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
               if ($f->isValid())
               {
 $em = $this->container->get('doctrine')->getEntityManager();
 $em->persist($c);
 $em->flush();
               }
               $clients = $this->getDoctrine()
               ->getRepository("Eco\EcoBundle\Entity\prof")
                ->findAll();
return array('f' => $f->createView(),'res'=>$clients);
        
        
    }
    
    
    
    /**
     * @Route("/EditClasse/{id}",name="Edit_classe")
     * @Template()
     */
    
    
    
      public function EditClasseAction($id)
    {
        $em =$this->container->get('doctrine')->getEntityManager() ;
        $client=$em->find('Eco\EcoBundle\Entity\classe',$id);
        $f=$this->createFormBuilder($client)
->add('Libelle_classe','text',array('label' => 'Libelle '))

->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
               if ($f->isValid())
               {
 $em = $this->container->get('doctrine')->getEntityManager();
 $classe=$em->find('Eco\EcoBundle\Entity\classe',$id);
 $em->persist($classe);
 $em->flush();
 
 
 
 
               }
               
               
               
 $classes = $this->getDoctrine()
               ->getRepository("Eco\EcoBundle\Entity\classe")
                ->findAll();
 return array('f'=>$f->createView(),'res'=>$classes);
        
        

    
    }
    
     /**
     * @Route("/DeleteClasse/{id}",name="supp_classe")
     * @Template()
     */
    
         public function DeleteClasseAction($id)
    {
        $client1 = new \Eco\EcoBundle\Entity\classe();
        $f = $this->createFormBuilder($client1)

->add('Libelle_classe','text',array('label' => 'Libelle '))

->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
             $em = $this->container->get('doctrine')->getEntityManager();
 $client=$em->find('Eco\EcoBundle\Entity\classe',$id);
 if(!$client)
 {
     $message="eereer";
 }
 else
 {
 
 $em->remove($client);
 $em->flush();
 $client=$this->getDoctrine()->getRepository("Eco\EcoBundle\Entity\classe")->findAll();
 return array('f'=>$f->createView(),'res'=>$client);
        
 }
    }
    
     /**
     * @Route("/listClasse",name="listClasse")
     * @Template()
     */
    
    public function listClasseAction()
    {
        $clients = $this->getDoctrine()
                ->getRepository("Eco\EcoBundle\Entity\classe")
                ->findAll();
                return array("res"=>$clients);
    }
    
    
    
    /**
     * @Route("/EditEleve/{id}",name="edit_etud")
     * @Template()
     */
    
    
    
      public function EditEleveAction($id)
    {
        $em =$this->container->get('doctrine')->getEntityManager() ;
        $eleve=$em->find('Eco\EcoBundle\Entity\\eleve',$id);
        $f=$this->createFormBuilder($eleve)
->add('nom','text',array('label' => 'Nom '))
->add('prenom','text',array('label' => 'Prenom : '))
->add('genre','text',array('label' => 'Genre : '))

->add('nom_tuteur','text',array('label' => 'Nom Tuteur : '))
->add('adresse_tuteur','text',array('label' => 'Adresse Tuteur : '))
->add('tel_tuteur','text',array('label' => 'Téléphonne Tuteur :  '))
->add('email_tuteur','text',array('label' => 'E_mail : '))
->add('ville','text',array('label' => 'Ville '))
->add('profession_tuteur','text',array('label' => 'profession_tuteur '))

->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
               if ($f->isValid())
               {
 $em = $this->container->get('doctrine')->getEntityManager();
 $eleve=$em->find('Eco\EcoBundle\Entity\\eleve',$id);
 $em->persist($eleve);
 $em->flush();
 
 
 
 
               }
               
               
               
 $eleves = $this->getDoctrine()
               ->getRepository("Eco\EcoBundle\Entity\\eleve")
                ->findAll();
 return array('f'=>$f->createView(),'ele'=>$eleves);
        
        

    }
    
    /**
     * @Route("/DeleteEleve/{id}",name="supp_etud")
     * @Template()
     */
    
         public function DeleteEleveAction($id)
    {
        $client1 = new \Eco\EcoBundle\Entity\eleve();
        $f = $this->createFormBuilder($client1)

->add('nom','text',array('label' => 'Nom '))
->add('prenom','text',array('label' => 'Prenom : '))
->add('genre','text',array('label' => 'Genre : '))

->add('nom_tuteur','text',array('label' => 'Nom Tuteur : '))
->add('adresse_tuteur','text',array('label' => 'Adresse Tuteur : '))
->add('tel_tuteur','text',array('label' => 'Téléphonne Tuteur :  '))
->add('email_tuteur','text',array('label' => 'E_mail : '))
->add('ville','text',array('label' => 'Ville '))
->add('profession_tuteur','text',array('label' => 'profession_tuteur '))

->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
             $em = $this->container->get('doctrine')->getEntityManager();
 $client=$em->find('Eco\EcoBundle\Entity\\eleve',$id);
 if(!$client)
 {
     $message="eereer";
 }
 else
 {
 
 $em->remove($client);
 $em->flush();
 $client=$this->getDoctrine()->getRepository("Eco\EcoBundle\Entity\\eleve")->findAll();
 return array('f'=>$f->createView(),'res'=>$client);
        
 }
    }
    
    /**
     * @Route("/EditProf/{id}",name="edit_prof")
     * @Template()
     */
    
    
    
      public function EditProfAction($id)
    {
        $em =$this->container->get('doctrine')->getEntityManager() ;
        $client=$em->find('Eco\EcoBundle\Entity\prof',$id);
        $f=$this->createFormBuilder($client)
->add('libelle_prp','text',array('label' => 'Nom '))

->add('niveau','text',array('label' => 'Niveau : '))
  ->add('genre', 'choice', array('choices' => 
   array('M'=>'Masculin','F'=>'Femenin')),
   array('label' => 'Genre : '))

->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
               if ($f->isValid())
               {
 $em = $this->container->get('doctrine')->getEntityManager();
 $pro=$em->find('Eco\EcoBundle\Entity\prof',$id);
 $em->persist($pro);
 $em->flush();
 
 
 
 
               }
               
               
               
 $profes = $this->getDoctrine()
               ->getRepository("Eco\EcoBundle\Entity\prof")
                ->findAll();
 return array('f'=>$f->createView(),'res'=>$profes);
        
        

    
    }
    
    
    
    /**
     * @Route("/DeleteProf/{id}",name="supp_prof")
     * @Template()
     */
    
         public function DeleteProfAction($id)
    {
        $client1 = new \Eco\EcoBundle\Entity\prof();
        $f = $this->createFormBuilder($client1)

->add('libelle_prp','text',array('label' => 'Nom '))

->add('niveau','text',array('label' => 'Niveau : '))
  ->add('genre', 'choice', array('choices' => 
   array('M'=>'Masculin','F'=>'Femenin')),
   array('label' => 'Genre : '))

->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
             $em = $this->container->get('doctrine')->getEntityManager();
 $client=$em->find('Eco\EcoBundle\Entity\prof',$id);
 if(!$client)
 {
     $message="eereer";
 }
 else
 {
 
 $em->remove($client);
 $em->flush();
 $client=$this->getDoctrine()->getRepository("Eco\EcoBundle\Entity\prof")->findAll();
 return array('f'=>$f->createView(),'res'=>$client);
        
 }
    }
    
    
    /**
     * @Route("/DeleteMatiere/{id}",name="supp_mat")
     * @Template()
     */
    
         public function DeleteMatiereAction($id)
    {
        $client1 = new \Eco\EcoBundle\Entity\matiere();
        $f = $this->createFormBuilder($client1)

->add('Libelle_matiere','text',array('label' => 'Libelle_matiere '))

->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
             $em = $this->container->get('doctrine')->getEntityManager();
 $client=$em->find('Eco\EcoBundle\Entity\matiere',$id);
 if(!$client)
 {
     $message="eereer";
 }
 else
 {
 
 $em->remove($client);
 $em->flush();
 $client=$this->getDoctrine()->getRepository("Eco\EcoBundle\Entity\matiere")->findAll();
 return array('f'=>$f->createView(),'res'=>$client);
        
 }
    }
    
    /**
     * @Route("/EditMatiere/{id}",name="edit_mat")
     * @Template()
     */
    
    
    
      public function EditMatiereAction($id)
    {
        $em =$this->container->get('doctrine')->getEntityManager() ;
        $client=$em->find('Eco\EcoBundle\Entity\matiere',$id);
        $f=$this->createFormBuilder($client)
->add('Libelle_matiere','text',array('label' => 'Libelle_matiere '))

->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
               if ($f->isValid())
               {
 $em = $this->container->get('doctrine')->getEntityManager();
 $matiere=$em->find('Eco\EcoBundle\Entity\matiere',$id);
 $em->persist($matiere);
 $em->flush();
 
 
 
 
               }
               
               
               
 $matieres = $this->getDoctrine()
               ->getRepository("Eco\EcoBundle\Entity\matiere")
                ->findAll();
 return array('f'=>$f->createView(),'res'=>$matieres);
        
        

    
        
        

    
    }
    
    /**
     * @Route("/AddInscri/",name="AddInscri")
     * @Template()
     */
    public function AddInscriAction()
    {
         $c = new \Eco\EcoBundle\Entity\inscri();
      $f = $this->createFormBuilder($c)
->add('Date_Inscri','date',array('label' => 'Date : '))
->add('Id_Etudiant','text',array('label' => 'Prenom : '))
->add('Id_Classe','text',array('label' => 'Genre : '))

    ->add('Reglement', 'choice', array('choices' => 
   array('E'=>'Espece','C'=>'Cheque')),
   array('label' => 'Reglement : '))          
              
              
 ->add('Observation','text',array('label' => 'Observation : '))
 ->add('Montant','text',array('label' => 'Montant : '))
 ->add('NumPiece','text',array('label' => 'Num Piece : '))
 ->add('Echance','text',array('label' => 'Echeance : '))

->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
               if ($f->isValid())
               {
 $em = $this->container->get('doctrine')->getEntityManager();
 $em->persist($c);
 $em->flush();
               }
               
               
$clients = $this->getDoctrine()
               ->getRepository("Eco\EcoBundle\Entity\inscri")
                ->findAll();
 return array('f'=>$f->createView(),'res'=>$clients);
     
        
        
        
        
   
    
    
     }
    /**
     * @Route("/EditInscri/{id}",name="edit_insc")
     * @Template()
     */
    
    
    
      public function EditInscriAction($id)
    {
        $em =$this->container->get('doctrine')->getEntityManager() ;
        $client=$em->find('Eco\EcoBundle\Entity\inscri',$id);
        $f=$this->createFormBuilder($client)
->add('Date_Inscri','date',array('label' => 'Date : '))
->add('Id_Etudiant','text',array('label' => 'Prenom : '))
->add('Id_Classe','text',array('label' => 'Genre : '))

    ->add('Reglement', 'choice', array('choices' => 
   array('E'=>'Espece','C'=>'Cheque')),
   array('label' => 'Reglement : '))          
              
              
 ->add('Observation','text',array('label' => 'Observation : '))
 ->add('Montant','text',array('label' => 'Montant : '))
 ->add('NumPiece','text',array('label' => 'Num Piece : '))
 ->add('Echance','text',array('label' => 'Echeance : '))
           

->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
               if ($f->isValid())
               {
 $em = $this->container->get('doctrine')->getEntityManager();
 $client=$em->find('Eco\EcoBundle\Entiy\inscri',$id);
 $em->persist($client);
 $em->flush();
 
 
 
 
               }
               
               
               
 $clients = $this->getDoctrine()
               ->getRepository("Eco\EcoBundle\Entity\inscri")
                ->findAll();
 return array('f'=>$f->createView(),'res'=>$clients);
        
        

    
    }
    
     /**
     * @Route("/DeleteInscri/{id}",name="supp_insc")
     * @Template()
     */
    
         public function DeleteInscriAction($id)
    {
        $client1 = new \Eco\EcoBundle\Entity\inscri();
        $f = $this->createFormBuilder($client1)

->add('Date_Inscri','date',array('label' => 'Date : '))
->add('Id_Etudiant','text',array('label' => 'Prenom : '))
->add('Id_Classe','text',array('label' => 'Genre : '))

    ->add('Reglement', 'choice', array('choices' => 
   array('E'=>'Espece','C'=>'Cheque')),
   array('label' => 'Reglement : '))          
              
              
 ->add('Observation','text',array('label' => 'Observation : '))
 ->add('Montant','text',array('label' => 'Montant : '))
 ->add('NumPiece','text',array('label' => 'Num Piece : '))
 ->add('Echance','text',array('label' => 'Echeance : '))
           

->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
             $em = $this->container->get('doctrine')->getEntityManager();
 $client=$em->find('Eco\EcoBundle\Entity\inscri',$id);
 if(!$client)
 {
     $message="eereer";
 }
 else
 {
 
 $em->remove($client);
 $em->flush();
 $client=$this->getDoctrine()->getRepository("Eco\EcoBundle\Entity\inscri")->findAll();
 return array('f'=>$f->createView(),'res'=>$client);
        
 }
    }
  
    
     /**
     * @Route("/AddReglementEtudiant/",name="AddRegEtud")
     * @Template()
     */
    public function AddReglementEtudiantAction()
    {
         $c = new \Eco\EcoBundle\Entity\RegEtudiant();
      $f = $this->createFormBuilder($c)
->add('dateReg','date',array('label' => 'Date : '))
->add('Matricule','text',array('label' => 'Id_Etudiant : '))
->add('Annee','text',array('label' => 'Annee : '))

    ->add('mois', 'choice', array('choices' => 
   array('J'=>'Janvier','F'=>'Février','M'=>'Mars','A'=>'Avril','M'=>'Mai','U'=>'Juin','w'=>'Juillet','A'=>'Aout','S'=>'Septembre','O'=>'October','N'=>'Novembre','D'=>'Decembre')),
   array('label' => 'Mois : '))          
              
              
 ->add('trimestre', 'choice', array('choices' => 
   array('E'=>'1','C'=>'2','B'=>'3')),
   array('label' => 'Trimestre : '))    
 

->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
               if ($f->isValid())
               {
 $em = $this->container->get('doctrine')->getEntityManager();
 $em->persist($c);
 $em->flush();
               }
               
               
$clients = $this->getDoctrine()
               ->getRepository("\Eco\EcoBundle\Entity\RegEtudiant")
                ->findAll();
 return array('f'=>$f->createView(),'res'=>$clients);
     
        
        
        
        
   
    
    
     }
   
     /**
     * @Route("/EditReglementEtudiant/{id}",name="edit_regE")
     * @Template()
     */
    
    
    
      public function EditReglementEtudiantAction($id)
    {
        $em =$this->container->get('doctrine')->getEntityManager() ;
        $client=$em->find('\Eco\EcoBundle\Entity\RegEtudiant',$id);
        $f=$this->createFormBuilder($client)
->add('dateReg','date',array('label' => 'Date : '))
->add('Matricule','text',array('label' => 'Matricule : '))
->add('Annee','text',array('label' => 'Annee : '))

    ->add('mois', 'choice', array('choices' => 
   array('J'=>'Janvier','F'=>'Février','M'=>'Mars','A'=>'Avril','M'=>'Mai','U'=>'Juin','w'=>'Juillet','A'=>'Aout','S'=>'Septembre','O'=>'October','N'=>'Novembre','D'=>'Decembre')),
   array('label' => 'Mois : '))          
              
              
 ->add('trimestre', 'choice', array('choices' => 
   array('E'=>'1','C'=>'2','B'=>'3')),
   array('label' => 'Trimestre : '))    
 
           

->getForm();
        $request = $this->container->get('request');
         $f->handleRequest($request)   ;
               if ($f->isValid())
               {
 $em = $this->container->get('doctrine')->getEntityManager();
 $client=$em->find('Eco\EcoBundle\Entity\RegEtudiant',$id);
 $em->persist($client);
 $em->flush();
 
 
 
 
               }
               
               
               
 $clients = $this->getDoctrine()
               ->getRepository("\Eco\EcoBundle\Entity\RegEtudiant")
                ->findAll();
 return array('f'=>$f->createView(),'res'=>$clients);
        
        

    
    }
    
    /**
     * @Route("/DeleteReglementEtudiant/{id}",name="supp_regE")
     * @Template()
     */
    
         public function DeleteReglementEtudiantAction($id)
    {
        $client1 = new \Eco\EcoBundle\Entity\RegEtudiant();
        $f = $this->createFormBuilder($client1)

->add('dateReg','date',array('label' => 'Date : '))
->add('Matricule','text',array('label' => 'Matricule : '))
->add('Annee','text',array('label' => 'Annee : '))

    ->add('mois', 'choice', array('choices' => 
   array('J'=>'Janvier','F'=>'Février','M'=>'Mars','A'=>'Avril','M'=>'Mai','U'=>'Juin','w'=>'Juillet','A'=>'Aout','S'=>'Septembre','O'=>'October','N'=>'Novembre','D'=>'Decembre')),
   array('label' => 'Mois : '))          
              
              
 ->add('trimestre', 'choice', array('choices' => 
   array('E'=>'1','C'=>'2','B'=>'3')),
   array('label' => 'Trimestre : '))    
 

->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
             $em = $this->container->get('doctrine')->getEntityManager();
 $client=$em->find('Eco\EcoBundle\Entity\RegEtudiant',$id);
 if(!$client)
 {
     $message="eereer";
 }
 else
 {
 
 $em->remove($client);
 $em->flush();
 $client=$this->getDoctrine()->getRepository("Eco\EcoBundle\Entity\RegEtudiant")->findAll();
 return array('f'=>$f->createView(),'res'=>$client);
        
 }
 
  
    
    
    
    }
    /**
     * @Route("/AddReglementProf/",name="AddRegPro")
     * @Template()
     */
    public function AddReglementProfAction()
    {
         $c = new \Eco\EcoBundle\Entity\RegPro();
      $f = $this->createFormBuilder($c)
->add('dateReg','date',array('label' => 'Date : '))
->add('matricule','text',array('label' => 'Matricule : '))
->add('annee','text',array('label' => 'Annee : '))

    ->add('mois', 'choice', array('choices' => 
   array('J'=>'Janvier','F'=>'Février','M'=>'Mars','A'=>'Avril','M'=>'Mai','U'=>'Juin','w'=>'Juillet','A'=>'Aout','S'=>'Septembre','O'=>'October','N'=>'Novembre','D'=>'Decembre')),
   array('label' => 'Mois : '))          
 
 ->add('nbrHeur','integer',array('label' => 'Nombre des heures : '))
 ->add('taux','integer',array('label' => 'Taux Horaire : '))
             
   ->add('numCheque','integer',array('label' =>' Numero Cheque : ')) 
    ->add('montant','hidden',array('label' => 'Montant : '))


->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
       
               if ($f->isValid())
               {
                   
         //               $nb = $f["nbrHeur"]->getData();    
         //      $ta = $f["taux"]->getData();   
       //        $jdid = $ta * $nb ;
       //        $f->get('montant')->setData($jdid);
              


 $em = $this->container->get('doctrine')->getEntityManager();
 $em->persist($c);
 $em->flush();
               }
               
               
$clients = $this->getDoctrine()
               ->getRepository("\Eco\EcoBundle\Entity\RegPro")
                ->findAll();
 return array('f'=>$f->createView(),'res'=>$clients);
     
        
        
        
        
   
    
    
     }
     
     /**
     * @Route("/EditReglementProf/{id}",name="edit_regP")
     * @Template()
     */
    
    
    
      public function EditReglementProfAction($id)
    {
        $em =$this->container->get('doctrine')->getEntityManager() ;
        $client=$em->find('\Eco\EcoBundle\Entity\RegPro',$id);
        $f=$this->createFormBuilder($client)
->add('dateReg','date',array('label' => 'Date : '))
->add('matricule','text',array('label' => 'Id_Etudiant : '))
->add('annee','text',array('label' => 'Annee : '))

    ->add('mois', 'choice', array('choices' => 
   array('J'=>'Janvier','F'=>'Février','M'=>'Mars','A'=>'Avril','M'=>'Mai','U'=>'Juin','w'=>'Juillet','A'=>'Aout','S'=>'Septembre','O'=>'October','N'=>'Novembre','D'=>'Decembre')),
   array('label' => 'Mois : '))          
 
 ->add('nbrHeur','integer',array('label' => 'Nombre des heures : '))
 ->add('taux','integer',array('label' => 'Taux Horaire : '))
             
   ->add('numCheque','integer',array('label' =>' Numero Cheque : ')) 
 ->add('montant','integer',array('label' => 'Montant : '))
  
 
           

->getForm();
        $request = $this->container->get('request');
         $f->handleRequest($request)   ;
               if ($f->isValid())
               {
 $em = $this->container->get('doctrine')->getEntityManager();
 $client=$em->find('Eco\EcoBundle\Entity\RegPro',$id);
 $em->persist($client);
 $em->flush();
 
 
 
 
               }
               
               
               
 $clients = $this->getDoctrine()
               ->getRepository("\Eco\EcoBundle\Entity\RegPro")
                ->findAll();
 return array('f'=>$f->createView(),'res'=>$clients);
        
        

    
    }
   /**
     * @Route("/DeleteReglementProf/{id}",name="supp_regP")
     * @Template()
     */
    
         public function DeleteReglementProfAction($id)
    {
        $client1 = new \Eco\EcoBundle\Entity\RegPro();
        $f = $this->createFormBuilder($client1)

->add('dateReg','date',array('label' => 'Date : '))
->add('matricule','text',array('label' => 'Id_Etudiant : '))
->add('annee','text',array('label' => 'Annee : '))

    ->add('mois', 'choice', array('choices' => 
   array('J'=>'Janvier','F'=>'Février','M'=>'Mars','A'=>'Avril','M'=>'Mai','U'=>'Juin','w'=>'Juillet','A'=>'Aout','S'=>'Septembre','O'=>'October','N'=>'Novembre','D'=>'Decembre')),
   array('label' => 'Mois : '))          
 
 ->add('nbrHeur','text',array('label' => 'Nombre des heures : '))
 ->add('taux','text',array('label' => 'Taux Horaire : '))
             
   ->add('numCheque','text',array('label' =>' Numero Cheque : ')) 
 ->add('montant','text',array('label' => 'Montant : '))
  
 

->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request)   ;
             $em = $this->container->get('doctrine')->getEntityManager();
 $client=$em->find('Eco\EcoBundle\Entity\RegPro',$id);
 if(!$client)
 {
     $message="eereer";
 }
 else
 {
 
 $em->remove($client);
 $em->flush();
 $client=$this->getDoctrine()->getRepository("Eco\EcoBundle\Entity\RegPro")->findAll();
 return array('f'=>$f->createView(),'res'=>$client);
        
 }
 
  
    
    
    
    }
    }