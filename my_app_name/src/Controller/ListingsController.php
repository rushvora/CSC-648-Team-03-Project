<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Controller for listing.
 */
class ListingsController extends AppController
{

  /**
   * Action for viewing a listing.
   *
   * @param id The id of the listing to view.
   *
   * @post Set a string for listingName, listingDescription, listingImage, and listingPrice.
   */
  public function view($id)
  {
    $query = $this->Listings->find()->select(['listingsId','Name','Image','Price'])->where(['listingsId' => $id]);


    foreach ($query as $listing) {
      $this->set('listingName', $listing->Name);
      $this->set('listingPrice', $listing->Price);
      //$this->set('listingDescription',$listing->description);
      $this->set('listingDescription','Test Description');
      $this->set('listingImage','No Image');
      break;
    }
    $this->render();
  }

  /**
   * Action for searching for a listing.
   *
   * @param query The text to search for.
   * @param category The category to search in. (Not yet implemented.)
   *
   * @post Set an array for results. Each result should be an array containing strings for listingName, listingShortDescription, listingImage, listingPrice, and listingID.
   */
  public function search($query)
  {
    $queryResults = $this->Listings->find();
    $queryResults->select(['listingsId', 'Name', 'Image', 'Price']);
    $queryResults->where(['Name LIKE' => "%$query%"]);
    
    $results = array();
    foreach ($queryResults as $result) {
      $results[] = ['listingName' => $result->Name, 'listingShortDescription' => '', 'listingImage' => $result->Image, 'listingPrice' => $result->Price, 'listingID' => $result->listingsId];
    }
    $this->set('results',$results);
    $this->render();
  }

}

