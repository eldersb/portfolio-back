# API Portfolio - BackEnd

## Descrição do projeto
Trata-se de uma api restful que gerencia os projetos do meu portfolio.

## Tecnologias Utilizadas 
* Laravel
* MySQL

## Endpoints
* Modelo JSON:
```  
{
  "title": "Titulo do projeto",
  "description": "Descrição do projeto",
  "technologies": "Tecnologias presentes no projeto",
  "linkCode": "github.com/abcd",
  "linkDeploy": "projetoABCD.com",
  "image": "enviar a imagem no body, onde a aplicação realiza o tratamento e retorna a caminho",
}
```
## Métodos e Rotas
1 - Listar todos os projetos <br>
    * **Método:** GET <br>
    * **Rota:** <br>
    * **Descrição:** Retorna uma lista de todos os projetos existentes. <br>
2 - Listar todos os projetos
    * **Método:** POST
    * **Rota:**
    * **Descrição**: Cria um novo projeto. 

> [!IMPORTANT]
>  É necessário enviar os dados do projeto no body(corpo da requisição).
    
> Exemplo de requisição POST no Postman:
![print-postman-adicionar-projeto](https://github.com/user-attachments/assets/2cc4a744-ba6a-46bf-bcc5-f6cc8afa5958)


3 - Mostrar um projeto específico pelo ID
    * **Método:** GET
    * **Rota:**
    * **Descrição:** Recupera as informações de um projeto específico cujo id foi passado.

4 - Atualizar um projeto específico pelo ID
    * **Método:** ATUALIZAR
    * **Rota:** 
    * **Descrição:** Atualiza um projeto específico baseado no id passado. Os dados a serem atualizados também devem ser passados no body(corpo da requisição).

5 - Deletar um projeto específico pelo ID
    * **Método:** DELETE
    * **Rota:**
    * **Descrição:** Deleta um projeto específico baseado no id passado.
