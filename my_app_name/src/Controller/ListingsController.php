<?php

namespace App\Controller;

use App\Controller\AppController;

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
    $query = $this->Listings->find();
    $query->select(['ListingsId','Name','Price']);
    $query->where(['ListingsId',$id]);

    foreach ($query as $listing) {
      $this->set('listingName', $listing->Name);
      $this->set('listingPrice', $listing->Price);
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
   * @post Set an array for results. Each result should be an array containing strings for listingName, listingShortDescription, listingImage.
   */
  public function search($query, $category)
  {
    
  }

}

