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

4. Caso queira preencher o banco com dados de teste, use o [Seeder](https://laravel.com/docs/11.x/seeding).
```sh
docker compose exec web php artisan db:seed
```

5. Entre no site pela url `localhost:5000`

6. Para desligar o servidor, use o comando abaixo:
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
# 

## Seeders
Um Seeder serve para preencher o banco com dados de teste. Para criar um seeder, comece com o comando `make:seeder`
```sh
php artisan make:seeder ExemploSeeder
```

Com seu Seeder criado, entre nele em `database/seeders` e preencha o método run.
```php
use App\Models\Exemplo;

class ExemploSeeder extends Seeder {
    public function run(): void
    {
        Exemplo::create([
            'id_exemplo' => 1,
            'teste' => 'dado de teste'
        ]);
    }
}
```

Caso o seu modelo não tenha os timestamps, não esqueça de especificar isso na classe Model.
```php
class Exemplo extends Model {
    use HasFactory;
    public $table = 'exemplo'; // define o nome da tabela
    protected $fillable = ['id_exemplo', 'teste']; // define quais campos serao preenchidos
    public $timestamps = false; // define que a tabela nao possui as colunas created_at e updated_at
}
```
#

## Autenticação
1. Para criar um sistema de autenticação, crie sua página de login.
No seu formulário, é necessaria a tag `@csrf` para que seja gerado um token de segurança para essa requisição.
```php
<form action="{{ route('/') }}" method="POST">
    @csrf
    <label for="login">Login:</label>
    <input type="text" id="login" name="email"><br>
    <label for="password">Senha:</label>
    <input type="password" id="password" name="password">
    <input type="submit" value="Entrar">
</form>
```

2. No controller, valide seu código com
[Validations](https://laravel.com/docs/11.x/validation#quick-writing-the-validation-logic).
Caso tudo esteja certo, tente um login com `Auth::attempt`.
```php
$request->validate([
    'email' => ['required', 'email'],
    'password' => ['required'],
]);

// Tenta autenticar
if (Auth::attempt($request->only('email', 'password'))) {
    // Autenticação foi um sucesso
    return redirect()->intended(route('dashboard'));
}

// Autenticação falhou
```

3. Confirme se o usuário está autenticado com a função `Auth::check()`.
Isso é importante para rotas que só podem ser acessadas depois do login.

4. Com o usuário autenticado, acesse suas informações com `Auth::user()`.
#

## Middleware
Caso queira, crie regras para suas rotas usando [Middlewares](https://laravel.com/docs/11.x/middleware#introduction).
1. rode o comando `php artisan make:middleware ExemploMiddleware`

2. dentro do arquivo, coloque sua regra no método `handle`.
```php
class ExemploMiddleware
{
    /**
     * Lida com a requisição.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // redireciona usuários não autenticados
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // segue para a página planejada
        return $next($request);
    }
}
```

3. na sua rota, inclua seu middleware nas rotas desejadas.
```php
// coloca em rotas individuais
Route::get('/exemplo1', [ExemploController::class, 'index'])->middleware(ExemploMiddleware::class);

// coloca em um grupo de rotas
Route::middleware(EnsureIsAuthenticated::class)->group(function() {
    Route::get('/exemplo2/rota1', [ExemploController::class, 'rota1']);
    Route::get('/exemplo2/rota2', [ExemploController::class, 'rota2']);
});
```
