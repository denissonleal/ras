#!/bin/bash

git clone https://github.com/laboratoriobridge/esusab-integracao storage/esusab || true

layouts=(
	'layout-camada-transport'
	'layout-ras'
)

mapped_directories=(
	'transport'
	'cds'
)

size=$((${#layouts[@]}))

for (( i=0; i<$size; i++ ))
do
	for FILE in storage/esusab/thrift/${layouts[$i]}/thrift/*.thrift
	do
		thrift -o src/${mapped_directories[$i]} --gen php $FILE
	done
done
