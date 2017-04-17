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
        $query = $this->Listings->find();
        $query->where(['ListingsId' => $id]);

        foreach ($query as $listing){
          $this->set('listingName', $listing->TITLE);
          $this->set('listingPrice', $listing->PRICE);
          $this->set('listingDescription',$listing->DESCRIPTION);
          $this->set('listingImage',$listing->PICTURE);
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

        if ($category == 'All Categories')
        {
            $queryResults = $this->Listings->find()->where(['Title LIKE' => "%$query%"]);  // Query methods can also be chained!
        }
        else
        {
            $queryResults = $this->Listings->find()->where(['Title LIKE' => "%$query%", 'Category' => $category]);
        }
    
        $results = array();
        foreach ($queryResults as $result){
          $results[] = ['listingName' => $result->TITLE, 'listingShortDescription' => '', 'listingImage' => $result->THUMBNAILS, 'listingPrice' => $result->PRICE, 'listingID' => $result->LISTINGSID];
        }
        $this->set('results',$results);
        $this->render();
    }
}
