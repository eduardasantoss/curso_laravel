# Curso Laravel
Curso de Introdução ao framework PHP Laravel. Nesse curso eu aprendi na prática os principais conceitos desse Framework. Desenvolvi um CRUD completo com o Laravel na sua versão 8.83.Instalei e configurei um projeto com Laravel, trabalhei com Rotas do Laravel, implementei com Blade, trabalhei com Migrações, criei registros com Tinker e Implementei um sistema de Login com Laravel.

``` bash
# Clonar 
git clone git@github.com:eduardasantoss/curso_laravel.git

# Acessar
cd curso_laravel

# Configurar variáveis de ambiente
cp .env.example .env

```
## Configuração - Backend

``` bash
# Instalar dependências do projeto
composer install

# Criar chave para aplicação
php artisan key:generate

# Criar migrations (tabelas e Seeders)
php artisan migrate --seed

```

## Acessar aplicação
``` bash
# No terminal:
php artisan serve

# No navegador:
http://localhost:8000
```
