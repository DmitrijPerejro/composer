<?php
  namespace Core;

  class Router {
    public string $path = '/home';

    public function run(): string {
      return var_export($this->path);
    }
  }