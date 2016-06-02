<?php

$base = '/api/projects';

$app->get($base, function($request, $response, $args){

  // $token = new Token();
  // $token->setFromRequest($request);
  //
  // if(!$token->verify()) {
  //   $response = $response->withStatus(401);
  //   return $response;
  // }
  //
  // if($token->getUser()->id) {
  //   $gardenDAO = new GardenDAO();
  //   $data = array();
  //   $data['gardens'] = $gardenDAO->selectAllByUserId($token->getUser()->id);
  // } else {
  //   $response = $response->withStatus(403);
  //   return $response;
  // }

  $projectDAO = new ProjectDAO();
  $data = array();
  $data['projects'] = $projectDAO -> selectAll();

  $response->getBody()->write(json_encode($data));
  return $response->withHeader('Content-Type','application/json');

});

$app->get($base . '/{id}', function($request, $response, $args){

  // $token = new Token();
  // $token->setFromRequest($request);
  //
  // if(!$token->verify()) {
  //   $response = $response->withStatus(401);
  //   return $response;
  // }
  //
  // if($token->getUser()->id) {
  //   $gardenDAO = new GardenDAO();
  //   $data = array();
  //   $data['gardens'] = $gardenDAO->selectAllByUserId($token->getUser()->id);
  // } else {
  //   $response = $response->withStatus(403);
  //   return $response;
  // }

  $projectDAO = new ProjectDAO();
  $data = array();
  $data['rooms'] = $projectDAO -> selectById($args['id']);

  $response->getBody()->write(json_encode($data));
  return $response->withHeader('Content-Type','application/json');

});