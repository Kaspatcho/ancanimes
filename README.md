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

1. Crie a [Migration](https://laravel.com/docs/11.x/migrations#main-content).
```sh
docker compose exec web php artisan make:migration create_exemplo_table
```

2. Edite o ultimo arquivo gerado em `database/migrations`, criando nele a estrutura da sua tabela.
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

3. Crie o model
```sh
php artisan make:model Exemplo
```
vai criar um arquivo em `app/Models/Exemplo.php`

4. Crie o Controller
```sh
php artisan make:controller ExemploController
```
vai criar um arquivo em `app/Http/Controllers/Exemplo.php`

5. Defina as rotas.
abra `routes/web.php` e insira suas rotas.
```php
use App\Http\Controllers\ExemploController;
Route::get('/exemplo', [ExemploController::class, 'index']);
```

6. Crie uma view em `resources/views` e crie um arquivo para a rota *index*.
```sh
mkdir resources/views/exemplo
touch resources/views/exemplo/index.blade.php
```
