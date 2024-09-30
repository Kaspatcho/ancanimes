# Ancanimes
site de animes com [Laravel](https://laravel.com/), MySQL e Docker.

## Instalação
Passos para instalação:
1. Copie o arquivo `.env.example` em um arquivo `.env`.

2. Rode o comando abaixo para iniciar seu container:
```sh
docker compose up --build -d
```

3. crie a migration com o comando abaixo:
```sh
docker compose exec web php artisan migrate
```

4. Entre no site pela url `localhost:5000`

5. Para desligar o servidor, use o comando abaixo:
```sh
docker compose down
```

#

## Exemplo de um fluxo básico de programação.
Em caso de duvida, acesse a [Documentação do Laravel](https://laravel.com/docs/11.x/).

### Passo 1
Crie uma [Migration](https://laravel.com/docs/11.x/migrations#main-content).
```sh
docker compose exec web php artisan make:migration create_exemplo_table
```
# 

### Passo 2
Edite o último arquivo gerado em `database/migrations`, criando nele a estrutura da sua tabela.

**Exemplo**
```php
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exemplo', function (Blueprint $table) {
            $table->integer('id_exemplo')->primary(); // int primary key
            $table->string('teste', 20); // varchar(20)
            $table->timestamps(); // created_at e updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categoria_anime');
    }
};
```
#

### Passo 3
Crie um model.
```sh
php artisan make:model Exemplo
```
o arquivo será gerado em `app/Models/Exemplo.php` para edição.

É onde você coloca informações sobre a tabela usando o [ORM](https://laravel.com/docs/11.x/eloquent) do Laravel.
#

### Passo 4
Crie um Controller
```sh
php artisan make:controller ExemploController
```
O arquivo será gerado em `app/Http/Controllers/Exemplo.php` para edição.

Nele você cria métodos para cada rota, seguindo o
[padrão MVC](https://pt.wikipedia.org/wiki/MVC).
#

### Passo 5
Abra `routes/web.php` e insira suas rotas.
```php
use App\Http\Controllers\ExemploController;
Route::get('/exemplo', [ExemploController::class, 'index']); // função Controllers/Exemplo::index
```
#

### Passo 6
Crie um arquivo em `resources/views`. O arquivo é um [Blade Template](https://laravel.com/docs/11.x/blade).
```sh
mkdir resources/views/exemplo
touch resources/views/exemplo/index.blade.php
```
