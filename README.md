Para que o sistema funcione:

Após clonar o repositorio rode os comandos: 
composer install

crie o banco de dados com o nome: yooperchallenge

verifique se os dados de conexão no arquivo .env estão corretos

rode os comandos: 

php artisan migrate 

php artisan db:seed --class=UserSeeder
 
php artisan db:seed --class=servicesSeeder
 

agora no banco de datos ja tera todas as tabelas e os serviços para o formulario cadastrados
também ja terá registrado 1 usuario para login com username = yooper e senha = yooper

IMPORTANTE

caso o arquivo .env não apareça, terá um arquivo .env.example apenas retire o .example para que fique apenas .env e atualize os dados de conexão com o banco de dados
