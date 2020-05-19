# Instalação


### Navegue até o diretório raíz da sua instalação do Magento 2 e siga os seguintes passos:
1.  Extraia o módulo para que fique conforme o caminho /app/code/**Dn/Testimonial/**
2. Execute os comandos:
    -   `php bin/magento setup:upgrade`
    -   `php bin/magento setup:static-content:deploy`  ou  `php bin/magento setup:static-content:deploy pt_BR`, de acordo com as configurações da sua loja.
3.  Cheque e, caso necessário, configure as permissões corretas para seus diretórios. Por exemplo, para configrar a permissão 777 para as pastas var/ pub/ execute:
    -   `chmod 777 -R var/ pub/`
4.  Pode ser necessário atualizar o cache da sua loja ao finalizar o processo.
5.  Acesse a seção de Conteúdo através da interface administrativa da sua loja e cadastre os depoimentos.
6. Após cadastrar, basta criar um Widget e chamar os Depoimentos na página desejada.
