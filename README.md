Sistema de Enquetes em Laravel

Projeto Full-Stack de um sistema de enquetes para demonstrar o padrão MVC no Laravel, relacionamentos 1:N (Eloquent), CRUD e estilização com Tailwind CSS.

## Visão Geral

Aqui está a aparência da aplicação rodando:

<img width="1202" height="877" alt="Captura de tela 2025-10-30 134443" src="https://github.com/user-attachments/assets/3960e15f-f5e1-4c3e-9b20-7b49cefcb137" />

<img width="1024" height="883" alt="Captura de tela 2025-10-30 134501" src="https://github.com/user-attachments/assets/b2147022-b3fc-4e06-80eb-ada34e654ef6" />

##  Funcionalidades

* Listagem de todas as enquetes disponíveis na página inicial.
* Visualização de uma enquete individual com suas opções.
* Sistema de votação que incrementa o contador de votos de uma opção.
* Exibição dos resultados em tempo real com barras de progresso (calculadas com base no total de votos).

---

##  Tecnologias Utilizadas

Este projeto foi construído 100% "do zero" (sem kits iniciais como Breeze ou Jetstream) para focar nos fundamentos do Laravel.

* **Backend:** PHP 8.2+, Laravel 11
* **Frontend:** Blade (Motor de template do Laravel)
* **Banco de Dados:** MySQL (gerenciado via XAMPP)
* **Estilização:** Tailwind CSS v3 (compilado com Vite.js)
* **Ferramentas:** Composer, NPM, Tinker (para popular o banco)

---

##  Como Rodar o Projeto

**Pré-requisitos:** [PHP](https://www.php.net/), [Composer](https://getcomposer.org/), [Node.js (npm)](https://nodejs.org/) e um servidor MySQL (como o [XAMPP](https://www.apachefriends.org/pt_br/index.html)).

1.  **Clone o repositório:**
    ```bash
    # ATUALIZE COM A URL DO SEU REPOSITÓRIO!
    git clone [https://github.com/SeuUsuario/pollmaster-laravel.git](https://github.com/SeuUsuario/pollmaster-laravel.git)
    cd pollmaster-laravel
    ```
    
2.  **Instale as dependências do PHP (Composer):**
    *(Isso baixa a pasta `vendor/` que o `.gitignore` pulou)*
    ```bash
    composer install
    ```
    
3.  **Instale as dependências do JS/Tailwind (NPM):**
    *(Isso baixa a pasta `node_modules/` que o `.gitignore` pulou)*
    ```bash
    npm install
    ```
    
4.  **Configure o Ambiente (`.env`):**
    * O arquivo `.env` (que contém senhas) não é enviado ao GitHub. Precisamos criá-lo a partir do exemplo:
    ```bash
    cp .env.example .env
    ```
    
5.  **Gere a Chave do App:**
    * Todo projeto Laravel precisa de uma chave de segurança única.
    ```bash
    php artisan key:generate
    ```
    
6.  **Configure o Banco de Dados:**
    * Ligue seu XAMPP e abra o `phpMyAdmin`.
    * Crie um novo banco de dados vazio chamado `pollmaster`.
    * Abra o arquivo `.env` (que você acabou de copiar) e edite as linhas do `DB_...` para:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_DATABASE=pollmaster
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    
7.  **Rode as Migrações (Crie as tabelas):**
    * Este comando vai ler os arquivos em `database/migrations` e criar as tabelas `polls` e `options` no seu banco `pollmaster`.
    ```bash
    php artisan migrate
    ```
    
8.  **(Opcional) Crie Dados de Teste (Tinker):**
    * Para popular o site, rode o Tinker:
    ```bash
    php artisan tinker
    ```
    * Dentro do Tinker, cole os comandos:
    ```php
    $poll = App\Models\Poll::create(['title' => 'Qual sua stack favorita?']);
    $poll->options()->create(['name' => 'Laravel (PHP)']);
    $poll->options()->create(['name' => 'FastAPI (Python) + React']);
    $poll->options()->create(['name' => 'Node.js (Express) + React']);
    exit
    ```
    
9.  **Rode os Servidores!**
    * Você precisa de **dois** terminais rodando ao mesmo tempo:
    
    * **Terminal 1 (Backend PHP):**
        ```bash
        php artisan serve
        ```
    
    * **Terminal 2 (Frontend CSS/Vite):**
        ```bash
        npm run dev
        ```
        
10. **Acesse:** Abra `http://127.0.0.1:8000` no seu navegador!
