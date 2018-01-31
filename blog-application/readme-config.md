# Docker with Laravel

### Insert the version and download the laravel
```curl -L https://github.com/laravel/laravel/archive/v____.tar.gz | tar xz ```

### Rename folder 

```mv v____ my-site```

### Install dependencies

```docker run --rm -v $(pwd):/app composer/composer install```

### Create docker-compose file


### Config error 

```
sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache
```

_in case of error_

```chmod 777 ./storage ``` 


### App key and optimize

```
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan optimize
```

---

[Tutorial Base](https://medium.com/@shakyShane/laravel-docker-part-1-setup-for-development-e3daaefaf3c)
