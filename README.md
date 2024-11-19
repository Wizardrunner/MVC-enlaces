# 📚 MVC Enlaces

[![PHP](https://img.shields.io/badge/PHP-7.4%2B-blue?logo=php&logoColor=white)](https://www.php.net/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5-blueviolet?logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-orange?logo=mysql&logoColor=white)](https://www.mysql.com/)
[![License](https://img.shields.io/badge/license-MIT-green)](LICENSE)

Este proyecto es una aplicación sencilla de gestión de enlaces utilizando un patrón **MVC (Modelo-Vista-Controlador)**. Permite realizar búsquedas en una base de datos MySQL basada en categorías, lenguajes de programación y palabras clave en los títulos de los enlaces.

---

## 🚀 Características

- **Filtros de Búsqueda**:
  - 🔍 **Por Categorías**
  - 💻 **Por Lenguajes de Programación**
  - 📝 **Por palabras en los títulos**
- **Vista Dinámica**: Integrada con Bootstrap para un diseño limpio y adaptable.
- **Fácil Configuración**: Listo para usar con XAMPP o cualquier servidor PHP local.

---

## 📁 Estructura del Proyecto

```plaintext
/project-root
├── /assets
│   └── styles.css            # Estilos personalizados
├── /controllers
│   ├── Router.php            # Sistema de enrutamiento
│   └── PreguntasController.php # Controlador para búsquedas
├── /models
│   └── ModelBBDD.php         # Clase para manejar la conexión a la base de datos
├── /views
│   ├── preguntas.php         # Formulario de búsqueda
│   ├── respuesta.php         # Resultados de búsqueda
│   ├── header.php            # Encabezado (Navbar)
│   └── footer.php            # Pie de página
└── index.php                 # Punto de entrada principal

---

## 🛠️ Configuración y Uso
### 1️⃣ Clonar el Repositorio
```bash
git clone https://github.com/Wizardrunner/MVC-enlaces.git
cd MVC-enlaces
### 2️⃣ Configurar la Base de Datos
Crea una base de datos llamada enlaces en tu servidor MySQL.
Importa el archivo crear_vista.sql para configurar las tablas y la vista.
### 3️⃣ Configurar el Proyecto
Asegúrate de que los datos de conexión en ModelBBDD.php sean correctos:

```php
private $host = 'localhost';
private $dbname = 'enlaces';
private $user = 'root';
private $password = '';
### 4️⃣ Iniciar el Servidor
Utiliza PHP para iniciar el servidor local:
```php
php -S localhost:8000

Accede a la aplicación en: http://localhost:8000.

## 🧑‍💻 Cómo Funciona
Formulario de Búsqueda
Elige un filtro (Categoría, Lenguaje de Programación o Título).
Ingresa tu término de búsqueda.
Haz clic en Buscar y observa los resultados.
Ejemplo:
Filtro: Lenguaje de Programación
Búsqueda: PHP
Resultados: Muestra los enlaces asociados a categorías del tipo LENGUAJE que coincidan con "PHP".

## 🌟 Tecnologías Utilizadas
PHP: Backend y lógica de negocio.
MySQL: Base de datos para almacenar categorías y enlaces.
Bootstrap 5: Para un diseño moderno y adaptable.
MVC: Estructura clara y escalable.
## 🤝 Contribuciones
¡Las contribuciones son bienvenidas! Por favor, crea un fork de este repositorio y abre un pull request con tus mejoras.

## 📜 Licencia
Este proyecto está licenciado bajo la MIT License.