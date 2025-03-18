# Use uma imagem PHP oficial com Apache
FROM php:8.0-apache

# Habilite o mod_rewrite do Apache para garantir que URLs amigáveis funcionem
RUN a2enmod rewrite

# Defina o diretório de trabalho para a pasta onde o código está
WORKDIR /var/www/html

# Copie o código para o contêiner
COPY . /var/www/html/

# Exponha a porta 80, onde o Apache vai rodar
EXPOSE 80

# O Apache serve automaticamente arquivos PHP em /var/www/html
CMD ["apache2-foreground"]
