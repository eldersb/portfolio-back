# API Portfolio - BackEnd

## Descrição do projeto
Trata-se de uma api restful que gerencia os projetos do meu portfolio.

* Front-end: https://github.com/eldersb/portfolio-front
* Deploy: https://portfolio-elder.vercel.app
* API: https://portfolio-elder-back.vercel.app/api/api/projects

> [!NOTE]  
> Teve um bug no deploy que ficou /api/api.

## Tecnologias Utilizadas 
* Laravel
* MySQL
* Banco Remoto: Freehostia
* Cloudinary (armazenamento de imagens)

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

**URL Base:**  `https://portifolio-back-tfji.vercel.app/api/api`

```
1 - Listar todos os projetos 
    * Método: `GET` 
    * Rota: `/projects` 
    * Descrição: Retorna uma lista de todos os projetos existentes. 
```
```
2 - Listar todos os projetos 
    * Método: `POST` 
    * Rota: `/projects`
    * Descrição: Cria um novo projeto. 
```

> [!IMPORTANT]
>  É necessário enviar os dados do projeto no body(corpo da requisição).
    
> Exemplo de requisição POST no Postman:
![print-postman-adicionar-projeto](https://github.com/user-attachments/assets/2cc4a744-ba6a-46bf-bcc5-f6cc8afa5958)

```
3 - Mostrar um projeto específico pelo ID 
    * Método: `GET`
    * Rota: `/projects/id` 
    * Descrição: Recupera as informações de um projeto específico cujo id foi passado. 
```  
```
4 - Atualizar um projeto específico pelo ID 
    * Método: `ATUALIZAR` 
    * Rota: `/projects/id` 
    * Descrição: Atualiza um projeto específico baseado no id passado. Os dados a serem atualizados também devem ser passados no body(corpo da requisição).
```
```   
5 - Deletar um projeto específico pelo ID 
    * Método: `DELETE` 
    * Rota: `/projects/id` 
    * Descrição: Deleta um projeto específico baseado no id passado.
```
