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
   * @post Set a string for listingName, listingDescription, listingImage.
   */
  public function view($id)
  {
    //Do stuff.
  }

  /**
   * Action for searching for a listing.
   *
   * @param query The text to search for.
   * @param category The category to search in.
   *
   * @post Set an array for results. Each result should be an array containing strings for listingName, listingShortDescription, listingImage.
   */
  public function search($query, $category)
  {
    //Do stuff.
  }

}

