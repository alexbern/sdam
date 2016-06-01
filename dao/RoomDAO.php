<?php

require_once WWW_ROOT . 'dao' . DS . 'DAO.php';

class RoomDAO extends DAO {

  public function selectAll() {
    $sql = "SELECT *
            FROM `sdam_rooms`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id) {
    $sql = "SELECT *
            FROM `sdam_rooms` where `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectByTag($q) {
    $sql = "SELECT *
            FROM `sdam_rooms` where `tags` LIKE '%$q%' ";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}