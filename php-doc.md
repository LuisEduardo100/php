# Documentando com PHPDoc

## Documentar suas funções com a devida explicação sobre ela é um boa prática quando você desenvolve projetos em equipe, uma vez que nós não escrevemos código para nós entedermos, e sim para outras pessoas conseguirem ler e entender o mais fácil possível.

```PHP
  /**
   * Gera uma string de saudação
   *
   * @param string $nome Nome da pessoa
   * @param string $sobrenome Sobrenome da pessoa
   * @param int $idade Idade da pessoa
   *
   * @return string Saudação
   */
  function saudacao(string $nome, string $sobrenome, int $idade): string {
    return "Olá, {$nome} {$sobrenome}! Você tem {$idade} anos.";
  }
```
