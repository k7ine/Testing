#!/bin/bash

# Gama de colores
green="\e[0;32m\033[1m"
end="\033[0m\e[0m"
red="\e[0;31m\033[1m"
blue="\e[0;34m\033[1m"
yellow="\e[0;33m\033[1m"
purple="\e[0;35m\033[1m"
turquoise="\e[0;36m\033[1m"
gray="\e[0;37m\033[1m"

# Ejemplo de color: echo -e "\n\n${yellow}[*]${end}${gray} Exiting...\n${end}"

# Este script crea copias de seguridad

echo -e "\n${green}[+] Bienvenido al script de copias de seguridad\n${end}"
tput civis;

sleep 2s

# Bucle para copiar todos los archivos almacenados en pepe
while IFS= read -r lectura; do

    # Lo que quiero copiar y donde lo quiero copiar:
    sudo cp /etc/script_copias/${lectura} /etc/script_copias/copiasDeSeguridad/${lectura}bkup.txt  > /dev/null 2>&1

    # Comprobación de que ha funcionado correctamente:

    # El $? se utiliza para comprobar como fué el ultimo comando

    if [[ $? == 0 ]];
    then
        sleep 1s
        echo -e "\n${turquoise}[+] Copiado el archivo ${lectura} con éxito!\n${end}" 
    else
        sleep 1s
        echo -e "\n${red}[!] Error al realizar la copia del archivo ${lectura}!\n${end}" 
    fi

done < /etc/script_copias/origen.txt

tput cnorm;

