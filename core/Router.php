<?php
  namespace Core;

  class Router {
    public string $path = '/string';

    public function run(): string {
      return var_export($this->path);
    }
  }