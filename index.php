<?php

require 'vendor/autoload.php';

use Thrift\Type\TType;
use br\gov\saude\esusab\dadotransp\VersaoThrift;
use br\gov\saude\esusab\ras\atenddomiciliar\FichaAtendimentoDomiciliarChildThrift;

print_r(new TType);
print_r(new VersaoThrift);
print_r(new FichaAtendimentoDomiciliarChildThrift);
