### Alunos: Alison Gustavo Valli, Julia Furtado Polycarpo  
### Turma: 2ºC1  

# Exercício 1 - Pergunta conceitual.
## Explique a diferença entre cookies e sesions no PHP.  

Cookies e sessions no PHP são mecanismos usados para armazenar dados entre diferentes acessos feitos pelo usuário em um site. A principal diferença entre eles está no local onde essas informações são guardadas. Os cookies são armazenados diretamente no navegador do usuário, podendo ter um tempo de expiração definido e permanecer mesmo após o fechamendo do site. Já as sessions são armazenadas no servidor, enquanto o navegador guarda apenas um identificador único (ID da sessão), que permite acessar esses dados posteriormente. Em relação à segurança, as sessions são consideradas mais seguras, pois as informações não ficam expostas ao usuário, ao contrário dos cookies, que podem ser acessados, modificados ou até apagados.
<hr>

# Exercício 2 - Pergunta de aplicação.
## Imagine que você está desenvolvendo um sistema de loja virtual. Explique como cookies e sessions poderiam ser utilizados para manter o usuário logado, armazenar itens temporários no carrinho, registrar preferências do usuário. Justifique suas escolhas.

Em um sistema de loja virtual, cookies e sessions podem ser usados de forma complementar para melhorar a segurança e a experiência do usuário. Para manter o usuário logado, o mais indicado é utilizar sessions, pois os dados ficam armazenados no servidor, o que diminui os riscos de acesso indevido. Para o carrinho de compras, as sessions também são mais indicadas, já que os itens podem mudar durante a navegação e precisam ser atualizados com frequência. Já os cookies são mais indicados para guardar preferências do usuário, como idioma, tema do site ou algumas configurações. Além disso, os cookies permitem que essas preferências continuem salvas mesmo depois que o usuário sai do site, o que melhora a experiência da navegação. Dessa forma, o uso de cookies e sessions juntos permitem um melhor funcionamento do site, mantendo a segurança dos dados importantes enquanto oferece praticidade para o usuário.


<hr>

# Exercício 3 — Pergunta de investigação
## O que aconteceu em cada etapa? Por que o cookie não aparece imediatamente na primeira execução?  

Quando a página do código fornecido é acessada pela primeira vez, a mensagem "Cookie ainda não disponível" é exibida. Isso ocorre porque o cookie não é criado e lido simultaneamente. Ao usar o `setcookie()`, o PHP envia uma instruçáo ao navegador para criar um cookie, mas ele ainda não pode ser acessado, pois só passsa a existir após o navegador receber e salvar essa informação.  
Portanto, na primeiro acesso, o cookie ainda não está disponível para ser lido, o que resulta na mensagem indicando que ele ainda não existe. Quando a página é atualizada, o navegador já terá salvo o cookie e o envia de volta para o servidor, permitindo que o PHP acesse o valor por meio do `$_COOKIE` e mostre ele na tela.  
Assim, cada etapa corresponde ao envio, armazenamento e retorno do cookie. O motivo de ele não aparecer de imediato é justamente porque só pode ser lido no próximo carregamento da página.

<hr>

# Exercício 4 — Pergunta de reflexão  
## Por que sessions são geralmente preferidas para autenticação de usuários em sistemas web?

As sessions são preferidas na maioria das vezes para autenticação pois são mais seguras do que usar só os cookies. Isso acontece porque, nas sessions, os dados do usuário ficam no servidor, enquanto no navegador fica apenas um identificador da sessão. Já nos cookies, as informações ficam salvas no próprio navegador, o que torna mais fácil que esses dados sejam visualizados ou até alterados.  
Quanto à segurança, as sessions são mais confiáveis pois as informações importantes não ficam no computador do usuário. Na manipulação de dados, também é uma vantagem, já que os dados não podem ser alterados diretamente pelo navegador. E utilizando apenas cookies, existe o risco de modificação das informações, o que causa problemas de segurança e acesso indevido.  
Por isso, as session são geralmente usadas em sistemas de login, porque armazenam os dados no servidor e deixam no navegador apenas o necessário para identificar o usuário, tornando o processo mais seguro.

<hr>

# Referências

Funcionamento dos cookies: https://www.php.net/manual/pt_BR/features.cookies.php
Funcionamento das sessions: https://www.php.net/manual/pt_BR/book.session.php
Como setcookie funciona: https://www.php.net/manual/en/function.setcookie.php  
Processos do Cookie no navegador: https://m.php.cn/en/faq/1796718637.html  
Sessions/Armazenamento no navegador: https://www.php.net/manual/en/book.session.php  
Cookies/Armazenamento no navegador: https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Cookies  
Riscos de segurança por cookies e sessions: https://owasp.org/www-community/Session_Management
