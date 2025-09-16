# To-Do List PHP

Um projeto simples de lista de tarefas (To-Do List) feito em PHP puro, utilizando PDO para acesso ao MySQL. Permite cadastrar, listar e apagar tarefas, com validação de formulário e interface amigável.

---

## Funcionalidades

- Cadastro de tarefas com nome e descrição
- Listagem de todas as tarefas em tabela
- Seleção e exclusão de múltiplas tarefas
- Validação de campos obrigatórios
- Feedback de erros no formulário

---

## Requisitos

- PHP 7.4 ou superior
- MySQL/MariaDB
- Navegador web
- Opcional: XAMPP, WAMP, Laragon ou outro ambiente local

---

## Instalação

1. **Clone o repositório:**
   ```sh
   git clone https://github.com/seuusuario/to-do_list.git
   cd to-do_list
   ```

2. **Crie o banco de dados e a tabela:**

   No terminal, acesse o MySQL e execute:

   ```sql
   CREATE DATABASE todo_list;
   USE todo_list;
   CREATE TABLE task (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       description TEXT NOT NULL
   );
   ```

   Ou, se preferir, salve o conteúdo acima em um arquivo `dump.sql` e rode:

   ```sh
   mysql -u root -p < dump.sql
   ```

3. **Configure o acesso ao banco:**

   No arquivo  
   `/database/Conexao.php`  
   ajuste usuário e senha conforme seu ambiente:

   ```php
   return new PDO("mysql:host=localhost;dbname=todo_list", 'root', 'SUA_SENHA');
   ```

---

## Como rodar

### Usando o servidor embutido do PHP

No terminal, dentro da pasta do projeto:

```sh
php -S localhost:8000 -t pages
```

Acesse [http://localhost:8000/pages/form.php](http://localhost:8000/pages/form.php) no navegador.

### Usando XAMPP, WAMP, Laragon, etc

- Coloque a pasta do projeto dentro do diretório `htdocs` (XAMPP) ou `www` (WAMP).
- Acesse via navegador:  
  `http://localhost/to-do_list/pages/form.php`

---

## Estrutura de Pastas

```
to-do_list/
│
├── classes/
│   ├── form_tratament.php
│   └── task_control.php
│
├── database/
│   └── Conexao.php
│
├── pages/
│   ├── form.php
│   ├── tasks.php
│   ├── tratament_form.php
│   └── delete_tasks.php
│
├── css/
│   ├── form.css
│   └── tasks.css
│
├── js/
│   └── tasks.js
│
└── README.md
```

---

## Observações

- O projeto pode ser facilmente adaptado para outros ambientes PHP.
- O CSS e JS podem ser personalizados conforme sua necessidade.
- Para dúvidas ou sugestões, abra uma issue ou envie um pull request.

---

**Divirta-se organizando suas tarefas!!**
