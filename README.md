
# Gerenciamento de Dependências com PHP

Uiltilização do mPDF biblioteca em PHP que gera arquivos PDF a partir de HTML codificado em UTF-8.

# Requisitos
Versões e extensões do PHP

Versões e extensões do PHP
PHP >=5.6 <7.3.0é suportado paramPDF >= 7.0
PHP 7.3é suportado desdemPDF v7.1.7
PHP 7.4é suportado desdemPDF v8.0.4
PHP 8.0é suportado desdemPDF v8.0.10
PHP 8.1é suportado a partir demPDF v8.0.13
PHP 8.2é suportado a partir demPDF v8.1.3
PHP 8.3é suportado a partir demPDF v8.2.1

# Uso
O uso mais simples (desde a versão 7.0) da biblioteca seria o seguinte:

```bash
<?php

require_once __DIR__ . '/vendor/autoload.php' ;

$ mpdf = new \ Mpdf \ Mpdf ();
 $ mpdf -> WriteHTML ( '<h1>Olá, mundo!</h1>' );
 $ mpdf -> Output ();
 ```

 # Instalação e configuração
Todas as diretivas de configuração podem ser definidas pelo $configparâmetro do construtor.

É recomendado definir seu próprio diretório temporário via tempDirvariável de configuração. O diretório deve ter permissões de gravação (modo 775é recomendado) para usuários que usam mPDF (tipicamente cli, webserver, fpm).

Aviso: o mPDF limpará arquivos temporários antigos no diretório temporário. Escolha um caminho dedicado somente ao mPDF.

```bash
<?php

$ mpdf = novo \ Mpdf \ Mpdf ([ 'tempDir' => __DIR__ . '/tmp' ]);
 ```

Por padrão, o diretório temporário estará dentro do diretório do fornecedor e terá permissões de gravação do post_installscript do compositor.

Para obter mais informações sobre o diretório temporário personalizado, consulte a nota sobre Pasta para arquivos temporários na seção Instalação e configuração do manual .
