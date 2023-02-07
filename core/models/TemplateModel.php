<?php

class TemplateModel extends Model
{
  public function executeQuery()
  {
    $query = "SELECT template role FROM templates";
    if ($statement = $this->dbInstance->prepare($query)) {
    } else {
      $this->result['message'] = 'Something went wrong. Please try again later.';
      return;
    }
    if ($statement->execute()) {
      $statement->store_result();
    }
  }
}
