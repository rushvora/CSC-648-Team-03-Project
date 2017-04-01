<!DOCTYPE html>
<html>
<head>
  <?php use Cake\Routing\Router; ?>
</head>
<body>
  <ul>
    <?php foreach ($results as $result): ?>
      <li> <a href=<?= Router::url(['controller' => 'Listings', 'action' => 'view', 'id' => $result['listingID']]); ?>> <img src="<?= $result['listingImage'] ?>"> <?= $result['listingName'] ?> </a>
    <?php endforeach; ?>
  </ul>
</body>
</html>
