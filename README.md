Pagamento-amigo-seguro
======================
Modulo de integrao AmigoSeguro para OpenCart
============================================
---
Descrição
---------
---
Com o módulo instalado e configurado, você pode pode oferecer o AmigoSeguro como opasso de pagamento em sua loja. O módulo utiliza as seguintes funcionalidades que o AmigoSeguro oferece na forma de APIs:

 - Integração com a [API de Pagamentos]
 - Integração com a [API de Notificações]


Requisitos
----------
---
 - [OpenCart] 1.5.5.1
 - [PHP] 5.1.6+
 - [SPL]
 - [cURL]
 - [DOM]


Instalação
----------
---
 - Certifique-se de que não a instalações de outros módulos para o AmigoSeguro em seu sistema;
 - Baixe o repositario como arquivo zip ou faça um clone;
 - Copie as pastas *admin* e *catalog* para dentro de sua instalação OpenCart. Caso seja informado da sobrescrita de alguns arquivos, você pode confirmar o procedimento sem problemas. Esta instalação não afetara nenhum arquivo do seu sistema, somente adicionara os arquivos do módulo AmigoSeguro;
 - Certifique-se de que as permissÃµes das pastas e arquivos recÃ©m copiados sejam, respectivamente, definidas como 755 e 644;
 - Na Area administrativa do seu sistema, acesse o menu Extensions -> Pagamentos -> AmigoSeguro -> Install.


Configuração
------------
---
Para acessar e configurar o módulo acesse o menu Extensions -> Pagamentos -> AmigoSeguro -> Edit. As opções disponÃ­veis estão descritas abaixo.

 - **ativar módulo**: ativa/desativa o módulo.
 - **ordem de exibição**: define a ordem em que o AmigoSeguro vai aparecer no checkout de sua loja.
 - **e-mail**: e-mail cadastrado no AmigoSeguro.
 - **token**: token gerado no AmigoSeguro.
 - **url de redirecionamento**: ao final do fluxo de pagamento no AmigoSeguro, seu cliente será redirecionado automaticamente para a página de confirmações em sua loja ou então para a URL que você informar neste campo. Para ativar o redirecionamento ao final do pagamento não preciso ativar o serviço de [Pagamentos via API]. Obs.: Esta URL não informada automaticamente e você não deve altera-la caso deseje que seus clientes sejam redirecionados para outro local.
 - **url de notificação**: sempre que uma transação mudar de status, o AmigoSeguro envia uma notificação para sua loja ou para a URL que você informar neste campo. Obs.: Esta URL não informada automaticamente e você não deve altera-la caso deseje receber as notificações em outro local.
 - **charset**: codificação do seu sistema (ISO-8859-1 ou UTF-8).
 - **log**: ativa/desativa a geraÃ§Ã£o de logs.
 - **diretório**: informe o local a partir da rai­z de instalação do osCommerce onde se deseja criar o arquivo de log. Ex.: /logs/ps.log. Caso não informe nada, o log será gravado dentro da pasta ../AmigoSeguroLibrary/AmigoSeguro.log.


Changelog
---------
---
1.0

 - Versão inicial. Integração com API de checkout e API de notificações.


Licença
-------
---
Copyright 2013 AmigoSeguro Internet LTDA.

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.


Notas
-----
---
 - O AmigoSeguro somente aceita pagamento utilizando a moeda Real brasileiro (BRL).
 - Certifique-se que o email e o token informados estejam relacionados a uma conta que possua o perfil de vendedor ou empresarial.
 - Certifique-se que tenha definido corretamente o charset de acordo com a codificação (ISO-8859-1 ou UTF-8) do seu sistema. Isso ira prevenir que as transações gerem possi­veis erros ou quebras ou ainda que caracteres especiais possam ser apresentados de maneira diferente do habitual.
 - Para que ocorra normalmente a geração de logs, certifique-se que o diretório e o arquivo de log tenham permissões de leitura e escrita.


[Duvidas?]
----------
---
Em caso de duvidas mande um e-mail para desenvolvedores@amigoseguro.com


Contribuições
-------------
---
Achou e corrigiu um bug ou tem alguma feature em mente e deseja contribuir?

* Faça um fork.
* Adicione sua feature ou correção de bug.
* Envie um pull request no [GitHub].


  [API de Pagamentos]: https://amigoseguro.com/v1/guia-de-integracao/api-de-pagamentos.html
  [API de NotificaÃ§Ãµes]: https://amigoseguro.com/v1/guia-de-integracao/api-de-notificacoes.html
  [DÃºvidas?]: https://amigoseguro.com/desenvolvedor/comunidade.jhtml
  [Pagamentos via API]: https://amigoseguro.com/integracao/pagamentos-via-api.jhtml
  [NotificaÃ§Ã£o de Transações]: https://amigoseguro.com/integracao/notificacao-de-transacoes.jhtml
  [OpenCart]: http://www.amigoseguro.com/
  [PHP]: http://www.php.net/
  [SPL]: http://php.net/manual/en/book.spl.php
  [cURL]: http://php.net/manual/en/book.curl.php
  [DOM]: http://php.net/manual/en/book.dom.php
  [GitHub]: https://github.com/amigoseguro/opencart
