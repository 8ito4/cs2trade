# Marketplace CS2

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

## Sobre o Projeto

Este é um marketplace robusto desenvolvido com Laravel, voltado para o jogo Counter-Strike 2 (CS2). Ele permite que usuários comprem, vendam e gerenciem itens do jogo com segurança e eficiência. 

### Funcionalidades Principais

- Sistema de autenticação com diferentes níveis de acesso (roles).
- Gerenciamento completo de produtos e inventário.
- Sistema de carrinho e checkout.
- Integração com métodos de pagamento populares.
- Painel administrativo para gerenciamento de usuários, transações e relatórios.
- Notificações em tempo real.
- API para integração com outros sistemas.

## Requisitos

Antes de começar, certifique-se de ter os seguintes itens instalados:

- PHP >= 8.1
- Composer
- MySQL ou outro banco de dados suportado
- Node.js (para compilar assets front-end)

## Instalação

Siga os passos abaixo para configurar o projeto localmente:

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio
   ```

2. Instale as dependências do backend:
   ```bash
   composer install
   ```

3. Configure o arquivo `.env`:
   ```bash
   cp .env.example .env
   ```
   Configure as variáveis de ambiente no arquivo `.env` para corresponder à sua configuração local.

4. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

5. Configure o banco de dados e rode as migrações:
   ```bash
   php artisan migrate
   ```

6. Instale as dependências do front-end:
   ```bash
   npm install
   npm run dev
   ```

7. Inicie o servidor de desenvolvimento:
   ```bash
   php artisan serve
   ```
   O projeto estará disponível em `http://localhost:8000`.

## Como Contribuir

1. Faça um fork do repositório.
2. Crie uma branch para sua funcionalidade:
   ```bash
   git checkout -b minha-nova-funcionalidade
   ```
3. Faça suas alterações e commit:
   ```bash
   git commit -m "Adiciona nova funcionalidade"
   ```
4. Envie suas alterações:
   ```bash
   git push origin minha-nova-funcionalidade
   ```
5. Abra um pull request.

## Licença

Este projeto é licenciado sob a [MIT License](https://opensource.org/licenses/MIT).

---

**Nota**: Caso encontre problemas, fique à vontade para abrir uma issue ou contribuir com melhorias para o projeto.
