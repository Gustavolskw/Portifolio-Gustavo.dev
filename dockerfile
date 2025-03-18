# Use a imagem oficial do PHP com Apache
FROM php:8.0-apache

# Habilite o mod_rewrite do Apache
RUN a2enmod rewrite

# Copie o conteúdo do projeto para o diretório do Apache
COPY . /var/www/html/

# Defina o diretório de trabalho
WORKDIR /var/www/html

# Exponha a porta 80 (porta padrão do Apache)
EXPOSE 80

# Inicie o Apache
CMD ["apache2-foreground"]
