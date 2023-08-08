<?php

namespace App\Interfaces;

use CodeIgniter\Model;

interface HasMedia {
  public function media(): Model;
  public function addMediaFromRequest($field): self;
  
  /**
   * add media to collection with custom name
   * @param string $collectionName
   * @return $this
	 * @throws ValidationException
	 */
  public function toMediaCollection(string $collectionName = 'default'): self;
  public function findWithMedia(string $id);
  public function getCollection(string $collectionName = 'default', bool $return_result = false);
  public function clearMediaCollection(string $collectionName = 'default');
  public function getMedia(string $collectionName = 'default');
  public function getFirstMedia();
  public function getFirstMediaUrl();
  public function of(string $id);
  public function asTemp(bool $is_api_request = false);
}