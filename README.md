# PickPlace :computer:

## O que é o PickPlace?

PickPlace é uma interface em que é possível armazenar informações em um banco de dados, disponíveis para posterior consulta.



## Como usar PickPlace?

Segue o passo a passo para a utilização da aplicação:

- É necessário ir até o arquivo **connection.php** e modificar os dados sobre o banco de dados no qual serão armazenados os dados através da edição do método construtor, modificando o host, o dbname, o username e o password.
- Utilizando o XAMPP, os dados padrão para o arquivo connection.php seriam "localhost", o nome do banco (opcional), "root" e "" (vazio).
- Utilizando o XAMPP, a URL da página de consulta de dados seria localhost/(nome do diretório)/index.php
- Na página de consulta, digitando o número de identificação de um produto, é possível obter mais dados sobre ele.
- Utilizando o XAMPP, a URL da página de gerenciamento de dados seria localhost/(nome do diretório)/place.php
- Na página de gerenciamento, é possível adicionar novos produtos e remover produtos já adicionados
- Ao adicionar dois produtos com o mesmo número de identificação, o mais antigo é automaticamente removido



## Como aplicar o sistema PickPlace no cotidiano?

PickPlace pode ser utilizado como base para sistemas de gerenciamento em que é necessário adicionar e remover dados em um banco de dados, podendo realizar consulta deles.