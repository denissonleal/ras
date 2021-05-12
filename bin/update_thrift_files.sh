#!/bin/bash

git clone https://github.com/laboratoriobridge/esusab-integracao storage/esusab

for FILE in storage/esusab/thrift/layout-ras/thrift/*.thrift
do
    thrift -o src/cds --gen php $FILE
done
