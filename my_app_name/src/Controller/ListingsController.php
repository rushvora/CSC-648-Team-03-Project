<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

/**
 * Controller for listing.
 */
class ListingsController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['view','search']);
		$this->loadComponent('Flash');
    }

    /**
     * Action for viewing a listing.
     *
     * @param id The id of the listing to view.
     *
     * @post Set a string for listingName, listingDescription, listingImage, and listingPrice.
     */
    public function view($id)
    {
        $query = $this->Listings->find();
        $query->where(['ListingsId' => $id]);

        foreach ($query as $listing){
          $this->set('listingName', $listing->TITLE);
          $this->set('listingPrice', $listing->PRICE);
          $this->set('listingDescription',$listing->DESCRIPTION);
          $this->set('listingImage',$listing->PICTURE);
		  $this->set('sellerName', $listing->SELLER);
		  $this->set('listingDate', $listing->DATEPOSTED);
          break;
        }
      $this->render(); 
    }

    /**
     * Action for posting a new listing to the site.
     *
     * @param userid The user who is uploading a new listing to the site.
     *
     * @post Add a new row to the database, containing details of the new listing. New listing should also show up in search, and on the site itself.
     */
    public function add($uid=null)
	{
		$uid = $this->Auth->user('USERID');
		$listing = $this->Listings->newEntity();
		$this->loadModel('Users');	
		$userName = $this->Users->find()->select(['USERNAME'])->where(['USERID LIKE' => "$uid"]);
		$listing->SELLER = $userName;
		if ($this->request->is('post')) 
		{
			$listing = $this->Listings->patchEntity($listing, $this->request->getData());	
			$listing->SHORTDESCRIPTION = preg_replace('/(.*?[?!.](?=\s|$)).*/', '\\1', $listing->DESCRIPTION);
			if ($this->Listings->save($listing))
			{
				$this->Flash->success(__('Your listing has been added.'));
				return $this->redirect(['action' => 'add']);
			}
			$this->Flash->error(__('Unable to add your listing.'));
		}
		$this->set('listing', $listing);
	}
	/**
	 * Action for showing listings by a user
	 *
	 * @param userid The user whose listings we want to show in the dashboard
	 *
	 * @post Set an array for results. Each result should be an array containing information required to show listings.
	 */
	public function myListings($uid=null)
	{
		$uid = $this->Auth->user('USERID');
		$this->loadModel('Users');
		$userName = $this->Users->find()->select(['USERNAME'])->where(['USERID LIKE' => "$uid"]);
		$listingsResults = $this->Listings->find()->where(['SELLER LIKE' => "$userName"]);

		$listingsResults = $listingsResults->toArray();
		$displayResults = array();
		foreach($listingsResults as $listingResult)
		{
			$displayResults[] = ['listingID' => $listingResult->LISTINGSID, 'listingName' => $listingResult->TITLE, 'listingShortDescription' => $listingResult->SHORTDESCRIPTION, 'listingImage' => $listingResult->PICTURE, 'listingPrice' => $listingResult->PRICE, 'listingCategory' => $listingResult->CATEGORY, 'listingDate' => $listingResult->DATEPOSTED];
		}
		$this->set('displayResults', $displayResults);
		$this->render();
	}	
		 
	
    /**
     * Action for searching for a listing.
     *
     * @param query The text to search for. Searches both the title and the description to find matching results
     * @param category The category to search in.	
     *
     * @post Set an array for results. Each result should be an array containing strings for listingName, listingShortDescription, listingImage, listingPrice, and listingID.
     */
    public function search()
    {
        if (array_key_exists('query',$_GET))
        {
            $query = htmlspecialchars(stripslashes($_GET['query']));
        }
        else    // This allows a category to be searched without a specific search term. (i.e. lists everything in the category.)
        {
            $query = '';
        }
        if (array_key_exists('category', $_GET))
        {
            $category = htmlspecialchars(stripslashes($_GET['category']));
        }
        else
        {
            $category = 'All Categories';
        }
        
        if (strlen($query) > 30) {
            $this->Flash->error('Please limit searches to 30 characters or less.');
            $results = [];
        }
        elseif (preg_match('/[^A-z0-9\s\.]/',$query)) {    // Look for any character that is not alphanumeric ('A-z0-9'), whitespace ('\s'), or a period ('/.')
            $this->Flash->error('Please limit searches to alphanumeric characters (letters and numbers), spaces, and periods.');
            $results = [];
        }
        else {
            if ($category == 'All Categories')
            {
                $queryResults = $this->Listings->find()->where(['Title LIKE' => "%$query%"])->orWhere(['Description LIKE' => "%$query%"]);  // Query methods can also be chained! Added search with description
            }
            else
            {
                $queryResults = $this->Listings->find()->where(['Title LIKE' => "%$query%", 'Category' => $category])->orWhere(['Description LIKE' => "%$query%", 'Category' => $category]); //Search either title or description
            }

            $queryResults = $queryResults->toArray();
            if (count($queryResults) == 0) {
                $this->Flash->error('No Results found. Please try refining your search.');
                $queryResults = $this->Listings->find();
            }
        
            $results = array();
            foreach ($queryResults as $result){
              $results[] = ['listingName' => $result->TITLE, 'listingShortDescription' => $result->SHORTDESCRIPTION, 'listingImage' => $result->PICTURE, 'listingPrice' => $result->PRICE, 'listingID' => $result->LISTINGSID];
            }
        }
        $this->set('results',$results);
        $this->render();
    }
}
