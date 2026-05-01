# Contta - Sistema de Controle Financeiro

O **Contta** é uma aplicação web para gestão financeira pessoal, permitindo o controle de contas, categorias, extratos e orçamentos mensais de forma intuitiva.

## 🚀 Funcionalidades

- **Dashboard (Board):** Visão geral da saúde financeira com saldos do mês, acumulados e gerais.
- **Extratos Detalhados:** Visualização de transações com filtros por período, conta e categoria.
- **Gestão de Contas:** Cadastro e configuração de contas bancárias ou carteiras, com opção de ocultar saldos específicos.
- **Planejamento de Orçamento (Budget):** Tabela interativa para definir metas e acompanhar a execução financeira mensal. Possui edição rápida via duplo clique.
- **Configuração Inicial:** Assistente automatizado para criação do banco de dados e usuário administrador.
- **Interface Moderna:** Uso de modais dinâmicos, máscaras de valores em tempo real e seletores inteligentes.

## 🛠️ Tecnologias Utilizadas

- **Backend:** PHP (Conexão com PostgreSQL).
- **Banco de Dados:** PostgreSQL.
- **Frontend:** Vanilla JavaScript (ES6 Modules), HTML5, CSS3.
- **Bibliotecas Externas:**
  - [SweetAlert2](https://sweetalert2.github.io/): Para diálogos e notificações pop-up.
  - [Choices.js](https://github.com/Choices-js/Choices): Para campos de seleção com busca dinâmica.
  - [VMasker](https://github.com/vanilla-masker/vanilla-masker): Para formatação de campos monetários.

## 📋 Pré-requisitos

- Servidor Web (Ex: Apache ou Nginx).
- PHP 7.4 ou superior instalado.
- Instância do PostgreSQL ativa.

## 🔧 Configuração e Instalação

1. **Configuração do Banco de Dados:**
   O sistema utiliza variáveis de ambiente para conexão no arquivo `app/bd.php`. Certifique-se de configurar:
   - `DB_SERVER` (Endereço do host).
   - `DB_USER` (Usuário do banco).
   - `DB_PASSWORD` (Senha).
   - `DB_NAME` (Nome do banco de dados).

2. **Instalação Automatizada:**
   Ao acessar o projeto pela primeira vez através do navegador, o script de entrada (`main.js`) verificará a existência das tabelas. Caso não existam, você será redirecionado para o assistente em `/app/setup/setup.php`.

3. **Primeiro Usuário:**
   No setup, você definirá o usuário administrador e um **Código de Autorização**, que será exigido para cadastrar novos usuários futuramente.

## 💡 Dicas de Uso

- **Edição Rápida:** Na tabela de orçamento, clique duas vezes sobre um valor planejado para abrir o formulário de alteração.
- **Modo Privado:** Use o botão "Exibir/Ocultar" para mascarar valores sensíveis na tela inicial.
- **Transferências:** O sistema suporta registros de transferência entre contas, ajustando os saldos automaticamente.
