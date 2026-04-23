#!/bin/bash
# Este script procura palavras "perigosas" no teu código
echo "--- A iniciar scan de segurança do Tomás ---"
grep -rn "password" .
grep -rn "eval(" .
grep -rn "SELECT * FROM" .
echo "--- Scan terminado. Verifica os resultados acima! ---"
