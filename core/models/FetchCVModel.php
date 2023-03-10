<?php

class FetchCVModel extends Model
{
  public function loadParams($currentPage, $searchUsername, $filterRole)
  {
    $this->currentPage = $currentPage;
    $this->searchUsername = ($searchUsername == '') ? '%' : $searchUsername;
    $this->filterRole = ($filterRole == '') ? '%' : $filterRole;
  }

  public function executeQuery()
  {
    $IDs = [];
    $names = [];
    $owners = [];
    $query = "SELECT Name, cvID, users.username FROM templates LEFT JOIN users ON templates.UserID = users.id";
    if ($statement = $this->dbInstance->prepare($query)) {
    } else {
      $this->result['message'] = 'Something went wrong. Please try again later.';
      return;
    }
    if ($statement->execute()) {
      $statement->store_result();
      $statement->bind_result($name, $id, $owner);
      while ($statement->fetch()) {
        array_push($names, $name);
        array_push($IDs, $id);
        array_push($owners, $owner);
      }
      $this->result['data'] = [$names, $IDs, $owners];
      $this->result['message'] = 'OK';
    } else {
      $this->result['message'] = 'Something went wrong. Please try again later.';
      return;
    }
  }
}
