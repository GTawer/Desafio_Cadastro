# 🔐 Desafio 1 — Sistema de Verificação de Acesso com PHP

> *"Uma condição simples pode mudar o resultado de todo o sistema."*

![Status](https://img.shields.io/badge/Status-Concluído-brightgreen?style=for-the-badge&logo=github)
![Tecnologia](https://img.shields.io/badge/Tecnologia-PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Tema](https://img.shields.io/badge/Tema-Formulários%20e%20Condicionais-6C5CE7?style=for-the-badge&logo=github&logoColor=white)

## ◈ Descrição e objetivo

Este projeto foi desenvolvido como atividade acadêmica do curso **Técnico em Desenvolvimento de Sistemas — SENAI**, com foco na prática de conceitos básicos de **PHP**, formulários HTML e estruturas condicionais.

◆ Solicitar o **nome** e o **ano de nascimento** do usuário.

◆ Calcular a idade a partir do ano informado.

◆ Verificar se o usuário possui **18 anos ou mais**.

◆ Exibir uma mensagem de acesso permitido ou negado de acordo com a idade.

## 🔐 Funcionamento do sistema

O sistema segue uma lógica simples de validação:

    Usuário preenche o formulário
               ↓
    Nome + Ano de nascimento
               ↓
    Cálculo da idade
               ↓
          Idade >= 18?
            ↙       ↘
          SIM       NÃO
           ↓          ↓
    Acesso permitido  Acesso negado

## 🧠 Lógica aplicada

O processamento é realizado através do método `POST` e utiliza PHP para receber os dados do formulário.

    $nome = $_POST["nome"];
    $ano = (int)$_POST["ano"];

    $anoAtual = (int)date('Y');
    $idade = $anoAtual - $ano;

Depois disso, uma estrutura condicional verifica a idade:

    if ($idade >= 18) {
        // Acesso permitido
    } else {
        // Acesso negado
    }

## 📂 Detalhes do projeto

| Arquivo | Função |
|---|---|
| `5a_desafio1.php` | Página com formulário e lógica de verificação de idade |
| `log_acessos.txt` | Arquivo previsto pelo desafio para registrar acessos permitidos |

> **Observação:** o desafio solicita o salvamento dos dados em `log_acessos.txt`, porém a versão atual do código ainda não possui a etapa de gravação nesse arquivo.

## 🛠️ Tecnologias e ferramentas utilizadas

◆ **PHP** — processamento e lógica do sistema  
◆ **HTML5** — estrutura do formulário  
◆ **GitHub** — versionamento e publicação do projeto

## Conceitos praticados

◆ Formulários HTML com método `POST`  
◆ Variáveis em PHP  
◆ Conversão de valores com `(int)`  
◆ Função `date()`  
◆ Estruturas condicionais `if` e `else`  
◆ Operadores de comparação  
◆ Exibição de mensagens com `echo`

## 🖥️ Interface do projeto

A página apresenta um formulário simples para entrada dos dados necessários à validação da idade.

### Campos principais

- **Nome**
- **Ano de nascimento**
- **Botão de envio**

Após o envio, o sistema informa se o acesso foi **permitido** ou **negado**.

## Resultado esperado

### ✅ Usuário maior de idade

    Acesso permitido, [Nome]!

### ❌ Usuário menor de idade

    Acesso negado, [Nome]!

## 🎓 Atividade acadêmica

Esta atividade faz parte das aulas de **Programação Back-end** do curso **Técnico em Desenvolvimento de Sistemas** do **SENAI**.

O desafio proposto tem como objetivo colocar em prática conceitos fundamentais de **PHP**, utilizando um formulário para receber informações do usuário e uma estrutura condicional para determinar o resultado.

A atividade também introduz conceitos relacionados ao **processamento de dados enviados por formulários** e à criação de regras simples de validação em aplicações web.

---

## 👾 Autoria

- **Aluno:** Gabriel de Araujo Torres (Nº 08)
- **Disciplina:** Programação Back-end (PWBE) - `Desenvolvimento de Sistemas`
- **Atividade:** Desafio 1 — Verificação de Acesso
- **Data:** 15/09/2026

#### Projeto desenvolvido no SENAI A. Jacob Lafer.
---

<p align="center">
  <img src="https://media.tenor.com/2Xnh-2tG8pYAAAAi/scott-pilgrim-scott-pilgrim-takes-off.gif" width="275" height="auto" alt="Scott Pilgrim GIF" />
</p>


<div align="center">

[![GitHub](https://img.shields.io/badge/GitHub-GTawer-181717?style=for-the-badge&logo=github)](https://github.com/GTawer)

**🐘 PHP • Back-end • SENAI**

<sub>*Projeto acadêmico desenvolvido para prática de programação web.*</sub>

</div>
