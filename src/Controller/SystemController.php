<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
use Cake\Utility\Text;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SystemController extends AppController
{
    public function isAuthorized()
    {
        //$action = $this->request->getParam('action');

        if($user['category'] == 3){
            return true;
        } 
        // Par défaut, on refuse l'accès.
        return true;
    }    

    public function initialize()
    {
        parent::initialize();
		$this->Auth->allow(['check15Days']);
    }
    
    
    public function index()
    {
        //$users = $this->paginate($this->Users);
        //$this->set(compact('users'));
		
		
		
    }
	
	public function check15Days(){
		$this->loadModel('companies');
		$this->loadModel('updated_companies');
		
		//debug($this->paginate($this->updated_companies)); //retourne array avec list id companies + days
		$companies = $this->paginate($this->companies);		
		$updated_companies = $this->paginate($this->updated_companies);		
		//debug($companies);
		
		foreach ($companies as $companie){
			
			$pasdejala = true;
			
			foreach ($updated_companies as $updated_companie){
				if ($companie->id === $updated_companie->companies_id) {
					
					$pasdejala = false;
					
					if ($updated_companie->days_not_updated == -1) {
					
						continue;
					
					}	else if ($updated_companie->days_not_updated == 16) {
						
						continue;
						
					}	else if ($updated_companie->days_not_updated == 15) {
						
						$email = new Email('tinstage');
						$email->setTo($companie->email)->setSubject('Mise à jour requise de vos informations')->send("Bonjour,\n\nNous souhaitons vous rappeler pour la dernière fois que vous devez mettre à jour vos informations de milieu de stage. \nDans 15 jours, faute de les avoir mises à jour, votre le milieu de stage sera considéré inactif dans notre système.\n\nAu plaisir de vous revoir.\n\nCeci est un message automatisé. Veuillez ne pas y répondre. Prenez contact avec le coordonnateur de stage pour toute question.");
						
					}
					$updated_days_count = $updated_companie->days_not_updated + 1;
					debug($updated_days_count);
					
					$Updated = TableRegistry::get('updated_companies');
					$_companies = $Updated->get($updated_companie->id);

					$_companies->days_not_updated = $updated_days_count;
					$Updated->save($_companies);
					
				}	
			}
			
			if ($pasdejala) {
				$Updated = TableRegistry::get('updated_companies');
				$_companies = $Updated->newEntity();

				$_companies->companies_id = $companie->id;
				$_companies->days_not_updated = 0;
				
				$Updated->save($_companies);
				
				$email = new Email('tinstage');
				$email->setTo($companie->email)->setSubject('Mise à jour requise de vos informations')->send("Bonjour,\n\nNous souhaitons vous informer que nous sommes actuellement en période de stage. Si vous souhaitez participer, veuillez mettre à jour vos informations.\n\nAu plaisir de vous revoir.\n\nCeci est un message automatisé. Veuillez ne pas y répondre. Prenez contact avec le coordonnateur de stage pour toute question.");
			}	
		}
		
		
		
		
	}

    
    


    
}
