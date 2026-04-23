# ✅ Checklist de Segurança para o Teu Primeiro Projeto

Antes de publicares o teu site ou app, verifica se cumpriste estes 5 pontos fundamentais. Se derdes "check" em todos, o teu código já é mais seguro que a maioria!

---

### 1. 🧼 Limpeza de Dados (Inputs)
- [ ] **Regra de Ouro:** Estou a tratar tudo o que o utilizador escreve como "perigoso"?
- [ ] Usei `Prepared Statements` em todas as minhas queries SQL? (Nada de concatenar variáveis com `$query = "..." . $variavel`).
- [ ] Estou a limpar o texto antes de o mostrar no ecrã para evitar scripts maliciosos (XSS)?

### 2. 🔑 Gestão de Passwords
- [ ] **Nunca** guardo passwords em texto limpo na base de dados?
- [ ] Estou a usar funções de "hashing" seguras (como `password_hash` no PHP ou `bcrypt` em Python/JS)?

### 3. 🚫 Acesso e Portas
- [ ] Verifiquei se um utilizador consegue aceder à conta de outro apenas mudando o ID no URL (ex: `perfil?id=10` para `id=11`)?
- [ ] Removi todos os utilizadores de "teste" ou "admin/admin" antes de publicar?

### 4. 📦 Peças de Lego (Dependências)
- [ ] Corri um comando de auditoria (como `npm audit` ou `composer audit`) para ver se as minhas bibliotecas têm falhas?
- [ ] Apaguei as bibliotecas que instalei mas que acabei por não usar?

### 5. 🕵️ Segredos Escondidos
- [ ] Verifiquei se não deixei passwords, chaves de API ou acessos à base de dados escritos diretamente no código?
- [ ] O meu ficheiro `.env` ou de configuração está no `.gitignore` para não ir para o GitHub?

---
> **Dica do Tomás:** "Segurança não é perfeição, é dificultar ao máximo a vida do atacante. Começa por aqui e já estarás a proteger os teus utilizadores!"
