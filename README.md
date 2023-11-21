# Conversor quilômetros e Anos-luz.
_Projeto para processo seletivo Netcon Americas._

Neste site temos um conversor de Quilômetros para Anos-luz e Anos-luz para Quilômetros. 

## Como executar:

Para executar, basta ter o Php instalado, baixar o repositório e iniciar um web server local com o seguinte comando:

ˋ php -S localhost:8000 ˋ

Para acessar, basta seguir até o endereço http://localhost:8000 e adicionar o caminho até a pasta onde baixou o repositório. 

## Como usar:

Para usar você deve digitar o valor no campo da operação desejada e clicar em “Converter” para receber o resultado. 

## Detalhes do funcionamento do código:

No código Php é feito algumas validações. Primeiro é validado qual o campo que foi preenchido (Kms ou Anos-luz), depois é checado se o valor inserido é maior ou igual a 1 e se é um valor numérico. 

Após essas checagens, caso retorne valor positivo, é feita a conversão do valor inserido e a exibição do valor convertido. Já caso retorne valor negativo, é exibido uma mensagem solicitando a inserção de um valor válido.
