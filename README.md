# API RAS

## O que é?

A estrutura RAS (Registro de Atendimento Simplificado) é baseada em um conjunto mínimo de informações em saúde coletadas pelos Sistemas PEC e CDS, e deverá ser adotada como processo padrão para transmissão dos dados ao Sistema de Informação em Saúde para a Atenção Básica (SISAB).


## Instalação

Coloque no `composer.json`:

``` js
"denissonleal/ras": "v0.1.x"
```

depois rode o `composer update`


## Como usar

A base do projeto é:
``` php
$path = base_path('vendor/denissonleal/ras/2.1');
```

Inclua no seu projeto apenas quando for usar. Exemplo:
``` php
require_once "$path/thrift/ClassLoader/ThriftClassLoader.php";
```

Exemplo completo:

``` php
$path = base_path('vendor/denissonleal/ras/2.1');
$path_fichas = "$path/cds/gen-php/br/gov/saude/esusab/ras";
$path_common = "$path/transport/gen-php/br/gov/saude/esusab/dadotransp";

require_once "$path/thrift/ClassLoader/ThriftClassLoader.php";
require_once "$path/thrift/Type/TType.php";
require_once "$path/thrift/Type/TMessageType.php";
require_once "$path/thrift/Transport/TTransport.php";
require_once "$path/thrift/Transport/TMemoryBuffer.php";
require_once "$path/thrift/Transport/TBufferedTransport.php";
require_once "$path/thrift/Protocol/TProtocol.php";
require_once "$path/thrift/StringFunc/TStringFunc.php";
require_once "$path/thrift/StringFunc/Core.php";
require_once "$path/thrift/Factory/TStringFuncFactory.php";
require_once "$path/thrift/Protocol/TBinaryProtocol.php";
require_once "$path/thrift/Protocol/TBinaryProtocolAccelerated.php";
require_once "$path/thrift/Serializer/TBinarySerializer.php";
require_once "$path/thrift/Exception/TException.php";
require_once "$path/thrift/Exception/TProtocolException.php";

/* Importacao das Commons */
require_once "$path_fichas/common/Types.php";
require_once "$path_common/Types.php";

/* Ficha de Cadastro Individual */
require_once "$path_fichas/cadastroindividual/Types.php";

/* Ficha de Cadastro Domiciliar */
require_once "$path_fichas/cadastrodomiciliar/Types.php";

/* Ficha de Visita Domiciliar */
require_once "$path_fichas/visitadomiciliar/Types.php";

/* Ficha de Atividade Coletiva */
require_once "$path_fichas/atividadecoletiva/Types.php";

/* Ficha de Marcadores de Consumo */
require_once "$path_fichas/consumoalimentar/Types.php";
```